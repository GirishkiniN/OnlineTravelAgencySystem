<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BEE TRAVELLER | COMPLAINTS PORTAL </title>
	<style>
        .div2 
        {
            width: 700px;
            height: 100px;  
            padding: 50px;
            border: 1px solid red;
        }
    </style>
</head>
<body>
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
			$conn=mysqli_connect("localhost","root","","projectmeteor");
		    session_start();
		    $busno = $_SESSION['busno'];
		    $sub_date=date("d-m-Y");
	        $sub_day=date("l");
	        date_default_timezone_set("Asia/kolkata");
	        $sub_time=date("h:i:sa");
		    $driverName = $_POST['d_name'];
		    $complaint = $_POST['d_complaint'];
		    $query = "INSERT INTO busdriverscomplaint(bus_id,date,day,time,driver_name,complaints) VALUES ('$busno', '$sub_date', '$sub_day', '$sub_time', '$driverName', '$complaint')";
		    mysqli_query($conn,$query);
	   
	?>
	<h1><center> BUS NO: <?php echo "$busno"; ?> COMPLAINT PORTAL </center></h1>
    <center><div class="div2">
        <h3>COMPLAINT HAS BEEN SENT SUCCESFULLY !!</h3>
        <h3>
        	YOUR COMPLAINT NUMBER IS : 
        	<?php
        		   $querystring="SELECT cmp_id FROM busdriverscomplaint WHERE bus_id='$busno' AND day='$sub_day' AND date = '$sub_date' and time='$sub_time'";	
			       $result = mysqli_query($conn,$querystring);
			       while($row=$result->fetch_assoc()) 
			       {
			           echo $row['cmp_id'];
			       } 
        	?> 
        </h3>
       	<h3>YOUR COMPLAINT WILL BE REVIEWED SHORTLY...</h3>
    </div></center>
<?php } ?>
</body>
</html>