<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactosAdminController extends Controller
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
        $contactos = DB::table('contactos')->get();
        //$contactos = auth()->user()->contactos;


        //le paso a la vista los contactos con el with
        return view('contacto.adminindex')->with('contactos', $contactos);
    }
}
