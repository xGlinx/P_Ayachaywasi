<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body style="background-color:#E8DAEF;"><br>
    <h2 style="text-align:center;">Hoja de Vida</h2><br>
    <?php
    foreach ($student as $students) :?>
    <h3 style="text-align:center; color:#7D3C98;">{{$students->first_name}} {{$students->last_name}}</h3><br>
    <img src="{{asset('storage').'/'.$students->picture}}" alt="..." class="img-thumbnail" style="width:200px; height:200px; margin-left:250px;">
      <h4 style="text-align:center; color:#7D3C98;">Mis Datos Personales</h4><br>
      <table class="table table-sm" style="text-align:center; font-size:14px">
        <tbody>
          <tr>
            <th></th>
            <th><label class="card-text" for="" style="font-weight:bold;">{{'Género:'}}</label>
                <label for="">{{$students->gender}}</label></th>
            <td><label class="card-text" for="" style="font-weight:bold;">{{'F.Nacimiento:'}}</label>
                <label for="">{{$students->date_birth}}</label></td>
            <td><label class="card-text" for="" style="font-weight:bold;">{{'Colegio:'}}</label>
                <label for="">{{$students->school}}</label><br></td>
          </tr>
          <tr>
            <th></th>
            <th><label class="card-text" for="" style="font-weight:bold;">{{'Celular:'}}</label>
                <label for="">{{$students->phone_number}}</label><br></th>
            <td><label class="card-text" for="" style="font-weight:bold;">{{'Email:'}}</label>
                <label for="">{{$students->email}}</label><br></td>
          </tr>
          <tr>
            <th></th>
            <th><label class="card-text" for="" style="font-weight:bold;">{{'País:'}}</label>
                <label for="">{{$students->country}}</label><br></th>
            <td><label class="card-text" for="" style="font-weight:bold;">{{'Ciudad:'}}</label>
                <label for="">{{$students->city}}</label><br></td>
            <td><label class="card-text" for="" style="font-weight:bold;">{{'Código Postal:'}}</label>
                <label for="">{{$students->postal_code}}</label><br></td>
          </tr>
        </tbody>
      </table>
    <?php endforeach;?>
    <br>
    <h4 style="text-align:center; color:#7D3C98;">Mis Logros</h4><br>
    <table class="table table-striped" style="font-size:13px;">
      <thead>
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
            <td style="width:200px;"> {{$achs->description}}</td>
            <td>{{$achs->reference}} </td>
            <td> {{$achs->date}}</td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table><br><br>

  <h4 style="text-align:center; color:#7D3C98;">Mis Habilidades</h4><br>
  <table class="table table-striped"  style="font-size:13px;">
    <thead>
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
</table><br>

  <h4 style="text-align:center; color:#7D3C98;">Mis Actividades</h4><br>
  <table class="table table-striped" style="font-size:13px;">
    <thead>
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
          <td style="width:200px;"> {{$activities->description}}</td>
          <td>{{$activities->reference}} </td>
          <td> {{$activities->date}}</td>
    </tr>
    <?php endforeach;?>
  </tbody>
  </table>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
