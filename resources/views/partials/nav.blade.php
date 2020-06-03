<nav class="navbar navbar-light navbar-expand-md bg-#a2d5f2 shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}">
			{{ __('Portfolio CV') }}
		</a>

		<!--Boton para esconder en menu de opciones en pantallas pequeñas-->
		<button class="navbar-toggler" type="button"
			data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent"
			aria-expanded="false"
			aria-label="{{ __('Toggle navigation') }}">
	        	<span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<a class="nav-link {{ setActive('home') }}" href='{{ route('home') }}'>
						{{ __('Home') }}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('about') }}" href='{{ route('about') }}'>
						{{ __('About') }}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('projects.*') }}" href='{{ route('projects.index') }}'>
						{{ __('Projects') }}
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ setActive('contact') }}" href='{{ route('contact') }}'>
						{{ __('Contact') }}
					</a>
				</li>

				@guest
					<li class="nav-item">
						<a class="nav-link {{ setActive('login') }}"  href="{{ route('login') }}">
							{{ __('Login') }}
						</a>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		            		{{ __('Logout') }}
		            	</a>
		            </li>
				@endguest
			</ul>
		</div>

		<a href="{{ route('change_lang', ['lang' => 'es']) }}">
			<img class="img-thumbnail shadow-sm" src="/img/mexicoFlag.svg" alt="Spanish" width="40px" height="40px">
		</a>
		<a href="{{ route('change_lang', ['lang' => 'en']) }}">
			<img class="img-thumbnail shadow-sm" src="/img/usFlag.svg" alt="English" width="40px" height="40px">
		</a>
	</div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>