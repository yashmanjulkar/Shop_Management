<?php  

	include_once 'stock-header.php';
	include_once 'conn.php'
?>


<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select { 
      padding: 0px;
      margin: 0px;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1, h4 {
      	color:black;
        text-align: center;
        margin: 15px 0 4px;
        margin-bottom: 20px;
        font-weight: 400;
      }
      h4 {
      margin: 20px 0 4px;
      font-weight: 400;
      }
      h2 {

        font-size: 20px;
         margin-top: 50px;
        float: left;
        font-weight: 400;
      }

      .more {

        margin-left: 780px;

      }

      span {
      color: red;
      }
      .small {
      font-size: 10px;
      line-height: 18px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 60%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc;
      border-radius: 20px; 
      margin-top: 50px;
      }
      input {
      width: 50px;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      vertical-align: middle;
      float: left;
      
      }
      input:hover, textarea:hover, select:hover {
      outline: none;
      border: 1px solid #095484;
      background: #e6eef7;
      }
      .product-block select, .product-block input {

        margin-top: 50px;
        margin-left: 50px;
        border-radius: 20px;
        text-align: center;
      	width: 200px;
      	float: left;
      }
      .quantity-block select, .quantity-block input {

        margin-top: 50px;
        margin-left: 85px;
        border-radius: 20px;
        text-align: center;
      	width: 200px;
      	float: left;
      }

      .price-block select, .price-block input {

        margin-top: 50px;
        margin-left: 85px;
        margin-right: 35px;
        border-radius: 20px;
        text-align: center;
        width: 200px;
        float: left;
      }
      select {
      padding: 7px 0;
      border-radius: 3px;
      border: 1px solid #ccc;
      background: transparent;
      }
      select, table {
      width: 100%;
      }
      option {
      background: #fff;
      }
      .day-visited, .time-visited {
      position: relative;
      }
      
      th, td {
      width: 20%;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 500;
      word-break: break-all;
      }
      .first-col {
      width: 25%;
      text-align: left;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      float: left;
      }
      button {
        margin-top: 50px;
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      margin-left: 200px;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      .title-block {
      display: flex;
      justify-content: space-between;
      float: left;
      }
      .title-block select {
      width: 30%;
      margin-bottom: 0;
      float: left;
      }
      .title-block input {
      width: 31%;
      margin-bottom: 0;
      }
      th, td {
      word-break: keep-all;
      }
      }
    </style>
  <body>
     <div class="testbox">
      <form action="/">
        <h1>Total stock</h1>

        <table>
        	<tr>
        		<th>ID</th>
        		<th>Name</th>
        		<th>Quantity</th>
        		<th>Dealer</th>
        	</tr>
       	<?php
       		$sql = 'select stock_id,product_name,product_quantity,product_dealer from stock';
       		$result = $conn->query($sql);

       		if($result-> num_rows > 0){
       			while ($row = $result-> fetch_assoc()) {
       				echo "<tr><td>". $row["stock_id"] ."</td><td>". $row["product_name"] ."</td><td>". $row["product_quantity"] ."</td><td>". $row["product_dealer"] ."</td></tr>";
       			}
       			echo "</table>";
       		}
       		else{
       			echo "<b>Nothing to show</b>";
       		}

       		$conn-> close();
     	?>
		 </table>
        

      </form>
    </div> 
<?php  

	include 'footer.php';
?>