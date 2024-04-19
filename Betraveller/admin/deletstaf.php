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
  $id=$_GET["ID"];
  mysqli_query($link,"delete from staff where ID='$id'");
  }
?>                          
<script type="text/javascript">
alert('staff deleted succefully');
window.location="addstaff.php";

</script>