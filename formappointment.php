<?php  
//include the connection
include "connection.php";


// gonna insert the data to the table
	
 
	
	$ap = " INSERT INTO  appointment (FirstName, LastName,Email,AppointmentDate,PhoneNo,Doctor,Department,Reason)
	 VALUES ('$_POST[fname]', '$_POST[lname]','$_POST[email]','$_POST[appointmentdate]' , 
	 '$_POST[phone]','$_POST[doctor]','$_POST[department]','$_POST[reason]' )";


if(!mysqli_query($con,$ap)){
		
			//inbuilt function in php to print an error statement
			die('Error: ' . mysqli_error($con));
			
	}else{
		header("Location:index.php");
		exit;

	}



?>