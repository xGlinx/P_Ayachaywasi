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
                Docente
               </button>
               <div class="dropdown-menu">
                 <a class="dropdown-item" href="{{url('/student/edit')}}">Perfil</a>
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
    <form class="" action="{{url('/student/'.'1')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PATCH')}}
      <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <?php
                foreach ($student as $students) :?>
                <label class="card-text" for="">{{'Nombres:'}}</label>
                <input type="text" name="first_name" id="first_name" value="{{$students->first_name}}" class="form-control" placeholder=""><br>
                <label class="card-text" for="">{{'Apellidos:'}}</label>
                <input type="text" name="last_name" id="last_name" value="{{$students->last_name}}" class="form-control" placeholder=""><br>
                <label class="card-text" for="">{{'Género:'}}</label>
                <select id="gender" name="gender" class="form-control">
                <option selected>Seleccionar</option>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
                <option value="Otro">Otro</option>
                </select><br>
                <label class="card-text" for="">{{'Fecha de Nacimiento:'}}</label>
                <input type="date" name="date_birth" id="date_birth" value="{{$students->date_birth}}" class="form-control" placeholder=""><br>
              </div>
              <div class="col-4">
                <label class="card-text" for="">{{'Número de Celular:'}}</label>
                <input type="text" name="phone_number" id="phone_number" value="{{$students->phone_number}}" class="form-control" placeholder=""><br>
                <label class="card-text" for="">{{'Colegio de Procedencia:'}}</label>
                <input type="text" name="school" id="school" value="{{$students->school}}" class="form-control" placeholder=""><br>
                <label class="card-text" for="">{{'País:'}}</label>
                <input type="text" name="country" id="country" value="{{$students->country}}" class="form-control" placeholder=""><br>
                <label class="card-text" for="">{{'Ciudad:'}}</label>
                <input type="text" name="city" id="city" value="{{$students->city}}" class="form-control" placeholder=""><br>
              </div>
              <div class="col-4">
              <label class="card-text" for="">{{'Código Postal:'}}</label>
              <input type="text" name="postal_code" id="postal_code" value="{{$students->postal_code}}" class="form-control" placeholder=""><br>
              <label for="exampleFormControlFile1">{{'Fotografía:'}}</label>
              <input type="file" class="form-control-file" id="picture" name="picture">
              <img src="{{asset('storage').'/'.$students->picture}}" alt="..." class="img-thumbnail">
              <input name="visible" id="visible" value="1" class="form-control" type="hidden"><br>
              </div>
            <?php endforeach;?>
            </div>
          </div>
        </div>
      </div>
    <div class="button_control"><br>
      <button class="btn btn-primary" type="submit">Guardar</button>
      <button class="btn btn-danger" type="button">Cancelar</button>
    </div>
    </div>
  </form>
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
