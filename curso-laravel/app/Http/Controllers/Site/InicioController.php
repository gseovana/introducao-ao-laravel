<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;

class InicioController extends Controller
{
    public function index(){
      $cursos = Curso::all();
      return view('inicio', compact('cursos'));
    }
}
