<?php

//functions for signup page

function emptyInputSignup($user_name,$user_email,$user_password,$user_repassword,$user_mobile,$user_address){
	
	$result;

	if (empty($user_name) || empty($user_email) || empty($user_password) || empty($user_repassword) || empty($user_mobile) || empty($user_address)) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}
function emptyInputaddstock($product_name,$product_quantity,$product_dealer){
	
	$result;

	if (empty($product_name) || empty($product_quantity) || empty($product_dealer) ) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}

function invalidUsername($user_name){
	
	$result;

	if (!preg_match("/^[a-zA-Z0-9]*$/", $user_name)) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}

function invalidemail($user_email){
	
	$result;

	if (!filter_var($user_email,FILTER_VALIDATE_EMAIL)) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}

function pwdmatch($user_password,$user_repassword){
	
	$result;

	if ($user_password !== $user_repassword) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}

function passlength($user_password){
	
	$result;

	if (strlen($user_password) < 6) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}

function mobilelength($user_mobile){
	
	$result;

	if ((strlen($user_mobile) < 10) || (strlen($user_mobile) > 10)) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}

function usernameAndEmailAlreadyexist($conn,$user_name,$user_email){
	
	$sql = "SELECT * FROM user WHERE user_name = ? OR user_email = ?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql)) {
		header("location: ../design/signup.php?error=stmtcheckingfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt,"ss",$user_name,$user_email);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);
	if ($row = mysqli_fetch_assoc($resultData)) {
		
		return $row;

	}
	else{

		$result = false;
		return $result;
	}

	mysqli_stmt_close($stmt);
}


function createuser($conn,$user_name,$user_email,$user_password,$user_mobile,$user_address){

	$sql_register = "INSERT INTO user (user_name,user_email,user_password,user_mobile,user_address) VALUES (?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql_register)) {
		header("location: ../design/signup.php?error=stmtuserfillingfailed");
		exit();
	}

	$hashedpassword = password_hash($user_password, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt,"sssss",$user_name,$user_email,$hashedpassword,$user_mobile,$user_address);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../design/signup.php?error=none");
	exit();
}

function addstock($conn,$product_name,$product_quantity,$product_dealer){

	$sql_register = "INSERT INTO stock (product_name,product_quantity,product_dealer) VALUES (?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql_register)) {
		header("location: ../design/addstock.php?error=stmtuserfillingfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt,"sss",$product_name,$product_quantity,$product_dealer);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../design/addstock.php?error=none");
	// alert("Record Saved Successfully...")
	exit();
}

function emptyInputLoginin($login_username,$login_password){
	
	$result;

	if (empty($login_username) || empty($login_password)) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}

function loginuser($conn,$login_username,$login_password){

	$usernameExist = usernameAndEmailAlreadyexist($conn,$login_username,$login_username);

	if ($usernameExist === false) {
		header("location: ../design/index.php?error=wrongloginusername");
		exit();
	}

	$password_hash = $usernameExist["user_password"];

	$checkPassword  = password_verify($login_password, $password_hash);

	if ($checkPassword === false) {
		header("location: ../design/index.php?error=wrongloginpassword");
		exit();
	}
	else if ($checkPassword === true) {
		
		session_start();

		$_SESSION["userid"] = $usernameExist["user_id"];
		$_SESSION["username"] = $usernameExist["user_name"];

		header("location: ../design/home.php");
		exit();

	}
}


//functions for customer details page

function emptyInputCustomer($customer_name,$customer_mobile,$customer_address,$customer_pin,$order_name,$order_quantity,$order_amount){

	$result;

	if (empty($customer_name) || empty($customer_mobile) || empty($customer_address) || empty($customer_pin) || empty($order_name) || empty($order_quantity) || empty($order_amount)) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;

}


function invalidcustomeremail($customer_email){
	
	$result;

	if (!filter_var($customer_email,FILTER_VALIDATE_EMAIL)) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}

function customermobilelength($customer_mobile){
	
	$result;

	if ((strlen($customer_mobile) < 10) || (strlen($customer_mobile) > 10)) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;
}

function invalidpin($customer_pin){

	$result;

	if ((strlen($customer_pin) < 6) || (strlen($customer_pin) > 6)) {
		
		$result = true;
	}
	else{

		$result = false;
	}

	return $result;

}
function 	placeorder($conn,$customer_name,$customer_mobile,$customer_address,$customer_pin,$order_name,$order_quantity,$order_amount){

	$sql_register = "INSERT  INTO orders (customer_name,customer_mobile,customer_address,customer_pin,order_name,order_quantity,order_amount) VALUES (?,?,?,?,?,?,?);";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt,$sql_register)) {
		header("location: ../design/customer.php?error=stmtuserfillingfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt,"sssssss",$customer_name,$customer_mobile,$customer_address,$customer_pin,$order_name,$order_quantity,$order_amount);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	header("location: ../design/home.php");
	exit();
}

?>