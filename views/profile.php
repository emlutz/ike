<div class="profile">
  <div class="profile_photo">
    <img src="assets/<?=$this->user->photo?>"/>
  </div>
  <div class="profile_details">
    <h4>Username:<?=$this->user->name?></h4>
    <h4>Email:<?=$this->user->email?></h4>
  </div>
  <a href="index.php?controller=feed&action=editProfile">Edit Profile</a>
</div>