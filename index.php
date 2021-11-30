<?php

require "utils/Utils.php" ;
require "class/Experience.php" ;
require "class/Cursus.php" ;
require "class/Skill.php" ;

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">
        <script src="app.js" defer></script>
</head>

<body>
        <div class="container">

                <!--------------------------          SECTION UP_LEFT_SIDE  ------------------------>

                <section class="up_left_side card">

                        <?php require "components/Profil.component.php"; ?>
                        
                        <?php require "components/PersonnalInfo.component.php"; ?>

                </section>

                <!--------------------------          SECTION DOWN_LEFT_SIDE  ------------------------>

                <section class="down_left_side card">

                        <?php require "components/Skill.component.php"; ?>

                </section>

                <!--------------------------          SECTION RIGHT_SIDE  ------------------------>

                <section class="right_side">

                        <?php require "components/Experience.component.php"; ?>

                        <div class="hobby">

                                <?php require "components/PointOfInterest.component.php"; ?>

                                <?php require "components/Language.component.php"; ?>

                        </div>

                        <?php require "components/Cursus.component.php"; ?>

                </section>
        </div>

</body>

</html>