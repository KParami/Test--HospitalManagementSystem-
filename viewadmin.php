<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>North-Hospital</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>


   
    <link rel="stylesheet" href="css/styles.css">
  
    <style>
    </style>
</head>
<body>
     
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav navbar-left"> <a  class="navbar-brand" > <h1>North Hospital</h1> </a> <br><br><br><br> <br><br>
             <li><a href="admin.php">&nbsp; HOME &nbsp;|</a></li>
             <li><a href="appointment.php">APPOINTMENT &nbsp;|</a></li>
             <li><a href="viewdoctor.php"> DOCTORS &nbsp;|</a></li>
             <li><a href="viewpatient.php">PATIENT &nbsp;|</a></li>
             <li><a href="clinic.php"> CLINIC &nbsp;|</a></li>
             <li><a href="viewclinic.php"> VIEW CLINIC DETAILS &nbsp;|</a></li> 
             <li><a href="viewadmin.php"> VIEW ADMIN DETAILS &nbsp;|</a></li> 
             <li><a href="users.php"> USERS </a></li>  
            
               
</ul>                                                                            
             <ul class="nav navbar-nav navbar-right">
             <li> <a href="#.php">  <span class="glyphicon glyphicon-log-in"></span> ADMIN &nbsp;| </a></li>
             <li><a href="index.php">   <span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
            </ul>                                                                                                                                                                                                          
            </ul>
         </div>     
     </nav>
              
</div>
<br><br><br><br><br>


<div class="container">
    <h1>ADMIN DETAILS</h1>
<table>
<tr>

<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Password</th>
<th>Confirm Password</th>

</tr>



<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hospital_management_System";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    // output data of each row

$sql = "SELECT * FROM registerusers";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo  "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["Password"]."</td><td>".$row["ConfirmPassword"]."</td><tr>";
    
    }
    echo "</table>";
}
else{
    echo "0 result";
}
$con-> close();
?>

</table>

<br><br><br><br><br><br><br><br>
</div>



</body>
</html>
