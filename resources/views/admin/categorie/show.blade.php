<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Deco</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets/css/style-prefix.css') }}">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>



  <!--
    - MODAL
  -->

  





  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in new just bought
      </p>

      <p class="toast-title">
        Rose Gold Earrings
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>


  </div>





  <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Livraison gratuite cette semaine pour toute commande de plus de 55 DT.</b>

          </p>
        </div>

        <div class="header-top-actions">



        </div>

      </div>

    </div>



   @include('layouts.nav')


    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shirt</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Shorts & Jeans</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Safety Shoes</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Wallet</a>
            </li>

          </ul>

        </li>

      

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Jewelry</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Couple Rings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Bracelets</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Perfume</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Clothes Perfume</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Deodorant</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Flower Fragrance</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Air Freshener</a>
            </li>

          </ul>

        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Blog</a>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

          <li class="menu-category">

            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Language</p>

              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>

              <li class="submenu-category">
                <a href="#" class="submenu-title">English</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">Fren&ccedil;h</a>
              </li>

            </ul>

          </li>

          <li class="menu-category">
            <button class="accordion-menu" data-accordion-btn>
              <p class="menu-title">Currency</p>
              <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
            </button>

            <ul class="submenu-category-list" data-accordion>
              <li class="submenu-category">
                <a href="#" class="submenu-title">USD &dollar;</a>
              </li>

              <li class="submenu-category">
                <a href="#" class="submenu-title">EUR &euro;</a>
              </li>
            </ul>
          </li>

        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </nav>

  </header>





  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

         
       

        </div>

      </div>


    </div>





    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

      

      </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">

        <div class="product-main">

            <h2 class="title" style="text-align: center">{{ $categories->name }}</h2>

            <div class="product-grid">

                @php
                use Illuminate\Support\Str;
            @endphp

            @foreach($categories->products   as $produit)
                <div class="showcase">

                    <div class="showcase-banner">
                        @if($produit->image->isNotEmpty())
                            <img src="{{ asset('images/' . $produit->image->first()->path) }}" alt="{{ Str::limit($produit->name, 10) }}" class="product-img default" width="300">
                        @endif
                        @if($produit->image->count() > 1)
                            <img src="{{ asset('images/' . $produit->image->skip(1)->first()->path) }}" alt="{{ Str::limit($produit->name, 10) }}" class="product-img hover" width="300">
                        @endif

                        <div class="showcase-actions">
                            <button class="btn-action">
                                <ion-icon name="heart-outline"></ion-icon>
                            </button>

                            <button class="btn-action">
                                <ion-icon name="eye-outline"></ion-icon>
                            </button>

                            <button class="btn-action">
                                <ion-icon name="repeat-outline"></ion-icon>
                            </button>

                            <button class="btn-action">
                                <ion-icon name="bag-add-outline"></ion-icon>
                            </button>
                        </div>
                    </div>

                    <div class="showcase-content">
                        <a href="{{ route('produits.show',$produit->id) }}" class="showcase-category">{{ Str::limit($produit->name, 30) }}</a>

                        <h3>
                            <a href="{{ route('produits.show',$produit->id) }}" class="showcase-title">{{ Str::limit($produit->description, 20) }}</a>
                        </h3>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <div class="price-box">
                            <p class="price">{{ $produit->prix }} DT</p>
                        </div>

                    </div>

                </div>
            @endforeach



            </div>

          </div>

      </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->







    <!--
      - BLOG
    -->

   
  </main>


  <footer>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Catégories Populaires</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Mode</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Électronique</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmétique</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Santé</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Montres</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Produits</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Baisse de prix</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Nouveaux produits</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Meilleures ventes</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contactez-nous</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Plan du site</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Notre Entreprise</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Livraison</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Mentions légales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Conditions générales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">À propos de nous</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Paiement sécurisé</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Baisse de prix</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Nouveaux produits</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Meilleures ventes</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contactez-nous</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Plan du site</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Suivez-nous</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="méthode de paiement" class="payment-img">

        <p class="copyright">
          Copyright &copy;tous droits réservés.
        </p>

      </div>

    </div>

  </footer>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
