<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

.column {
  flex: 50%;
  padding: 10px;
  height: 50%; 
}
</style>
</head>
<body>


<span style = "display:inline-block; width:100%;text-align:left; height: 90%;">


<?php 
require_once ("controller/enter blood.php");
include 'header.php';

if (isset($_SESSION['uname'])) {
  
  echo '<div class="row">';
    echo '<span style = "display:inline-block; width:30%; height:100%; text-align:left">';
    echo '<div class="column" >';
       include 'Account.php';
    echo '</div>';
    echo '</span>';
    echo '<div class="column" >';
       include 'info.php';
    echo '</div>';
  echo '</div>';
  

}
else{
    $msg="error";
    header("location:login.php");
  }

?>
</span>
<?php include 'footer.php';?>

</body>
</html>

