    <nav id="nav" class="navbar navbar-expand-lg navbar-dark text-light bg-dark h-auto z-1">
    <div class="container-fluid">
        <img src="{{ asset('images/Logo.png') }}" class="navbar-brand object-fit-cover" href="#">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link active p-4 d-flex justify-content-center align-items-center" aria-current="page" href="{{ route('getLanding') }}"><img src="{{ asset('icons/Home_Material.svg') }}" class="me-1 " id="login-icon" alt="">Home</a>
                </li>
            </ul>
            <div class="d-flex mx-3 ms-auto gap-3">
                <a href="{{ route('getAllMovie') }}" class="nav-link active p-4"><img src="{{ asset('icons/Movie_Material.svg') }}" class="me-2" id="login-icon" alt="">Movies</a>
                <div class="div ">
                    <a href="{{ route('getLogin') }}" class="nav-link active p-4"><img src="{{ asset('icons/Login_Material.svg') }}" class="me-2" id="login-icon" alt="">Login</a>
                </div>
                <a href="{{ route('getRegister') }}" class="nav-link active p-4"><img src="{{ asset('icons/Register_Material.svg') }}" class="me-2" id="login-icon" alt="">Register</a>
            </div>
        </div>
    </div>
</nav>
