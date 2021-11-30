<?php

 $experience = array( new Experience("Chef des projets technologiques" , "@Ets. M DE M"  , date("Y-m-d") , "ce jour " , "http://mdm.cm" ,"Chef du projet annuaire-universel.cm de l'ART;"),
 new Experience("Fondateur & DT" , "@Startup ChickDev"  , "2015-06-01" , "ce jour " , "http://chickdev.com" ,"Realisation de plusieurs sites web et applications web et mobiles"),
 new Experience(" Enseignant" , "@Institut Universitaire de la cote"  , "2011-10-01" , "ce jour " , "http://istdi.net" ,'Analyse. UML & MERISE"; "BD/SQL. ORACLE & MySQL";"Dev. iOS & Android"; "BI & BIG Data Talend DI & Hadoop". 1<sup>ere</sup>, 2<sup>eme</sup> et 4<sup>eme</sup> annee'),
 new Experience("Developpeur en chef" , "@Kayroual group"  , "2013-05-01" , "2015-06-01" , "http://khayroual.com" ,"Realisation de multiples projets logiciels et web, Infographie, ..."),
 new Experience("Responsable commercial" , "@BAO Sarl"  , "2012-12-01" , "2013-05-13" , "http://mdm.cm" ,"Chef du projet annuaire-universel.cm de l'ART;"),
 new Experience("Chef des projets technologiques" , "@Ets. M DE M"  , date("Y-m-d") , "ce jour " , "http://mdm.cm" ,"Chef du projet annuaire-universel.cm de l'ART;"),
 new Experience("Developpeur en chef" , "@Kayroual group"  , "2013-05-01" , "2015-06-01" , "http://khayroual.com" ,"Realisation de multiples projets logiciels et web, Infographie, ..."),
 new Experience("Chef des projets technologiques" , "@Ets. M DE M"  , date("Y-m-d") , "ce jour " , "http://mdm.cm" ,"Chef du projet annuaire-universel.cm de l'ART;"),
 new Experience("Fondateur & DT" , "@Startup ChickDev"  , "2015-06-01" , "ce jour " , "http://chickdev.com" ,"Realisation de plusieurs sites web et applications web et mobiles"),
);

?>

<div class="professional_experience card">
    <div class="header">
        <div class="header_information">
            <img src="img/batiment.png" height="40" width="40" alt="">
            <div class="header_info">
                <h3 class="header_title">Experience professionnelle</h3>
                <p class="header_subtitle lite_gray">Expertise en entreprise</p>
            </div>
        </div>

        <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg></span>

    </div>

    <div class="professional_experience_main ">
        <div class="scroll"></div>
        <div class="professional_experience_scroll">
           
           <?php 
             $i= 0;
             foreach($experience as $e){
           ?>
            <div class="profession">
                <p class="title"> <?= $e->getPoste()?> - <span class="location"> <?=$e->getEntreprise()?></span></p>
                <p class="date"> <?php echo "De " . $e->getDateDebut(). " a " . $e->getDateFin() . " - " . $e->getLienSite() ; ?></p>
                <p class="subtitle"> <?=$e->getRealisation()?></p>
               <?php if(sizeof($experience) > $i+1) echo "<hr>" ; ?>
            </div>

            <?php $i++; }?>
        </div>
    </div>
</div>