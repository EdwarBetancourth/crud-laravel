<?php

namespace App\Http\Controllers;

use App\peliculas;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function getIndex(){
        return view('catalog.index', array('arrayPeliculas'=>peliculas::all()));
    }

    public function getShow($id){
        return view('catalog.show', array('arrayPeliculas'=>peliculas::findOrFail($id)));
    }

    public function getCreate(){
        return view('catalog.create');
    }

    public function save(Request $request){
        $new_pelicula = peliculas::create([
            'title'=>$request['title'],
            'year'=>$request['year'],
            'director'=>$request['director'],
            'poster'=>$request['poster'],
            'rented'=>$request['rented'],
            'synopsis'=>$request['synopsis']
        ]);
        return redirect('/')->with('Completado', 'Pelicula guardada correctamente!');
    }

    public function getEdit($id){
        return view('catalog.edit' ,array('arrayPeliculas'=>peliculas::findOrFail($id)));
    }

    public function update(Request $request, $id)
    {

        $total_rows = peliculas::where('id',$id)->update([
            'title'=>$request['title'],
            'year'=>$request['year'],
            'director'=>$request['director'],
            'poster'=>$request['poster'],
            'rented'=>$request['rented'],
            'synopsis'=>$request['synopsis']
        ]);
        return redirect('/catalog/show/'.$id)->with('Completado', 'Pelicula guardada correctamente!');
    }

    public function rented(Request $request, $id)
    {
        $total_rows = peliculas::where('id',$id)->update([
            'rented'=> $request['rented']
        ]);
        return redirect('/catalog/show/'.$id)->with('Completado', 'Pelicula guardada correctamente!');
    }

    public function delete($id)
    {
        $pelicula = peliculas::findOrFail($id);
        $pelicula->delete();

        return redirect('/')->with('completed', 'Pelicula fue eliminada exitosamente');
    }

}
