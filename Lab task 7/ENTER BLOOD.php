<html>
<head>

</head>
<body>


<?php 
require_once ("controller/enter blood.php");
include 'header.php';

if (isset($_SESSION['uname'])) {
    echo '<div class="body alignLeft" >';
       include 'info.php';
    echo '</div>';
  echo '</div>';
  
  

}
else{
    $msg="error";
    header("location:login.php");
  }

?>


</body>
</html>

