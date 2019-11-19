<?php

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$explanation = $_POST['explanation'];

//Database connection

$conn = new mysqli('localhost', 'root', '', 'draid');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into register(name, age, email, explanation)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $age, $email, $explanation);
    $stmt->execute();
    header("Location: reg-success.html");
    $stmt->close();
    $conn->close();
}
?>