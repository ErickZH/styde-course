<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Styde.net</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/usuarios') }}">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/usuarios/nuevo') }}">Crear usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/usuarios/5') }}">Ver usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/usuarios/5/edit') }}">Editar usuario</a>
            </li>
        </ul>
    </div>
</nav>
