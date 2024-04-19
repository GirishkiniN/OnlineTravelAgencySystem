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
    <title>BUS STAFF | UPDATE DETAILS</title>
    <style type="text/css">
        table 
        {
            margin: 0 auto;
            font-size: 15px;
            border: 1px solid black;
            border-collapse: collapse;
            width: auto;
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
        .select-group
        {
            width: 200px;
            height: 30px;
        }
        .btn_status
        {
            margin-left: 85px;
            background-color: #4CAF50;
                  border: none;
                  color: white;
                  padding: 15px 22px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 16px;
                  margin: 4px 2px;
                  cursor: pointer;
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
          <h1><center>BEE TRAVELLER TRAVEL AGENCY</center></h1>
    <br>
    <?php
        $conn=mysqli_connect("localhost","root","","projectmeteor");
    $bus_no=$_GET["bus_id"];
    ?>
    <br>
    <form action="" method="POST">
        <table style="width: 50%;">
            <tr>
                <td colspan="8"><h3><center>UPDATE THE DETAILS OF <?php echo"$bus_no" ?></center></h3></td>
            </tr>
            <tr>
                <td>CURRENT SEATS AVAILABLE</td>
                <td>
                    <?php
                        $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
                        $querystring="SELECT * FROM bus WHERE busID='$bus_no'"; 
                        $result = mysqli_query($conn,$querystring);
                        while(($rows1=$result->fetch_assoc()))
                        {
                            echo $rows1['seatsAvailable'];
                        }   
                    ?>
                </td>
            </tr>
            <tr>
                <td>CURRENT NUMBER OF BOOKINGS</td>
                <td>
                    <?php
                        $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
                        $querystring="SELECT * FROM bus WHERE busID='$bus_no'"; 
                        $result = mysqli_query($conn,$querystring);
                        while(($rows1=$result->fetch_assoc()))
                        {
                            echo $rows1['noOfBookings'];
                        }   
                    ?>
                </td>
            </tr>
            <tr>
                <td>SELECT ORIGIN</td>
                <td>
                    <select class="select-group" name="origin" required>
                    <option value="">Select origin..</option>
                    <?php
                        $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
                        $querystring="SELECT * FROM bus WHERE busID='$bus_no'"; 
                        $result = mysqli_query($conn,$querystring);
                        while(($rows1=$result->fetch_assoc()))
                        {
                                echo "<option value='". $rows1['origin'] ."'>" .$rows1['origin'] ."</option>";  // displaying data in option menu
                                echo "<option value='". $rows1['destination'] ."'>" .$rows1['destination'] ."</option>";  // displaying data in option menu
                        }   
                    ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>SELECT DESTINATION</td>
                <td>
                    <select class="select-group" name="destination" required>
                    <option selected disabled>Select Destination..</option>
                    <?php
                        $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
                        $querystring="SELECT * FROM bus WHERE busID='$bus_no'"; 
                        $result = mysqli_query($conn,$querystring);
                        while(($rows1=$result->fetch_assoc()))
                        {
                            echo "<option value='". $rows1['origin'] ."'>" .$rows1['origin'] ."</option>";  // displaying data in option menu
                            echo "<option value='". $rows1['destination'] ."'>" .$rows1['destination'] ."</option>";  // displaying data in option menu
                        }   
                    ?>
                </select>
                </td>
            </tr>

            <tr>
                <td>ENTER NEXT DATE OF LEAVING</td>
                <td><input type="date" id="datepicker" class="datepicker" name="dol" required></td>
            </tr>

            <tr>
                <td>ENTER DATE OF REACHING</td>
                <td><input type="date" id="datepicker" class="datepicker" name="dor" required></td>
            </tr>   

            <tr>
                <td>ENTER ARRIVAL TIME : </td>
                <td><input type="time" name="arrival" required></td>
            </tr>   

            <tr>
                <td>ENTER DEPRATURE TIME : </td>
                <td><input type="time" name="departure" required></td>
            </tr>   

        </table>
        <div><center>
            <input class="btn_status" type="submit" name="update" value="UPDATE" onClick="refresh">
        </center></div> 

    </form>
</div> 
<?php
    $conn=mysqli_connect("localhost","root","","projectmeteor");
    if(isset($_POST['update']))
    {
      $busid=$bus_no;
      $origin=$_POST['origin'];
      $dest=$_POST['destination'];
      $arrival= date('h:i A', strtotime($_POST['arrival']));
      $departure=date('h:i A', strtotime($_POST['departure']));
      $date_of_leaving = $_POST['dol'];
      $myNewDate = date("d-m-Y", strtotime($date_of_leaving));//converting date from yyyy-mm-dd to dd-mm-yyyy
      $date_of_reaching = $_POST['dor'];
      $myNewDate1 = date("d-m-Y", strtotime($date_of_reaching));//converting date from yyyy-mm-dd to dd-mm-yyyy
      $querystring1="UPDATE bus SET origin = '$origin', destination = '$dest', arrival = '$arrival' , departure = '$departure' , Date_of_leaving = '$myNewDate', Date_of_reaching = '$myNewDate1'  WHERE busid = '$busid'";
      mysqli_query($conn,$querystring1);
      $txt = "DETAILS OF BUS NO. $busid IS UPDATED";
      echo "<script>alert('$txt');</script>";
      echo'<script>window.location="updateBusDetails.php";</script>';
    }  
?>            


<script type="text/javascript">
    const selects = document.querySelectorAll('.select-group');
selects.forEach((elem) => {
  elem.addEventListener('change', (event) => {
    let values = Array.from(selects).map(select => select.value);
    for (let select of selects) {
      select.querySelectorAll('option').forEach((option) => {
        let value = option.value;
        if (value &&  value !== select.value && values.includes(value)) {
          option.disabled = true;
        } else {
          option.disabled = false;
        }
      });
    }
  });
});


$( ".datepicker" ).datepicker({
   format: 'dd-mm-yyyy'
});

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
<?php 
    }
?> 
</body>
</html>