<?php  

$skill = array(new Skill("Developpement front-end", "HTML5, SASS, VueJS, Angular, JavaFx,..." , 90  ),
    new Skill("Developpement back-end", "NodeJS, Drupal 8, Laravel, Kotlin, Java EE 7" , 80  ),
    new Skill("Developpement mobile", "Android Kotlin, IOS Swift, Cordova, Flutter" , 60  ),
    new Skill("UI / UX Design", "Photoshop CC, Adobe XD, Material Design" , 75  ),
    new Skill("Base de donnees & Big Data", "Oracle 11g, PostgreSQL, Hadoop, Talend DI" , 95  ),
    new Skill("Outils / Environnements", "Visual Paradigm, Git, Docker, K8s, Linux" , 65 )
);

 foreach($skill as $sk){
?>

<div class="d_personnal">
    <span class="check"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-check-lg" viewBox="0 0 16 16">
            <path
                d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
        </svg></span>
    <div class="details">
        <div class="skill">
            <h3><?=$sk->getTitle()?></h3>
            <span class="star"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg></span>
        </div>
        <p class="lite_gray"><?=$sk->getAllSkill()?></p>
        <div class="switcher">
            <div class="switcher_bar" style="width:<?=$sk->getLevel()?>%;"></div>
            <span class="switcher_circle" style="right: <?=100 - $sk->getLevel()?>%;"></span>
        </div>
    </div>
</div>

<?php } ?>
