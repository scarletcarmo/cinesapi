<?php

namespace App\Http\Controllers;

use App\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function getAllByCine($cine_id){
        $listaSalas = Sala::where('cine_id', $cine_id)->get();
        foreach($listaSalas as $item)$item->cine;
        return Response()->json($listaSalas, 200);
    }

    public function getById($id){
        $salas = Sala::find($id);
        $salas->cine;
        return Response()->json($sala, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        //$input['cine_id'] = $cine_id;
        $sala = Sala::create($input);
        return Response()->json($sala, 200);        
    }

}
