<?php 

if(isset($_POST["addstock"])){

	$product_name = $_POST["product_name"];
	$product_quantity = $_POST["product_quantity"];
	$product_dealer = $_POST["product_dealer"];
	
	require_once '../design/conn.php';
	require_once 'functions.inc.php';

	if(emptyInputaddstock($product_name,$product_quantity,$product_dealer) !== false){

		header("location: ../design/addstock.php?error=emptyinput");
		exit();
	}


	addstock($conn,$product_name,$product_quantity,$product_dealer);
	//inserttologintable($product_name,$product_amount);

}
else{

	header("location: ../design/addstock.php");
	exit();
}
?>