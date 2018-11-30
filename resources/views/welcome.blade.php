<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hola</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="css/Bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .Cuadrado{
                margin-top: 15px;
                width: 100px;
                height: 100px;
                position: relative;
                animation-name: Cuadro;
                animation-duration: 4s;
                animation-iteration-count: infinite;
                border-radius: 5px;
            }

            @keyframes Cuadro {
                0%  {background-color:orange; left:1px;}
                25% {background-color: #79ff6e ; left:200px;}
                50% {background-color: #abe6ff ; left:1px;}
                75% {background-color: #79ff6e ; left:-200px;}
                100% {background-color:orange; left:1px;}
}

        </style>
    </head>
    <div class="container">
  <h2>Listas To-Do</h2>
  <div class="card">
    <div class="card-body">
               @if (Route::has('login'))
                <div class="contariner">
                    @auth
                        <a href="{{ url('/home') }}">Registrate</a>
                    @else
                        <a href="{{ route('login') }}">Entra</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrate</a>
                        @endif
                    @endauth
                </div>
            @endif
     

    </div>
  </div>
</div>

    <center>
    <div class="Cuadrado">
        
    </div>       
    </center>
    

    </body>
</html>
