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

    .slogan-container {
        background-color: transparent;
        padding: 20px;
        text-align: center;
        margin-top: 2%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .slogan-title {
        font-family: 'Arial', sans-serif;
        font-size: 40px;
        margin: 0;
        line-height: 1.2;
        color: #333333;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .font-style {
        font-family: 'Times New Roman', serif;
        font-weight: bold;
    }

    .slogan-title em {
        font-style: italic;
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
                <li><a href="#">Inicio</a></li>
                <li><a href="{{ route('componentes.index') }}">Gestión</a></li>
                <li><a href="{{ route('Nosotros') }}">Rider's Hub</a></li>
                <li><a href="{{ route('Soporte') }}">Soporte Técnico</a></li>
            </ul>
        </nav>
        <div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    PERFIL
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
        <div class="d-flex justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide w-100" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/sram.png') }}" class="d-block w-100" alt="Sram">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/shimano.png') }}" class="d-block w-100" alt="Shimano">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/trek.png') }}" class="d-block w-100" alt="Trek">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/giantNEW.png') }}" class="d-block w-100" alt="Giant">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/campagnoloNEW.png') }}" class="d-block w-100" alt="Campagnolo">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/cube.png') }}" class="d-block w-100" alt="Cube">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="d-flex justify-content-center my-4">
            <a href="{{ route('componentes.index') }}" class="btn btn-secondary">Ir a Componentes</a>
        </div>
    </main>

    <div class="slogan-container">
        <h1 class="slogan-title">“Componentes en <span class="font-style">SINTONÍA</span>, stock en <span class="font-style">ARMONÍA</span>”</h1>
    </div>

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


