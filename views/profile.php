<div class="profile">
  <div class="profile_photo">
    <img src="assets/<?=$this->user->photo?>"/>
    <a class="waves-effect waves-light" href="index.php?controller=feed&action=editProfile"><i class="far fa-edit"></i></a>
  </div>
  <div class="profile_details">
    <h4>Username: <?=$this->user->name?></h4>
    <h4>Email: <?=$this->user->email?></h4>
    <a class="btn waves-effect waves-light" href="index.php?controller=feed&action=editProfile">Edit Profile</a>
  </div>
</div>