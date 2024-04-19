<?php

include "connection.php";
$id=$_GET["ID"];

$Full_name="";
$Email="";
$phn_no="";
$age="";
$Addres="";


$res=mysqli_query($db,"select * from staf where ID ='$id'");
while($row=mysqli_fetch_array($res))
{
    $Full_name=$row["Full_name"];
$Email=$row["Email"];
$phn_no=$row["phn_no"];
$age=$row["age"];
$Addres=$row["Addres"];

}


?>
<!DOCTYPE html>

<head>
    <title> staf page</title>
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
     table,
        td {
            border: 1px solid steelblue;
            border-collapse: collapse;
        }
</style>
</head>
<?php
      include 'connection.php';
      session_start();
    $id=$_SESSION['id'];
    $query=mysqli_query($db,"SELECT * FROM staf where ID='$id'")or die(mysqli_error());
    $row=mysqli_fetch_array($query);
    if(!isset($_SESSION['id'])){
        header('location:index.php');
    }
      ?>
<body>
    <div class="full_sht">
        <div class="headder">
            <h1 style="font-weight: bold ;">STAF PANEL</h1>
            <a href="logout.php">  <button class="powerbtn" style="font-size:34px"> <i class="fa fa-power-off"></i></button></a>
        </div>
        <div class="cntnt" >
            <div class=" nav">
            <div class="sidenav" style="text-decoration: none;">
                    
                    <a href="packagestf.php" >STAFF PROFILE</a>
                    <a href="viewpackages.php" >VIEW PACKAGE </a>
                    <a href="packagebooking.php" >PACKAGE BOOKING</a>

                </div>
            </div>
            <div class="display scroll">
            <h1 style="color:white;"><center><b>EDIT YOUR PROFILE</b></center></h1><br><br>
            <form action="" method="POST" enctype="multipart/form-data" >
           
            <table style="margin-left:500px;">
               
                <tr>			
                    <td>				
                        <lable>Full name:</lable> 				
                    </td>			
                    <td style="width: 300px;">				
                        <p><input style="width:100%" type=”text” name="Full_name"  placeholder="Enter operator name"  required value="<?php echo $Full_name; ?>"/></p>			
                    </td>		
                </tr>

                

                <tr>			
                    <td>				
                        <lable>Email :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="Email"  placeholder="Enter origin"  required value="<?php echo $Email; ?>"/></p>			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Phone Number :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="phn_no"  placeholder="Enter Destination"  required value="<?php echo $phn_no; ?>"/></p>			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Age :</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="age"  placeholder="Enter origin area"  required value="<?php echo $age; ?>"/></p>			
                    </td>		
                </tr>

                <tr>			
                    <td>				
                        <lable>Address:</lable> 				
                    </td>			
                    <td>				
                        <p><input type=”text” style="width:100%" name="Addres"  placeholder="Enter Destination area"  required value="<?php echo $Addres; ?>"/></p>			
                    </td>		
                </tr>

                
               
                <tr>
                    <td></td>
                    <td>
                    <div class="w3-container">
            
                             <input type="submit" name="update" value="uplode">   
                           <a href="packagestf.php">  <input style="color:black;" type="button" name="Cancel" value="cancel"></a>
                    </div>
                    </td>
                </tr>
            </table>

            

        </form>
        
        <?php

            if(isset($_POST["update"]))
            {
                
                    mysqli_query($db, "update staf set Full_name='$_POST[Full_name]',Email='$_POST[Email]',phn_no='$_POST[phn_no]',age='$_POST[age]',Addres='$_POST[Addres]' where ID=$id");
           
               

                ?>
                    <script type="text/javascript">
                    window.location="packagestf.php";
                    </script>
                <?php
            }
        ?>
            </div>
        </div>

    </div>

   
</body>