<?php 
session_start();

if(isset($_SESSION["user_id"])){
    echo "connecter" ;
}else {
    echo "non connecter";
}

if(isset($_POST['username'])){
    
}

?>