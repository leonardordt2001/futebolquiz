@extends('padrao')
@section('content')
<section style="display: flex; justify-content:center; align-items:center; height:100vh">
    <!DOCTYPE html>
  <html>
    <head>
      <style>
  
        div{
          width: 30%;
  
        }
        body {
          background: white;
          font-family: Arial, Helvetica, sans-serif;
          background-image: url('/img64789faa231705.85386216.jpg');
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed; 
          margin: 0; /* Adicionei essa linha para remover a margem padrão do corpo */
        }
        /* Estilizando o contêiner do formulário */
        .container7 {
          width: 50%;
          height: 50%;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          padding: 20px; /* Reduzi o padding para que o formulário não fique muito espaçoso */
          border-radius: 15px;
          color: white;
          margin-top: 10%
        }
        h1 {
          text-align: center; /* Centralize o título */
        }
        /* Estilizando os campos de entrada */
        .form-group {
          margin-bottom: 15px;
        }
        /* Estilizando o botão */
        .btn1 {
          width: 453px;
          height: 100px;
          border-radius: 10px;
          display: block;
          margin: 0 auto; /* Centralize o botão */
          font-family: Arial, Helvetica, sans-serif;
          font-size: 36px;
          font-style: normal;
          font-weight: 700;
          line-height: normal;
        }
       
      </style>
    </head>
    <body>
        <div class="container7">
            <h1>FUTEBOL QUIZ</h1>
            <br>
            <br>
            <h1>Mostre que você sabe tudo quando o assunto é futebol!!!</h1>
            <br>
            <br>

           
             <a href="{{'/gerenciar-perguntas/opcao=inicio'}}"><button type="button" class="btn1 btn-light">INICIAR QUIZ</button><a>       
        </div>
    </body>
  <html>
</section>
@endsection