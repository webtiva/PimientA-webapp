<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <style>
    .document {
      width: 21.5cm;
      font-family: sans-serif;
    }
    .page {
      height: 28cm;
      border: dashed gray 1px;
      padding: 0.1cm;
      overflow: hidden;
    }
    .page > img {
      width: 100%;
    }
    .end-page {
      padding: 3cm;
    }
    .container-datos {
      border: solid black 1px;
      display: flex;
    }
    .col-sides {
      width: 1.5cm;
      padding: 0.8cm 0.4cm;
    }
    img.logo {
      width: 100%;
    }
    .col-medium {
      padding: 0.8cm 0cm;
    }
    .datos-institucion {
      text-align: center;
      font-weight: bolder;
    }
    .datos-solicitante {
      padding-top: 0.3cm;
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
    }
    .field {
      font-weight: bold;
      display: inline-block;
      width: 2cm;
    }
    .datos-n-hojas {
      text-align: end;
      font-weight: bolder;
    }
    .fecha-emision {
      text-align: center;
      font-size: 14px;
    }
    .nombre-sol {
      text-transform: uppercase;
    }
  </style>

</head>
<body>
  <div class="document">
    <div class="page">
      <img src="/assets/img/example-images-pa/page-0001.jpg" alt="">
    </div>
    <div class="page">
      <img src="/assets/img/example-images-pa/page-0002.jpg" alt="">
    </div>
    <div class="page end-page">
      <div class="container-datos">
        <div class="col-sides">
          <img class="logo" src="/assets/img/logo-umss.jpg" alt="" srcset="">
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
            <p><span class="field">Nombre:</span> <span class="nombre-sol"> Quispe reinaga</span></p>
            <p><span class="field">Carrera:</span> Licenciatura en Ing. Informática</p>
            <p><span class="field">Materia:</span> Física Básica II (2006019)</p>
          </div>
          <div class="datos-n-hojas">
            <p>Fojas: 5</p>
          </div>
          <div class="fecha-emision">
            Cochabamba, 17 de agosto de 2023
          </div>
        </div>
        <div class="col-sides">
          <img class="logo" src="/assets/img/logo-fcyt.png" alt="" srcset="">
        </div>
      </div>
    </div>
  </div>
</body>
</html>