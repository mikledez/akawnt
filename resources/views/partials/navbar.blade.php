<nav id="mainNav" class="navbar navbar-expand-lg fixed-top transparent">
    <div class="container">
        <a class="navbar-brand" href="#home">Akawnt</a>

        <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">

            <i class="bi bi-list fs-4"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navMenu">
            
            <ul class="navbar-nav align-items-lg-center gap-lg-1">
                <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                @if(Auth::guard('admin')->check())
                    <li class="nav-item ms-lg-2">
                        <a class="nav-link nav-cta" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
                    </li>
                @elseif(Auth::check())
                    <li class="nav-item ms-lg-2">
                        <a class="nav-link nav-cta" href="{{ route('applicant.dashboard') }}">Dashboard</a>
                    </li>
                @else
                    <li class="nav-item ms-lg-2 dropdown">
                        <a class="nav-link nav-cta dropdown-toggle" href="#" id="loginDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="loginDropdown">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accountant</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ route('admin.login') }}">Admin</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>