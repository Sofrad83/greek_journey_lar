<div class="card" style="border-radius: 75px;">
    <div class="card-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    @if ($mine)
                        <img src="{{URL::asset('img/greek/routines.png')}}" class="img-fluid" alt="">
                    @else
                        @if ($routine->user->img_url)
                            <img src="{{URL::asset($routine->user->img_url)}}" class="pdp-default" alt="">
                        @else
                            <i class="fas fa-circle text-gold pdp-default"></i>
                        @endif <br>
                        {{$routine->user->name}}
                    @endif
                </div>
                <div class="col d-flex align-items-center">
                    <div>
                        <h5><strong>{{$routine->nom}}</strong></h5>
                        {{$routine->description}}
                    </div>
                </div>
                <div class="col-2 p-0 d-flex justify-content-between align-items-center">
                    @if ($mine)
                        <a href="javascript:void(0)" class="modif-routine" data-id="{{$routine->id}}"><i class="fas fa-edit fa-2x text-gold"></i></a>
                        @if (!$routine->is_saved)
                            <a href="javascript:void(0)" class="del-routine" data-id="{{$routine->id}}"><i class="fas fa-times fa-2x text-danger"></i></a>
                        @endif
                    @else
                    <a href="javascript:void(0)" class="save-routine" data-id="{{$routine->id}}">
                        @if (in_array($routine->id, $routine_saved))
                            <i class="fas fa-bookmark fa-2x text-gold"></i>   
                        @else
                            <i class="far fa-bookmark fa-2x text-gold"></i>
                        @endif
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>