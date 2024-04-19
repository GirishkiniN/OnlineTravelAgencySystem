<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BEE TRAVELLER | CAR STAFF</title>
    <link href="busstaffLogin.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
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
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> 
                        <img src="https://www.phocuswire.com/uploadedImages/Articles/News/2019/3/GettyImages-698012432.jpg?width=600&height=300&scale=both&mode=crop" class="image"> 
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h3>CAR STAFF PORTAL</h3>
                    </div>
                    <form action="ctrl.php" method="POST">
                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">STAFF ID</h6>
                            </label> <input  type="text" name="staffid" placeholder="Enter a valid staff id" required> 
                        </div>
                        <br>
                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                            </label> <input type="password" name="password" placeholder="Enter password" required> 
                        </div>
                        <br>
                        <center><div>
                             <button type="submit" class="button text-center">Login</button>
                         </div></center>
                         <br>
                        <div align="center">
                            <div class="custom-control custom-checkbox custom-control-inline"> 
                                <a href="#" id="myBtn" class="ml-auto mb-0 text-sm">Forgot Password?</a> 
                            </div> 
                        </div>
                        
                    </form>   
                    
  
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <br>
            <h2><center>RESET YOUR PASSWORD</center></h2>
            <center><form action="busStaffPassReset.php" method="POST" autocomplete="off">
                        <table style="margin-top: -28px;">
                            <tr>
                                <td>ENTER STAFF-ID:</td>
                                <td><input type="text" name="staffID" placeholder="Enter UserId" required></td>
                            </tr>    
                            <br>
                            <tr>
                                <td>ENTER MOBILE NO.:</td>
                                <td><input type="tel" name="mobileNO" placeholder="Enter Email" maxlength="10" required></td>
                            </tr>    
                            <br>
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