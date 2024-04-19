<!DOCTYPE HTML>
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
	<title>BUS STAFF PORTAL | ADD DRIVER</title>
	
	<style>
		table 
		{
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 50%;
		  
		}

		td, th 
		{
		  border: 1px solid black;
		  text-align: center;
		  padding: 8px;
		  background-color: lightcoral;
		}
		
		.button 
		{
		  background-color: #4CAF50;
		  border: none;
		  color: white;
		  padding: 15px 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 12px;
		  margin: 4px 2px;
		  cursor: pointer;
		}

        .select-bus
        {
            width: 210px;
            height: 30px;
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
                        <a href="updateBusDetails.php" style="text-decoration: none;">UPDATE DETAILS</a>
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
            <div class="display scroll" style="background-color: lightgrey;">
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
          		<form action="" method="POST" enctype="multipart/form-data">
          		<br>	
				<h1 align="center">DRIVER REGISTRATION FORM</h1>
				<br>
				<table align="center">
                <tr>			
                    <td>				
                        DRIVER NAME: 				
                    </td>			
                    <td>				
                        <p><input type=”text” name="dname"  placeholder="Enter name"  required /></p>			
                    </td>		
                </tr>
                <tr>			
                    <td>				
                        DRIVER PHOTO: 				
                    </td>			
                    <td>				
                        <p><center><input type="file" style="margin-left: 90px;" name="image" id="file" multiple required /></center></p>
                    </td>		
                </tr>

                <tr>            
                    <td>                
                        AGE:               
                    </td>           
                    <td>                
                        <p><input type="text" name="age" placeholder="Enter age" required /></p>
                    </td>       
                </tr>
				
				<tr>			
                    <td>				
                        DRIVER ADDRESS: 				
                    </td>			
                    <td>				
                        <p><input type=”text” name="daddress"  placeholder="Enter address"  required /></p>			
                    </td>		
                </tr>
				
				<tr>			
                    <td>				
                        DRIVER MOBILE NUMBER: 				
                    </td>			
                    <td>				
                        <p><input type="tel" name="dmno"  placeholder="Enter mobile number"  required /></p>			
                    </td>		
                </tr>
				
				<tr>			
                    <td>				
                        ASSIGN BUS NUMBER: 				
                    </td>			
                    <td>				
                        <select class="select-bus" name="originCity" required>
							<option disabled selected>-- Select bus number  --</option>
							<?php
								$conn = mysqli_connect("localhost", "root", "", "projectmeteor");  // Using database connection file here
								$records = mysqli_query($conn, "SELECT busID From bus");  // Use select query here 

								while($data = mysqli_fetch_array($records))
								{
									echo "<option value='". $data['busID'] ."'>" .$data['busID'] ."</option>";  // displaying data in option menu
								}	
							?>  
						</select>			
                    </td>		
                </tr>
				
				<tr>			
                    <td>				
                        CREATE DRIVER ID: 				
                    </td>			
                    <td>				
                        <p><input type=”text” name="did"  placeholder="Enter driver id"  required /></p>			
                    </td>		
                </tr>
				
				<tr>			
                    <td>				
                        CREATE PASSWORD: 				
                    </td>			
                    <td>				
                        <p><input type="password" name="dpass"  placeholder="Enter password" minlength="8" required /></p>
                    </td>		
                </tr>

                <tr>            
                    <td>                
                        DATE OF JOINING:                
                    </td>           
                    <td>                
                        <p><input class="select-bus" type="date" name="date_join" required /></p>
                    </td>       
                </tr>
				
			</table>
			<br>
			<div>
				<p align="center"><input type="submit" name="insert" class="button" value=" INSERT"></p>
			</div>
			
		</form>

            </div>	
        </div>    
    </div>    
</body>
	<?php
        $conn=mysqli_connect("localhost","root","","projectmeteor");
        if(isset($_POST['insert']))
        {
			$dname = $_POST['dname'];
			$dadd = $_POST['daddress'];
            $dage = $_POST['age'];
			$dmno = $_POST['dmno'];
			$dbusno=$_POST["originCity"];
			$did = $_POST['did'];
			$dpass = $_POST['dpass'];
            $date1 = $_POST['date_join'];
            $myNewDate1 = str_replace('/', '-', $date1);  
            $orgDate = $myNewDate1;  
            $doj = date("d-m-Y", strtotime($orgDate));

			$filename = $_FILES['image']['name'];
			// Select file type
			$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
			// valid file extensions
			$extensions_arr = array("jpg","jpeg","png","gif");
			// Check extension
			if( in_array($imageFileType,$extensions_arr) )
			{
 			
				// Check extension
				if( in_array($imageFileType,$extensions_arr) )
				{
 					if(move_uploaded_file($_FILES["image"]["tmp_name"],'image/'.$filename))
 					{
						$querystring="INSERT INTO busdriverdetails(d_name,d_photo,d_age,d_address,d_mno,d_busNo,d_u_name,d_u_password,date_join) VALUES ('$dname','$filename','$dage','$dadd','$dmno','$dbusno','$did','$dpass','$doj')";
						if(mysqli_query($conn,$querystring))
						{
							echo'<script>alert("NEW DRIVER RECORD CREATED")</script>';
						}
						else
						{
							echo'<script>alert("ERROR : RECORD NOT CREATED")</script>';
						}
					}
					else
					{
						echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
					}
				}					
			}
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
    <?php 
    }
?>	
</html>