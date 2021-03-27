<?php  

session_start();

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter a name</label>";  
      }  

      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Select a Gender</label>";  
      }  

      else if(empty($_POST["bloodGroup"]))  
      {  
           $error = "<label class='text-danger'>Select a Blood Group</label>";  
      }  

      else if(empty($_POST["addedDate"]))  
      {  
           $error = "<label class='text-danger'>Enter added date</label>";  
      } 

      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      } 
      else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
           $error = "<label class='text-danger'>Enter valid email </label>"; 
      }
      
      else  
      {  
           if(file_exists('donationData.json'))  
           {  
                $current_data = file_get_contents('donationData.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],
                     'gender'               =>     $_POST['gender'],  
                     'bloodGroup'               =>     $_POST['bloodGroup'],
                     'addedDate'          =>     $_POST["addedDate"],
                     'email'               =>     $_POST['email'],
                     'address'               =>     $_POST['address'],
                      
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('donationData.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Submission Successful</p>";  
                }  
                
                // header("location:LOGGED IN DASHBOARD.php");

           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>  