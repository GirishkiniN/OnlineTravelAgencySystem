<?php session_start();
if(!isset($_SESSION["username"]))
{
    	header("Location:blocked.php");
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
	
		<title>BeeTraveller | Booking</title>
    
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
		
		<?php include("common/headerLoggedIn.php"); ?>
		
		<?php
		
			$mode=$_POST["modeHidden"];
		
		?>
		
		<?php
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "projectmeteor";
			
			// Creating a connection to projectmeteor MySQL database
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Checking if we've successfully connected to the database
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
		
		?>
		
		<div class="spacer">a</div>
		
		<div class="bookingWrapper">
			
			<div class="headingOne">
				
				Please review and confirm your booking
				
			</div>
			
			<!-- changing contents of the page based on mode -->
			
			<!----------------------------- Package --------------------------------->
			
			
			<?php if($mode=="hotel"): ?>
			
			<div class="col-sm-12 bookingHotel">
			
			<?php
				
				$hotelID = $_POST["hotelIDHidden"];
				
				$hotelSQL = "SELECT * FROM `hotels` WHERE hotelID='$hotelID'";
				$hotelQuery = $conn->query($hotelSQL);
				$row = $hotelQuery->fetch_assoc();
				
			?>
				
				<div class="col-sm-7"> <!-- hotel summary container -->
				
				<div class="col-sm-12">
				
					<div class="boxLeftHotel">
					
						<div class="col-sm-12 hotelMode">Booking Summary</div>
						
						<div class="col-sm-12 hotelName">
							
							Name of the Package: <span class="nameText"><?php echo $row["hotelName"].', '.$row["locality"].', '.$row["city"]; ?></span>
							
						</div>
						
						<div class="col-sm-3 borderRight">
							<div class="checkIn"><?php echo $_SESSION["checkIn"]; ?></div>
							<div class="checkInSubscript">Check In Date</div>
						</div>
						
						<div class="col-sm-3 borderRight">
							<div class="checkOut"><?php echo $_SESSION["checkOut"]; ?></div>
							<div class="checkOutSubscript">Check Out Date</div>
						</div>
						
						
						<div class="col-sm-3 borderRight">
							<div class="noOfRooms"><?php echo $_SESSION["noOfRooms"]; ?></div>
							<div class="noOfRoomsSubscript">No. of rooms</div>
						</div>
						
						<div class="col-sm-3">
							<div class="noOfGuests"><?php echo $_SESSION["noOfGuests"]; ?></div>
							<div class="noOfGuestsSubscript">No. of guests</div>
						</div>
					
					</div> <!-- boxLeft -->
					<div style="margin-left:100px;"><b><spam style="font-size:20px;">&#x1F6C8;</spam>&nbsp;&nbsp;&nbsp; The Convenience Fee will be refunded at the time of checkout </b></div>
				
				</div> <!-- col-sm-7 Departure -->
				
				</div>
				
				<div class="col-sm-5"> <!-- fare container -->
				
				<div class="col-sm-12">
				
					<div class="boxRightHotel">
					
					<div class="col-sm-12 fareSummary">Payment Summary</div>
						
					<div class="col-sm-8">
					
					<?php
						
						$var1 = $_SESSION["checkIn"];
						$var2 = $_SESSION["checkOut"];
						$date1 = date_create(str_replace('/', '-', $var1));
						$date2 = date_create(str_replace('/', '-', $var2));
						$diff=date_diff($date1,$date2);
					
					?>
					
						<div class="heading">1 Package x <?php echo $_SESSION["noOfGuests"]; ?> Guest</div>
						<div class="heading">₹ 100 x <?php echo $_SESSION["noOfRooms"]; ?> Rooms</div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<?php $noOfDays = $diff->format("%a"); ?>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $_SESSION["noOfGuests"]*$row["price"] ?></div>
						<div class="price">
						<?php
							$conn=mysqli_connect("localhost","root","","projectmeteor"); 
                       		$querystring="SELECT price FROM hotels WHERE hotelID='$hotelID'";	
							$result = mysqli_query($conn,$querystring);
							while($row=$result->fetch_assoc()) 
							{
						?>		
							
						</div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $_SESSION["noOfRooms"]*100 ?></div>
						<div class="price"><span class="sansSerif">₹ 240 </span></div>
					</div>	
					
					<div class="col-sm-12">
							
							<div class="calcBar"></div>
							
					</div>
					
					<div class="col-sm-8">
						<div class="headingTotal">Total Payment</div>
					</div>
					<?php
					$totalcst=($_SESSION["noOfGuests"]*$row["price"])+ 240 + ( $_SESSION["noOfRooms"]*100);
					?>
					
					<div class="col-sm-4">
						<div class="priceTotal"><span class="sansSerif">₹ </span><?php echo $totalcst; ?></div>
					</div>
					<?php } ?>
					<form action="payment.php" method="POST">
					
						<div class="bookingButton text-center">
							<input type="submit" class="confirmButton" value="Confirm Booking">
						</div>
						
						<?php $totalFare = $totalcst; ?>
						
						<input type="hidden" name="fareHidden" value="<?php echo $totalFare; ?>">
						<input type="hidden" name="hotelIDHidden" value="<?php echo $hotelID; ?>">
						<input type="hidden" name="modeHidden" value="<?php echo "hotel" ?>">
					
					</form>
					
				</div>
				
			</div> <!-- col-sm-5 Fare -->
			
				</div> <!-- fare container -->
				
			</div> <!-- hotel -->
			
			<!------------------------------------- CABS ---------------------------------------->
			<?php elseif($mode=="cabs"): ?>
			
			<div class="col-sm-12 bookingCabs">
			
			<?php
				
				$origin = $_POST["originCity"];
				$destination = $_POST["destinationCity"];
				$return=$_POST["return"];
				$date = $_POST["date"];
				$time = $_POST["time"];
				$drpdate=$_POST["drpdate"];
				$carType = $_POST["carType"];
				
				if($return=='Yes'){
					$ret=2;
				}
				else{
					$ret=1;
				}

				$_SESSION["originCabs"] = $origin;
				$_SESSION["destinationCabs"] = $destination;
				$_SESSION["return"]=$ret;
				$_SESSION["dateCabs"] = $date;
				$_SESSION["timeCabs"] = $time;
				$_SESSION["drpdate"] = $drpdate;
				$_SESSION["carTypeCabs"] = $carType;
				
				$cabSQL = "SELECT * FROM `cabs` WHERE origin='$origin' AND destination='$destination'";
				$cabQuery = $conn->query($cabSQL);
				$rowCab = $cabQuery->fetch_assoc();
				
			?>
			<?php
						function dateDiffInDays($date, $drpdate) 
						{
							// Calculating the difference in timestamps
							$diff = strtotime($drpdate) - strtotime($date);
							
							// 1 day = 24 hours
							// 24 * 60 * 60 = 86400 seconds
							return abs(round($diff / 86400));
						}
						$date1 = $_SESSION["dateCabs"];
						$date2= $_SESSION["drpdate"];
						$dateDiff = dateDiffInDays($date1, $date2);
						
					
					?>
				
				<div class="col-sm-7"> <!-- hotel summary container -->
				
				<div class="col-sm-12">
				
					<div class="boxLeftCabs">
					
						<div class="col-sm-12 cabMode">Booking Summary</div>
						
						<div class="col-sm-12 cabsDummy">
						
							<div class="col-sm-4">
							
							<div class="origin"><?php echo $rowCab["origin"]; ?></div>
							
							</div>
							
							<div class="col-sm-4">
								
								<div class="arrowCabs"></div>
								
							</div>
							
							<div class="col-sm-4">
							
							<div class="destination"><?php echo $rowCab["destination"]; ?></div>
								
							</div>
							
						</div>
						
						<div class="col-sm-2 borderRight" style="margin-left:60px;" >
							<div class="checkIn"><?php echo $_SESSION["dateCabs"]; ?></div>
							<div class="checkInSubscript">Pickup Date</div>
						</div>
						
						
						<div class="col-sm-2 borderRight">
							<div class="checkOut"><?php echo $_SESSION["timeCabs"]; ?></div>
							<div class="checkOutSubscript">Pickup Time</div>
						</div>

						<div class="col-sm-2 borderRight">
							<div class="checkOut"><?php echo $_SESSION["drpdate"]; ?></div>
							<div class="checkOutSubscript">Drop date</div>
						</div>

						
						<div class="col-sm-2 borderRight">
							<div class="noOfRooms"><?php echo $_SESSION["carTypeCabs"]; ?></div>
							<div class="noOfRoomsSubscript">Type of Car</div>
						</div>
						
						<div class="col-sm-2">
							<div class="noOfGuests"><?php echo $rowCab["distance"]." km x".$_SESSION["return"] ; ?></div>
							<div class="noOfGuestsSubscript">Distance X Ways</div>
						</div>
						
						
						<div class="col-sm-12 distanceNotif text-center">
							
							The distance shown is approximate and is based on pre-selected pickup and dropoff points. The exact distance will depend upon the actual pickup and dropoff points.
							
						</div>
					
					</div> <!-- boxLeft -->
				
				</div> <!-- col-sm-7 Departure -->
				
				</div>
				
				<div class="col-sm-5"> <!-- fare container -->
				
				<div class="col-sm-12">
				
					<div class="boxRightCab">
					
					<div class="col-sm-12 fareSummary">Payment Summary</div>
					<?php 
					if($return=='Yes'){
						$dis=2*$rowCab["distance"];
					}
					else{
						$dis=1*$rowCab["distance"];
					}
					?>
					<?php if($carType=="Swift"): ?>
						
					<div class="col-sm-8">
						<div class="heading">Distance (<?php echo $dis; ?>km @ <span class="sansSerif">₹ </span> 5.5/km) </div>
						<div class="heading">Days (<?php echo $dateDiff; ?> days @ <span class="sansSerif">₹ </span> 160/day) </div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dis*5.5; ?></div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dateDiff*160; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>
					
					<?php $totalFare=($dis*5.5)+($dateDiff*160+250); ?>
					
					<?php elseif($carType=="I10"): ?>
					
					<div class="col-sm-8">
						<div class="heading">Distance (<?php echo $dis; ?>km @ <span class="sansSerif">₹ </span> 5.5/km) </div>
						<div class="heading">Days (<?php echo $dateDiff; ?> days @ <span class="sansSerif">₹ </span> 160/day) </div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dis*5.5; ?></div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dateDiff*160; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>
					
					<?php $totalFare=($dis*5.5)+($dateDiff*160+250); ?>
					<?php elseif($carType=="I20"): ?>
					
					<div class="col-sm-8">
						<div class="heading">Distance (<?php echo $dis; ?>km @ <span class="sansSerif">₹ </span> 5.5/km) </div>
						<div class="heading">Days (<?php echo $dateDiff; ?> days @ <span class="sansSerif">₹ </span> 160/day) </div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dis*5.5; ?></div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dateDiff*160; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>
					
					<?php $totalFare=($dis*5.5)+($dateDiff*160+250); ?>
					
					<?php elseif($carType=="Swift Dzire"): ?>
					
					<div class="col-sm-8">
						<div class="heading">Distance (<?php echo $dis; ?>km @ <span class="sansSerif">₹ </span> 8.75/km) </div>
						<div class="heading">Days (<?php echo $dateDiff; ?> days @ <span class="sansSerif">₹ </span> 180/day) </div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dis*8.75; ?></div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dateDiff*180; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>
					
					<?php $totalFare=($dis*8.75)+($dateDiff*180+250); ?>
					
					
					<?php elseif($carType=="Verna"): ?>
					
					<div class="col-sm-8">
						<div class="heading">Distance (<?php echo $dis; ?>km @ <span class="sansSerif">₹ </span> 8.75/km) </div>
						<div class="heading">Days (<?php echo $dateDiff; ?> days @ <span class="sansSerif">₹ </span> 180/day) </div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dis*8.75; ?></div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dateDiff*180; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>
					
					<?php $totalFare=($dis*8.75)+($dateDiff*180+250); ?>
					
					<?php elseif($carType=="XCent"): ?>
					
					<div class="col-sm-8">
						<div class="heading">Distance (<?php echo $dis; ?>km @ <span class="sansSerif">₹ </span> 8.75/km) </div>
						<div class="heading">Days (<?php echo $dateDiff; ?> days @ <span class="sansSerif">₹ </span> 180/day) </div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dis*8.75; ?></div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dateDiff*180; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>
					
					<?php $totalFare=($dis*8.75)+($dateDiff*180+250); ?>
					<?php elseif($carType=="Creta"): ?>
					
					<div class="col-sm-8">
						<div class="heading">Distance (<?php echo $dis; ?>km @ <span class="sansSerif">₹ </span> 13.25/km) </div>
						<div class="heading">Days (<?php echo $dateDiff; ?> days @ <span class="sansSerif">₹ </span> 230/day) </div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dis*13.25; ?></div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dateDiff*230; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>
					
					<?php $totalFare=($dis*13.25)+($dateDiff*230+250); ?>

					<?php elseif($carType=="Scorpio"): ?>
					
					<div class="col-sm-8">
						<div class="heading">Distance (<?php echo $dis; ?>km @ <span class="sansSerif">₹ </span> 13.25/km) </div>
						<div class="heading">Days (<?php echo $dateDiff; ?> days @ <span class="sansSerif">₹ </span> 230/day) </div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dis*13.25; ?></div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dateDiff*230; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>
					
					<?php $totalFare=($dis*13.25)+($dateDiff*230+250); ?>
					
					<?php elseif($carType=="Innova"): ?>
					
					<div class="col-sm-8">
						<div class="heading">Distance (<?php echo $dis; ?>km @ <span class="sansSerif">₹ </span> 13.25/km) </div>
						<div class="heading">Days (<?php echo $dateDiff; ?> days @ <span class="sansSerif">₹ </span> 230/day) </div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dis*13.25; ?></div>
						<div class="price"><span class="sansSerif">₹ </span><?php echo $dateDiff*230; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>
					
					<?php $totalFare=($dis*13.25)+($dateDiff*230+250); ?>
					
					<?php endif; ?>
					
					<div class="col-sm-12">
							
							<div class="calcBar"></div>
							
					</div>
					
					<div class="col-sm-8">
						<div class="headingTotal">Total Payment</div>
					</div>
					
					<div class="col-sm-4">
						<div class="priceTotal"><span class="sansSerif">₹ </span><?php echo $totalFare; ?></div>
					</div>
					
					<form action="searchCabs.php" method="POST">
					
						<div class="bookingButton text-center">
							<input type="submit" class="confirmButton" value="Confirm and find Car">
						</div>
						
						<input type="hidden" name="fareHidden" value="<?php echo $totalFare; ?>">
						<input type="hidden" name="modeHidden" value="<?php echo "cabs" ?>">
						<?php $_SESSION["cabsFare"]=$totalFare; ?>
					
					</form>
					
					<div class="col-sm-12 fareNotif text-center">
						
						The total amount is approximate. The final amount will depend on the actual distance covered.
						
					</div>
					
				</div>
				
			</div> <!-- col-sm-5 Fare -->
			
				</div> <!-- fare container -->
				
			</div>			
			
			<!------------------------------------- BUSES ---------------------------------------->
			
			<?php elseif($mode=="bus"): ?>
			
			<div class="col-sm-12 bookingBus">
			
			<?php
				
				$busID = $_POST["busIDPass"];
				$date=$_POST["dateHidden"];
				$origin=$_POST["originHidden"];
				$destination=$_POST["destinationHidden"];
				$depart=$_POST["departHidden"];
				$return=$_POST["returnHidden"];
				$noOfPassengers= $_POST["passengersHidden"];
                

				
				$busFinderSQL = "SELECT * FROM `bus` WHERE busID='$busID'";
				$busFinderQuery = $conn->query($busFinderSQL);
				$row = $busFinderQuery->fetch_assoc();
				//$outboundFlightFare = $outboundFlightQuery->fetch_array(MYSQLI_NUM);
				
			?>
				
				<div class="col-sm-7"> <!-- departure container -->
				
				<div class="col-sm-12">
				
					<div class="boxLeftBus">
					
						<div class="col-sm-12 mode">Departure</div>
						
						<div class="col-sm-4">
						
						<div class="origin"><?php echo $origin; ?></div>
						<div class="departs">Departs <?php echo $row["originArea"]; ?> at: <?php echo $row["departure"]; ?></div>
						
						</div>
						
						<div class="col-sm-4">
							
							<div class="arrow"></div>
							
						</div>
						
						<div class="col-sm-4">
						
						<div class="destination"><?php echo $destination; ?></div>
						<div class="arrives">Arrives <?php echo $row["destinationArea"]; ?> at: <?php echo $row["arrival"]; ?></div>
						
						</div>
						
						<div class="col-sm-6 borderRight">
							<div class="operator"><?php echo $row["operator"]; ?></div>
							<div class="operatorSubscript">Operator</div>
						</div>
						
						<div class="col-sm-3 borderRight">
							<div class="class"><?php echo $date; ?></div>
							<div class="classSubscript">Date of journey</div>
						</div>
						
						<div class="col-sm-3">
							<div class="adults"><?php echo $noOfPassengers; ?></div>
							<div class="adultsSubscript">No. of passengers</div>
						</div>
					
					</div> <!-- boxLeft -->
				
				</div> <!-- col-sm-7 Departure -->
				
				</div>
				
				<div class="col-sm-5"> <!-- fare container -->
				
				<div class="col-sm-12">
				
					<div class="boxRightBus">
					
					<div class="col-sm-12 fareSummary">Fare Summary</div>
						
					<div class="col-sm-8">
						<div class="heading"><?php echo $noOfPassengers; ?> Passengers</div>
						<div class="heading">Convenience Fee</div>	
					</div>
					
					<div class="col-sm-4">
						<div class="price"><span class="sansSerif">₹ </span><?php echo $noOfPassengers*$row["fare"]; ?></div>
						<div class="price"><span class="sansSerif">₹ </span>250</div>
					</div>	
					
					<div class="col-sm-12">
							
							<div class="calcBar"></div>
							
					</div>
					
					<div class="col-sm-8">
						<div class="headingTotal">Total Fare</div>
					</div>
					
					<div class="col-sm-4">
						<div class="priceTotal"><span class="sansSerif">₹ </span><?php echo ($noOfPassengers*$row["fare"])+250; ?></div>
					</div>
					
					<form action="passengers.php" method="POST">
					
						<div class="bookingButton text-center">
							<input type="submit" class="confirmButton" value="Confirm Booking">
						</div>
						
						<?php $totalFare = ($noOfPassengers*$row["fare"])+250; ?>
						
						<input type="hidden" name="fareHidden" value="<?php echo $totalFare; ?>">
						<input type="hidden" name="typeHidden" value="<?php echo $type; ?>">
						<input type="hidden" name="originHidden" value="<?php echo $origin; ?>">
						<input type="hidden" name="destinationHidden" value="<?php echo $destination; ?>">
						<input type="hidden" name="departHidden" value="<?php echo $depart; ?>">
						<input type="hidden" name="returnHidden" value="<?php echo $return; ?>">
						<input type="hidden" name="noOfPassengersHidden" value="<?php echo $noOfPassengers; ?>">
						<input type="hidden" name="flightNoOutboundHidden" value="<?php echo $row["flight_no"]; ?>">
						<input type="hidden" name="modeHidden" value="<?php echo "bus"; ?>">
						<input type="hidden" name="busIDHidden" value="<?php echo $busID; ?>">
						<input type="hidden" name="dateHidden" value="<?php echo $date; ?>">
						<input type="hidden" name="classHidden" value="null">
						<input type="hidden" name="adultsHidden" value="0">
						<input type="hidden" name="childrenHidden" value="0">
                        <input type="hidden" name="operatorHidden" value="0">
					
					</form>
					
				</div>
				
			</div> <!-- col-sm-5 Fare -->
			
				</div> <!-- fare container -->
				
			</div> <!-- bus -->
			
			
			
			<?php endif; ?>
			
		</div> <!--bookingWrapper -->
		
	<div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("common/footer.php"); ?>
				
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>