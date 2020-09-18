<!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{ route('rol.store') }}">Inicio</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('gestion.index') }}">Gestion</a></li>
                        @auth
						<li><a href="#" onclick="event.preventDefault();
                  			document.getElementById('logout-form').submit();">Cerrar Sesion</a></li>
						@else
						<li><a href="{{ route('login') }}">Login</a></li>
						@endauth
                    </ul>
                </div>
            </div>
        </nav>

{{-- <nav>

		<ul>
			<li class="{{ setActive('home') }}"><a href="{{ route('home') }}">@lang('Home')</a></li>
			<li class="{{ setActive('about') }}"><a href="{{ route('about') }}">@lang('About')</a></li>
			<li class="{{ setActive('projects.*') }}"><a href="{{ route('projects.index') }}">@lang('Projects')</a></li>
			<li class="{{ setActive('contact') }}"><a href="{{ route('contact') }}">@lang('Contact')</a></li>

			@auth
				<li><a href="#" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Cerrar Sesion</a></li>
			@else
				<li><a href="{{ route('login') }}">Login</a></li>
			@endauth
			
		</ul>
</nav> --}}
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	@csrf
 </form>