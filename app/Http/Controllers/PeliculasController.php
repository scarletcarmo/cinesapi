<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function getAllByCine($cine_id){
        $peliculas = Pelicula::where('cine_id', $cine_id)->get();
        foreach($peliculas as $item)$item->cine;
        return Response()->json($peliculas, 200);
    }

    public function getById($id){
        $pelicula = Pelicula::find($id);
        $pelicula->cine;
        return Response()->json($pelicula, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $pelicula = Pelicula::create($input);
        return Response()->json($pelicula, 201);        
    }

}