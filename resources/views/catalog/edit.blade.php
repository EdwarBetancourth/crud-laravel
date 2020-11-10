@extends('layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Modificar pelicula</h4>
    </div>
    <div class="card-body">
        <form action="/catalog/edit/{{$arrayPeliculas['id']}}" method="post">
            @csrf
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="title">Titulo*</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$arrayPeliculas['title']}}">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="year">Año*</label>
                <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{$arrayPeliculas['year']}}">
                @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="director">Director*</label>
                <input type="text" class="form-control @error('director') is-invalid @enderror" id="director" name="director"
                    value="{{$arrayPeliculas['director']}}">
                @error('director')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">Poster*</label>
                <input type="text" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster" value="{{$arrayPeliculas['poster']}}">
                @error('poster')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="rented">Rented*</label>
                <select type="text" class="form-control @error('rented') is-invalid @enderror" id="rented" name="rented"
                    value="{{$arrayPeliculas['rented']}}">
                    @if($arrayPeliculas['rented'] === 0)
                    <option value="0">Rentar pelicula</option>
                    <option value="1">Devolver Pelicula</option>
                    @else
                    <option value="1">Devolver Pelicula</option>
                    <option value="0">Rentar pelicula</option>
                    @endif
                </select>
                @error('rented')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="synopsis">Resumen*</label>
                <textarea class="form-control @error('synopsis') is-invalid @enderror" id="synopsis" name="synopsis"
                    rows="3">{{$arrayPeliculas['synopsis']}}</textarea>
                @error('synopsis')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Modificar pelicula</button>
        </form>
    </div>
</div>
@stop
