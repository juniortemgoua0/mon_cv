<?php
ob_start() ;
require "../../header.php" ;
ob_end_clean();

$componentName = $_POST["componentName"] ;

 if($componentName == "Profil"){
     ob_start() ;
     require "../Profil.component.php" ;
     $component = ob_get_contents() ;
     ob_end_clean();
     echo $component ;
 }else if($componentName == "Competence"){
    ob_start() ;
    require "../Skill.component.php" ;
    $component = ob_get_contents() ;
    ob_end_clean();
    echo $component ;
 }else if($componentName == "Experience"){
    ob_start() ;
    require "..//Experience.component.php" ;
    $component = ob_get_contents() ;
    ob_end_clean();
    echo $component ;
 }else if($componentName == "Cursus"){
    ob_start() ;
    require "../Cursus.component.php" ;
    $component = ob_get_contents() ;
    ob_end_clean();
    echo $component ;
 }
?>