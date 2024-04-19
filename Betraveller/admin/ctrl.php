<?php
    
            $conn=mysqli_connect("localhost","root","","projectmeteor");
            session_start();
            $_SESSION['suname'] = $_POST['auname'];
            $_SESSION['spass'] = $_POST['apass'];
            $_SESSION['loggedIn'] = true;  
            $suname = $_SESSION['suname'];
            $spass = $_SESSION['spass'];  
                
                $s= "select * from admi where name = '$suname' && pass= '$spass'" ;
                $res = mysqli_query($conn,$s);
                $num =mysqli_num_rows($res);
                //$_SESSION["id"]=$row['id'];
                if($num == 1 )
                {
                    echo '<script>alert("Login Successfull"); window.location="addstaff.php";
                    </script>';
                }
                else{
                    echo '<script>alert("Please Insert Correct Data"); window.location="index.php";
                        </script>';
                }
      
        
        ?>