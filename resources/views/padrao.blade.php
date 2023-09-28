<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Sistema registro Futebol quiz</title>
  <style>
    
    header {
      width: 1555px;
      height: 179px;
      background-color: #040404;
      background-image: url('db6ac0478e5fed447acefcb5be84e028.jpg');
    }
       body {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        background-color: black;
      }

    footer {
      width: 1555px;
      height: 94px;
      background-color: #040404;
    }
    </style>
</head>
<body>
  <header></header>
<nav class="navbar navbar-expand-lg custom-navbar">
    <style>
   .custom-navbar {
      background-color: #4b4e4b;
   }
  </style>

  
  
    <div class="container-fluid">
      <a class="navbar-brand" href="home">PAGINA INICIAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="records">RECORDES</a>
          </li>
        </ul>
          <a href="{{'/login'}}"><button class="btn btn-outline-light" type="button">ENTRAR</button></a>
      </div>
    </div>
  </nav>

@yield('content')
<footer>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.075);">
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>