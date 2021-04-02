<?php 

require_once 'db_connect.php';


function showAllStudents(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function userLogin($uname, $password){
	$conn = db_conn();
	$selectQuery = "SELECT COUNT(*) FROM `hospital_info` where uname = '$uname' and password = '$password'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getHimage($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Image FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getHname($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Hname FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getHphone($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Phone FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getHemail($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Email FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getHaddress($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Address FROM `hospital_info` where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchColumn();

    return $row;
}

function getOldPass($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Password FROM hospital_info where uname = '$uname' ";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $oldPass = $stmt->fetchColumn();

    return $oldPass;
}

function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user_info` WHERE Username LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function insertData($data){
	$conn = db_conn();
    $selectQuery = "INSERT into hospital_info (Hname, Phone, Email, Address, Uname, Password)
VALUES (:hname, :phone, :email, :address, :uname, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':hname' => $data['hname'],
        	':phone' => $data['phone'],
        	':email' => $data['email'],
        	':address' => $data['address'],
        	':uname' => $data['uname'],
            ':password' => $data['password'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateHimage($uname, $image){
    $conn = db_conn();
    $selectQuery = "UPDATE hospital_info set Image = '$image' where Uname = '$uname' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePass($uname, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE hospital_info set Password = '$password' where Uname = '$uname' ";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateHinfo($uname, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE hospital_info set Hname = ?, Phone = ?, Email = ?, Address = ? where Uname = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['hname'], $data['phone'], $data['email'], $data['address'], $uname
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updateStudent($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?, Surname = ?, Username = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['surname'], $data['username'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteStudent($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `user_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}