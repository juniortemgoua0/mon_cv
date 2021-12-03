<?php 

$host = "localhost:8080" ;
$dbname = "cv" ;
$username = "root" ;
$password = "Berbeto7" ;


try{
    $con = new PDO("mysql: host=$host ; dbname=$dbname" , $username , $password) ;
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) ; 
    die ("CONNEXION REUISSITTE") ;
    
}catch(PDOException $e){
    echo $e ;
}


?>