<html>
<body>

<?php 
require_once ("controller/login.php");
include 'header.php';

?>


<span style = "display:inline-block; width:100%;text-align:left; height: 100%; padding:10px">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	<table align="center">
		
		<tr>
			<th colspan="2"><h2>Login</h2></th>
		</tr>
		<?php if(isset($msg)){?>
		    <tr>
		      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
		    </tr>
    	<?php } ?>
		<tr>
			<td>User name</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td align="=right" colspan="2"><input type="checkbox" name="degree1" value="ssc">Remember me</td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="login" value="Submit"></td>
		</tr>
	</table>
	
</form>
<?php include 'footer.php';?>

</span> 


</body>
</html>