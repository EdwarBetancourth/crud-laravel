@extends('layout.master')
@section('content')
    <h4>Listado de pelicula</h4>
<div class="row">
    @foreach( $arrayPeliculas as $key => $pelicula )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        <a href="{{ url('/catalog/show/' . $pelicula['id'] ) }}">
            <img src="{{$pelicula['poster']}}" style="height:200px" />
            <h6 style="min-height:45px;margin:5px 0 10px 0;color: black">{{$pelicula['title']}}</h6>
        </a>
    </div>
    @endforeach
</div>
@stop
