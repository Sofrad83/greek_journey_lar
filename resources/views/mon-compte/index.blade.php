@extends('default')

@section('page-title')
MON COMPTE
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-mon-compte.png')}}@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            @if ($user->img_url)
                <img src="{{URL::asset($user->img_url)}}" class="pdp-mon-compte">
                <br>
                <br>
                <a href="javascript:void(0)" class="text-gold mr-3 edit-pdp"><i class="fas fa-edit fa-2x"></i></a>
                <a href="javascript:void(0)" class="text-danger delete-pdp"><i class="fas fa-times fa-2x"></i></a>
            @else
                <i class="fas fa-circle text-gold pdp-mon-compte"></i>
                <br>
                <br>
                <a href="javascript:void(0)" class="text-gold edit-pdp"><i class="fas fa-edit fa-2x"></i></a>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <input type="text" class="form form-control form-custom" placeholder="Pseudo" value="{{$user->name}}" id="inputNom">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <input type="text" class="form form-control form-custom" placeholder="Email" value="{{$user->email}}" disabled>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <button class="btn btn-warning w-100" id="btnMettreAJour">Mettre à jour</button>
        </div>
    </div>
</div>


{{-- MODAL --}}
<!-- Modal -->
<div class="modal fade" id="modalEditPdp" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container-fluid">
                    {{-- <div class="row">
                        <div class="col text-center">
                            <h5>Utiliser une icone personalisée</h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-warning w-100" id="btnChangePdpCustom">Uploader une image</button>
                            <input type="file" class="hide-custom" accept="image/*">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col text-center">
                            <h4>OU</h4>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <br> --}}
                    <div class="row">
                        <div class="col text-center">
                            <h5>Utiliser une icone par défaut</h5>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col text-center mb-5">
                            <img src="{{URL::asset('img/greek/pdp1.png')}}" data-url="img/greek/pdp1.png" class="pdp-mon-compte" alt="">
                        </div>
                        <div class="col text-center">
                            <img src="{{URL::asset('img/greek/pdp2.png')}}" data-url="img/greek/pdp2.png" class="pdp-mon-compte" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center mb-5">
                            <img src="{{URL::asset('img/greek/pdp3.png')}}" data-url="img/greek/pdp3.png" class="pdp-mon-compte" alt="">
                        </div>
                        <div class="col text-center">
                            <img src="{{URL::asset('img/greek/pdp4.png')}}" data-url="img/greek/pdp4.png" class="pdp-mon-compte" alt="">
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
    var urlDeletePdp = "{{route('mon-compte.delete-pdp')}}"
    var urlChangePdp = "{{route('mon-compte.change-pdp')}}"
    var urlChangeInfos = "{{route('mon-compte.change-infos')}}"
    var urlChangePdpCustom = "{{route('mon-compte.change-pdp-custom')}}"
</script>
<script src="{{URL::asset('js/mon-compte/script.js')}}?{{time()}}"></script>
@endsection