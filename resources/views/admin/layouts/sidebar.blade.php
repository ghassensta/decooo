<!--====== Sidebar =======-->
<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('home') }}">
            <i class="bi bi-house-door"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-box-seam"></i><span>Gestions des Produits</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('produits.index') }}">
                    <i class="bi bi-list"></i><span>Listes Produits</span>
                </a>
            </li>
        </ul>
    </li><!-- End Products Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#categories-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-tags"></i><span>Catégories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="categories-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('categories.index') }}">
                    <i class="bi bi-list-ul"></i><span>Listes Catégories</span>
                </a>
            </li>
        </ul>
    </li><!-- End Categories Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#clients-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people"></i><span>Clients</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="clients-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('clients.index') }}">
                    <i class="bi bi-person-lines-fill"></i><span>Listes Clients</span>
                </a>
            </li>
        </ul>
    </li><!-- End Clients Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#vendeuses-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-badge"></i><span>Listes de Vendeuses</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="vendeuses-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('collaborateurs.index') }}">
                    <i class="bi bi-person-badge"></i><span>Listes Vendeuses</span>
                </a>
            </li>
        </ul>
    </li><!-- End Vendeuses Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pending-products-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-hourglass-split"></i><span>Produits en attente</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pending-products-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('admin.produitenattente') }}">
                    <i class="bi bi-clock-history"></i><span>Listes produits créés par les vendeurs</span>
                </a>
            </li>
        </ul>
    </li><!-- End Pending Products Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i>
            <span>Déconnexion</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li><!-- End Logout Nav -->
</ul><!-- End Sidebar Nav -->
