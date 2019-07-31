<?php
Class Memory {
  public function __construct($data) {
    $this->id = $data["id"];
    $this->userId = $data["userId"];
    $this->title = $data["title"];
    $this->description = $data["description"];
    $this->timestamp = $data["timestamp"];
    $this->caption = $data["caption"];
    $this->path = $data["path"];
    $this->category = $data["categoryId"];
    $this->collection = $data["collectionId"];
  }

  public static function saveMemory() {
    $con = Db::connect();
    foreach($_POST as $postVar) {
      $_POST[$postVar] = mysqli_real_escape_string($con, $postVar);
    }
    if($_FILES['path']['name']!="") {
      $path = $_FILES['path']['name'];
      move_uploaded_file($_FILES['path']['tmp_name'], "assets/".$path);
    }
    $user = $_POST['userId'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $timestamp = date("Ymd");
    $caption = $_POST['caption'];
    $categoryId = "1";
    $collection = $_POST['userId'];
    $select = "INSERT INTO memory (userId, title, description, timestamp, caption, path, categoryId, collectionId) VALUES ( '$user', '$title', '$description', '$timestamp', '$caption', '$path', '$categoryId', '$collection')";
    mysqli_query($con, $select);
    header('Location: '.$_SERVER['HTTP_REFERER'].'&msg');
  }

  public static function getMemory($userId) {
    $userId = filter_var($userId, FILTER_SANITIZE_NUMBER_INT);
    $memories = array();
    $con = Db::connect();
    $select = "SELECT * FROM memory WHERE userId = '".$userId."'";
    $result = mysqli_query($con, $select);
    while($record = mysqli_fetch_assoc($result)) {
      $memories[] = $record;
    }
    return $memories;
  }
}
?>