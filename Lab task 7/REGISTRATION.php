
<!DOCTYPE html>  
 <html>  
      <head>  
        <link rel="stylesheet" type="text/css" href="style.css">
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
      	<?php 
      	require_once ("controller/registration.php");
        
      	include 'header.php';
      	
      	?>
      	           
           <div class="container" style="width:500px;">  
                <h3 align="">REGISTRATION</h3><br />                 
                <form class = "body" method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Hospital name : </label>  
                     <input type="text" name="hname" class="form-control" /><br />

                     <label>Phone no: </label>  
                     <input type="text" name="phone" class="form-control" /><br />

                     <label>Email : </label>  
                     <input type="text" name="email" class="form-control" /><br />

                     <label>Address : </label>  
                     <input type="text" name="address" class="form-control" /><br />

                     <label>User name : </label>  
                     <input type="text" name="uname" class="form-control" /><br />

                     <label>Password : </label>  
                     <input type="Password" name="password" class="form-control" /><br />

                     <label>Confirm password : </label>  
                     <input type="Password" name="confirmPassword" class="form-control" /><br />

                     <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                     <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br />                     
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
			<?php include 'footer.php';?>

      </body>  
 </html>  