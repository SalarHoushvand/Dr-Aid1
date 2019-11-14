<?php

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

//Database connection

$conn = new mysqli('localhost', 'root', '', 'draid');
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