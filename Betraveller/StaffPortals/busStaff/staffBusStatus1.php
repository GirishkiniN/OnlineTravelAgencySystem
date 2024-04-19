<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>STAFF PORTAL | BUS STATUS</title>
	<style type="text/css">
		.div2 
            {
            	padding-top: 25px;
                margin-top:10px;
                width: 950px;
                height: auto;  
                margin-left: 130px;
                border: 1px solid red;
                background-color: white;
            }
            
            table 
        	{
            margin: 0 auto;
            margin-top: 35px;
            font-size: 15px;
            border: 1px solid black;
            border-collapse: collapse;
            width: 430px;
            height: auto;
            margin-left: 25px;
        	}

        td 
        {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 8px;
            padding-right:-25px;
            text-align: center;
        }
        
        th {
        	background-color: #ddd;
        	text-align: center;
        }
  
        td {
            font-weight: lighter;
        }

        * {
		  box-sizing: border-box;
		}

		.row {
		  display: flex;
		}

		/* Create three equal columns that sits next to each other */
		.column {
		  flex: 33.33%;
		  padding: 5px;
		}
	</style>
</head>
<body>
	<?php
        $conn=mysqli_connect("localhost","root","","projectmeteor");        
        session_start();
        if(empty($_SESSION['staff_id']))
        {
            echo '<script>window.location= "index.php";</script>';
            die();
        }
        else
        {
            $staff_id = $_SESSION['staff_id'];
    ?>
    <div class="full_sht">
        <div class="headder">
            <h3 style="color: white; padding-top:11px; padding-left: 20px;"></h3>
            <img src="logo.png" height="60px" width="250px" style="margin-top:-20px"/>
            <h3 data-toggle="modal" data-target="#myModal" style="color: white; margin-top:-15px; font-size:20px;" class="powerbtn">
                <?php
                    $conn=mysqli_connect("localhost","root","","projectmeteor");  
                    $query = "SELECT Full_name FROM staff WHERE u_name='$staff_id' "; 
                    $result = mysqli_query($conn,$query) or die(mysql_error());
                    while($row=$result->fetch_assoc()) 
                    {
                        echo $row['Full_name'];
                    }      
                ?>      
            </h3>
        </div>
        <div class="cntnt" >
            <div class=" nav">
                <div class="sidenav">
                    <a href="busStaffHome.php" style="text-decoration: none;">HOME</a>

                    <hr>

                    <a href="busBookings.php" style="text-decoration: none;">BUS BOOKINGS</a>

                    <hr>

                    <button class="dropdown-btn">BUS DETAILS
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="viewBusDetails.php" style="text-decoration: none;">VIEW DETAILS</a>
                        <a href="reachedBus.php" style="text-decoration: none;">REACHED BUSES</a>
                        <a href="ViewBus.php" style="text-decoration: none;">UPDATE DETAILS</a>
                    </div>

                    <hr>

                    <button class="dropdown-btn">BUS DRIVER 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="viewDriverDetails1.php" style="text-decoration: none;">DRIVER DETAILS</a>
                        <a href="addDriverDetails.php" style="text-decoration: none;">ADD DRIVER</a>
                        <a href="addBusDriverNotice.php" style="text-decoration: none;">SEND NOTICE</a>
                        <a href="viewDriverComplaints.php" style="text-decoration: none;">DRIVER COMPLAINTS</a>
                    </div>
                </div>
            </div>
            <div class="display scroll">
                                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">BEE TRAVELLER BUS STAFF</h4>
                        </div>
                        <div class="modal-body">
                            <?php
                                $conn=mysqli_connect("localhost","root","","projectmeteor");  
                                $query = "SELECT * FROM staff WHERE u_name='$staff_id' "; 
                                $result = mysqli_query($conn,$query) or die(mysql_error());
                                while($row=$result->fetch_assoc()) 
                                {      
                            ?>
                            <label for="Name">Name : </label>                
                            <span name="Name"> <?php echo $row['Full_name']; ?></span><br>
                            <label for="Name">Email : </label>               
                            <span name="Name"> <?php echo $row['Email']; ?></span><br>
                            <label for="Name">Phone : </label>                
                            <span name="Name"> <?php echo $row['phn_no']; ?></span><br>
                            <label for="Name">Address : </label>                
                            <span name="Name"> <?php echo $row['Address']; ?></span><br>
                            <label for="Name">Staff ID : </label>                
                            <span name="Name"> <?php echo $row['u_name']; ?></span>                                        
                            <?php } ?>
                        </div>
                        <div class="modal-footer">
                            <a href="updateBusStaffDetails.php?staff_id=<?php echo $staff_id;?>"><button type="button" style="margin-left: 0;" class="btn btn-default">UPDATE PROFILE</button></a>
                          <a href="Logout.php"><button type="button" name="logout" onclick="return confirm('Are you sure you want to Logout ?');" class="btn btn-default">LOGOUT</button></a>
                        </div>
                      </div>
                      
                    </div>
                </div>
              
	<?php
		$conn=mysqli_connect("localhost","root","","projectmeteor");
    	$bus_no=$_GET["bus_id"];
    	$conn=mysqli_connect("localhost","root","","projectmeteor");
		$querystring="SELECT * FROM bus WHERE busID='$bus_no'";	
        $result = mysqli_query($conn,$querystring);
        while(($rows1=$result->fetch_assoc()))
        {
	?>
	<br>
	<h1><center>DETAILS OF BUS NO. <?php echo $bus_no; ?></center></h1>
	<br>
	<div class="div2">
	<div class="row">
		<div class="column">	
			<img id="optionalstuff" src="https://www.volvobuses.in/content/dam/volvo/volvo-buses/markets/india/B11R/1860X1050-twin-buses.jpg/_jcr_content/renditions/1860X1050-twin-buses-teaser2.jpg" alt="complaint" width="350" height="300" style="margin-right: 20px; margin-left: 50px; margin-top: 50px;">
		</div>
		<div class="column">
			<table style="margin-top: 0px;">
				<tr>
					<center><th colspan="3">DETAILS OF BUS NO. <?php echo"$bus_no" ?> </th></center>
				</tr>
				<tr>
					<th>OPERATOR</th>
					<td><?php echo $rows1['operator'];?></td>
				</tr>
				<tr>	
					<th>TYPE</th>
					<td><?php echo $rows1['type'];?></td>

				</tr>
				<tr>	
					<th>ORIGIN</th>
					<td><?php echo $rows1['origin'];?></td>
					
				</tr>
				<tr>	
					<th>DESTINATION</th>
					<td><?php echo $rows1['destination'];?></td>
				</tr>
				<tr>	
					<th>DEPARTURE</th>
					<td><?php echo $rows1['departure'];?></td>
				</tr>
				<tr>	
					<th>ARRIVAL</th>
					<td><?php echo $rows1['arrival'];?></td>
				</tr>
				<tr>	
					<th>SEATS</th>
					<td><?php echo $rows1['seats'];?></td>
				</tr>
				<tr>	
					<th>FARE</th>
					<td><?php echo $rows1['fare'];?></td>
				</tr>
				<tr>	
					<th>SEATS AVAILABLE</th>
					<td><?php echo $rows1['seatsAvailable'];?></td>
				</tr>
				<tr>	
					<th>NO. OF BOOKINGS</th>
					<td><?php echo $rows1['noOfBookings'];?></td>
				</tr>
				<tr>	
					<th>STATUS</th>
					<td><?php echo $rows1['status'];?></td>
				</tr>
				<tr>	
					<th>DATE OF TRAVEL</th>
					<td><?php echo $rows1['Date_of_leaving'];?></td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>		
	</div>
</div>
         </div>   
    </div>    
	</div>
	<?php 
    }
?>
  </body>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</html>

	