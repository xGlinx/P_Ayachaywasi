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
            <a href="{{url('/career')}}">Recomendaciones</a>
            <a href="{{url('/university')}}">Universidades</a><br>
            <a href="{{url('/taller')}}">Universidades</a><br>
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
    <h1>Taller Virtual</h1>
    <h2>Administación y Contabilidad</h2>


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
  </div>


  <h3 style="text-align:center;">Talleres Virtuales</h3><br>
  <img src="{{ asset('img/adm.jpeg')}}" style="width:100px;height:100px; margin-left:100px;">
  <img src="{{ asset('img/agraria.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
  <img src="{{ asset('img/ing.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
  <img src="{{ asset('img/art.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
  <img src="{{ asset('img/medicine.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
  <img src="{{ asset('img/human.jpeg')}}" style="width:100px;height:100px;margin-left:30px;">
  <img src="{{ asset('img/secure.jpeg')}}" style="width:100px;height:100px;margin-left:30px;"><br><br>
  <table class="table" style="text-align:center">
      <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th style="width:200px;">Facultad</th>
        <th style="width:600px;">Descripción</th>
        <th>Acción</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Administración y Contabilidad</td>
        <td>Consta de diferentes talleres que permitirán su perspectiva con talleres vivenciales de las
          carreras de Administración de Empresas, Administración y finanzas, Administración y Negocios internacionales,
          Contabilidad y finanzas, Contabilidad, Contabilidad y Auditoría; entre otras carreras.
        </td>
        <td><a href="{{url('/taller/workshop1')}}" class="btn btn-info">Ver Taller</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Humanidades y ciencias sociales</td>
        <td>Consta de diferentes talleres que ayudarán con la elección con una de las diferentes carreras de esta facultades como son las
          carreras de Bibliotecología y Gestión del Conocimiento, Ciencias y Artes Culinarias, Comunicación Pública, Docencia y Educación,
          Filosofía, Geografía, Humanidades, Lenguas y Culturas Extranjeras, Periodismo, Sociología, Trabajo Social entre muchas otras.</td>
        <td><a href="index_studentWorkshop2.html" class="btn btn-info">Ver Taller</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Artes</td>
        <td>Los diferentes talleres te ayudarán a visualizar más las carreras que enfoca esta facultad con las carrereras tales
          como son Artes con mención Teoría e Historia del Arte, Pedagogía en Artes Visuales, Diseño industrial, Técnico en Arte y Gestión Cultural,
          Arte Terapia, Dibujo Técnico Industrial, Artes plásticas y visuales, Educación artistica y entre otras.</td>
        <td><a href="index_studentWorkshop3.html" class="btn btn-info">Ver Taller</a></td>
      </tr>
      <tr>
        <td>4</td>
        <td>Medicina y Ciencias de la Salud</td>
        <td>Los siguientes talleres te ayudarán a ver como es el campo de acción de las diferentes carreras pertenecientes a esta muy conocida
          ciencia, entre ellas muchos se enfocan en las siguientes carreras: Odontología, Farmacia, Podología, Fisioterapia, Enfermería,
          Veterinaria, Logopedia, Psicología, y la carrera de Medicina Humana con sus diferentes especializaciones.
        </td>
        <td><a href="index_studentWorkshop4.html" class="btn btn-info">Ver Taller</a></td>
      </tr>
      <tr>
        <td>5</td>
        <td>Ingeniería y Computación</td>
        <td>Los talleres sobre esta famosa facultad te ayudarán a ver el mundo con los ojos de las diferentes ingenierías que hoy en día ayudan
          al mundo de manera increible con sus diferentes aplicaciones e innovaciones constantes tales como son las carreras de Ingeniería aeroespacial,
          Ingeniería química, Ingeniería civil, Ingeniería mecánica, Ingeniería de producción, Ingeniería de Telecomunicación (Teleco) y de Sistemas de Comunicación,
          Ingeniería del Software, Ingeniería Eléctrica y Electrónica, Ingeniería en Diseño Industrial y Desarrollo de Producto, Ingeniería en Informática,
          Ingeniería en Organización Industrial, Ingeniería en Tecnologías Industriales y muchísimas otras más.</td>
        <td><a href="index_studentWorkshop5.html" class="btn btn-info">Ver Taller</a></td>
      </tr>
      <tr>
        <td>6</td>
        <td>Defensa y Seguridad</td>
        <td>Los diferentes talleres te ayudarán a ver las experiencias de las diferentes personas que hicieron de la defensa y seguridad un lugar para
          demostrar que tambien son competentes frente a cualquier situación tales como son la Policía Nacional, Ejercito del Perú, Marina de Guerra del Perú y
          la Fuerza Aérea del Perú asi como sus diferentes especialziaciones y categorización de cada una de ellas.
        </td>
        <td><a href="index_studentWorkshop6.html" class="btn btn-info">Ver Taller</a></td>
      </tr>
      <tr>
        <td>7</td>
        <td>Ciencias exactas y agrarias</td>
        <td>Consta de diferentes talleres que permitirán su perspectiva con talleres vivenciales de las
          carreras de Agronomía, Ciencias Forestales, Industrias alimentarias, Ingeniería Agrícola, Pesquería, Zootecnia y muchas más.</td>
        <td><a href="index_studentWorkshop7.html" class="btn btn-info">Ver Taller</a></td>
      </tr>
    </tbody>
  </table>



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
