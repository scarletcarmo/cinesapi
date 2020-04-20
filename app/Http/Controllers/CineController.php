<?php

namespace App\Http\Controllers;

use App\Cine;
use Illuminate\Http\Request;

class CineController extends Controller
{
    public function index()
    {
        $cine = Cine::get();
        return Response()->json($cine, 200);
    }

    public function getById($id)
    {
        $cine = Cine::find($id);
        return Response()->json($cine, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $cine = cine::create($input);
        return Response()->json($cine, 201);
    }
}
