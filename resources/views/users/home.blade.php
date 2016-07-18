@extends('layouts.app')

@section('content')

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link  rel="stylesheet" href="{{URL('/assets/css/bootstrap.min.css')}}">
    <link  rel="stylesheet" href="{{URL('/assets/css/bootstrap.min.css')}}">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]--> 
    
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                	Selamat Datang di Aplikasi Laporan keuangan
                     </div>
                     
     <section id="portfolio">
        <div class="container">
            <div class="center">
                 <ul class="portfolio-filter text-center">
                 <li><a class="btn btn-info" href="#" data-filter=".bootstrap">All Works</a></li>
                <li><a class="btn btn-primary " href="#" data-filter="*">Creativitas</a></li>
                <li><a class="btn btn-warning" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-danger" href="#" data-filter=".wordpress">Web Desainer</a></li>
                </ul><!--/#portfolio-filter-->
            </div>
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection