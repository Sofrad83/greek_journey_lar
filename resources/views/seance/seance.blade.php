@extends('default')

@section('page-title')
S'EXERCER
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-start-seance.png')}}@endsection

@section('content')
<div class="card-chrono card" style="border-radius: 75px;">
    <div class="card-body h-100 p-0 text-center">
        <div class="container-fluid h-100 p-0 m-0">
            <div class="row p-0 m-0">
                <div class="col-7 p-0 m-0 d-flex align-items-center justify-content-end">
                    <p class="text-chrono">00:00:00</p>
                </div>
                <div class="col p-0 px-3 m-0 d-flex align-items-center">
                    <a href="javascript:void(0)" id="btnPlayChrono" class="p-2"><i class="fas fa-play fa-2x text-gold"></i></a>
                    <a href="javascript:void(0)" id="btnPauseChrono" class="p-2"><i class="fas fa-pause fa-2x text-gold"></i></a>
                    <a href="javascript:void(0)" id="btnStopChrono" class="p-2"><i class="fas fa-stop fa-2x text-gold"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid overflow-auto">
    <div class="row">
        <div class="col text-center">
            <h5>Séance {{$routine->nom}}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button class="btn btn-warning w-100 btn-terminer-seance"><i class="fas fa-check"></i> Terminer la séance</button>
        </div>
    </div>
    <hr>
    @foreach ($routine->exercices as $exercice)
        @include('seance.partials.exercice')
        <hr>
    @endforeach
    <div class="row last-row-seance">
        <div class="col">
            <button class="btn btn-warning w-100 btn-terminer-seance"><i class="fas fa-check"></i> Terminer la séance</button>
        </div>
    </div>
</div>

{{-- MODAL --}}
<!-- Modal -->
<div class="modal fade" id="modalTerminerSeance" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Voulez-vous vraiment terminer la séance ?</h3>
            </div>
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-danger w-100" data-dismiss="modal">Non</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-warning w-100" id="btnTerminerSeance">Oui</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTerminerSeanceNon" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3>Validez d'abord toutes vos séries pour terminer l'entrainement.</h3>
            </div>
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-warning w-100" data-dismiss="modal">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_css')

@endsection

@section('scripts')
<script>
    var csrf = "{{ csrf_token() }}";
    var urlStoreSeance = "{{route('seance.store-seance')}}"
</script>
<script src="{{URL::asset('js/seance/script.js')}}?{{time()}}"></script>
@endsection