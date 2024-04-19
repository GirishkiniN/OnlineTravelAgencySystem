<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BUS DRIVER PORTAL | VIEW COMPLAINTS</title>
	<style type="text/css">
		table 
        {
            margin: 0 auto;
            font-size: 15px;
            border: 1px solid black;
            border-collapse: collapse;
        }

        td 
        {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td 
        {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        
        th
        {
        	background-color: #ddd;
        }
  
        td
        {
            font-weight: lighter;
        }
        .button 
        {
		  background-color: #4CAF50; /* Green */
		  border: none;
		  color: white;
		  padding: 10px 12px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 10px;
		}

		* 
		{
		  box-sizing: border-box;
		}

		#myInput 
		{
		  background-image: url('https://cdn3.iconfinder.com/data/icons/video-player-1/154/search-find-magnifier-function-player-keyword-name-512.png');
		  background-size: 25px 25px;
		  background-position: 10px 10px;
		  background-repeat: no-repeat;
		  width: 50%;
		  font-size: 16px;
		  padding: 12px 20px 12px 40px;t
		  border: 1px solid #ddd;
		  margin-bottom: 12px;
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
            
    ?>
	<h1><center>BEE TRAVELLER TRAVEL AGENCY</center></h1>
	<form action="" method="POST">
		<h2><center>LIST OF COMPLAINTS</center></h2>
		<br>
		<center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Complaint Numbers.." title="Type Complaint Number"></center>
		<br>
		<table id="myTable">
			<tr class="header">
                <th>COMPLAINT NO.</th>                
		        <th>DATE</th>
                <th>DAY</th>
                <th>TIME</th>
                <th>DRIVER NAME</th>
                <th>COMPLAINTS</th>
                <th>STATUS</th>
			</tr>
			<?php
                $b_id=$_GET["bus_id"];    
                // Username is root
                $conn=mysqli_connect("localhost","root","","projectmeteor");
                // Checking for connections
               	if ($conn->connect_error) 
               	{
                    die('Connect Error (' . 
                    $conn->connect_errno . ') '. 
                    $conn->connect_error);
                }
                    
              	// SQL query to select data from database
                $sql = "SELECT * FROM busdriverscomplaint WHERE bus_id = '$b_id' ORDER BY date,cmp_id DESC";
                $result = $conn->query($sql);
                $rows1 = mysqli_num_rows($result);
                if($rows1==0)
                {
                    echo"<tr><td colspan='8'> NO COMPLAINT HAS BEEN LODGED SO FAR ...</td></tr>";
                }
                else
                {    
                    while($rows=$result->fetch_assoc())
                    { 
                            
            ?> 
            <tr>
                <td><?php echo $rows['cmp_id'];?></td>
				<td><?php echo $rows['date'];?></td>
                <td><?php echo $rows['day'];?></td>
                <td><?php echo $rows['time'];?></td>
                <td><?php echo $rows['driver_name'];?></td>
                <td><?php echo $rows['complaints'];?></td>
                <td><?php echo $rows['status'];?></td>
            </tr>
            <?php
            	} }
            ?>	
		</table>
	</form>
<?php } ?>
</body>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</html>