<!DOCTYPE html>
<html>
<head>
  <title>Rider's Hub</title>
  <link rel="icon" type="image/pg" href="{{ asset('img/logoRH.png') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
     itegrity="sha384-rbsA2VBQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous">
  <style>
     /* FOOTER */
    body {
        background-image: url('{{ asset("img/fondogris.png") }}');
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        margin: 0;
        padding-bottom: 100px; /* Agregar espacio para el footer */
    }
 
    /* Estilos para el logo y la barra de navegación */
    header {
        padding: 0.5rem 20px;
        background: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
 
    .logo {
        max-width: 100px;
    }

    .nav-container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin-left: 5rem;
     }

    nav {
      text-align: right;
      width:fit-content;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }

    nav ul li {
      display: inline-block;
      border-right: 1px solid;
    }

    nav ul li:last-child {
      border-right: none;
    }


    nav ul li a {
      display: block;
      padding: 10px 20px;
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    nav ul li a:hover {
      background-color: #ddd;
    }

    /* Estilos para el menú desplegable */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .carousel {
        max-height: 32rem;
        overflow:hidden;
    }

    /* FOOTER */
    .footer {
        background-color: #333333;
        padding: 10px 2rem;
        color: white;
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 2;
    }

    .footer-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .text-left {
        flex-grow: 1;
    }

    .social-media-container {
        display: flex;
        align-items: center;
    }

    .footer-col {
        display: flex;
        flex-direction: row;
        gap: 3rem;
    }

    /* TITULO */
    .titulo {
      text-align: center;
      font-family: 'Times New Roman', serif;
      font-weight: bold;
      font-size: 60px;
      color: #333333;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      margin-bottom: 40px;
    }

    /* IMAGEN LOGO */

    .logoExtendido {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .parrafo {
      font-family: 'Times New Roman', serif;
      font-size: 20px;
      align-items: center;
    }

    .contenedor__principal {
      margin-left: 300px; /* Ajusta el valor según tus necesidades */
      margin-right: 300px; /* Ajusta el valor según tus necesidades */
    }

    .section__2 {
      display: flex;
      gap: 2rem;
    }

    .section__2.1 {
      display: flex;
      flex-direction: column;
    }

  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="{{ asset('img/logoRH.png') }}" alt="Logo" width="60px">
    </div>
    <div class="nav-container">
        <nav>
            <ul>
                <li><a href="{{ route('dashboard') }}">Inicio</a></li>
                <li><a href="{{ route('componentes.index') }}">Gestión</a></li>
                <li><a href="#">Rider's Hub</a></li>
                <li><a href="{{ route('Soporte') }}">Soporte Técnico</a></li>
            </ul>
        </nav>
        <div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $user->name }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Editar</a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
  </header>

    <main>
      <div  class="logoExtendido">
        <img src="/img/logoRH.png" alt="Riders Hub" width="100px">
      </div>

      <div class="contenedor__principal">
        <div class="section__1">
          <h1 class="titulo">NUESTRA HISTORIA</h1>
          <p class="parrafo">Tras dedicarme apasionadamente al mundo del ciclismo durante muchos años, en el año 2023 tomé la valiente decisión de fundar <b>Rider's Hub</b>, una empresa destinada a destacar y expandirse en los medios digitales. Con determinación y entusiasmo, nos embarcamos en esta aventura con el firme propósito de compartir nuestra pasión por las dos ruedas y conectar con una comunidad apasionada de ciclistas de todo el mundo.</p>
          <br>
          <p class="parrafo">A través de nuestro portal web, ofrecemos un servicio eficiente y accesible para la gestión de componentes de bicicleta a todos nuestros usuarios.</p>
        </div>

        <div class="section__2">
          <img src="/img/biciGris.png" alt="Riders Hub" width="50%">
          <div class="section__2.1">
            <p class="parrafo">En Rider's Hub, nos esforzamos por ofrecer un servicio potente, único y accesible en el mundo del ciclismo. Nuestro estilo refleja la tradición y la pasión de este deporte para brindar una experiencia excepcional a nuestros usuarios.</p>
            <ul>
              <li></li>
            </ul>
          </div>
        </div>
        
      </div>

      
      
      
    </main>

    <footer class="footer">
        <!-- <div class="container"> -->
            <div class="footer-content">
                <span>
                    Copyright © 2023 Rider's Hub
                    <br>
                    Contacto: ridershub@ridersdata.com
                    <br>
                    Dirección: Pl. de Antonio Beltrán Martínez, 1, 50002 Zaragoza
                </span>
                <div class="footer-col">
                    <div class="social-media-container">
                        <a href="#"><img src="{{ asset('img/logofacebook.png') }}" alt="Facebook Logo" width="40px" class="social-logo"></a>
                        <a href="#"><img src="{{ asset('img/logotwitter.png') }}" alt="Twitter Logo" width="40px" class="social-logo"></a>
                        <a href="#"><img src="{{ asset('img/logoinstagram.png') }}" alt="Instagram Logo" width="40px" class="social-logo"></a>
                    </div>
                    <img src="{{ asset('img/logoextendido(t)B2.png') }}" alt="Logo Empresa" class="logo">
                </div>
            </div>
        <!-- </div> -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

</body>
</html>


