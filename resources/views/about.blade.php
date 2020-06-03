@extends('layout')

@section('title', __('About'))

@section('content')
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6">
				<img class="img-fluid mb-4" src="/img/about.svg" alt="Quien Soy">
			</div>

			<div class="col-12 col-lg-6">
				<h1 class="display-4 text-primary">{{ __('About') }}</h1>

				<p class="lead text-secondary text-justify">{{__('My name is Elon Musk and I am a computer systems engineer from the Instituto Tecnologico de Colima. I have worked in the most important companies in the country, including Intel, IBM, Google, Magmalabs and Michelada.io. I have over 80 years of experience in almost any technology and tool, such as all Javascript frameworks, Spring Boot and BlueJ, DJango and Flask, any database management system, as well as .Net and .Net Core, to mention a few. My level of English is native backed by the English Native Organization with validation of less than two months.')}}</p>
				<!--Utilizar variables de forma tradicional con codigo php, hacen falta el inicio y el final del codigo php-->
				<!--Bienvenid@ echo $nombre ?? "Invitado" -->
				<!--Forma de hacerlo con blade evitando inyeccion de scripts-->
			</div>
		</div>
	</div>
@endsection