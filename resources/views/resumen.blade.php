<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Resumen</title>
  </head>
  <body>
    <h1>Resumen</h1>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Clientes</th>
      <th scope="col">Financiado</th>
      <th scope="col">Fecha de ministracion</th>
      <th scope="col">Fecha de vencimiento</th>
      <th scope="col">Cuota</th>
      <th scope="col">Numero_de_pago</th>
      <th scope="col">Pagos Realizados</th>
      <th scope="col">Abonado</th>
      <th scope="col">Salto Pendiente</th>
    </tr>
  </thead>
  <tbody>
@foreach($resumen as $item)
<tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->Clientes}}</td>
      <td>{{$item->Finanaciado}}</td>
      <td>{{$item->Fecha_de_ministracion}}</td>
      <td>{{$item->Fecha_de_vencimiento}}</td>
      <td>{{$item->Cuota}}</td>
      <td>{{$item->Pagos_Realizados}}</td>
      <td>{{$item->Abonado}}</td>
      <td>{{$item->Salto_Pendiente}}</td>


    
    </tr>
    @endforeach
  </tbody>
</table>
   


  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>