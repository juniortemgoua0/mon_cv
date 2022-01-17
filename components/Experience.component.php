<?php
unset($_SESSION["experienceData"]);
 if(isset($_SESSION["experienceData"]) && !empty($_SESSION["experienceData"])){
    $experience = $_SESSION["experienceData"];
 }else{
    $experience = Data::get_experience_data();
 }

Experience::getComponent($experience) ;

?>
