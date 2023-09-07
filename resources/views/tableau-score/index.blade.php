@extends('default')

@section('page-title')
SCORES
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-tableau-score.png')}}@endsection

@section('content')
<h5 class="text-center">Volumes déplacés sur la semaine ({{$semaine_en_cours}})</h5>
<hr>
<div class="card">
    <div class="card-body">
        <table class="table w-100 text-gold">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Pseudo</th>
                    <th>Volume (en kg)</th>
                    <th>Nb de séances</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $index = 1;
                @endphp
                @foreach ($mes_amis_tab as $id=>$volume)
                    <tr>
                        <td>
                            @if ($index == 1)
                                <i class="fas fa-trophy fa-lg text-gold"></i>
                            @elseif($index == 2)
                                <i class="fas fa-trophy fa-lg" style="color: silver"></i>
                            @elseif($index == 3)
                                <i class="fas fa-trophy fa-lg text-gold" style="color: #CD7F32"></i>
                            @else
                                {{$index}}
                            @endif
                        </td>
                        <td>{{$mes_amis->where('id', $id)->first()->name}}</td>
                        <td>{{$volume}}</td>
                        <td>{{$mes_amis->where('id', $id)->first()->nb_seance}}</td>
                    </tr>
                    @php
                        $index ++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('custom_css')

@endsection

@section('scripts')
<script>
    var csrf = "{{ csrf_token() }}";
</script>
@endsection