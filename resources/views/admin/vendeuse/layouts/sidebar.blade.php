<!--====== Sidebar =======-->
<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('vendeuse.home') }}">
            <i class="bi bi-house-door"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-box-seam"></i><span>Gestions des Produits Personnels</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('vendeuse.produits') }}">
                    <i class="bi bi-list"></i><span>Liste des Produits</span>
                </a>
            </li>
        </ul>
    </li><!-- End Products Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-tags"></i><span>Liste des Commandes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="orders-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="#">
                    <i class="bi bi-list-ul"></i><span>Liste des Commandes</span>
                </a>
            </li>
        </ul>
    </li><!-- End Orders Nav -->

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
