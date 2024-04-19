<?php
  include "connection.php";
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
            $id=$_GET["hotelID"];
            mysqli_query($link,"delete from hotels where hotelID ='$id'");
        }
?>                          
<script type="text/javascript">
window.location="viewPackage.php";

</script>