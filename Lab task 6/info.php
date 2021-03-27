
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
      	<?php 
      	require_once ("controller/enter blood.php");
      	
      	?>
      	           
           <div class="container" style="width:500px;">  
                <h3 align="">Blood Donation</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Donor name : </label>  
                     <input type="text" name="name" class="form-control" /><br />

                     <label>Gender : </label>  <br>
                     <input type="radio" id="male" name="gender" value="male" >
                     <label for="male">Male</label>
                     <input type="radio" id="female" name="gender" value="female" >
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other" >
                     <label for="other">Other</label>  <br><br>

                     <label>Blood group : </label>  
                     <select name="bloodGroup">
                     <option value="A-">A-</option>
                     <option value="A+">A+</option> 
                     <option value="B-">B-</option>
                     <option value="B+">B+</option>
                     <option value="AB-">AB-</option> 
                     <option value="AB+">AB+</option>
                     <option value="O-">O-</option> 
                     <option value="O+">O+</option>
                     </select></label><br><br>

                     <label>Added date : </label>  
                     <input type="Date" name="addedDate" class="form-control" /><br />

                     <label>Email : </label>  
                     <input type="text" name="email" class="form-control" /><br />

                     <label>Address : </label>  
                     <input type="text" name="address" class="form-control" /><br />

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

      </body>  
 </html>  