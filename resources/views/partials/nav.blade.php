<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
                <a class="nav-link" href="{{ route('articles.index') }}">articles</a>
                <a class="nav-link" href="{{ route('articles.create') }}">Ajouter Article</a>
                <a class="nav-link" href="{{ route('users.create') }}">Ajouter User</a>
                @guest
                    <a class="nav-link" href="{{ route('login.show') }}">Se connecter</a>
                @endguest
                @auth
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login.logout') }}">Deconnexion</a></li>
                        </ul>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>