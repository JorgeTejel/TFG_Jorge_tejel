<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous">

    <style>

    body {
        background-image: url('{{ asset("img/fondogris.png") }}');
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 100vh;
        margin: 0;
        padding-bottom: 100px; /* Agregar espacio para el footer */
    }

    /* FOOTER */
    .footer {
        background-color: #333333;
        padding: 20px 0;
        color: white;
        position: fixed;
        bottom: 0;
        width: 100%;
    }

    .footer .logo-container img {
        width: 250px;
        height: auto;
        margin-bottom: 10px;
    }

    .footer-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .social-media-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .social-logo {
        width: 60px;
        height: 60px;
        margin: 0 10px;
    }

    </style>

</head>
<body>
    
    @yield('contenido')

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <h5 class="text-center">Copyright © 2023 Rider´s Hub</h5>
                <div class="social-media-container text-center">
                    <a href="#"><img src="{{ asset('img/logofacebook.png') }}" alt="Facebook Logo" class="social-logo"></a>
                    <a href="#"><img src="{{ asset('img/logotwitter.png') }}" alt="Twitter Logo" class="social-logo"></a>
                    <a href="#"><img src="{{ asset('img/logoinstagram.png') }}" alt="Instagram Logo" class="social-logo"></a>
                </div>
                <div class="logo-container ml-auto">
                    <img src="{{ asset('img/logoextendido(t)B2.png') }}" alt="Logo Empresa" class="logo">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
 
</body>
</html>
