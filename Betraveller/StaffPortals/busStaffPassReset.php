<!DOCTYPE html>
<html>
    <head>
        <title>BUSDRIVERS PORTAL | PASSWORD RESET</title>
        <style>
            @media only screen and (max-width: 700px) 
            {   
                
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

                .div2 
                {
                    margin-top:50px;
                    width: 20px;
                    height: 50px;  
                    
                    border: 1px solid red;
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
            td 
            {
                font-weight: bold;
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
            
    
            td {
                font-weight: lighter;
            }

            .div2 
            {
                margin-top:50px;
                width: 900px;
                height: 350px;  
                padding: 50px;
                border: 1px solid red;
            }

            .button 
            {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 12px;
                margin: 4px 2px;
                cursor: pointer;
            }
            .enterPassword
            {
                width: 195px;
            }
        </style>
    </head>
    <body>
        <?php
            $conn=mysqli_connect("localhost","root","","projectmeteor");
            $staffId = $_POST['staffID'];
            $mobileNo = $_POST['mobileNO'];
            session_start();
            $_SESSION['staffId'] = $_POST['staffID'];
            $_SESSION['mobileNo'] = $_POST['mobileNO'];
            $query = "SELECT * FROM `staff` WHERE u_name='$staffId' and phn_no='$mobileNo'";
            $result = mysqli_query($conn,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==0)
            {
                echo'<script>alert("No such staff record");</script>';
                echo '<script>window.location= "packageStaff.php";</script>';
            }  
            else
            {
        ?>
        <center><div class="div2">
            <h2 style="padding-top:15px;"><center>RESET YOUR PASSWORD</center></h2>
            <form action="staffUpdatePassword.php" method="POST">
                <table style="margin-top:25px; width:50%">
                    <tr>
                        <td>ENTER NEW PASSWORD : </td>   
                        <td><input class="enterPassword" type="password" name="pass" placeholder="Enter your New password" minlength="8" required></td>
                    </tr>
                    <tr>
                        <td>RE-ENTER YOUR PASSWORD: </td>
                        <td><input class="enterPassword" type="password" name="repass" placeholder="Re-Enter your New password" minlength="8" required></td>
                    </tr>
                </table>
                <br>
                <div>
                    <center><input class="button" type="submit" name="updatePass" name="UPDATE"></center>
                </div>
            </form>
            <div>
                <br>
                <center>-- OR --</center>
                <br>
                <center><a href="index.php"><button class="button">LOGIN</button></a></center>
            </div>
        </div></center>
        <?php } ?>
    </body>
</html>
