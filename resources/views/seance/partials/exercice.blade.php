<div class="container-fluid p-0">
    <div class="row">
        <div class="col-3 p-0">
            <img src="{{URL::asset('img/greek/exercice.png')}}" class="img-fluid" alt="">
        </div>
        <div class="col">
            <h5>{{$exercice->nom}}</h5>
            <p>{{$exercice->description}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table-gold text-center bg-custom table-exercice" data-exercice="{{$exercice->id}}">
                <thead>
                    <tr>
                        <th>Réps</th>
                        <th>Poids (kg)</th>
                        <th><i class="fas fa-check text-white"></i></th>
                    </tr>
                </thead>
                <tbody id="{{$exercice->id}}Tbody">
                    @foreach ($exercice->getLastSeries() as $serie)
                        <tr>
                            <td class="td-rep"><input type="text" class="w-100" value="{{$serie->nb_rep}}"></td>
                            <td class="td-poids"><input type="text" class="w-100" value="{{$serie->poids}}"></td>
                            <td><button class="btn btn-white btn-sm btn-confirm-serie"><i class="fas fa-check"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td><input type="text" class="w-100" id="rep{{$exercice->id}}"></td>
                        <td><input type="text" class="w-100" id="poids{{$exercice->id}}"></td>
                        <td><button class="btn btn-white btn-sm btn-add-serie" data-target="#{{$exercice->id}}Tbody" data-target_rep="#rep{{$exercice->id}}" data-target_poids="#poids{{$exercice->id}}"><i class="fas fa-plus"></i></button></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>