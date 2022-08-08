<div class="navbar navbar-expand-md bg-light">
    <div class="container-fluid">
        <div class="navbar-brand">
            <img src="{{ asset('images/bluesheep.png') }}" alt="Icon" width="48" class="rounded-circle">
            Anders Schütt
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <div class="navbar-nav">
                <a href="{{ route('welcome') }}" @class(['nav-link', 'active' => Route::is('welcome')])>Home</a>
                <a href="{{ route('cv') }}" @class(['nav-link', 'active' => Route::is('cv')])>CV</a>
                <a href="{{ route('contact') }}" @class(['nav-link', 'active' => Route::is('contact')])>Contact</a>
                <a href="https://github.com/bluesheep100" class="nav-link" target="_blank">Github</a>
            </div>
        </div>
    </div>
</div>
