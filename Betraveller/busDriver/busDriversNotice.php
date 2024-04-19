<!DOCTYPE html>
<html>
    <head>
        <title>BUS DRIVERS PORTAL | NOTICE</title>
        <style>
            .div2 
            {
                width: 700px;
                height: 600px;  
                padding: 50px;
                border: 1px solid red;
            }

            .div3 
            {
                width: 500px;
                height: 200px;  
                padding: 50px;
                border: 1px solid red;
                overflow: scroll;
            }

            @media only screen and (max-width: 700px) 
            {
            #main {margin-left: 0; margin-right:0; font-size: 15px;}

            .div2 
            {
                width: auto;
                height: 600px;  
                padding: 10px;
                border: 1px solid red;
            }
            .div3 
            {
                width: auto;
                height: 100px;  
                padding: 50px;
                border: 1px solid red;
                overflow: scroll;
            }
            table 
            {
                margin: 0 auto;
                font-size: 5px;
                border: 1px solid black;
                border-collapse: collapse;
            }

            td 
            {
                background-color: #E4F5D4;
                
            }
    
            th,
            td {
                
                padding: 2px;
                text-align: center;
            }
        
        }

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
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 8px;
            padding-right:-25px;
            text-align: center;
        }
        
  
        td {
            font-weight: lighter;
        }
    </style>
    </head>
    <body>
        <center><div class="div2">
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
                    $b_id=$_GET["bus_id"];
                    $b_date=$_GET["date"];
                    $b_title=$_GET["title"];
                    $b_time=$_GET["sub_time"];
                    $querystring="SELECT * FROM busnotice WHERE bus_id='$b_id' AND date='$b_date' AND title='$b_title' AND sub_time='$b_time' ";	
                    $result = mysqli_query($conn,$querystring);
                    while(($rows1=$result->fetch_assoc()))
                    { 
            ?>
            <center><h1 style="color:red;"><?php echo $rows1['title'];?></h1></center>
              <p align='left' style="font-weight: bold;">DATE OF POST: <?php echo $rows1['date'];?> </p>
              
              <p align='left' style="font-weight: bold;">DAY OF POST: <?php echo $rows1['day'];?> </p> 
              <br>
              <center><div class="div3">
                   <?php echo $rows1['content'];?>
               </div></center>
              <br>
              <p align='left' style="font-weight: bold;">With Regards,</p>
              <p align='left' style="font-weight: bold;">BEE TRAVELLER</p>  
            <?php } }?>
        </div></center>
    </body>
</html>

