<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App;

class PaginasController extends Controller
{

    public function clientes(){
        $clientes = App\clientes::all();
        return view('clientes',compact('clientes'));

        
    }

    public function prestamos(){
        $prestamos = App\prestamos::all();
        return view('prestamos',compact('prestamos'));
    }

    public function pagos(){
        $pagos = App\pagos::all();
        return view('pagos',compact('pagos'));
    }

    public function resumen(){
        $resumen = App\resumen::all();
        return view('resumen',compact('resumen'));
    }


}



