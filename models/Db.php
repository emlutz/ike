<?php
Class Db {
  var $con;
  public function __construct($con) {
    $this->con = $con;
  }
  public static function connect() {
    $config = parse_ini_file("$_SERVER[DOCUMENT_ROOT]/../kc/config.ini");
    $con = mysqli_connect($config["host"], $config["user"], $config["pass"], $config["db"]);
    if(!$con) {
      die("Failed to connect to database:" . mysqli_connect_error());
    }
    $db = new Db($con);
    return $db;
  }
  public function data($sql){
    $result = mysqli_query($this->con, $sql);
    return $result;
  }

  public function insertData($sql){
    mysqli_query($this->con, $sql);
    
    // return the last inserted Id
    return mysqli_insert_id ( $this->con );
  }

  public function cleanPost() {
    foreach($_POST as $postVar) {
      $_POST[$postVar] = mysqli_real_escape_string($this->con, $postVar);
    }
  }
  public function dataArray($sql) {
    $array = array();
    $result = mysqli_query($this->con, $sql);
    while($row = mysqli_fetch_assoc($result)) {
      $array[] = $row;
    }
    return $array;
  }
}
?>