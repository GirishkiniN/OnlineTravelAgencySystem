<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BUS STAFF | UPDATE DETAILS</title>
	<link href="style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	 .div2 
            {
                margin-top:50px;
                width: 600px;
                height: 350px;  
                margin-left: 300px;
                border: 1px solid red;
                background-color: white;
            }
  	
  </style>
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
            $staffId=$_GET["staff_id"];
            $query1 = "SELECT * FROM staff WHERE u_name='$staffId' "; 
            $result1 = mysqli_query($conn,$query1) or die(mysql_error());
            while($row1=$result1->fetch_assoc()) 
            {
	?>
</head>
<body>
	<div class="full_sht">
        <div class="headder">
            <h3 style="color: white; padding-top:11px; padding-left: 20px;"></h3>
            <img src="logo.png" height="60px" width="250px" style="margin-top:-20px"/>
            <h3 data-toggle="modal" data-target="#myModal" style="color: white; margin-top:-15px; font-size:20px;" class="powerbtn">
                <?php
                    $conn=mysqli_connect("localhost","root","","projectmeteor");  
                    $query = "SELECT Full_name FROM staff WHERE u_name='$staffId' "; 
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
                        <a href="updateBusDetails.php" style="text-decoration: none;">UPDATE DETAILS</a>
                    </div>

                    <hr>

                    <button class="dropdown-btn">BUS DRIVER 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="viewDriverDetails1.php" style="text-decoration: none;">DRIVER DETAILS</a>
                        <a href="addDriverDetails.php" style="text-decoration: none;">ADD DRIVER</a>
                        <a href="viewPackageBook.php" style="text-decoration: none;">SEND NOTICE</a>
                        <a href="viewDriverComplaints.php" style="text-decoration: none;">DRIVER COMPLAINTS</a>
                    </div>
                </div>
            </div>
            <div class="displayUpdate scroll">
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
                                $query = "SELECT * FROM staff WHERE u_name='$staffId' "; 
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
                          <a href="Logout.php"><button type="button" name="logout" onclick="return confirm('Are you sure you want to Logout ?');" class="btn btn-default">LOGOUT</button></a>
                        </div>
                      </div>
                      
                    </div>
                </div>
            	<br>
            	<h1><center>UPDATE DETAILS</center></h1>
            	<div class="div2">
                    <form action="" method="POST">
                    <center><table>

				        <tr>
                            <td>NAME : </td>
                            <td><input type="text" name="name" value="<?php echo $row1['Full_name'];?>"></td>
                            <br>
                        </tr>
						<tr>
							<td>AGE : </td>
							<td><input type="text" name="age" value="<?php echo $row1['age'];?>"></td>
							<br>
						</tr>
						<tr>
							<td>EMAIL : </td>
							<td><input type="text" name="email" value="<?php echo $row1['Email'];?>"></td>
						</tr>
						<tr>
							<td>PHONE NUMBER : </td>
							<td><input type="tel" maxlength="10" name="phoneNo" value="<?php echo $row1['phn_no'];?>"></td>
						</tr>
						<tr>
							<td>ADDRESS : </td>
							<td><input type="text" name="address" value="<?php echo $row1['Address'];?>"></td>
						</tr>
					</table></center>
					<div style="padding-top: 25px;" align="center">
						<input type="submit" name="update" onclick="return confirm('Do you really want to update profile ?');" value="UPDATE">
					</div>
				</form>
				</div>
		<?php } } ?>	
			</div>
		</div>
	</div>
</body>

<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE); 
	$conn=mysqli_connect("localhost","root","","projectmeteor");
	if(isset($_POST["update"]))
    {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$email = $_POST['email'];
		$phone_num = $_POST['phoneNo'];
		$address = $_POST['address'];
		$querystring="UPDATE staff SET Full_name='$name', age='$age', Email='$email', phn_no='$phone_num', Address='$address' WHERE u_name = '$staffId' AND domain = 'Bus_staff'";
	   	mysqli_query($conn,$querystring);
		echo'<script>alert("PROFILE HAS BEEN UPDATED SUCCESFULY!");</script>';
		echo '<script>window.location= "busStaffHome.php";</script>';
	}	
                                       
?>
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