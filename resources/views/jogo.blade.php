@extends('padrao')
@section('content')
<section style="display: flex; justify-content:center; align-items:center; height:100vh">
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            div {
                width: 30%;
            }

            body {
                background: white;
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
                background-image: url('/img64789faa231705.85386216.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                margin: 0;
                
                
        
            }

            .container {
                width: 50%;
                height: 50%;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 20px;
                border-radius: 15px;
                color: white;
                margin-top: 10%;
            }
            
            h1 {
                text-align: center;
                color: black;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 36px;
                font-style: normal;
                font-weight: 700;
                line-height: normal;
            }

            /* Estilizando os botões */
            .btn {
                display: block;
                margin: 0 auto;
            }

            body {
                font-family: Arial, sans-serif;
            }

            body {
    font-family: Arial, sans-serif;
}

.question-box {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
    width: 700px;
    height: 100px;
    border-radius: 10px;
    background: #fcfcfc;
    
}

.question p {
    font-weight: bold;
    margin-bottom: 50px;

}

.answer {
    margin-top: 10px;
    width:400px;
    height: 76px;
    border-radius:10px;
    background: #fcfcfc;
    text-align: center;

    
}

input[type="radio"] {
    display: none;
}




input[type="radio"]:checked + label {
    background-color: #007BFF;
    color: #fff;
    border-color: #007BFF;
}
        </style>
    </head>
    <body>
     <form method="POST" action="">
        <div class="question-box">
            <div class="question">
                <p>{{ $questaoescolhida['pergunta']}}</p>
            </div>
            <br>
            <a href="{{'/gerenciar-perguntas/opcao=a'}}"><button type="button" class="btn btn-primary">{{ $questaoescolhida['opcaoa']}}</button></a>
            <a href="{{'/gerenciar-perguntas/opcao=b'}}"><button type="button" class="btn btn-primary">{{ $questaoescolhida['opcaob']}}</button></a>
            <a href="{{'/gerenciar-perguntas/opcao=c'}}"><button type="button" class="btn btn-primary">{{ $questaoescolhida['opcaoc']}}</button></a>
            <a href="{{'/gerenciar-perguntas/opcao=d'}}"><button type="button" class="btn btn-primary">{{ $questaoescolhida['opcaod']}}</button></a>
           
            @if ($opcao == $questaoescolhida['certa'])
                $placar += 1;                
            @endif

            <button type="button" class="btn btn-primary">{{ $questaoescolhida['certa']}}</button>
        </div>
       
    </form>
       
        
        
       
    </body>
</html>
</section>
@endsection