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

<?php 
session_start();

include 'header.php';?>

<span style = "display:inline-block; width:100%;text-align:left; height: 40%;">


<?php 
require_once 'model/model.php';

if (isset($_SESSION['uname'])) {
	
	echo '<div class="row">';
	  echo '<span style = "display:inline-block; width:36%; height:100%; text-align:left">';
	  echo '<div class="column" >';
	     include 'Account.php';
	  echo '</div>';
	  echo '</span>';
	  echo '<div class="column" >';
	   echo '<b>PROFILE </b><br><br>';
	   if ((getHimage($_SESSION['uname']) != null)){
	   	  echo '<img src="uploads/';
	   	  echo getHimage($_SESSION['uname']);
	   	  echo ' " alt="LOGO" height=150px width:150px>';
	   }
	   else{
	   	  echo '<img src="Uploads/Upload.PNG" alt="LOGO" height="90%">';
	   }
	   	 echo '<a href="PROFILE PICTURE.php">Change</a><br><br>';
	     echo " Hospital Name  :".getHname($_SESSION['uname'])."<br>";	    
	     echo " Phone  :".getHphone($_SESSION['uname'])."<br>";	   
	     echo " Email  :".getHemail($_SESSION['uname'])."<br>";	
	     echo " Address  :".getHaddress($_SESSION['uname'])."<br>";
	     echo '<hr>';
	     echo '<a href="EDIT PROFILE.php">Edit Profile</a>';
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

