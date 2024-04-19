<?php
	$conn=mysqli_connect("localhost","root","","projectmeteor");    	
	session_start();
    $_SESSION['staff_id'] = $_POST['staffid'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['loggedIn'] = true;  
    $staff_id = $_SESSION['staff_id'];
    $password = $_SESSION['password'];
    $domain = "Bus_staff";
    $querystring="SELECT * FROM staff WHERE u_name='$staff_id' AND password='$password' AND domain='$domain'";
    $result = $conn->query($querystring);
    $rows1 = mysqli_num_rows($result);
    if($rows1==0)
    {
        echo'<script>alert("Please check staff id or password again!!")</script>';
        echo '<script>window.location= "index.php";</script>';
    }
    else 
    {
    	echo '<script>window.location= "busStaffHome.php";</script>';
    }	
?>