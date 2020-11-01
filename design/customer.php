<?php  

	include_once 'customer-header.php';
?>
<style type="text/css">
	h2 {
  line-height: 1.66;
  margin: 0;
  padding: 0;
  font-weight: bold;
  color: #222;
  font-family: Poppins;
  font-size: 35px; }

</style>
<div class="main">
        <!-- Sign up form -->
        <section class="customer_details">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Save Order</h2>
                        <form method="POST" action="../include/addcustomer.inc.php" class="form-inline" id="register-form">

                            <?php

                                if (isset($_GET["customer_name"])){
                                    $customer_name = $_GET["customer_name"];
                                    echo '<div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="customer_name" id="name" placeholder="Customer name" value = "'.$customer_name.'" />
                            </div>';
                                }
                                else{

                                    echo '<div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="customer_name" id="name" placeholder="Customer name" />
                            </div>';
                                }


                            ?>


                            <?php
                                if (isset($_GET["customer_mobile"])){
                                    $customer_mobile = $_GET["customer_mobile"];
                                    echo '<div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="customer_mobile" id="phone" placeholder="Mobile number" value = "'.$customer_mobile.'"/>
                            </div>';
                                }
                                else{

                                    echo '<div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="customer_mobile" id="phone" placeholder="Mobile number" />
                            </div>';
                                }

                                if (isset($_GET["customer_address"])){
                                    $customer_address = $_GET["customer_address"];
                                    echo '<div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="customer_address" id="address" placeholder="Address"  value = "'.$customer_address.'"/>
                            </div>';
                                }
                                else{

                                    echo '<div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="customer_address" id="address" placeholder="Address"/>
                            </div>';
                                }

                                if (isset($_GET["customer_pin"])){
                                    $customer_pin = $_GET["customer_pin"];
                                    echo ' <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="customer_pin" id="pin" placeholder="Pin code"  value = "'.$customer_pin.'"/>
                            </div>';
                                }
                                else{

                                    echo ' <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="customer_pin" id="pin" placeholder="Pin code"/>
                            </div>';
                                }
                            ?>
                                                        <?php
                                if (isset($_GET["order_name"])){
                                    $order_name = $_GET["order_name"];
                                    echo '<div class="form-group">
                                <input type="text" name="order_name" id="order_name" placeholder="Product Name" value = "'.$order_name.'"/>
                            </div>';
                                }
                                else{

                                    echo '<div class="form-group">
                                <input type="text" name="order_name" id="order_name" placeholder="Product Name" />
                            </div>';
                                }

                                if (isset($_GET["order_quantity"])){
                                    $order_quantity = $_GET["order_quantity"];
                                    echo '<div class="form-group">
                                <input type="text" name="order_quantity" id="order_quantity" placeholder="Order Quantity"  value = "'.$order_quantity.'"/>
                            </div>';
                                }
                                else{

                                    echo '<div class="form-group">
                                <input type="text" name="order_quantity" id="order_quantity" placeholder="Order Quantity"/>
                            </div>';
                                }

                                if (isset($_GET["order_amount"])){
                                    $order_amount = $_GET["order_amount"];
                                    echo ' <div class="form-group">
                                <input type="text" name="order_amount" id="order_amount" placeholder="Product Amount"  value = "'.$order_amount.'"/>
                            </div>';
                                }
                                else{

                                    echo ' <div class="form-group">
                                <input type="text" name="order_amount" id="order_amount" placeholder="Product Amount"/>
                            </div>';
                                }
                            ?>


                            
                            <div class="form-group form-button">
                              <a href="index.html"><input type="submit" href="index.html" name="customer_detail" id="customer_detail" class="form-submit" value="Next"/></a>  
                            </div>

                            <?php
        
                                 if (isset($_GET["error"])) {
                                     
                                     if ($_GET["error"] == "emptyinput") {
                                         echo "<p> All fields are required!!! </p>";
                                     }
                                     else if ($_GET["error"] == "invalidmobile") {
                                         echo "<p> Please eneter valid mobile number! </p>";   
                                     }
                                     else if ($_GET["error"] == "invalidpin") {
                                         echo "<p> invalid pin!!</p>";   
                                     }
                                     else if ($_GET["error"] == "none"){
                                     	  echo "Order Saved Successfully";
                                     }
                                  
                                 }
                            ?>                        
                            
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../images/shoeshop.jpg" alt="sign up image"></figure>
                    </div>
                </div>
            </div>

        </section>


    </div>
   


    <!-- JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
<?php  

	include 'footer.php';
?>
