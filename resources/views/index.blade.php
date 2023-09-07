@extends('default')

@section('page-title')
GREEK JOURNEY
@endsection

@section('background-img'){{URL::asset('img/greek/home_background.png')}}@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3 class="big">QUOTE DIEI</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{$citation->citation}}
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="float-right big">{{strtoupper($citation->auteur)}}</h5>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="container">
                    <!--slider-->
                    <div class="main-carousel">
                        @if ($user)
                            <!--card-->
                            <div class="card carousel-cell w-100 p-0 mx-3 text-center" data-href="{{route('seance.index')}}">
                                <div class="card-body p-0" style="background: #0f0f0b">
                                    <img src="{{URL::asset('img/greek/carousel-start-seance.png')}}" class="img-fluid" alt="">
                                    <h5>S'exercer</h5>
                                </div>
                            </div>
                            <!--card-->
                            <!--card-->
                            <div class="card carousel-cell w-100 p-0 mx-3 text-center" data-href="{{route('tableau-score.index')}}">
                                <div class="card-body p-0" style="background: #0f0f0b">
                                    <img src="{{URL::asset('img/greek/carousel-tableau-score.png')}}" class="img-fluid" alt="">
                                    <h5>Tableau des scores</h5>
                                </div>
                            </div>
                            <!--card-->
                            <!--card-->
                            <div class="card carousel-cell w-100 p-0 mx-3 text-center" data-href="{{route('plan-entrainement.index')}}">
                                <div class="card-body p-0" style="background: #0f0f0b">
                                    <img src="{{URL::asset('img/greek/carousel-plan-entrainement.png')}}" class="img-fluid" alt="">
                                    <h5>Plan d'entrainement</h5>
                                </div>
                            </div>
                            <!--card-->
                            <!--card-->
                            <div class="card w-100 carousel-cell mx-3 text-center" data-href="{{route('exercice.index')}}">
                                <div class="card-body p-0" style="background: #0f0f0b">
                                    <img src="{{URL::asset('img/greek/carousel-exercice.png')}}" class="img-fluid" alt="">
                                    <h5>Mes exercices</h5>
                                </div>
                            </div>
                            <!--card-->
                            <!--card-->
                            <div class="card carousel-cell w-100 p-0 mx-3 text-center" data-href="{{route('routine.index')}}">
                                <div class="card-body p-0" style="background: #0f0f0b">
                                    <img src="{{URL::asset('img/greek/carousel-routine.png')}}" class="img-fluid" alt="">
                                    <h5>Mes routines</h5>
                                </div>
                            </div>
                            <!--card-->
                            <!--card-->
                            <div class="card carousel-cell w-100 p-0 mx-3 text-center" data-href="{{route('mes-amis.index')}}">
                                <div class="card-body p-0" style="background: #0f0f0b">
                                    <img src="{{URL::asset('img/greek/carousel-mes-amis.png')}}" class="img-fluid" alt="">
                                    <h5>Mes amis</h5>
                                </div>
                            </div>
                            <!--card-->
                            <!--card-->
                            <div class="card carousel-cell w-100 p-0 mx-3 text-center" data-href="{{route('mon-compte.index')}}">
                                <div class="card-body p-0" style="background: #0f0f0b">
                                    <img src="{{URL::asset('img/greek/carousel-mon-compte.png')}}" class="img-fluid" alt="">
                                    <h5>Mon compte</h5>
                                </div>
                            </div>
                            <!--card-->
                        @else
                            <!--card-->
                            <div class="card carousel-cell w-100 p-0 mx-3 text-center" data-href="{{route('login')}}">
                                <div class="card-body p-0" style="background: #0f0f0b">
                                    <img src="{{URL::asset('img/greek/carousel-login.png')}}" class="img-fluid" alt="">
                                    <h5>Se connecter</h5>
                                </div>
                            </div>
                            <!--card-->
                            <!--card-->
                            <div class="card carousel-cell w-100 p-0 mx-3 text-center" data-href="{{route('register')}}">
                                <div class="card-body p-0" style="background: #0f0f0b">
                                    <img src="{{URL::asset('img/greek/carousel-register.png')}}" class="img-fluid" alt="">
                                    <h5>Créer mon compte</h5>
                                </div>
                            </div>
                            <!--card-->
                        @endif
                        
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_css')
<link rel="stylesheet" href="{{URL::asset('plugins/carousel/main.scss')}}">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" href="{{URL::asset('css/plugins/flickity.min.css')}}">
@endsection

@section('scripts')
<script src="{{URL::asset('js/plugins/flickity.pkgd.min.js')}}"></script>
<script src="{{URL::asset('plugins/carousel/main.js')}}"></script>
@endsection