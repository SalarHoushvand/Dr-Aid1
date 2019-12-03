<?php

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

//Database connection

// $conn = new mysqli('localhost', 'root', '', 'draid');
// if($conn->connect_error){
//     die('connection failed : '.$conn->connect_error);
// }else{
//     $stmt = $conn->prepare("insert into patients(email, username, password)
//     values(?, ?, ?)");
//     $stmt->bind_param("sss", $email, $username, $password);
//     $stmt->execute();
//     header("Location: successful.html");
//     $stmt->close();
//     $conn->close();

// SJ - to support heroku depolyment    
$conn = new mysqli('us-cdbr-iron-east-05.cleardb.net', 'b113d931bd12b9', '5f01e24a', 'heroku_9155751049f1d50');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into patients(email, username, password)
    values(?, ?, ?)");
    $stmt->bind_param("sss", $email, $username, $password);
    $stmt->execute();
    header("Location: successful.html");
    $stmt->close();
    $conn->close();
}
?>