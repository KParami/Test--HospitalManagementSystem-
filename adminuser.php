<?php  

include "connection.php";

$email = $_POST['email'];
$pass = $_POST['password'];

if(isset($_POST["login"])){

        $sql  = "SELECT * FROM  admin WHERE Email='$email' AND Password ='$pass'";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
             
            header('Location: index.php');
            }
        }else{
            echo "You are not a valid user!";
        }
}




?>