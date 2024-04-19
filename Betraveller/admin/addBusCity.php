
<!DOCTYPE html>

<head>
    <title>ADMIN | ADD BUS CITY</title>
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style type="text/css">
        table 
        {
            margin: 0 auto;
            font-size: 15px;
            border: 1px solid black;
            border-collapse: collapse;
            height: 100px;
            width: 50%;
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

        .button_del 
        {
          background-color: red; /* Green */
          border: none;
          color: white;
          padding: 10px 12px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 10px;
        }

        .button_disabled 
        {
          padding: 10px 12px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 10px;
          border: 1px solid #999999;
          background-color: #cccccc;
          color: #666666;
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
          padding: 12px 20px 12px 40px;
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
                <h1 style="color:white;"><center><b>ADD BUS LOCATIONS</b></center></h1><br><br>
                <table>
                    <th>SL. NO.</th>
                    <th>City Name</th>
                    <th>EDIT</th>
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
                        $sql = "SELECT * FROM buscity";
                        $result = $conn->query($sql);
                        $i=1;
                        while($rows=$result->fetch_assoc())
                        { 
                          
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $rows['origin'];?></td>
                        <td><a href="deleteBusCity.php?bus_city=<?php echo $rows['origin']; ?>"><button type="button" class="button_del" onclick="return confirm('Are you sure you want to delete <?php echo $rows['origin']; ?> city ?');">DELETE</button></a></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>  
                    
                </table>
                <br><br>
            <form action="" method="POST">
            <table align="center">
                <tr>            
                    <td>                
                        <label>ADD NEW CITY:</label>              
                    </td>           
                    <td>                
                        <p><input type=”text” style="width: 100%; border-radius: 5px;" name="busCity"  placeholder="Enter City"  required /></p>            
                    </td>       
                </tr>

            </table>

            <div style="padding-top: 30px;" align="center">    
                <input type="submit" name="insert" value="   INSERT   ">
                
                <input type="RESET" name="RESET" value="   RESET  ">
            </div>
            <br><br><br>
        </form>
            </div>
        </div>

    </div>
        <?php
            $conn=mysqli_connect("localhost","root","","projectmeteor");

            if(isset($_POST['insert']))
            {
                $busCity=$_POST['busCity'];
                

                $querystring="INSERT INTO buscity(origin,destination) VALUES('$busCity','$busCity')";  

                if(mysqli_query($conn,$querystring))
                {
                    echo '<script>alert("NEW CITY HAS BEEN ADDED SUCCESFULLY !")</script>';
                    echo '<script>window.location="addBusCity.php"</script>';    
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