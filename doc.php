<?php  
//include the connection
include "connection.php";


// gonna insert the data to the table
	
 
	
	$vd = " INSERT INTO  viewdoctors (id , name, qualification, email,category,contact,consultancyfee,experience,password)
	 VALUES ('$_POST[id]', '$_POST[name]','$_POST[quali]', '$_POST[email]', '$_POST[category]', '$_POST[phone]' ,'$_POST[cf]','$_POST[exp]','$_POST[pass]' )";


if(!mysqli_query($con,$vd)){
		
			//inbuilt function in php to print an error statement
			die('Error: ' . mysqli_error($con));
			
	}else{
		header("Location: viewdoctor.php");
		exit;

	}



?>