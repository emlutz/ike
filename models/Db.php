<?php
Class Db{
	public static function connect(){
		$conDetails = parse_ini_file("../config.ini");
		$connect = mysqli_connect( $conDetails['server'], $conDetails['user'], $conDetails['pass'], $conDetails['db'] );
		
    return $connect;
    $oDb = new Db($connect);
    return $oDb;
	}
}
?>