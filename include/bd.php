<?php
$host="localhost";
$user="root";
$password="";
$db_name="pagina_admin";

$con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    if($con){
           echo "databse is connected !";
        }else{
           echo "something is wrong with database !";
        }
?>