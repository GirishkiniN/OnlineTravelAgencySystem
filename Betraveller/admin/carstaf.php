<!DOCTYPE html>

<head>
    <title>ADMIN | CAR STAFF</title>
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
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

.btn_del{
            width:60px;
            height: 40px;
            background-color: red;
             color: white;
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
            <h1 style="color:white;"><center><b>CAR STAFF DETAILS</b></center></h1><br><br>
                    <form action="" method="post" >
                        
                        <table style="margin-left:50px;">
                            <tr>
                                <th style="width: 40px;">ID </th>
                                <th style="height: 60px;">FullName</th>
                                <th>EMail</th>
                                <th style="width: 200px;">Phone</th>
                                <th>GENDER</th>
                                <th>AGE</th>
                               
                                <th>ADDRESS</th>
                                <th>USER NAME</th>	
                                <th>PASSWORD</th>
                              	 <th>Date</th>
                                <th>Delete</th>
                                						
                            </tr>

                            <!-- populate table from mysql database -->
                            <?php
                    $conn=mysqli_connect("localhost","root","","projectmeteor");
                    if($conn -> connect_error) {
                        die("Connection failed" . $conn -> connect_error );
                    }
                    $ptname = "car_staff";
                    $sql = "select * from staff WHERE domain='$ptname'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0) 
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {?>	
                            <tr>
								<td><?php echo $row['ID'];?></td>
								<td><?php echo $row['Full_name'];?></td>
								<td><?php echo $row['Email'];?></td>
								<td><?php echo $row['phn_no'];?></td>
								<td><?php echo $row['gender'];?></td>
								<td><?php echo $row['age'];?></td>
								<td><?php echo $row['Address'];?></td>
								<td><?php echo $row['u_name'];?></td>
								
								<td><?php echo $row['password'];?></td>
								<td><?php echo $row['joining_date'];?></td>
							
							
							
								<td><a href="deletstaf.php?ID=<?php echo $row["ID"];?>"><button type="button" class="btn_del" onclick="return confirm('Are you sure you want to Delete?');">Delete </button></a></td>		
							</tr>
					<?php			
                       
                        }   
                    
                    }
                    else {
                        echo "<tr><td colspan='3'>No STAFS </td></tr>";
                    }
                ?>
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