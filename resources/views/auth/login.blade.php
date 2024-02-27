<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
    <title>Inicio de sesion</title>
</head>

<body>
    
        <div class="contenedor">
            <div class="imagen">
                <img src="{{ asset('images/fondopng.png') }}" alt="logo de la compañia">
            </div>
            <div class="contenedorFormulario">
                <div class="titulologin">
                    <img src="{{ asset('images/TITULO.png') }}" alt="logo de la compañia">
                </div>
                <form class="formulario" action="{{route('login')}}"  method="POST">
                    @csrf
                    <input name="email" type="text" class="input" placeholder="Email">
                    <input name="password" type="password" class="input" placeholder="Contrasena">
                    <!-- <input type="text" class="input" placeholder="Username"> -->
                    <br>
                    <br>
                    <div class="contenedorBotones">
                        <button type="submit" class="botones">Iniciar Sesion</button>
    
                    </div>
                </form>
                

            </div>
        </div>
    
</body>

</html>
