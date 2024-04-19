<?php
    require("php/PasswordHash.php");
    $hasher = new PasswordHash(8, false);
    $pass = $_POST['newPass'];
    $repass = $_POST['rePass'];
    session_start();
    $userid = $_SESSION['userid'];
    $email = $_SESSION['email'];
    $hash = $hasher->HashPassword($pass);
    if($pass == $repass)
    {
        
        $conn=mysqli_connect("localhost","root","","projectmeteor");
        $querystring="UPDATE users SET Password = '$hash' WHERE Username = '$userid' AND EMail='$email'";
        mysqli_query($conn,$querystring);	
        echo '<script type="text/javascript">alert("PASSWORD OF USERNAME ' . $userid . ' HAS BEEN UPDATED SUCCESFULLY!!");</script>';
        echo '<script>window.location= "index.php";</script>';
    }
    else
    {
       echo'<script>alert("PLEASE ENTER THE PASSWORD CORRECTLY!");</script>';
    }
?>