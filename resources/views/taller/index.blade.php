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
    <h3 style="text-align:center;">Talleres Virtuales</h3><br>
    <img src="{{ asset('img/adm.jpeg')}}" style="width:100px;height:100px; margin-left:100px;">
    <img src="{{ asset('img/agraria.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
    <img src="{{ asset('img/ing.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
    <img src="{{ asset('img/art.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
    <img src="{{ asset('img/medicine.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
    <img src="{{ asset('img/human.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
    <img src="{{ asset('img/secure.jpeg')}}" style="width:100px;height:100px;margin-left:30px;"><br>
    <div class="row" style="margin-top:60px;">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Administración y Contabilidad</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Humanidades y ciencias sociales</a>
          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Artes</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Medicina y Ciencias de la Salud</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-ing" role="tab" aria-controls="ing">Ingeniería y Computación</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-seg" role="tab" aria-controls="seg">Defensa y Seguridad</a>
          <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-sci" role="tab" aria-controls="sci">Ciencias exactas y agrarias</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <h5 style="text-align:center;">Administación y Contabilidad</h5>
            <p>Consta de diferentes talleres que permitirán su perspectiva con talleres vivenciales de las
              carreras de Administración de Empresas, Administración y finanzas, Administración y Negocios internacionales,
              Contabilidad y finanzas, Contabilidad, Contabilidad y Auditoría; entre otras carreras.</p><br>
              <div>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/A5UxoazzeOc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/q0p9A7s0ghs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                 <br>
                 <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/bbIVDj4pV7Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
               <br>
               <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/TNSzw58rc70" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
             <br>
            </div>
          </div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <h5 style="text-align:center;">Humanidades y ciencias sociales</h5>
            <p>Consta de diferentes talleres que ayudarán con la elección con una de las diferentes carreras de esta facultades como son las
              carreras de Bibliotecología y Gestión del Conocimiento, Ciencias y Artes Culinarias, Comunicación Pública, Docencia y Educación,
              Filosofía, Geografía, Humanidades, Lenguas y Culturas Extranjeras, Periodismo, Sociología, Trabajo Social entre muchas otras.</p><br>
              <div>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/814r0sItwm0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zlvo41y2XLM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                 <br>
                 <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/O5MflLgu-y0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
               <br>
               <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/hFj3Nk-1a2U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
             <br>
            </div>
          </div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <h5 style="text-align:center;">Artes</h5>
            <p>Los diferentes talleres te ayudarán a visualizar más las carreras que enfoca esta facultad con las carrereras tales
              como son Artes con mención Teoría e Historia del Arte, Pedagogía en Artes Visuales, Diseño industrial, Técnico en Arte y Gestión Cultural,
              Arte Terapia, Dibujo Técnico Industrial, Artes plásticas y visuales, Educación artistica y entre otras.</p><br>
              <div>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/H-gN5mb-YcE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7Inde3n6HkM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                 <br>
              </div>
          </div>
          <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
            <h5 style="text-align:center;">Medicina y Ciencias de la Salud</h5>
            <p>Los siguientes talleres te ayudarán a ver como es el campo de acción de las diferentes carreras pertenecientes a esta muy conocida
              ciencia, entre ellas muchos se enfocan en las siguientes carreras: Odontología, Farmacia, Podología, Fisioterapia, Enfermería,
              Veterinaria, Logopedia, Psicología, y la carrera de Medicina Humana con sus diferentes especializaciones.</p><br>
              <div>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/khJo0b-t3W0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/2H79Oa4Q3BI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                 <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/j7phhAkiV3k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/mvc-E8YOwf0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                 <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/L4v0q1njapw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
          </div>
          <div class="tab-pane fade" id="list-ing" role="tabpanel" aria-labelledby="list-ing-list">
            <h5 style="text-align:center;">Ingeniería y Computación</h5>
            <p>Los talleres sobre esta famosa facultad te ayudarán a ver el mundo con los ojos de las diferentes ingenierías que hoy en día ayudan
              al mundo de manera increible con sus diferentes aplicaciones e innovaciones constantes tales como son las carreras de Ingeniería aeroespacial,
              Ingeniería química, Ingeniería civil, Ingeniería mecánica, Ingeniería de producción, Ingeniería de Telecomunicación (Teleco) y de Sistemas de Comunicación,
              Ingeniería del Software, Ingeniería Eléctrica y Electrónica, Ingeniería en Diseño Industrial y Desarrollo de Producto, Ingeniería en Informática,
              Ingeniería en Organización Industrial, Ingeniería en Tecnologías Industriales y muchísimas otras más.</p><br>
              <div>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3hHPGrZv1jM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3hHPGrZv1jM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kYngX0TcoTk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/UC1XhNWdDvc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sBMq2YSNoK0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <br>
              </div>
          </div>
          <div class="tab-pane fade" id="list-seg" role="tabpanel" aria-labelledby="list-seg-list">
            <h5 style="text-align:center;">Defensa y Seguridad</h5>
            <p>Los diferentes talleres te ayudarán a ver las experiencias de las diferentes personas que hicieron de la defensa y seguridad un lugar para
              demostrar que tambien son competentes frente a cualquier situación tales como son la Policía Nacional, Ejercito del Perú, Marina de Guerra del Perú y
              la Fuerza Aérea del Perú asi como sus diferentes especialziaciones y categorización de cada una de ellas.</p><br>
              <div>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sXlDO5rr04Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/M3ypZHcDiA0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/A536xU8jJHA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </div>
          </div>
          <div class="tab-pane fade" id="list-sci" role="tabpanel" aria-labelledby="list-sci-list">
            <h5 style="text-align:center;">Ciencias exactas y agrarias</h5>
            <p>Consta de diferentes talleres que permitirán su perspectiva con talleres vivenciales de las
              carreras de Agronomía, Ciencias Forestales, Industrias alimentarias, Ingeniería Agrícola, Pesquería, Zootecnia y muchas más.</p><br>
              <div>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/csCl5DTGg5U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/uHiQkTp2ON4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <br>
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/gR81OqID0c4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
          </div>
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
