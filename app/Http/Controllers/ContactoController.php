<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //el nombre contactos viene de user.php por el modelo creado
        //Auth::user()->contactos->dd();
        //$contactos = auth()->user()->contactos;


        //le paso a la vista los contactos con el with
        return view('contacto.index'); //->with('contactos', $contactos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombreyapellido'=> 'required|max:24',
            'numtelefono'=> 'required',
            'email'=> 'required|email',
            'mensaje'=> 'required',
        ]);

        DB::table('contactos')->insert([
            'nombreyapellido' => $data['nombreyapellido'],
            'numtelefono' => $data['numtelefono'],
            'email' => $data['email'],
            'mensaje' => $data['mensaje']
        ]);

        //redirecciona luego de guardar
        //return redirect()->action('home');
    }
}
