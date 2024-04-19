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
            $BusCity=$_GET["bus_city"];
            mysqli_query($conn,"delete from buscity where origin ='$BusCity'");
        }
?>                          
<script type="text/javascript">
alert('<?php echo $BusCity ?> City Deleted Succesfully');  
window.location="addBusCity.php";

</script>