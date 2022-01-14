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
   if(isset($_POST["experienceData"]) && !empty($_POST["experienceData"])){
      $_SESSION["experienceData"] = array();
      $p = $_POST["experienceData"] ;
      foreach( $p as $e){
        array_push($_SESSION["experienceData"] , new Experience($e["poste"],$e["entreprise"] , $e["datedebut"] , $e["datefin"],$e["liensite"],$e["realisation"]));
      }
      //  = $_POST["experienceData"] ;
   }
    ob_start() ;
    require "../Experience.component.php" ;
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