<?php

include "connection.php";
$id=$_GET["carID"];

$ctype="";
$carmodel="";
$colour="";
$carnumb="";
$rating="";
$imagee="";


$res=mysqli_query($link,"select * from cabdrivers where carID ='$id'");
while($row=mysqli_fetch_array($res))
{
   
$ctype=$row["carType"];
$carmodel=$row["carModel"];
$colour=$row["color"];
$carnumb=$row["carNo"];
$rating=$row["driverRating"];
$imagee=$row["imagee"];
}



?>
<!DOCTYPE html>

<head>
    <title>ADMIN | EDIT CAR DETAILS</title>
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
                    <a href="#" style="text-decoration: none;">ADD BUS </a>
                    <a href="addBusCity.php" style="text-decoration: none;">ADD BUS CITY</a>
                        <a href="ViewBus.php" style="text-decoration: none;">VIEW BUS </a>
                        <a href="viewBusBook.php" style="text-decoration: none;">BUS BOOKING</a>
                        <a href="busstaff.php" style="text-decoration: none;">BUS STAFFS</a>
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
            <h1 style="color:white;"><center><b>EDIT CAR DETAILS</b></center></h1><br><br>
          
            <form action="" method="POST" enctype="multipart/form-data" >
           
            <div style="margin-left:600px">
            <img src="image/car/<?php echo $imagee; ?>"  height="150px" width="200px">
            </div>
            <table style="margin-left:500px;">
               
            <tr>
                            <td><br><label>Car type:</label></td>
                            <td style="width:300px">
                            <br><br>
                            <div class="form-group">
    								<select id= "carType" class="selectpicker form-control" data-size="5" title="Select car type" name="carType" required>
									<option value="<?php echo $ctype; ?>"><?php echo $ctype; ?> </option>
                                   
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
									<option value="<?php echo $carmodel; ?>"><?php echo $carmodel; ?> </option>
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
                    <td>					
                        <lable>Car Model :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="cmodel"  placeholder="Enter origin"  required value="<?php echo $carmodel; ?>"/></p>			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Colour :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="colour"  placeholder="Enter Destination"  required value="<?php echo $colour; ?>"/></p>			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Car Number :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="cnumb"  placeholder="Enter Destination area"  required value="<?php echo $carnumb; ?>"/></p>			
                    </td>		
                </tr>


                <tr>			
                    <td>				
                        <lable>Rating :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="rating"  placeholder="Enter origin area"  required value="<?php echo $rating; ?>"/></p>			
                    </td>		
                </tr>
				<tr>
                     <td>				
                        <lable>Car Image :</lable> 	
                        <br>	<br>		
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
                    <td>
                    <div class="w3-container">
            
                             <input type="submit" name="update" value="uplode">   
                           <a href="viewCab.php">  <input style="color:black;" type="button" name="Cancel" value="cancel"></a>
                    </div>
                    </td>
                </tr>
            </table>

            

        </form>
        
        <?php

            if(isset($_POST["update"]))
            {
                         $image =$_FILES['image']['name'];
                        $target ="image/car/".basename($image);
               
					if($image=="")
					{
						 mysqli_query($link, "update cabdrivers set carType='$_POST[carType]', carModel='$_POST[cmodel]',color='$_POST[colour]',carNo='$_POST[cnumb]',driverRating='$_POST[rating]' where carID =$id");
           
					}
					else{
                        
                    mysqli_query($link, "update cabdrivers set carType='$_POST[carType]', carModel='$_POST[cmodel]',color='$_POST[colour]',carNo='$_POST[cnumb]',driverRating='$_POST[rating]',imagee='$image' where carID =$id");
                    $query_run = mysqli_query($conn,$querystring);
                    if ( move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                        echo'<script type="text/javascript"> alert("image uploded"); window.location="viewCab.php"; </script>';
                    }else{
                        echo'<script type="text/javascript"> alert("image not uploded"); window.location="viewCab.php"; </script>';
                    }
					}
                
               

                ?>
                    <script type="text/javascript">
                    window.location="viewCab.php";
                    </script>
                <?php
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
<?php } ?>
</body>