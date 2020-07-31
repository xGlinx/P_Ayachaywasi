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
  @foreach ($subject as $subjects)
  <h1 class="display-4" style="text-align:center;">{{$subjects->name}}</h1><br><br>
  @endforeach
  <div class="row">
    <div class="col-3">
      <h4 for="" style="text-align:center;">Primer Bimestre</h4>
      <ul class="list-group list-group-flush">
        @foreach ($session as $sessions)
          @if ($sessions->unity == 1)
          <li class="list-group-item"><img src="{{ asset('img/correcto.png') }}" alt="" style="width:30px;height:30px;">{{$sessions->title}}</li>
          @endif
        @endforeach
      </ul><br>
    </div>
    <div class="col-3">
      <h4 for="" style="text-align:center;">Segundo Bimestre</h4>
      <ul class="list-group list-group-flush">
        @foreach ($session as $sessions)
          @if ($sessions->unity == 2)
        <li class="list-group-item"><img src="{{ asset('img/correcto.png') }}" alt="" style="width:30px;height:30px;">{{$sessions->title}}</li>
          @endif
        @endforeach
      </ul><br>
    </div>
    <div class="col-3">
      <h4 for="" style="text-align:center;">Tercero Bimestre</h4>
      <ul class="list-group list-group-flush">
        @foreach ($session as $sessions)
          @if ($sessions->unity == 3)
        <li class="list-group-item"><img src="{{ asset('img/correcto.png') }}" alt="" style="width:30px;height:30px;">{{$sessions->title}}</li>
          @endif
        @endforeach
      </ul><br>
    </div>
    <div class="col-3">
      <h4 for="" style="text-align:center;">Cuarto Bimestre</h4>
      <ul class="list-group list-group-flush">
        @foreach ($session as $sessions)
          @if ($sessions->unity == 4)
        <li class="list-group-item"><img src="{{ asset('img/correcto.png') }}" alt="" style="width:30px;height:30px;">{{$sessions->title}}</li>
          @endif
        @endforeach
      </ul><br>
    </div>
  </div>



  <table class="table table-dark" style="text-align:center;">
    <thead>
      <tr>
        <th scope="col">

        <a class="btn btn-success" data-toggle="collapse" href="#collapseFirst" role="button" aria-expanded="false" aria-controls="collapseFirst">
        Unidad I
        </a></th>
        <th scope="col">

          <a class="btn btn-success" data-toggle="collapse" href="#collapseSecond" role="button" aria-expanded="false" aria-controls="collapseSecond">
            Unidad II
          </a>
        </th>
        <th scope="col">

          <a class="btn btn-success" data-toggle="collapse" href="#collapseThird" role="button" aria-expanded="false" aria-controls="collapseThird">
            Unidad III
          </a>
        </th>
        <th scope="col">

          <a class="btn btn-success" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">
            Unidad IV
          </a>
        </th>
      </tr>
    </thead>
  </table>

    <div class="collapse show" id="collapseFirst">
      <div class="card card-body">
        <div class="row">
          <div class="col-2">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Sesión 1</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Sesión 2</a>
              <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Sesión 3</a>
              <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Sesión 4</a>
            </div>
          </div>
          <div class="col-10">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">


                <div class="card border-primary mb-3">
                  <div class="card-header">Introducción</div>
                  <div class="card-body text-primary">
                    <p class="card-text">
                      @foreach ($session as $sessions)
                      @if ($sessions->unity == 1 && $sessions->number == 1 )
                      <h5 style="text-align:center;">{{$sessions->title}}</h5>
                      <p for="" style="text-align:center;">{{$sessions->description}}</p>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-secondary mb-3">
                  <div class="card-header">VideoClase</div>
                  <div class="card-body text-secondary">
                    <p class="card-text">

                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Nb8vYMM4OuM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>

                    </p>
                  </div>
                </div>

                <div class="card border-success mb-3">
                  <div class="card-header">Recursos Visuales</div>
                  <div class="card-body text-success">
                    <p class="card-text">
                      @foreach ($images as $image)
                      @if ($image->session_id == 1)
                      <label for="">{{$image->title}}</label><br>
                      <img src="{{asset('storage').'/'.$image->picture}}" alt="" style="width:320px;heigth:350px;">
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>

                <div class="card border-warning mb-3">
                  <div class="card-header">Práctica</div>
                  <div class="card-body text-warning">
                    <p class="card-text">
                      @foreach ($practices as $practice)
                      <label for="">{{$practice->title}}</label><br>
                      <label for="">{{$practice->description}}</label><br>
                      <a href="{{url('/exam')}}" class="btn btn-secondary" target="_blank">Iniciar</a>
                      @endforeach
                    </p>
                  </div>
                </div>

                <div class="card border-info mb-3">
                  <div class="card-header">Recursos Adicionales</div>
                  <div class="card-body text-info">
                    <p class="card-text">
                      @foreach ($plus as $pluses)
                      @if ($pluses->session_id == 1)
                      <label for="">{{$pluses->title}}</label><br>
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="{{$pluses->description}}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-dark mb-3">
                  <div class="card-header">Exámen</div>
                  <div class="card-body text-dark">
                    <p class="card-text">
                      @foreach ($exam as $exams)
                      @if ($exams->session_id == 1)
                      <label for="">{{$exams->title}}</label>
                      <a href="https://kahoot.it/challenge/08301405?challenge-id=c59a3eff-8eb0-46e1-b907-374bc22deff3_1595903457854" class="btn btn-secondary" >Iniciar</a>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="card border-primary mb-3">
                  <div class="card-header">Introducción</div>
                  <div class="card-body text-primary">
                    <p class="card-text">
                      @foreach ($session as $sessions)
                      @if ($sessions->unity == 1 && $sessions->number == 2)
                      <h5 style="text-align:center;">{{$sessions->title}}</h5>
                      <p for="" style="text-align:center;">{{$sessions->description}}</p>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-secondary mb-3">
                  <div class="card-header">VideoClase</div>
                  <div class="card-body text-secondary">
                    <p class="card-text">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/zpnbyH0V65c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </p>
                  </div>
                </div>
                <div class="card border-success mb-3">
                  <div class="card-header">Recursos Visuales</div>
                  <div class="card-body text-success">
                    <p class="card-text">
                      @foreach ($images as $image)
                      <label for="">{{$image->title}}</label><br>
                      <img src="{{asset('storage').'/'.$image->picture}}" alt="" style="width:320px;heigth:350px;">
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-warning mb-3">
                  <div class="card-header">Ejercicios</div>
                  <div class="card-body text-warning">
                    <p class="card-text">
                      @foreach ($practices as $practice)
                      @if ($practice->session_id == 2)
                      <label for="">{{$practice->title}}</label><br>
                      <label for="">{{$practice->description}}</label><br>
                      <a href="#" class="btn btn-secondary" >Iniciar</a>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-info mb-3">
                  <div class="card-header">Recursos Adicionales</div>
                  <div class="card-body text-info">
                    <p class="card-text">
                      @foreach ($plus as $pluses)
                      @if ($pluses->session_id == 2)
                      <label for="">{{$pluses->title}}</label><br>
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="{{$pluses->description}}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-dark mb-3">
                  <div class="card-header">Exámen</div>
                  <div class="card-body text-dark">
                    <p class="card-text">
                      @foreach ($exam as $exams)
                      @if ($exams->session_id == 2)
                      <label for="">{{$exams->title}}</label>
                      <a href="#" class="btn btn-secondary" >Iniciar</a>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
              </div>



              <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <div class="card border-primary mb-3">
                  <div class="card-header">Introducción</div>
                  <div class="card-body text-primary">
                    <p class="card-text">
                      @foreach ($session as $sessions)
                      @if ($sessions->session_id == 3)
                      <h5 style="text-align:center;">{{$sessions->title}}</h5>
                      <p for="" style="text-align:center;">{{$sessions->description}}</p>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-secondary mb-3">
                  <div class="card-header">VideoClase</div>
                  <div class="card-body text-secondary">
                    <p class="card-text">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-oSk0XylAgw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </p>
                  </div>
                </div>
                <div class="card border-success mb-3">
                  <div class="card-header">Recursos Visuales</div>
                  <div class="card-body text-success">
                    <p class="card-text">
                      @foreach ($images as $image)
                      @if ($image->session_id == 3)
                      <label for="">{{$image->title}}</label><br>
                      <img src="{{asset('storage').'/'.$image->picture}}" alt="" style="width:320px;heigth:350px;">
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-warning mb-3">
                  <div class="card-header">Ejercicios</div>
                  <div class="card-body text-warning">
                    <p class="card-text">
                      @foreach ($practices as $practice)
                      @if ($practice->session_id == 3)
                      <label for="">{{$practice->title}}</label><br>
                      <label for="">{{$practice->description}}</label><br>
                      <a href="#" class="btn btn-secondary" >Iniciar</a>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-info mb-3">
                  <div class="card-header">Recursos Adicionales</div>
                  <div class="card-body text-info">
                    <p class="card-text">
                      @foreach ($plus as $pluses)
                      @if ($pluses->session_id == 3)
                      <label for="">{{$pluses->title}}</label><br>
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="{{$pluses->description}}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-dark mb-3">
                  <div class="card-header">Exámen</div>
                  <div class="card-body text-dark">
                    <p class="card-text">
                      @foreach ($exam as $exams)
                      @if ($exams->session_id == 3)
                      <label for="">{{$exams->title}}</label>
                      <a href="#" class="btn btn-secondary" >Iniciar</a>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
              </div>


              <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <div class="card border-primary mb-3">
                  <div class="card-header">Introducción</div>
                  <div class="card-body text-primary">
                    <p class="card-text">
                      @foreach ($session as $sessions)
                      @if ($sessions->session_id == 4)
                      <h5 style="text-align:center;">{{$sessions->title}}</h5>
                      <p for="" style="text-align:center;">{{$sessions->description}}</p>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-secondary mb-3">
                  <div class="card-header">VideoClase</div>
                  <div class="card-body text-secondary">
                    <p class="card-text">
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/EK7jgjjfEAg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </p>
                  </div>
                </div>
                <div class="card border-success mb-3">
                  <div class="card-header">Recursos Visuales</div>
                  <div class="card-body text-success">
                    <p class="card-text">
                      @foreach ($images as $image)
                      @if ($image->session_id == 4)
                      <label for="">{{$image->title}}</label><br>
                      <img src="{{asset('storage').'/'.$image->picture}}" alt="" style="width:320px;heigth:350px;">
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-warning mb-3">
                  <div class="card-header">Ejercicios</div>
                  <div class="card-body text-warning">
                    <p class="card-text">
                      @foreach ($practices as $practice)
                      @if ($practice->session_id == 4)
                      <label for="">{{$practice->title}}</label><br>
                      <label for="">{{$practice->description}}</label><br>
                      <a href="#" class="btn btn-secondary" >Iniciar</a>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-info mb-3">
                  <div class="card-header">Recursos Adicionales</div>
                  <div class="card-body text-info">
                    <p class="card-text">
                      @foreach ($plus as $pluses)
                      @if ($pluses->session_id == 4)
                      <label for="">{{$pluses->title}}</label><br>
                      <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="{{$pluses->description}}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
                <div class="card border-dark mb-3">
                  <div class="card-header">Exámen</div>
                  <div class="card-body text-dark">
                    <p class="card-text">
                      @foreach ($exam as $exams)
                      @if ($exams->session_id == 4)
                      <label for="">{{$exams->title}}</label>
                      <a href="#" class="btn btn-secondary" >Iniciar</a>
                      @endif
                      @endforeach
                    </p>
                  </div>
                </div>
              </div>


            </div>
          </div>
          </div>
      </div>
    </div>


    <div class="collapse" id="collapseSecond">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
    <div class="collapse" id="collapseThird">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
    <div class="collapse" id="collapseFive">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
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
