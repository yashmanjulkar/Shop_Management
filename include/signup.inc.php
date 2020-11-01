<?php 

if(isset($_POST["signup"])){

	$user_name = $_POST["user_name"];
	$user_email = $_POST["user_email"];
	$user_password = $_POST["user_password"];
	$user_repassword = $_POST["user_repassword"];
	$user_mobile = $_POST["user_mobile"];
	$user_address = $_POST["user_address"];

	require_once '../design/conn.php';
	require_once 'functions.inc.php';

	if(emptyInputSignup($user_name,$user_email,$user_password,$user_repassword,$user_mobile,$user_address) !== false){

		header("location: ../design/signup.php?error=emptyinput");
		exit();
	}

	if(invalidUsername($user_name) !== false){

		header("location: ../design/signup.php?error=invalidusername");
		exit();
	}

	if(invalidemail($user_email) !== false){

		header("location: ../design/signup.php?error=invalidemail");
		exit();
	}

	if(pwdmatch($user_password,$user_repassword) !== false){

		header("location: ../design/signup.php?error=passwordrep");
		exit();
	}

	if(usernameAndEmailAlreadyexist($conn,$user_name,$user_email) !== false){

		header("location: ../design/signup.php?error=usernameandemailalreadyexist");
		exit();
	}
	if(passlength($user_password) !== false){

		header("location: ../design/signup.php?error=smallpassword");
		exit();
	}

	if(mobilelength($user_mobile) !== false){

		header("location: ../design/signup.php?error=invalidmobile");
		exit();
	}

	createuser($conn,$user_name,$user_email,$user_password,$user_mobile,$user_address);
	

}
else{

	header("location: ../design/signup.php");
	exit();
}
?>