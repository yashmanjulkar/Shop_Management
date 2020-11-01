<?php  

	include_once 'sale-header.php';
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

        text-align: center;

        margin: 15px 0 4px;
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
      width: 80%;
      padding: 15px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc;
      border-radius: 20px; 
      margin-top: 50px;
      }
      .day-visited, .time-visited {
      position: relative;
      }
      
      th, td {
      width: 15%;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
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
        <h1>Total sale</h1>

        <table>
          <tr>
            <th>Order ID</th>
            <th>Cust Name</th>
            <th>Cust Mobile</th>
            <th>Cust Address</th>
            <th>Cust Pin</th>
            <th>Prod Name</th>
            <th>Prod Qty</th>
            <th>Amount</th>
          </tr>
        <?php
          $sql = 'select order_id,customer_name,customer_mobile,customer_address,customer_pin,order_name,order_quantity,order_amount from orders';
          $result = $conn->query($sql);

          if($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()) {
              echo "<tr><td>". $row["order_id"] ."</td><td>". $row["customer_name"] ."</td><td>". $row["customer_mobile"] ."</td><td>". $row["customer_address"] ."</td><td>". $row["customer_pin"] ."</td><td>". $row["order_name"] ."</td><td>". $row["order_quantity"] ."</td><td>". $row["order_amount"] ."</td><tr>";
            }
            echo "</table>";
          }
          else{
            echo "Nothing to show";
          }

          $conn-> close();
      ?>
     </table>
        
       


      </form>
    </div> 
<?php  

	include 'footer.php';
?>