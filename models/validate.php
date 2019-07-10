<?php 
Class DbTwo{
	public static function connect(){
		$conDetails = parse_ini_file("../../config2.ini");
    $connect = mysqli_connect( $conDetails['server'], $conDetails['user'], $conDetails['pass'], $conDetails['db'] ); 
    return $connect;
    $oDb = new DbTwo($connect);
    return $oDb;		
	}
}

if(isset($_POST['submit'])){

	if($_POST['strEmail'] !== ''){
		$email = $_POST['strEmail'];
		$reg = "/[a-zA-Z0-9.\-_]{3,}@{1}[a-zA-Z0-9]{4,}[.]{1}[a-zA-Z]{2,}/";
		$reg_check = preg_match($reg,$email);
		$validEmail = ($reg_check) ? true : false;
	}// sanitizing name
	if($validEmail) {
		$con = DbTwo::connect();
		$email = $_POST['strEmail'];
		$password = $_POST['strPassword'];
		$Select =  "SELECT * FROM users WHERE strEmail ='".$_POST["strEmail"]."'";
		$SelectResult = mysqli_query($con, $Select);
		$num = mysqli_num_rows($SelectResult);
		if($num > 0 ){
			while($row = mysqli_fetch_assoc($SelectResult)){
				$hashedPass = $row['strPassword'];
				$hashMatch = password_verify($password, $hashedPass);
				if($hashMatch == 0){
					header('Location: index.php?error=true');
				}else{
					session_start();
					$con = DbTwo::connect();
					$sql = "SELECT * FROM users WHERE strEmail=\"{$_POST["strEmail"]}\" AND strPassword=\"{$row[strPassword]}\"";
					$results = mysqli_fetch_assoc(mysqli_query($con,$sql));
					if (isset($results['id'])){
					$_SESSION["userID"] = $results['id'];
					header("Location: ../index.php?controller=pages&action=main");
					}
				}
			}
		}
	}else{
		header('Location: index.php?error=true');
	}
}
?>