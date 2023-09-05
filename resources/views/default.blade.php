<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#2B2B35">
  <!-- favicon  -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('/img/favicon/apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('/img/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('/img/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{URL::asset('/img/favicon/site.webmanifest')}}">
  <link rel="mask-icon" href="{{URL::asset('/img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  {{-- <link rel="shortcut icon" href="{{URL::asset('img/greek/favicon.ico')}}" type="image/x-icon"> --}}
  {{-- <link rel="apple-touch-icon" href="{{URL::asset('img/greek/favicon.png')}}"> --}}
  {{-- <link rel="icon" type="image/png" href="{{URL::asset('img/greek/favicon.png')}}"> --}}

  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{URL::asset('css/plugins/bootstrap.min.css')}}">
  <!-- font awesome css -->
  <link rel="stylesheet" href="{{URL::asset('plugins/fontawesome-free-6.4.2-web/css/all.css')}}">
  <link rel="stylesheet" href="{{URL::asset('fonts/AUGUSTUS.TTF')}}">
  <link rel="stylesheet" href="{{URL::asset('fonts/CapitalisTypOasis.ttf')}}">
  <link rel="stylesheet" href="{{URL::asset('fonts/GreekHouse_Symbolized_Free.ttf')}}">
  <link rel="stylesheet" href="{{URL::asset('fonts/Romanica.ttf')}}">

  <link rel="stylesheet" href="{{URL::asset('css/plugins/toastr.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/main.css')}}?{{time()}}">
  <link rel="stylesheet" href="{{URL::asset('css/burger.css')}}?{{time()}}">
  <style>
      .content:before{
        content: ' ';
        display: block;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        opacity: 0.3;
        background-image: url('@yield('background-img')');
        background-repeat: no-repeat;
        background-position: 50% 0;
        background-size: cover;
      }
  </style>
  @yield('custom_css')

  <title>Greek Journey 2.0</title>
</head>

<body>
    <div class="sidebar">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <img src="{{URL::asset('img/greek/drawer.png')}}" class="img-fluid" alt="">
                    <h4>GREEK JOURNEY</h4>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <a href="{{route('home')}}" class="text-gold"><strong>Accueil</strong></a>
                </div>
            </div>
            @if (Illuminate\Support\Facades\Auth::user())
                <br>
                <div class="row">
                    <div class="col">
                        <a href="{{route('seance.index')}}" class="text-gold"><strong>S'exercer</strong></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <a href="{{route('plan-entrainement.index')}}" class="text-gold"><strong>Plan d'entrainement</strong></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <a href="{{route('exercice.index')}}" class="text-gold"><strong>Exercices</strong></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <a href="{{route('routine.index')}}" class="text-gold"><strong>Routines</strong></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <a href="{{route('mes-amis.index')}}" class="text-gold"><strong>Mes amis</strong> {!!Illuminate\Support\Facades\Auth::user()->getDemandeEnAttente() ? "<span class='badge badge-pills badge-warning'>".Illuminate\Support\Facades\Auth::user()->getDemandeEnAttente()."</span>" : ""!!}</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <a href="{{route('mon-compte.index')}}" class="text-gold"><strong>Mon Compte</strong></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <a href="{{route('logout')}}" class="text-gold"><strong>Se déconnecter</strong></a>
                    </div>
                </div>
            @else
                <br>
                <div class="row">
                    <div class="col">
                        <a href="{{route('login')}}" class="text-gold"><strong>Se connecter</strong></a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <a href="{{route('register')}}" class="text-gold"><strong>Créer mon compte</strong></a>
                    </div>
                </div>
            @endif
            
        </div>
        <button class="sidebarBtn">
            <span></span>
        </button>
    </div>
    <div class="container-fluid p-3 content">
        <div class="row">
            <div class="col">
                <a href="" id="btnMenuBurger"><i class="fas fa-bars fa-2x text-gold"></i></a>
            </div>
            <div class="col text-center">
                <h3 class="big">
                    @yield("page-title")
                </h3>
            </div>
            <div class="col text-right">
                @if (Illuminate\Support\Facades\Auth::user() && Illuminate\Support\Facades\Auth::user()->img_url)
                    <img src="{{URL::asset(Illuminate\Support\Facades\Auth::user()->img_url)}}" class="pdp-default" alt="">
                @else
                    <i class="fas fa-circle text-gold pdp-default"></i>
                @endif
            </div>
        </div>
        <br>
        <div class="row" id="content-row">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>


    <!-- jquery js -->
    <script src="{{URL::asset('js/plugins/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/toastr.min.js')}}"></script>
    <!-- main js -->
    <script src="{{URL::asset('js/burger.js')}}?{{time()}}"></script>
    <script src="{{URL::asset('js/main.js')}}?{{time()}}"></script>
    @yield('scripts')
</body>

</html>
