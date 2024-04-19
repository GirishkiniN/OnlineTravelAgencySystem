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
  $id=$_GET["carID"];
  mysqli_query($link,"delete from cabdrivers where carID='$id'");
  }
?>                          
<script type="text/javascript">
window.location="viewCab.php";

</script>