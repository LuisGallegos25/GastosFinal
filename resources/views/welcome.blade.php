<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }
            h3 {
              color: #6D7781;
                font-family: "Sofia", cursive;
                font-size: 15px;
                 font-weight: bold;
                font-size: 3.6em;
                text-align: center;
                margin-bottom: 20px;
  }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color:white;
                font-family: 'verdana';
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            a {
            color: white;
            text-decoration: none;
            font-size: 50px;
            }


        </style>
    </head>
    <body background="https://www.larutadelsorigens.cat/wallpic/full/8-82119_blur-4k-texturas-fondo-ultra-hd.jpg">
               

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                        Control de Gastos 
                </div>
                <div class="links">
                <img src="http://getorganizedapp.com/wp-content/uploads/2016/08/banner-5.jpg">
                </div>
                <nav class='login'>
                    <ol class='lista'>
                        <ul><a href="/gasto">Gastos</a></ul>
                       
                        <ul><a href="/ingreso">Ingresos</a></ul>
                        
                        <ul><a href="/contacto">Contacto</a></ul>
                    </ol>
                </nav>
                
            </div>
            
        </div>
        
    </body>
</html>
