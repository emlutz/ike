<form action="index.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="controller" value="outside">
  <input type="hidden" name="action" value="userProfile">
  <input type="hidden" name="userId" value="<?=$this->user->id?>">
<?php
  if(isset($_GET['invalidName'])) {
    echo '<div class="invalid">Please enter a first and last name.</div>';
  }
  if(isset($_GET['invalidEmail'])) {
    echo '<div class="invalid">Please enter a valid email address.</div>';
  }
  if(isset($_GET['invalidPassword'])) {
    echo '<div class="invalid">Please enter a password at least 8 characters long with at least one letter and at least one number.</div>';
  }
?>
  <label for="name">Name</label>
  <input type="text" name="name" value="<?=$this->user->name?>" pattern="[a-zA-Z\-\s]{3,}" title="Enter Your Name" placeholder="Enter Your Name" required>
  
  <label for="email">Email</label>
  <input type="email" name="email" value="<?=$this->user->email?>" title="Enter a valid email address." placeholder="Enter Your Email Address" required>
  
  <label for="password">Password</label>
  <input type="password" name="password" value="<?=$this->user->password?>" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$" placeholder="Enter a password">

  <label for="photo">Photo</label>
  <img src="assets/<?=$this->user->photo?>" alt="User photo">
  <input type="hidden" name="old_photo" value="<?=$this->user->photo?>">
  <input type="file" name="photo">

  <button type="submit" name="submit">Save</button>
</form>