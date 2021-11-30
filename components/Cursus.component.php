<?php 

$cursus = array( new Cursus( "DIPET 2 Electronique" , "@ENSET de Douala" , "2016-08-01" , "Gestion d'eclairage d'une maison(Android + Arduino)" ), 
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

?>
<div class="cursus card">

    <div class="header">
        <div class="header_information">
            <img src="img/casquette-noire-pour-etudiant-diplome.png" alt="">
            <div class="header_info">
                <h3 class="header_title">Cursus academique</h3>
                <p class="header_subtitle lite_gray">Diplomes et formations
                    certifiantes</p>
            </div>
        </div>

        <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                <path
                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
            </svg></span>

    </div>

    <div class="curcus_main">
        <div class="scroll"></div>
        <div class="professional_experience_scroll">

        <?php 
        $i = 0 ;
        foreach($cursus as $c) { 
        ?>
            <div class="profession">
                <p class="title"> <?=$c->getDiplome()?> - <span class="location"><?=$c->getEcoleObtention()?></span></p>
                <p class="date_cursus_role"> <span class="date"><?=$c->getDateObtention() ?> -
                    </span> &nbsp; <span class="cursus_role"><?=$c->getSpecialisation() ?></span> </p>
               <?php if(sizeof($cursus) > $i+1){ echo "<hr>" ;} ?>
            </div>
            
        <?php $i++; } ?>
   
        </div>

    </div>
</div>