<div class="card card-start-seance" data-form="#formStartSeance{{$routine->id}}" style="border-radius: 75px;">
    <div class="card-body">
        <form class="hide-custom" action="{{route('seance.start-seance')}}" method="POST" id="formStartSeance{{$routine->id}}">
            @csrf
            <input type="hidden" name="routine_id" value="{{$routine->id}}">
        </form>
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
            </div>
        </div>
    </div>
</div>