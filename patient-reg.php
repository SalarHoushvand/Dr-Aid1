<?php

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$explanation = $_POST['explanation'];
$fvisit = $_POST['fvisit'];
$phone = $_POST['phone'];
$enumber = $_POST['enumber'];
$vdate = $_POST['vdate'];



//Database connection

$conn = new mysqli('localhost', 'root', '', 'draid');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into register(name, age, email, explanation, firstv, phone, enumber, vdate)
    values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $age, $email, $explanation, $fvisit, $phone, $enumber, $vdate);
    $stmt->execute();
    header("Location: reg-success.html");
    $stmt->close();
    $conn->close();
}
?>