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


<div class="collapse navbar-collapse" id="navigation-example">
    <ul class="nav navbar-nav navbar-right">
        @guest
            <li><a href="{{ route('login') }}">entrar</a></li>
            <li><a href="{{ route('register') }}">registrar</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">

                    <li>
                        <a href="{{url('/admin/home')}}">Dashboard</a>

                    </li>


                    <li>
                        <a href="{{url('/')}}">ir interfaz usuario</a>

                    </li>
                    @if(auth()->user()->admin)
                    <li>
                        <a href="{{url('/admin/animals/')}}">Gestionar animals</a>

                    </li>

                    <li>
                        <a href="{{url('/admin/posts/')}}">Gestionar noticies</a>

                    </li>
                    @endif
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Desconectar
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest

    </ul>
</div>





@yield('content')

<footer>



</footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('scripts')
</html>