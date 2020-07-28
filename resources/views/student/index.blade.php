<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
            <a class="nav-link" href="student_suscription.html">Mi plan</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
               <a class="navbar-brand" href="#">
                 <img src="{{ asset('img/people.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
               </a>
               <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Lucía Ramírez
               </button>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="{{url('/cv')}}">Perfil</a>
                 <a class="dropdown-item" href="index1.html">Cerrar Sesión</a>
               </div>
             </div>
          </li>
        </ul>
    </nav>
  </div>

  <div class="sidebar"><!--Menu de navegación-->
    <div class="accordion" id="accordionExample">
      <!--Cursos-->
      <div class="card border-light">
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Cursos</a>
          </p>
        </div>
      </div>
      <!--Test Vocacional-->
      <div class="card border-light">
        <div class="card-header" id="headingFour">
          <p class="mb-0">
            <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Test Vocacional</a>
          </p>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body">
            <a href="{{url('/test')}}">Iniciar Test</a><br>
            <!--<a href="{{url('/')}}">Resultados</a><br>-->
            <a href="{{url('/career')}}">Recomendaciones</a>
            <a href="{{url('/university')}}">Universidades</a><br>
            <a href="{{url('/taller')}}">Talleres</a><br>
          </div>
        </div>
      </div>
      <!--Agenda-->
      <div class="card border-light">
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Agenda</a>
          </p>
        </div>

      </div>
      <!--Calificaciones-->
      <div class="card border-light">
        <div class="card-header" id="headingFour">
          <p class="mb-0">
            <a href="" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Calificaciones</a>
          </p>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
          <div class="card-body">
            <a href="{{url('/score')}}">Mostrar Calificaciones</a>
          </div>
        </div>
      </div>
      <!--Certificados-->
      <div class="card border-light">
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Certificados</a>
          </p>
        </div>
      </div>
      <!--Pagos-->
      <div class="card border-light">
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Pagos</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="main-section"> <!--Div-->
  <div class="second-section" style="margin-left:255px;"> <!--Formulario-->

    <form class="" action="{{url('/student')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="row">
        <div class="col-2">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Mi Ruta Actual</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Inicial</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Primaria</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Secundaria</a>
            <a class="list-group-item list-group-item-action" id="list-extra-list" data-toggle="list" href="#list-extra" role="tab" aria-controls="extra">Extras</a>
          </div>
        </div>
        <div class="col-10">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list" style="height:450px;">
              <h1>Mi ruta Actual</h1>
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
              <div class="container" style="height:400px;">
                <div class="card-columns mt-3">

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/3anios.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">3 Años</h5>
                      <a href="path_i3.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/4anios.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">4 Años</h5>
                      <a href="path_i4.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/5anios.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">5 Años</h5>
                      <a href="path_i5.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
              <div class="container">
                <div class="card-columns mt-3">

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Pprimero.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Primer Grado</h5>
                      <a href="path_p1.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Psegundo.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Segundo Grado</h5>
                      <a href="path_p2.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Ptercero.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Tercer Grado</h5>
                      <a href="path_p3.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>
                </div>
              </div>

                  <div class="container">
                    <div class="card-columns mt-3">
                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Pcuarto.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Cuarto Grado</h5>
                      <a href="path_p4.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Pquinto.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Quinto Grado</h5>
                      <a href="path_p5.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Psexto.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Sexto Grado</h5>
                      <a href="{{url('/path')}}" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
              <div class="container">
                <div class="card-columns mt-3">

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Sprimero.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Primer Grado</h5>
                      <a href="{{url('/path')}}" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Ssegundo.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Segundo Grado</h5>
                      <a href="path_s2.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Stercero.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Tercer Grado</h5>
                      <a href="path_s3.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>
                </div>
              </div>

                  <div class="container">
                    <div class="card-columns mt-3">

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Scuarto.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Cuarto Grado</h5>
                      <a href="path_s4.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>

                  <div class="card text-center" style="width: 18rem;">
                    <img src="img/Squinto.png" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Quinto Grado</h5>
                      <a href="path_s5.html" class="btn btn-primary">Ingresar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-extra" role="tabpanel" aria-labelledby="list-extra-list" style="height:450px;">
              <h1>Proximo Requerimiento</h1>
            </div>
          </div>
        </div>
      </div>
  </form>
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
