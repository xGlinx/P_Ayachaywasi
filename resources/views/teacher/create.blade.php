<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8-unicode-ci">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  </head>

  <body>

<div class="">

  <div class="header">
    <nav class="navbar navbar-dark bg-dark">  <!--Cabecera de la página-->
      <a class="navbar-brand" href="">
        <img src="{{ asset('img/logo.png') }}" width="40" height="40" class="d-inline-block align-top" alt="">Yachaywasi</a>
        <ul class="nav justify-content-end">
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <div class="dropdown">
               <a class="navbar-brand" href="#">
                 <img src="{{ asset('img/avatar.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
               </a>
               <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Alex Turner
               </button>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="index1.html">Cerrar Sesión</a>
               </div>
             </div>
          </li>
        </ul>
    </nav>
  </div>

  <div class="sidebar"><!--Menu de navegación-->
    <div class="accordion" id="accordionExample">
      <!--Administración-->
      <div class="card border-light">
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Administración</a>
          </p>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">

            <p class="title_menu"><img src="img/ins.png" width="20" height="20" class="d-inline-block align-top" alt="">Usuarios</p>
            <ul>
              <li><a href="">Crear Nuevo</a> </li>
              <li><a href="#">Listado</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--Académico-->
      <div class="card border-light">
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Académico</a>
          </p>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">

            <p class="title_menu"><img src="img/ins.png" width="20" height="20" class="d-inline-block align-top" alt="">Docentes</p>
            <ul>
              <li><a href="">Crear Nuevo</a> </li>
              <li><a href="#">Listado</a></li>
            </ul>
            <p class="title_menu"><img src="img/pay.png" width="20" height="20" class="d-inline-block align-top" alt="">Cursos</p>
            <ul>
              <li><a href="#">Crear Nuevo</a> </li>
              <li><a href="#">Listado</a></li>
            </ul>
            <p class="title_menu"><img src="img/pay.png" width="20" height="20" class="d-inline-block align-top" alt="">Rutas</p>
            <ul>
              <li><a href="#">Crear Nuevo</a> </li>
              <li><a href="#">Listado</a></li>
            </ul>
            <p class="title_menu"><img src="img/pay.png" width="20" height="20" class="d-inline-block align-top" alt="">Estudiantes</p>
            <ul>
              <li><a href="#">Listado</a> </li>
              <li><a href="#">Test Vocacional</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--Económico-->
      <div class="card border-light">
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Económico</a>
          </p>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">

            <p class="title_menu"><img src="img/ins.png" width="20" height="20" class="d-inline-block align-top" alt="">Planes</p>
            <p class="title_menu"><img src="img/pay.png" width="20" height="20" class="d-inline-block align-top" alt="">Promociones</p>
            <p class="title_menu"><img src="img/pay.png" width="20" height="20" class="d-inline-block align-top" alt="">Cotizaciones</p>
          </div>
        </div>
      </div>
      <!--Económico-->
      <div class="card border-light">
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Reportes</a>
          </p>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">

            <p class="title_menu"><img src="img/ins.png" width="20" height="20" class="d-inline-block align-top" alt="">Estudiantes</p>
            <p class="title_menu"><img src="img/pay.png" width="20" height="20" class="d-inline-block align-top" alt="">Docentes</p>
            <p class="title_menu"><img src="img/pay.png" width="20" height="20" class="d-inline-block align-top" alt="">Suscripciones</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="main-section"> <!--Div-->
  <div class="second-section" style="height:550px;"> <!--Formulario-->

  <form class="" action="{{url('/teacher')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <h4 style="padding-bottom:20px;">Crear Nuevo Docente</h4>
    <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <label class="card-text" for="">{{'Nombres:'}}</label>
              <input type="text" name="first_name" id="first_name" value="" class="form-control" placeholder=""><br>
              <label class="card-text" for="">{{'Apellidos:'}}</label>
              <input type="text" name="last_name" id="last_name" value="" class="form-control" placeholder=""><br>
              <label class="card-text" for="">{{'Tipo de documento:'}}</label>
              <select id="id" name="id" class="form-control" >
              <option selected>Seleccionar</option>
              <option value="1">DNI</option>
              <option value="2">Pasaporte</option>
              <option value="3">Carnet de Extranjería</option>
              </select><br>
              <label class="card-text" for="">{{'N° de documento:'}}</label>
              <input type="text" name="number_id" id="number_id" value="" class="form-control" placeholder=""><br>
            </div>
            <div class="col-6">
              <label class="card-text" for="">{{'Correo Electrónico:'}}</label>
              <input type="email" name="email" id="email" value="" class="form-control" placeholder=""><br>
              <label class="card-text" for="">{{'N° de celular:'}}</label>
              <input type="text" name="phone_number" id="phone_number" value="" class="form-control" placeholder=""><br>
              <label class="card-text" for="">{{'Linkedin:'}}</label>
              <input type="text" name="linkedin" id="linkedin" value="" class="form-control" placeholder=""><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <label class="card-text" for="">{{'Título de Presentación:'}}</label>
              <input type="text" name="title" id="title" value="" class="form-control" placeholder=""><br>
              <label class="card-text" for="">{{'Presentación:'}}</label>
              <textarea name="presentation" id="presentation" rows="8" cols="32"></textarea>

            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="exampleFormControlFile1">{{'Fotografía:'}}</label>
                <input type="file" class="form-control-file" id="picture" name="picture">
              </div>
              <label for="exampleFormControlFile1">Vista Previa</label><br>
              <img src="{{ asset('img/avatar.png')}}" alt="..." class="img-thumbnail">
              <input name="visible" id="visible" value="1" class="form-control" type="hidden"><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br>
  <div class="button_control">
    <button class="btn btn-primary" type="submit">Guardar</button>
    <button class="btn btn-danger" type="button">Cancelar</button>
  </div>
</form>

  </div>
  </div>
  <div class="footer"> <!--Fin de página-->
      <div class="card text-white bg-dark text-center">
        <div class="card-body">
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
