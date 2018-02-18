<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','protectora')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <style>
        .bg-1 {
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }
        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }

        .container-fluid {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        @yield('styles')
    </style>
</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand"  href="/">Protectora </a>
        </div>
        <ul class="nav navbar-nav">
            <li ><a href="/noticies">Noticies</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Qui som
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/misio">Misio</a></li>
                    <li><a href="/recursos">Recursos</a></li>
                    <li><a href="/equip">Equip</a></li>
                    <li><a href="/instalacions">Instalacions</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="/adopta">Adopta
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/gossos">Gossos</a></li>
                    <li><a href="/gats">Gats</a></li>

                </ul>
            </li> <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Participa
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Fes-te Soci</a></li>
                    <li><a href="#">Fes-te Voluntari</a></li>
                    <li><a href="#">Col.labora</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<div class="container-fluid bg-5 text-center">
    <a href="{{url('/')}}">Buscador</a>
    <a href="{{url('/condicions')}}">condicions</a>
    <a href="{{url('/consells')}}">consells</a>
</div>


@yield('content')
<footer>



</footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('scripts')
</html>