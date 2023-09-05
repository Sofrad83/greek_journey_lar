<div class="card" style="border-radius: 75px;">
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <img src="{{URL::asset('img/greek/routines.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col d-flex align-items-center">
                    <div>
                        <h5><strong>{{$routine->nom}}</strong></h5>
                        {{$routine->description}}
                    </div>
                </div>
                <div class="col-2 p-0 d-flex justify-content-between align-items-center">
                    <a href="javascript:void(0)" class="modif-routine" data-id="{{$routine->id}}"><i class="fas fa-edit fa-2x text-gold"></i></a>
                    <a href="javascript:void(0)" class="del-routine" data-id="{{$routine->id}}"><i class="fas fa-times fa-2x text-danger"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>