
<!DOCTYPE html>

<head>
    <title>ADMIN | ADD PACKAGE</title>
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
            <h1 style="color:white;"><center><b>ADD PACKAGE</b></center></h1><br><br>
            
            <form action="" method="POST" enctype="multipart/form-data" >
            <table align="center">
                

                <tr>            
                    <td>                
                        <lable>Package name:</lable>                
                    </td>           
                    <td>                
                        <p><input type=”text” name="hotelname" style="width: 100%; border-radius: 5px;"  placeholder="Enter package name"  required /></p>          
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <lable>City :</lable>               
                    </td>           
                    <td>                
                           <p><select  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select City" name="city" required>
                            <option disabled selected>-- Select City --</option>
                              <?php
                            
                                    $servername = "localhost";
                                        $usernameConn = "root";
                                        $passwordConn = "";
                                        $dbname = "projectmeteor";
                
                                        // Creating a connection to projectmeteor MySQL database
                                        $conn = new mysqli($servername, $usernameConn, $passwordConn, $dbname);  // Using database connection file here
                                        $records = mysqli_query($conn, "SELECT p_city_name From p_city");  // Use select query here 

                                        while($data = mysqli_fetch_array($records))
                                        {
                                            echo "<option value='". $data['p_city_name'] ."'>" .$data['p_city_name'] ."</option>";  // displaying data in option menu
                                        }   
                                    ?>
                            </select>   </p>    
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <lable>Category :</lable>               
                    </td>           
                    <td>                
                        <p><input type=”text” name="locality" style="width: 100%; border-radius: 5px;" placeholder="Enter category"  required /></p>            
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <lable>Stars :</lable>              
                    </td>           
                    <td>                
                        <p><input type=”text” name="stars" style="width: 100%; border-radius: 5px;" placeholder="Enter stars"  required /></p>          
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <lable>Rating :</lable>                 
                    </td>           
                    <td>                
                        <p><input type=”text” name="rating" style="width: 100%; border-radius: 5px;"  placeholder="Enter rating"  required /></p>           
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <lable>Check In :</lable>               
                    </td>           
                    <td>                
                    <p> <input type="time"  name="checkIn" style="width: 100%; border-radius: 5px;" required/></p>

                                    
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <lable>Check Out :</lable>              
                    </td>           
                    <td>    
                                <p> <input type="time"  name="checkout" style="width: 100%; border-radius: 5px;" required/></p>
                   </td>        
                </tr>
                <tr>            
                    <td>                
                        <lable>Wifi:</lable>                
                    </td>           
                    <td>    
                   <p> <select name="wifi" style="width: 100%; border-radius: 5px;">
                   <option disabled selected>-- Select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>  
                    </select></p>       
                                    
                    </td>       
                </tr>
                <tr>            
                    <td>                
                        <lable>Swimming Pool:</lable>               
                    </td>           
                    <td>                
                   <p> <select name="swimming_pool" style="width: 100%; border-radius: 5px;">
                   <option disabled selected>-- Select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>  
                    </select></p>               
                    </td>       
                </tr>
                <tr>            
                    <td>                
                        <lable>Bed:</lable>                 
                    </td>           
                    <td>                
                            
                   <p> <select name="Bed" style="width: 100%; border-radius: 5px;">
                   <option disabled selected>-- Select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>  
                    </select></p>
                    </td>       
                </tr>
                
                
                <tr>            
                    <td>                
                        <lable>Lunch/Dinner:</lable>                
                    </td>           
                    <td>                
                                
                   <p> <select name="Restaurent" style="width: 100%; border-radius: 5px;">
                   <option disabled selected>-- Select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>  
                    </select></p>
                    </td>       
                </tr>
                
                <tr>            
                    <td>                
                        <lable>Cafe :</lable>               
                    </td>           
                    <td>                
                            
                   <p> <select name="Cafe" style="width: 100%; border-radius: 5px;">
                   <option disabled selected>-- Select --</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>  
                    </select></p>
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <lable>Package Description :</lable>                
                    </td>           
                    <td>                
                        <p><textarea type="text" name="hdesc" style="width: 100%; border-radius: 5px;" placeholder="Enter description"  required></textarea></p>            
                    </td>       
                </tr>
                
                <tr>            
                    <td>                
                        <lable>Price :</lable>              
                    </td>           
                    <td>                
                        <p><input type=”text” name="price" style="width: 100%; border-radius: 5px;" placeholder="Enter price"  required /></p>          
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <lable>Number Of Days :</lable>                 
                    </td>           
                    <td>                
                        <p><input type=”text” name="no_of_days" style="width: 100%; border-radius: 5px;" placeholder="Enter number of days"  required /></p>            
                    </td>       
                </tr>

                <tr>
                     <td>               
                        <lable>Main Image :</lable>                 
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
                    <td> </td>
                    <td>
                    <div class="w3-container">
            
                        <input type="submit" name="uplode" value="uplode">
                        
                        <input type="RESET" name="RESET" value="   RESET  ">
                    </div>
                    </td>
                </tr>
            </table>

        </form>
        
        <?php
            $conn=mysqli_connect("localhost","root","","projectmeteor");
            if(isset($_POST['uplode']))
            {
                
              
                $hotelname =$_POST['hotelname'];
                $city=$_POST['city'];
                $locality=$_POST['locality'];
                $stars=$_POST['stars'];
                $rating=$_POST['rating'];
                $checkin=$_POST['checkIn'];
                $checkout=$_POST['checkout'];
                $wifi=$_POST['wifi'];
                $swimming_pool=$_POST['swimming_pool'];
                $Bed=$_POST['Bed'];
                $Restaurent=$_POST['Restaurent'];
                $Cafe=$_POST['Cafe'];
                $hdesc=$_POST['hdesc'];
                $price=$_POST['price'];

                $no_of_days=$_POST['no_of_days'];
                $image =$_FILES['image']['name'];
                
                $target ="image/package/".basename($image);
                

                $querystring="INSERT INTO hotels(hotelName,city,locality,stars,rating,hotelDesc,checkIn,checkOut,wifi,swimmingPool,parking,restaurant,cafe,price,no_of_days,mainImage) VALUES('$hotelname','$city','$locality','$stars','$rating','$hdesc','$checkin','$checkout','$wifi','$swimming_pool','$Bed','$Restaurent','$Cafe','$price','$no_of_days','$image')";  
                
                $query_run = mysqli_query($conn,$querystring);
                if ( move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    echo'<script type="text/javascript"> alert("image uploded") </script>';
                }else{
                    echo'<script type="text/javascript"> alert("image not uploded") </script>';
                }
                
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
<?php } ?>
</body>