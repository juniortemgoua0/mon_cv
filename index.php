<?php
require "header.php" ;
?>
<body>
        <div class="container " id="myCanvas">
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
                        <div class="professional_experience card">
                                <?php require "components/Experience.component.php"; ?>
                        </div>

                        <div class="hobby">
                                <?php require "components/PointOfInterest.component.php"; ?>
                                <?php require "components/Language.component.php"; ?>
                        </div>
                        <div class="cursus card">
                                <?php require "components/Cursus.component.php"; ?>
                        </div>
                </section>
        </div>

</body>

</html>