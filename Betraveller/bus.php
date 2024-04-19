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
	
		<title>BeeTraveller | Bus</title>
    
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
		
		</script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
	
		<div class="container-fluid">
		
			<div class="bus col-sm-12">
			
			<!-- HEADER SECTION STARTS -->
				
				<div class="col-sm-12">
					
					<div class="header">
					
						<?php include("common/headerTransparentLoggedIn.php"); ?>
					
						<div class="col-sm-12">
						
						<div class="menu text-center">
							
							
							<ul>
								<a href="hotels.php"><li>Package</li></a>
								
								<a href="bus.php"><li class="selected">Buses</li></a>
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
					
					<div class="search">
   					
    					<div class="content">
    					
    					<form action="busSearch.php" method="POST">
    					
    						<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="originBus">Origin:<p> </p></label>
     
      								

									<select id= "originBus"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Origin City" name="originCity" required>
										
										<?php
											$conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
											$records = mysqli_query($conn, "SELECT origin From buscity");  // Use select query here 

											while($data = mysqli_fetch_array($records))
											{
												echo "<option value='". $data['origin'] ."'>" .$data['origin'] ."</option>";  // displaying data in option menu
											}	
										?>  
									</select>  
							</div>
            			</div>
            			
            				<div class="col-sm-6">			
   							<div class="form-group">
   								 <label for="destinationBus">Destination:<p> </p></label>
    
									<select id= "destinationBus"  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Destination City" name="destinationCity" required>
										
										<?php
											$conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
											$records = mysqli_query($conn, "SELECT destination From buscity");  // Use select query here 

											while($data = mysqli_fetch_array($records))
											{
												echo "<option value='". $data['destination'] ."'>" .$data['destination'] ."</option>";  // displaying data in option menu
											}	
										?>  
									</select>    
							</div>
            			</div>
            			
            				<div class="col-sm-6">
        						<div class="form-group">
     								<label for="datetime4">Select Date:<p> </p></label>
            						<div class="input-group date" id="datetimepicker4">
                						<input id="datetime4" type="text" class="inputDate form-control" placeholder="Select Date" name="dateBus" required/>
                						<span class="input-group-addon">
                   						<span class="fa fa-calendar"></span>
                						</span>
            						</div>
        						</div>
    						</div>
    						
							<div class="col-sm-6">
	
							<label for="passengers">No. of passengers:<p> </p></label>
    							<div class="form-group">
    								<select id= "adults" class="selectpicker form-control" data-size="5" title="Select no. of passengers" name="passengersBus" required>
  										<option value="1">1</option>
  										<option value="2">2</option>
  										<option value="3">3</option>
  										<option value="4">4</option>
  										<option value="5">5</option>
  										<option value="6">6</option>
									</select>
								</div>
							</div>
           				
            				<div class="col-sm-12 text-center">
            			
            					<input type="submit" class="button" name="searchBuses" value="Search Buses">
            				
            				</div>

            			</form>
            			
    					</div> <!-- content -->
    					
					</div> <!-- search -->
					
				</div>
			
			<!-- TRAIN SEARCH SECTION ENDS -->
				
			</div> <!-- trains -->	
			
			
			
			<!-- POPULAR BUS SECTION STARTS -->
			
				<!-- <div class="col-sm-12"> -->
					
					<div class="popularBus col-sm-12">
					
						<div class="heading">
						
								Popular Buses
						
						</div>
						
						<div class="bg">
						
							<!-- replace listItems below by PHP loops -->
						
							<div class="listItem">
													
								<!-- OPERATOR STARTS -->

								<div class="col-sm-4 text-center">
	
									<div class="headings">
		
										Operator
			
									</div>
		
									<div class="values origin">
		
										SMS Traveller
			
									</div>
		
									<div class="originSubscript">
		
										NON-AC Sleeper
			
									</div>
		
								</div>
	
								<!-- OPERATOR ENDS -->
	
	
								<!-- ORIGIN STARTS -->

								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Origin
			
									</div>
		
									<div class="values origin">
		
										Bangalore
			
									</div>
		
									<div class="originSubscript">
		
										K.G. circle 
			
									</div>
		
								</div>
	
									<!-- ORIGIN ENDS -->
	
	
									<!-- DESTINATION STARTS -->
	
								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Destination
			
									</div>
		
									<div class="values destination">
		
										Mangalore
			
									</div>
		
									<div class="destinationSubscript">
		
										StateBank
			
									</div>
		
								</div>
	
									<!-- DESTINATION ENDS -->
	
	
									<!-- SEATS STARTS -->

								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Seats
			
									</div>
		
									<div class="values seats">
		
										50 seats
			
									</div>
		
									<div class="seatsSubscript">
		
										8 windows
			
									</div>
		
								</div>
	
									<!-- SEATS ENDS -->
	
	
									<!-- FARE STARTS -->
	
								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Fare
			
									</div>
		
									<div class="values fare">
		
										2500
			
									</div>
		
									<div class="fareSubscript">
		
										incl. of GST
			
									</div>
		
								</div>
	
									<!-- FARE ENDS -->
									
							</div> <!-- listItem 1 -->
							
							<div class="listItem">
													
								<!-- OPERATOR STARTS -->

								<div class="col-sm-4 text-center">
	
									<div class="headings">
		
										Operator
			
									</div>
		
									<div class="values origin">
		
										VRL Travels
			
									</div>
		
									<div class="originSubscript">
		
										NON-AC
			
									</div>
		
								</div>
	
								<!-- OPERATOR ENDS -->
	
	
								<!-- ORIGIN STARTS -->

								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Origin
			
									</div>
		
									<div class="values origin">
		
										Bangalore
			
									</div>
		
									<div class="originSubscript">
		
										K.G. circle
			
									</div>
		
								</div>
	
									<!-- ORIGIN ENDS -->
	
	
									<!-- DESTINATION STARTS -->
	
								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Destination
			
									</div>
		
									<div class="values destination">
		
										Mumbai
			
									</div>
		
									<div class="destinationSubscript">
		
										Dadar
			
									</div>
		
								</div>
	
									<!-- DESTINATION ENDS -->
	
	
									<!-- SEATS STARTS -->

								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Seats
			
									</div>
		
									<div class="values seats">
		
										45 seats
			
									</div>
		
									<div class="seatsSubscript">
		
										7 windows
			
									</div>
		
								</div>
	
									<!-- SEATS ENDS -->
	
	
									<!-- FARE STARTS -->
	
								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Fare
			
									</div>
		
									<div class="values fare">
		
										1800
			
									</div>
		
									<div class="fareSubscript">
		
										incl. of GST
			
									</div>
		
								</div>
	
									<!-- FARE ENDS -->
									
							</div> <!-- listItem 2 -->
							
							<div class="listItem">
													
								<!-- OPERATOR STARTS -->

								<div class="col-sm-4 text-center">
	
									<div class="headings">
		
										Operator
			
									</div>
		
									<div class="values origin">
		
										Jayadeva travels LTD
			
									</div>
		
									<div class="originSubscript">
		
										AC Sleeper
			
									</div>
		
								</div>
	
								<!-- OPERATOR ENDS -->
	
	
								<!-- ORIGIN STARTS -->

								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Origin
			
									</div>
		
									<div class="values origin">
		
										Goa
			
									</div>
		
									<div class="originSubscript">
		
										Canacona
			
									</div>
		
								</div>
	
									<!-- ORIGIN ENDS -->
	
	
									<!-- DESTINATION STARTS -->
	
								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Destination
			
									</div>
		
									<div class="values destination">
		
										Bangalore
			
									</div>
		
									<div class="destinationSubscript">
		
										K.G. circle
			
									</div>
		
								</div>
	
									<!-- DESTINATION ENDS -->
	
	
									<!-- SEATS STARTS -->

								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Seats
			
									</div>
		
									<div class="values seats">
		
										50 seats
			
									</div>
		
									<div class="seatsSubscript">
		
										8 windows
			
									</div>
		
								</div>
	
									<!-- SEATS ENDS -->
	
	
									<!-- FARE STARTS -->
	
								<div class="col-sm-2 text-center">
	
									<div class="headings">
		
										Fare
			
									</div>
		
									<div class="values fare">
		
										2500
			
									</div>
		
									<div class="fareSubscript">
		
										incl. of GST
			
									</div>
		
								</div>
	
									<!-- FARE ENDS -->
									
							</div> <!-- listItem 3 -->
							
						</div> <!-- bg -->
						
					</div> <!-- popularBus -->
					
				<!-- </div> -->
				
			<!-- POPULAR BUS SECTION ENDS -->
			
			
			
			<?php include("common/footer.php"); ?>
			
			
		
		</div> <!-- container-fluid -->
	
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>