@extends('default')

@section('page-title')
PLAN D'ENTRAINEMENT
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-plan-entrainement.png')}}@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <h5>Lundi</h5>
        </div>
        <div class="col">
            <select class="form form-control form-custom assign-routine" data-jour_id="1">
                <option value="">Repos</option>
                @foreach ($mes_routines as $r)
                    <option value="{{$r->id}}" {{($plan_entrainement->where('jour_id', 1)->first()->routine_id ?? 0) == $r->id ? "selected" : ""}}>{{$r->nom}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-4">
            <h5>Mardi</h5>
        </div>
        <div class="col">
            <select class="form form-control form-custom assign-routine" data-jour_id="2">
                <option value="">Repos</option>
                @foreach ($mes_routines as $r)
                    <option value="{{$r->id}}" {{($plan_entrainement->where('jour_id', 2)->first()->routine_id ?? 0) == $r->id ? "selected" : ""}}>{{$r->nom}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-4">
            <h5>Mercredi</h5>
        </div>
        <div class="col">
            <select class="form form-control form-custom assign-routine" data-jour_id="3">
                <option value="">Repos</option>
                @foreach ($mes_routines as $r)
                    <option value="{{$r->id}}" {{($plan_entrainement->where('jour_id', 3)->first()->routine_id ?? 0) == $r->id ? "selected" : ""}}>{{$r->nom}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-4">
            <h5>Jeudi</h5>
        </div>
        <div class="col">
            <select class="form form-control form-custom assign-routine" data-jour_id="4">
                <option value="">Repos</option>
                @foreach ($mes_routines as $r)
                    <option value="{{$r->id}}" {{($plan_entrainement->where('jour_id', 4)->first()->routine_id ?? 0) == $r->id ? "selected" : ""}}>{{$r->nom}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-4">
            <h5>Vendredi</h5>
        </div>
        <div class="col">
            <select class="form form-control form-custom assign-routine" data-jour_id="5">
                <option value="">Repos</option>
                @foreach ($mes_routines as $r)
                    <option value="{{$r->id}}" {{($plan_entrainement->where('jour_id', 5)->first()->routine_id ?? 0) == $r->id ? "selected" : ""}}>{{$r->nom}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-4">
            <h5>Samedi</h5>
        </div>
        <div class="col">
            <select class="form form-control form-custom assign-routine" data-jour_id="6">
                <option value="">Repos</option>
                @foreach ($mes_routines as $r)
                    <option value="{{$r->id}}" {{($plan_entrainement->where('jour_id', 6)->first()->routine_id ?? 0) == $r->id ? "selected" : ""}}>{{$r->nom}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-4">
            <h5>Dimanche</h5>
        </div>
        <div class="col">
            <select class="form form-control form-custom assign-routine" data-jour_id="7">
                <option value="">Repos</option>
                @foreach ($mes_routines as $r)
                    <option value="{{$r->id}}" {{($plan_entrainement->where('jour_id', 7)->first()->routine_id ?? 0) == $r->id ? "selected" : ""}}>{{$r->nom}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <br>
</div>
@endsection

@section('custom_css')

@endsection

@section('scripts')
<script>
    var csrf = "{{ csrf_token() }}";
    var urlAssignRoutine = "{{route('plan-entrainement.assign-routine')}}"
</script>
<script src="{{URL::asset('js/plan-entrainement/script.js')}}?{{time()}}"></script>
@endsection