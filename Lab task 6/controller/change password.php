<?php 
session_start();
require_once 'model/model.php';

$error='';
$message ='';
if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["currentPassword"]))  
      {  
           $error = "<label class='text-danger'>Enter Current password</label>";  
      } 
      else if ($_POST["currentPassword"] != getOldPass($_SESSION['uname']) ){
           $error = "Incorrect password...";
      }
      else if(empty($_POST["newPassword"]))  
      {  
           $error = "<label class='text-danger'>Enter New password</label>";  
      } 
      else if (!preg_match('#[@$%]{1}#', $_POST["newPassword"])) {
          $error = "Use one of the special characters (@, $, %)";
      }
      else if (empty($_POST["reNewPassword"])) {
          $error = "Retype new password is required";
      }
      else if ($_POST["newPassword"] != $_POST["reNewPassword"] ){
          $error = "New password and retype new password must be same...";
      }
      else {
        if (updatePass($_SESSION['uname'], $_POST["newPassword"])) {
          $message ="Password successfully changed";
        }
        
      }
  }
include 'header.php';
?>