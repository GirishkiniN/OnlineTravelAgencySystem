<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `cabdrivers` WHERE CONCAT(`carID`,`carType`, `carModel`, `carNo`, `driverRating`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `cabdrivers`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "projectmeteor");
    $filter_Result = mysqli_query($connect, $query);
    if(mysqli_num_rows($filter_Result) > 0) 
    {
        return $filter_Result;
        
    } 
    else
    {
        echo '<script>alert("No Results founds"); window.location="admin.php";
        </script>';
    
    }
}

?>
<!DOCTYPE html>

<head>
    <title>ADMIN | CAB DETAILS</title>
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
    .btn_suc{
            width:60px;
            height: 40px;
            background-color: greenyellow;
             color: red;
        }
        .btn_del{
            width:60px;
            height: 40px;
            background-color: red;
             color: white;
        }
        table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 60%;

}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
tr:nth-child(odd) {
  background-color: white;
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
            <h1 style="color:white;"><center><b>VIEW CAR DETAILS</b></center></h1><br><br>
            <form action="" method="post">
            <div style="margin-left:300px">
            <input type="text" style="width: 400px; height: 40px; border-radius: 10px;" name="valueToSearch" placeholder="Value To Search">
                        <input type="submit"  style="width: 150px; height: 40px;border-radius: 10px; "  name="search" value="Filter"><br><br>
                        </div>
            <table style="margin-left:240px">
                <tr>
                    <th>carID</th>
                    <th>car Type</th>
                    <th>car Model</th>
					<th>car Colour</th>
                    <th>car No</th>
	                <th>Car Rating</th>
                    <th>Images</th>	
                    <th>Edit</th>
                    <th>Delete</th>	
                   	
					
                </tr>

      <!-- populate table from mysql database -->
                <?php error_reporting(0);  while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['carID'];?></td>
                    <td><?php echo $row['carType'];?></td>
                    <td><?php echo $row['carModel'];?></td>
					<td><?php echo $row['color'];?></td>
                    <td><?php echo $row['carNo'];?></td>	
                    <td><?php echo $row['driverRating'];?></td>
                    <td><img src="image/car/<?php echo $row["imagee"]; ?>"  height="100px" width="100px"></td>
                    <td><a  href="Caredit.php?carID=<?php echo $row["carID"];?>"><button type="button" class="btn_suc" >Edit </button></a></td>
                    <td><a href="cardelete.php?carID=<?php echo $row["carID"];?>"><button type="button" class="btn_del" onclick="return confirm('Are you sure you want to Delete?');">Delete </button></a></td>
					
					
                </tr>
                <?php endwhile;?>
            </table>
        </form>
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