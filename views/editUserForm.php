<div class="container-fluid">
  <div class="row">
    <div class="reg_frm2">
      <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="controller" value="<?=$this->user->cont?>">
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
        <input type="text" name="name" value="<?=$this->user->name?>" pattern="[a-zA-Z\-\s]{3,}" title="Enter Your Name" placeholder="Name" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" value="<?=$this->user->email?>" title="Enter a valid email address." placeholder="Email" required>
        
        <label for="password">Password</label>
        <input type="password" name="password" value="<?=$this->user->password?>" pattern="^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$" placeholder="Password">

        <label for="photo">Photo</label>
        <input type="hidden" name="old_photo" value="<?=$this->user->photo?>">
        <label for="file-upload"class="custom-file-upload">
        <i class="fas fa-cloud-upload-alt"></i>Upload Profile Pic
        </label>
        <input id="file-upload" type="file" name="photo">

        <input class="log btn" type="submit" name="submit" value="SAVE">
      </form>
    </div>
  </div>
</div>