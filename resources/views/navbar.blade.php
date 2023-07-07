<div class="navbar navbar-expand-md bg-light">
    <div class="container-fluid">
        <div class="navbar-brand">
            <img src="{{ asset('images/bluesheep.webp') }}" alt="Icon" width="48" class="rounded-circle">
            Anders Schütt
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <div class="navbar-nav">
                <a href="{{ route('welcome') }}" @class(['nav-link', 'active' => Route::is('welcome')])>Home</a>
                <a href="{{ route('cv') }}" @class(['nav-link', 'active' => Route::is('cv')])>CV</a>
                <a href="{{ route('contact') }}" @class(['nav-link', 'active' => Route::is('contact')])>Contact</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tools
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('bionic') }}">Bionic Reading</a></li>
                        <li><small class="dropdown-item disabled">More to come!</small></li>
                    </ul>
                </div>
                <a href="https://github.com/bluesheep100/portfolio" class="nav-link" target="_blank">Github</a>
            </div>
        </div>
    </div>
</div>
