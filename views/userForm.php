<?php
if (isset($_GET["userId"])) {
  $user = $this->user->id;
  if(!$user) {
    header("location: index.php");
  }
} else {
  $_GET["userId"] = (isset($_GET['userId']))?$_GET['userId']:"";
  $user['name'] = (isset($user['name']))?$user['name']:"";
  $user['email'] = (isset($user['email']))?$user['email']:"";
  $user['password'] = (isset($user['password']))?$user['password']:"";
  $user['photo'] = (isset($user['photo']))?$user['photo']:"";
}
?>
<form action="index.php" method="post">
  <input type="hidden" name="controller" value="pages">
  <input type="hidden" name="action" value="saveUser">
  <input type="hidden" name="productId" value="<?=$this->user->id?>">
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
  <input type="text" name="name" value="<?=$user['name']?>" pattern="[a-zA-Z\-\s]{3,}" title="Enter Your Name" placeholder="Enter Your Name" required>
  
  <label for="email">Email</label>
  <input type="email" name="email" value="<?=$user['email']?>" title="Enter a valid email address." placeholder="Enter Your Email Address" required>
  
  <label for="password">Password</label>
  <input type="text" name="password" value="<?=$user['password']?>" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" placeholder="Enter a password">

  <label for="photo">Photo</label>
  <img src="assets/<?=$user['photo']?>" alt="User photo">
  <input type="hidden" name="old_photo" value="<?=$user['photo']?>">
  <input type="file" name="photo">

  <button type="submit" name="submit">Save</button>
</form>