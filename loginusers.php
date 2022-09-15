<?php  

include "connection.php";

$email = $_POST['email'];
$pass = $_POST['password'];

if(isset($_POST["login"])){

        $sql  = "SELECT * FROM  registerusers WHERE Email='$email' AND Password ='$pass'";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
             
            header('Location: admin.php');
            }
        }else{
            echo ('Location: index.php');
        }
}




?>