<div class="header-main">

    <div class="container">

        <a href="/" class="header-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Anon's logo" width="180" height="80">
        </a>

        <div class="header-search-container">

            <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

            <button class="search-btn">
                <ion-icon name="search-outline"></ion-icon>
            </button>

        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <div class="header-user-actions">
            @guest
                <a href="{{ route('login') }}" class="action-btn">
                    <ion-icon name="person-outline"></ion-icon>
                </a>
            @else
                <a href="{{ route('logout') }}" class="action-btn"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <ion-icon name="log-out-outline"></ion-icon>
                </a>

            @endguest

            <a class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>
                <span class="count">0</span>
            </a>

            <a class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon>
                <span class="count">0</span>
            </a>
        </div>


    </div>

</div>

<nav class="desktop-navigation-menu">

    <div class="container">

        <ul class="desktop-menu-category-list">

            <li class="menu-category">
                <a href="#" class="menu-title">Acceuil</a>
            </li>

            <li class="menu-category">
                <a href="#" class="menu-title">Categories</a>

                <div class="dropdown-panel">
                    @foreach ($categories as $item)
                        <ul class="dropdown-panel-list">

                            <li class="menu-title">
                                <a href="#">{{ $item->name }}</a>
                            </li>
                            @foreach ($item->products as $produit)
                                <li class="panel-list-item">
                                    <a href="#">{{ $produit->name }}</a>
                                </li>
                            @endforeach
                          {{--   <li class="panel-list-item">
                                <a href="#">
                                    <img src="{{ asset('catgeiresimages/' . $item->imagecat) }}"
                                        alt="headphone collection" class="fixed-size-image">
                                </a>
                            </li> --}}


                        </ul>
                    @endforeach

                </div>
            </li>

            @foreach ($categories->slice(0, 4) as $item)
                <li class="menu-category">
                    <a href="#" class="menu-title">{{ $item->name }}</a>
                    <ul class="dropdown-list">
                        @foreach ($item->products->slice(0, 4) as $produit)
                            <li class="dropdown-item">
                                <a href="#">{{ $produit->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach





            {{--  <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li> --}}

        </ul>

    </div>

</nav>
<style>
    .fixed-size-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        /* Redimensionne l'image pour couvrir les dimensions définies */
        display: block;
        /* Assure que l'image ne dépasse pas les bordures de l'élément parent */
    }
</style>
