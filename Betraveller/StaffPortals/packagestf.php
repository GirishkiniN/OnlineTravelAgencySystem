<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PACKAGE STAFF | HOME</title>
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
        
</head>
<body>
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
    ?>
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
            <div class="display scroll">
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

                <div>
                <img class="mySlides" src="https://media-cdn.tripadvisor.com/media/photo-s/0d/dd/0d/b2/taxi-services-tour-travels.jpg" style="width:100%; height: 350px;">

                    <img class="mySlides" src="https://imgcld.yatra.com/ytimages/image/upload/t_seo_Holidays_w_1400_h_410_c_fill_g_auto_q_auto:good_f_jpg/v1396178599/International%20Holidays/Maldives/Maldives/shutterstock_76399303.jpg" style="width:100%;height: 350px;">
                    
                    <img class="mySlides" src="https://www.ravelroads.com/images/kasi/goa-tour-package.jpg" style="width:100%;height: 350px;">
                    
                </div>    
                <div class="outer">
                    <h3 style="padding-left: 25px;">DASHBOARD</h3> 
                    <br><br>
                    <div  style="width:270px;height:200px;border:1px solid #000; background-color: springgreen; margin-left:45px;">
                        
                                <div>
                                    <center><p style="margin-top: 30px;">TOTAL NO. OF PACKAGES</p></center><br>
                                        <center>
                                            <?php
                                                $conn=mysqli_connect("localhost","root","","projectmeteor");        
                                                $query = "SELECT * FROM `hotels`";
                                                $result = mysqli_query($conn,$query) or die(mysql_error());
                                                $rows = mysqli_num_rows($result);
                                                echo"$rows";
                                            ?>
                                            <p style="padding-top: 10px;"><center><a href="viewpackages.php"><button>VIEW MORE</button></a></center></p>  
                                        </center>
                                </div>
                    </div>

                    <div  style="width:270px;height:200px;border:1px solid #000; background-color: deepskyblue; margin-left:45px;">
                        
                         <div>
                             <center><p style="margin-top: 30px;">TOTAL NO. OF PACKAGE BOOKING</p></center><br>
                                    <center>
                                        <?php
                                            $conn=mysqli_connect("localhost","root","","projectmeteor");        
                                            $query = "SELECT * FROM `hotelbookings`";
                                            $result = mysqli_query($conn,$query) or die(mysql_error());
                                            $rows = mysqli_num_rows($result);
                                            echo"$rows";
                                        ?> 
                                        <p style="padding-top: 10px;"><center><a href="packagebooking.php"><button>VIEW MORE</button></a></center></p>   
                                    </center>
                        </div>
                    </div>


                    <div style="width:270px;height:200px;border:1px solid #000; background-color: indianred; margin-left:45px;">
                       
                            <div>
                                <center><p style="margin-top: 30px;">TOTAL NO. OF BOOKINGS TODAY</p></center><br>
                                    <center>
                                        <?php
                                            $todayDate = date("d-m-Y");
                                            $conn=mysqli_connect("localhost","root","","projectmeteor");        
                                            $query = "SELECT * FROM `hotelbookings` WHERE date='$todayDate'";
                                            $result = mysqli_query($conn,$query) or die(mysql_error());
                                            $rows = mysqli_num_rows($result);
                                            echo"$rows";
                                        ?>    
                                        
                                    </center>
                            </div>
                    </div>
                </div>

                <div id="footer">
                    <h2 style="color:white"><center>BEE TRAVELLER TRAVEL AGENCY</center></h2>
                    <div style="color:white; font-size: 13px;"><center>2021 &#169; BeeTraveller travel agency | All rights Reserved.</center></div>
                </div>
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
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }

    </script>

    <script type="text/javascript">
        $("#slideshow > div:gt(0)").hide();

        setInterval(function() {
          $('#slideshow > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow');
        }, 3000);

        $("#slideshow1 > div:gt(0)").hide();

        setInterval(function() {
          $('#slideshow1 > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow1');
        }, 4000);

        $("#slideshow2 > div:gt(0)").hide();

        setInterval(function() {
          $('#slideshow2 > div:first')
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo('#slideshow2');
        }, 5000);

        function myFunction() 
        {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) 
          {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) 
            {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) 
              {
                tr[i].style.display = "";
              } else 
              {
                tr[i].style.display = "none";
              }
            }       
          }
        }

       

    </script>
<?php 
    }
?>
</body>
</html>