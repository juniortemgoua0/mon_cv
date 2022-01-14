<?php 
class Data {

    public static function get_skill_data() : array
     {
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
        return $skills ;
    }

    public static function get_experience_data() : array 
    {
        $experience = array(
            new Experience("Chef des projets technologiques" , "@Ets. M DE M"  , "2012-12-01" , "ce jour" , "http://mdm.cm" ,"Chef du projet annuaire-universel.cm de l'ART;"),
            new Experience("Fondateur & DT" , "@Startup ChickDev"  , "2015-06-01" , "ce jour" , "http://chickdev.com" ,"Realisation de plusieurs sites web et applications web et mobiles"),
            new Experience(" Enseignant" , "@Institut Universitaire de la cote"  , "2011-10-01" , "ce jour" , "http://istdi.net" ,'Analyse. UML & MERISE"; "BD/SQL. ORACLE & MySQL";"Dev. iOS & Android"; "BI & BIG Data Talend DI & Hadoop". 1<sup>ere</sup>, 2<sup>eme</sup> et 4<sup>eme</sup> annee'),
            new Experience("Developpeur en chef" , "@Kayroual group"  , "2013-05-01" , "2015-06-01" , "http://khayroual.com" ,"Realisation de multiples projets logiciels et web, Infographie, ..."),
            new Experience("Responsable commercial" , "@BAO Sarl"  , "2012-12-01" , "2013-05-13" , "http://mdm.cm" ,"Chef du projet annuaire-universel.cm de l'ART;"),
            new Experience("Chef des projets technologiques" , "@Ets. M DE M"  , "2012-12-01" , "ce jour" , "http://mdm.cm" ,"Chef du projet annuaire-universel.cm de l'ART;"),
            new Experience("Developpeur en chef" , "@Kayroual group"  , "2013-05-01" , "2015-06-01" , "http://khayroual.com" ,"Realisation de multiples projets logiciels et web, Infographie, ..."),
            new Experience("Chef des projets technologiques" , "@Ets. M DE M"  , "2012-12-01" , "ce jour" , "http://mdm.cm" ,"Chef du projet annuaire-universel.cm de l'ART;"),
            new Experience("Fondateur & DT" , "@Startup ChickDev"  , "2015-06-01" , "ce jour" , "http://chickdev.com" ,"Realisation de plusieurs sites web et applications web et mobiles"),
      );

      return $experience ;
    }

    public static function get_cursus_data() : array 
    {
        $cursus = array( 
            new Cursus( "DIPET 2 Electronique" , "@ENSET de Douala" , "2016-08-01" , "Gestion d'eclairage d'une maison(Android + Arduino)" ), 
            new Cursus( "Oracle Certified Associate" , "@Kentnix Sarl" , "2009-03-01" , "Oracle Database 11gAdministration"),
            new Cursus( "Oracle SQL Certified" , "@Kentnix Sarl" , "2008-12-01" , "SQL 2, SQL 3, XML"),
            new Cursus( "Licence professionnelle" , "@Douala Institute of Tech." , "2008-10-01" , "Telecommunication & Reseaux" ),
            new Cursus( " DEC / BTS" , "@CCNB Dieppe - Canada." , "2007-09-01" , "Electrotechnique, mention BIEN(major de centre) " ),
            new Cursus( "DIPET 2 Electronique" , "@ENSET de Douala" , "2016-08-01" , "Gestion d'eclairage d'une maison(Android + Arduino)" ),
            new Cursus( "DIPET 2 Electronique" , "@ENSET de Douala" , "2016-08-01" , "Gestion d'eclairage d'une maison(Android + Arduino)" ),               
            new Cursus( "DIPET 2 Electronique" , "@ENSET de Douala" , "2016-08-01" , "Gestion d'eclairage d'une maison(Android + Arduino)" ),
            new Cursus( "DIPET 2 Electronique" , "@ENSET de Douala" , "2016-08-01" , "Gestion d'eclairage d'une maison(Android + Arduino)" ),
            new Cursus( "DIPET 2 Electronique" , "@ENSET de Douala" , "2016-08-01" , "Gestion d'eclairage d'une maison(Android + Arduino)" ),
          ) ;
        return $cursus ;
    }


    public static function get_experience_data_array(array $experience):array
    {
        
        $experienceArray = array();
        foreach($experience as $ex){
            array_push($encodeExperience , ["poste"=>$ex->getPoste(),"entreprise"=>$ex->getEntreprise(),"dateDebut"=>$ex->getDateDebut(),
                        "dateFin"=>$ex->getDateFin() , "lienSite"=> $ex->getLienSite() , "realisation"=>$ex->getRealisation()]);
        }
        return $experienceArray ;
    }
}

?>