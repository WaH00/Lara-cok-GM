<!-- START NAV BAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
    <div class="container-sm">
        <a class="navbar-brand" href="homePage.html">
            <img src="../image/logo-removebg-preview.png" alt="" width="50" height="50" class="me-1">
            <strong>Green</strong> Market
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex ms-auto my-4 my-lg-0" action="/searchbarang">
                <input class="form-control me-2" type="search" placeholder="Cari Kebutuhan" aria-label="Search" name="search">
                <button class="btn btn-light" type="submit">Cari</button>
            </form>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active': '' }}" aria-current="page" href="/homePage">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Sayur" || $title === "Buah" || $title === "Daging" || $title === "Rempah") ? 'active': '' }}" 
                    href={{ ($title === "Sayur" || $title === "Buah" || $title === "Daging" || $title === "Rempah") ? '/keranjang ': '/sayurkatepro' }}>
                    {{ ($title === "Sayur" || $title === "Buah" || $title === "Daging" || $title === "Rempah") ? 'KERANJANG ': 'SHOP' }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Help") ? 'active': '' }}" href="/help">HELP</a>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Login") ? 'active': '' }}" href="/login">LOGIN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Register") ? 'active': '' }}" href="/register">REGISTER</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAV BAR -->