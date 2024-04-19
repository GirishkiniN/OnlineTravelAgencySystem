<!DOCTYPE html>

<head>
    <title>ADMIN | ADD STAFF</title>
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
                <h1 style="color:white;"><center><b>ADD STAFF</b></center></h1><br><br>
                <form action="" method="POST">
                    <table style="margin-left:500px;">
                        <tr>
                            <td><label>Full name:</label></td>
                            <td style="width:300px"><input type="text" name="Sname" style="width: 100%; border-radius: 5px;" required/></td>
                        </tr>
                        <tr>
                            <td><label>Email:</label></td>
                            <td><input type="email" name="Semail" style="width: 100%; border-radius: 5px;" required/><br></td>
                        </tr>
                        <tr>
                            <td><label>Phone no.:</label></td>
                            <td><input type="text" name="Sphn" style="width: 100%; border-radius: 5px;" required/><br></td>
                        </tr>

                        <tr>
                            <td><label>Domain:</label></td>
                            <td><select name="Stafs" id="stafs" style="width:100%; height: 100%; border-radius: 5px;">
                                <option selected disabled>Select Domain</option>
                                <option value="PACKAGE">PACKAGE</option>
                                <option value="Bus_staff">BUS STAFF</option>
                                <option value="car_staff">CAR STAFF</option>
                                
                              </select></td>
                        </tr>
                        <tr>
                            <td><label>Gender:</label></td>
                            <td><select name="Sgender" id="Sgender" style="width:100%; height: 100%; border-radius: 5px;">
                                <option selected disabled>Select Gender</option>
                                <option value="male">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                                <option value="OTHERS">OTHERS</option>
                                
                              </select></td>
                        </tr>
                        <tr>
                            <td><label>Age:</label></td>
                            <td><input type="number" name="Sage" style="width: 100%; border-radius: 5px;" required/><br></td>
                        </tr>
                        <tr>
                            <td><label>Address:</label></td>
                            <td><input type="text" name="Sadrs" style="width: 100%; border-radius: 5px;" required/><br></td>
                        </tr>

                        <tr>
                            <td><label>username:</label></td>
                            <td><input type="text" name="Suname" style="width: 100%; border-radius: 5px;" required/><br></td>
                        </tr>

                        <tr>
                            <td><label>Password:</label></td>
                            <td><input type="password" name="Spass" style="width: 100%; border-radius: 5px;" required/><br></td>
                        </tr>

                        <tr>
                            <td><label>Date:</label></td>
                            <td><input type="date" name="Sdate" style="width: 100%; border-radius: 5px; margin-bottom:15px;" required/><br></td>
                        </tr>
                        
                        <tr>
                            <td></td>
                            <td><input type="submit" style="border-radius:5px" name="Ssubmit" />
                            <input type="RESET" style="border-radius:5px" name="RESET" value="   RESET  "><br></td>
                        </tr>
                    </table>

                    
                </form>
            </div>
        </div>

    </div>
    <?php
            $conn=mysqli_connect("localhost","root","","projectmeteor");
            if(isset($_POST['Ssubmit']))
            {
                
                $sname=$_POST['Sname'];
                $semail =$_POST['Semail'];
                $sphn=$_POST['Sphn'];
                $staff=$_POST['Stafs'];
                $sgender=$_POST['Sgender'];
                $sage=$_POST['Sage'];
                $sadrs=$_POST['Sadrs'];
                $suname=$_POST['Suname'];
                $spass=$_POST['Spass'];
                $sdate=$_POST['Sdate'];
               
                $s= "select * from staff where u_name = '$suname'";
                $res = mysqli_query($conn,$s);
                $num =mysqli_num_rows($res);

                if($num == 1){
                    echo '<script>alert("User Name Alredy Taken"); window.location="addstaff.php";
                    </script>';
                }
              
                else{
                    $querystring="INSERT INTO staff(Full_name,Email,phn_no,domain,gender,age,Address,u_name,password,joining_date) VALUES('$sname','$semail','$sphn','$staff','$sgender','$sage','$sadrs','$suname','$spass','$sdate')";	
                    
                    if(mysqli_query($conn,$querystring))
                    {
                         echo '<script>alert("DATA INSERTED"); window.location="addstaff.php";
                        </script>';
                        
                    }
                    else
                    {
                       echo '<script>alert("DATA NOT INSERTED"); window.location="addstaff.php";
                        </script>';
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
<?php } ?>
</body>