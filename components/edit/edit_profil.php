<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../CSS/style.css">
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

        .accordion-item {
            transition: box-shadow 0.3s ease-in-out, padding 0.3s ease-in-out;
        }

        .accordion-item:hover {
            box-shadow: 0px 0px 10px var(--primary-color);
            border-radius: 5px;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="container-fluid px-2 " style="background-color: #eef1f3;">
        <div class="row">
            <div class="col-sm-6 mt-2 mb-2">
                <div class="card " style="height: 100vh;">
                    <div class="card-header" style="background-color: #1376ba;">
                        <ul class="nav nav-tabs card-header-tabs" id="tabse" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white " id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profil"
                                    aria-selected="true" href="#">Profil</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link " id="competence-tab" data-bs-toggle="tab"
                                    data-bs-target="#competence" type="button" role="tab" aria-controls="competence"
                                    aria-selected="false" href="#">Competence</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link   active" id="experience-tab" data-bs-toggle="tab"
                                    data-bs-target="#experience" type="button" role="tab" aria-controls="experience"
                                    aria-selected="false">Experience</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link " id="cursus-tab" data-bs-toggle="tab"
                                    data-bs-target="#cursus" type="button" role="tab" aria-controls="cursus"
                                    aria-selected="false">Cursus</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link " id="langue-tab" data-bs-toggle="tab"
                                    data-bs-target="#langue" type="button" role="tab" aria-controls="langue"
                                    aria-selected="false">Langue</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link " id="pointInteret-tab" data-bs-toggle="tab"
                                    data-bs-target="#pointInteret" type="button" role="tab" aria-controls="pointInteret"
                                    aria-selected="false">Point d'interet</a>
                            </li>
                        </ul>
                    </div>

                    <!------------------ SECTION PROFIL      ------------------------------->



                    <!------------------- SECTION EXPERIENCE -------------------------------->
                    <div class="tab-content overflow-scroll" id="myTabContent">
                        <div id="experience" class="card-body mr-3 tab-pane  fade show active" role="tabpanel"
                            aria-labelledby="experience-tab">
                            <h5 class="card-title">Edition de la section experience</h5>
                            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            <div class="accordion" id="accordionExperience">
                                <div class="accordion-item rounded mt-4 border-top">
                                    <div class="text-center w-100 d-none li_sortable">
                                        <i class="bi bi-grip-horizontal fs-3 "></i>
                                    </div>
                                    <h2 class="accordion-header border" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="fw-bold fs-5">Chef des projets technologiques</span>
                                                </div>
                                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                                            </div>

                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse  "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExperience">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Poste</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label ">Entreprise</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Date de debut</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Date de fin</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Reference de l'entreprise</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Realisation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end mt-3">
                                                <button href="#" class="btn btn-danger me-4"><i
                                                        class="bi bi-trash text-white fs-4 "></i></button>
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded mt-4 border-top">
                                    <div class="text-center w-100 d-none li_sortable">
                                        <i class="bi bi-grip-horizontal fs-3 "></i>
                                    </div>
                                    <h2 class="accordion-header border" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="fw-bold fs-5">Developpeur en chef</span>
                                                </div>
                                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                                            </div>

                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse  "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExperience">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Poste</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label ">Entreprise</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Date de debut</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Date de fin</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Reference de l'entreprise</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Realisation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-12 d-flex justify-content-end mt-3">
                                                <button href="#" class="btn btn-danger me-4"><i
                                                        class="bi bi-trash text-white fs-4 "></i></button>
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded mt-4 border-top">
                                    <div class="text-center w-100 d-none li_sortable">
                                        <i class="bi bi-grip-horizontal fs-3 "></i>
                                    </div>
                                    <h2 class="accordion-header border" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="fw-bold fs-5">Fondateur & DT</span>
                                                </div>
                                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                                            </div>

                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse  "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExperience">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Poste</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label ">Entreprise</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Date de debut</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Date de fin</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Reference de l'entreprise</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Realisation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end mt-3">
                                                <button href="#" class="btn btn-danger me-4"><i
                                                        class="bi bi-trash text-white fs-4 "></i></button>
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center w-100 mt-4">
                                <a href="#"
                                    class="  btn btn-outline-primary d-flex align-items-center justify-content-center fw-bold">
                                    <i class="bi bi-plus-lg fs-4 me-2"></i> Ajouter une experience
                                </a>
                            </div>
                        </div>

                        <!---------------------  SECTION CURSUS  -------------------------------->

                        <div id="cursus" class="card-body mr-3 overflow-scroll tab-pane fade" role="tabpanel"
                            aria-labelledby="cursus-tab">
                            <h5 class="card-title">Edition de la section curcus</h5>
                            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            <div class="accordion" id="accordionCursus">
                                <div class="accordion-item rounded mt-4 border-top">
                                    <div class="text-center w-100 d-none li_sortable">
                                        <i class="bi bi-grip-horizontal fs-3 "></i>
                                    </div>
                                    <h2 class="accordion-header border" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="fw-bold fs-5">DIPET 2 Electronique</span>
                                                </div>
                                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                                            </div>

                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExperience">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Diplome</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label ">Ecole</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Date d'obtention</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Specialisation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end mt-3">
                                                <button href="#" class="btn btn-danger me-4"><i
                                                        class="bi bi-trash text-white fs-4 "></i></button>
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded mt-4 border-top">
                                    <div class="text-center w-100 d-none li_sortable">
                                        <i class="bi bi-grip-horizontal fs-3 "></i>
                                    </div>
                                    <h2 class="accordion-header border" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="fw-bold fs-5">Oracle Certified Associate</span>
                                                </div>
                                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                                            </div>

                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse  "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExperience">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Diplome</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label ">Ecole</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Date d'obtention</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Specialisation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end mt-3">
                                                <button href="#" class="btn btn-danger me-4"><i
                                                        class="bi bi-trash text-white fs-4 "></i></button>
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded mt-4 border-top">
                                    <div class="text-center w-100 d-none li_sortable">
                                        <i class="bi bi-grip-horizontal fs-3 "></i>
                                    </div>
                                    <h2 class="accordion-header border" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="fw-bold fs-5">Licence professionnelle</span>
                                                </div>
                                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                                            </div>

                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse  "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExperience">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="" class="form-label">Diplome</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label ">Ecole</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Date d'obtention</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Specialisation</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end mt-3">
                                                <button href="#" class="btn btn-danger me-4"><i
                                                        class="bi bi-trash text-white fs-4 "></i></button>
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center w-100 mt-4">
                                <a href="#"
                                    class="  btn btn-outline-primary d-flex align-items-center justify-content-center fw-bold">
                                    <i class="bi bi-plus-lg fs-4 me-2"></i> Ajouter un cursus
                                </a>
                            </div>
                        </div>

                        <!-------------------- SECTION COMPETENCE   ------------------------------>

                        <div id="competence" class="card-body mr-3 overflow-scroll tab-pane fade" role="tabpanel"
                            aria-labelledby="competence-tab">
                            <h5 class="card-title">Edition de la section competence</h5>
                            <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            <div class="accordion" id="accordionCompetence">
                                <div class="accordion-item rounded mt-4 border-top">
                                    <div class="text-center w-100 d-none li_sortable">
                                        <i class="bi bi-grip-horizontal fs-3 "></i>
                                    </div>
                                    <h2 class="accordion-header border" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="fw-bold fs-5">Developpemnt front-end</span>
                                                </div>
                                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                                            </div>

                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionCompetence">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Competence</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Niveau</label>
                                                    <input type="range" class="form-range" min="0" max="5" step="0.5">
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6 rounded border">
                                                    <label for=""
                                                        class="form-label fs-5 fw-bold ">Sous-competence</label>
                                                </div>
                                                <div class="col-6 d-flex align-items-center justify-content-end">
                                                    <button class="btn btn-primary"> Ajouter une
                                                        sous-competence</button>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end mt-3">
                                                <button href="#" class="btn btn-danger me-4"><i
                                                        class="bi bi-trash text-white fs-4 "></i></button>
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded mt-4 border-top">
                                    <div class="text-center w-100 d-none li_sortable">
                                        <i class="bi bi-grip-horizontal fs-3 "></i>
                                    </div>
                                    <h2 class="accordion-header border" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="fw-bold fs-5">Developpemnt front-end</span>
                                                </div>
                                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                                            </div>

                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse  "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionCompetence">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Competence</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Niveau</label>
                                                    <input type="range" class="form-range" min="0" max="5" step="0.5">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 rounded border">
                                                    <label for=""
                                                        class="form-label fs-5 fw-bold">Sous-competence</label>

                                                </div>
                                                <div class="col-6 d-flex align-items-center justify-content-end">
                                                    <button class="btn btn-primary"> Ajouter une
                                                        sous-competence</button>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end mt-3">
                                                <button href="#" class="btn btn-danger me-4"><i
                                                        class="bi bi-trash text-white fs-4 "></i></button>
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded mt-4 border-top">
                                    <div class="text-center w-100 d-none li_sortable">
                                        <i class="bi bi-grip-horizontal fs-3 "></i>
                                    </div>
                                    <h2 class="accordion-header border" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="true"
                                            aria-controls="collapseThree">
                                            <div class="d-flex justify-content-between w-100 align-items-center me-3">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="fw-bold fs-5">Developpemnt front-end</span>
                                                </div>
                                                <i class="bi bi-pen-fill fs-5 me-3"></i>
                                            </div>

                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionCompetence">
                                        <div class="accordion-body">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Competence</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 mt-3">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Niveau</label>
                                                    <input type="range" class="form-range" min="0" max="5" step="0.5">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 rounded border">
                                                    <label for=""
                                                        class="form-label fs-5 fw-bold">Sous-competence</label>
                                                </div>
                                                <div class="col-6 d-flex align-items-end justify-content-end">
                                                    <button class="btn btn-primary"> Ajouter une
                                                        sous-competence</button>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex justify-content-end mt-3">
                                                <button href="#" class="btn btn-danger me-4"><i
                                                        class="bi bi-trash text-white fs-4 "></i></button>
                                                <button
                                                    class="btn btn-primary d-flex align-items-center justify-content-center"><i
                                                        class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center w-100 mt-4">
                                <a href="#"
                                    class="  btn btn-outline-primary d-flex align-items-center justify-content-center fw-bold">
                                    <i class="bi bi-plus-lg fs-4 me-2"></i> Ajouter une competence
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6  mt-2 mb-2">
                <div class="card overflow-scroll" style="height: 100vh;">
                    <h5 class="card-header text-white" style="background-color: #1376ba;">Previsualisation</h5>
                    <div class="card-body h-100 d-flex justify-content-center align-items-center ">

                        <div class="card w-75 h-100 border ">
                            <?php 
                          require "../../class/Skill.php" ;
                          require "../../utils/Utils.php" ;
                          require "../../class/Experience.php" ;
                          require "../../class/Profil.php" ;
                             require "../Profil.component.php" ;
                          ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../JS/bootstrap.min.js"></script>
    <script src="../../JS/jquery-3.5.1.min.js"></script>
    <script src="../../JS/jquery-ui.min.js"></script>
    <!-- <script src="../../JS/app.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#accordionCompetence").sortable()
            $("#accordionExperience").sortable()
            $("#accordionCursus").sortable()

            $(".accordion-item").mouseenter((e) => {
                e.currentTarget.childNodes[1].classList.remove("d-none")
            })
            $(".accordion-item").mouseleave((e) => {
                e.currentTarget.childNodes[1].classList.add("d-none")
            })

            $(".")

            // $.ajax()
        })
    </script>
</body>

</html>