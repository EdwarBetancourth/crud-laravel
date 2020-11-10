@extends('layout.master')
@section('content')
<div class="row">
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <div class="card mb-3" style="top: 10px">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{$arrayPeliculas['poster']}}" style="height:450px" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$arrayPeliculas['title']}}</h5>
                        <p class="card-text">
                        <h6 class="card-title">Año: </h6><small class="text-muted">{{$arrayPeliculas['year']}}</small>
                        </p>
                        <p class="card-text">
                        <h6 class="card-title">Director: </h6><small
                            class="text-muted">{{$arrayPeliculas['director']}}</small></p>
                        <p class="card-text">
                        <h6 class="card-title">Resumen: </h6>{{$arrayPeliculas['synopsis']}}.</p>
                        <p class="card-text">
                        <form action="/catalog/rented/{{$arrayPeliculas['id']}}" method="post">
                            @csrf
                            {{method_field('PUT')}}
                            @if($arrayPeliculas['rented'] === 0)
                            <input type="text" class="form-control" id="rented" name="rented" value="1" hidden>
                            <h6 class="card-title">Estado: </h6><small class="text-muted">Película
                                disponible</small></p>
                            <button type="submit" class="btn btn-primary">Alquilar pelicula</button>
                            @else
                            <input type="text" class="form-control" id="rented" name="rented" value="0" hidden>
                            <h6 class="card-title">Estado: </h6><small class="text-muted">Película actualmente
                                alquilada</small></p>
                            <button type="submit" class="btn btn-dark">Devolver pelicula</button>
                            @endif
                        </form>
                        <hr />
                        <div class="row align-items-start">
                            <div class="col-3">
                                <a type="button" class="btn btn-warning"
                                    href="{{ url('/catalog/edit/'. $arrayPeliculas['id']) }}">Editar pelicula</a>
                            </div>
                            <div class="col-3">
                                <a type="button" class="btn btn-light" href="{{ url('/catalog') }}">Volver al
                                    listado</a>
                            </div>
                            <div class="col-3">
                                <form action="/catalog/delete/{{$arrayPeliculas['id']}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Eliminar pelicula
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar pelicula
                                                        {{$arrayPeliculas['title']}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Esta seguro
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-danger">Si</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop
