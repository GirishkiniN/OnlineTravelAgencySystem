<!DOCTYPE html>
<html>
<?php
     error_reporting(0);
    $conn=mysqli_connect("localhost","root","","projectmeteor");        
    session_start();
    if(empty($_SESSION['did']))
    {
        echo '<script>window.location= "index.php";</script>';
        die();
    }
    else
    {
    
        $status = $_POST['busstatus'];
        $busno = $_SESSION['busno'];
        $todayDate = date("d-m-Y");
        $conn=mysqli_connect("localhost","root","","projectmeteor"); 
        $querystring="SELECT * FROM bus WHERE busid='$busno'"; 
        $result = mysqli_query($conn,$querystring);
        while($row=$result->fetch_assoc()) 
        {
            $date =  $row['Date_of_reaching'];
            $newdate =  $row['Date_of_leaving'];

        }    
        /*echo "$busno";
        echo"$status";*/

        if(($todayDate != $date) && ($status == 'Reached'))
        {
            $txt = "Bus has not yet Reached!!";
            echo "<script>alert('$txt');</script>";
            echo'<script>window.location="loginauth.php#updateStatus";</script>';
        }  
        else 
        {
            $querystring="UPDATE busbookings SET status = '$status' WHERE busid = '$busno'  AND Date_of_leaving = '$newdate' AND status != 'Reached'";
            mysqli_query($conn,$querystring);   
            $querystring1="UPDATE bus SET status = '$status' WHERE busid = '$busno'";
            mysqli_query($conn,$querystring1);
        
            $txt = "Status of. $busno is updated.";
            echo "<script>alert('$txt');</script>";
            echo'<script>window.location="loginauth.php#updateStatus";</script>';
        }    
       
    
  }
?>
