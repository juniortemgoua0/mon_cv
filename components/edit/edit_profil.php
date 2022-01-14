<div id="profil" class="card-body mr-3 tab-pane  fade" role="tabpanel" aria-labelledby="profil-tab">
    <h5 class="card-title">Edition de la section profil</h5>

    <div class="row mt-4">
        <div class=" col-4 col-sm-3 d-flex flex-column">
            <label for="photo" class="form-label">Photo</label>
            <div class="card flex-grow-1 d-flex justify-content-center align-items-center position-relative photo">
                <i class="bi bi-camera-fill fs-2"></i>
                <input type="file" name="photo" class=" position-absolute top-0 end-0 bottom-0 start-0 opacity-0"
                    id="photo">
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" id="nom" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" id="prenom" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-3">
        <div class="form-group">
            <label for="metier" class="form-label">Metier</label>
            <input type="text" id="metier" class="form-control">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-3">
            <div class="form-group">
                <label for="indicatif" class="form-label">Indicatif</label>
                <select name="indicatif" id="indicattif" class="form-select">
                    <option value="237">237</option>
                    <option value="224">224</option>
                </select>
            </div>
        </div>
        <div class="col-9 ">
            <div class="form-group">
                <label for="telephone" class="form-label">Numero de telephone</label>
                <input type="text" id="telephone" class="form-control">
            </div>
        </div>
    </div>


    <div class="col-12 mt-3">
        <div class="form-group">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" id="adresse" class="form-control">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-4">
            <div class="form-group">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" id="ville" class="form-control">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="pays" class="form-label">Pays</label>
                <input type="text" id="pays" class="form-control">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="origine" class="form-label">Origine</label>
                <input type="text" id="origine" class="form-control">
            </div>
        </div>
    </div>

    <div class="col-12 mt-3">
        <div class="form-group">
            <label for="date_naissance" class="form-label">Date de naissance</label>
            <input type="date" id="date_naissance" class="form-control">
        </div>
    </div>

    <div class="col-12 mt-3">
        <div class="form-group">
            <label for="" class="form-label">Reseaux sociaux de communication</label>
            <div class="chips chips-placeholder form-control d-flex flex-wrap"></div>
        </div>
    </div>

    <div class="col-12 mt-3">
        <div class="form-group">
            <label for="" class="form-label">Reseaux sociaux de travail</label>
            <div class="chips chips-placeholder form-control"></div>
        </div>
    </div>


    <div class="text-center w-100 mt-4">
        <a href="#" class="  btn btn-outline-primary d-flex align-items-center justify-content-center fw-bold">
            <i class="bi bi-plus-lg fs-4 me-2"></i> Ajouter un champ
        </a>
    </div>
</div>