<?php  
//include the connection
include "connection.php";


// gonna insert the data to the table
	
   
	
	$cm = "INSERT INTO feedback (Name, Email, Comment) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[message]' )";


if(!mysqli_query($con,$cm)){
		
			//inbuilt function in php to print an error statement
			die('Error: ' . mysqli_error($con));
			
	}
	else{
		header("Location:index.php");
		exit;

	}


?>