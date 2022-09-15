<?php  
//include the connection
include "connection.php";


// gonna insert the data to the table
	
 
	
	$cd = " INSERT INTO  clinic (id ,clinicname, doctorname,category, clinicday, opentime, closetime )
	 VALUES ('$_POST[id]', '$_POST[name]','$_POST[dname]',  '$_POST[category]','$_POST[cd]' ,'$_POST[ct]','$_POST[cct]' )";


if(!mysqli_query($con,$cd)){
		
			//inbuilt function in php to print an error statement
			die('Error: ' . mysqli_error($con));
			
	}else{
		header("Location: viewclinic.php");
		exit;

	}



?>