<?php  

  include_once 'stock-header.php';
  
?>

<title>Stock Details</title>
<div class="main">
    <section class="addstock">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Stock Details</h2>
                        <form method="POST" action="../include/addstock.inc.php" class="register-form" id="stock-form">

                            <?php

                                if (isset($_GET["product_name"])){
                                    $product_name = $_GET["product_name"];
                                    echo '<div class="form-group">
                                <input type="text" name="product_name" id="name" placeholder="Product name" value = "'.$product_name.'" />
                            </div>';
                                }
                                else{

                                    echo '<div class="form-group">
                                <input type="text" name="product_name" id="name" placeholder="Product name" />
                            </div>';
                                }

                                if (isset($_GET["product_quantity"])){
                                    $product_quantity = $_GET["product_quantity"];
                                    echo ' <div class="form-group">
                                <input type="text" name="product_quantity" id="quantity" placeholder="Product Quantity"  value = "'.$product_quantity.'"/>
                            </div>';
                                }
                                else{

                                    echo ' <div class="form-group">
                                <input type="text" name="product_quantity" id="quantity" placeholder="Product Quantity"/>
                            </div>';
                                }
                            ?>


                            <?php
                           

                                if (isset($_GET["product_dealer"])){
                                    $product_dealer = $_GET["product_dealer"];
                                    echo '<div class="form-group">
                                <input type="text" name="product_dealer" id="dealer" placeholder="Product Dealer"  value = "'.$product_dealer.'"/>
                            </div>';
                                }
                                else{

                                    echo '<div class="form-group">
                                <input type="text" name="product_dealer" id="dealer" placeholder="Product Dealer"/>
                            </div>';
                                }

                            ?>
                            

                            <div class="form-group form-button">
                              <a href="index.html"><input type="submit" href="index.html" name="addstock" id="addstock" class="form-submit" value="Save"/></a>  
                            </div>
                            <?php
        
                                 if (isset($_GET["error"])) {
                                     
                                     if ($_GET["error"] == "emptyinput") {
                                         echo "<p> All fields are required!!! </p>";
                                     }
                                     else if ($_GET["error"] == "none") {
                                         echo "<p>Record Saved Successfully... </p>";   
                                     }
                                  }
                            ?>

                          
                            
                             
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../images/stock.jpeg" alt="Stock Image"></figure>
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
