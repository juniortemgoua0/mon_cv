<?php
require "header.php" ;
?>


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