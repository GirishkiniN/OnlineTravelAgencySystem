<?php
        $conn=mysqli_connect("localhost","root","","projectmeteor");
        session_start();
        $_SESSION['busno'] = $_POST['originCity'];
        $_SESSION['did'] = $_POST['did'];
        $_SESSION['password'] = $_POST['dpass'];
        $_SESSION['loggedIn'] = true;  
        $driverID = $_SESSION['did'];
        $pass = $_SESSION['password'];
        $busid = $_SESSION['busno'];
        $query = "SELECT * FROM `busdriverdetails` WHERE d_u_name='$driverID' and d_u_password='$pass' and d_busNo='$busid'";
        $result = $conn->query($query);
        $rows = mysqli_num_rows($result);
        if($rows==0)
        {
            echo'<script>alert("No such driver record");</script>';
            echo'<script>window.location="index.php";</script>';
        }  
        else
        {
              echo '<script>window.location= "loginauth.php";</script>';
        }        
?>