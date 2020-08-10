<?php
include("register_db.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rlform.css">
	<link rel="stylesheet" type="text/css" href="shop1.css">
    <title>Register</title>
</head>
<body>
<header>
  <h1><u>SHIV DOORDARSHAN KENDRA</u></h1>
    <p style = "text-align:center;font-size:80%">SHRADHANAND BAZAR, SABZI MANDI, SIWAN, BIHAR, 841226.</p>
    <p style = "font-family:verdana;color:red;text-align:right;font-size:80%">Directed by : PAPPU GUPTA</p>
    <p style = "font-family:verdana;color:red;text-align:right;font-size:80%">Co-Directed by : SURAJ GUPTA</p>
  <div class="menu">
  <a  href="index.php">Home</a>
  <a id="A" href="login.php">Customer's login</a>
  <a id="A" class="active"  href="register.php">Customer's register</a>
</div>
</header>
<h2 align="center"><u>Register yourself here</u></h2>
    <div class="rlform">
        <div class="rlform rlform-wrapper">
            <div class="rlform-box">
                <div class="rlform-box-inner">
                    <form action="register_db.php" method="post" onsubmit="return validPassword()">
                        <p>Let's create your account</p>
                        <div class="rlform-group">
                            <?php 
                                if (@$_GET['Empty']==true) 
                                {?>
                                 <?php   echo $_GET['Empty']?>
                                <?php }
                            ?>
							<?php 
                                if (@$_GET['msg']==true) 
                                {?>
                                 <?php   echo $_GET['msg']?>
                                <?php }
                            ?>
                        </div>
                        <div class="rlform-group">
                        
                            <input type="text" name="fullName" placeholder="Full Name"class="rlform-input" id="fullName" required>            
                        </div>
                        <div class="rlform-group">
                            
                            <input type="email" placeholder="Email"name="email" class="rlform-input" id="email" required>            
                        </div>
						<div class="rlform-group">
                            
							<input type="digit"placeholder="Mobile Number" maxlength="10" minlength="10" name="mobile" class="rlform-input" id="number" required>           
                        </div>
                        <div class="rlform-group">
                            
                            <input type="password" placeholder="Password" name="newPassword" class="rlform-input" id="newPass" required>
                        </div>
                        <div class="rlform-group">
                           
                            <input type="password" placeholder="Conform Password" name="conformPassword" class="rlform-input" id="conformPass" required>
							<div id="passmatch"><?php 
                                if (@$_GET['passErr']==true) 
                                {?>
                                 <?php   echo $_GET['passErr']?>
                                <?php }
                            ?></div>
                        </div>
                        <button class="rlform-btn" name="signUp">Sign Up</button>
                        <br><br><div class="text-foot">Already have an account? <a href="login.php">Login</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
</div>
    
</body>

</html>