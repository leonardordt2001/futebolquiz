@extends('padrao')
@section('content')
<section>
  <!DOCTYPE html>
  <html>
  <head>
    <style>

     
      body {
        background: white;
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('/img64789faa231705.85386216.jpg');
        background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed; 
        margin: 0; /* Adicionei essa linha para remover a margem padrão do corpo */
      }
      /*contêiner do formulário */
      .container2 {
        width: 30%;
        height: 50%;
        background-color: black;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px; /* Reduzi o padding para que o formulário não fique muito espaçoso */
        border-radius: 15px;
        color: white;
        margin-top: 15%;
      }
      h1 {
        text-align: center; /* Centraliza o título */
      }
      /*campos de entrada */
      .form-group {
        margin-bottom: 15px;
      }
      
      .btn {
        display: block;
        margin: 0 auto; /* Centraliza o botão */
      }
    </style>
  </head>
  <body>
    <div class="container2">
      <h1>ENTRAR</h1>
      <!-- Painel Email tela login -->
      <div class="form-group">
        <label for="inputEmail">EMAIL:</label>
        <input type="text" class="form-control" id="inputEmail" value="email@example.com">
      </div>
      <!-- Painel password tela login -->
      <div class="form-group">
        <label for="inputPassword">SENHA:</label>
        <input type="password" class="form-control" id="inputPassword" value="senha123">
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-light">ENTRAR</button>
        <a href="{{'/cadastrar'}}"><button type="button" class="btn">CADASTRAR-SE</button><a>
  </body>
  </html>
</section>
@endsection