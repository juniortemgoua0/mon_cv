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

        <!-- ------------  css ------------- -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="CSS/materialize.min.css">
        <link rel="stylesheet" href="icons-1.7.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="CSS/style.css">
        <!-- <link rel="stylesheet" href="CSS/reset.css"> -->


        <!-- ---------- JAVASCRIPT       -------- -->
        <script src="JS/materialize.min.js" defer></script>
        <script src="JS/jquery-3.5.1.min.js"></script>
        <script src="JS/bootstrap.min.js"></script>
        <script src="JS/app.js"></script>


</head>

<body>
        <div class="container ">
        <a href="#" class="cancelable_btn"><i class="bi bi-plus-lg"></i> </i> </a>

                <!--------------------------          SECTION UP_LEFT_SIDE  ------------------------>

                <section class="up_left_side card">
                <div class="cover_editable_btn"></div>
                <a href="#" class="editable_btn"><i class="bi bi-pencil-fill"></i> </a>
                        <?php require "components/Profil.component.php"; ?>
                </section>

                <!--------------------------          SECTION DOWN_LEFT_SIDE  ------------------------>

                <section class="down_left_side card">
                <div class="cover_editable_btn"></div>
                <a href="#" class="editable_btn"><i class="bi bi-pencil-fill"></i> </a>
               
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