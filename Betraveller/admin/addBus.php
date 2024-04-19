

<!DOCTYPE html>

<head>
    <title>ADMIN | ADD BUS</title>
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                        <a href="ViewBus.php" style="text-decoration: none;">VIEW BUS </a>
                        <a href="addBusCity.php" style="text-decoration: none;">ADD BUS CITY</a>
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
                <h1 style="color:white;"><center><b>ADD BUS</b></center></h1><br><br>
            
            <form action="" method="POST">
            <table align="center">
                <tr>            
                    <td>                
                        <label>BUS_ID:</label>              
                    </td>           
                    <td>                
                        <p><input type=”text” style="width: 100%; border-radius: 5px;" name="busid"  placeholder="Enter bus_id"  required /></p>            
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Bus operator name:</label>               
                    </td>           
                    <td>                
                        <p><input type=”text” name="busopn" style="width: 100%; border-radius: 5px;"  placeholder="Enter operator name"  required /></p>            
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Type :</label>               
                    </td>           
                    <td>                
                        <p>
                            <select name="type" style="width: 100%; height: 30px; border-radius: 5px;" required>
                              <option disabled selected>--Select Bus Type--</option>  
                              <option value="AC">AC</option>
                              <option value="NON-AC">NON-AC</option>
                              <option value="AC Sleeper">AC Sleeper</option>
                              <option value="NON-AC Sleeper">NON-AC Sleeper</option>
                            </select>
                        </p>           
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Origin :</label>                 
                    </td>           
                    <td>                
                        
                        <p><select class="select-group" name="origin" style="width: 100%; height: 30px; border-radius: 5px;" name="originCity" required>
                        <option disabled selected>-- Select Origin  --</option>                
                                        <?php
                                            $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
                                            $records = mysqli_query($conn, "SELECT origin From buscity");  // Use select query here 

                                            while($data = mysqli_fetch_array($records))
                                            {
                                                echo "<option value='". $data['origin'] ."'>" .$data['origin'] ."</option>";  // displaying data in option menu
                                            }   
                                        ?>  
                        </select> </p>          
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Destination :</label>                
                    </td>           
                    <td>                
                       <p> <select class="select-group" name="dest" style="width: 100%; height: 30px; border-radius: 5px;" title="Select Destination City" name="destinationCity" required>
                        <option disabled selected>-- Select Destination--</option>
                        <?php
                            $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
                            $records = mysqli_query($conn, "SELECT destination From buscity");  // Use select query here 
                            while($data = mysqli_fetch_array($records))
                            {
                                echo "<option value='". $data['destination'] ."'>" .$data['destination'] ."</option>";  // displaying data in option menu
                            }   
                        ?>  
                        </select>  </p>
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Origin Area :</label>                
                    </td>           
                    <td>                
                        <p><input type=”text” style="width: 100%; border-radius: 5px;" name="origina"  placeholder="Enter origin area"  required /></p>         
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Destination Area :</label>               
                    </td>           
                    <td>                
                        <p><input type=”text” name="desta" style="width: 100%; border-radius: 5px;"  placeholder="Enter Destination area"  required /></p>          
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Departure :</label>              
                    </td>           
                    <td>                
                        <p><input type="time" name="departure" style="width: 100%; border-radius: 5px;" required /></p>           
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Arrival :</label>                
                    </td>         
                    <td>                
                        <p><input type="time" name="arrival" style="width: 100%; border-radius: 5px;" required /></p>          
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Seats :</label>              
                    </td>           
                    <td>                
                        <p><input type=”text” name="seats" style="width: 100%; border-radius: 5px;"  placeholder="Enter seats available"  required /></p>           
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Window :</label>                 
                    </td>           
                    <td>                
                        <p><input type=”text” name="wind" style="width: 100%; border-radius: 5px;" placeholder="Enter Window"  required /></p>          
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Fare :</label>               
                    </td>           
                    <td>                
                        <p><input type=”text” name="fare" style="width: 100%; border-radius: 5px;" placeholder="Enter Fare"  required /></p>            
                    </td>       
                </tr>

                <tr>            
                    <td>                
                        <label>Seats available :</label>                
                    </td>           
                    <td>                
                        <p><input type=”text” name="sea" style="width: 100%; border-radius: 5px;" placeholder="Enter Seats Available"  required /></p>          
                    </td>       
                </tr>


            </table>

            <div style="padding-top: 30px;" align="center">    
                <input type="submit" name="insert" value="   INSERT   ">
                
                <input type="RESET" name="RESET" value="   RESET  ">
            </div>

        </form>
            </div>
        </div>

    </div>
    <?php
            $conn=mysqli_connect("localhost","root","","projectmeteor");
            if(isset($_POST['insert']))
            {
                $busid=$_POST['busid'];
                $busoname =$_POST['busopn'];
                $type=$_POST['type'];
                $origin=$_POST['origin'];
                $dest=$_POST['dest'];
                $OriginArea=$_POST['origina'];
                $desta=$_POST['desta'];
                $dep=date('h:i A', strtotime($_POST['departure']));;
                $arrival=date('h:i A', strtotime($_POST['arrival']));
                $seats=$_POST['seats'];
                $wind=$_POST['wind'];
                $fare=$_POST['fare'];
                $sea=$_POST['sea'];

                $querystring="INSERT INTO bus(busID,operator,type,origin,destination,originArea,destinationArea,departure,arrival,seats,windows,fare,seatsAvailable) VALUES('$busid','$busoname','$type','$origin','$dest','$OriginArea','$desta','$dep','$arrival','$seats','$wind','$fare','$sea')";  

                if(mysqli_query($conn,$querystring))
                {
                    echo '<script>alert("NEW BUS RECORD CREATED SUCESSFULLY !")</script>';    
                } 
                else
                {
                     echo '<script>alert("PLEASE CHECK THE DETAILS AGAIN!")</script>';
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
</script>
<?php } ?>
</body>