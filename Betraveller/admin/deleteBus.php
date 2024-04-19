<?php
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
            $Busid=$_GET["bus_id"];
            mysqli_query($conn,"delete from bus where busID ='$Busid'");
        }
?>                          
<script type="text/javascript">
alert('Bus No. <?php echo $Busid ?> Deleted Succesfully');  
window.location="ViewBus.php";

</script>