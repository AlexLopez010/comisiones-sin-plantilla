<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
  <!-- <link rel="stylesheet" href="styles.css"> Enlaza tu archivo de estilos aquí -->
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
    }

    header {
      /* background: #3498db; */
      color: #000;
      text-align: center;
      /* padding: 100px 0; */
    }

    header h1 {
      font-size: 2.5em;
      margin-bottom: 20px;
    }

    .card {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      padding: 50px 0;
    }

    .card-item {
      flex: 0 0 calc(45% - 20px);
      margin: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease-in-out;
    }

    .card-item:hover {
      transform: scale(1.05);
    }

    .card-item img {
      width: 100%;
      height: auto;
    }

    .card-item p {
      padding: 20px;
      text-align: center;
    }

    h4 {
      text-align: center;
    }
  </style>
</head>
<body>

  <header>
    <div class="align-center escudo col-sm-8" style="background-color: #b12028;">
      <a href="https://www.udg.mx/">
        <img alt="Universidad de Guadalajara" src="{{ asset('assets/images/Logo_UDG_horiz_blanco-01.svg') }}" class="logog" style="width: 468px;">
      </a>
    </div>
    <video class="videoSlide" autoplay muted loop>
      <source src="{{ asset('assets/videos/vid_UdeG.mp4') }}" type="video/mp4">
      Su navegador no soporta video
    </video>
  </header>

  <div class="card">
    <div class="card-item">
      <h4>Modular</h4>
      <p>Explicación</p>
    </div>
  </div>

  <div class="card">
    <div class="card-item">
      <img src="{{ asset('assets/images/articulo35.jpg') }}" alt="Imagen 1">
      <h4>Articulo 35.</h4>
      <p>Los alumnos que sean dados de baja de la Universidad de Guadalajara conforme a los artículos 32, 33 y 34 de este ordenamiento no se les autorizará su reingreso a la carrera o posgrado por el cual se les dio de baja. En el caso de bachillerato no se le autorizará su reingreso a ninguna de las modalidades educativas en que se ofrezcan.
        <br>
        <a href="{{url('home')}}" 
          class="btn btn-primary btn-sm">Formulario</a>
      </p>
    </div>
    
    <div class="card-item">
      <img src="{{ asset('assets/images/condonacion.jpg') }}" alt="Imagen 2">
      <h4>Condonación</h4>
      <p>En caso de necesidad comprobada se podrá autorizar un ajuste en la matrícula escolar ya sea mediante una condonación o aplazamiento de las aportaciones que correspondan al alumno, conforme a la reglamentación aplicable.</p>
    </div>
  </div>

</body>
</html>
