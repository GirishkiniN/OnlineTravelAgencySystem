<?php

include "connection.php";

$id=$_GET["carID"];
$ctype="";
$carmodel="";
$colour="";
$carnumb="";
$rating="";
$imagee="";

$res=mysqli_query($db,"select * from cabdrivers where carID ='$id'");
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
<html>
<head>
    <meta charset="utf-8">
    <title>CAR STAFF | HOME</title>
    <link href="style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .mySlides {display:none;}

        .outer 
        {
            background-color:lightgray;
            height: 320px;
        }
        .outer > * 
        {
          display:inline-block;
          vertical-align:middle;
          
        }

        #slideshow 
        {
          margin: 10px auto;
          position: relative;
          width: 240px;
          height: 240px;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }

        #slideshow > div 
        {
          position: absolute;
          top: 10px;
          left: 10px;
          right: 10px;
          bottom: 10px;
        }

        #slideshow1 
        {
          margin: 10px auto;
          position: relative;
          width: 240px;
          height: 240px;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }

        #slideshow1 > div 
        {
          position: absolute;
          top: 10px;
          left: 10px;
          right: 10px;
          bottom: 10px;
        }

        #slideshow2 
        {
          margin: 10px auto;
          position: relative;
          width: 240px;
          height: 240px;
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }

        #slideshow2 > div 
        {
          position: absolute;
          top: 10px;
          left: 10px;
          right: 10px;
          bottom: 10px;
        }

        .btn_suc{
            width:60px;
            height: 40px;
            background-color: greenyellow;
             color: red;
        }
        #busLeavingToday
        {
            padding-top: 25px;
            overflow-x:auto;
            background-color:#AFEEEE;
            background-repeat: no-repeat;
            padding-bottom:100px;
            opacity:0.85;
            background-size: cover;
        }

        table 
        {
            margin: 0 auto;
            font-size: 15px;
            border-collapse: collapse;
            width:500px;
        }

  
        th,
        td 
        {
            padding: 8px;
            text-align: center;
        }
        
        th
        {
            background-color: #ddd;
        }
  
        td
        {
            font-weight: lighter;
        }
        
        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
        background-color: #E4F5D4;
        }
        .button 
        {
          background-color: #4CAF50; /* Green */
          border: none;
          color: white;
          padding: 10px 12px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 10px;
        }
        #footer
        {
            width:100%;
            padding-top:50px;
            padding-bottom:50px;
            background-color:black;
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
            <h3 data-toggle="modal" data-target="#myModal" style="color: white; margin-top:-20px; font-size:30px;" class="powerbtn">
            
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
                        <a href="carStaffHome.php" style="text-decoration: none;">HOME</a>

                        <hr>

                        <a href="carBookings.php" style="text-decoration: none;">CAR BOOKINGS</a>

                        <hr>

                        <a href="viewcar.php" style="text-decoration: none;">CAR DETAILS</a>

                        <hr>

                    </div>
            </div>
            <div class="display scroll">
            
                    <div class="modal fade" id="myModal" role="dialog">
                    
                        <div class="modal-dialog">
                
                                <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">BEE TRAVELLER CAR STAFF</h4>
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
                
                    <div>
                    <h1 ><center><b>VIEW CAR DETAILS</b></center></h1><br><br>
                    
                    <form action="" method="POST" enctype="multipart/form-data" >
            <div style="margin-left:500px">
            <img src="../../admin/image/car/<?php echo $imagee; ?>"  height="150px" width="200px">
            </div>
            <table style="margin-bottom:50px">
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
                    <td>				
                        <lable>Car Model :</lable> 				
                    </td>			
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
            
                             <input type="submit" name="updat" value="uplode">   
                           <a href="viewcars.php">  <input style="color:black;" type="button" name="Cancel" value="cancel"></a>
                    </div>
                    </td>
                </tr>
            </table>

            

        </form>
        
        <?php
			$conn=mysqli_connect("localhost","root","","projectmeteor");

            if(isset($_POST["updat"]))
            {$id=$_GET["carID"];
					$carmodel = $_POST['cmodel'];
					$car_color = $_POST['colour'];
					$car_no = $_POST['cnumb'];
					$car_rating = $_POST['rating'];
					  $image =$_FILES['image']['name'];
                        $target ="../../admin/image/car/".basename($image);
						
						if($image==""){
							$query = "UPDATE cabdrivers SET carType='$_POST[carType]',carModel = '$carmodel', color = '$car_color', carNo= '$car_no', driverRating = '$car_rating' where carID = '$id'";
							mysqli_query($conn,$query);
							echo'<script>alert($id);</script>';  
							echo '<script>window.location= "viewcar.php";</script>';
							
						}
						else{
							$query = "UPDATE cabdrivers SET carType='$_POST[carType]',carModel = '$carmodel', color = '$car_color', carNo= '$car_no', driverRating = '$car_rating',imagee='$image' where carID = '$id'";
							 $query_run =mysqli_query($conn,$query);
							 if ( move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
								echo'<script type="text/javascript"> alert("image uploded"); window.location="viewcar.php"; </script>';
							}else{
								echo'<script type="text/javascript"> alert("image not uploded"); window.location="viewcar.php"; </script>';
							}
						}
                   
            }
        ?>
                    </div>

                    <div id="footer">
                        <h2 style="color:white"><center>BEE TRAVELLER TRAVEL AGENCY</center></h2>
                        <div style="color:white; font-size: 13px;"><center>2021 &#169; BeeTraveller travel agency | All rights Reserved.</center></div>
                    </div>
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
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }

    </script>

    <script type="text/javascript">
        $("#slideshow > div:gt(0)").hide();

        setInterval(function() {
          $('#slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow');
        }, 3000);

        $("#slideshow1 > div:gt(0)").hide();

        setInterval(function() {
          $('#slideshow1 > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow1');
        }, 4000);

        $("#slideshow2 > div:gt(0)").hide();

        setInterval(function() {
          $('#slideshow2 > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow2');
        }, 5000);

        function myFunction() 
        {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) 
          {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) 
            {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) 
              {
                tr[i].style.display = "";
              } else 
              {
                tr[i].style.display = "none";
              }
            }       
          }
        }

       

    </script>
<?php 
    }
?>
</body>
</html>