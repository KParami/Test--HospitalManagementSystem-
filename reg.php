<?php  
//include the connection
include "connection.php";


// gonna insert the data to the table
	
 
	
	$bk = " INSERT INTO  userinfo (firstName, lastName, email, birthdate, address,city ,phoneno,nationality, country,gender)
	 VALUES ('$_POST[fname]', '$_POST[lname]','$_POST[email]','$_POST[bday]' , 
	 '$_POST[address]','$_POST[city]','$_POST[phone]' , '$_POST[nationality]', '$_POST[country]','$_POST[gender]' )";


if(!mysqli_query($con,$bk)){
		
			//inbuilt function in php to print an error statement
			die('Error: ' . mysqli_error($con));
			
	}else{
		header("Location:index.php");
		exit;

	}



?>