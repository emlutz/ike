<?php
Class Users {
  public function __construct($data) {
    $this->id = $data["id"];
    $this->email = $data["email"];
    $this->password = $data["password"];
    $this->name = $data["name"];
    $this->photo = $data["photo"];
  }
  public function getUser() {
    $result = Db::connect()->data("SELECT * FROM user WHERE id = '".$userId."'");
    $row = mysqli_fetch_assoc($result);
    return new User($row);
  }
  
  public function saveUser() {
    Db::connect()->cleanPost();
    $email = $_POST['email'];
    if(!preg_match('/[a-zA-Z0-9.\-_]{1,}@[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}/', $email)){
      $validEmail = false;
    } else {
      $validEmail = true;
    }

    $password = $_POST['password'];
    if(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)){
      $validPassword = false;
    } else {
      $validPassword = true;
    }

    $name = $_POST['name'];
    if(!preg_match('/[a-zA-Z]{3,}[\s]/', $name)){
      $validName = false;
    } else {
      $validName = true;
    }

    $userPhoto = $_POST["old_photo"];
    if($_FILES['photo']['name']!="") {
      $userPhoto = $_FILES['photo']['name'];
      move_uploaded_file($_FILES['photo']['tmp_name'], "assets/".$userPhoto);
    }

    if($validEmail && $validPassword && $validName) {
      if($_POST["userId"]!="") {
        Db::connect()->data("UPDATE user
          SET email=\"{$email}\",
              password=\"{$password}\",
              name=\"{$name}\",
              photo=\"{$userPhoto}\"
          WHERE id=\"{$_POST["userId"]}\"");
        $verb = "updated";
      } else {
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        $newUser = Db::connect()->data("INSERT INTO user (email, password, name, photo) VALUES('$email', '$hashedPass', $name, $userPhoto)");
        $verb = "registered";
        return $newUser;
      }
      header("location: ".$_SERVER['HTTP_REFERER']."&verb");
    } if(!$validName) {
      header("location: ../index.php?invalidName");
    } if(!$validEmail) {
      header("location: ../index.php?invalidEmail");
    } if (!$validComment) {
      header("location: ../index.php?invalidPassword");
    }
  }
}
?>