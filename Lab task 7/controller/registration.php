<?php  

session_start();
require_once 'model/model.php';

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      
      if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter Email</label>";  
      } 
      else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
           $error = "<label class='text-danger'>Enter valid email </label>"; 
      }


      else if(empty($_POST["uname"]))  
      {  
           $error = "<label class='text-danger'>Enter User name</label>";  
      } 
      else if (!preg_match("/^[a-zA-Z0-9-._]*$/",$_POST["uname"])) {
           $error = "<label class='text-danger'>For user name only letters, numbers,  period and dash  allowed</label>";  
      }
      else if (strlen($_POST["uname"]) < 2){
        $error = "<label class='text-danger'>For user name at least 2 characters needed</label>";  
      }


      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter Password</label>";  
      }
      else if (strlen($_POST["password"]) < 8 ){
           $error = "<label class='text-danger'>Password must not be less than eight (8) characters</label>";           
      }
      else if (!preg_match('#[@$%]{1}#', $_POST["password"])) {
           $error = "<label class='text-danger'>For password use one of the special characters (@, $, %)</label>"; 
      }


      else if(empty($_POST["confirmPassword"]))  
      {  
           $error = "<label class='text-danger'>Enter Confirm password</label>";  
      } 
      else if($_POST["password"] != $_POST["confirmPassword"])  
      {  
           $error = "<label class='text-danger'>Password and confirm password didn't match</label>";  
      } 
      
      else  
      {  
            if (isset($_POST["submit"])) {
            $data['hname'] = $_POST['hname'];
            $data['phone'] = $_POST['phone'];
            $data['email'] = $_POST['email'];
            $data['address'] = $_POST['address'];
            $data['uname'] = $_POST['uname'];
            $data['password'] = $_POST['password'];           

            if (insertData($data)) {
              echo 'Successfully added!!';
            }
            } else {
              echo 'You are not allowed to access this page.';
            }
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'hname'               =>     $_POST['hname'],
                     'phone'               =>     $_POST['phone'],  
                     'email'               =>     $_POST['email'],
                     'address'          =>     $_POST["address"],
                     'uname'               =>     $_POST['uname'],
                     'password'               =>     $_POST['password'],  
                      
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Registration Successful</p>";  
                }  
                $_SESSION['hname'] = $_POST['hname'];
                $_SESSION['phone'] = $_POST['phone'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['address'] = $_POST['address'];
                $_SESSION['uname'] = $_POST['uname'];
                $_SESSION['password'] = $_POST['password'];
                header("location:LOGGED IN DASHBOARD.php");

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