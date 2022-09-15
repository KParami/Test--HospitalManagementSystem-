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
             <li><a href="findadoctor.php"> FIND A DOCTOR &nbsp;|</a></li>
             <li><a href="about.php">ABOUT US &nbsp;|</a></li>
             <li><a href="contact.php">CONTACT US &nbsp;|</a></li>
             <form class="navbar-form navbar-left" action="actionpage.php" method="POST">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search" name="search">
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-default" type="submit">
                                                                     <i class="glyphicon glyphicon-search"></i>
                                                                 </button>
                                                             </div>
                                                         </div>
                                                    </form>                                                    
             <ul class="nav navbar-nav navbar-right"><li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>LOGIN </a> </li></ul>                                                                                                                                                                                                          
            
         </div>
</nav>
               
</div>
<br><br><br><br><br><br><br><br><br>
<div class="container">
<h4>Find out Clinic schedule</h4>

                                                      



<br>


<?php
$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "hospital_management_system";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM clinic WHERE clinicname like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){

    echo "<table border='1'><tr>
                <th>id</th>
                <th>clinicname</th>
                <th>doctorname</th>
                <th>category</th>
                <th>clinicday</th>
                <th>opentime</th>
                <th>closetime</th>
                
                </tr>";

while($row = $result->fetch_assoc() ){

    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['clinicname'] . "</td>";
    echo "<td>" . $row['doctorname'] . "</td>";
    echo "<td>" . $row['category'] . "</td>";
    echo "<td>" . $row['clinicday'] . "</td>";
    echo "<td>" . $row['opentime'] . "</td>";
    echo "<td>" . $row['closetime'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";  
 
} else  {
	echo "0 records";
}

$conn->close();


?>
 </div> 
</body>
</html>