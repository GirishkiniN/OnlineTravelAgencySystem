<!DOCTYPE html>
<html>
<head>
    <title>ADMIN | UPDATE BUS DETAILS</title>
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
        td 
        {
            font-weight: bold;
            border: 1px solid black;
            padding: 8px;
            padding-right:-25px;
            text-align: center;
        }
        
        th 
        {
            background-color: #ddd;
            text-align: center;
        }
  
        td 
        {
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
                <?php
                    $conn=mysqli_connect("localhost","root","","projectmeteor");
                    $bus_no=$_GET["bus_id"];
                    $query = "SELECT * FROM bus WHERE busID='$bus_no' "; 
                    $result = mysqli_query($conn,$query) or die(mysql_error());
                    while($row=$result->fetch_assoc()) 
                    {      
                ?>
                <br>
                <h1 style="color:white;"><center><b>UPDATE BUS DETAILS OF <?php echo $bus_no ?></b></center></h1><br>
                    <form action="" method="POST">
                        <table align="center" style="margin-top: 30px;">
                            <tr>
                                <td>Change Origin : </td>
                                <td>
                                    <select name="origin">
                                        <option value="<?php echo $row['origin'];?>">
                                            <?php echo $row['origin'];?>
                                        </option>  
                                        <?php
                                            $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
                                            $records = mysqli_query($conn, "SELECT origin From buscity");  // Use select query here 

                                            while($data = mysqli_fetch_array($records))
                                            {
                                                echo "<option value='". $data['origin'] ."'>" .$data['origin'] ."</option>";  // displaying data in option menu
                                            }   
                                        ?>  
                                    </select> 
                                </td>
                            </tr>

                            <tr>
                                <td>Change Destination : </td>
                                <td>
                                    <select name="dest">
                                        <option value="<?php echo $row['destination'];?>">
                                            <?php echo $row['destination'];?>
                                        </option>  
                                        <?php
                                            $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
                                            $records = mysqli_query($conn, "SELECT destination From buscity");  // Use select query here 

                                            while($data = mysqli_fetch_array($records))
                                            {
                                                echo "<option value='". $data['destination'] ."'>" .$data['destination'] ."</option>";  // displaying data in option menu
                                            }   
                                        ?>  
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>Change origin area</td>
                                <td><input type="text" name="originArea1" value="<?php echo $row['originArea'];?>"></td>
                            </tr>
                            <tr>
                                <td>Change Destination area</td>
                                <td><input type="text" name="destinationArea" value="<?php echo $row['destinationArea'];?>"></td>
                            </tr>
                            <tr>
                                 <td>Total Seat Count</td>
                                <td><input type="text" name="seats" value="<?php echo $row['seats'];?>"></td>
                                <tr>
                                <td>Window Seat Count</td>
                                <td><input type="text" name="windows" value="<?php echo $row['windows'];?>"></td>
                                </tr>
                            </tr>
                            <tr>
                                <td>Change Fare</td>
                                <td><input type="text" name="fare" value="<?php echo $row['fare'];?>"></td>
                            </tr>
                        </table>
                        <div style="padding-top: 30px;" align="center">    
                            <input type="submit" name="update" value="   UPDATE   "/>
                            <input type="RESET" name="RESET" value="   RESET  "/>
                        </div>
                    </form>   
                    <?php 
                        $conn=mysqli_connect("localhost","root","","projectmeteor");
                       
                       if(isset($_POST['update']))
                        {
                            $busNo=$bus_no;
                            $busOrigin =$_POST['origin'];
                            $busDestination=$_POST['dest'];
                            $busOriginArea=$_POST['originArea1'];
                            $busDestArea=$_POST['destinationArea'];
                            $totalSeats=$_POST['seats'];
                            $windowSeats=$_POST['windows'];
                            $busFare=$_POST['fare'];
                            $querystring1="UPDATE bus SET origin='$busOrigin', destination='$busDestination', originArea='$busOriginArea', destinationArea='$busDestArea', seats='$totalSeats', windows='$windowSeats', fare='$busFare' WHERE busID= '$busNo'";
                            mysqli_query($conn,$querystring1);
                            echo '<script type="text/javascript">alert("DETAILS OF BUS NO. ' . $busNo . ' HAS BEEN UPDATED SUCCESFULLY!!");</script>';
                            echo '<script>window.location="ViewBus.php"</script>';
                        } 
                    ?>             
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
</body>
<?php } ?>
</html>