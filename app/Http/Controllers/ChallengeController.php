<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
use \App\Http\Requests\ChallengeRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChallengeController extends Controller
{
    public function index()
    {
    	$challenges = \App\Challenge::paginate(5);
    	$data['title'] = 'Challenges';
    	$data['challenges'] = $challenges;
    	return view('admin.challenges.index',$data);
    }

    public function add()
    {


        $category = \App\Category::get()->pluck('title', 'id');

        $data['title'] = 'Add Challenge';

    	return view('admin.challenges.add-edit')->with('category',$category);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $result = (object) \App\Challenge::saveRecord($request);
        \Session::flash('type',$result->type);
    	\Session::flash('message',$result->message);
        return redirect('admin/challenges');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data['title'] = 'edit';
        $data['record'] = \App\Challenge::getRecord($slug);

        dd($data);
        return view('admin.challenges.add-edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

        $result = (object) \App\Challenge::updateRecord($request, $slug);
        \Session::flash('type',$result->type);
    	\Session::flash('message',$result->message);
        return redirect('admin/challenges');
    }


    public function saveRecord(Request $request)
    {
          $result = (object) \App\Challenge::saveRecord($request);
          return ['success' => 1, 'object'=>$result];
    }

    public function getList(Request $request)
    {
         $user = null;
         $userId = null;
         $type = 'all';
        if($request->has('userId'))
        {
            $userId = $request->userId;
            $user = \App\User::where('id','=',$userId)->first();
            $type = $request->recordsType;
        }

        if(!$user)
            $user = \Auth::user();

        // $challenges = \App\Challenge::with(['user','categories']);
        $challenges = null;
        if($type=='specific')
             $challenges = \App\Challenge::where('created_by','=',$userId)
                            ->with(['user','categories']);
        else
            $challenges = \App\Challenge::orderBy('created_at','desc')
                                        ->with(['user','categories']);

        $challenges = $challenges->paginate(5);
        $challenges = \App\Challenge::prepareAjaxData($challenges);
        return response()->json(['list'=>$challenges, 'user'=>\Auth::user()]);
        // return ['success'=>true, 'object'=>$challenges];
    }

    public function toggleLike(Request $request)
    {
        $user = \Auth::user();
        if(!$user)
        return ['success'=>0, 'message'=>'Please login to continue'];

        $challange = Challenge::findOrFail($request->input('item_id'));

        if(!$challange)
            return ['success'=>0, 'message'=>'Invalid Challenge'];

        $user->toggleLike($challange);
        $status = (int) $user->hasLiked($challange);

        $liked = 'liked';
        if(!$status)
        {
            $liked = 'unliked';
          // $user->undoPoint(new \App\Gamify\Points\ChallengeLikedBy($challange));

          // $challenger = \App\User::where('id','=',$challange->created_by)->first();
          // $challenger->undoPoint(new \App\Gamify\Points\ChallengeLiked($challange));
        }
        else {

          $user->givePoint(new \App\Gamify\Points\ChallengeLikedBy($challange));

          $challenger = \App\User::where('id','=',$challange->created_by)->first();
          $challenger->givePoint(new \App\Gamify\Points\ChallengeLiked($challange));

          $challenger->notify(new \App\Notifications\ChallengeLiked($challange, $user));
        }

            $log_message = ' has '.$liked.' the challenge '.$challange->title;
            activity()
           ->performedOn($challange)
           ->log($log_message);

        return $status;

    }

    public function show(Request $request)
    {
        $id = $request->id;
        $challanges = \App\Challenge::where('id', '=', $id)->with(['user','categories'])->get();
        $challanges = \App\Challenge::prepareAjaxData($challanges);
        if(count($challanges))
            $challanges = $challanges[0];
        return response()->json($challanges);
    }

    public function postComment(Request $request)
    {
        $challenge = Challenge::findOrFail($request->input('challenge_id'));

        $user = Auth::user();

        $challenge->comments()->create([
            'user_id' => $user->id,
            'comment' => $request->input('comment_text'),
            'comment_id' => $challenge->id,
            'comment_type' => Challenge::class,
            'parent_id' => $request->input('replay') ?? null
        ]);
        if ($request->input('replay'))
            $log_message = ' has commented on challenge ' . $challenge->title; // replay log message
        else
            $log_message = ' has commented on challenge ' . $challenge->title; // normal comment log message

        activity()
            ->performedOn($challenge)
            ->log($log_message);


          $user->givePoint(new \App\Gamify\Points\ChallengeCommentedBy($challenge));

          $challenger = \App\User::where('id','=',$challenge->created_by)->first();
          $challenger->givePoint(new \App\Gamify\Points\ChallengeCommented($challenge));

         $challenger->notify(new \App\Notifications\CommentAdded($challenge, $user));
         return response()->json(['success'=>1,'message'=>'Comment Posted']);


    }

    public function getComments(Request $request)
    {
        $comments = Comment::with('childComments.user', 'user')
            ->withCount('like')
            ->whereChallengeId($request->input('challenge_id'))
            ->whereNull('parent_id')
            ->get();
        return response()->json($comments);
    }

    public function getFriendSuggestions(Request $request, $total=5)
    {
        $user = \Auth::user();
        $list = $user->getFriendSuggestions($total);
       return response()->json($list);

    }

    public function getChallenges(Request $request, $total=5)
    {
        $challenge = \App\Challenge::get();
        $list = $challenge->getChallenges($total);
        return response()->json($list);


    }


    public function getFriends(Request $request, $total=5)
    {
        $user = null;
        if($request->has('userId'))
        {
            $userId = $request->userId;
            $user = \App\User::where('id','=',$userId)->first();
        }
        if(!$user)
            $user = \Auth::user();

        $list = $user->getFriendsList($total);
       $total_following = $user->followings->count();
       return response()->json(['list'=>$list, 'totalFollowings'=>$total_following]);

    }

    public function toggleFollow(Request $request)
    {
        $user = \Auth::user();
        if(!$user)
        return ['success'=>0, 'message'=>'Please login to continue'];

        $item_id = $request->item_id;
        $toFollow = \App\User::where('id','=',$item_id)->first();

        if(!$toFollow)
            return ['success'=>0, 'message'=>'Invalid Challenge'];

        $user->toggleFollow($toFollow);

        $status = (int) $user->isFollowing($toFollow);

                $liked = 'following';
        if(!$status)
        {
            $liked = 'unfollowing';
            // $toFollow->undoPoint(new \App\Gamify\Points\UserFollowed($user));
        }
        else {
          $toFollow->givePoint(new \App\Gamify\Points\UserFollowed($user));

          $toFollow->notify(new \App\Notifications\UserFollowed($user));
        }

            $log_message = ' is '.$liked.' '.$toFollow->name;
            activity()
           ->performedOn($toFollow)
           ->log($log_message);

        return $status;
    }

    public function toggleCommentOwnerLike(Request $request, $commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $user = $request->user();
        if ($user) {
            if ($comment->like()->whereUserId($user->id)->withTrashed()->exists()) {
                $like = $comment->like()->whereUserId($user->id)->withTrashed()->first();

                $like->toggleLike();
            } else {
                $like = $comment->like()->create([
                    'user_id' => $user->id
                ]);
            }
            return response()->json($like->isDeleted() ? 0 : 1);
        } else
            return response()->json(['success' => 0, 'message' => 'Login required']);

    }
}
