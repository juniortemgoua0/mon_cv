<?php
require "../../header.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../CSS/style.css">
    <!-- <link rel="stylesheet" href="../../CSS/materialize.min.css"> -->
    <link rel="stylesheet" href="../../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../icons-1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../CSS/jquery-ui.min.css">


    <style>
        li {
            list-style: none;
            list-style-position: inside;
        }

        .li_sortable {
            cursor: grab;
        }

        .accordion-item,
        .photo {
            transition: box-shadow 0.2s ease-in-out, padding 0.2s ease-in-out;
        }

        .accordion-item:hover,
        .photo:hover {
            box-shadow: 0px 0px 10px var(--primary-color);
            border-radius: 5px;
            padding: 3px;
        }

        .accordion-button:hover {
            color: #1376ba;
            
        }
    </style>
</head>

<body>

    <div class="container-fluid px-2 " style="background-color: #eef1f3;">
        <div class="row">
            <div class="col-sm-6 mt-2 mb-2">
                <div class="card " style="height: 100vh;">
                    <div class="card-header" style="background-color: #1376ba;">
                        <ul class="nav nav-tabs card-header-tabs" id="nav_bar" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white " id="profil-tab" data-bs-toggle="tab"
                                    data-bs-target="#profil" type="button" role="tab" aria-controls="profil"
                                    aria-selected="true" href="#">Profil</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white " id="competence-tab" data-bs-toggle="tab"
                                    data-bs-target="#competence" type="button" role="tab" aria-controls="competence"
                                    aria-selected="false" href="#">Competence</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-primary   active" id="experience-tab" data-bs-toggle="tab"
                                    data-bs-target="#experience" type="button" role="tab" aria-controls="experience"
                                    aria-selected="false">Experience</a>
                            </li>
                            <li class="nav-item " role="presentation">
                                <a class="nav-link text-white " id="cursus-tab" data-bs-toggle="tab"
                                    data-bs-target="#cursus" type="button" role="tab" aria-controls="cursus"
                                    aria-selected="false">Cursus</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white " id="langue-tab" data-bs-toggle="tab"
                                    data-bs-target="#langue" type="button" role="tab" aria-controls="langue"
                                    aria-selected="false">Langue</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white " id="pointInteret-tab" data-bs-toggle="tab"
                                    data-bs-target="#pointInteret" type="button" role="tab" aria-controls="pointInteret"
                                    aria-selected="false">Point d'interet</a>
                            </li>
                        </ul>
                    </div>



                    <div class="tab-content overflow-scroll" id="myTabContent">

                        <!------------------ SECTION PROFIL      ------------------------------->

                        <?php require "edit_profil.php" ?>

                        <!------------------- SECTION EXPERIENCE -------------------------------->

                        <?php require "edit_experience.php" ?>

                        <!---------------------  SECTION CURSUS  -------------------------------->

                        <?php require "edit_cursus.php" ?>

                        <!-------------------- SECTION COMPETENCE   ------------------------------>

                        <?php require "edit_competence.php" ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-6  mt-2 mb-2">
                <div class="card " style="height: 100vh;">
                    <h5 class="card-header text-white" style="background-color: #1376ba;">Previsualisation</h5>
                    <div
                        class="card-body h-100 d-flex justify-content-center align-items-center overflow-scroll position-relative">
                        <div class="load_none ">
                            <div class="load_page_content">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                        <div class="card w-75 h-100 border p-2 overflow-scroll " id="preview">
                            <?php 
                        //   require "../../class/Skill.php" ;
                        //   require "../../utils/Utils.php" ;
                        //   require "../../class/Experience.php" ;
                        //   require "../../class/Profil.php" ;
                        //      require "../Profil.component.php" ;
                          ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../JS/bootstrap.min.js"></script>
    <script src="../../JS/materialize.min.js"></script>
    <script src="../../JS/jquery-3.5.1.min.js"></script>
    <script src="../../JS/jquery-ui.min.js"></script>
    <!-- <script src="../../JS/app.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function () {

            //Recuperation du tableau 
            let arrayExperience = <?= json_encode($encodeExperience) ?> ;
            /**
             * Systeme de sortable sur les differents accordion de chaque section
             */
            let arrayOfPosition = [];
            $("#accordionCompetence").sortable({
                update: function (event, ui) {

                }
            })

            let newArrayEperience = arrayExperience;
            $("#accordionExperience").sortable({
                update: function (event, ui) {
                    arrayOfPosition = []
                    arrayExperience = []
                    $("#accordionExperience").children().map((k, v) => {
                        let index = parseInt(v.id.slice(v.id.length - 1, v.id.length))
                        // arrayOfPosition.push(index)
                        arrayExperience.push(newArrayEperience[index])
                    })
                    var evt = document.createEvent("MouseEvents");
                    evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false,
                        false, false, 0, null);
                    document.getElementById("experience-tab").dispatchEvent(evt);
                }
            })

            $("#accordionCursus").sortable({
                update: function (event, ui) {
                    console.log(ui)
                }
            })


            $(".accordion-item").mouseenter((e) => {
                e.currentTarget.childNodes[1].classList.remove("d-none")
            })
            $(".accordion-item").mouseleave((e) => {
                e.currentTarget.childNodes[1].classList.add("d-none")
            })

            /**
             * TODO :Gestion des chips pour les champs reseaux sociaux de communication et reseaux sociaux travail
             */
            var elems = document.querySelectorAll('.chips');
            var options = {
                placeholder: 'yo@gmail.com ',
                secondaryPlaceholder: '+Email',
                data: [],
                limit: Infinity,
                onChipAdd: (data) => {

                },
                minLeingth: 1
            };

            var instances = M.Chips.init(elems, options);

            /**
             * Action sur la nav_bar et mise en evidence de la previsualisation 
             *par la recuperation de du text sur le tabs et realisation de la requete de la requete ajax 
             */
            $("#nav_bar").click((e) => {
                $("#nav_bar")[0].childNodes.forEach((elt) => {
                    elt.childNodes.forEach((element) => {
                        if (element.innerHTML != undefined) {
                            element.classList.remove("text-primary")
                            element.classList.add("text-white")
                        }
                    })
                })
                e.target.classList.remove("text-white")
                e.target.classList.add("text-primary")
                let componentName = e.target.innerHTML
                $.ajax({
                    method: "POST",
                    url: "preview.php",
                    data: {
                        componentName: componentName,
                        experienceData: arrayExperience
                    },
                    beforeSend: function (xhr) {
                        $(".load_none").addClass("load_page");
                    }
                }).done(function (data) {
                    window.setTimeout(() => {
                        $(".load_none").removeClass("load_page")
                    }, 500)
                    $("#preview").html(data)
                })
            })

            /**
             * Gestion de l'actualisation de texte sur la modification d'un champ 
             */

            /**
             * Actualisation automatique de la section Experience lorsqu'un input est modifier*/

            refreshAfterInputChange('input[id*="Experience"]', arrayExperience, "Experience")
            /***************************************************************************/

            // Actualisation automatique de la section Cursus lorsqu'un input est modifier  
            let arrayCursus = <?=json_encode($encodeCursus) ?> ;
            refreshAfterInputChange('input[id*="Cursus"]', arrayCursus, "Cursus")
            /***************************************************************************/

            //  Actualisation automatique de la section Competence 
            refreshAfterInputChange('input[id*="Competence"]')

            document.querySelectorAll('input[id*="CompetenceLevel"]').forEach(function (elt) {
                elt.addEventListener("change", (e) => {
                    let id = elt.id
                    document.querySelectorAll("." + id + "").forEach(function (element) {
                        console.log(elt.value)
                        element.style.width = elt.value + "%"
                    })
                    document.querySelectorAll("." + id + "circle").forEach(function (element) {
                        console.log(elt.value)
                        element.style.right = 100 - parseInt(elt.value) + "%"
                    })
                })
            })
            /***************************************************************************/

            function refreshAfterInputChange(classe, arrayComponent, componentName) {
                document.querySelectorAll(classe).forEach(function (elt) {
                    elt.addEventListener("keyup", (e) => {
                        let id = elt.id
                        document.querySelectorAll("." + id + "").forEach(function (element) {
                            element.innerText = elt.value
                        })
                        //Decoupe le id pour recuperer l'index de l'ement qui est entrain d'etre modifier dans le tableau
                        let index = parseInt(id.slice(id.length - 1, id.length))
                        console.log(index)
                        //Decoupe le id pour recouperer la valeur du champ qui est entrain d'etrer recuperer
                        let champ = id.slice(componentName.length, id.length - 1)
                        .toLowerCase() // 10 designe la taille du mot Experience
                        console.log(champ)
                        arrayComponent[index][champ] = elt.value
                        console.log(arrayComponent)
                    })
                })
            }

            //Ajout d'une Experience apres le click le boutton d'ajout d'une experience 
            $("#AddExperience").click((e) => {
                e.preventDefault()
                $(`<div class="accordion-item rounded mt-4 border-top">
                    <div class="text-center w-100 d-none li_sortable">
                        <i class="bi bi-grip-horizontal fs-3 "></i>
                    </div>
                    <h2 class="accordion-header border" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExperience<?=$iexperience?>" aria-expanded="true"
                            aria-controls="collapseExperience<?=$iexperience?>">
                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="fw-bold fs-5 ExperiencePoste<?=$iexperience?>"
                                        id=""></span>
                                </div>
                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                            </div>

                        </button>
                    </h2>
                    <div id="collapseExperience<?=$iexperience?>" class="accordion-collapse collapse  "
                        aria-labelledby="headingOne" data-bs-parent="#accordionExperience">
                        <div class="accordion-body">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="" class="form-label">Poste</label>
                                        <input type="text" class="form-control"
                                            id="ExperiencePoste<?=$iexperience?>" value=''>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                    <label for="" class="form-label ">Entreprise</label>
                                    <input type="text" class="form-control"
                                        id="ExperienceEntreprise<?=$iexperience?>"
                                        value=''>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Date de debut</label>
                                        <input type="date" class="form-control"
                                            id="ExperienceDateDebut<?=$iexperience?>"
                                            value=''>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="form-label">Date de fin</label>
                                        <input type="date" class="form-control"
                                            id="ExperienceDateFin<?=$iexperience?>" value=''>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="form-group">
                                    <label for="" class="form-label">Reference de l'entreprise</label>
                                    <input type="text" class="form-control"
                                        id="ExperienceLienSite<?=$iexperience?>" value=''>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="form-group">
                                    <label for="" class="form-label">Realisation</label>
                                    <input type="text" class="form-control"
                                        id="ExperienceRealisation<?=$iexperience?>"
                                        value=''>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end mt-3">
                                <button href="#" class="btn btn-danger me-4"><i
                                        class="bi bi-trash text-white fs-4 "></i></button>
                                <button
                                    class="btn btn-primary d-flex align-items-center justify-content-center"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseExperience<?=$iexperience?>" aria-expanded="true"
                                    aria-controls="collapseOne"><i
                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                            </div>

                        </div>
                    </div>
                </div>`).appendTo("#accordionExperience")
            })
            /*****************************************************************************/

            /**
             * Simuler un clic sur le tabs correspondant au composant qui aura 
             * ete selectioner pour l'edition
             **/
            var evt = document.createEvent("MouseEvents");
            evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
            document.getElementById("experience-tab").dispatchEvent(evt);

            /**
             * TODO: Operation de previsualisation en directe lorsque les donnees d'un input change
             */






        })
    </script>
</body>

</html>