<?php
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
        session_start();
    $staffID = $_SESSION['staffId'];
    $mobileno = $_SESSION['mobileNo'];
    if($pass == $repass)
    {
        $conn=mysqli_connect("localhost","root","","projectmeteor");
        $querystring="UPDATE staff SET password = '$pass' WHERE u_name = '$staffID' AND phn_no='$mobileno'";
        mysqli_query($conn,$querystring);	
        echo '<script type="text/javascript">alert("PASSWORD HAS BEEN UPDATED SUCCESFULLY!!");</script>';
        echo '<script>window.location= "index.php";</script>';
    }
    else
    {
       echo'<script>alert("PLEASE ENTER THE PASSWORD CORRECTLY!");</script>';
    }
?>