<?php session_start();
if(!isset($_SESSION["username"]))
{
    	header("Location:blockedBooking.php");
   		$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
}
?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
  		<meta name="author" content="Joydeep Dev Nath">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="shortcut icon" href="images/favicon.ico">
	
		<title>BeeTraveller | package</title>
    
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
		<script type="text/javascript">
		
			
			
		</script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
			<div class="hotels col-sm-12">
			
			<!-- HEADER SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="header">
					
						<?php include("common/headerTransparentLoggedIn.php"); ?>
					
						<div class="col-sm-12">
						
						<div class="menu text-center">
							
							<ul>
								<li class="selected">Package</li>
								
								<a href="bus.php"><li>Buses</li></a>
								<a href="cabs.php"><li>Cabs</li></a>
								<a href="../new design/pakage_blog.php"><li>Blogs</li></a>
							</ul>
							
						</div>
						
					</div>
					
					</div> <!-- header -->
				
				</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
				
				
				
			<!-- TRAIN SEARCH SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="search" id="searchHotel">
   					
    					<div class="content">
    					
    					<form action="hotelSearch.php" method="GET">
    					
    						<div class="col-sm-3">			
   							<div class="form-group">
   								 <label for="city">City:<p> </p></label>
     
      								<select id= "city"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select City" name="city" required>
       									<option disabled selected>-- Select City --</option>
										<?php
											
								$servername = "localhost";
								$usernameConn = "root";
								$passwordConn = "";
								$dbname = "projectmeteor";
								
											// Creating a connection to projectmeteor MySQL database
											$conn = new mysqli($servername, $usernameConn, $passwordConn, $dbname);  // Using database connection file here
											$records = mysqli_query($conn, "SELECT p_city_name From p_city");  // Use select query here 

											while($data = mysqli_fetch_array($records))
											{
												echo "<option value='". $data['p_city_name'] ."'>" .$data['p_city_name'] ."</option>";  // displaying data in option menu
											}	
										?>
      								</select>
							</div>
            			</div>
            			
            				<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime5">Start date:<p> </p></label>
            						<div class="input-group date" >
                						<input id="datetime5" style="width:300px; border-radius:4px ;" type="date" class="inputDate form-control" placeholder="Select Check-in Date" name="checkIn" required/>
                					
            						</div>
        						</div>
    						</div>
    						
    						<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime6">End date:<p> </p></label>
            						<div class="input-group date" >
                						<input id="datetime6" style="width:300px; border-radius:4px ;" type="date" class="inputDate form-control" placeholder="Select Check-out Date" name="checkOut" required/>
                						
            						</div>
        						</div>
    						</div>
    			
          							
							
						<div class="col-sm-3">
	
							<label for="rooms">No. of rooms:<p> </p></label>
    							<div class="form-group">
    								<select id= "rooms" class="selectpicker form-control" data-size="5" title="Select no. of rooms" name="rooms" required>
  									
									<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
          							
          					<div class="col-sm-3" id="r1">
	
							<label for="room1">Room 1:<p> </p></label>
    							<div class="form-group">
    								<select id= "room1" class="selectpicker form-control" data-size="5" title="Select no. of guests" name="room1">
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
         					
         					<div class="col-sm-3" id="r2">
	
							<label for="room2">Room 2:<p> </p></label>
    							<div class="form-group">
    								<select id= "room2" class="selectpicker form-control" data-size="5" title="Select no. of guests" name="room2">
  										<option value="0">0</option>
										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
         					
         					<div class="col-sm-3" id="r3">
	
							<label for="room3">Room 3:<p> </p></label>
    							<div class="form-group">
    								<select id= "room3" class="selectpicker form-control" data-size="5" title="Select no. of guests" name="room3">
  										<option value="0">0</option>
										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
         					
         					<div class="col-sm-3" id="r4">
	
							<label for="room3">Room 4:<p> </p></label>
    							<div class="form-group">
    								<select id= "room4" class="selectpicker form-control" data-size="5" title="Select no. of guests" name="room4">
  										<option value="0">0</option>
										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
									</select>
								</div>
							</div>
						
          					
          					
          					
          					
          					
          					
           				
            				<div class="col-sm-12 text-center">
            			
            					<input   type="submit" class="button" name="searchHotels" value="Search Package" id="searchHotelButton">
            				
            				</div>

            			</form>
            			
    					</div> <!-- content -->
    					
					</div> <!-- search -->
					
				</div>
			
			<!-- TRAIN SEARCH SECTION ENDS -->
				
			</div> <!-- trains -->	
			
			
			
			<!-- POPULAR BUS SECTION STARTS -->
			
				<!-- <div class="col-sm-12"> -->
					
				<div class="popularHotels col-sm-12">
					
					<div class="heading">
					
							Popular Package
					
					</div>
					
					<div class="bg" >
					
						<!-- replace listItems below by PHP loops -->
						
						<div  class="col-sm-4">
					
							<div class="listItem">
							
								<div class="imageContainer text-center">
									
									<img src="https://wallpapercave.com/wp/wp3917475.jpg" alt="New Delhi Hotels">
									
								</div>
								
								<div class="headings">
									
									New Delhi
									
								</div>
								
								<div class="info">
									
									3 Days Tour starting at ₹6500 per person
									
								</div>
								
								<div class="info">
									
									5 Days Tour starting at ₹9500 per person
									
								</div>
							
								
							</div> <!-- listItem 1 -->
						
						</div> <!-- col-sm-4 -->
						
						<div  class="col-sm-4">
					
							<div class="listItem">
							
								<div class="imageContainer text-center">
									
									<img src="https://cdn.wallpapersafari.com/9/78/xVg5t4.jpg" alt="Mumbai Hotels">
									
								</div>
								
								<div class="headings">
									
									Mumbai
									
								</div>
								
								<div class="info">
									
									3 Days Tour starting at ₹5500 per person
									
								</div>
								
								<div class="info">
							5 Days Tour starting at ₹8500 per person										
								</div>
							
								
							</div> <!-- listItem 2 -->
						
						</div> <!-- col-sm-4 -->
						
						<div  class="col-sm-4">
					
							<div class="listItem">
							
								<div class="imageContainer text-center">
									
									<img src="https://wallpaperaccess.com/full/1883968.jpg" alt="kolkata Hotels">
									
								</div>
								
								<div class="headings">
									
									Kolkata
									
								</div>
								
								<div class="info">
									
									3 Days Tour starting at ₹6000 per person
								</div>
								
								<div class="info">
									
										 5 Days Tour starting at ₹1000 per person										
								</div>
							
								
							</div> <!-- listItem 3 -->
						
						</div> <!-- col-sm-4 -->
						
						
					</div> <!-- bg -->
					
				</div> <!-- popularBus -->
				
			<!-- </div> -->
			
		<!-- POPULAR BUS SECTION ENDS -->
			
			
			<!-- FOOTER SECTION STARTS -->
					
				<div class="footer col-sm-12">
					
					<div class="col-sm-4">
						
						<div class="footerHeading">
							Contact Us
						</div>
							
						<div class="footerText">
							3rd floor, Basai Enclave, Sector 10, <br> Gurugram-122006, Haryana, India
						</div>
				
						<div class="footerText">
							E-mail: queries@travelwale.com
						</div>
						
					</div>
					
					<div class="col-sm-4">
					
						<div class="footerHeading">
							Made with
						</div>
						
						<div class="fa fa-heart"></div>
						
						<div class="footerHeading">
							in India
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
								facebook.com/travelwale
							</div>
						
							<div class="gp">
								plus.google.com/travelwale
							</div>
						
							<div class="tw">
								twitter.com/travelwale
							</div>
						
							<div class="in">
								linkedin.com/travelwale
							</div>
						
						</div> <!-- social links -->
						
					</div>
						
					<div class="col-sm-12">
					<div class="copyrightContainer">
						<div class="copyright">
						Copyright &copy; 2018 Joydeep Dev Nath.
						</div>
					</div>
					</div>
							
				</div> <!-- footer -->
				
			<!-- FOOTER SECTION ENDS -->
			
			
		
		</div> <!-- container-fluid -->
	
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>