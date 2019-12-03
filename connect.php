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

// SJ - db connection for heroku
// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// $server = $url["us-cdbr-iron-east-05.cleardb.net"];
// $username = $url["b113d931bd12b9"];
// $password = $url["5f01e24a"];
// $db = substr($url["heroku_9155751049f1d50"], 1);

// $conn = new mysqli($server, $username, $password, $db);
?>