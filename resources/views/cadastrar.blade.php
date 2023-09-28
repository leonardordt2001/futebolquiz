@extends('padrao')
@section('content')
<section>
  <!DOCTYPE html>
  <html>
  <head>
    <style>

     
      body {
        background: white;
        font-family:Arial, Helvetica, sans-serif;
        background-image: url('/img64789faa231705.85386216.jpg');
        background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed; 
        margin: 0; /* Adicionei essa linha para remover a margem padrão do corpo */
      }
      /*contêiner do formulário */
      .container3 {
        width: 30%;
        height: 50%;
        background-color:black;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px; /* Reduzi o padding para que o formulário não fique muito espaçoso */
        border-radius: 15px;
        color: white;
        margin-top: 10%;
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
    <div class="container3">
      <h1>CADASTRAR-SE</h1>
      <!-- Painel Usuario tela cadastro -->
      <div class="form-group">
        <label for="inputuser">USUÁRIO:</label>
        <input type="text" class="form-control" id="inputuser" value="Cr7"> 
      </div>
      <!-- Painel Email tela cadastro -->
      <div class="form-group">
        <label for="inputEmail">EMAIL:</label>
        <input type="text" class="form-control" id="inputEmail" value="email@example.com">
      </div>
      <!-- Painel password tela cadastro -->
      <div class="form-group">
        <label for="inputPassword">SENHA:</label>
        <input type="password" class="form-control" id="inputPassword" value="senha123">
      </div>
      <div class="form-group">
        <button type="button" class="btn btn-light">CADASTRAR</button>
      </div>
    </div>
  </body>
  </html>
</section>
@endsection