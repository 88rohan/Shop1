<?php
	error_reporting (E_ALL ^ E_NOTICE);
?>
<?php

session_start();

//if session exit, user neither need to signin nor nedd to signup

//registration process by checking that both password and conformpassword is equal or not 
if(strcmp(($_POST['newPassword']),($_POST['conformPassword']))==0)
{
	//Register
	if(isset($_POST['signUp']))
	{
		if(empty($_POST['fullName']) || empty($_POST['email']) || empty($_POST['newPassword'])|| empty($_POST['mobile']) ){
			
			header("location: register.php?Empty=Please fill up all the required field.");
			// echo "Please fill up all the required field.";
		 }
		 else
		 {
			$fullName = $_POST['fullName'];
			$email = $_POST['email'];
			$password = $_POST['newPassword'];
			// $confpass = $_POST['conformPassword'];
			$mobile = $_POST['mobile'];
			// $hash = password_hash($password, PASSWORD_DEFAULT);
		   
			include('config.php');
				//check connection
			if($conn->connect_error)
			{
				echo "connection failed:".$conn->connect_error;
			}
			$sql = "SELECT email from register where email='".$email."'";
			$rs = $conn->query($sql);
			if ($rs->num_rows > 0)
			{
				header("location:register.php?msg=Email already registered.");
			}
			else
			{
				$sql = "INSERT into register(fullName, email, password, mobile) values('$fullName','$email','$password','$mobile')";
				if ($conn->query($sql) === TRUE) {
					header("location:login.php?msg=Registration Sucessfull.<br>Please login");
					
				  } else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				  }
			}
			$conn->close();
			
		 }
	}
}
else
{
	header("location:register.php?passErr=Password does not match.");
}

?>