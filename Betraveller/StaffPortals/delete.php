<?php
  include "connection.php";

  $id=$_GET["carID"];
  mysqli_query($db,"delete from cabdrivers where carID ='$id'");
  
?>                          
<script type="text/javascript">
window.location="viewcars.php";

</script>