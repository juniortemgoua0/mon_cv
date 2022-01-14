<div id="experience" class="card-body mr-3 tab-pane  fade show active" role="tabpanel" aria-labelledby="experience-tab">
    <h5 class="card-title">Edition de la section experience</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <div class="accordion" id="accordionExperience">
        <?php 
                                   $experience = Data::get_experience_data();
                                   $encodeExperience = array();
                                   foreach($experience as $ex){
                                      array_push($encodeExperience , ["poste"=>$ex->getPoste(),"entreprise"=>$ex->getEntreprise(),"datedebut"=>$ex->getDateDebut(),
                                        "datefin"=>$ex->getDateFin() , "liensite"=> $ex->getLienSite() , "realisation"=>$ex->getRealisation()]);
                                   }
                                   $iexperience= 0;
                                   foreach($experience as $e):
                                ?>
        <div class="accordion-item rounded mt-4 border-top " id="experience<?=$iexperience?>">
            <div class="text-center w-100 d-none li_sortable">
                <i class="bi bi-grip-horizontal fs-3 "></i>
            </div>
            <h2 class="accordion-header border" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExperience<?=$iexperience?>" aria-expanded="true"
                    aria-controls="collapseExperience<?=$iexperience?>">
                    <div class="d-flex justify-content-between w-100 align-items-center me-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="fw-bold fs-5 ExperiencePoste<?=$iexperience?>" id=""><?=$e->getPoste()?></span>
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
                                <input type="text" class="form-control" id="ExperiencePoste<?=$iexperience?>"
                                    value='<?=$e->getPoste()?>'>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label ">Entreprise</label>
                            <input type="text" class="form-control" id="ExperienceEntreprise<?=$iexperience?>"
                                value='<?=$e->getEntreprise()?>'>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="form-label">Date de debut</label>
                                <input type="date" class="form-control" id="ExperienceDateDebut<?=$iexperience?>"
                                    value='<?=$e->getDateDebut()?>'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="ExperienceDateFin<?=$iexperience?>"
                                    value='<?=$e->getDateFin()?>'>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">Reference de l'entreprise</label>
                            <input type="text" class="form-control" id="ExperienceLienSite<?=$iexperience?>"
                                value='<?=$e->getLienSite()?>'>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">Realisation</label>
                            <input type="text" class="form-control" id="ExperienceRealisation<?=$iexperience?>"
                                value='<?=$e->getRealisation()?>'>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end mt-3">
                        <button href="#" class="btn btn-danger me-4"><i
                                class="bi bi-trash text-white fs-4 "></i></button>
                        <button class="btn btn-primary d-flex align-items-center justify-content-center"
                            data-bs-toggle="collapse" data-bs-target="#collapseExperience<?=$iexperience?>"
                            aria-expanded="true" aria-controls="collapseOne"><i
                                class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                    </div>

                </div>
            </div>
        </div>
        <?php 
                                    $iexperience++; 
                                    endforeach 
                                ?>
    </div>
    <div class="text-center w-100 mt-4">
        <a href="" style="border: 1px dashed var(--primary-color);" id="AddExperience"
            class="btn btn-outline-primary d-flex align-items-center justify-content-center fw-bold">
            <i class="bi bi-plus-lg fs-4 me-2"></i> Ajouter une experience
        </a>
    </div>
</div>