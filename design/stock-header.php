<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- <script language="javascript" type="text/javascript">
        
        function preback(){
            window.history.forward();
        }
        setTimeout("preback()",0);
        window.onunload=function(){null};

    </script> -->
	<meta charset="utf-8">
	<title>Stock Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/mainpage.css">
	<link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">


    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">

	<!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Drop-down Menu Bar</title> -->
    <link rel="stylesheet" href="../mainpage.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

	<nav>
		
			<div class="logo">SHOP MANAGEMENT</div>
			<div class="welcome">
				
				<?php

					if (isset($_SESSION["username"])) {
						
						echo "<p> (Hello " .$_SESSION["username"]. "...)</p>";
					}

				?>
			</div>
			<label for="btn" class="icon">
        		<span class="fa fa-bars"></span>
      		</label>
      		<input type="checkbox" id="btn">
 <ul>
				<li><a href="home.php">HOME</a></li>
					<li>
	          			<label for="btn-1" class="show">Features +</label>
	          			<a href="#">ADD</a>
	          			<input type="checkbox" id="btn-1">
	          			<ul>
							<li><a href="customer.php">ORDER</a></li>
							<li><a href="addstock.php">STOCK</a></li>
							<!-- <li><a href="#">option3</a></li> -->
						</ul>
					</li>
		<li><a href="sale.php">SALE</a></li>
		<li><a href="stock.php">STOCK</a></li>
		<!-- <li><a href="index.php">LOGOUT</a></li> -->

				<?php

					if(isset($_SESSION["username"])){
						
						echo "<li><a href='../include/logout.inc.php'>LOGOUT</a></li>";
					}
					else{

						echo "<li><a href='index.php'>Log in</a></li>";
						echo "<li><a href='signup.php'>Logout</a></li>";
					}

				?>
</ul>
</nav>
