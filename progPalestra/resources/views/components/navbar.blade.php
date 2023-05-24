<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <img src="https://cdn-icons-png.flaticon.com/512/4097/4097652.png" alt="icon" class="icon me-3">
        <a class="navbar-brand" href="/homepage">Palestra GymTonic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item nav-hover">
                    <a class="nav-link @if (Route::currentRouteName() == 'homepage') active @endif" aria-current="page"
                        href="/homepage">
                        La nostra palestra
                    </a>
                </li>
                <li class="nav-item nav-hover">
                    <a class="nav-link @if (Route::currentRouteName() == 'homepage') active @endif" href="/homepage/#chisiamo">Chi
                        siamo</a>
                </li>
                <li class="nav-item nav-hover">
                    <a class="nav-link @if (Route::currentRouteName() == 'corsiDisponibili') active @endif" href="/corsiDisponibili">I
                        nostri corsi</a>
                </li>
                <li class="nav-item nav-hover">
                    <a class="nav-link @if (Route::currentRouteName() == 'Contatti') active @endif" href="/contatti">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
