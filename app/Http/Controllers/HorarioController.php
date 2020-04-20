<?php

namespace App\Http\Controllers;

use App\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{   
    public function getAllByPelicula($pelicula_id)
    {
        $horarios = Horario::where('pelicula_id', $pelicula_id)->get();
        foreach($horarios as $item)$item->pelicula;
        return Response()->json($horarios, 200);
    }

    public function getById($id){
        $horario = Horario::find($id);
        $horario->pelicula;
        return Response()->json($horario, 200);
    }

    public function store(Request $request){
        $input = $request->all();
        $horarios = Horario::create($input);
        return Response()->json($horarios, 201);
    }
}
