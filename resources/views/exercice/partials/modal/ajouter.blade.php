<!-- Modal -->
<div class="modal fade" id="modalAjouterExercice" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('exercice.ajouter')}}" id="formAjouterExercice" autocomplete="off">
                    <input type="hidden" name="id" id="inputHiddenIdExercice">
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form form-control form-custom" placeholder="Nom" name="nom" id="inputNomExercice">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <textarea name="description" placeholder="Description" cols="30" rows="10" class="form form-control form-custom" id="inputDescriptionExercice"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <select class="form form-control form-custom" name="groupe_musculaire_id">
                                    @foreach ($muscles as $m)
                                        <option value="{{$m->id}}">{{$m->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col text-center">
                                <div class="form-check border border-warning rounded p-3">
                                    <input class="form-check-input" type="radio" name="private" id="radioPublique" value="0">
                                    <label class="form-check-label" for="radioPublique">
                                      Publique
                                    </label>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="form-check border border-warning rounded p-3">
                                    <input class="form-check-input" type="radio" name="private" id="radioPrivate" value="1" checked>
                                    <label class="form-check-label" for="radioPrivate">
                                      Privé
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-warning w-100" type="submit" id="btnSubmitFormAjouterExercice">Ajouter</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>