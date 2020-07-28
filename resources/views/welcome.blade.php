<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/test.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

<div class="">
  <div class="header">
    <nav class="navbar navbar-dark bg-dark">  
      <!--Cabecera de la página-->
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">Yachaywasi</a>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="#">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('/') }}">Planes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Registrate</a>
          </li>
          <li class="nav-item">
              <a  class="btn"  href="{{ route('login') }}" style="background-color: #FF7D00;">Iniciar Sesión</a>
          </li>
        </ul>
    </nav>
  </div>

  

  <div class="main-section"> <!--Div-->
  <div class="second-section"> <!--Formulario-->
        
          <h1 class="display-4">Formación online en educación básica</h1>
          <img src="img/logo2.png" style="width: 500px; height:300px;" alt=""><br>
          <button class="btn btn-lg" type="button" name="button">Empieza Ahora</button>
          <div class="card-center">
            <div class="card" style="margin-left:150px;">
              <img src="img/choice.png" class="card-img-top" alt="..." style="width:200px; height:200px;">
              <div class="card-body">
                <h5 class="card-title">Rutas de Aprendizaje</h5>
                <p class="card-text">Nuestras rutas de aprendizaje estan ligadas al Minesterio de Educación del Perú.</p>
                <a href="#" class="btn">Iniciar</a>
              </div>
            </div>
            <div class="card">
              <img src="img/video.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cursos Aplicados</h5>
                <p class="card-text">Nuestros cursos te permiten conocer la aplicación de los temas aprendidos en la realidad.</p>
                <a href="#" class="btn">Iniciar</a>
              </div>
            </div>
            <div class="card">
              <img src="img/goal.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Experiencia orientada a tu carrera</h5>
                <p class="card-text">Contamos con talleres vivenciales y test vocacionales virtuales. Prepara tu CV Estudiantial.</p>
                <a href="#" class="btn">Iniciar</a>
              </div>
            </div>
          

        </div>
  </div>
  </div>
  <div class="footer"> <!--Fin de página-->
      <div class="card text-white bg-dark text-center">
        <div class="card-body">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link" href="#">Preguntas Frecuentes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contáctanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Términos y Condiciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacidad</a>
                </li>
              </ul>
              <a class="navbar-brand" href="">
                <img src="{{ asset('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">Yachaywasi</a>
              <p class="card-text">Huamaní - Monge - Palacios - 2020</p>
        </div>
      </div>
  </div>

</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
