<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Working Place</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{URL('/assets/fonts/font/fonts/fontawesome-webfont.eot')}}">
    <link rel="stylesheet" href="{{URL('/assets/fonts/font/lato/Lato.Regular.ttf')}}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{URL('/assets/css/bootstrap.min.css')}}">
 
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        img{
            width: 40px;
            height: 25px;
            border-radius: 60px;

        }
    </style>
</head>
<body id="app-layout">

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">
            <img src="{{URL('/images/brand.png')}}">
            </a>

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/home') }}">
                    APLIKASI KEUANGAN
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Beranda</a></li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Referansi<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="button">
                                <li><a href="{{ url('/home') }}">Kode Klasifikasi</a></li>
                            </ul>  
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Transaksi <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="button">
                                <li><a href="{{ url('/masuk') }}">Pemasukan </a></li>
                                <li><a href="{{ url('/keluar') }}">Pengeluaran</a></li>
                            </ul>   
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Laporan <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="button">
                                <li><a href="{{ url('/laporan/in') }}">Laporan Pemasukan </a></li>
                                <li><a href="{{ url('/laporan/out') }}">Laporan Pengeluaran</a></li>
                                <li><a href="{{ url('/home') }}">Semua Laporan </a></li>
                            </ul>   
                    
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Pengaturan <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="button">
                                <li><a href="{{ url('/home') }}">Instansi Pengguna </a></li>
                                <li><a href="{{ url('/home') }}">Management Admin</a></li>
                            </ul> 
                    
                </ul>
                </li>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="{{ Auth::user()->avatar }}" alt="" class="img-circle">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="button">
                                <li><a href="{{ url('/logout') }}">Logout <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


    <!-- JavaScripts -->
    <script type="text/javascript" src="{{ URL('/assets/js/jquery-2.1.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL('/assets/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
