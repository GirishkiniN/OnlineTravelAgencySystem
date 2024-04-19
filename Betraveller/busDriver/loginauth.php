<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="loginauth.css" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-select.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/moment-with-locales.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <title>TOURGUIDER | BUS DRIVERS PORTAL</title>
    <style type="text/css">
        body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
        .column {
              float: left;
              width: 33.33%;
              padding: 5px;
            }

            .column1 {
              float: left;
              width: 33.33%;
              padding: 5px;
              margin-top: 780px;
            }


            /* Clearfix (clear floats) */
            .row::after {
              content: "";
              clear: both;
              display: table;
            }

        @media screen and (max-width: 600px) 
        {
            .container
            {
                position: absolute;
                margin: 0.1px;
                width: 100%;
                overflow: hidden;
            }
            .topnav1 
            {
                overflow: visible;
                background-color: #333;
                min-height: 500px;
            }
            table 
            {
                margin: 0 auto;
                width: auto;
                font-size: 9px;
                border: 0.1px solid black;
                border-collapse: collapse;
            }

            td 
            {
                background-color: #E4F5D4;
                
            }
    
            th,
            td {
                
                padding: 0.5px;
                text-align: center;
            }
            h2,h3,h4
            {
                font-size: 8px;
                font-weight: bold;
            }
            img#optionalstuff 
            {
                display: none;
            }

            #complaint_portal
            {
                width: auto;
            }

                /* Modal Content */
            .modal-content 
            {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: auto;
                
            }

            
        }  
    </style>
</head>
<body>
    <?php
        error_reporting(0);
        $conn=mysqli_connect("localhost","root","","projectmeteor");        
        session_start();
        if(empty($_SESSION['did']))
        {
            echo '<script>window.location= "index.php";</script>';
            die();
        }
        else
        {
            $driverID = $_SESSION['did'];
            $busid = $_SESSION['busno'];
    ?>
    
    <div>
        <div class="topnav1">
            <!-- Navbar -->
           <!-- <div class="w3-top">
                <div class="w3-bar w3-black w3-card">
                    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
                    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BAND</a>
                    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>
                    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
                    <div class="w3-dropdown-hover w3-hide-small">
                        <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
                        <div class="w3-dropdown-content w3-bar-block w3-card-4">
                            <a href="#" class="w3-bar-item w3-button">Merchandise</a>
                            <a href="#" class="w3-bar-item w3-button">Extras</a>
                            <a href="#" class="w3-bar-item w3-button">Media</a>
                        </div>
                    </div>
                </div>
            </div> -->
        

            <div class="w3-top">
                <div class="w3-bar w3-black w3-card" style="padding-bottom:10px;" id="myNavbar">
                    <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="logo.png" height="40px" width="200px" style="margin-top:-10px"/></a>
                    <!-- Right-sided navbar links -->
                    <div class="w3-right w3-hide-small">
                        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i> HOME</a>
                        <a href="#booking_details" class="w3-bar-item w3-button"><i class="fa fa-book"></i> BOOKING DETAILS</a>
                        <a href="#updateStatus" class="w3-bar-item w3-button"><i class='fas fa-edit'></i> UPDATE STATUS</a>
                        <a href="#notice" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> NOTICE</a>
                        <a href="#complaint_portal" class="w3-bar-item w3-button"><i class='fas fa-comment-dots'></i> COMPLAINT PORTAL</a>
                        <span id="myBtn" class="w3-bar-item w3-button"><i class="fa fa-user"></i> PROFILE</span>
                    </div>
                    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

                    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                    <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>

        
            <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
            <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none width:25%" id="mySidebar">
                <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
                <a href="#" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-home"></i> HOME</a>
                <a href="#booking_details" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-book"></i> BOOKING STATUS</a>
                <a href="#updateStatus" onclick="w3_close()" class="w3-bar-item w3-button"><i class='fas fa-edit'></i> UPDATE STATUS</a>
                <a href="#notice" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> NOTICE</a>
                <a href="#complaint_portal" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-comment-dots"></i> COMPLAINT PORTAL</a>
                <span id="myBtn1" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user"></i> PROFILE</span>
            </nav>
            
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h1><center>PROFILE</center></h1>
                    <?php
                        
                        $conn=mysqli_connect("localhost","root","","projectmeteor"); 
                        $querystring="SELECT * FROM busdriverdetails WHERE d_busNo='$busid' AND d_u_name='$driverID'";	
                        $result = mysqli_query($conn,$querystring);
                        while($row=$result->fetch_assoc()) 
                        { 
                    ?>
                    <div style="padding-top:30px;">

                        <table style="width:50%;">
                             <tr>
                                <td>DRIVER PHOTO :</td>
                                <td>
                                    <img src="../StaffPortals/busStaff/image/<?php echo $row['d_photo'];?>" width="85px" height="55px">
                                </td>
                            </tr>
                            <tr>
                                <td>DRIVER NAME :</td>
                                <td>
                                    <?php echo $row['d_name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>DRIVER ADDRESS :</td>
                                <td>
                                    <?php echo $row['d_address']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>DRIVER MOBILE NUMBER :</td>
                                <td>
                                    <?php echo $row['d_mno']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>DRIVER BUS NUMBER :</td>
                                <td>
                                    <?php echo $row['d_busNo']; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <?php } ?>

                    <div style="padding-top:30px;">
                        <form action="busDriversLogout.php" method="POST">
                            <center><input type="submit" name="logout" value="LOGOUT" onclick="return confirm('Are you sure you want to Logout ?');" style="color:green; padding-top 30px;"></center>
                        </form>
                        
                    </div>
                </div>

            </div>
                   
        </div>
        
        <div id="busdetail">
            <table style="width:50%;">
                <tr>
                    <td colspan="5" >ROUTE DETAILS</td>
                </tr>
                <tr>
                    <td>BUS NUMBER</td>
                    <td>FROM</td>
                    <td>TO</td>
                    <td>DEPARTURE TIME</td>
                    <td>REACHING TIME</td>
                </tr>  
                
                <?php
                    // Username is root
                    $conn=mysqli_connect("localhost","root","","projectmeteor");
                    // Checking for connections
                    if ($conn->connect_error) {
                        die('Connect Error (' . 
                        $conn->connect_errno . ') '. 
                        $conn->connect_error);
                    }
                    
                    // SQL query to select data from database
                    $sql = "SELECT * FROM bus WHERE busid='$busid'";
                    $result = $conn->query($sql);
                    while($rows=$result->fetch_assoc())
                    { 
                    ?> 
                <tr>
                    <td><?php echo $rows['busID'];?></td>
                    <td><?php echo $rows['origin'];?></td>
                    <td><?php echo $rows['destination'];?></td>
                    <td><?php echo $rows['departure'];?></td>
                    <td><?php echo $rows['arrival'];?></td>
                
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    
        <div id="booking_details">
             <?php
                    //$todayDate = date("d-m-Y");

                    $conn=mysqli_connect("localhost","root","","projectmeteor");  
                    $query = "SELECT Date_of_leaving FROM bus WHERE busID='$busid' "; 
                    $result = mysqli_query($conn,$query) or die(mysql_error());
                    while($row=$result->fetch_assoc()) 
                    {
                        $todayDate =  $row['Date_of_leaving'];
                    }      
            ?>        
            <h2 style="padding-bottom:25px; color:white;"><center><?php echo "Bus Leaves on " . $todayDate . "<br>";?></center></h2>
            <table style="width:50%; padding-top:100px;">
                <tr>
                    <td colspan="5" ><h3>BUS NO. <?php echo "$busid";?>  </h3></td>
                    
                </tr>
                <tr><td colspan="5"><h3>SEAT BOOKING DETAILS FOR <?php echo " " . $todayDate . "";?> </h3></td></tr>
                <tr>
                    <td>CUSTOMER NAME</td>
                    <td>ORIGIN</td>
                    <td>DESTINATION</td>
                    <td>NUMBER OF PASSENGERS</td>
                    
                </tr>  
                
                <?php
                    //$todayDate = date("d-m-Y");

                    $conn=mysqli_connect("localhost","root","","projectmeteor");  
                    $query = "SELECT Date_of_leaving FROM bus WHERE busID='$busid' "; 
                    $result = mysqli_query($conn,$query) or die(mysql_error());
                    while($row=$result->fetch_assoc()) 
                    {
                        $todayDate =  $row['Date_of_leaving'];
                    }      
                    
                    // Username is root
                    $conn=mysqli_connect("localhost","root","","projectmeteor");
                    // Checking for connections
                    if ($conn->connect_error) {
                        die('Connect Error (' . 
                        $conn->connect_errno . ') '. 
                        $conn->connect_error);
                    }
                
                    // SQL query to select data from database
                    $sql = "SELECT * FROM `busbookings` WHERE  busid='$busid' AND Date_of_leaving='$todayDate' AND status != 'Reached'  AND cancelled = 'no'";
                    $result = $conn->query($sql);
                    $rows1 = mysqli_num_rows($result);
                    if($rows1==0)
                    {
                        echo"<tr><td colspan='5'>NO BOOKINGS TODAY !!</td></tr>";
                    }
                    else {    
                        while($rows1=$result->fetch_assoc())
                        { 
                        ?> 
                        <tr>
                        <td><?php echo $rows1['username'];?></td>
                        <td><?php echo $rows1['origin'];?></td>
                        <td><?php echo $rows1['destination'];?></td>
                        <td><?php echo $rows1['passengers'];?></td>
                    
                
                </tr>
                <?php
                    } }
                ?>
            </table>
        </div>

        <div id="updateStatus">
            <form action="updateStatus.php" method="POST">      
                <table style="width:50%; padding-top:100px;">
                    <tr>
                        <td  colspan="5"><h3>UPDATE STATUS OF BUS NO. <?php echo "$busid"; ?>  </h3> </td>
                    </tr>
                     <tr>
                        <td>DATE OF LEAVING</td>
                        <td>
                            <?php
                                $conn=mysqli_connect("localhost","root","","projectmeteor"); 
                                $querystring="SELECT Date_of_leaving FROM bus WHERE busid='$busid'"; 
                                $result = mysqli_query($conn,$querystring);
                                while($row=$result->fetch_assoc()) 
                                {
                                    echo $row['Date_of_leaving'];
                                }    
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>DATE OF REACHING</td>
                        <td>
                            <?php
                                $conn=mysqli_connect("localhost","root","","projectmeteor"); 
                                $querystring="SELECT Date_of_reaching FROM bus WHERE busid='$busid'"; 
                                $result = mysqli_query($conn,$querystring);
                                while($row=$result->fetch_assoc()) 
                                {
                                    echo $row['Date_of_reaching'];
                                }    
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>CURRENT STATUS</td>
                        <td>
                            <?php
                                $conn=mysqli_connect("localhost","root","","projectmeteor"); 
                                $querystring="SELECT status FROM bus WHERE busid='$busid'";	
                                $result = mysqli_query($conn,$querystring);
                                while($row=$result->fetch_assoc()) 
                                {
                                    echo $row['status'];
                                }    
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <?php
                            $dateFormatted=date("d-m-Y");
                            $conn=mysqli_connect("localhost","root","","projectmeteor"); 
                            $querystring="SELECT Date_of_leaving FROM bus WHERE busid='$busid'"; 
                            $result = mysqli_query($conn,$querystring);
                            while($row=$result->fetch_assoc()) 
                            {
                                $date =  $row['Date_of_leaving'];
                            }    
                            if(($date > $dateFormatted) || ($date == ''))
                            {
                        ?>
                        <td>SELECT STATUS TO UPDATE</td>
                        <td>
                            <select name="busstatus" id="cars" required disabled="true">
                                <option value="">--Select Status--</option>
                                <option value="onboarding">ONBOARDING</option>
                                <option value="offboarding">OFFBOARDING</option>
                                <option value="atstation">AT STATION</option>
                                <option value="Reached">REACHED</option>

                            </select>
                        </td>
                        <?php } 
                            else
                            {
                        ?>       
                         <td>SELECT STATUS TO UPDATE</td>
                        <td>
                            <select name="busstatus" id="cars" required >
                                <option value="">--Select Status--</option>
                                <option value="onboarding">ONBOARDING</option>
                                <option value="offboarding">OFFBOARDING</option>
                                <option value="atstation">AT STATION</option>
                                <option value="Reached">REACHED</option>
                        </select>
                        </td>
                    <?php    }    
                    ?>     
                    </tr>
                    <tr>
                        <?php
                            $dateFormatted=date("d-m-Y");
                            $conn=mysqli_connect("localhost","root","","projectmeteor"); 
                            $querystring="SELECT Date_of_leaving FROM bus WHERE busid='$busid'"; 
                            $result = mysqli_query($conn,$querystring);
                            while($row=$result->fetch_assoc()) 
                            {
                                $date =  $row['Date_of_leaving'];
                            }    
                            if(($date > $dateFormatted) || ($date == ''))
                            {
                        ?>
                        
                        <td colspan="5"><input type="submit" value="UPDATE STATUS" name="update" disabled="true"></td>
                         <?php } 
                            else
                            {
                        ?>       
                         <td colspan="5"><input type="submit" value="UPDATE STATUS" name="update" ></td>
                        </td>
                    <?php    }    
                    ?>      

                    </tr>
                </table>
            </form>    
        </div>

        <div id="notice">
            <table style="width:50%; padding-top:100px;">
                <tr>
                    <td colspan='5'><h2> NOTICE </h2></td>
                </tr>
                <tr>
                    <td><h4>DATE</h4></td>
                    <td><h4>DAY</h4></td>
                    <td><h4>TIME</h4></td>
                    <td><h4>MESSAGE</h4></td>
                    <td></td>
                </tr>
                <?php
                    // Username is root
                    $conn=mysqli_connect("localhost","root","","projectmeteor");
                    // Checking for connections
                    if ($conn->connect_error) {
                        die('Connect Error (' . 
                        $conn->connect_errno . ') '. 
                        $conn->connect_error);
                    }
                
                    // SQL query to select data from database
                    $sql = "SELECT * FROM `busnotice` WHERE  bus_id='$busid' ORDER BY date,sub_time DESC; ";
                    $result = $conn->query($sql);
                    $rows1 = mysqli_num_rows($result);
                    if($rows1==0)
                    {
                        echo"<tr><td colspan='5'> NO NOTICE SO FAR ...</td></tr>";
                    }
                    else 
                    {    
                        while($rows1=$result->fetch_assoc())
                        { 
                            ?> 
                        <tr>
                            <td><?php echo $rows1['date'];?></td>
                            <td><?php echo $rows1['day'];?></td>
                            <td><?php echo $rows1['sub_time'];?></td>
                            <td><?php echo $rows1['title'];?></td>
                            <td><a href="busDriversNotice.php?bus_id=<?php echo $busid;?>&date=<?php echo $rows1['date'];?>&title=<?php echo $rows1['title'];?>&sub_time=<?php echo $rows1['sub_time'];?>" target="_blank"><button type="button" class="btn_del">VIEW >> </button></a></td>
                        </tr>
                        <?php } ?>

                    <?php } ?>    
                  
            </table>
        </div>
        <div id="complaint_portal">
            <div>
                <img id="optionalstuff" src="https://micdn-13a1c.kxcdn.com/images/sg/content-images/complaints.jpg" alt="complaint" width="400" height="400" style="margin-right: 205px; margin-left: 50px;">
                <table style="display: inline-block;  vertical-align: top;">
                    <form action="busDriverComplaintPortal.php" target="_blank" method="POST">
                        <tr>
                            <td colspan="5" ><h3>BUS NO. <?php echo "$busid";?></h3></td>
                        </tr>
                        <tr><td colspan="5"><h3> COMPLAINT PORTAL </h3></td></tr>
                        <tr>
                            <td>ENTER DRIVER NAME</td>
                            <td><input type="text" name="d_name" placeholder="Enter Driver Name" required></td>  
                        </tr>    
                        <tr>
                            <td>ENTER COMPLAINT</td> 
                            <td><textarea name="d_complaint" placeholder="Enter Complaints" rows="10" cols="50"required></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="5"><input type="submit" name="SUBMIT"></td>
                        </tr>
                        <tr>
                            <td colspan="5"><a href="driverViewBusDriverComplaints.php?bus_id=<?php echo $busid;?>" target="_blank"><button type="button" class="btn_del">VIEW COMPLAINTS </button></a></td>
                        </tr>
                    </form>
                </table>
            </div> 
        </div>

        <div id="footer">
            <h2 style="color:white"><center>BEE TRAVELLER TRAVEL AGENCY</center></h2>
            <div style="color:white"><center>2021 &#169; BeeTraveller travel agency | All rights Reserved.</center></div>
        </div>
    
    </div>
</body>
<?php }  ?>



<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    /*function myFunction() 
    {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) 
        {
            x.className += " w3-show";
        } 
        else 
        { 
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }*/

    var mySidebar = document.getElementById("mySidebar");

    function w3_open() 
    {
        if (mySidebar.style.display === 'block') 
        {
            mySidebar.style.display = 'none';
        } 
        else 
        {
            mySidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() 
    {
        mySidebar.style.display = "none";
    }

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() 
    {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }


    // Get the modal for small screen
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn1");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() 
    {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }

    window.history.forward();
    function noBack() 
    {
        window.history.forward();
    }
    
</script>
</html>