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
                        Social World
                </div>
                <div class="links">
                <img src="http://getorganizedapp.com/wp-content/uploads/2016/08/banner-5.jpg">
                </div>
                <div class="links">
                    <a href="https://Facebook.com">Facebook</a>
                    <a href="https://github.com/">Github</a>
                    <a href="https://www.youtube.com/">YouTube</a>
                    <a href="https://twitter.com/">Twitter</a>
                    <a href="https://www.instagram.com/">Instagram</a>
                    <a href="https://snapchat.com/">Snapchat</a>
                    <a href="https://www.4chan.org/">4Chan</a>
                    <a href="https://www.reddit.com/">Reddit</a>
                </div>
            </div>
        </div>
    </body>
</html>
