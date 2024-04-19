<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BUS STAFF | HOME</title>
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
            height: 380px;
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
            border: 1px solid black;
            border-collapse: collapse;
        }

        td 
        {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td 
        {
            border: 1px solid black;
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

        .sel_busno
        {
            width: 170px;
            height: 35px;
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
            $driverID = $_GET['d_id'];
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
                $driverID=$_GET["d_id"];
                $query1 = "SELECT * FROM busdriverdetails WHERE d_u_name='$driverID' "; 
                $result1 = mysqli_query($conn,$query1) or die(mysql_error());
                while($row1=$result1->fetch_assoc()) 
                {
            ?>
            <h1><center>UPDATE BUS DRIVER DETAILS</center></h1>
                <div class="div2">
                <form action="" method="POST" enctype="multipart/form-data">
                    <center><table style="margin-top: 30px;">
                        <tr>
                            <td>NAME : </td>
                            <td><input type="text" name="name" value="<?php echo $row1['d_name'];?>"></td>
                        </tr>
                        <tr>
                            <td>AGE : </td>
                            <td><input type="text" name="age" value="<?php echo $row1['d_age'];?>"></td>
                            <br>
                        </tr>
                        <tr>            
                            <td>                
                                REUPLOAD DRIVER PHOTO:               
                            </td>           
                            <td>                
                                <p><center><input type="file" style="padding-left: 180px;" name="image" id="file" multiple /></center></p>
                            </td>       
                        </tr>
                        <tr>
                            <td>BUS NO. : </td>
                            <td>
                                <select class="sel_busno"  name="busno" title="Enter Assigned Bus_Id" required>  
                                   <option value="<?php echo $row1['d_busNo'];?>"><?php echo $row1['d_busNo'];?></option> 
                                  <?php
                                        $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
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
                            <td>PHONE NUMBER : </td>
                            <td><input type="tel" maxlength="10" name="phoneNo" value="<?php echo $row1['d_mno'];?>"></td>
                        </tr>
                        <tr>
                            <td>ADDRESS : </td>
                            <td><input type="text" name="address" value="<?php echo $row1['d_address'];?>"></td>
                        </tr>
                    </table></center>
                    <div style="padding-top: 25px;" align="center">
                        <input type="submit" name="update" onclick="return confirm('Do you really want to update profile ?');" value="UPDATE">
                    </div>
                </form>
                </div>
                    <?php
                        error_reporting(E_ERROR | E_WARNING | E_PARSE); 
                        $conn=mysqli_connect("localhost","root","","projectmeteor");
                        if(isset($_POST["update"]))
                        {
                            $name = $_POST['name'];
                            $age = $_POST['age'];
                            $busNo = $_POST['busno'];
                            $phone_num = $_POST['phoneNo'];
                            $address = $_POST['address'];
                            $querystring="UPDATE busdriverdetails SET d_name='$name', d_age='$age', d_busNo='$busNo', d_mno='$phone_num', d_address='$address' WHERE d_u_name='$driverID'";
                            mysqli_query($conn,$querystring);
                            echo'<script>alert("PROFILE HAS BEEN UPDATED SUCCESFULY!");</script>';
                            echo '<script>window.location= "viewDriverDetails1.php";</script>';

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
                                        $querystring="UPDATE busdriverdetails SET d_name='$name', d_photo='$filename', d_age='$age', d_busNo='$busNo', d_mno='$phone_num', d_address='$address' WHERE d_u_name='$driverID'";
                                        if(mysqli_query($conn,$querystring))
                                        {
                                            echo'<script>alert("PROFILE HAS BEEN UPDATED SUCCESFULY!");</script>';
                                            echo '<script>window.location= "viewDriverDetails.php";</script>';
                                        }
                                        else
                                        {
                                            echo'<script>alert("ERROR : RECORD NOT UPDATED")</script>';
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
                <?php } ?>

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
</html>