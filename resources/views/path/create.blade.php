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
                User
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

  <form class="" action="{{url('/subject')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <h4 style="padding-bottom:20px;">Crear Nueva Ruta</h4>
    <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <label class="card-text" for="">{{'Categoría:'}}</label>
              <select id="category_id" name="category_id" class="form-control" >
              <option selected>Seleccionar</option>
              <?php foreach ($category as $categories): ?>
                  <option value="{{$categories->category_id}}">{{$categories->name}}</option>
              <?php endforeach; ?>
            </select><br>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Nueva Categoría
              </button>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <label class="card-text" for="">{{'Nombre Categoría:'}}</label>
                      <input type="text" name="" id="" value="" class="form-control" placeholder=""><br>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                  </div>
                </div>
              </div><br><br>
              <label class="card-text" for="">{{'Nombre:'}}</label>
              <input type="text" name="name" id="name" value="" class="form-control" placeholder=""><br>
              <label class="card-text" for="">{{'Grado:'}}</label>
              <select id="grade_id" name="grade_id" class="form-control" >
              <option selected>Seleccionar</option>
              <?php foreach ($grade as $grades): ?>
                  <option value="{{$grades->grade_id}}">{{$grades->name}}</option>
              <?php endforeach; ?>
            </select><br>
            </div>
            <div class="col-6">
              <label class="card-text" for="">{{'Descripción:'}}</label>
              <textarea name="description" id="description" rows="8" cols="32"></textarea><br>
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
