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
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/x-icon">

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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #ffffff3b;
            font-family: "Poppins", sans-serif;
        }

        .product-detail-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 10px auto;
            padding: 35px;
            background-color: #fff;
            border-radius: 8px;
        }

        .product-images {
            /*   flex: 1; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .product-thumbnails {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .product-thumbnails img {
            width: 135px;
            margin: 7px 15px;
            cursor: pointer;
            border: 2px solid #eee;
        }

        .product-images img {
            max-width: 500px;
            border: 2px solid #eee;
        }

        .product-info {
            flex: 1;
            padding: 20px;
        }

        .product-info h1 {
            margin-top: 0;
        }

        .price {
            font-size: 24px;
            color: #b12704;
            margin: 20px 0;
        }

        .tax-info {
            color: #555;
        }

        .quantity-container {
            margin: 20px 0;
            display: flex;
        }

        .quantity-container label {
            margin-right: 10px;
        }

        .quantity-container input {
            width: 50px;
            padding: 1px;
            font-size: 16px;
        }

        .add-to-cart-btn,
        .buy-now-btn {
            display: inline-block;
            background-color: #86b7af;
            color: #fff;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
            transition: background-color 0.3s;
        }

        .add-to-cart-btn:hover,
        .buy-now-btn:hover {
            background-color: #86b7af;
        }

        .description-container {
            margin-top: 20px;
        }

        .description-container h2,
        .description-container h3 {
            margin: 20px 0 10px;
        }

        .description-container p {
            margin: 10px 0;
        }

        .warning {
            color: #ff0000;
        }

        .related-products {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }

        .related-products h2 {
            text-align: center;
        }

        .product-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .product-item {
            max-width: 200px;
            text-align: center;
            margin: 20px;
        }

        .product-item img {
            width: 100%;
            height: auto;
            border: 1px solid #eee;
            margin-bottom: 10px;
        }
    </style>
    <div class="overlay" data-overlay></div>




    <div class="notification-toast" data-toast>

        <button class="toast-close-btn" data-toast-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="toast-banner">
            <img src="{{ asset('assets/images/products/jewellery-1.jpg') }}" alt="Rose Gold Earrings" width="80"
                height="70">
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
        <div class="product-detail-container">
            <div class="product-images">
                <img src="{{ asset('images/' . $produit->image->first()->path) }}" alt="Gel Nettoyant White System" class="active">
                <div class="product-thumbnails">
                    @foreach ($produit->image as $item)
                        <img src="{{ asset('images/' . $item->path) }}" alt="Gel Nettoyant White System" class="thumbnail">
                    @endforeach
                </div>
            </div>

            <div class="product-info">
                <h1>{{ $produit->name }}</h1>
                <p class="price">{{ $produit->prix }} TND</p>
                <p class="tax-info">Taxes et expéditions calculées à l'étape de paiement.</p>
                <div class="quantity-container">
                    <label style="font-weight: 600;" for="quantity">Quantité : </label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1">
                </div>
                <button class="add-to-cart-btn">Ajouter au Panier</button>
                <button class="buy-now-btn">Acheter maintenant</button>
                <div class="description-container">
                    <h2>Description :</h2>
                    <p>
                        {{ $produit->description }}
                    </p>

                </div>
            </div>
        </div>

        <div class="related-products">
            <h2>Vous pouvez aussi acheter</h2>
            <br>
            <div class="product-grid">
                @foreach ($produitsMemeCategorie as $item)
                    <div class="showcase">
                        <div class="showcase-banner">
                            <a href="{{ route('produits.show',$produit->id) }}" style="cursor: pointer">
                            @if ($item->image   ->isNotEmpty())
                                <img src="{{ asset('images/' . $item->image->first()->path) }}"
                                    alt="{{ Str::limit($item->name, 10) }}" class="product-img default"
                                    width="300">
                            @endif
                            @if ($item->image->count() > 1)
                                <img src="{{ asset('images/' . $item->image->skip(1)->first()->path) }}"
                                    alt="{{ Str::limit($item->name, 10) }}" class="product-img hover"
                                    width="300">
                            @endif
                        </a>
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
                            <a href="{{ route('produits.show',$produit->id) }}" class="showcase-category">{{ Str::limit($item->name, 30) }}</a>
                            <a href="{{ route('produits.show',$produit->id) }}">
                                <h3 class="showcase-title">{{ Str::limit($item->description, 20) }}</h3>
                            </a>
                            <div class="showcase-rating">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                                <ion-icon name="star-outline"></ion-icon>
                            </div>
                            <div class="price-box">
                                <p class="price">{{ $item->prix }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

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
    <main>
        <div>
        </div>
    </main>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        // JavaScript for changing images
        document.querySelectorAll('.thumbnail').forEach(item => {
            item.addEventListener('click', event => {
                const activeImage = document.querySelector('.product-images .active');
                activeImage.src = event.target.src;
            });
        });

        // JavaScript for zooming images
        const activeImage = document.querySelector('.product-images .active');
        activeImage.addEventListener('mouseover', () => {
            activeImage.style.transform = 'scale(1.5)';
            activeImage.style.transition = 'transform 0.5s ease';
        });

        activeImage.addEventListener('mouseleave', () => {
            activeImage.style.transform = 'scale(1)';
        });
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
</body>

</html>
