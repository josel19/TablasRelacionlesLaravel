<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use App\Models\Ficha;
use Illuminate\Http\Request;

class VistasControlador extends Controller
{
    //
    public function index(){
        $aprendices = Aprendiz::all();
    return view('vistaAprendices', compact('aprendices'));
    }
}
