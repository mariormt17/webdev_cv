<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'WebPage')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<script type="text/javascript" src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
	<div id="app" class="d-flex flex-column h-screen justify-content-between">
		<header>
			@include('partials/nav')

			@include('partials.session-status')
		</header>

		<main class="py-4">
			@yield('content')
		</main>

		<footer class="bg-white text-black-50 py-2 px-2 shadow">
			{{ __('©Copyright @ 2020 by Elon Musk') }}
			<br>
			{{ __('Proudly created with Laravel') }}
		</footer>
	</div>
</body>
</html>