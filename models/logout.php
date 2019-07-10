<?php
session_start();
$_SESSION['userID'] = false;
unset($_SESSION['arrCart']);
unset($_SESSION);
header("location: ../index.php");
?>