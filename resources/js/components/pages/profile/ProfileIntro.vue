<template>
	<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Profile Intro</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Personal-Info -->

					<ul class="widget w-personal-info item-block">
						<li>
							<span class="title">About Me:</span>
							<span class="text">{{CurrentUser.userAbout}}</span>
						</li>

					</ul>

					<!-- .. end W-Personal-Info -->
					<!-- W-Socials -->

<!-- 					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="#" class="social-item bg-facebook">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
							Facebook
						</a>
						<a href="#" class="social-item bg-twitter">
							<i class="fab fa-twitter" aria-hidden="true"></i>
							Twitter
						</a>
						<a href="#" class="social-item bg-dribbble">
							<i class="fab fa-dribbble" aria-hidden="true"></i>
							Dribbble
						</a>
					</div> -->


					<!-- ... end W-Socials -->
				</div>
			</div>
</template>

<script>
	export default {
		name: 'ProfileIntro',
		props: ['CurrentUser', 'isUserLoggedIn', 'isSameUser'],
	 	data() {
            return {
 
            }
		},
		methods: {
		 
		},
		created(){
  
        }
	}
</script>
