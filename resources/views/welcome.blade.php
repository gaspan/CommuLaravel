<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CommuId</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link href="css/hal-umum.css" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                CoomuId
                </div>
                <div class="accordian">
                    <ul>
                        <li>
                            <div class="image_title">
                                <a href="#">KungFu Panda</a>
                            </div>
                            <a href="#">
                                <img src="http://thecodeplayer.com/uploads/media/3yiC6Yq.jpg"/>
                            </a>
                        </li>
                        <li>
                            <div class="image_title">
                                <a href="#">Toy Story 2</a>
                            </div>
                            <a href="#">
                                <img src="http://thecodeplayer.com/uploads/media/40Ly3VB.jpg"/>
                            </a>
                        </li>
                        <li>
                            <div class="image_title">
                                <a href="#">Wall-E</a>
                            </div>
                            <a href="#">
                                <img src="http://thecodeplayer.com/uploads/media/00kih8g.jpg"/>
                            </a>
                        </li>
                        <li>
                            <div class="image_title">
                                <a href="#">Up</a>
                            </div>
                            <a href="#">
                                <img src="http://thecodeplayer.com/uploads/media/2rT2vdx.jpg"/>
                            </a>
                        </li>
                        <li>
                            <div class="image_title">
                                <a href="#">Cars 2</a>
                            </div>
                            <a href="#">
                                <img src="http://thecodeplayer.com/uploads/media/8k3N3EL.jpg"/>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </body>
</html>
