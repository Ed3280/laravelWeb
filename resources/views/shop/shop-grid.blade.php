<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font & Icon -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/assets/shop/img/favicon/favicon.ico">
  <link rel="icon" type="image/x-icon" href="/assets/shop/img/favicon/favicon.ico">
  <link rel="icon" type="image/png" href="/assets/shop/img/favicon/favicon.png">
  <link rel="apple-touch-icon" href="/assets/shop/img/favicon/touch-icon-iphone.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/shop/img/favicon/touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/shop/img/favicon/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="167x167" href="/assets/shop/img/favicon/touch-icon-ipad-retina.png">

  <!-- Plugins -->
  <link rel="stylesheet" href="/assets/shop/plugins/nouislider/nouislider.min.css">
  <link rel="stylesheet" href="/assets/shop/plugins/swiper/swiper.min.css">

  <!-- Main style -->
  <link rel="stylesheet" href="/assets/shop/css/style.min.css">

  <title>Mimity</title>
</head>

<body>

  <!-- TOP BAR -->
  <div class="topbar">
    <div class="container-fluid d-flex align-items-center">

      <nav class="nav mr-1 d-none d-md-flex">
        <a class="nav-link nav-link-sm has-icon bg-white pl-0" href="#"><i class="material-icons mr-1">phone</i> 212 123 456 789</a>
        <a class="nav-link nav-link-sm has-icon bg-white" href="#"><i class="material-icons mr-1">mail_outline</i> support@mimity.com</a>
      </nav>

      <nav class="nav nav-circle d-none d-sm-flex">
        <a class="nav-link nav-link-sm nav-icon p-0" href="#"><i class="custom-icon" data-icon="facebook" data-size="17x17"></i></a>
        <a class="nav-link nav-link-sm nav-icon p-0" href="#"><i class="custom-icon" data-icon="twitter" data-size="17x17"></i></a>
        <a class="nav-link nav-link-sm nav-icon p-0" href="#"><i class="custom-icon" data-icon="instagram" data-size="17x17"></i></a>
      </nav>

      <div class="btn-group btn-group-toggle btn-group-sm ml-auto mr-1" data-toggle="buttons" hidden>
        <label class="btn btn-text-primary active">
          <input type="radio" name="lang" checked> EN
        </label>
        <label class="btn btn-text-primary">
          <input type="radio" name="lang"> RU
        </label>
      </div>

      <nav class="nav nav-gap-x-1 ml-auto mr-1">
        <div class="nav-item nav-pills dropdown">
          <a class="nav-link nav-link-sm dropdown-toggle no-caret" href="#" id="currencyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            $ USD
          </a>
          <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="currencyDropdown">
            <button class="dropdown-item active" type="button">$ USD</button>
            <button class="dropdown-item" type="button">€ EUR</button>
            <button class="dropdown-item" type="button">£ UKP</button>
            <button class="dropdown-item" type="button">¥ JPY</button>
          </div>
        </div>
        <div class="nav-item nav-pills dropdown">
          <a class="nav-link nav-link-sm dropdown-toggle no-caret" href="#" id="langDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            English
          </a>
          <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="langDropdown">
            <button class="dropdown-item active" type="button">English</button>
            <button class="dropdown-item" type="button">Français</button>
            <button class="dropdown-item" type="button">Deutsch</button>
            <button class="dropdown-item" type="button">Italiano</button>
          </div>
        </div>
      </nav>

      
      
      <button type="button" data-toggle="modal" data-target="#signinModal" class="btn btn-faded-primary has-icon btn-sm">
        <i class="material-icons mr-1">person</i> Sign in
      </button>
      

    </div>
  </div>
  <!-- /TOP BAR -->

  <!-- HEADER -->
  <header>
    <div class="container-fluid">
      <nav class="nav nav-circle d-flex d-lg-none">
        <a href="#menuModal" data-toggle="modal" class="nav-link nav-icon"><i class="material-icons">menu</i></a>
      </nav>
      <nav class="nav ml-3 ml-lg-0">
        <a href="../../../index.php" class="nav-link has-icon p-0 bg-white">
          <img src="/assets/shop/img/logo.png" alt="Logo" height="40">
        </a>
      </nav>

      <nav class="nav nav-main nav-gap-x-1 nav-pills ml-3 d-none d-lg-flex">
        <div class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle no-caret forwardable" href="../../../index.php" id="homeDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Home
          </a>
          <div class="dropdown-menu" aria-labelledby="homeDropdown">
            <a class="dropdown-item" href="../../../index.php">Layout 1</a>
            <a class="dropdown-item" href="index2.html">Layout 2</a>
            <a class="dropdown-item" href="index3.html">Electronics Store</a>
          </div>
        </div>
        <div class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle no-caret forwardable active" href="shop-categories.html" id="shopDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Shop
          </a>
          <div class="dropdown-menu" aria-labelledby="shopDropdown">
            <a class="dropdown-item" href="shop-categories.html">Shop Categories</a>
            <a class="dropdown-item active" href="shop-grid.html">Shop Grid</a>
            <a class="dropdown-item" href="shop-list.html">Shop List</a>
            <a class="dropdown-item" href="cart.html">Cart</a>
            <div class="dropdown-submenu">
              <a class="dropdown-item" href="checkout-shipping.html">Checkout</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="checkout-shipping.html">Checkout - Shipping</a>
                <a class="dropdown-item" href="checkout-payment.html">Checkout - Payment</a>
                <a class="dropdown-item" href="checkout-review.html">Checkout - Review</a>
                <a class="dropdown-item" href="checkout-complete.html">Checkout - Complete</a>
              </div>
            </div>
            <a class="dropdown-item" href="shop-single.html">Single Product</a>
          </div>
        </div>
        <div class="nav-item dropdown dropdown-hover dropdown-mega">
          <a class="nav-link dropdown-toggle no-caret" href="#" id="megaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            Mega Menu
          </a>
          <div class="dropdown-menu" aria-labelledby="megaDropdown">
            <div class="row">
              <div class="col-lg-3">
                <div class="list-group list-group-flush list-group-no-border list-group-sm">
                  <a href="shop-grid.html" class="list-group-item list-group-item-action"><strong>CLOTHING</strong></a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Polos &amp; Tees</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Casual Shirts</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Jeans</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Casual Trousers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Formal Shirts</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Formal Trousers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Suits &amp; Blazers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Shorts &amp; 3/4ths</a>
                </div>
              </div>
              <div class="col-lg-3 border-left">
                <div class="list-group list-group-flush list-group-no-border list-group-sm">
                  <a href="shop-grid.html" class="list-group-item list-group-item-action"><strong>FOOTWEAR</strong></a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Sports Shoes</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Sneakers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Casual Shoes</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Loafers</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Formal Shoes</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Boots</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Outdoor &amp; Hiking</a>
                  <a href="shop-grid.html" class="list-group-item list-group-item-action">Floaters</a>
                </div>
              </div>
              <div class="col-lg-3 border-left">
                <div class="img img-zoom-in w-100 h-100">
                  <div data-cover="/assets/shop/img/categories/1.jpeg"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show flex-column text-white">
                    <h4 class="card-title text-center">New Men's Fashion</h4>
                    <h6>See what's new</h6>
                    <a href="shop-grid.html" class="btn btn-primary rounded-pill">Shop Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 border-left">
                <div class="img img-zoom-in w-100 h-100">
                  <div data-cover="/assets/shop/img/categories/6.jpeg"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show flex-column text-white">
                    <h4 class="card-title text-center">New Women's Fashion</h4>
                    <h6>See what's new</h6>
                    <a href="shop-grid.html" class="btn btn-danger rounded-pill">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle no-caret forwardable" href="account-profile.html" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="accountDropdown">
            <a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a>
            <a class="dropdown-item" href="account-profile.html">Profile Page</a>
            <a class="dropdown-item" href="account-orders.html">Orders List</a>
            <a class="dropdown-item" href="account-order-detail.html">Order Detail</a>
            <a class="dropdown-item" href="account-wishlist.html">Wishlist</a>
            <a class="dropdown-item" href="account-address.html">Address</a>
          </div>
        </div>
        <div class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle no-caret forwardable" href="blog-grid.html" id="blogDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Blog
          </a>
          <div class="dropdown-menu" aria-labelledby="blogDropdown">
            <a class="dropdown-item" href="blog-grid.html">Post Grid</a>
            <a class="dropdown-item" href="blog-list.html">Post List</a>
            <a class="dropdown-item" href="blog-single.html">Single Post</a>
          </div>
        </div>
        <div class="nav-item dropdown dropdown-hover">
          <a class="nav-link dropdown-toggle no-caret" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pages
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="about.html">About Us</a>
            <a class="dropdown-item" href="contact.html">Contact Us</a>
            <a class="dropdown-item" href="compare.html">Compare</a>
            <a class="dropdown-item" href="faq.html">Help / FAQ</a>
            <a class="dropdown-item" href="404.html">404 Not Found</a>
          </div>
        </div>
        <a class="nav-item nav-link" href="components.html">
          Components
        </a>
      </nav>
      <nav class="nav nav-circle nav-gap-x-1 ml-auto">
        <a class="nav-link nav-icon" data-toggle="modal" href="#searchModal">
          <i class="material-icons">search</i>
        </a>
        <a class="nav-link nav-icon has-badge d-none d-sm-flex" href="account-wishlist.html">
          <i class="material-icons">favorite_border</i>
          <span class="badge badge-pill badge-danger">3</span>
        </a>
        <a class="nav-link nav-icon has-badge" data-toggle="modal" href="#cartModal">
          <i class="material-icons">shopping_cart</i>
          <span class="badge badge-pill badge-danger">4</span>
        </a>
      </nav>

    </div>
  </header>
  <!-- /HEADER -->

  <div class="breadcrumb-container">
    <div class="container-fluid">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../../index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shop Grid</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container-fluid mb-3">
    <div class="row gutters-3">
      <div class="col-md-4 col-lg-3">

        <!-- FILTER MODAL -->
        <div class="modal fade modal-content-left modal-shown-static" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document" style="max-width:300px">
            <div class="modal-content">
              <div class="modal-header border-bottom shadow-sm z-index-1">
                <h5 class="modal-title" id="filterModalLabel">Shop Filters</h5>
                <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
                  <i class="material-icons">close</i>
                </button>
              </div>
              <div class="modal-body p-0 scrollbar-width-thin">
                <div class="accordion accordion-caret" id="accordionSidebar">
                  <div class="card card-style1">
                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-categories" aria-expanded="true">
                      CATEGORIES
                    </a>
                    <div id="filter-categories" class="collapse show">
                      <div class="card-body pt-0">
                        <ul class="list-tree">
                          <li>
                            <a href="#" class="has-arrow">Men's Fashion <small class="text-muted">(120)</small></a>
                            <ul>
                              <li class="mm-active"><a href="javascript:void(0)">Clothing <small class="text-muted">(40)</small></a></li>
                              <li><a href="javascript:void(0)">Shoes <small class="text-muted">(20)</small></a></li>
                              <li><a href="javascript:void(0)">Watches <small class="text-muted">(35)</small></a></li>
                              <li><a href="javascript:void(0)">Accessories <small class="text-muted">(25)</small></a></li>
                            </ul>
                          </li>
                          <li>
                            <a href="#" class="has-arrow">Women's Fashion <small class="text-muted">(140)</small></a>
                            <ul>
                              <li><a href="javascript:void(0)">Clothing <small class="text-muted">(40)</small></a></li>
                              <li><a href="javascript:void(0)">Shoes <small class="text-muted">(30)</small></a></li>
                              <li><a href="javascript:void(0)">Jewelry <small class="text-muted">(25)</small></a></li>
                              <li><a href="javascript:void(0)">Handbags <small class="text-muted">(45)</small></a></li>
                            </ul>
                          </li>
                          <li><a href="javascript:void(0)">Girls' Fashion <small class="text-muted">(95)</small></a></li>
                          <li><a href="javascript:void(0)">Boys' Fashion <small class="text-muted">(97)</small></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card card-style1 border-top">
                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-price" aria-expanded="true">
                      PRICE
                    </a>
                    <div id="filter-price" class="collapse show">
                      <div class="card-body pt-0">
                        <div class="d-flex justify-content-between mb-3">
                          <input type="text" class="form-control form-control-sm rounded-pill bg-light text-center font-condensed mr-2 minw-0" id="price-slider-min" readonly>
                          <input type="text" class="form-control form-control-sm rounded-pill bg-light text-center font-condensed ml-2 minw-0" id="price-slider-max" readonly>
                        </div>
                        <div id="price-slider"></div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-style1 border-top">
                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-size" aria-expanded="true">
                      SIZE
                    </a>
                    <div id="filter-size" class="collapse show">
                      <div class="card-body pt-0">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="size-small">
                          <label class="custom-control-label" for="size-small">Small</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="size-medium" checked="">
                          <label class="custom-control-label" for="size-medium">Medium</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="size-large" checked="">
                          <label class="custom-control-label" for="size-large">Large</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="size-extra-large">
                          <label class="custom-control-label" for="size-extra-large">Extra Large</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-style1 border-top">
                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-colors" aria-expanded="true">
                      COLORS
                    </a>
                    <div id="filter-colors" class="collapse show">
                      <div class="card-body pt-0">
                        <div class="custom-color custom-color-lg">
                          <div class="color-item">
                            <input type="checkbox" id="colorBlue" class="custom-control-input" checked>
                            <label class="rounded-circle" for="colorBlue" style="background-color:#36A2EB"></label>
                          </div>
                          <div class="color-item">
                            <input type="checkbox" id="colorGreen" class="custom-control-input">
                            <label class="rounded-circle" for="colorGreen" style="background-color:#4cc065"></label>
                          </div>
                          <div class="color-item">
                            <input type="checkbox" id="colorRed" class="custom-control-input" checked>
                            <label class="rounded-circle" for="colorRed" style="background-color:#f05a5c"></label>
                          </div>
                          <div class="color-item">
                            <input type="checkbox" id="colorYellow" class="custom-control-input" checked>
                            <label class="rounded-circle" for="colorYellow" style="background-color:#ffb300"></label>
                          </div>
                          <div class="color-item">
                            <input type="checkbox" id="colorTeal" class="custom-control-input">
                            <label class="rounded-circle" for="colorTeal" style="background-color:#19aec6"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-style1 border-top">
                    <a class="card-header h6 bg-white" data-toggle="collapse" href="#filter-brands" aria-expanded="true">
                      BRANDS
                    </a>
                    <div id="filter-brands" class="collapse show">
                      <div class="card-body pt-0">
                        <span class="input-icon">
                          <i class="material-icons">search</i>
                          <input type="search" class="form-control" id="searchBrand" placeholder="Search brand...">
                        </span>
                        <div id="brandList" class="mt-3 overflow-auto scrollbar-width-thin bg-lights px-1">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-tommy-hilfiger">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-tommy-hilfiger">Tommy Hilfiger <small class="text-muted">43</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-nike">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-nike">Nike <small class="text-muted">245</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-hugo-boss">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-hugo-boss">Hugo Boss <small class="text-muted">221</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-burberry">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-burberry">Burberry <small class="text-muted">157</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-levi's">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-levi's">Levi's <small class="text-muted">272</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-gucci">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-gucci">Gucci <small class="text-muted">218</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-lacoste">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-lacoste">Lacoste <small class="text-muted">166</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-adidas">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-adidas">Adidas <small class="text-muted">244</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-the-north-face">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-the-north-face">The North Face <small class="text-muted">10</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-versace">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-versace">Versace <small class="text-muted">205</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-rolex">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-rolex">Rolex <small class="text-muted">203</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-diesel">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-diesel">Diesel <small class="text-muted">132</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-calvin-klein">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-calvin-klein">Calvin Klein <small class="text-muted">55</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-armani-exchange">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-armani-exchange">Armani Exchange <small class="text-muted">207</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-prada">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-prada">Prada <small class="text-muted">42</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-zara">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-zara">Zara <small class="text-muted">112</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-vans">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-vans">Vans <small class="text-muted">192</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-hermès">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-hermès">Hermès <small class="text-muted">88</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-supreme">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-supreme">Supreme <small class="text-muted">186</small></label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brand-converse">
                            <label class="custom-control-label d-flex justify-content-between align-items-center" for="brand-converse">Converse <small class="text-muted">107</small></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card card-style1 border-top">
                    <div class="card-header no-caret px-5 py-2 text-center bg-white">
                      <button class="btn btn-primary rounded-pill btn-sm btn-block" data-dismiss="modal">APPLY</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /FILTER MODAL -->
      </div>
      <div class="col-md-8 col-lg-9">
        <div class="card card-style1">
          <div class="card-body pb-0 d-block d-md-none">
            <button type="button" data-toggle="modal" data-target="#filterModal" class="btn btn-faded-primary btn-sm has-icon">
              <i class="material-icons mr-2">filter_list</i> Filter
            </button>
          </div>
          <div class="card-body d-flex align-items-center py-2">
            Sort by :
            <select class="custom-select custom-select-sm w-auto ml-1 mr-auto">
              <option>Popularity</option>
              <option>Low - High Price</option>
              <option>High - Low Price</option>
              <option>Average Rating</option>
              <option>A - Z Order</option>
              <option>Z - A Order</option>
            </select>
            <a href="shop-grid.html" data-toggle="tooltip" title="Show Grid" class="btn btn-sm btn-text-primary btn-icon rounded-circle active"><i class="material-icons">apps</i></a>
            <a href="shop-list.html" data-toggle="tooltip" title="Show List" class="btn btn-sm btn-text-primary btn-icon rounded-circle ml-1"><i class="material-icons">list</i></a>
          </div>
        </div>
        <div class="d-grid grid-template-col-2 grid-template-col-lg-3 grid-template-col-xl-4 grid-gap-1 grid-gap-sm-3 mt-3">
          <div class="card card-product card-style1">
            <div class="card-body">
              <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
              <button class="btn btn-icon btn-text-secondary rounded-circle btn-quickview quickview-demo" type="button" title="Quick view"><i class="material-icons">zoom_in</i></button>
              <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/1_small.jpg" alt="Card image cap"></a>
              <a href="shop-single.html" class="card-title card-link">Hanes Hooded Sweatshirt</a>
              <span class="badge badge-success">New arrival</span>
              <div class="price"><span class="h5">$18.56</span></div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
            </div>
          </div>
          <div class="card card-product card-style1">
            <div class="card-body">
              <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
              <button class="btn btn-icon btn-text-secondary rounded-circle btn-quickview quickview-demo" type="button" title="Quick view"><i class="material-icons">zoom_in</i></button>
              <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/2_small.jpg" alt="Card image cap"></a>
              <a href="shop-single.html" class="card-title card-link">The Flash Logo T-Shirt</a>
              <div class="price">
                <span class="h5">$16.64</span>
              </div>
              <div class="custom-color custom-color-lg">
                <div class="color-item color-item-light">
                  <input type="radio" name="productColor1" value="/assets/shop/img/products/2_small.jpg" id="productColor1-1" class="custom-control-input" checked>
                  <label for="productColor1-1" class="rounded-circle" style="background-color:#f2c43a"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="productColor1" value="/assets/shop/img/products/2_small_black.jpg" id="productColor1-2" class="custom-control-input">
                  <label for="productColor1-2" class="rounded-circle" style="background-color:#23232b"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="productColor1" value="/assets/shop/img/products/2_small_red.jpg" id="productColor1-3" class="custom-control-input">
                  <label for="productColor1-3" class="rounded-circle" style="background-color:#eb0015"></label>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
            </div>
          </div>
          <div class="card card-product card-style1">
            <div class="card-body">
              <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
              <button class="btn btn-icon btn-text-secondary rounded-circle btn-quickview quickview-demo" type="button" title="Quick view"><i class="material-icons">zoom_in</i></button>
              <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/3_small.jpg" alt="Card image cap"></a>
              <a href="shop-single.html" class="card-title card-link">Open Front Cropped Cardigans</a>
              <span class="badge badge-warning">20% OFF</span>
              <div class="price">
                <span class="h5 del">$19.00</span>
                <span class="h5">$15.20</span>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
            </div>
          </div>
          <div class="card card-product card-style1">
            <div class="card-body">
              <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
              <button class="btn btn-icon btn-text-secondary rounded-circle btn-quickview quickview-demo" type="button" title="Quick view"><i class="material-icons">zoom_in</i></button>
              <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/4_small.jpg" alt="Card image cap"></a>
              <a href="shop-single.html" class="card-title card-link">Cotton Fleece Long Hoodie</a>
              <div class="price">
                <span class="h5 del">$98.90</span>
                <span class="h5">$85.00</span>
              </div>
              <div class="custom-color custom-color-lg">
                <div class="color-item">
                  <input type="radio" name="productColor4" value="/assets/shop/img/products/4_small.jpg" id="productColor4-1" class="custom-control-input" checked>
                  <label for="productColor4-1" class="rounded-circle" style="background-color:#625e39"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="productColor4" value="/assets/shop/img/products/4_small_blue.jpg" id="productColor4-2" class="custom-control-input">
                  <label for="productColor4-2" class="rounded-circle" style="background-color:#2e4797"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="productColor4" value="/assets/shop/img/products/4_small_maroon.jpg" id="productColor4-3" class="custom-control-input">
                  <label for="productColor4-3" class="rounded-circle" style="background-color:#791949"></label>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
            </div>
          </div>
          <div class="card card-product card-style1">
            <div class="card-body">
              <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
              <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/5_small.jpg" alt="Card image cap"></a>
              <a href="shop-single.html" class="card-title card-link">Men's Buck Camp Flannel Shirt</a>
              <span class="badge badge-warning has-icon"><i class="material-icons mr-1">star</i> 5</span>
              <span class="badge badge-danger has-icon"><i class="material-icons mr-1">star</i> Best Seller</span>
              <div class="price"><span class="h5">$29.99</span></div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
            </div>
          </div>
          <div class="card card-product card-style1">
            <div class="card-body">
              <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
              <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/6_small.jpg" alt="Card image cap"></a>
              <a href="shop-single.html" class="card-title card-link">Jurassic Park Logo Men's T-Shirt</a>
              <span class="rating" data-value="4.5"></span>
              <div class="price">
                <span class="h5 del">$12.99</span>
                <span class="h5">$10.99</span>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
            </div>
          </div>
          <div class="card card-product card-style1 d-block d-lg-none d-xl-block">
            <div class="card-body">
              <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
              <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/7_small.jpg" alt="Card image cap"></a>
              <a href="shop-single.html" class="card-title card-link">Short-Sleeve Crewneck T-Shirt</a>
              <div class="price">
                <span class="h5 del">$15.00</span>
                <span class="h5">$14.00</span>
              </div>
              <div class="custom-color custom-color-lg">
                <div class="color-item">
                  <input type="radio" name="productColor7" value="/assets/shop/img/products/7_small.jpg" id="productColor7-1" class="custom-control-input" checked>
                  <label for="productColor7-1" class="rounded-circle" style="background-color:#9fcbf2"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="productColor7" value="/assets/shop/img/products/7_small_grey.jpg" id="productColor7-2" class="custom-control-input">
                  <label for="productColor7-2" class="rounded-circle" style="background-color:#d2cfca"></label>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
            </div>
          </div>
          <div class="card card-product card-style1 d-block d-lg-none d-xl-block">
            <div class="card-body">
              <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
              <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/8_small.jpg" alt="Card image cap"></a>
              <a href="shop-single.html" class="card-title card-link">Slim-Fit Short-Sleeve Printed Shirt</a>
              <div class="price"><span class="h5">$25.00</span></div>
              <div class="btn-group btn-group-sm btn-group-toggle btn-group-circle mt-2" data-toggle="buttons">
                <label class="btn btn-outline-secondary disabled" title="Small size not available">
                  <input type="radio" value="S" name="size" disabled>S
                </label>
                <label class="btn btn-outline-secondary">
                  <input type="radio" value="M" name="size">M
                </label>
                <label class="btn btn-outline-secondary active">
                  <input type="radio" value="L" name="size" checked>L
                </label>
                <label class="btn btn-outline-secondary">
                  <input type="radio" value="XL" name="size">XL
                </label>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
            </div>
          </div>
        </div>
        <div class="card card-style1 mt-3">
          <div class="card-body">
            <ul class="pagination pagination-circle justify-content-center mb-0">
              <li class="page-item disabled"><span class="page-link has-icon"><i class="material-icons">chevron_left</i></span></li>
              <li class="page-item active"><span class="page-link">1</span></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
              <li class="page-item"><a class="page-link has-icon" href="javascript:void(0)"><i class="material-icons">chevron_right</i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    <div class="container-fluid">
      <div class="d-grid grid-template-col-sm-2 grid-template-col-lg-4">
        <div class="px-3 text-center">
          <h5>Subscribe</h5>
          <p>and get <strong class="text-primary">10% discount</strong></p>
          <form>
            <div class="form-group">
              <input type="email" class="form-control rounded-pill text-center" placeholder="Enter your email">
            </div>
            <button type="button" class="btn btn-primary btn-block rounded-pill">SUBSCRIBE</button>
          </form>
        </div>
        <div>
          <h5>Customer Service</h5>
          <div class="list-group list-group-flush list-group-no-border list-group-sm">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Help Center</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">How to buy</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Delivery</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">How to return</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Payment Method</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Shipping Method</a>
          </div>
        </div>
        <div>
          <h5>Mimity</h5>
          <div class="list-group list-group-flush list-group-no-border list-group-sm">
            <a href="about.html" class="list-group-item list-group-item-action">About Us</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Terms and Conditions</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Privacy Policy</a>
            <a href="faq.html" class="list-group-item list-group-item-action">FAQs</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Our Story</a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action">Services</a>
          </div>
        </div>
        <div>
          <h5>Download The App</h5>
          <a href="javascript:void(0)" class="download-app">
            <div class="media">
              <img src="/assets/shop/img/app/google-play.svg" alt="Google Play Logo" height="30">
              <div class="media-body">
                <small>Get it on</small>
                <h5>Google Play</h5>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="download-app">
            <div class="media">
              <img src="/assets/shop/img/app/apple.svg" alt="Apple Logo" height="30">
              <div class="media-body">
                <small>Download on the</small>
                <h5>App Store</h5>
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="download-app">
            <div class="media">
              <img src="/assets/shop/img/app/windows.svg" alt="Windows Logo" height="30">
              <div class="media-body">
                <small>Get it from</small>
                <h5>Microsoft Store</h5>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright">Copyright © 2019 Mimity All right reserved</div>
  <!-- /FOOTER -->

  <!-- SIGN-IN MODAL -->
  <div class="modal fade modal-content-right" id="signinModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">

      <div class="modal-content" id="signinContent">
        <div class="modal-header pb-0">
          <div>
            <h3 class="modal-title">Sign in</h3>
            <em>to your account</em>
          </div>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          <form id="formSignin">
            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">mail_outline</i>
                <input type="email" class="form-control" id="signInEmailInput" placeholder="Email address" required>
              </span>
            </div>
            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">lock_open</i>
                <input type="password" class="form-control" id="signInPasswordInput" placeholder="Password" required>
              </span>
            </div>
            <div class="form-group d-flex justify-content-between">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="rememberCheck" checked>
                <label class="custom-control-label" for="rememberCheck">Remember me</label>
              </div>
              <u><a href="#" class="text-primary small" id="showResetContent">Forgot password ?</a></u>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </form>
          <hr>
          <p class="font-italic">Don't have an account ? <u><a href="#" id="showSignupContent">Sign Up</a></u></p>
          <hr>
          <div class="text-center">
            <p class="font-italic">Or sign in via</p>
            <button class="btn btn-icon btn-faded-primary rounded-circle" data-toggle="tooltip" title="Facebook" data-container="#signinContent">
              <i class="custom-icon" data-icon="facebook" data-size="20x20"></i>
            </button>
            <button class="btn btn-icon btn-faded-info rounded-circle" data-toggle="tooltip" title="Twitter" data-container="#signinContent">
              <i class="custom-icon" data-icon="twitter" data-size="20x20"></i>
            </button>
            <button class="btn btn-icon btn-faded-danger rounded-circle" data-toggle="tooltip" title="Google" data-container="#signinContent">
              <i class="custom-icon" data-icon="gplus" data-size="20x20"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="modal-content" id="signupContent" hidden>
        <div class="modal-header pb-0">
          <div>
            <h3 class="modal-title">Sign up</h3>
            <em>create an account</em>
          </div>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          <form id="formSignup">
            <div class="form-group">
              <input type="text" class="form-control" id="signUpNameInput" placeholder="Full name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="signUpEmailInput" placeholder="Email address" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="signUpPasswordInput" placeholder="Password" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="signUpPasswordConfirmInput" placeholder="Confirm password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
          </form>
          <hr>
          <button class="btn btn-faded-light has-icon btn-sm showSigninContent" type="button">
            <i class="material-icons">chevron_left</i> Back to sign in
          </button>
        </div>
      </div>

      <div class="modal-content" id="resetContent" hidden>
        <div class="modal-header pb-0">
          <div>
            <h3 class="modal-title">Reset Password</h3>
            <em>enter your email address</em>
          </div>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          <form id="formReset">
            <div class="form-group">
              <span class="input-icon">
                <i class="material-icons">mail_outline</i>
                <input type="email" class="form-control" id="resetEmailInput" placeholder="Email address" required>
              </span>
            </div>
            <button type="submit" class="btn btn-danger btn-block">RESET</button>
          </form>
          <hr>
          <button class="btn btn-faded-light has-icon btn-sm showSigninContent" type="button">
            <i class="material-icons">chevron_left</i> Back to sign in
          </button>
        </div>
      </div>

      <div class="modal-content" id="resetDoneContent" hidden>
        <div class="modal-header pb-0 justify-content-end">
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body text-center pt-0">
          <i class="material-icons text-primary display-4">check_circle_outline</i>
          <h3>CHECK YOUR EMAIL</h3>
          <p>We just sent you a letter with instructions to reset your password</p>
          <button class="btn btn-primary btn-block showSigninContent" type="button">Sign in</button>
        </div>
      </div>

    </div>
  </div>
  <!-- /SIGN-IN MODAL -->

  <!-- MENU MODAL -->
  <div class="modal fade modal-content-left" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header align-items-center border-bottom shadow-sm z-index-1">
          <a href="#"><img src="/assets/shop/img/logo.png" alt="Logo" height="40"></a>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body px-0 scrollbar-width-thin">
          <ul class="menu" id="menu">
            <li class="no-sub"><a href="../../../index.php"><i class="material-icons">home</i> Home</a></li>
            <li class="no-sub"><a href="index2.html"><i class="material-icons">home_work</i> Home layout 2</a></li>
            <li class="no-sub"><a href="index3.html"><i class="material-icons">phonelink</i> Electronics Store</a></li>
            <li>
              <a href="#" class="has-arrow"><i class="material-icons">shopping_cart</i> Shop</a>
              <ul>
                <li><a href="shop-categories.html">Shop Categories</a></li>
                <li class="mm-active"><a href="shop-grid.html">Shop Grid</a></li>
                <li><a href="shop-list.html">Shop List</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li>
                  <a href="#" class="has-arrow">Checkout</a>
                  <ul>
                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                    <li><a href="checkout-payment.html">Checkout Payment</a></li>
                    <li><a href="checkout-review.html">Checkout Review</a></li>
                    <li><a href="checkout-complete.html">Checkout Complete</a></li>
                  </ul>
                </li>
                <li><a href="shop-single.html">Single Product</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-arrow"><i class="material-icons">person</i> Account</a>
              <ul>
                <li><a href="account-signin.html">Sign In / Sign Up</a></li>
                <li><a href="account-profile.html">Profile Page</a></li>
                <li><a href="account-orders.html">Orders List</a></li>
                <li><a href="account-order-detail.html">Order Detail</a></li>
                <li><a href="account-wishlist.html" class="has-badge">Wishlist <span class="badge badge-primary badge-pill">3</span></a></li>
                <li><a href="account-address.html">Address</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-arrow"><i class="material-icons">rss_feed</i> Blog</a>
              <ul>
                <li><a href="blog-grid.html">Post Grid</a></li>
                <li><a href="blog-list.html">Post List</a></li>
                <li><a href="blog-single.html">Single Post</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="has-arrow"><i class="material-icons">file_copy</i> Pages</a>
              <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="compare.html">Compare</a></li>
                <li><a href="faq.html">Help / FAQ</a></li>
                <li><a href="404.html">404 Not Found</a></li>
              </ul>
            </li>
            <li class="no-sub"><a href="components.html"><i class="material-icons">check_box_outline_blank</i> Components</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /MENU MODAL -->

  <!-- SEARCH MODAL -->
  <div class="modal fade" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body p-1 p-lg-3">
          <form>
            <div class="input-group input-group-lg input-group-search">
              <div class="input-group-prepend">
                <button class="btn btn-text-secondary btn-icon btn-lg rounded-circle" type="button" data-dismiss="modal">
                  <i class="material-icons">chevron_left</i>
                </button>
              </div>
              <input type="search" class="form-control form-control-lg border-0 shadow-none mx-1 px-0 px-lg-3" id="searchInput" placeholder="Search..." required>
              <div class="input-group-append">
                <button class="btn btn-text-secondary btn-icon btn-lg rounded-circle" type="submit">
                  <i class="material-icons">search</i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /SEARCH MODAL -->

  <!-- CART MODAL -->
  <div class="modal fade modal-content-right modal-cart" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom">
          <h5 class="modal-title" id="cartModalLabel">You have 4 items in your cart</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body scrollbar-width-thin">
          <ul class="list-group list-group-flush">
            <li class="list-group-item px-0">
              <div class="media">
                <a href="shop-single.html" class="mr-2"><img src="/assets/shop/img/products/1_small.jpg" width="50" height="50" alt="Hanes Hooded Sweatshirt"></a>
                <div class="media-body">
                  <a href="shop-single.html" class="d-block text-body" title="Hanes Hooded Sweatshirt">Hanes Hooded Sweatshirt</a>
                  <em class="text-muted">1 x $18.56</em>
                </div>
                <button class="btn btn-icon btn-sm btn-text-danger rounded-circle" type="button"><i class="material-icons">close</i></button>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="media">
                <a href="shop-single.html" class="mr-2"><img src="/assets/shop/img/products/2_small.jpg" width="50" height="50" alt="The Flash Logo T-Shirt"></a>
                <div class="media-body">
                  <a href="shop-single.html" class="d-block text-body" title="The Flash Logo T-Shirt">The Flash Logo T-Shirt</a>
                  <em class="text-muted">2 x $16.64</em>
                </div>
                <button class="btn btn-icon btn-sm btn-text-danger rounded-circle" type="button"><i class="material-icons">close</i></button>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="media">
                <a href="shop-single.html" class="mr-2"><img src="/assets/shop/img/products/3_small.jpg" width="50" height="50" alt="Open Front Cropped Cardigans"></a>
                <div class="media-body">
                  <a href="shop-single.html" class="d-block text-body" title="Open Front Cropped Cardigans">Open Front Cropped Cardigans</a>
                  <em class="text-muted">1 x $15.20</em>
                </div>
                <button class="btn btn-icon btn-sm btn-text-danger rounded-circle" type="button"><i class="material-icons">close</i></button>
              </div>
            </li>
            <li class="list-group-item px-0">
              <div class="media">
                <a href="shop-single.html" class="mr-2"><img src="/assets/shop/img/products/4_small.jpg" width="50" height="50" alt="Cotton Fleece Long Hoodie"></a>
                <div class="media-body">
                  <a href="shop-single.html" class="d-block text-body" title="Cotton Fleece Long Hoodie">Cotton Fleece Long Hoodie</a>
                  <em class="text-muted">1 x $85.00</em>
                </div>
                <button class="btn btn-icon btn-sm btn-text-danger rounded-circle" type="button"><i class="material-icons">close</i></button>
              </div>
            </li>
          </ul>

        </div>
        <div class="modal-footer border-top">
          <div class="mr-auto">
            <em>Subtotal</em>
            <h5 class="mb-0 text-dark font-weight-bold font-condensed">$152.04</h5>
          </div>
          <a href="cart.html" class="btn btn-faded-success">View Cart</a>
          <a href="shipping.html" class="btn btn-success">Checkout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /CART MODAL -->

  <!-- QUICK VIEW MODAL -->
  <div class="modal fade" id="quickviewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle float-right" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
          <div class="row">
            <div class="col-lg-6">
              <div class="swiper-container" id="quickviewSlider">
                <div class="swiper-wrapper">
                  <img src="/assets/shop/img/products/1_medium.jpg" alt="Product" class="swiper-slide">
                  <img src="/assets/shop/img/products/1_medium_yellow.jpg" alt="Product" class="swiper-slide">
                  <img src="/assets/shop/img/products/1_medium_red.jpg" alt="Product" class="swiper-slide">
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev autohide"><i class="material-icons">chevron_left</i></div>
                <div class="swiper-button-next autohide"><i class="material-icons">chevron_right</i></div>
                <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist" data-title="Hanes Men's Pullover EcoSmart Fleece Hooded Sweatshirt"></button>
              </div>
            </div>
            <div class="col-lg-6 mt-3 mt-lg-0">
              <h4 class="card-title font-weight-normal">Hanes Men's Pullover EcoSmart Fleece Hooded Sweatshirt</h4>
              <h6><span class="rating" data-value="4.5"></span> <a href="javascript:void(0)">2 reviews</a></h6>
              <h3 class="price">
                <span class="del">$140.00</span>
                <span >$120.00</span>
              </h3>
              <form>
                <div class="form-group">
                  <label class="font-weight-bold d-block">Size</label>
                  <div class="btn-group btn-group-sm btn-group-toggle btn-group-circle" data-toggle="buttons">
                    <label class="btn btn-outline-secondary" data-toggle="tooltip" title="Small" data-container="#quickviewModal">
                      <input type="radio" name="quickViewProductSize">S
                    </label>
                    <label class="btn btn-outline-secondary active" data-toggle="tooltip" title="Medium" data-container="#quickviewModal">
                      <input type="radio" name="quickViewProductSize" checked>M
                    </label>
                    <label class="btn btn-outline-secondary" data-toggle="tooltip" title="Large" data-container="#quickviewModal">
                      <input type="radio" name="quickViewProductSize">L
                    </label>
                    <label class="btn btn-outline-secondary" data-toggle="tooltip" title="Extra Large" data-container="#quickviewModal">
                      <input type="radio" name="quickViewProductSize">XL
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="font-weight-bold d-block">Color</label>
                  <div class="custom-color custom-color-lg">
                    <div class="color-item">
                      <input type="radio" name="colorOption" id="colorOption-1" class="custom-control-input" checked>
                      <label for="colorOption-1" class="rounded-circle" style="background-color:#314e76"></label>
                    </div>
                    <div class="color-item">
                      <input type="radio" name="colorOption" id="colorOption-2" class="custom-control-input">
                      <label for="colorOption-2" class="rounded-circle" style="background-color:#fcab28"></label>
                    </div>
                    <div class="color-item">
                      <input type="radio" name="colorOption" id="colorOption-3" class="custom-control-input">
                      <label for="colorOption-3" class="rounded-circle" style="background-color:#db4524"></label>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-6">
                    <label class="d-block font-weight-bold">Quantity</label>
                    <div class="custom-spinner">
                      <button class="btn btn-icon rounded-circle btn-faded-primary down" type="button"><i class="material-icons">remove</i></button>
                      <input type="number" class="form-control" value="1" min="1" max="999">
                      <button class="btn btn-icon rounded-circle btn-faded-primary up" type="button"><i class="material-icons">add</i></button>
                    </div>
                  </div>
                  <div class="form-group col-6 d-flex align-items-end">
                    <button class="btn rounded-pill btn-primary btn-block atc-demo" type="button" data-title="Hanes Men's Pullover EcoSmart Fleece Hooded Sweatshirt">Add to Cart</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /QUICK VIEW MODAL -->

  <!-- Main script -->
  <script src="/assets/shop/js/script.min.js"></script>

  <!-- Plugins -->
  <script src="/assets/shop/plugins/nouislider/nouislider.min.js"></script>
  <script src="/assets/shop/plugins/swiper/swiper.min.js"></script>
  
  <!-- Application script -->
  <script src="/assets/shop/js/app.min.js"></script>
  <script>
    $(() => {

      App.atcDemo() // Add to Cart Demo
      App.atwDemo() // Add to Wishlist Demo
      App.quickviewDemo() // Quick view demo
      App.colorOption()
      App.rating()

      // Tree view
      $('.list-tree').metisMenu()

      // Price range slider
      const priceSlider = document.getElementById('price-slider')
      noUiSlider.create(priceSlider, {
        start: [20, 70],
        connect: true,
        range: {
          'min': 0,
          'max': 100
        }
      })
      const prefix = '$'
      const priceSliderValues = [
        document.getElementById('price-slider-min'),
        document.getElementById('price-slider-max')
      ]
      priceSlider.noUiSlider.on('update', (values, handle) => {
        priceSliderValues[handle].value = prefix + values[handle]
      })

      // Filter brand
      document.getElementById('brandList').style.maxHeight = '250px'
      document.getElementById('searchBrand').addEventListener('keyup', function () {
        let value = this.value.toLowerCase()
        $('#brandList .custom-control').filter(function () {
          $(this).toggle($(this).find('label').contents().not($(this).find('label').children()).text().toLowerCase().indexOf(value) > -1)
        })
      })

      // Remove static modal for small devices
      App.resize(() => {
        if (App.smDown()) {
          document.getElementById('filterModal').classList.remove('modal-shown-static')
        } else {
          document.getElementById('filterModal').classList.add('modal-shown-static')
          $('#filterModal').modal('hide')
        }
      })()
      // Make scrollable modal-dialog
      $('#filterModal').on('show.bs.modal', function () {
        $(this).find('.modal-dialog').addClass('modal-dialog-scrollable')
      }).on('hidden.bs.modal', function () {
        $(this).find('.modal-dialog').removeClass('modal-dialog-scrollable')
      })

    })
  </script>
</body>

</html>
