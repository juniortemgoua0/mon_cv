<div id="cursus" class="card-body mr-3 overflow-scroll tab-pane fade" role="tabpanel" aria-labelledby="cursus-tab">
    <h5 class="card-title">Edition de la section curcus</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <div class="accordion" id="accordionCursus">
        <?php 
                                    $cursus = Data::get_cursus_data();
                                    $encodeCursus = array();
                                   foreach($cursus as $c){
                                      array_push($encodeCursus , ["diplome"=>$c->getDiplome(),"ecoleobtention"=>$c->getEcoleObtention(),"dateobtention"=>$c->getDateObtention(),
                                                                    "specialisation"=>$c->getSpecialisation()]);
                                   }
                                    $icursus = 0 ;
                                    foreach($cursus as $c):
                                ?>
        <div class="accordion-item rounded mt-4 border-top">
            <div class="text-center w-100 d-none li_sortable">
                <i class="bi bi-grip-horizontal fs-3 "></i>
            </div>
            <h2 class="accordion-header border" id="headingCursus<?=$icursus?>">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseCursus<?=$icursus?>" aria-expanded="true"
                    aria-controls="collapseCursus<?=$icursus?>">
                    <div class="d-flex justify-content-between w-100 align-items-center me-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="fw-bold fs-5 CursusDiplome<?=$icursus?>"><?=$c->getDiplome()?></span>
                        </div>
                        <i class="bi bi-pen-fill fs-5 me-3"></i>
                    </div>

                </button>
            </h2>
            <div id="collapseCursus<?=$icursus?>" class="accordion-collapse collapse "
                aria-labelledby="headingCursus<?=$i?>" data-bs-parent="#accordionCursus">
                <div class="accordion-body">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="" class="form-label">Diplome</label>
                                <input type="text" class="form-control" id="CursusDiplome<?=$icursus?>"
                                    value="<?=$c->getDiplome()?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label ">Ecole</label>
                            <input type="text" class="form-control" id="CursusEcoleObtention<?=$icursus?>"
                                value="<?=$c->getEcoleObtention()?>">
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">Date d'obtention</label>
                            <input type="date" class="form-control" id="CursusDateObtention<?=$icursus?>"
                                value="<?=$c->getDateObtention()?>">
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">Specialisation</label>
                            <input type="text" class="form-control" id="CursusSpecialisation<?=$icursus?>"
                                value="<?=$c->getSpecialisation()?>">
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end mt-3">
                        <button href="#" class="btn btn-danger me-4"><i
                                class="bi bi-trash text-white fs-4 "></i></button>
                        <button class="btn btn-primary d-flex align-items-center justify-content-center"
                            data-bs-toggle="collapse" data-bs-target="#collapseCursus<?=$icursus?>" aria-expanded="true"
                            aria-controls="collapseCursus<?=$icursus?>"><i
                                class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                    </div>

                </div>
            </div>
        </div>

        <?php
                                    $icursus++ ; 
                                    endforeach
                                ?>
    </div>
    <div class="text-center w-100 mt-4">
        <a href="#" style="" class=" btn btn-outline-primary d-flex align-items-center justify-content-center fw-bold">
            <i class="bi bi-plus-lg fs-4 me-2"></i> Ajouter un cursus
        </a>
    </div>
</div>