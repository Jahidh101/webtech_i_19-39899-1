<?php 
session_start();
require_once 'model/model.php';

if(isset($_POST["submit"]))  
 {  
      if (isset($_POST["submit"])) {
            $data['hname'] = $_POST['hname'];
            $data['phone'] = $_POST['phone'];
            $data['email'] = $_POST['email'];
            $data['address'] = $_POST['address'];           

            if (updateHinfo($_SESSION['uname'], $data)) {
              echo 'Successfully updated!!';
            }
            } else {
              echo 'You are not allowed to access this page.';
            }
  }
?>
