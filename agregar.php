<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand text-white" href="#">blogNotas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link text-white" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="agregar.php">Nueva</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="login.php">Salir</a>
              </li>
          </ul>
        </div>
      </nav>
      <form>
          
<section class="seccion contenedor">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titulo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contenido</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Escribe...">
  </div>
  <a type="submit" class="btn btn-secondary" href="index.html">Agregar</a>
</section>
</form>

</body>
</html>