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
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->

  <div class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>Anon</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>





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

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>

      <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

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
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>


          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Dress & Frock</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Earrings</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Necklace</a>
            </li>

            <li class="submenu-category">
              <a href="#" class="submenu-title">Makeup Kit</a>
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

          <div class="slider-item">

            <img src="./assets/images/logo/banner1.jpeg" alt="women's latest fashion sale" class="banner-img">



          </div>
         <!--  <div class="slider-item">

            <img src="./assets/images/logo/banner2.jpeg" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">




            </div>

          </div>
          -->

        </div>

      </div>


    </div>





    <!--
      - CATEGORY
    -->

    <div class="category">

      <div class="container">

        <div class="category-item-container has-scrollbar">

            @foreach ($categories as $categorie )
            <div class="category-item">
                <div class="category-content-box">
                  <div class="category-content-flex">
                    <h3 class="category-item-title">{{ $categorie->name }}</h3>
                    <p class="category-item-amount">({{ $categorie->products()->count() }})</p>
                  </div>

                  <a href="#" class="category-btn">Voir Tout</a>

                </div>

              </div>

            @endforeach



        </div>

      </div>

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->

        <div class="sidebar  has-scrollbar" data-mobile-menu>

            <div class="sidebar-category">
                <div class="sidebar-top">
                    <h2 class="sidebar-title">Categories</h2>
                    <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <ul class="sidebar-menu-category-list">
                    @foreach($categories as $categorie)
                    <li class="sidebar-menu-category">
                        <button class="sidebar-accordion-menu" data-accordion-btn>
                            <div class="menu-title-flex">
                                <p class="menu-title">{{ $categorie->name }}</p>
                            </div>
                            <div>
                                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                            </div>
                        </button>

                        <ul class="sidebar-submenu-category-list" data-accordion>
                            @foreach($categorie->products as $product)
                            <li class="sidebar-submenu-category">
                                <a href="{{ route('produits.show',$product->id) }}" class="sidebar-submenu-title">
                                    <p class="product-name">{{ $product->name }}</p>
                                    <data value="{{ $product->quantite }}" class="stock" title="Available Stock">{{ $product->quantite }}</data>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>


          <div class="product-showcase">

            <h3 class="showcase-heading">best sellers</h3>

            <div class="showcase-wrapper">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/1.jpg" alt="baby fabric shoes" width="75" height="75"
                      class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">baby fabric shoes</h4>
                    </a>

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$4.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img"
                      width="75" height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">men's hoodies t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$17.00</del>
                      <p class="price">$7.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">girls t-shirt</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-half-outline"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$5.00</del>
                      <p class="price">$3.00</p>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="./assets/images/products/4.jpg" alt="woolen hat for men" class="showcase-img" width="75"
                      height="75">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">woolen hat for men</h4>
                    </a>
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <div class="price-box">
                      <del>$15.00</del>
                      <p class="price">$12.00</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>



        <div class="product-box">

          <!--
            - PRODUCT MINIMAL
          -->

        <!--   <div class="product-minimal">

            <div class="product-showcase">

              <h2 class="title">New Arrivals</h2>

              <div class="showcase-wrapper has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Relaxed Short full Sleeve T-Shirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$45.00</p>
                        <del>$12.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-2.jpg" alt="girls pink embro design top" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Girls pnk Embro design Top</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$61.00</p>
                        <del>$9.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/clothes-3.jpg" alt="black floral wrap midi skirt" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Black Floral Wrap Midi Skirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Clothes</a>

                      <div class="price-box">
                        <p class="price">$76.00</p>
                        <del>$25.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shirt-1.jpg" alt="pure garment dyed cotton shirt" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                      </a>

                      <a href="#" class="showcase-category">Mens Fashion</a>

                      <div class="price-box">
                        <p class="price">$68.00</p>
                        <del>$31.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-5.jpg" alt="men yarn fleece full-zip jacket" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$61.00</p>
                        <del>$11.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-1.jpg" alt="mens winter leathers jackets" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>

                      <a href="#" class="showcase-category">Winter wear</a>

                      <div class="price-box">
                        <p class="price">$32.00</p>
                        <del>$20.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jacket-3.jpg" alt="mens winter leathers jackets" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                      </a>

                      <a href="#" class="showcase-category">Jackets</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$25.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shorts-1.jpg" alt="better basics french terry sweatshorts" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                      </a>

                      <a href="#" class="showcase-category">Shorts</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="product-showcase">

              <h2 class="title">Trending</h2>

              <div class="showcase-wrapper  has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-1.jpg" alt="running & trekking shoes - white" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$49.00</p>
                        <del>$15.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-2.jpg" alt="trekking & running shoes - black" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$78.00</p>
                        <del>$36.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/party-wear-1.jpg" alt="womens party wear shoes" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">Party wear</a>

                      <div class="price-box">
                        <p class="price">$94.00</p>
                        <del>$42.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$54.00</p>
                        <del>$65.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/sports-6.jpg" alt="air tekking shoes - white" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                      </a>

                      <a href="#" class="showcase-category">Sports</a>

                      <div class="price-box">
                        <p class="price">$52.00</p>
                        <del>$55.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Boot With Suede Detail</h4>
                      </a>

                      <a href="#" class="showcase-category">boots</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-1.jpg" alt="men's leather formal wear shoes" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">formal</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                      </a>

                      <a href="#" class="showcase-category">Casual</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$55.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <div class="product-showcase">

              <h2 class="title">Top Rated</h2>

              <div class="showcase-wrapper  has-scrollbar">

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/watch-3.jpg" alt="pocket watch leather pouch" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Pocket Watch Leather Pouch</h4>
                      </a>

                      <a href="#" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$50.00</p>
                        <del>$34.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-3.jpg" alt="silver deer heart necklace" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                      </a>

                      <a href="#" class="showcase-category">Jewellery</a>

                      <div class="price-box">
                        <p class="price">$84.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/perfume.jpg" alt="titan 100 ml womens perfume" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Titan 100 Ml Womens Perfume</h4>
                      </a>

                      <a href="#" class="showcase-category">Perfume</a>

                      <div class="price-box">
                        <p class="price">$42.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/belt.jpg" alt="men's leather reversible belt" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                      </a>

                      <a href="#" class="showcase-category">Belt</a>

                      <div class="price-box">
                        <p class="price">$24.00</p>
                        <del>$10.00</del>
                      </div>

                    </div>

                  </div>

                </div>

                <div class="showcase-container">

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-2.jpg" alt="platinum zircon classic ring" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                      </a>

                      <a href="#" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$62.00</p>
                        <del>$65.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/watch-1.jpg" alt="smart watche vital plus" class="showcase-img" width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Smart watche Vital Plus</h4>
                      </a>

                      <a href="#" class="showcase-category">Watches</a>

                      <div class="price-box">
                        <p class="price">$56.00</p>
                        <del>$78.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/shampoo.jpg" alt="shampoo conditioner packs" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">shampoo conditioner packs</h4>
                      </a>

                      <a href="#" class="showcase-category">cosmetics</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                  <div class="showcase">

                    <a href="#" class="showcase-img-box">
                      <img src="./assets/images/products/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img"
                        width="70">
                    </a>

                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                      </a>

                      <a href="#" class="showcase-category">jewellery</a>

                      <div class="price-box">
                        <p class="price">$20.00</p>
                        <del>$30.00</del>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div> -->



          <!--
            - PRODUCT FEATURED
          -->




          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">Nouveaux Produits</h2>

            <div class="product-grid">

                @php
                use Illuminate\Support\Str;
            @endphp

            @foreach($produits as $produit)
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
          <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                    </a>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">$150.00</p>

                      <del>$200.00</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p>
                          already sold: <b>20</b>
                        </p>

                        <p>
                          available: <b>40</b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">

                <div class="showcase">

                  <div class="showcase-banner">
                    <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                  </div>

                  <div class="showcase-content">

                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <h3 class="showcase-title">
                      <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                    </h3>

                    <p class="showcase-desc">
                      Lorem ipsum dolor sit amet consectetur Lorem ipsum
                      dolor dolor sit amet consectetur Lorem ipsum dolor
                    </p>

                    <div class="price-box">
                      <p class="price">$1990.00</p>
                      <del>$2000.00</del>
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                        <p> already sold: <b>15</b> </p>

                        <p> available: <b>40</b> </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                      <div class="countdown">
                        <div class="countdown-content">
                          <p class="display-number">360</p>
                          <p class="display-text">Days</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

              <p class="testimonial-name">Alan Doe</p>

              <p class="testimonial-title">CEO & Founder Invision</p>

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
                Lorem ipsum dolor sit amet consectetur Lorem ipsum
                dolor dolor sit amet.
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ $10</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>

                </div>

              </a>

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

            </div>

          </div>

        </div>

      </div>

    </div>





    <!--
      - BLOG
    -->

    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Fashion</a>

              <a href="#">
                <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
              </a>

              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Clothes</a>

              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>

              <p class="blog-meta">
                By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Shoes</a>

              <h3>
                <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
              </h3>

              <p class="blog-meta">
                By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
              </p>

            </div>

          </div>

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Electronics</a>

              <h3>
                <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
              </h3>

              <p class="blog-meta">
                By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
              </p>

            </div>

          </div>

        </div>

      </div>

    </div>

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
