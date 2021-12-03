<?php  

$skills = array(
    new Skill(1,
    "Developpement front-end", 
    array(new Skill(7 ,"HTML5" , null , 40 ), new Skill(8 ,"SASS" , null , 50), new Skill(9 , "VueJS", null , 40),new Skill(10 ,"Angular" , null , 70), new Skill(11, "JavaFx" , null , 90))
     , 90  ),

    new Skill(2,
    "Developpement back-end", 
    array(new Skill(13 ,"NodeJS" , null , 70), new Skill(14 ,"Drupal 8" , null , 70), new Skill(15 ,"Laravel" , null , 70), new Skill(67 ,"Kotlin", null , 70), new Skill(45 ,"Java EE 7" , null , 79)) ,
     80  ),

    new Skill(3 , 
    "Developpement mobile", 
    array(new Skill(16 ,"Android Kotlin", null , 70), new Skill(17 ,"IOS Swift", null , 70), new Skill(18 ,"Cordova", null , 70), new Skill(19 ,"Flutter", null , 70)) , 
    60  ),

    new Skill(4 ,
    "UI / UX Design", 
    array(new Skill(16 ,"Photoshop CC", null , 70) ,new Skill(16 ,"Adobe XD", null , 70), new Skill(16 ,"Material Design", null , 70)) , 
    75  ),
    
    new Skill(5 , 
    "Base de donnees & Big Data", 
    array(new Skill(16 ,"Oracle 11g", null , 70), new Skill(16 ,"PostgreSQL", null , 70), new Skill(16 ,"Hadoop", null , 70), new Skill(16 ,"Talend DI", null , 70)) ,
     95  ),

    new Skill(6 , 
    "Outils / Environnements", 
    array(new Skill(16 ,"Visual Paradigm", null , 70), new Skill(16 ,"Git" ,null , 60 ), new Skill(16 ,"Docker", null , 70), new Skill(16 ,"K8s", null , 40) , new Skill(16 , "Linux", null , 70)) , 
    65 )
);

 
Skill::getComponent($skills) ;

?>
