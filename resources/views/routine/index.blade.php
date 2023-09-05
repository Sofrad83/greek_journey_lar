@extends('default')

@section('page-title')
ROUTINES
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-routine.png')}}@endsection

@section('content')
<h5 class="text-center">Mes routines</h5>
<hr>
@if ($mes_routines->count())
    @foreach ($mes_routines as $routine)
        @include('routine.partials.routine-card', ['routine' => $routine])
        <br>
    @endforeach
@else
    Il n'y a aucune routine enregistré. Créez-en
@endif
<br>
<h5 class="text-center">Routines de mes amis</h5>
<hr>
@if ($routines_amis->count())
    @foreach ($routines_amis as $routine)
        @include('routine.partials.routine-card', ['routine' => $routine])
        <br>
    @endforeach
@else
    Aucune routine d'ami
@endif
<div class="fab-container fab-bas">
    <div class="fab fab-icon-holder fab-add" style="background-color: goldenrod;">
        <a title="Ajouter une routine" href="#" class="add-routine" style="font-size: 16px;">
            <i class="fas fa-plus fa-2x text-dark"></i>
        </a>
    </div>
</div>

{{-- MODAL --}}
@include('routine.partials.modal.ajouter')
@endsection

@section('custom_css')

@endsection

@section('scripts')
<script>
    var csrf = "{{ csrf_token() }}";
    var urlDeleteRoutine = "{{route('routine.delete')}}"
    var urlGetRoutine = "{{route('routine.get')}}"
    var urlGetFormRoutine = "{{route('routine.get-form')}}"
</script>
<script src="{{URL::asset('js/routine/script.js')}}?{{time()}}"></script>
@endsection