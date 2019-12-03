<?php
    $conn       = mysqli_connect('us-cdbr-iron-east-05.cleardb.net', 'b113d931bd12b9', '5f01e24a', 'heroku_9155751049f1d50');
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $query      = "select * from patients where username = '$username'";
    $resultSet  = mysqli_query($conn, $query); //Syntax error: mysqli_query(connection,query);
    if(mysqli_num_rows($resultSet) > 0){
        $row    = mysqli_fetch_assoc($resultSet);
        if($row['password'] == $password){ // if you are using encryption like md5 or anything else then you have to add in this line accordingly
            header("Location: mainpage.html");
        }else{
            echo "Oh No, password not correct!";
        }
    }else{
        echo "Please enter correct email!";
    }