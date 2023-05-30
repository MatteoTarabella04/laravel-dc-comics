<ul class="nav nav-tabs">
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link" aria-current="page">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
            aria-haspopup="true" aria-expanded="false">Admin</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('comics.index') }}">Comics Table</a>
            <a class="dropdown-item" href="{{ route('comics.create') }}">Create Comic</a>
        </div>
    </li>
</ul>
