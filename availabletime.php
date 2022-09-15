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

</head>

<body>
<div>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="collapse navbar-collapse" id="myNavbar">
             <ul class="nav navbar-nav navbar-left"><a  class="navbar-brand" > <h1>North Hospital </h1> </a> <br><br><br><br> <br><br>
             <li><a href="index.php">&nbsp; HOME &nbsp;|</a></li>
             <li><a href="userappointment.php">APPOINTMENT &nbsp;|</a></li>
             <li><a href="availabletime.php"> AVAILABLE TIME &nbsp;|</a></li>
             <li><a href="about.php">ABOUT US &nbsp;|</a></li>
             <li><a href="contact.php">CONTACT US &nbsp;|</a></li>
             <form class="navbar-form navbar-left" action="actionpage.php">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search" name="search">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-default" type="submit">
                                                                     <i class="glyphicon glyphicon-search"></i>
                                                                 </button>
                                                             </div>
                                                         </div>
                                                    </form>                                                    
             <ul class="nav navbar-nav navbar-right"><li><a href="log.php"><span class="glyphicon glyphicon-log-in"></span>LOGIN </a> </li></ul>                                                                                                                                                                                                          
            
         </div>
</nav>
               
</div>
<br><br><br><br><br>

<div class="container">
<h1>CLINIC RECORDS</h1><br>
<table>
<tr>
<th>Id</th>
<th>Clinic Name</th>
<th>Doctor Name</th>
<th>Category</th>
<th>Clinic Day</th>
<th>Open time</th>
<th>Close time</th>

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

$sql = "SELECT * FROM clinic";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo  "<tr><td>".$row["id"]."</td><td>".$row["clinicname"]."</td><td>".$row["doctorname"]."</td><td>".$row["category"]."</td><td>".$row["clinicday"]."</td><td>".$row["opentime"]."</td><td>".$row["closetime"]."</td><tr>";
    
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