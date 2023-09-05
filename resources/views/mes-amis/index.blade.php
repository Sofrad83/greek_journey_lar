@extends('default')

@section('page-title')
MES AMIS
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-mes-amis.png')}}@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <h5>Demandes d'amis @if ($demandes->count() > 0)
                                    <span class="badge badge-pills badge-warning">{{$demandes->count()}}</span>
                                @endif</h5>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="container-fluid">
                                @foreach ($demandes as $d)
                                <div class="row">
                                    <div class="col-2 pr-0">
                                        @if ($d->demandeur->img_url)
                                            <img src="{{URL::asset($d->demandeur->img_url)}}" class="pdp-default" alt="">
                                        @else
                                            <i class="fas fa-circle text-gold pdp-default"></i>
                                        @endif
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        {{$d->demandeur->name}}
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-warning w-100 accept-demande" data-id="{{$d->id}}">Accepter</button>
                                    </div>
                                </div>
                                @endforeach
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
            <div class="card">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <h5>Mon code ami #</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-10">
                                <input type="text" class="form form-control form-custom" readonly value="{{$user->code_ami}}" id="inputCodeAmi">
                            </div>
                            <div class="col-1 px-0">
                                <button class="btn btn-warning" id="btnCopieCodeAmi"><i class="fas fa-copy"></i></button>
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
            <div class="card">
                <div class="card-body">
                    <form id="formDemandeAmi" autocomplete="off" action="{{route('mes-amis.demande-ami')}}">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <h5>Ajouter un ami</h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="code_ami" class="form form-control form-custom" placeholder="Entrer un code ami #" id="inputEntrerCodeAmi">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-warning w-100" type="submit">Envoyer une demande</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <h5>Liste d'amis</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="container-fluid">
                                    @foreach ($mes_amis as $a)
                                    <div class="row">
                                        <div class="col-2 pr-0">
                                            @if ($a->img_url)
                                                <img src="{{URL::asset($a->img_url)}}" class="pdp-default" alt="">
                                            @else
                                                <i class="fas fa-circle text-gold pdp-default"></i>
                                            @endif
                                        </div>
                                        <div class="col d-flex align-items-center">
                                            {{$a->name}}
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-warning w-100 retirer-ami" data-id="{{$a->id}}">Retirer</button>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
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
    var urlAcceptDemande = "{{route('mes-amis.accept-demande')}}"
    var urlRetirerAmi = "{{route('mes-amis.retirer-ami')}}"
</script>
<script src="{{URL::asset('js/mes-amis/script.js')}}?{{time()}}"></script>
@endsection