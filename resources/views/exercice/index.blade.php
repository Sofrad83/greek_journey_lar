@extends('default')

@section('page-title')
EXERCICES
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-exercice.png')}}@endsection

@section('content')
@if ($exercices->count())
    @foreach ($exercices as $exercice)
        @include('exercice.partials.exercice-card', ['exercice' => $exercice])
        <br>
    @endforeach
@else
    Il n'y a aucun exercice enregistré. Créez-en
@endif
<div class="fab-container fab-bas">
    <div class="fab fab-icon-holder fab-add" style="background-color: goldenrod;">
        <a title="Ajouter un exercice" href="#" class="add-exercice" style="font-size: 16px;">
            <i class="fas fa-plus fa-2x text-dark"></i>
        </a>
    </div>
</div>

{{-- MODAL --}}
@include('exercice.partials.modal.ajouter')
@endsection

@section('custom_css')

@endsection

@section('scripts')
<script>
    var csrf = "{{ csrf_token() }}";
    var urlDeleteExercice = "{{route('exercice.delete')}}"
    var urlGetExercice = "{{route('exercice.get')}}"
</script>
<script src="{{URL::asset('js/exercice/script.js')}}?{{time()}}"></script>
@endsection