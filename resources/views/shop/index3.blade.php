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
  <link rel="stylesheet" href="/assets/shop/plugins/swiper/swiper.min.css">

  <!-- Main style -->
  <link rel="stylesheet" href="/assets/shop/css/style.min.css">

  <title>Mimity</title>
</head>

<body>

  <!-- Wrapper -->
  <div class="wrapper">

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="modal fade modal-content-left modal-shown-static" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header align-items-center border-bottoms z-index-1 bg-primary">
              <a href="#"><img src="/assets/shop/img/logo-white.png" alt="Logo" height="40"></a>
              <button class="btn btn-icon btn-sm btn-text-light rounded-circle" type="button" data-dismiss="modal">
                <i class="material-icons">close</i>
              </button>
            </div>
            <div class="modal-body px-0 scrollbar-width-thin">
              <ul class="menu" id="menu">
                <li class="no-sub"><a href="../../../index.php"><i class="material-icons">home</i> Home</a></li>
                <li class="no-sub"><a href="index2.html"><i class="material-icons">home_work</i> Home layout 2</a></li>
                <li class="no-sub mm-active"><a href="index3.html"><i class="material-icons">phonelink</i> Electronics Store</a></li>
                <li>
                  <a href="#" class="has-arrow"><i class="material-icons">shopping_cart</i> Shop</a>
                  <ul>
                    <li><a href="shop-categories.html">Shop Categories</a></li>
                    <li><a href="shop-grid.html">Shop Grid</a></li>
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
    </div>
    <!-- /Sidebar -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-light fixed-top navbar-main">
      <div class="navbar-nav nav-circle d-lg-none mr-auto">
        <a href="#menuModal" data-toggle="modal" class="nav-link nav-icon"><i class="material-icons">menu</i></a>
      </div>
      <form class="form-inline border rounded-lg d-none d-lg-flex">
        <div class="input-group">
          <input type="search" class="form-control border-0 shadow-none" placeholder="Search..." required>
          <div class="input-group-append">
            <button class="btn btn-text-secondary btn-icon" type="submit">
              <i class="material-icons">search</i>
            </button>
          </div>
        </div>
      </form>
      <nav class="nav nav-pills nav-gap-x-1 ml-auto mr-1 d-none d-lg-flex">
        <div class="nav-item dropdown">
          <a class="nav-link nav-link-sm dropdown-toggle" href="../../../index.php" id="currencyDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            $ USD
          </a>
          <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="currencyDropdown">
            <button class="dropdown-item active" type="button">$ USD</button>
            <button class="dropdown-item" type="button">??? EUR</button>
            <button class="dropdown-item" type="button">?? UKP</button>
            <button class="dropdown-item" type="button">?? JPY</button>
          </div>
        </div>
        <div class="nav-item dropdown">
          <a class="nav-link nav-link-sm dropdown-toggle" href="../../../index.php" id="langDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            English
          </a>
          <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="langDropdown">
            <button class="dropdown-item active" type="button">English</button>
            <button class="dropdown-item" type="button">Fran??ais</button>
            <button class="dropdown-item" type="button">Deutsch</button>
            <button class="dropdown-item" type="button">Italiano</button>
          </div>
        </div>
      </nav>
      <nav class="nav nav-circle nav-gap-x-1">
        <a class="nav-link nav-icon d-flex d-lg-none" data-toggle="modal" href="#searchModal">
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
      <nav class="nav">
        <div class="nav-link-divider mx-2"></div>
        <div class="nav-item nav-pills dropdown dropdown-hover">
          <a class="nav-link nav-link-sm dropdown-toggle has-icon hover" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
            <i class="material-icons mr-1">person</i> Hi, John
          </a>
          <div class="dropdown-menu dropdown-menu-right font-size-sm" aria-labelledby="userDropdown">
            <a class="dropdown-item has-icon pr-5" href="account-orders.html"><i class="material-icons mr-2">shopping_cart</i> My Orders</a>
            <a class="dropdown-item has-icon pr-5" href="account-wishlist.html"><i class="material-icons mr-2">favorite_border</i> Wishlist</a>
            <a class="dropdown-item has-icon pr-5" href="account-profile.html"><i class="material-icons mr-2">person</i> Account Setting</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item has-icon pr-5 text-danger" href="account-signin.html"><i class="material-icons mr-2">exit_to_app</i> Sign Out</a>
          </div>
        </div>
      </nav>
    </nav>
    <!-- /Navbar -->

    <!-- Main Content -->
    <div class="main">

      <!-- HOME SLIDER -->
      <div class="swiper-container" id="homeSlider">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-cover="/assets/shop/img/slider/electro/1.jpg" data-height="160px 265px 300px 300px 300px">
            <div class="overlay-content overlay-show align-items-end text-white">
              <div class="text-center">
                <h1 class="animated font-weight-bold" data-animate="fadeDown">Business Casual<br/>Outfit Ideas</h1>
                <a href="shop-grid.html" class="btn btn-faded-primary rounded-pill animated mt-4" data-animate="fadeUp">SHOP NOW</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-cover="/assets/shop/img/slider/electro/2.jpg" data-height="160px 265px 300px 300px 300px">
            <div class="overlay-content overlay-show align-items-start text-white">
              <div class="text-center">
                <h2 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">TOP BRANDS</h2>
                <h1 class="animated font-weight-bold" data-animate="fadeDown">30% - 70% OFF</h1>
                <a href="shop-grid.html" class="btn btn-warning rounded-pill animated mt-4" data-animate="fadeUp">SHOP NOW</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-cover="/assets/shop/img/slider/electro/3.jpg" data-height="160px 265px 300px 300px 300px">
            <div class="overlay-content overlay-show align-items-end text-white">
              <div class="text-center">
                <h2 class="bg-white text-dark d-inline-block p-1 animated" data-animate="fadeDown">Brand New</h2>
                <h1 class="animated font-weight-bold" data-animate="fadeDown">High Quality Clothes</h1>
                <a href="shop-grid.html" class="btn btn-faded-primary rounded-pill animated mt-4" data-animate="fadeUp">SHOP NOW</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev swiper-button-prev-sm swiper-button-prev2"><i class="material-icons">chevron_left</i></div>
        <div class="swiper-button-next swiper-button-next-sm swiper-button-next2"><i class="material-icons">chevron_right</i></div>
      </div>
      <!-- /HOME SLIDER -->

      <!-- SERVICES BLOCK -->
      <div class="d-grid grid-template-col-sm-2 grid-template-col-xl-4 column-gap-3 row-gap-4 mt-5">
        <div class="media">
          <button class="btn btn-icon btn-lg rounded-circle btn-faded-info active" type="button">
            <i class="material-icons">local_shipping</i>
          </button>
          <div class="media-body ml-2">
            <h6>FREE SHIPPING &amp; RETURN</h6>
            <span class="text-secondary font-condensed">Get free shipping for all orders $99 or more</span>
          </div>
        </div>
        <div class="media">
          <button class="btn btn-icon btn-lg rounded-circle btn-faded-info active" type="button">
            <i class="material-icons">refresh</i>
          </button>
          <div class="media-body ml-2">
            <h6>MONEY BACK GUARANTEE</h6>
            <span class="text-secondary font-condensed">Get the item you ordered, or your money back</span>
          </div>
        </div>
        <div class="media">
          <button class="btn btn-icon btn-lg rounded-circle btn-faded-info active" type="button">
            <i class="material-icons">security</i>
          </button>
          <div class="media-body ml-2">
            <h6>100% SECURE PAYMENT</h6>
            <span class="text-secondary font-condensed">Your transaction are secure with SSL Encryption</span>
          </div>
        </div>
        <div class="media">
          <button class="btn btn-icon btn-lg rounded-circle btn-faded-info active" type="button">
            <i class="material-icons">phone</i>
          </button>
          <div class="media-body ml-2">
            <h6>ONLINE SUPPORT 24/7</h6>
            <span class="text-secondary font-condensed">Chat with experts or have us call you right away</span>
          </div>
        </div>
      </div>
      <!-- /SERVICES BLOCK -->

      <!-- Categories slider -->
      <div class="position-relative mt-5">
        <div class="swiper-button-prev swiper-button-prev-sm swiper-button-prev2" id="categories-slider-prev"><i class="material-icons">chevron_left</i></div>
        <div class="swiper-button-next swiper-button-next-sm swiper-button-next2" id="categories-slider-next"><i class="material-icons">chevron_right</i></div>
        <h4>Shop by Categories</h4>
        <div class="swiper-container" id="categoriesSlider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="d-grid grid-gap-1 grid-template-col-2 grid-template-col-md-4">
                <div class="img img-zoom-in">
                  <div data-cover="/assets/shop/img/categories/electro/1.jpeg" data-height="125px 130px 150px 120px 150px"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show">
                    <a href="shop-grid.html" class="card-link h5 text-white font-condensed stretched-link text-center">
                      Computers &amp; Accessories
                    </a>
                  </div>
                </div>
                <div class="img img-zoom-in">
                  <div data-cover="/assets/shop/img/categories/electro/2.jpeg" data-height="125px 130px 150px 120px 150px"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show">
                    <a href="shop-grid.html" class="card-link h5 text-white font-condensed stretched-link text-center">
                      Cell Phones & Accessories
                    </a>
                  </div>
                </div>
                <div class="img img-zoom-in">
                  <div data-cover="/assets/shop/img/categories/electro/3.jpeg" data-height="125px 130px 150px 120px 150px"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show">
                    <a href="shop-grid.html" class="card-link h5 text-white font-condensed stretched-link text-center">
                      Photography
                    </a>
                  </div>
                </div>
                <div class="img img-zoom-in">
                  <div data-cover="/assets/shop/img/categories/electro/4.jpeg" data-height="125px 130px 150px 120px 150px"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show">
                    <a href="shop-grid.html" class="card-link h5 text-white font-condensed stretched-link text-center">
                      Home Entertainment
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="d-grid grid-gap-1 grid-template-col-2 grid-template-col-md-4">
                <div class="img img-zoom-in">
                  <div data-cover="/assets/shop/img/categories/electro/5.jpeg" data-height="125px 130px 150px 120px 150px"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show">
                    <a href="shop-grid.html" class="card-link h5 text-white font-condensed stretched-link text-center">
                      Video Games
                    </a>
                  </div>
                </div>
                <div class="img img-zoom-in">
                  <div data-cover="/assets/shop/img/categories/electro/6.jpeg" data-height="125px 130px 150px 120px 150px"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show">
                    <a href="shop-grid.html" class="card-link h5 text-white font-condensed stretched-link text-center">
                      Headphones
                    </a>
                  </div>
                </div>
                <div class="img img-zoom-in">
                  <div data-cover="/assets/shop/img/categories/electro/8.jpeg" data-height="125px 130px 150px 120px 150px"></div>
                  <div class="overlay overlay-show bg-dark"></div>
                  <div class="overlay-content overlay-show">
                    <a href="shop-grid.html" class="card-link h5 text-white font-condensed stretched-link text-center">
                      Office Supplies
                    </a>
                  </div>
                </div>
                <div class="flex-center">
                  <a href="shop-categories.html" class="stretched-link h5">MORE <i class="material-icons align-bottom">chevron_right</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Categories slider -->

      <!-- Hot New Releases -->
      <h4 class="mt-5">Hot New Releases</h4>
      <div class="d-grid grid-template-col-2 grid-template-col-md-4 grid-gap-1 grid-gap-sm-3 my-3">
        <div class="card card-product rounded-0">
          <div class="card-body">
            <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
            <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/1.jpg" alt="Card image cap"></a>
            <a href="shop-single.html" class="card-title card-link">NEW Microsoft Surface Go</a>
            <span class="badge badge-success">New</span>
            <div class="price"><span class="h5">$549.00</span></div>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
          </div>
        </div>
        <div class="card card-product rounded-0">
          <div class="card-body">
            <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo active" data-toggle="button" title="Added to wishlist"></button>
            <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/2.jpg" alt="Card image cap"></a>
            <a href="shop-single.html" class="card-title card-link">Apple 15.4" MacBook Pro Laptop Space Gray</a>
            <span class="rating" data-value="4"></span>
            <div class="price">
              <span class="h5">$2,720.38</span>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
          </div>
        </div>
        <div class="card card-product rounded-0">
          <div class="card-body">
            <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
            <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/3.jpg" alt="Card image cap"></a>
            <a href="shop-single.html" class="card-title card-link">SanDisk Cruzer CZ36 64GB USB 2.0 Flash Drive</a>
            <span class="rating" data-value="4.5"></span>
            <div class="price">
              <span class="h5">$13.49</span>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
          </div>
        </div>
        <div class="card card-product rounded-0">
          <div class="card-body">
            <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo active" data-toggle="button" title="Added to wishlist"></button>
            <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/4.jpg" alt="Card image cap"></a>
            <a href="shop-single.html" class="card-title card-link">Sony Alpha a6500 Mirrorless Digital Camera</a>
            <div class="price">
              <span class="h5">$1,098.00</span>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
          </div>
        </div>
      </div>
      <!-- /Hot New Releases -->

      <!-- Popular Brands -->
      <div class="position-relative mt-5">
        <div class="swiper-button-prev swiper-button-prev-sm swiper-button-prev2" id="brand-slider-prev"><i class="material-icons">chevron_left</i></div>
        <div class="swiper-button-next swiper-button-next-sm swiper-button-next2" id="brand-slider-next"><i class="material-icons">chevron_right</i></div>
        <h4>Popular Brands</h4>
        <div class="swiper-container" id="brandSlider2">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="d-grid grid-gap-2 grid-template-col-2 grid-template-col-sm-3 grid-template-col-md-6">
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/samsung.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/lenovo.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/sony.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/canon.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/xerox.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/lg.svg" alt="Brand" class="card-img-top">
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="d-grid grid-gap-2 grid-template-col-2 grid-template-col-sm-3 grid-template-col-md-6">
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/xbox.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/dell.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/nikon.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/sandisk.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/gopro.svg" alt="Brand" class="card-img-top">
                </a>
                <a href="shop-grid.html" class="card flex-center px-3 py-1" data-height="70px 100px 70px 100px 100px">
                  <img src="/assets/shop/img/brands/electro/logitech.svg" alt="Brand" class="card-img-top">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Popular Brands -->

      <!-- Popular -->
      <div class="position-relative mt-5">
        <div class="swiper-button-prev swiper-button-prev-sm swiper-button-prev2" id="popular-slider-prev"><i class="material-icons">chevron_left</i></div>
        <div class="swiper-button-next swiper-button-next-sm swiper-button-next2" id="popular-slider-next"><i class="material-icons">chevron_right</i></div>
        <h4>Popular this week</h4>
        <div class="swiper-container" id="popularSlider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="d-grid grid-gap-2 grid-template-col-2 grid-template-col-md-4">
                <div class="card card-product rounded-0">
                  <div class="card-body">
                    <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
                    <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/9.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title card-link">ASUS VivoBook F510UA FHD Laptop</a>
                    <span class="badge badge-success">Save $89.01</span>
                    <span class="rating" data-value="4"></span>
                    <div class="price">
                      <span class="h5 del">$599.00</span>
                      <span class="h5">$509.99</span>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
                  </div>
                </div>
                <div class="card card-product rounded-0">
                  <div class="card-body">
                    <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
                    <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/10.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title card-link">Nikon D7200 DX-format DSLR Body (Black)</a>
                    <span class="badge badge-danger">Hot</span>
                    <span class="rating" data-value="5"></span>
                    <div class="price"><span class="h5">$996.95</span></div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
                  </div>
                </div>
                <div class="card card-product rounded-0">
                  <div class="card-body">
                    <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
                    <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/11.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title card-link">Polk Audio PSW10 10-Inch Powered Subwoofer</a>
                    <span class="rating" data-value="4"></span>
                    <div class="price"><span class="h5">$99.99</span></div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
                  </div>
                </div>
                <div class="card card-product rounded-0">
                  <div class="card-body">
                    <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
                    <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/12.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title card-link">Essential Phone in Halo Gray ??? 128 GB Unlocked</a>
                    <span class="badge badge-warning">Only 1 left in stock</span>
                    <div class="price">
                      <span class="h5 del">$499.99</span>
                      <span class="h5">$435.00</span>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="d-grid grid-gap-2 grid-template-col-2 grid-template-col-md-4">
                <div class="card card-product rounded-0">
                  <div class="card-body">
                    <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
                    <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/9.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title card-link">ASUS VivoBook F510UA FHD Laptop</a>
                    <span class="badge badge-success">Save $89.01</span>
                    <span class="rating" data-value="4"></span>
                    <div class="price">
                      <span class="h5 del">$599.00</span>
                      <span class="h5">$509.99</span>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
                  </div>
                </div>
                <div class="card card-product rounded-0">
                  <div class="card-body">
                    <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
                    <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/10.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title card-link">Nikon D7200 DX-format DSLR Body (Black)</a>
                    <span class="badge badge-danger">Hot</span>
                    <span class="rating" data-value="5"></span>
                    <div class="price"><span class="h5">$996.95</span></div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
                  </div>
                </div>
                <div class="card card-product rounded-0">
                  <div class="card-body">
                    <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
                    <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/11.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title card-link">Polk Audio PSW10 10-Inch Powered Subwoofer</a>
                    <span class="rating" data-value="4"></span>
                    <div class="price"><span class="h5">$99.99</span></div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
                  </div>
                </div>
                <div class="card card-product rounded-0">
                  <div class="card-body">
                    <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
                    <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/electro/12.jpg" alt="Card image cap"></a>
                    <a href="shop-single.html" class="card-title card-link">Essential Phone in Halo Gray ??? 128 GB Unlocked</a>
                    <span class="badge badge-warning">Only 1 left in stock</span>
                    <div class="price">
                      <span class="h5 del">$499.99</span>
                      <span class="h5">$435.00</span>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-sm rounded-0 btn-outline-primary btn-block atc-demo">Add to Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Popular -->

      <!-- Footer -->
      <div class="navbar navbar-expand navbar-light footer footer-electronics">
        <a class="navbar-brand" href="../../../index.php">Mimity</a>
        <ul class="navbar-nav nav-pills nav-gap-x-1">
          <li class="nav-item">
            <a class="nav-link nav-link-sm" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-sm" href="#">Privacy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-sm" href="#">Terms</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-pills ml-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-sm has-icon" href="#"><i class="material-icons mr-1">help_outline</i> Help</a>
          </li>
        </ul>
      </div>
      <!-- /Footer -->

    </div>
    <!-- /Main Content -->

  </div>
  <!-- /Wrapper -->

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

  <!-- Main script -->
  <script src="/assets/shop/js/script.min.js"></script>

  <!-- Plugins -->
  <script src="/assets/shop/plugins/swiper/swiper.min.js"></script>
  <script src="/assets/shop/plugins/jquery-countdown/jquery.countdown.min.js"></script>
  
  <!-- Application script -->
  <script src="/assets/shop/js/app.min.js"></script>
  <script>
  $(() => {

    App.atcDemo() // Add to Cart Demo
    App.atwDemo() // Add to Wishlist Demo
    App.rating()

    // Remove static modal for small devices
    App.resize(() => {
      if (App.mdDown()) {
        document.getElementById('menuModal').classList.remove('modal-shown-static')
      } else {
        document.getElementById('menuModal').classList.add('modal-shown-static')
        $('#menuModal').modal('hide')
      }
    })()

    // Home slider
    new Swiper('#homeSlider', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false
      }
    })

    // Categories slider
    new Swiper('#categoriesSlider', {
      navigation: {
        nextEl: '#categories-slider-next',
        prevEl: '#categories-slider-prev',
      }
    })

    // Brands slider
    new Swiper('#brandSlider2', {
      navigation: {
        nextEl: '#brand-slider-next',
        prevEl: '#brand-slider-prev',
      }
    })

    // Popular slider
    new Swiper('#popularSlider', {
      navigation: {
        nextEl: '#popular-slider-next',
        prevEl: '#popular-slider-prev',
      }
    })

  })
  </script>
</body>

</html>
