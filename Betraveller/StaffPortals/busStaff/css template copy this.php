<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BUS STAFF | HOME</title>
    <link href="style.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        

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
            $driverID = $_GET['d_id'];
    ?>
    <div class="full_sht">
        <div class="headder">
            <h3 style="color: white; padding-top:11px; padding-left: 20px;">BEE TRAVELLER</h3>
            <h3 data-toggle="modal" data-target="#myModal" style="color: white;" class="powerbtn">
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
                    <a href="busStaffHome.php" style="text-decoration: none;">HOME</a>

                    <hr>

                    <a href="busBookings.php" style="text-decoration: none;">BUS BOOKINGS</a>

                    <hr>

                    <button class="dropdown-btn">BUS DETAILS
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="viewBusDetails.php" style="text-decoration: none;">VIEW DETAILS</a>
                        <a href="updateBusDetails.php" style="text-decoration: none;">UPDATE DETAILS</a>
                    </div>

                    <hr>

                    <button class="dropdown-btn">BUS DRIVER 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="addpackage.php" style="text-decoration: none;">DRIVER DETAILS</a>
                        <a href="viewPackage.php" style="text-decoration: none;">ADD DRIVER</a>
                        <a href="viewPackageBook.php" style="text-decoration: none;">SEND NOTICE</a>
                        <a href="packagestaf.php" style="text-decoration: none;">DRIVER COMPLAINTS</a>
                    </div>
                </div>
            </div>
            <div class="display scroll">
                <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">BEE TRAVELLER BUS STAFF</h4>
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
                  <a href="Logout.php"><button type="button" name="logout" onclick="return confirm('Are you sure you want to Logout ?');" class="btn btn-default">LOGOUT</button></a>
                </div>
              </div>
              
            </div>
          </div>

                    /* PASTE MAIN CODE HERE*/


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