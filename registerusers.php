<?php  
//include the connection
include "connection.php";


// gonna insert the data to the table
	
  
    
    $regusr = "INSERT INTO registerusers(Name, Email, PhoneNumber, Password , ConfirmPassword) 
	VALUES('$_POST[name]', '$_POST[email]', '$_POST[phone]' , '$_POST[password]' , '$_POST[password]')";
	

if(!mysqli_query($con,$regusr)){
		
			//inbuilt function in php to print an error statement
			die('Error: ' . mysqli_error($con));
			
	}
    else{
		header("Location: admin.php");
		exit;

    }
?>