<header>
    <div class="container">
        <div class="nav d-flex align-items-center">
            <div class="logo p-3">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="dc_logo" width="80">
                </a>
            </div>
            <div class="menu m-auto">
                <ul class="list-unstyled d-flex gap-4 mb-0">
                    <li>
                        <strong>
                            <a href="/" class="text-uppercase">characters</a>
                        </strong>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                        <strong>
                            <a href="{{ route('home') }}" class="text-uppercase">comics</a>
                        </strong>
                    </li>
                    <li>
                        <strong>
                            <a href="/" class="text-uppercase">movies</a>
                        </strong>
                    </li>
                    <li>
                        <strong>
                            <a href="/" class="text-uppercase">tv</a>
                        </strong>
                    </li>
                    <li>
                        <strong>
                            <a href="/" class="text-uppercase">games</a>
                        </strong>
                    </li>
                    <li>
                        <strong>
                            <a href="/" class="text-uppercase">collectibles</a>
                        </strong>
                    </li>
                    <li>
                        <strong>
                            <a href="/" class="text-uppercase">videos</a>
                        </strong>
                    </li>
                    <li>
                        <strong>
                            <a href="/" class="text-uppercase">fans</a>
                        </strong>
                    <li>
                        <strong>
                            <a href="/" class="text-uppercase">news</a>
                        </strong>
                    </li>
                    <li>
                        <strong>
                            <a href="/" class="text-uppercase">shop</a>
                        </strong>
                    </li>
                </ul>
            </div>
            <div class="admin">

                <div class="dropdown open">
                    <a type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="{{ route('comics.index') }}">Admin Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
