<?php 

require_once 'controller/studentInfo.php';
$student = fetchStudent($_GET['Name']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name</label><br>
  <input value="<?php echo $student['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="bPrice">Buying Price</label><br>
  <input value="<?php echo $student['Buying_Price'] ?>" type="text" id="bPrice" name="bPrice"><br>
  <label for="sPrice">Selling Price</label><br>
  <input value="<?php echo $student['Selling_Price'] ?>" type="text" id="sPrice" name="sPrice"><br>
  <input type="checkbox" id="display" name="display" value="yes" checked> 
  
  <label for="display">Display</label><br><br>

  <input type="submit" name = "updateStudent" value="Update">
</form> 

</body>
</html>

