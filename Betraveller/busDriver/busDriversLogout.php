<?php  
    if(isset($_POST['logout']))
    {  
        session_start();
        unset($_SESSION['did']);
        session_destroy();
        echo '<script>alert("Do You Really Want To Logout ?")</script>';
        header("Location: index.php");
    }
?>
<script type="text/javascript">
    window.history.forward();
    function noBack() 
    {
        window.history.forward();
    }
</script>