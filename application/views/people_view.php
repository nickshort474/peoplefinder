<div class="content">
	<h2>People to connect with</h2><br />
	


<?php

		
	foreach($profile_list as $profile){

		foreach ($profile as $user) {
			

			echo '<div class="userBox">';
			if(isset($user->profileImageSrc)){
				echo '<img src="' . base_url() .	'/uploads/'.  html_escape($user->profileImageSrc) .'"width="200px" class="peopleListingImage" />';
			}else{
				echo '<img src="' . base_url() .	'/assets/default.png" width="200px" class="peopleListingImage" />';
			}
			echo '<div class="userInfo">';

			if($user->username == $this->session->userdata('username')){
				echo '<h4>This is you!</h4>';
			}else{
				echo '<h4>' .  html_escape($user->first_name) . '</h4>';
			}
			
			echo '<p>Username: ' .  html_escape($user->username) . '</p>';
			echo '<p>Location: ' .  html_escape($user->general_location) . '</p><br />';
				
					
			echo '<a href="' . base_url() . 'index.php/Connect_controller/show_user/' .  html_escape($user->username) . '" class="btn btn-dark showUserBtn" >Show User</a>';
			echo '</div>';
			echo '</div>';

		}
		
	}

?>
<a href="<?php echo base_url() ?>index.php/Connect_controller/get_locations" class="btn btn-dark">Go back</a>

   
</div>