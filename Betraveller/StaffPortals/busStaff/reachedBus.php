<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>BUS STAFF | REACHED BUS DETAILS</title>
	<style type="text/css">
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
		  padding: 8px 10px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 10px;
		}

		* 
		{
		  box-sizing: border-box;
		}

		#myInput 
		{
		  background-image: url('https://cdn3.iconfinder.com/data/icons/video-player-1/154/search-find-magnifier-function-player-keyword-name-512.png');
		  background-size: 25px 25px;
		  background-position: 10px 10px;
		  background-repeat: no-repeat;
		  width: 50%;
		  font-size: 16px;
		  padding: 12px 20px 12px 40px;t
		  border: 1px solid #ddd;
		  margin-bottom: 12px;
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
                <form action="" method="POST">
        <h2><center>LIST OF REACHED BUS</center></h2>
        <br>
        <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Bus Numbers.." title="Type in a name"></center>
        <br>
        <table id="myTable">
            <tr class="header">
                <th>BUS NUMBER</th>
                <th>TYPE</th>
                <th>FROM</th>
                <th>TO</th>
                <th>DEPARTURE TIME</th>
                <th>REACHING TIME</th>
                <th>EDIT</th>
                
            </tr>
            <?php
                // Username is root
                $conn=mysqli_connect("localhost","root","","projectmeteor");
                // Checking for connections
                if ($conn->connect_error) 
                {
                    die('Connect Error (' . 
                    $conn->connect_errno . ') '. 
                    $conn->connect_error);
                }
                    
                // SQL query to select data from database
                
                $sql = "SELECT * FROM bus WHERE status='Reached'";
                $result = $conn->query($sql);
                $rows = mysqli_num_rows($result);
                if($rows==0)
                {
                    echo"<tr><td colspan='8'>NO BUS HAVE CURRENTLY.....</td></tr>";
                }
                else
                {
                while($rows=$result->fetch_assoc())
                { 
            ?> 
            <tr>
                <td><?php echo $rows['busID'];?></td>
                <td><?php echo $rows['type'];?></td>
                <td><?php echo $rows['origin'];?></td>
                <td><?php echo $rows['destination'];?></td>
                <td><?php echo $rows['departure'];?></td>
                <td><?php echo $rows['arrival'];?></td>
                <td><a href="UpdateBusInfo.php?bus_id=<?php echo $rows['busID'];?>"><button type="button" class="button">UPDATE ROUTE</button></a></td>
            </tr>
            <?php
                } }
            ?>  
        </table>
    </form>
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