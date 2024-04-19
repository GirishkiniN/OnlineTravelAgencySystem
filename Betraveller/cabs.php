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
	
		<title>BeeTraveller | Cabs</title>
    
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
		
			$(function () {
				
                $('#datetimepicker4').datetimepicker({
					format: 'L',
		   			locale: 'en-gb',
					useCurrent: false,
					minDate: moment()
				});
            });
			
			$(function () {
				
                $('#datetimepicker7').datetimepicker({
					format: 'LT',
		   			locale: 'en-gb',
					minDate: moment()
				});
            });
		
		</script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
			<div class="cabs col-sm-12">
			
			<!-- HEADER SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="header">
					
						<?php include("common/headerTransparentLoggedIn.php"); ?>
					
						<div class="col-sm-12">
						
						<div class="menu text-center">
							
							<ul>
								<a href="hotels.php"><li>Package</li></a>
								
								<a href="bus.php"><li>Buses</li></a>
								<li class="selected">Cabs</li>
								<a href="../new design/pakage_blog.php"><li>Blogs</li></a>
							</ul>
							
						</div>
						
					</div>
					
					</div> <!-- header -->
				
				</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
				
				
				
			<!-- CAB SEARCH SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="search">
   					
    					<div class="content">
    					
<form action="booking.php" method="POST">
    					
    						<div class="col-sm-5">			
   							<div class="form-group">
   								 <label for="originBus">Origin:<p> </p></label>
     
      								<select id= "originBus"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Origin City" name="originCity"  required>
       									
        								<option value="Mumbai" data-tokens="BOM Mumbai">Mumbai</option>
        								
        								<option value="Bangalore" data-tokens="BLR Bangalore">Bangalore</option>
        								
        								<option value="Guwahati" data-tokens="GAU Guwahati">Guwahati</option>
        								<option value="Shillong" data-tokens="ISK Shillong">Shillong</option>
        								
      								</select>
							</div>
            			</div>
            			
            			<div class="col-sm-4">			
   							<div class="form-group">
   								 <label for="destinationBus">Destination:<p> </p></label>
     
      								<select id= "destinationBus"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Destination City" name="destinationCity" required>
       									<option value="Mumbai" data-tokens="BOM Mumbai">Mumbai</option>
        								
        								<option value="Bangalore" data-tokens="BLR Bangalore">Bangalore</option>
        								<option value="Guwahati" data-tokens="GAU Guwahati">Guwahati</option>
        								<option value="Shillong" data-tokens="ISK Shillong">Shillong</option>
      								</select>
							</div>
            			</div>
            			<div class="col-sm-3">			
   							<div class="form-group">
   								 <label for="destinationBus">Return:<p> </p></label>
     
      								<select id= "return"  data-live-search="true" class="selectpicker form-control"  title="Select Return Trip" name="return" required>
       									<option value="Yes">Yes</option>
        								
        								<option value="No">No</option>
        							</select>
							</div>
            			</div>
            			
						<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime4">Select Pickup Date:<p> </p></label>
            						<div class="input-group date" >
                						<input id="datetime4" style="width:300px; border-radius:4px ;" type="date" class="inputDate form-control"   placeholder="Select Date" name="date" required/>
                						
                						</span>
            						</div>
        						</div>
    						</div>
    						    						
    						<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime7">Select Pickup Time:<p> </p></label>
            						<div class="input-group date" id="datetimepicker7">
                						<input id="datetime7" type="text" class="inputDate form-control" placeholder="Select Time" name="time" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						<div class="col-sm-3">
        						<div class="form-group">
     								<label for="datetime4">Select Drop Date:<p> </p></label>
            						<div class="input-group date" >
                						<input id="datetime4" style="width:300px; border-radius:4px ;" type="date" class="inputDate form-control"   placeholder="Select Date" name="drpdate" required/>
                						
                						</span>
            						</div>
        						</div>
    						</div>
    						<div class="col-sm-3">
							<label for="carType">Type of car: <p> </p></label>
							
    							<div class="form-group">
    								<select id= "carType" class="selectpicker form-control" data-size="5" title="Select car type" name="carType" required>
									<option disabled selected>-- Select Car --</option>
										<?php
											
								$servername = "localhost";
								$usernameConn = "root";
								$passwordConn = "";
								$dbname = "projectmeteor";
								
											// Creating a connection to projectmeteor MySQL database
											$conn = new mysqli($servername, $usernameConn, $passwordConn, $dbname);  // Using database connection file here
											$records = mysqli_query($conn, "SELECT car_name From car");  // Use select query here 

											while($data = mysqli_fetch_array($records))
											{
												echo "<option value='". $data['car_name'] ."'>" .$data['car_name'] ."</option>";  // displaying data in option menu
											}	
										?>
    										
									</select>
								</div>
							</div>
           				
            				<div class="col-sm-12 text-center">
            			
            					<input type="submit" class="button" name="searchCabs" value="Search Cabs">
            				
            				</div>
            				
            				<input type="hidden" name="modeHidden" value="cabs" />

            			</form>
            			
    					</div> <!-- content -->
    					
					</div> <!-- search -->
					
				</div>
			
			<!-- CAB SEARCH SECTION ENDS -->
				
			</div> <!-- trains -->	
			
			
			
			<!-- POPULAR CABS SECTION STARTS -->
			
				<!-- <div class="col-sm-12"> -->
					
				<div class="popularCabs col-sm-12">
					
					<div class="heading">
					
							Cars Available
					
					</div>
					
					<div class="bg">
					
						<!-- replace listItems below by PHP loops -->
						
					<div class="col-sm-4">
						
								<div class="listItem">
								
									<div class="imageContainer text-center">
										
										<img src="images/cabs/carTypes/hatchback.jpg" alt="Hatchback Cars">
										
									</div>
									
									<div class="headings">
										
										Hatchback
										
									</div>
									
									<div class="info">
										
										₹ 5.5/km and ₹ 160/Day 
										
									</div>
									
									<div class="models">
									
										<ul class="text-center">
											
											<li class="carModels">Swift</li>
											<li class="carModels">i10</li>
											<li class="carModels">i20</li>
											
										</ul>
										
									</div>
									
								</div> <!-- listItem 1 -->
							
							</div> <!-- col-sm-4 -->
							
					<div class="col-sm-4">
						
								<div class="listItem">
								
									<div class="imageContainer text-center">
										
										<img src="images/cabs/carTypes/sedan.jpg" alt="Sedan Cars">
										
									</div>
									
									<div class="headings">
										
										Sedan
										
									</div>
									
									<div class="info">
										
										₹ 8.75/km and ₹ 180/Day 
										
									</div>
									
									<div class="models">
									
										<ul class="text-center">
											
											<li class="carModels">Swift Dzire</li>
											<li class="carModels">Verna</li>
											<li class="carModels">Xcent</li>
											
										</ul>
										
									</div>
									
								</div> <!-- listItem 1 -->
							
							</div> <!-- col-sm-4 -->
							
					<div class="col-sm-4">
						
								<div class="listItem">
								
									<div class="imageContainer text-center">
										
										<img src="images/cabs/carTypes/suv.jpg" alt="SUV Cars">
										
									</div>
									
									<div class="headings">
										
											SUV
										
									</div>
									
									<div class="info">
										
										₹ 13.25/km and ₹ 230/Day 
										
									</div>
									
									<div class="models">
									
										<ul class="text-center">
											
											<li class="carModels">Scorpio</li>
											<li class="carModels">Creta</li>
											<li class="carModels">Innova</li>
											
										</ul>
										
									</div>
									
								</div> <!-- listItem 1 -->
							
							</div> <!-- col-sm-4 -->						
						
					</div> <!-- bg -->
						
				</div> <!-- popularBus -->
					
				<!-- </div> -->
				
			<!-- POPULAR CABS SECTION ENDS -->
			
			
			
			<?php include("common/footer.php"); ?>
			
			
		
		</div> <!-- container-fluid -->
	
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>