<!DOCTYPE html>
<html>
<head>
  <title>Soporte Técnico | Rider's Hub</title>
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
      margin-top: 20px;
    }

    .parrafo {
      font-family: 'Times New Roman', serif;
      font-size: 20px;
      align-items: center;
      text-align: center;
    }

    .contenedor__principal {
      margin-left: 300px; /* Ajusta el valor según tus necesidades */
      margin-right: 300px; /* Ajusta el valor según tus necesidades */
    }

    /* FORMULARIO */
    .col_right {
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 2rem;
        align-items: center;
    }

    form {
        min-width: 35rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        font-size: 1.1rem;
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0px 0px 48px 7px rgba(0,0,0,0.23);
        margin-bottom: 10px;
    }

    .input__field {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    input[type="text"],
    input[type="email"],
    input[type="date"] {
        padding: 0.7rem;
        border-radius: 0.5rem;
        border: 1px solid #bcbcbc;
    }

    .remember {
        font-size: 1rem;
    }
    
    .btn_primary {
        border: none;
        padding: 0.8rem;
        font-size: 1rem;
        background: black;
        color: white;
        border-radius: 10px;
        box-sizing: content-box;
        transition: 0.1s background ease-in;
        max-height: 30px;
        border: 2px solid black;
    }

    .btn_primary:hover {
       background: white;
       color: black;
    }

    .field_remember {
        display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
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
                <li><a href="{{ route('Nosotros') }}">Rider's Hub</a></li>
                <li><a href="#">Soporte Técnico</a></li>
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
      <div class="contenedor__principal">
        <div class="section__1">
            <h1 class="titulo">¿Algún problema?</h1>
            <p class="parrafo">En Rider's Hub, nos preocupamos por brindarte la mejor experiencia y un servicio de calidad. Si encuentras algún fallo o problema en nuestra plataforma, te agradeceríamos que nos informaras al respecto. Tu colaboración nos ayudará a mejorar y ofrecerte un servicio aún mejor.</p>
            <p class="parrafo">Por favor, rellena este formulario a continuación para proporcionarnos los detalles sobre el fallo que has encontrado. Nuestro equipo de soporte técnico trabajará para resolverlo lo antes posible.</p>
        </div>

        <div>
          <div class="col_right">
            <form action="/formulario" method="POST">
                @csrf

                <div class="input__field">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>

                <div class="input__field">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="input__field">
                    <label for="telefono">Telefono:</label>
                    <input type="text" name="telefono" id="telefono" required>
                </div>

                <div class="input__field">
                    <label for="fecha">Fecha:</label>
                    <input type="date" name="fecha" id="fecha" required>
                </div>

                <div class="input__field">
                    <label for="error">Incidencia:</label>
                    <textarea name="error" id="error" placeholder="Maximo 220 palabras." required></textarea>
                </div>

                <button class="btn_primary">
                  {{ __('ENVIAR') }}
                </button>
            </form>
          </div>

          @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif
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


