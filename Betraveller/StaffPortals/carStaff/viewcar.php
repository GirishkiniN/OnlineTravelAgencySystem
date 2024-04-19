<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `cabdrivers` WHERE CONCAT(`carID`,`carType`, `carModel`, `carNo`, `driverRating`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `cabdrivers`";
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
        echo '<script>alert("No Results founds"); window.location="viewcars.php";
        </script>';
    
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CAR STAFF | HOME</title>
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

        .btn_suc{
            width:60px;
            height: 40px;
            background-color: greenyellow;
             color: red;
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
            border-collapse: collapse;
            width:900px;
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
                        <a href="carStaffHome.php" style="text-decoration: none;">HOME</a>

                        <hr>

                        <a href="carBookings.php" style="text-decoration: none;">CAR BOOKINGS</a>

                        <hr>

                        <a href="viewcar.php" style="text-decoration: none;">CAR DETAILS</a>

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
                                            <h4 class="modal-title">BEE TRAVELLER CAR STAFF</h4>
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
                
                    <div>
                    <h1 ><center><b>VIEW CAR DETAILS</b></center></h1><br><br>
                    
            <form action="" method="post">
			<div style="margin-left:300px">
            <input type="text" style="width: 400px; height: 40px; border-radius: 10px;" name="valueToSearch" placeholder="Value To Search">
                        <input type="submit"  style="width: 150px; height: 40px;border-radius: 10px; "  name="search" value="Filter"><br><br>
                             </div>  
            <table style="margin-left:140px; margin-bottom:50px;">
                <tr>
                    <th>carID</th>
                    <th>car Type</th>
                    <th>car Model</th>
					<th>car Colour</th>
                    <th>car No</th>
	                <th>Car Rating</th>
					<th>Image</th>					
                   	<th>Edit</th>
                </tr>
                                                
      <!-- populate table from mysql database -->
                <?php error_reporting(0);  while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['carID'];?></td>
                    <td><?php echo $row['carType'];?></td>
                    <td><?php echo $row['carModel'];?></td>
					<td><?php echo $row['color'];?></td>
                    <td><?php echo $row['carNo'];?></td>	
                    <td><?php echo $row['driverRating'];?></td>
					  <td><img src="../../admin/image/car/<?php echo $row["imagee"]; ?>"  height="100px" width="100px"></td>
                    <td><a  href="edit.php?carID=<?php echo $row["carID"];?>"><button type="button" class="btn_suc" >Edit </button></a></td>				
                  	
					
                </tr>
                <?php endwhile;?>
            </table>
        </form>
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