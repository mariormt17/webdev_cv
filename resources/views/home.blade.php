@extends('layout')

@section('title', __('Home'))

@section('content')
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6">
				@auth
					<p class="h2 text-secondary">{{ __('Bienvenido Jefe')/*auth()->user()->name*/ }}</p>
				@endauth

				<h1 class="display-4 text-primary">{{ __('Elon Musk') }}</h1>

				<p class="lead text-secondary">{{ __('Welcome to my Web CV') }}</p>

				<a class="btn btn-lg btn-block btn-primary" href="{{ route('projects.index') }}">{{ __('Portfolio') }}</a>
				<a class="btn btn-lg btn-block btn-outline-primary" href="elonmuskcv.pdf" target="_blank">{{ __('Download CV') }}</a>
				<!--Utilizar variables de forma tradicional con codigo php, hacen falta el inicio y el final del codigo php-->
				<!--Bienvenid@ echo $nombre ?? "Invitado" -->
				<!--Forma de hacerlo con blade evitando inyeccion de scripts-->
			</div>

			<div class="col-12 col-lg-6">
				<img class="img-fluid" src="/img/elon.png" alt="Elon Musk" style="width:80%; height: 80%">
			</div>
		</div>
	</div>
@endsection