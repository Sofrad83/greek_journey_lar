@extends('default')

@section('page-title')
BRAVO
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-start-seance.png')}}@endsection

@section('content')
<canvas id="confetti-canvas"></canvas>
<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="card card-recap">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-center">
                                <img src="{{URL::asset($comparatif_volume->img_url)}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 class="text-center">Félicitations ! Tu as soulevé {{$volume}} Kg.</h3>
                                <h5 class="text-center">{{$comparatif_volume->description}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <a href="{{route('home')}}" class="btn btn-warning w-100">Retour à l'accueil</a>
        </div>
    </div>
</div>
@endsection

@section('custom_css')
<style>
    #confetti-canvas {
        position: fixed; 
        z-index: 999; 
        top: 0; 
        left: 0; 
        width: 100vw; 
        height: 100vh; 
        pointer-events: none;
    }
</style>
@endsection

@section('scripts')
<script>
    var csrf = "{{ csrf_token() }}";
</script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
<script src="{{URL::asset('js/seance/recap.js')}}?{{time()}}"></script>
@endsection