<div id="competence" class="card-body mr-3 overflow-scroll tab-pane fade" role="tabpanel"
    aria-labelledby="competence-tab">
    <h5 class="card-title">Edition de la section competence</h5>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
    <div class="accordion" id="accordionCompetence">
        <?php 
                                    $skill = Data::get_skill_data();
                                    $i = 0;
                                    foreach($skill as $sk):
                                ?>
        <div class="accordion-item rounded mt-4 border-top">
            <div class="text-center w-100 d-none li_sortable">
                <i class="bi bi-grip-horizontal fs-3 "></i>
            </div>
            <h2 class="accordion-header border" id="headingSkill<?=$i?>">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSkill<?=$i?>" aria-expanded="true" aria-controls="collapseSkill<?=$i?>">
                    <div class="d-flex justify-content-between w-100 align-items-center me-3">
                        <div class="d-flex align-items-center justify-content-center ">
                            <span class="fw-bold fs-5 CompetenceTitle<?=$i?>"><?=$sk->getTitle()?></span>
                        </div>
                        <i class="bi bi-pen-fill fs-5 me-3"></i>
                    </div>

                </button>
            </h2>
            <div id="collapseSkill<?=$i?>" class="accordion-collapse collapse " aria-labelledby="headingSkill<?=$i?>"
                data-bs-parent="#accordionCompetence">
                <div class="accordion-body">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="" class="form-label">Competence</label>
                            <input type="text" class="form-control" id="CompetenceTitle<?=$i?>"
                                value="<?=$sk->getTitle()?>">
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="form-group">
                            <label for="" class="form-label">Niveau</label>
                            <input type="range" class="form-range" id="CompetenceLevel<?=$i?>"
                                value="<?=$sk->getLevel()?>" min="0" max="100" step="5">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 rounded border">
                            <label for="" class="form-label fs-5 fw-bold ">Sous-competence</label>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end">
                            <button class="btn btn-primary"> Ajouter une
                                sous-competence</button>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-end mt-3">
                        <button href="#" class="btn btn-danger me-4"><i
                                class="bi bi-trash text-white fs-4 "></i></button>
                        <button class="btn btn-primary d-flex align-items-center justify-content-center"
                            data-bs-toggle="collapse" data-bs-target="#collapseSkill<?=$i?>" aria-expanded="true"
                            aria-controls="collapseSkill<?=$i?>"><i
                                class="bi bi-check-lg fs-4 me-2"></i>Terminer</button>
                    </div>

                </div>
            </div>
        </div>
        <?php 
                                    $i++ ;
                                    endforeach
                                ?>
    </div>
    <div class="text-center w-100 mt-4">
        <a href="#" class="  btn btn-outline-primary d-flex align-items-center justify-content-center fw-bold">
            <i class="bi bi-plus-lg fs-4 me-2"></i> Ajouter une competence
        </a>
    </div>
</div>