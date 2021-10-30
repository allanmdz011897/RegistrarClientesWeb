<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function list(){
        $data['clientes'] = Cliente::paginate(30);
        return view('clientes.list', $data);
    }

    public function clientform(){
        return view('clientes.clientform');
    }

    //guardar clientes

    public function save(Request $request){
        $clientdata = request()->except('_token');
        Cliente::insert($clientdata);
        return back()->with('clienteGuardado', 'Cliente guardado');

    }
}
