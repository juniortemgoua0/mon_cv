<?php  

$skills = array(
    new Skill(1,
    "Developpement front-end", 
    array(new Skill(7 ,"HTML5" , null , 95 ), new Skill(8 ,"SASS" , null , 80), new Skill(9 , "VueJS", null , 75),new Skill(10 ,"Angular" , null , 85), new Skill(11, "JavaFx" , null , 50))
     , 90  ),

    new Skill(2,
    "Developpement back-end", 
    array(new Skill(13 ,"NodeJS" , null , 85), new Skill(14 ,"Drupal 8" , null , 65), new Skill(15 ,"Laravel" , null , 70), new Skill(67 ,"Kotlin", null , 80), new Skill(45 ,"Java EE 7" , null , 70)) ,
     80  ),

    new Skill(3 , 
    "Developpement mobile", 
    array(new Skill(16 ,"Android Kotlin", null , 70), new Skill(17 ,"IOS Swift", null , 55), new Skill(18 ,"Cordova", null , 75), new Skill(19 ,"Flutter", null , 85)) , 
    60  ),

    new Skill(4 ,
    "UI / UX Design", 
    array(new Skill(16 ,"Photoshop CC", null , 65) ,new Skill(16 ,"Adobe XD", null , 80), new Skill(16 ,"Material Design", null , 90)) , 
    75  ),
    
    new Skill(5 , 
    "Base de donnees & Big Data", 
    array(new Skill(16 ,"Oracle 11g", null , 85), new Skill(16 ,"PostgreSQL", null , 75), new Skill(16 ,"Hadoop", null , 55), new Skill(16 ,"Talend DI", null , 70)) ,
     95  ),

    new Skill(6 , 
    "Outils / Environnements", 
    array(new Skill(16 ,"Visual Paradigm", null , 70), new Skill(16 ,"Git" ,null , 90 ), new Skill(16 ,"Docker", null , 65), new Skill(16 ,"K8s", null , 50) , new Skill(16 , "Linux", null , 85)) , 
    65 )
);

 
Skill::getComponent($skills) ;

?>
