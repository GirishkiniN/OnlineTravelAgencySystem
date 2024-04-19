<!DOCTYPE html>
<html>
<head>
    <title>
        Admin login
    </title>
<style>
    body {
        margin: 0;
        color: #6a6f8c;
        background-image: url('https://thumbs.dreamstime.com/b/admin-office-binder-wooden-desk-table-colored-pencil-pencils-pen-notebook-paper-79046621.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        font: 600 16px/18px 'Open Sans', sans-serif;
    }
    
    *,
     :after,
     :before {
        box-sizing: border-box
    }
    
    .clearfix:after,
    .clearfix:before {
        content: '';
        display: table
    }
    
    .clearfix:after {
        clear: both;
        display: block
    }
    
    a {
        color: inherit;
        text-decoration: none
    }
    
    .login-wrap {
        width: 100%;
        margin: auto;
        max-width: 525px;
        min-height: 560px;
        margin-top: 100px;
        position: relative;
        background: url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
    }
    
    .login-html {
        width: 100%;
        height: 100%;
        position: absolute;
        padding: 90px 70px 50px 70px;
        background: rgba(40, 57, 101, .9);
    }
    
    .login-html .sign-in-htm,
    .login-html .sign-up-htm {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        transform: rotateY(180deg);
        backface-visibility: hidden;
        transition: all .4s linear;
    }
    
    .login-html .sign-in,
    .login-html .sign-up,
    .login-form .group .check {
        display: none;
    }
    
    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button {
        text-transform: uppercase;
    }
    
    .login-html .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;
        border-bottom: 2px solid transparent;
    }
    
    .login-html .sign-in:checked+.tab,
    .login-html .sign-up:checked+.tab {
        color: #fff;
        border-color: #1161ee;
    }
    
    .login-form {
        min-height: 345px;
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d;
    }
    
    .login-form .group {
        margin-bottom: 15px;
    }
    
    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button {
        width: 100%;
        color: #fff;
        display: block;
    }
    
    .login-form .group .input,
    .login-form .group .button {
        border: none;
        padding: 15px 20px;
        border-radius: 25px;
        background: rgba(255, 255, 255, .1);
    }
    
    .login-form .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }
    
    .login-form .group .label {
        color: #aaa;
        font-size: 12px;
    }
    
    .login-form .group .button {
        background: #1161ee;
    }
    
    .login-form .group label .icon {
        width: 15px;
        height: 15px;
        border-radius: 2px;
        position: relative;
        display: inline-block;
        background: rgba(255, 255, 255, .1);
    }
    
    .login-form .group label .icon:before,
    .login-form .group label .icon:after {
        content: '';
        width: 10px;
        height: 2px;
        background: #fff;
        position: absolute;
        transition: all .2s ease-in-out 0s;
    }
    
    .login-form .group label .icon:before {
        left: 3px;
        width: 5px;
        bottom: 6px;
        transform: scale(0) rotate(0);
    }
    
    .login-form .group label .icon:after {
        top: 6px;
        right: 0;
        transform: scale(0) rotate(0);
    }
    
    .login-form .group .check:checked+label {
        color: #fff;
    }
    
    .login-form .group .check:checked+label .icon {
        background: #1161ee;
    }
    
    .login-form .group .check:checked+label .icon:before {
        transform: scale(1) rotate(45deg);
    }
    
    .login-form .group .check:checked+label .icon:after {
        transform: scale(1) rotate(-45deg);
    }
    
    .login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
        transform: rotate(0);
    }
    
    .login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
        transform: rotate(0);
    }
    
    .hr {
        height: 2px;
        margin: 60px 0 50px 0;
        background: rgba(255, 255, 255, .2);
    }
    
    .foot-lnk {
        text-align: center;
    }

     
       .modal 
        {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content 
        {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            height:350px;
            display: block;
        }

        /* The Close Button */
        .close 
        {
            color: black;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus 
        {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }  

        #button1 
        {
          background-color: #4CAF50; /* Green */
          border: none;
          color: white;
          padding: 15px 22px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          width: 100px;
          font-size: 13px;
        }
      .sel_busno
      {
        width: 170px;
        margin-right: 10px;
      }
      td
      {
        padding-bottom: 25px;
      }
   
</style>
</head>

<body>
	 <div class="login-wrap">
    
        <div class="login-html">

        <form method="POST" autocomplete="off" action="ctrl.php" style="margin: 60px">
           
            

            <h1 style="margin: -40px 0px 60px 0px; color: #fff;">
                <center><b>ADMIN LOGIN</b></center>
            </h1>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input type="text" name="auname" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input type="text" name="apass" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <input type="submit" name="slsubmit" class="button" value="Sign In">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk" style="margin-top:-20px;">
                        <a href="#" id="myBtn">Forgot Password?</a>
                    </div>
                </div>
            </div>
        
        </form>
</div>
    </div>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <br>
            <h2><center>RESET YOUR PASSWORD</center></h2>
            <center><form action="adminPassReset.php" method="POST" autocomplete="off">
                        <table style="margin-top: 50px;">
                            <tr>
                                <td>ENTER ADMIN-ID:</td>
                                <td><input type="text" name="adminID" placeholder="Enter Admin ID" required></td>
                            </tr>    
                            
                        </table>
                    <center>
                        <input id="button1" type="submit" value="SUBMIT" name="reset_pass">
                    </center>
            </form></center>
        </div>
</div>
</body>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>
</html>