<nav class="navbar bg-white navbar-light navbar-expand-sm shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            {{config('app.name')}}
        </a>
        <button 
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
            >
                <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{ setActive('home') }}" href="{{route('home')}}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('about') }}" href="{{route('about')}}">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('projects.*') }}"
                        href="{{route('projects.index')}}">
                        Portafolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActive('contacto') }}" href="{{route('contacto')}}">
                        Contacto
                    </a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Cerrar sesion</a>
                    </li>
                @else
                    <li><a href="{{route('login')}}">Login</a></li>
                @endauth
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
</nav>
