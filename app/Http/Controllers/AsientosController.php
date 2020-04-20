<?php

namespace App\Http\Controllers;

use App\Asiento;
use Illuminate\Http\Request;

class AsientosController extends Controller
{   
    public function getByAllSala($sala_id)
    {
        $asientos = Asiento::where('sala_id', $sala_id)->get();
        foreach($asientos as $item)$item->sala;
        return Response()->json($asientos, 200);     
    }
    public function getById($id){
        $asiento = Asiento::find($id);
        $asiento->sala;
        return Response()->json($asiento, 200);     
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $asiento = Asiento::create($input);
        return Response()->json($asiento, 201);
    }
        /*
    public function getById($sala_id, $id)
    {
        $asientos = Asiento::where('sala_id', $sala_id)->where('id', $id)->get();
        $asiento = $asientos[0];
        foreach($asientos as $item)$item->sala;
        return Response()->json($asiento, 200);     
    }*/
    
}
