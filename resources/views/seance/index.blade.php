@extends('default')

@section('page-title')
S'EXERCER
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-start-seance.png')}}@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <h5>Routine du jour</h5>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            @if ($mes_routines->where('id', $routine_du_jour)->count())
                @foreach ($mes_routines->where('id', $routine_du_jour) as $routine)
                    @include('seance.partials.routine-card', ['routine' => $routine])
                    <br>
                @endforeach
            @else
                Pas de routine prévu aujourd'hui. C'est un jour de repos.
            @endif
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col text-center">
            <h5>Autres routines</h5>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            @if ($mes_routines->count())
                @foreach ($mes_routines->where('id', '!=', $routine_du_jour) as $routine)
                    @include('seance.partials.routine-card', ['routine' => $routine])
                    <br>
                @endforeach
            @else
                Il n'y a aucune routine enregistré. Créez-en pour commencer une séance
            @endif
        </div>
    </div>
</div>
@endsection

@section('custom_css')

@endsection

@section('scripts')
<script>
    var csrf = "{{ csrf_token() }}";
</script>
<script src="{{URL::asset('js/seance/script.js')}}?{{time()}}"></script>
@endsection