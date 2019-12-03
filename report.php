<?php
    // $conn       = mysqli_connect('localhost', 'root', '', 'draid');
    $conn       = mysqli_connect('us-cdbr-iron-east-05.cleardb.net', 'b113d931bd12b9', '5f01e24a', 'heroku_9155751049f1d50');
    $selected_val = $_POST['name'];


    $query      = "select * from register";
    $result  = mysqli_query($conn, $query); //Syntax error: mysqli_query(connection,query);
    
    while($row = mysqli_fetch_array( $result))
{
  if($row['name'] == $selected_val)
  {
    $email = $row['email'];
    $age = $row['age'];
    $discription = $row['explanation'];
    $fvisit = $row['firstv'];
    $phone = $row['phone'];
    $enumber = $row['enumber'];
    $vdate = $row['vdate'];
  }
}


    echo' <html>

    <head>
        <meta charset="UTF-8">
        <title>Patient Report</title>
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
                    <a href="patientlist.php">Patient List</a>
                    <a href="#about">Messages</a>
                    <a href="#about">Profile</a>
                    <a href="login.html">Log Out</a>
                    <img id="doctor-shape" src="images/doctor.png" alt="" >
                  </div>
    
                </div>
    
                <div class="container-fluid " style=" background: rgb(49, 49, 49)">
                    <div class="row">
                            <div id="blank-right" class="col-sm-2 border  text-center " ></div>
                        <div id="dashboard" style="height: 1000px;" class="col-sm-8 border   text-center ">
                            <br>
                            <img id="user-shape" src="images/user.png" alt=""> ';
                            

echo '<br><br><h2 name="patientname"><b>'.$selected_val; // Displaying Selected Value

                           echo' </b></h2>
                            <br>
                            <br>';
                            
                         echo '<p><b>Email</b></p><p name="email">'.$email;
                         
                         
                         echo'</p>
                            
                            <br>
                            
                            <p name="age"><b>Age</b></p>
                            <p>'.$age;

                            echo'</p>
                            
                            <br>
                            
                            <p name="fvisit"><b>First Visit Date</b></p>
                            <p>'.$fvisit;

                            echo'</p>
                            
                            <br>
                            
                            <p name="phone"><b>Phone Number</b></p>
                            <p>'.$phone;

                            echo'</p>
                            
                            <br>
                            
                            <p name="enumber"><b>Emergency Phone Number</b></p>
                            <p>'.$enumber;

                            echo'</p>
                            
                            <br>
                            
                            <p name="vdate"><b>Visit Date</b></p>
                            <p>'.$vdate;


                          echo'</p> <br>
                           
                            <p name="explanation"><b>Discription</b></p>
                            <p>'.$discription;

                          
                              
                             
                           
                        echo '</div>
                    </div>
                   
                    
                </div>
                
    
    </body>
    
    </html>';

    
    
    $conn->close();
    
    ?>