<?php
    $conn       = mysqli_connect('localhost', 'root', '', 'draid');
  
    $query      = "select * from register";
    $result  = mysqli_query($conn, $query); //Syntax error: mysqli_query(connection,query);

    
    
    echo'<html>
    <head>
    <meta charset="UTF-8">
    <title>Patient List</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <style>
    body {
        background-color: #303641;
    }
</style>
</head>

<body>

    <div class="topnav" id="topnav">
            <a class="active" href="mainpage.html">Home</a>
            <a href="insert-patient.html">Add New Patient</a>
            <a href="#contact">Patient List</a>
            <a href="#about">Messages</a>
            <a href="#about">Profile</a>
            <a href="login.html">Log Out</a>
            <img id="doctor-shape" src="images/doctor.png" alt="" >
          </div>
         

        </div>

        <div class="container-fluid " style=" background: rgb(49, 49, 49)">
            <div class="row">
                    <div id="blank-right" class="col-sm-2 border  text-center " ></div>
                <div id="dashboard" class="col-sm-8 border  text-center ">
                    <br>
                    <img id="user-shape" src="images/edit.png" alt="" >
                    <h2><b>Patients List</b></h2>
                    <br>
            
                    <form align="center"  action="report.php" method="post">
                    
                        <div class="form-group" align="center">';

                            
                            
                        echo '<select multiple class="form-control" name="name" id="exampleFormControlSelect2">';

                        while ($row = mysqli_fetch_array($result)){
                            echo '<option value="' . $row['name'];
                            echo'">' . $row['name'];
                            
                        }
                        echo"</select>";

                           echo ' <br>
                            <br>
                            <input id="btn3" type="submit" name="submit" value="View Details">
                          </div>
                          
                      </form>
                      
                      
                   
                </div>
            </div>
           
            
        </div>
        

</body>

</html>'
;
    



    
    $conn->close();
    
    ?>