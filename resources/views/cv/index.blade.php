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
                User
               </button>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="{{url('/cv/index')}}">Perfil</a>
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
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Calificaciones</a>
          </p>
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
  <div class="second-section" style="margin-left:245px; height:600px;"> <!--Formulario-->

    <form class="" action="{{url('/cv')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <h4 style="padding-bottom:20px; text-align:center;">Mi Hoja de Vida</h4>
      <div class="row">
        <div class="col-2">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Mis Datos</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Mis Logros</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Mis Habilidades</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Mis Actividades</a>
          </div>
          <a href="{{url('/export')}}" class="btn btn-success" style="margin-top:40px;" target="_blank">Descargar Hoja de Vida</a>
        </div>
        <div class="col-10">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">

              <form class="" action="" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="row">
                      <div class="col-12">
                        <a class="btn btn-primary float-right" href="{{url('/student/'.'1'.'/edit')}}">Editar Datos</a><br><br>
                      </div>
                    </div>
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-4">
                          <?php
                          foreach ($student as $students) :?>
                          <label class="card-text" for="" style="font-weight:bold;">{{'Nombres:'}}</label>
                          <label for="">{{$students->first_name}}</label><br>
                          <label class="card-text" for="" style="font-weight:bold;">{{'Apellidos:'}}</label>
                          <label for="">{{$students->last_name}}</label><br>
                          <label class="card-text" for="" style="font-weight:bold;">{{'Género:'}}</label>
                          <label for="">{{$students->gender}}</label><br>
                          <label class="card-text" for="" style="font-weight:bold;">{{'Fecha de Nacimiento:'}}</label>
                          <label for="">{{$students->date_birth}}</label><br>
                          <label class="card-text" for="" style="font-weight:bold;">{{'Número de Celular:'}}</label>
                          <label for="">{{$students->phone_number}}</label><br>
                        </div>
                        <div class="col-4">
                          <label class="card-text" for="" style="font-weight:bold;">{{'Correo Electrónico:'}}</label>
                          <label for="">{{$students->phone_number}}</label><br>
                          <label class="card-text" for="" style="font-weight:bold;">{{'Colegio de Procedencia:'}}</label>
                          <label for="">{{$students->school}}</label><br>
                          <label class="card-text" for="" style="font-weight:bold;">{{'País:'}}</label>
                          <label for="">{{$students->country}}</label><br>
                          <label class="card-text" for="" style="font-weight:bold;">{{'Ciudad:'}}</label>
                          <label for="">{{$students->city}}</label><br>
                          <label class="card-text" for="" style="font-weight:bold;">{{'Código Postal:'}}</label>
                          <label for="">{{$students->postal_code}}</label><br>
                        </div>
                        <div class="col-4">
                            <img src="{{asset('storage').'/'.$students->picture}}" alt="..." class="img-thumbnail">
                        </div>
                      <?php endforeach;?>
                      </div>
                    </div>
                  </div>
            </form>


            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

              <a class="btn btn-primary float-right" href="{{url('/achievement/create')}}">Agregar Nuevo Logro</a><br><br>
              <table class="table">
                <thead class="thead-dark">
                <tr>
                   <th>N°</th>
                   <th>Logro</th>
                   <th>Descripción</th>
                   <th>Referencia</th>
                   <th>Fecha</th>
                </tr>
                </thead>
              <tbody>
              <?php
              $total = 0;
              foreach ($ach as $achs) :?>
                <tr>
                      <td scope="row"><?php echo ++$total; ?></td>
                      <td>{{$achs->name}} </td>
                      <td style="width:300px;"> {{$achs->description}}</td>
                      <td>{{$achs->reference}} </td>
                      <td> {{$achs->date}}</td>
                </tr>
                <?php endforeach;?>
              </tbody>
              </table>

            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
              <a class="btn btn-primary float-right" href="{{url('/skill/create')}}">Agregar Nueva Habilidad</a><br><br>
              <table class="table">
                <thead class="thead-dark">
                <tr>
                   <th>N°</th>
                   <th>Habilidad</th>
                   <th>Descripción</th>
                </tr>
                </thead>
              <tbody>
              <?php
              $total = 0;
              foreach ($skill as $skills) :?>
                <tr>
                      <td scope="row"><?php echo ++$total; ?></td>
                      <td>{{$skills->name}} </td>
                      <td> {{$skills->description}}</td>
                </tr>
                <?php endforeach;?>
              </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
              <a class="btn btn-primary float-right" href="{{url('/activity/create')}}">Agregar Nuevo Actividad</a><br><br>
              <table class="table">
                <thead class="thead-dark">
                <tr>
                   <th>N°</th>
                   <th>Actividad</th>
                   <th>Descripción</th>
                   <th>Referencia</th>
                   <th>Fecha</th>
                </tr>
                </thead>
              <tbody>
              <?php
              $total = 0;
              foreach ($activity as $activities) :?>
                <tr>
                      <td scope="row"><?php echo ++$total; ?></td>
                      <td>{{$activities->name}} </td>
                      <td style="width:300px;"> {{$activities->description}}</td>
                      <td>{{$activities->reference}} </td>
                      <td> {{$activities->date}}</td>
                </tr>
                <?php endforeach;?>
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div><br>


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
