
<!DOCTYPE html>

<head>
    <title>ADMIN | ADD CAR</title>
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
        table,
        td {
            border: 1px solid steelblue;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $conn=mysqli_connect("localhost","root","","projectmeteor");        
        session_start();
        if(empty($_SESSION['suname']))
        {
            echo '<script>window.location= "index.php";</script>';
            die();
        }
        else
        {
            $staff_id = $_SESSION['suname'];
    ?>
     <div class="full_sht">
        <div class="headder">
            <h1 style="font-weight: bold ;">ADMIN PANEL</h1>
         <a href="logout.php"> <button class="powerbtn" style="font-size:34px" onclick=" alert('Are you sure you want to Logout?');"> <i class="fa fa-power-off"></i></button></a>
        </div>
        <div class="cntnt" >
            <div class=" nav">
                <div class="sidenav">
                <a href="addstaff.php" style="text-decoration: none;">ADD STAFF</a>
                    <a href="admin.php" style="text-decoration: none;">CUSTOMER DETAILS</a>
                    <a href="viewContactUs.php" style="text-decoration: none;">CUSTOMER FEEDBACK</a>
                    <button class="dropdown-btn">PACKAGE 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                    <a href="addpackage.php" style="text-decoration: none;">ADD PACKAGE </a>
                        <a href="viewPackage.php" style="text-decoration: none;">VIEW PACKAGE </a>
                        <a href="viewPackageBook.php" style="text-decoration: none;">PACKAGE BOOKING</a>
                        <a href="packagestaf.php" style="text-decoration: none;">PACKAGE STAFFS</a>
                    </div>


                    <button class="dropdown-btn">BUS 
                          <i class="fa fa-caret-down"></i>
                        </button>
                    <div class="dropdown-container">
                    <a href="addBus.php" style="text-decoration: none;">ADD BUS </a>
                    <a href="addBusCity.php" style="text-decoration: none;">ADD BUS CITY</a>
                        <a href="ViewBus.php" style="text-decoration: none;">VIEW BUS </a>
                        
                        <a href="viewBusBookings.php" style="text-decoration: none;">BUS BOOKING</a>
                        <a href="busstaff.php" style="text-decoration: none;">BUS STAFFS</a>
                        <a href="viewBusDriver.php" style="text-decoration: none;">BUS DRIVERS</a>
                        <a href="viewBusDriverComplaints.php" style="text-decoration: none;">BUS DRIVERS COMPLAINTS</a>
                    </div>
                    <button class="dropdown-btn">CAR 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-container">
                    <a href="addcar.php" style="text-decoration: none;">ADD CARS </a>
                   
                        <a href="viewCab.php" style="text-decoration: none;">VIEW CARS </a>
                        <a href="viewCabtype.php" style="text-decoration: none;">VIEW CARS TYPE </a>
                        <a href="viewCabBook.php" style="text-decoration: none;">CAR BOOKING</a>
                        <a href="carstaf.php" style="text-decoration: none;">CAR STAFFS</a>
                    </div>

                </div>
            </div>
            <div class="display scroll">
            <h1 style="color:white;"><center><b>ADD CAR</b></center></h1><br><br>
                   

            <form action="" method="POST"  enctype="multipart/form-data">
                    <table style="margin-left:500px;">
                        <tr>
                            <td><label>Car type:</label></td>
                            <td style="width:300px">

                            <div class="form-group">
    								<select id= "carType" class="selectpicker form-control" data-size="5" title="Select car type" name="carType" required>
									<option disabled selected>-- Select Car Type--</option>
                                    <option value="Hatchback">Hatchback</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="SUV">SUV</option>
                                  	
									</select>
								</div>
                        
                            </td>
                        </tr>

                        <tr>
                            <td><label>Car Model:</label></td>
                            <td style="width:300px">

                            <div class="form-group">
    								<select id= "carType" class="selectpicker form-control" data-size="5" title="Select car type" name="cmodel" required>
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
                        
                            </td>
                        </tr>

                        <tr>
                            <td><label>Car Colour:</label></td>
                            <td><input type="text" name="cclr" style="width: 100%; border-radius: 5px;" required/><br><br></td>
                        </tr>
                        <tr>
                            <td><label>Car No.:</label></td>
                            <td><input type="text" name="cno" style="width: 100%; border-radius: 5px;" required/><br><br></td>
                        </tr>

                        <tr>
                            <td><label>Car Rating:</label></td>
                            <td><input type="text" name="crating" style="width: 100%; border-radius: 5px;" required/><br><br></td>
                        </tr>
                        <tr>
                     <td>				
                        <lable>Car Image :</lable> 				
                    </td>

                    <td>
                        <div>
                            
                                <input type="hidden" name="size" value="1000000">
                                <div>
                                <input type="file" name="image">
                                </div>
                            <br>
                            
                                
                           
                        </div>            
                    </td>
                </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" style="border-radius:5px" name="csubmit" />
                            <input type="RESET" style="border-radius:5px" name="RESET" value="   RESET  "><br></td>
                        </tr>
                    </table>

                    
                </form>
            </div>
        </div>

    </div>
    <?php
            $conn=mysqli_connect("localhost","root","","projectmeteor");
            if(isset($_POST['csubmit']))
            {
                
                $ctype=$_POST['carType'];
                $cmodel =$_POST['cmodel'];
                $cclr=$_POST['cclr'];
                $cnum=$_POST['cno'];
                $crating=$_POST['crating'];
                $image =$_FILES['image']['name'];
                
                $target ="image/car/".basename($image);
                
                $s= "select * from cabdrivers where carNo = '$cnum'";
                $res = mysqli_query($conn,$s);
                $num =mysqli_num_rows($res);
                
                if($num == 1){
                    echo '<script>alert("This Car Number Alredy Taken"); window.location="addcar.php";
                    </script>';
                }
                else{

                $querystring="INSERT INTO cabdrivers(carType,carModel,color,carNo,driverRating,imagee) VALUES('$ctype','$cmodel','$cclr','$cnum','$crating','$image')";	
                
                $query_run = mysqli_query($conn,$querystring);
                if ( move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    echo'<script type="text/javascript"> alert("Car uploded") </script>';
                }else{
                    echo'<script type="text/javascript"> alert("This Car Can not uploded") </script>';
                }
                
            }
                
            }
        ?>






            </div>
        </div>

    </div>

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
    <?php 
    }
?>
</body>