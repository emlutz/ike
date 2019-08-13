<?php
Class Feed extends Controller {
  public function __construct() {}

  public function main() {
    
    $this->description = "";
    $this->pageTitle = "Dashboard | ";
    $this->navTitle = "Welcome ".$this->user->name."!";
    $this->user = Users::getUser($_SESSION["userId"]);
    $this->memory = Memory::getMemory($_SESSION["userId"]);

    $this->mainBody .= $this->renderView("upload");
    $this->mainBody .= $this->renderView("feed_tiles");

    include("views/template.php");
  }

  public function saveMemory() {
    $this->user = Users::getUser($_POST["userId"]);
    Memory::saveMemory($_POST["userId"]);
  }

  public function pretrip()
  {
    // this one, we DO care if the user is logged in...

    $this->user = Users::getUser($_SESSION['userId']);
    $this->user->checkLoggedIn();
    
  }

  public function posttrip()
  {
    
    
  }

  public function showProfile() {
    $this->user = Users::getUser($_SESSION["userId"]);
    $this->mainBody .= $this->renderView("profile");
    $this->navTitle = "Profile";
 
    include("views/template.php");
  }

  public function editProfile() {
    $this->user = Users::getUser($_SESSION["userId"]);
    $this->mainBody .=$this->renderView("editUserForm");
    $this->navTitle = "Edit Profile";

    include("Views/template.php");
  }

  public function userProfile() {
    Users::saveUser();
  }
  
  public function logout() {
    Users::logout();
  }
}
?>