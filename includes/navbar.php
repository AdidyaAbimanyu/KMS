<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2C2C54;">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="assets/img/brand.png" alt="KAI Logo" height="50">
        </a>

        <!-- Search Bar -->
        <form class="d-flex ms-3 flex-grow-1">
            <input class="form-control me-2" type="search" placeholder="Cari pelatihan" aria-label="Search">
            <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
        </form>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-light" href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="/listcourse">Pelatihan</a></li>
                <li class="nav-item"><a class="nav-link text-light" href="/knowledge">Pusat Pengetahuan</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light" href="#" id="helpDropdown" data-bs-toggle="dropdown" role="button">
                        Bantuan <i class="fas fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="helpDropdown">
                        <li><a class="dropdown-item" href="/help/faqs">FAQs</a></li>
                        <li><a class="dropdown-item" href="/help/contact">Hubungi Kami</a></li>
                        <li><a class="dropdown-item" href="/help/tutorials">Tutorial</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link btn text-dark bg-light" href="/signin">Masuk</a></li>
            </ul>
        </div>
    </div>
</nav>