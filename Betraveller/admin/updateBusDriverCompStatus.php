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
             $conn=mysqli_connect("localhost","root","","projectmeteor");
             $busID = $_GET['bus_id'];
             $cmpNo = $_GET['cmp_id'];
             $driverName = $_GET['driver_Name'];
             $status = "Reviewed";
             $querystring="UPDATE busdriverscomplaint SET status='$status' WHERE bus_id='$busID' AND cmp_id='$cmpNo' AND driver_name='$driverName'";
             mysqli_query($conn,$querystring);
             echo '<script type="text/javascript">alert("Complaint No. ' . $cmpNo . ' has been Reviewed !!");</script>';
             echo '<script>window.location= "viewBusDriverComplaints.php";</script>';
        }     
?>