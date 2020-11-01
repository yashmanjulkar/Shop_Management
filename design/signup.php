
<?php 

    include_once 'header.php'
 ?>



    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" action="../include/signup.inc.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="user_name" id="name" placeholder="User Name"  />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="user_email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="user_password" id="pass" placeholder="Password" />
                            </div>

                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="user_repassword" id="re-pass" placeholder="Confirm Password"/>
                            </div> 
        
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="user_mobile" id="phone" placeholder="Mobile number" />
                            </div>
                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="user_address" id="address" placeholder="Address"/>
                            </div>

                            <div class="form-group form-button">
                              <a href="index.html"><input type="submit" href="login.html" name="signup" id="signup" class="form-submit" value="Register"/></a>  
                            </div>

                            <?php
        
                                 if (isset($_GET["error"])) {
                                     
                                     if ($_GET["error"] == "emptyinput") {
                                         echo "<p> All fields are required!!! </p>";
                                     }

                                     else if ($_GET["error"] == "invalidusername") {
                                         echo "<p> please choose proper username(username should not contain any special character!) </p>";   
                                     }
                                     else if ($_GET["error"] == "invalidemail") {
                                         echo "<p> invalid email! </p>";   
                                     }
                                     else if ($_GET["error"] == "passwordrep") {
                                         echo "<p> Both password should match! </p>";   
                                     }
                                     else if ($_GET["error"] == "usernameandemailalreadyexist") {
                                         echo "<p> Entered username or email are already in use(please choose another username and email!) </p>";   
                                     }
                                     else if ($_GET["error"] == "smallpassword") {
                                         echo "<p> Password must be more than 6 characters </p>";   
                                     }
                                     else if ($_GET["error"] == "invalidmobile") {
                                         echo "<p> Please eneter valid mobile number! </p>";   
                                     }
                                     else if ($_GET["error"] == "stmtcheckingfailed") {
                                         echo "<p>Something went wrong(may be database checking failed!)</p>";   
                                     }
                                     else if ($_GET["error"] == "stmtuserfillingfailed") {
                                         echo "<p>Something went wrong(may be database filling failed!)</p>";   
                                     }
                                     else if ($_GET["error"] == "none") {
                                         echo "<p>Signuped successfully... </p>";   
                                     }

                                 }
                            ?>

                            
                             
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../images/signup-image.jpg" alt="sign up image"></figure>
                        <a href="index.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>

        </section>


    </div>
   


    <!-- JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../js/main.js"></script>
<?php 

    include_once 'footer.php'
 ?>