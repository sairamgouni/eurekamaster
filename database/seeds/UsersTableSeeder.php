<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\User;
use \App\Challenge;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //      factory(\App\User::class, 50)->create()
      //      ->each(function ($user) {
      //   $user->challenges()->save(factory(\App\Challenge::class)->make());
   		 // });
    }
}
