<!DOCTYPE html>
<head>
    <title>ADMIN | BUS DRIVER COMPLAINTS</title>
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
                <form action="" method="POST">
                    <h1 style="color:white;"><center><b>BUS DRIVER COMPLAINTS</b></center></h1>
                    <br>
                    <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Bus Numbers.." title="Type in a name"></center>
                    <br>
                    <table id="myTable">
                        <tr class="header">
                            <th>BUS NUMBER</th>
                            <th>COMPLAINT NUMBER</th>
                            <th>DATE</th>
                            <th>DAY</th>
                            <th>TIME</th>
                            <th>DRIVER NAME</th>
                            <th>COMPLAINTS</th>
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
                            $sql = "SELECT * FROM busdriverscomplaint WHERE status=''";
                            $result = $conn->query($sql);
                            $rows = mysqli_num_rows($result);
                            if($rows==0)
                            {
                                echo"<tr><td colspan='8'>NO COMPLAITS SO FAR.....</td></tr>";
                            }
                            else
                            {   
                            while($rows=$result->fetch_assoc())
                            { 
                        ?> 
                        <tr>
                            <td><?php echo $rows['bus_id'];?></td>
                            <td><?php echo $rows['cmp_id'];?></td>
                            <td><?php echo $rows['date'];?></td>
                            <td><?php echo $rows['day'];?></td>
                            <td><?php echo $rows['time'];?></td>
                            <td><?php echo $rows['driver_name'];?></td>
                            <td><?php echo $rows['complaints'];?></td>
                            <td><a href="updateBusDriverCompStatus.php?bus_id=<?php echo $rows['bus_id'];?>&cmp_id=<?php echo $rows['cmp_id'];?>&driver_Name=<?php echo $rows['driver_name'];?>"><button type="button" class="button">REVIEWED</button></a></td>
                        </tr>
                        <?php
                            } }
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

        function myFunction() 
        {
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
    <?php } ?>
</body>