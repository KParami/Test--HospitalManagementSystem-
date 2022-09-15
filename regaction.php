<?php  
//include the connection
include "connection.php";


// gonna insert the data to the table
	
 
	
	$ur = " INSERT INTO  user_register ( Name, Address,City,NIC, DOB,MobileNo, Email)
          VALUES ('$_POST[name]', '$_POST[address]','$_POST[city]',  '$_POST[id]','$_POST[dob]' ,'$_POST[phone]','$_POST[email]' )";

if(!mysqli_query($con,$ur)){
		
			//inbuilt function in php to print an error statement
			die('Error: ' . mysqli_error($con));
			
	}else{
		header("Location: index.php");
		exit;

	}



?>