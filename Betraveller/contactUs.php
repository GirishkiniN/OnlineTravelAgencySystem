<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
  		<meta name="author" content="Joydeep Dev Nath">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="images/favicon.ico">
	
		<title>BeeTraveller | Contact Us</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
		
		<?php 
		
			if(!isset($_SESSION["username"])) {
				include("common/headerLoggedOut.php");
			}
			else {
				include("common/headerLoggedIn.php");
			}
		
		?>
		
		<div class="spacer">a</div>
		
		<div class="col-sm-12 contactUsWrapper">
			
			<div class="headingOne">
				
				Contact Us
				
			</div>
			
			<!-- uncomment this if required

			<div class="para">
				
				Lorem ipsum dolr sit amet
				
			</div>
	
			-->
			
		</div> <!-- paymentWrapper -->
		
		<div class="col-xs-12 contactPadding">
			
		<div class="col-sm-1"></div>
		
		<div class="col-sm-5 contactUsExtras">
			
			<div class="col-sm-12 heading">
				
				<span class="bold">We're located at:</span>
				</br>
				3rd floor, Basai Enclave, Sector 10, Mangalore, Karnataka
			
			</div>
		
			<div class="col-sm-12 mapImage">
				
				<img src="contactus.png" alt="Contact us" class="mapDim"/>
				
			</div>
			
		</div>
		
		<div class="col-sm-5 contactUsForm">
			
			<form action="" method="POST">
				
			<label for="name">Full Name:</label>
			<input type="text" class="input" name="name" required/>
			
			<label for="email">E-mail:</label>
			<input type="text" class="input" name="email" required/>
			
			<label for="queries">Queries:</label>
			<textarea class="input" name="queries" required></textarea>
			
			<div class="text-center">
				<input type="submit" name="contactButton" class="contactButton" value="Send"/>
			</div>
				
			</form>
			
		</div>
		
		<div class="col-sm-1"></div>
		
		</div>
	
	<div class="col-xs-12 spacer">.</div> <!-- just a dummy class for creating some space -->
	<div class="col-xs-12 spacer">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("common/footer.php"); ?>
				
	</body>
	
	<!-- BODY TAG ENDS -->

	<?php
		$conn=mysqli_connect("localhost","root","","projectmeteor");
       	if(isset($_POST['contactButton']))
       	{
           	$fullName=$_POST['name'];
            $email=$_POST['email'];
            $queries=$_POST['queries'];
            $sub_date=date("d-m-Y");
            date_default_timezone_set("Asia/kolkata");
            $sub_time=date("h:i:sa");
            $querystring="INSERT INTO contactus(Date,time,fullName,email,queries) VALUES ('$sub_date','$sub_time','$fullName','$email','$queries')";
            mysqli_query($conn,$querystring);
	        echo '<script>alert("Queries submitted...")</script>';       
	    }    
	?>
	
</html>