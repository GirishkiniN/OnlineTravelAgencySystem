<?php
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    session_start();
    $adminID = $_SESSION['adminID'];
    if($pass == $repass)
    {
        $conn=mysqli_connect("localhost","root","","projectmeteor");
        $querystring="UPDATE admi SET pass='$pass' WHERE name='$adminID'";
        mysqli_query($conn,$querystring);	
        echo '<script type="text/javascript">alert("PASSWORD OF USERNAME ' . $adminID . ' HAS BEEN UPDATED SUCCESFULLY!!");</script>';
        echo '<script>window.location= "index.php";</script>';
    }
    else
    {
       echo'<script>alert("PLEASE ENTER THE PASSWORD CORRECTLY!");</script>';
    }
?>