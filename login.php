<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login system</title>  
    <!-- // insert style.css file inside index.html   -->
    <link rel = "stylesheet" type = "text/css" href = "login.css">
	<link rel="stylesheet" type="text/css" href="shop1.css">
</head>
<body >
<header>
  <h1><u>SHIV DOORDARSHAN KENDRA</u></h1>
    <p style = "text-align:center;font-size:80%">SHRADHANAND BAZAR, SABZI MANDI, SIWAN, BIHAR, 841226.</p>
    <p style = "font-family:verdana;color:red;text-align:right;font-size:80%">Directed by : PAPPU GUPTA</p>
    <p style = "font-family:verdana;color:red;text-align:right;font-size:80%">Co-Directed by : SURAJ GUPTA</p>
  <div class="menu">
  <a  href="index.php">Home</a>
  <a id="A" class="active" href="login.php">Customer's login</a>
  <a id="A"  href="register.php">Customer's register</a>
</div>
</header>
<div class="bg">
<div id = "frm">  
        <h1 id="login"><u>Login</u></h1>  
        <span id="UpErr">
		<?php
			if(@$_GET['err']==true)
			{
				echo $_GET['err'];
			}
			?>
		</span>
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <!-- <label> UserName: </label>   -->
                <input placeholder="                      Username" type = "email" id ="user" name  = "user" class="inputbox"><span id="UErr"></span>
                  
            </p>  
            <p>  
                <!-- <label> Password: </label>   -->
                <input placeholder="                      Password" type = "password" id ="pass" name  = "pass" class="inputbox"> <span id="PErr"></span>
            </p>  
            <p>     
                <input type =  "submit" id = "btn" placeholder=" Login " value="Login" />
                <div class="register"><a href="register.php">Create new account</a></div>
            </p>  
        </form>  
    </div> 
</div>	
</body>
</html>