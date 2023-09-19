<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Dispositivo;

class DispositivoController extends Controller
{
    public function index(){
        return view('home');
    }


  public function logintela(){
    return view ('login');
  }
}
