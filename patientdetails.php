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
    
<div>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav navbar-left"> <a  class="navbar-brand" > <h1>North Hospital</h1> </a> <br><br><br><br> <br><br>
             <li><a href="doctor.php">&nbsp; HOME &nbsp;|</a></li>
             <li><a href="appointmentdetails.php">ONLINE APPOINTMENT &nbsp;|</a></li>
             <li><a href="patientdetails.php">PATIENT DETAILS &nbsp;|</a></li>                                                                             
             <ul class="nav navbar-nav navbar-right">
             <li><a href="#.php">   <span class="glyphicon glyphicon-log-in"></span> DOCTOR ACCOUNT &nbsp;| </a></li>
             <li><a href="index.php">   <span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
            </ul>                                                                                                                                                                                                          
            </ul>
         </div>     
     </nav>
              
</div>


<br><br><br><br><br>

<div class="container">
<h1>PATIENT RECORDS</h1><br>
<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>City</th>
<th>NIC</th>
<th>DOB</th>
<th>MobileNo</th>
<th>Email</th>

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

$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo  "<tr><td>".$row["Name"]."</td><td>".$row["Address"]."</td><td>".$row["City"]."</td><td>".$row["NIC"]."</td><td>".$row["DOB"]."</td><td>".$row["MobileNo"]."</td><td>".$row["Email"]."</td><tr>";
    
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






    



</body>
</html>