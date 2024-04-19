<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    $query = "SELECT * FROM `hotels` WHERE CONCAT(`hotelID`, `hotelName`, `city`, `locality`, `stars`, `rating`,`checkIn`,`checkOut`,`wifi`,`swimmingPool`,`parking`, `hotelDesc`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `hotels`";
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
        }
    ?>
<!DOCTYPE html>

<head>
    <title>PACKAGE STAFF | PACKAGES</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
            height: 320px;
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
            display:fixed;
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

    </style>
    <style>
  table 
        {
            margin: 0 auto;
            font-size: 15px;
            border-collapse: collapse;
            width:800px;
        }

  
        th,
        td 
        {
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
        
        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
        background-color: #E4F5D4;
        }
.btn_suc{
            width:60px;
            height: 40px;
            background-color: greenyellow;
             color: red;
        }
        
</style>

</head>

<body>
    <div class="full_sht">
         <div class="headder">
            <h3 style="color: white; padding-top:11px; padding-left: 20px;"></h3>
            <img src="logo.png" height="60px" width="250px" style="margin-top:-20px"/>
            <h3 data-toggle="modal" data-target="#myModal" style="color: white; margin-top:-20px; font-size:30px;" class="powerbtn">
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
                        <a href="packagestf.php" style="text-decoration: none;">HOME</a>

                        <hr>

                        <a href="packagebooking.php" style="text-decoration: none;">PACKAGE BOOKINGS</a>

                        <hr>

                        <a href="viewpackages.php" style="text-decoration: none;">PACKAGE DETAILS</a>

                        <hr>

                    </div>
            </div>
            <div class="display scroll" style="background-color:white;">
            <div class="modal fade" id="myModal" role="dialog">
                     <div class="modal-dialog">
            
                            <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">BEE TRAVELLER PACKAGE STAFF</h4>
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
                                    <a href="logout.php"><button type="button" name="logout" onclick="return confirm('Are you sure you want to Logout ?');" class="btn btn-default">LOGOUT</button></a>
                                    </div>
                                </div>
                        </div>
                 </div>
            <h1><center><b>VIEW PACKAGE DETAILS</b></center></h1><br><br>
            <form action="" method="post">
            <div style="margin-left:400px">
            <input type="text" style="width: 400px; height: 40px; border-radius: 10px;" name="valueToSearch" placeholder="Value To Search">
                        <input type="submit"  style="width: 150px; height: 40px;border-radius: 10px; "  name="search" value="Filter"><br><br>
                        </div>
            <table >
                <tr>
                <th>PackageID </th>
                    <th>PackageName</th>
                    <th>City</th>
                    <th>Category</th>
                    <th>stars</th>
					
                    <th>rating</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>wifi</th>
                    <th>Swimming Pool</th>
                    <th>Bed</th>
                    <th>Restaurent</th>
                    <th>Cafe</th>
	                <th>Package Description</th>

                    <th>price</th>
                    <th>No. of days</th>
                    <th>Images</th>
                    <th>Edit</th>
                    
                </tr>

      <!-- populate table from mysql database -->
                <?php error_reporting(0);  while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td style="width: 140px;"><?php echo $row['hotelID'];?></td>
                    <td><?php echo $row['hotelName'];?></td>
                    <td style="width: 90px;"><?php echo $row['city'];?></td>
                    <td><?php echo $row['locality'];?></td>
                    <td><?php echo $row['stars'];?></td>
					
                    <td><?php echo $row['rating'];?></td>	
                    <td><?php echo $row['checkIn'];?></td>
                    <td><?php echo $row['checkOut'];?></td>
                    <td><?php echo $row['wifi'];?></td>
                    <td><?php echo $row['swimmingPool'];?></td>
                    <td><?php echo $row['parking'];?></td>
                    <td><?php echo $row['restaurant'];?></td>
                    <td><?php echo $row['cafe'];?></td>
                    <td><?php echo $row['hotelDesc'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['no_of_days'];?></td>
                     <td><img src="../admin/image/package/<?php echo $row["mainImage"]; ?>"  height="100px" width="100px"></td>
                    <td><a  href="pedit.php?hotelID=<?php echo $row["hotelID"];?>"><button type="button" class="btn_suc" >Edit </button></a></td>				
                   
                </tr>
                <?php endwhile;?>
            </table>
        </form>
            </div>
        </div>

    </div>

   
</body>