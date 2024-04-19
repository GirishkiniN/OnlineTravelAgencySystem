<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
  		<meta name="author" content="Joydeep Dev Nath">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="images/favicon.ico">
	
		<title>Bee Traveller | About Us</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>

    	<style type="text/css">
    		.column {
			  float: left;
			  width: 33.33%;
			  padding: 5px;
			}

			.column1 {
			  float: left;
			  width: 33.33%;
			  padding: 5px;
			  margin-top: 780px;
			}


			/* Clearfix (clear floats) */
			.row::after {
			  content: "";
			  clear: both;
			  display: table;
			}
    	</style>
    	
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
		
		<div class="col-sm-12 aboutUsWrapper">
			
			
			<div class="para" style="display: block;">
				
				<div class="row">

				  <div class="column">
										
					<video width="420" height="450" controls autoplay muted>
					  <source src="BeeTraveller.mp4" type="video/mp4">
					</video>
				  </div>
				  
				    <h1><center>ABOUT US</center></h1>
				    <br>
				    <p>
				    	<h3>‘BEE TRAVELLER’</h3>
				    	<br>

						“Travel is the main thing you purchase that makes you more extravagant”. We, at ‘Organization Name’, swear by this and put stock in satisfying travel dreams that make you perpetually rich constantly. We have been moving excellent encounters for a considerable length of time through our cutting edge planned occasion bundles and other fundamental travel administrations. We rouse our clients to carry on with a rich life, brimming with extraordinary travel encounters.

						Through our exceptionally curated occasion bundles, we need to take you on an adventure where you personally enjoy with the stunning magnificence of America and far off terrains. We need you to observe sensational scenes that are a long ways past your creative ability.

				    </p>
				 

				</div>
				
			</div>
			
		</div> <!-- paymentWrapper -->
	
	<div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("common/footer.php"); ?>
				
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>