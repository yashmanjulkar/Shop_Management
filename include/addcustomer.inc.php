<?php

if(isset($_POST["customer_detail"])){

	$customer_name = $_POST["customer_name"];
	$customer_mobile = $_POST["customer_mobile"];
	$customer_address = $_POST["customer_address"];
	$customer_pin = $_POST["customer_pin"];
	$order_name = $_POST["order_name"];
	$order_quantity = $_POST["order_quantity"];
	$order_amount = $_POST["order_amount"];

	require_once '../design/conn.php';
	require_once 'functions.inc.php';

	if(emptyInputCustomer($customer_name,$customer_mobile,$customer_address,$customer_pin,$order_name,$order_quantity,$order_amount) !== false){

		header("location: ../design/customer.php?error=emptyinput");
		exit();
	}
	if(customermobilelength($customer_mobile) !== false){

		header("location: ../design/customer.php?error=invalidmobile&customer_name=$customer_name&customer_email=$customer_email&customer_address=$customer_address&customer_pin=$customer_pin");
		exit();
	}
	if(invalidpin($customer_pin) !== false){

		header("location: ../design/customer.php?error=invalidpin&customer_name=$customer_name&customer_email=$customer_email&customer_mobile=$customer_mobile&customer_address=$customer_address");
		exit();
	}

	placeorder($conn,$customer_name,$customer_mobile,$customer_address,$customer_pin,$order_name,$order_quantity,$order_amount);
	 // header("location: ../design/product.php");
	 // exit();
}

else{

	header("location: ../design/customer.php");
	exit();
}
?>