<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Perguntas;

class PerguntasController extends Controller
{
   public function MostrarPerguntas(){
          $questao = Perguntas::inRandomOrder()->first();
      return view('jogo', [
          'questaoescolhida' => $questao
      ]);
  }

  public function CadastrarPerguntas(){
   $questao = Perguntas::inRandomOrder()->first();
return view('jogo', [
   'questaoescolhida' => $questao
]);
}

}

  

