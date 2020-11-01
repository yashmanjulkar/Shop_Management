<?php
	


if(isset($_POST['signin'])){

	

	$login_username = $_POST["login_username"];
	$login_password = $_POST["login_password"];

	require "../design/conn.php";
	require_once 'functions.inc.php';


	if(emptyInputLoginin($login_username,$login_password) !== false){

		header("location: ../design/index.php?error=emptylogininput");
		exit();

	}

	
	loginuser($conn,$login_username,$login_password);
}

else{

		header("location: ../design/index.php");
		exit();
	}
?>