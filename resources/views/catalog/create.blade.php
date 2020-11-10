@extends('layout.master')
@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Añadir pelicula</h4>
    </div>
    <div class="card-body">
        <form action="/catalog/create" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Titulo*</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="year">Año*</label>
                <input type="number" class="form-control @error('year') is-invalid @enderror" id="year" name="year">
                @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="director">Director*</label>
                <input type="text" class="form-control @error('director') is-invalid @enderror" id="director" name="director">
                @error('director')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">Poster*</label>
                <input type="text" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster">
                @error('poster')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="text" class="form-control" id="rented" name="rented" value="0" hidden>
            <div class="form-group">
                <label for="synopsis">Resumen*</label>
                <textarea class="form-control @error('synopsis') is-invalid @enderror" id="synopsis" name="synopsis" rows="3"></textarea>
                @error('synopsis')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Añadir pelicula</button>
        </form>
    </div>
</div>
@stop
