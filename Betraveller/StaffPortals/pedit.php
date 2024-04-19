<?php

include "connection.php";
$id=$_GET["hotelID"];

$hotelname="";
$city="";
$locality="";
$stars="";
$rating="";
$checkin="";
$checkout="";
$wifi="";
$swimming_pool="";
$Bed="";
$Restaurent="";
$Cafe="";
$hdesc="";
$price="";
$no_of_days="";
$mainImage="";

$res=mysqli_query($db,"select * from hotels where hotelID ='$id'");
while($row=mysqli_fetch_array($res))
{$hotelname=$row["hotelName"];

    $city=$row["city"];
$locality=$row["locality"];
$stars=$row["stars"];
$rating=$row["rating"];
$checkin=$row['checkIn'];
$checkout=$row['checkOut'];
$wifi=$row['wifi'];
$swimming_pool=$row['swimmingPool'];
$Bed=$row['parking'];
$Restaurent=$row['restaurant'];
$Cafe=$row['cafe'];

$hdesc=$row["hotelDesc"];
$price=$row["price"];
$no_of_days=$row['no_of_days'];
               
$mainImage=$row["mainImage"];
}


?>
<!DOCTYPE html>

<head>
    <title> staf page</title>
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
     table,
        td {
            border-collapse: collapse;
        }
</style>
</head>
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
<body>
    <div class="full_sht">
    <div class="headder" style="background-color: #00BFFF;">
        <h1 style="font-weight: bold ;color: #00BFFF;">STAF PANEL</h1>
            <img src="logo.png" height="60px" width="250px" style="margin-top:-50px"/>
         <a href="logout.php">  <button class="powerbtn" style="font-size:34px"> <i class="fa fa-power-off"></i></button></a>
        </div>
        <div class="cntnt" >
            <div class=" nav">
            <div class="sidenav" style="text-decoration: none;">
                    
                     <a href="packagestf.php" >HOME</a>
                    <a href="viewpackages.php" >VIEW PACKAGE </a>
                    <a href="packagebooking.php" >PACKAGE BOOKING</a>

                </div>
            </div>
            <div class="display scroll" style="background-color:white;">
            <h1><center><b>EDIT CAR DETAILS</b></center></h1><br><br>
            <form action="" method="POST" enctype="multipart/form-data" >
           
            <div style="margin-left:600px">
            <img src="../admin/image/package/<?php echo $mainImage; ?>"  height="150px" width="200px">
            </div>
            
            <table style="margin-left:500px;">
               
                <tr>			
                    <td><br><br>				
                        <lable>Hotel name:</lable> 				
                    </td>			
                    <td style="width: 300px;">	<br><br>			
                        <p><input style="width:100%" type=”text” name="hoteName"  placeholder="Enter operator name"  required value="<?php echo $hotelname; ?>"/></p>			
                    </td>		
                </tr>
                <tr>			
                    <td>				
                        <lable>City :</lable> 				
                    </td>			
                    <td>				
                           <p><select  data-live-search="true" class="selectpicker form-control" data-size="5" title="Select City" name="city" required>
                           <option value="<?php echo $city; ?>"><?php echo $city; ?> </option>
                      
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
                            </select>	</p>	
                    </td>		
                </tr>

                
                <tr>			
                    <td>				
                        <lable>Category :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="locality"  placeholder="Enter origin"  required value="<?php echo $locality; ?>"/></p>			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Stars :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="stars"  placeholder="Enter Destination"  required value="<?php echo $stars; ?>"/></p>			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Rating :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="rating"  placeholder="Enter origin area"  required value="<?php echo $rating; ?>"/></p>			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Check In :</lable> 				
                    </td>			
                    <td>				
                    <p> <input type="time"  name="checkIn" style="width: 100%; border-radius: 5px;" required value="<?php echo $checkin; ?>"/></p>

                        			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Check Out :</lable> 				
                    </td>			
                    <td>	
                    			<p> <input type="time"  name="checkout" style="width: 100%; border-radius: 5px;"  required value="<?php echo $checkout; ?>"/></p>
                   </td>		
                </tr>
				<tr>			
                    <td>				
                        <lable>Wifi:</lable> 				
                    </td>			
                    <td>	
                   <p> <select name="wifi" style="width: 100%; border-radius: 5px;" >
                   <option value="<?php echo $wifi; ?>"><?php echo $wifi; ?> </option>
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
                   <option value="<?php echo $swimming_pool; ?>"><?php echo $swimming_pool; ?> </option>
                 
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
                   <option value="<?php echo $Bed; ?>"><?php echo $Bed; ?> </option>
                 
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
                   <option value="<?php echo $Restaurent; ?>"><?php echo $Restaurent; ?> </option>
                 
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
                   <option value="<?php echo $Cafe; ?>"><?php echo $Cafe; ?> </option>
                 
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>	
                    </select></p>
                    </td>		
                </tr>


                <tr>			
                    <td>				
                        <lable>Hotel Description :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="hDesc"  placeholder="Enter Destination area"  required value="<?php echo $hdesc; ?>"/></p>			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Price :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="price"  placeholder="Enter Departure" value="<?php echo $price; ?>"  required /></p>			
                    </td>		
                </tr>
               
                <tr>			
                    <td>				
                        <lable>Number Of Days :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” name="no_of_days" style="width: 100%; border-radius: 5px;" placeholder="Enter Departure" value="<?php echo $no_of_days; ?>" required /></p>			
                    </td>		
                </tr>
                
                
				<tr>
                     <td>				
                        <lable>Package Image :</lable> 	
                        <br>	<br>		
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
                    <td></td>
                    <td>
                    <div class="w3-container">
            
                             <input type="submit" name="update" value="uplode">   
                           <a href="viewpackages.php">  <input style="color:black;" type="button" name="Cancel" value="cancel"></a>
                    </div>
                    </td>
                </tr>
            </table>
            

        </form>
        
        <?php
            $conn=mysqli_connect("localhost","root","","projectmeteor");

            if(isset($_POST["update"]))
            {  
                $id=$_GET["hotelID"];
                $hotelname=$_POST['hoteName'];
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
                $hdesc=$_POST['hDesc'];
                $price=$_POST['price'];
                $no_of_days=$_POST['no_of_days'];
                $mainImage =$_FILES['image']['name'];
                $target ="../admin/image/package/".basename($mainImage);

                        if($mainImage=="")
                        {
                            $query =("UPDATE hotels set hotelName='$hotelname',city='$city',locality='$locality',stars='$stars',rating='$rating',checkIn='$checkin',checkOut='$checkout',wifi='$wifi',swimmingPool='$swimming_pool',parking='$Bed',restaurant='$Restaurent',cafe='$Cafe',hotelDesc='$hdesc',price='$price',no_of_days='$no_of_days' where hotelID=$id");
                            mysqli_query($conn,$query);
                            echo'<script>alert($id);</script>';  
                            echo '<script>window.location= "viewpackages.php";</script>';
                                    
                        }
                else{
                    $query =("UPDATE hotels set hotelName='$hotelname',city='$city',locality='$locality',stars='$stars',rating='$rating',checkIn='$checkin',checkOut='$checkout',wifi='$wifi',swimmingPool='$swimming_pool',parking='$Bed',restaurant='$Restaurent',cafe='$Cafe',hotelDesc='$hdesc',price='$price',no_of_days='$no_of_days',mainImage='$mainImage' where hotelID=$id");
                    $query_run =mysqli_query($conn,$query);
                    if ( move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                       echo'<script type="text/javascript"> alert("image uploded"); window.location="viewpackages.php"; </script>';
                   }else{
                       echo'<script type="text/javascript"> alert("image not uploded"); window.location="viewpackages.php"; </script>';
                   }
               }
            

            }
            ?>
            </div>
        </div>

    </div>

</body>