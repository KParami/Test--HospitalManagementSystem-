
<?php

$con = mysqli_connect("localhost", "root", "","hospital_management_system");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);
 

?>




