<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pedritoController extends Controller
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
        return view('test'); //->with('contactos', $contactos);
    }  
}
