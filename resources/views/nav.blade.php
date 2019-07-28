<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="" class="img-thumbnail">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="#">Commercial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Defense</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Space</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Innovation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Global</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Principal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Carrers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Company</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>