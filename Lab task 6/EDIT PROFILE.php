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


<span style = "display:inline-block; width:100%;text-align:left; height: 60%;">


<?php 
require_once ("controller/edit profile.php");
require_once 'model/model.php';
include 'header.php';


if (isset($_SESSION['uname'])) {
	
	echo '<div class="row">';
	  echo '<span style = "display:inline-block; width:30%; height:100%; text-align:left">';
	  echo '<div class="column" >';
	     include 'Account.php';
	  echo '</div>';
	  echo '</span>';
	  echo '<div class="column" >';
	  echo '<form method= "post"';
	   echo '<b>EDIT PROFILE </b><br><br>';

	   echo '<label>Hospital Name : </label> '; 
       echo ' <input type="text" name="hname" class="form-control" value= "';
       echo getHname($_SESSION['uname']);	  
       echo  '"><br><br>';

       echo '<label>Phone : </label> '; 
       echo ' <input type="text" name="phone" class="form-control" value= "';
       echo getHphone($_SESSION['uname']);	  
       echo  '"><br><br>';

       echo '<label>Email : </label> '; 
       echo ' <input type="text" name="email" class="form-control" value= "';
       echo getHemail($_SESSION['uname']);	  
       echo  '"><br><br>';

       echo '<label>Address : </label> '; 
       echo ' <input type="text" name="address" class="form-control" value= "';
       echo getHaddress($_SESSION['uname']);	  
       echo  '"><br><br>';

	     
	     echo '<input type="submit" name="submit" value="Submit" class="btn btn-info" />';
	     echo '</form>';
	  echo '</div>';
	echo '</div>';
	

}
else{
		$msg="error";
		header("location:login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>
</span>
<?php include 'footer.php';?>

</body>
</html>

