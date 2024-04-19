<?php
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    session_start();
    $busno = $_SESSION['busno'];
    $did = $_SESSION['driverId'];
    if($pass == $repass)
    {
        $conn=mysqli_connect("localhost","root","","projectmeteor");
        $querystring="UPDATE busdriverdetails SET d_u_password = '$pass' WHERE d_busNo = '$busno'";
        mysqli_query($conn,$querystring);	
        echo '<script type="text/javascript">alert("PASSWORD OF USERNAME ' . $did . ' HAS BEEN UPDATED SUCCESFULLY!!");</script>';
        echo '<script>window.location= "index.php";</script>';
    }
    else
    {
       echo'<script>alert("PLEASE ENTER THE PASSWORD CORRECTLY!");</script>';
    }
?>