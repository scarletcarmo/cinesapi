<?php

namespace App\Http\Controllers;

use App\Reserva;
use App\AsientoReserva;
use App\Pelicula;
use App\Cine;

use Illuminate\Http\Request;

class ReservaController extends Controller
{  
    public function getAllByHorario($horario_id)
    {
        $reserva = Reserva::where('horario_id', $horario_id)->get();
        foreach($reserva as $item)$item->horario;
        return Response()->json($reserva, 200);
    }

    public function getAllByPelicula($pelicula_id)
    {
        $reservas = Pelicula::find($pelicula_id)->reserva()->get();
        //$reserva = Reserva::join('reserva.horario_id', '=', 'horario.id')->where('horario.pelicula_id', $pelicula_id)->select('horario.pelicula_id')->get();
        return Response()->json($reservas, 200);
    }

    public function getById($id)
    {
        $reserva = Reserva::find($id);
        return Response()->json($reserva, 200);
    }

    public function store(Request $request){
        $input = $request->all();
        $asientos = $input['asientos'];

        /*   $input2 = [
            'horario_id' => $input['horario_id'],
            'user_id' => $input['user_id'],           
        ];
               
        $reserva = Reserva::create($input2);
        */
        
        $reserva = Reserva::create($input);
        $reserva_id = $reserva['id']; 

        foreach($asientos as $asiento)
        {
            $data = [
                'reserva_id' => $reserva_id,
                'asiento_id' => $asiento,
            ];
            AsientoReserva::create($data);
        }
        return Response()->json($reserva, 201);  
    }
}