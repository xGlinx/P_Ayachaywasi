<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  </head>

  <body>

<div class="">

  <div class="header">
    <nav class="navbar navbar-dark bg-dark">  <!--Cabecera de la página-->
      <a class="navbar-brand" href="index_student.html">
        <img src="img/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">Yachaywasi</a>
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
                 <img src="img/people.png" width="30" height="30" class="d-inline-block align-top" alt="">
               </a>
               <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Alex Turner
               </button>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="#">Perfil</a>
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
        <div class="card-header" id="headingOne">
          <p class="mb-0">
            <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Test Vocacional</a>
          </p>
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
  <div class="second-section" style="margin-left:205px;"> <!--Formulario-->

    <h1 class="display-4" style="margin-bottom:30px;">Planes de Suscripción</h1>
      <!--Facturas-->
    <div class="card-suscription">
      <div class="card text-center h-100" style="margin-left:150px;">
        <div class="card-body">
          <h3 class="card-title">Prueba Gratuita</h3>
          <h5 class="card-title">$0.00</h5>
          <p class="card-text">Los beneficios de este plan son:</p>
          <ul class="list-group">
            <li class="list-group-item">• Acceso a todos los cursos segun el nivel y grado de estudios.</li>
            <li class="list-group-item">• Acceso a un test vocacional.</li>
            <li class="list-group-item">• Acceso a un taller vivencial.</li>
          <a href="#" class="btn btn-primary">Suscribirse</a>
        </ul>
        </div>
      </div>


      <div class="card text-center h-100">
        <div class="card-body">
          <h3 class="card-title">Plan Mensual</h3>
          <h5 class="card-title">$33.00</h5>
          <p class="card-text">Los beneficios de este plan son:</p>
          <ul class="list-group">
            <li class="list-group-item">• Acceso a todos los cursos segun el nivel y grado de estudios.</li>
            <li class="list-group-item">• Acceso ilimitado a los test vocacional.</li>
            <li class="list-group-item">• Acceso ilimitado a los talleres vivenciales.</li>
            <li class="list-group-item">• Acceso a creación de CV Estudiantil.</li>
          <a href="{{url('/paypal/pay')}}" class="btn btn-primary">Suscribirse</a>
        </ul>
        </div>
      </div>


      <div class="card text-center h-100">
        <div class="card-body">
          <h3 class="card-title">Plan Anual</h3>
          <h5 class="card-title">$100.00</h5>
          <p class="card-text">Los beneficios de este plan son:</p>
          <ul class="list-group">
          <li class="list-group-item">• Acceso a todos los cursos segun el nivel y grado de estudios.</li>
          <li class="list-group-item">• Acceso ilimitado a los test vocacional.</li>
          <li class="list-group-item">• Acceso ilimitado a los talleres vivenciales.</li>
          <li class="list-group-item">• Acceso a creación de CV Estudiantil.</li>
          <li class="list-group-item">• Descuento del 10%.</li>
          <a href="{{url('/paypal/pay')}}" class="btn btn-primary">Suscribirse</a>
        </ul>
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
                <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">Yachaywasi</a>
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
