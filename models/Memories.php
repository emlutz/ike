<?php

// creating a factory: Nathan

Class Memories {

  public static function getMemories($userId) {
    $userId = filter_var($userId, FILTER_SANITIZE_NUMBER_INT);
    $memories = array();
    $con = Db::connect();
    $select = "SELECT * FROM memory WHERE userId = '".$userId."' ORDER BY id DESC";
    $result = mysqli_query($con, $select);
    while($record = mysqli_fetch_assoc($result)) {
      $memories[] = new Memory($record);
    }
    return $memories;
  }
}
?>