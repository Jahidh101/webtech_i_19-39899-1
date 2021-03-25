<?php 

require_once '../model/model.php';

if (deleteStudent($_GET['Name'])) {
    header('Location: ../showAllStudents.php');
}

 ?>