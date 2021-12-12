<?php 

$dsn = "mysql: host = localhost ; port= 3307 ; dbname = cv" ;
$username = "root" ;
$password = "Berbeto7" ;

try{
    $con = new PDO($dsn, $username , $password) ;
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) ; 
    echo "CONNEXION REUISSITTE" ;
    
}catch(PDOException $e){
    echo $e->getMessage() ;
}


?>