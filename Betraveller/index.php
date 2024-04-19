<?php session_start(); ?>

<!DOCTYPE html>

<html>

	<head>
	
	<meta charset="UTF-8">
	<meta name="author" content="Joydeep Dev Nath">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="shortcut icon" href="images/favicon.ico">
	
	<title>Bee Traveller</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/hover-min.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
   	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	
	</head>
	
	<body>
	
		<div class="col-xs-12 home">
		
			<!-- HEADER SECTION STARTS -->
				
			<div class="col-sm-12">
				
				<div class="header">
					
					<?php
					
					if(!isset($_SESSION["username"])) {
						include("common/headerTransparentLoggedOut.php");
					}
					else {
						include("common/headerTransparentLoggedIn.php");
					}
					
					?>
				
				</div> <!-- header -->
			
			</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
	
			<!-- carousel -->
		
			<div class="col-xs-12 banner">
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
		  	
			  	<ol class="carousel-indicators">
			   		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			   		<li data-target="#myCarousel" data-slide-to="1"></li>
			   		<li data-target="#myCarousel" data-slide-to="2"></li>
			   		<li data-target="#myCarousel" data-slide-to="3"></li>
			  	</ol>
			
			   	<div class="carousel-inner">
			   	
			    	<div class="item active">
			    	  <img src="images/carousel/image12.jpg" alt="Image1">
			    	</div>
			    	
			    	<div class="item">
			    	  <img src="images/carousel/image15.jpg" alt="Image2">
			    	</div>
				
			    	<div class="item">
			    	  <img src="images/carousel/image10.jpg" alt="Image3">
			    	</div>

			    	<div class="item">
			    	  <img src="images/carousel/image16.jpg" alt="Image4">
			    	</div>
			    
			  	</div>
				
			   	<a href="#myCarousel" class="left carousel-control" data-slide="prev">
			    	<span class="glyphicon glyphicon-chevron-left"></span>
			    </a>
			    <a href="#myCarousel" class="right carousel-control" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right"></span>
			    </a>
			    
			</div>
			
		</div> <!-- banner -->
		
			<!-- icons -->
			
			<div class="col-xs-12 iconContainer" >
				
				<div class="col-xs-12 iconHolder">
				
					<div class="col-xs-12 bookQuote">
					
						What would you like to book today?
						
					</div>
					<div style="margin-left:300px;">
							<div class="col-xs-12 iconGrids hvr-grow">
							
								<a href="hotels.php" style="color: black;">
								
								<div class="col-xs-12 icons text-center">
									<img src="images/icons/package.jfif" alt="hotels" class="iconsDim text-center"/>
								</div>
								
								<div class="col-xs-12 heading">
									Package
								</div>
								
								</a>
								
							</div>
							
							
							
							<div class="col-xs-12 iconGrids hvr-grow">
								
								<a href="bus.php" style="color: black;">
									
									<div class="col-xs-12 icons text-center">
										<img src="images/icons/buss.png" alt="buses" class="iconsDim text-center"/>
									</div>
									
									<div class="col-xs-12 heading">
										Buses
									</div>
									
								</a>
									
							</div>
							
							<div class="col-xs-12 iconGrids hvr-grow">
								
								<a href="cabs.php" style="color: black;">
									
									<div class="col-xs-12 icons text-center">
										<img src="images/icons/car.png" alt="cabs" class="iconsDim text-center"/>
									</div>
									
									<div class="col-xs-12 heading">
										Cabs
									</div>
									
								</a>
									
							</div>

							<div class="col-xs-12 iconGrids hvr-grow">
								
								<a href="../new design/pakage_blog.php" style="color: black;">
									
									<div class="col-xs-12 icons text-center">
										<img src="images/icons/blog.png" alt="cabs" class="iconsDim text-center"/>
									</div>
									
									<div class="col-xs-12 heading">
										Blogs
									</div>
									
								</a>
									
							</div>
						</div>
				</div>
				
			</div>
			
			<!-- popularDestinations -->
			
			<div class="col-xs-12 popularDestinationsContainer">
				
				<div class="col-xs-12 destinationHolder">
				
					<div class="col-xs-12 destinationQuote">
					
						Popular Destinations
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<a href="../places/manali.php"><img src="https://wallpapercave.com/wp/wp4528719.jpg" alt="popularDestination1" class="picDim text-center"/></a>
						</div>
						
						<div class="col-xs-12 heading">
							Manali
						</div>
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<a href="../places/dandeli.php"><img src="https://ts-production.imgix.net/images/mobile-cover-uploaded/95412405-a07a-4698-874a-97badc463f6c.jpg?auto=compress,format&w=800&h=450" class="picDim text-center"/></a>
						</div>
						
						<div class="col-xs-12 heading">
							Dandeli
						</div>
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<a href="../places/rajasthan.php"><img src="https://i.pinimg.com/originals/d5/84/81/d584818e67e7a8df3254ebab291b9756.jpg" class="picDim text-center"/></a>
						</div>
						
						<div class="col-xs-12 heading">
							Rajasthan 
						</div>
						
					</div>
					
					
					
				</div>
				
			</div>
			
		</div> <!-- home -->
		
		<!-- FOOTER SECTION STARTS -->
					
				<div class="footer col-sm-12">
					
					<div class="col-sm-4">
						
						<div class="footerHeading">
							Contact Us
						</div>
							
						<div class="footerText">
							3rd floor, Basai Enclave, Sector 10, <br>
							Mangaluru, Karnataka, India
						</div>
				
						<div class="footerText">
							E-mail: foodies123@gmail.com
						</div>
						
					</div>
					
					<div class="col-sm-4">
					
						<div class="footerHeading">
							
						</div>
						
						<div class="fa">
							<img src="logo.png" height="60px" width="250px" style="margin-top:-20px"/>
            				<h3 data-toggle="modal" data-target="#myModal" style="color: white; margin-top:-15px; font-size:20px;" class="powerbtn">
            			</div>
						
						<div class="footerHeading">
							
						</div>
						
						<div class="flagContainer text-center">
							<img src="images/flag.png">
						</div>
						
					</div>
					
					<div class="col-sm-4">
					
						<div class="footerHeading">
							Social Links
						</div>
						
						<div class="socialLinks">
						
							<div class="fb">
								facebook.com/BeeTraveller
							</div>
						
							<div class="gp">
								plus.google.com/BeeTraveller
							</div>
						
							<div class="tw">
								twitter.com/BeeTraveller
							</div>
						
							<div class="in">
								linkedin.com/BeeTraveller
							</div>
						
						</div> <!-- social links -->
						
					</div>
						
					<div class="col-sm-12">
					<div class="copyrightContainer">
						<div class="copyright">
						Copyright &copy; 2021 BeeTraveller
						</div>
					</div>
					</div>
							
				</div> <!-- footer -->
				
			<!-- FOOTER SECTION ENDS -->
		
	</body>
	
</html>