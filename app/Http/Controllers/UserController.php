<?php
namespace App\Http\Controllers;

use App\Usser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $usuario = Usser::get();
        return Response()->json($usuario, 200);
    }

    public function getById($id)
    {
        $usuario = Usser::find($id);
        return Response()->json($usuario, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $usuario = Usser::create($input);
        return Response()->json($usuario, 200);
    }
}