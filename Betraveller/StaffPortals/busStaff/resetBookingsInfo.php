<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>STAFF PORTAL | RESET BOOKINGS</title>
</head>
<body>
    <?php
        $conn=mysqli_connect("localhost","root","","projectmeteor");
        $bus_no=$_GET["bus_id"];
        $val = 0;
        $querystring1="UPDATE bus SET noOfBookings = '$val'  WHERE busID = '$bus_no'";
        mysqli_query($conn,$querystring1);
        $sql = "SELECT * FROM bus WHERE busID = '$bus_no'";
        $result = $conn->query($sql);
        while($rows=$result->fetch_assoc())
        {
            $totalSeats = $rows['seats'];
        }   
        $querystring2="UPDATE bus SET seatsAvailable = '$totalSeats', status = '', Date_of_leaving='', Date_of_reaching=''  WHERE busID = '$bus_no'";
        mysqli_query($conn,$querystring2);
        $querystring3="UPDATE busbookings SET status = '' WHERE busid = '$bus_no'  AND Date_of_leaving = '$newdate'";
        mysqli_query($conn,$querystring3);
        $txt = "BUS NO. $bus_no NUMBER OF BOOKINGS AND SEATS AVAILABLE IS RESET ";
        echo "<script language='javascript' type='text/javascript'>";
        echo "alert('$txt');";
        echo "window.location.href='updateBusDetails.php'";
         echo "</script>";
    ?>
</body>
</html>