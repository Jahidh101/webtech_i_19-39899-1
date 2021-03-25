<?php  
require_once 'controller/studentInfo.php';

$students = fetchAllStudents();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying_Price</th>
			<th>Selling_Price</th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($students as $i => $student): ?>
			<tr>
				<!-- <td><a href="showStudent.php?id=<?php echo $student['ID'] ?>"><?php echo $student['Name'] ?></a></td> -->
				<td><?php echo $student['Name'] ?></td>
				<td><?php echo $student['Buying_Price'] ?></td>
				<td><?php echo $student['Selling_Price'] ?></td>
				<td><a href="editStudent.php?Name=<?php echo $student['Name'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?Name=<?php echo $student['Name'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>