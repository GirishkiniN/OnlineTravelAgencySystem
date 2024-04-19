<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
  		<meta name="author" content="Joydeep Dev Nath">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="images/favicon.ico">
	
		<title>BeeTraveller | Link Sent</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="css/bootstrap-select.css" rel="stylesheet">
		<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="js/bootstrap-select.js"></script>
    	<script src="js/bootstrap-dropdown.js"></script>
    	<script src="js/jquery-2.1.1.min.js"></script>
    	<script src="js/moment-with-locales.js"></script>
    	<script src="js/bootstrap-datetimepicker.js"></script>
    		
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
		<?php
			 $conn=mysqli_connect("localhost","root","","projectmeteor");
            $userid = $_POST['userid'];
            $email = $_POST['email'];
            session_start();
            $_SESSION['userid'] = $_POST['userid'];
            $_SESSION['email'] = $_POST['email'];
            $query = "SELECT * FROM `users` WHERE Username='$userid' and EMail='$email'";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==0)
            {
			     echo'<script>alert("No such Registered userID record");</script>';
                echo '<script>window.location= "index.php";</script>';
            }  
            else
            {
		?>
		<div class="container-fluid">
		
		<div class="forgotPassword">
				
			<div class="col-sm-12">
					
				<div class="heading text-center">
					RESET PASSWORD
				</div>
						
			</div>
			
			<div class="col-sm-6 col-sm-offset-3">
				
				<div class="containerBoxMod" style="height: 400px;">
				  	<form action="updateCustomerPassword.php" method="POST">
						<label for="newPass">Enter New password:</label>
						<input type="password" class="input" name="newPass" placeholder="Enter new password" required>

						<label for="rePass">Re-Enter New Password:</label>
						<input type="password" class="input" name="rePass" placeholder="Re-Enter new password" required>

						<div class="col-sm-12 text-center">
							<input type="submit" class="button" name="login" value="Reset password">	
						</div>
						
						<br><br><br><br>
						<div><center><p style="color: white; font-weight: bold;">OR</p></center></div>

						<div class="col-sm-12 text-center">
						<a href="login.php"><input type="button" class="button" name="login" value="LOGIN"></a>
						</div>
					</form>	
				</div>
				
			</div>
			
		</div>
		
		</div> <!-- container-fluid -->
		<?php } ?>
	</body>
	

	<!-- BODY TAG ENDS -->
	
</html>
	