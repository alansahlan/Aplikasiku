@extends('layouts.member')

@section('content')

<div class="container">
	<h4>Ketersediaan Tempat Tidur</h4>
	<hr>


	<h4><strong>Pilih Kamar</strong></h4>
		{!! Form::open(array('route'=>'users.store')) !!}
		<div class="form-group">
		{!! Form::select('size', [
		'vip' => 'VIP', 
		'vvip' => 'VVIP',
		'Kelas I' => 'Kelas I',
		'Kelas II' => 'Kelas II',
		'Kelas III' => 'Kelas III'],
		null, ['placeholder' => 'Pilih Kamar']); !!}
		<br/>
		<br/>
		{!! Form::submit('Cek Kamar',array('class'=>'btn btn-primary')) !!}
		<button type="submit" class="btn btn-info"><a href="{{ URL::to('/reservasi') }}">Reservasi</a></button>
		{!! Form:: close() !!}
	</div>
	<div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3">
							  
                                <article class="col-md-4 isotopeItem webdesign">
									<div class="portfolio-item">
									<div class="wow rotateInUpLeft" data-animation-delay="4.8s">
										<img src=" {{URL::to('/')}}/images/foto/sas1.jpg" alt="welcome" />
									</div>
										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<h5><a href="#">Project name 1</a></h5>
												<a href=" {{URL::to('/')}}/images/foto/sas1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
											 </div>										   
										 </div>
									</div>
                                </article>

</div>

@stop