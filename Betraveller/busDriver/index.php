<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOURGUIDER | BUS DRIVER PORTAL</title>
    <link rel="stylesheet" type="text/css" href="dloginstyle.css"/>
    <style>
        #button 
        {
          background-color: #4CAF50; /* Green */
          border: none;
          color: white;
          padding: 15px 22px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
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
            height:300px;
            
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

        #myBtn
        {
          margin-top:20px ;
          background-color: #f0e68c ;
          border: none;
          color: dimgrey;
          padding: 12px 10px;
          margin-left: 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 10px;
          cursor: pointer;
        }

        #content form input[type="submit"] 
        {
          background: rgb(254,231,154);
          background: -moz-linear-gradient(top,  rgba(254,231,154,1) 0%, rgba(254,193,81,1) 100%);
          background: -webkit-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
          background: -o-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
          background: -ms-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
          background: linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
          -webkit-border-radius: 30px;
          -moz-border-radius: 30px;
          -ms-border-radius: 30px;
          -o-border-radius: 30px;
          border-radius: 30px;
          -webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
          -moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
          -ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
          -o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
          box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
          border: 1px solid #D69E31;
          color: #85592e;
          cursor: pointer;
          float: left;
          font: bold 15px Helvetica, Arial, sans-serif;
          height: 35px;
          margin: 20px 0 35px 15px;
          position: relative;
          text-shadow: 0 1px 0 rgba(255,255,255,0.5);
          width: 120px;
        }
        #content form input[type="submit"]:hover 
        {
          background: rgb(254,193,81);
          background: -moz-linear-gradient(top,  rgba(254,193,81,1) 0%, rgba(254,231,154,1) 100%);
          background: -webkit-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
          background: -o-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
          background: -ms-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
          background: linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec151', endColorstr='#fee79a',GradientType=0 );
        }

        .container { margin: 150px auto ; position: relative; width: 900px; }

        @media only screen and (max-width: 700px) 
      {
        .container { margin: 125px auto; position: fixed; width: auto; }

         /* Modal Content */
        
        
      }

    </style>
    <script type="text/javascript">
         window.history.forward(); 
    </script>
</head>
<body>
<div class="container">
  <section id="content">
    <form action="ctrl.php" method="POST" autocomplete="off">
      <h1>Bus Drivers Portal</h1>
      <div>
        <input type="text" placeholder="Drivers Id" name="did" required="" id="username" />
      </div>
      <div>
        <input type="password" placeholder="Password" name="dpass" required="" id="password" />
      </div>
      <div>
        <select data-live-search="true" class="selectpicker form-control" data-size="5" title="Select Origin City"    name="originCity" style="width: 340px; height: 40px; background-color:#eae7e7" required >
            <option disabled selected>-- Select bus number  --</option>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "projectmeteor");  // Using database connection file here
                    $records = mysqli_query($conn, "SELECT busID From bus");  // Use select query here 
                    while($data = mysqli_fetch_array($records))
                    {
                        echo "<option value='". $data['busID'] ."'>" .$data['busID'] ."</option>";  // displaying data in option menu
                    }	
                ?>  
	       </select>
      </div>
      <div>
        <input type="submit"  name="insert" value="Log in" />
      </div>
      <div>  
        <button id="myBtn">Lost your password?</button>
      </div>
  </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->
<div id="myModal" class="modal">

    <!-- Modal content -->
      <div class="modal-content">
          <span class="close">&times;</span><br><br>
          <h2><center>RESET YOUR PASSWORD</center></h2>
          <br>
          <center><form action="busDriverPassReset.php" method="POST" autocomplete="off">
            <table>
                <tr>
                    <td>ENTER USER-ID:</td>
                    <td><input type="text" name="driverid" placeholder="Enter UserId" required></td>
                </tr>    
                <br>
                <tr>
                    <td>ENTER BUS NO:</td>
                    <td>
                        <select class="sel_busno" name="bus_id" title="Enter Assigned Bus_Id" required>  
                           <option value="deselected">--Select bus Number --</option> 
                          <?php
                                $conn=mysqli_connect("localhost","root","","projectmeteor");  // Using database connection file here
                                $records = mysqli_query($conn, "SELECT busID From bus");  // Use select query here 
                                while($data = mysqli_fetch_array($records))
                                {
                                    echo "<option value='". $data['busID'] ."'>" .$data['busID'] ."</option>";  // displaying data in option menu
                                }   
                            ?>  
                        </select>
                    </td>
                </tr>    
              <br>
            </table>
             <center><input id="button" type="submit" value="SUBMIT" name="reset_pass"></center>
          </form></center>
  </div>
</div>
</body>
<script>
   var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() 
    {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() 
    {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) 
    {
        if (event.target == modal) 
        {
            modal.style.display = "none";
        }
    }
    
</script>
</html>