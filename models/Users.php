<?php
Class Users {
  public function __construct($data=false) {
    if ($data){
      $this->id = $data["id"];
      $this->email = $data["email"];
      $this->password = $data["password"];
      $this->name = $data["name"];
      $this->photo = $data["photo"];
      $this->userLoggedIn = true;
      $this->cont = "feed";
    } else {
      $this->id = "";
      $this->email = "";
      $this->password = "";
      $this->name = "";
      $this->photo = "";
      $this->userLoggedIn = false;      
      $this->id = "";
      $this->cont = "outside";
    }
  }

  public static function getUser($userId) {
    $con = Db::connect();
    $select = "SELECT * FROM user WHERE id = '".$userId."'";
    $result = mysqli_query($con, $select);
    $row = mysqli_fetch_assoc($result);
    
    return new Users($row);
  }
  
  public static function saveUser() {
    $con = Db::connect();
    foreach($_POST as $postVar) {
      $_POST[$postVar] = mysqli_real_escape_string($con, $postVar);
    }

    $email = $_POST['email'];
    if(!preg_match('/[a-zA-Z0-9.\-_]{1,}@[a-zA-Z]{4,}[.]{1}[a-zA-Z]{2,}/', $email)){
      $validEmail = false;
    } else {
      $validEmail = true;
    }

    $password = $_POST['password'];
    if(!preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $password)){
      $validPassword = true;
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
        Db::connect();
        $select = "UPDATE user
          SET email=\"{$email}\",
              password=\"{$password}\",
              name=\"{$name}\",
              photo=\"{$userPhoto}\"
          WHERE id=\"{$_POST["userId"]}\"";
        $result = mysqli_query($con, $select);
        $verb = "updated";

        $url = "index.php?controller=feed&action=showProfile";
      } else {
        $hashedPass = password_hash($password, PASSWORD_DEFAULT);
        $con = Db::connect();
        $select = "INSERT INTO user (email, password, name, photo) VALUES('$email', '$hashedPass', '$name', '$userPhoto')";
       
        $newUser = mysqli_query($con, $select);
    
        $verb = "registered";

        $url = "index.php?controller=outside&action=main";
        
      }
      header("location: ".$url."&verb=$verb");
    }    
    if(!$validName) {
      header("location: ".$url."?error=invalidName");
    } if(!$validEmail) {
      header("location: ".$url."&invalidEmail");
    } if (!$validPassword) {
      header("location: ".$url."&invalidPassword");
    }
  }

  public static function checkUser() {    
    if($_POST['email'] !== ''){
      $email = $_POST['email'];
      $reg = "/[a-zA-Z0-9.\-_]{3,}@{1}[a-zA-Z0-9]{4,}[.]{1}[a-zA-Z]{2,}/";
      $reg_check = preg_match($reg,$email);
      $validEmail = ($reg_check) ? true : false;
    }// sanitizing name
    if($validEmail) {
      $con = Db::connect();
      $email = $_POST['email'];
      $password = $_POST['password'];
      $select =  "SELECT * FROM user WHERE email = \"$email\"";
      $result = mysqli_query($con, $select);
      $num = mysqli_num_rows($result);
      if($num > 0 ){
        while($row = mysqli_fetch_assoc($result)){
          $hashedPass = $row['password'];
          $hashMatch = password_verify($password, $hashedPass);
          if($hashMatch == 0){
            header('Location: index.php?controller=outside&action=main&what');
          }else{
            
            $con = Db::connect();
            $select = "SELECT * FROM user WHERE email=\"{$_POST["email"]}\" AND password=\"{$row['password']}\"";
            $result = mysqli_fetch_assoc(mysqli_query($con,$select));
            if (isset($result['id'])){
            $_SESSION["userId"] = $result['id'];

            header("Location: index.php?controller=feed&action=main");
            }
          }
        }
      }
    }else{
      header('Location: index.php?controller=outside&action=main&where');
    }
  }

  public function checkLoggedIn()
  {

    if (!$this->userLoggedIn)
    {
      header("location: index.php?controller=outside&action=main&huh");
    }
  }

  public static function logout() {
    session_start();
    $_SESSION['userId'] = false;
    unset($_SESSION);
    header("location: index.php?controller=outside&action=main");
  }
}
?>