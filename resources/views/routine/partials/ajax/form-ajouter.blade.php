@if ($routine == null)
<form action="{{route('routine.ajouter')}}" id="formAjouterRoutine" autocomplete="off">
    <input type="hidden" name="id" id="inputHiddenIdRoutine">
    <input type="hidden" name="user_id" value="{{$user->id}}">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <input type="text" class="form form-control form-custom" placeholder="Nom" name="nom" id="inputNomRoutine" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <textarea name="description" cols="30" rows="10" placeholder="Description" class="form form-control form-custom" id="inputDescriptionRoutine" required></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <table id="tableExercicesRoutine" class="w-100 text-center">
                    <thead>
                        <tr>
                            <th class="hide-custom">id</th>
                            <th>Exercices</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableTbodyExercice">
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="hide-custom"></td>
                            <td>
                                <select id="selectAjouterExercice" class="form form-control form-custom">
                                    <option value="">Ajouter un Exercice</option>
                                    @foreach ($mes_exercices->groupBy('groupe_musculaire_id') as $exos)
                                        <optgroup label="{{$exos->first()->muscle->nom}}">
                                            @foreach ($exos as $e)
                                                <option value="{{$e->id}}">{{$e->nom}}</option>   
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </td>
                            <td><button class="btn btn-sm btn-warning" id="btnAddExerciceToRoutine" type="button"><i class="fas fa-plus"></i></button></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <button class="btn btn-warning w-100" type="submit" id="btnSubmitFormAjouterRoutine">Ajouter</button>
            </div>
        </div>
    </div>
</form>
@else
<form action="{{route('routine.ajouter')}}" id="formAjouterRoutine" autocomplete="off">
    <input type="hidden" name="id" id="inputHiddenIdRoutine" value="{{$routine->id}}">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <input type="text" class="form form-control form-custom" placeholder="Nom" name="nom" id="inputNomRoutine" value="{{$routine->nom}}" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <textarea name="description" cols="30" rows="10" placeholder="Description" class="form form-control form-custom" id="inputDescriptionRoutine" required>{{$routine->description}}</textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <table id="tableExercicesRoutine" class="w-100 text-center">
                    <thead>
                        <tr>
                            <th class="hide-custom">id</th>
                            <th>Exercices</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableTbodyExercice">
                        @foreach ($routine->exercices->sortBy('pivot.ordre') as $exercice)
                            <tr>
                                <td class="hide-custom">{{$exercice->id}}</td>
                                <td>{{$exercice->nom}}</td>
                                <td><a href="javascript:void(0)" class="remove-exercice text-danger"><i class="fas fa-times fa-2x"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="hide-custom"></td>
                            <td>
                                <select id="selectAjouterExercice" class="form form-control form-custom">
                                    <option value="">Ajouter un Exercice</option>
                                    @foreach ($mes_exercices->groupBy('groupe_musculaire_id') as $exos)
                                        <optgroup label="{{$exos->first()->muscle->nom}}">
                                            @foreach ($exos as $e)
                                                <option value="{{$e->id}}">{{$e->nom}}</option>   
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </td>
                            <td><button class="btn btn-sm btn-warning" id="btnAddExerciceToRoutine" type="button"><i class="fas fa-plus"></i></button></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col text-center">
                <div class="form-check border border-warning rounded p-3">
                    <input class="form-check-input" type="radio" name="private" id="radioPublique" value="0" {{$routine->private ? "" : "checked"}}>
                    <label class="form-check-label" for="radioPublique">
                      Publique
                    </label>
                </div>
            </div>
            <div class="col text-center">
                <div class="form-check border border-warning rounded p-3">
                    <input class="form-check-input" type="radio" name="private" id="radioPrivate" value="1" {{$routine->private ? "checked" : ""}}>
                    <label class="form-check-label" for="radioPrivate">
                      Privé
                    </label>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <button class="btn btn-warning w-100" type="submit" id="btnSubmitFormAjouterRoutine">Modifier</button>
            </div>
        </div>
    </div>
</form>
@endif