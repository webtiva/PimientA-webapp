<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <style>
    * {
      margin: 0;
      padding: 0;
    }
    @page {
            margin: 0cm 0cm;
            font-family: sans-serif;
        }

    .page {
      /* border: dashed gray 1px; */
      position: relative;
    }
    .page > img {
      width: 100%;
      position: absolute;
    }
    .end-page {
      padding: 3cm;
    }
    .container-datos {
      padding: 0.5cm;
      border: solid black 1px;     
      position: relative;
      width: 100%;
      height: 8cm;
    }
    .col-sides {
      width: 10%;
      position: absolute;
      height: 100%;
    }
    .col-medium {
      width: 80%;
      position: absolute;
      height: 100%;
      left: 10%;
    }
    img.logo {
      width: 100%;
    }
    .datos-institucion {
      text-align: center;
      font-weight: bolder;
    }
    .datos-solicitante {
      padding-top: 1cm;
    } 
    h1, h2 {
      padding: 0;
      margin: 0;
    }
    h1 {
      font-size: 22px;
    }
    h2 {
      font-size: 18px;
    }
    p {
      margin: 0;
      padding: 0;
      margin-bottom: 5px;
    }
    .field {
      font-weight: bold;
      display: inline-block;
      width: 2cm;
    }
    .datos-n-hojas {
      width: 100%;
      font-weight: bolder;
      text-align: right;
    }
    .fecha-emision {
      padding-top: 1cm;
      text-align: center;
      font-size: 14px;
    }
    .nombre-sol {
      text-transform: uppercase;
      display: inline-block;
    }
  </style>
  <style>
    .page-break {
        page-break-after: always;
    }
    </style>


</head>
<body>
  {{-- <div class="document"> --}}
    @foreach ($pages as $page)
    <div class="page">
      <img src="{{public_path($page->url)}}" alt="">
    </div>

    <div class="page-break"></div>
    @endforeach

    <div class="page end-page">
      <div class="container-datos">
        <div class="col-sides">
          <img class="logo" src="{{public_path('assets/img/logo-umss.jpg')}}" alt="" srcset="">
        </div>
        <div class="col-medium">
          <div class="datos-institucion">
            <h1>PROGRAMA ANALITICO LEGALIZADO</h1>
            <h2>ES COPIA FIEL DEL ORIGINAL</h2>
            <h2>DEPARTAMENTO DE FÍSICA</h2>
            <h2>FACULTAD DE CS. Y TECNOLOGÍA</h2>
            <h2>U.M.S.S.</h2>
          </div>
          <div class="datos-solicitante">
            <p><span class="field">Nombre: </span><span class="nombre-sol">{{$solicitante}}</span></p>
            <p><span class="field">Carrera:</span><span style="display: inline-block">Licenciatura en Ing. Informática</span></p>
            <p><span class="field">Materia:</span><span style="display: inline-block">{{$materia}} ({{$codigo}})</span></p>
          </div>
          <div class="datos-n-hojas">
            <p>Fojas: {{$n_pages}}</p>
          </div>
          <div class="fecha-emision">
            Cochabamba, {{$fecha}}
          </div>
        </div>
        <div class="col-sides" style="right: 0.5cm">
          <img class="logo" src="{{public_path('assets/img/logo-fcyt.png')}}" alt="" srcset="">
        </div>
      </div>
    </div>
  {{-- </div> --}}
</body>
</html>