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
    return view('login');
  }
  
  public function cadastrotela(){
    return view('cadastrar');
  }

  public function Cadastrar(Request $request){
    $User = $request->validate([
        'usuarioid' => 'string|required',
        'password' => 'string|required'
    ]);
    $User['password'] = bcrypt($User['password']);
    User::create($User);
    return view('login');
}
public function Logar(Request $request){
  // dd($request);
      $this->validate($request,[
          'nickuser' => 'required',
          'password' => 'required'
      ],[
          'nickuser.required' => 'Nickname obrigatorio.',
          'password.required' => 'Senha obrigatoria.'
      ]);
  if (Auth::attempt(['nickuser' => $request->nickuser, 'password' => $request->password])) {
      return view('gerenciar-perguntas');
  } else {
      return redirect()->back()->with('danger','Nick ou senha inválido.');
  }
}

  public function recordstela(){
    return view('records');
  }

  public function jogotela(){
    return view('jogo');
  }
}
