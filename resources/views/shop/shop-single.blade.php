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
  <link rel="stylesheet" href="/assets/shop/plugins/photoswipe/photoswipe.min.css">
  <link rel="stylesheet" href="/assets/shop/plugins/photoswipe/photoswipe-default-skin/default-skin.min.css">

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
            <button class="dropdown-item" type="button">??? EUR</button>
            <button class="dropdown-item" type="button">?? UKP</button>
            <button class="dropdown-item" type="button">?? JPY</button>
          </div>
        </div>
        <div class="nav-item nav-pills dropdown">
          <a class="nav-link nav-link-sm dropdown-toggle no-caret" href="#" id="langDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
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
            <a class="dropdown-item" href="shop-grid.html">Shop Grid</a>
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
            <a class="dropdown-item active" href="shop-single.html">Single Product</a>
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
          <li class="breadcrumb-item"><a href="javascript:void(0)">Single Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">Version 1</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container-fluid mb-3">
    <div class="card card-style1">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="swiper-gallery">
              <div class="swiper-gallery-carousel">
                <div class="swiper-container" id="mainSlider">
                  <div class="swiper-wrapper">
                    <img src="/assets/shop/img/products/1_medium.jpg" data-large="/assets/shop/img/products/1_large.jpg" alt="Product" class="swiper-slide">
                    <img src="/assets/shop/img/products/1_medium_yellow.jpg" data-large="/assets/shop/img/products/1_large_yellow.jpg" alt="Product" class="swiper-slide">
                    <img src="/assets/shop/img/products/1_medium_red.jpg" data-large="/assets/shop/img/products/1_large_red.jpg" alt="Product" class="swiper-slide">
                    <img src="/assets/shop/img/products/1_medium_maroon.jpg" data-large="/assets/shop/img/products/1_large_maroon.jpg" alt="Product" class="swiper-slide">
                    <img src="/assets/shop/img/products/1_medium_charcoal.jpg" data-large="/assets/shop/img/products/1_large_charcoal.jpg" alt="Product" class="swiper-slide">
                  </div>
                  <div class="swiper-pagination"></div>
                  <div class="swiper-button-prev autohide"><i class="material-icons">chevron_left</i></div>
                  <div class="swiper-button-next autohide"><i class="material-icons">chevron_right</i></div>
                  <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist" data-title="Hanes Men's Pullover EcoSmart Fleece Hooded Sweatshirt"></button>
                </div>
              </div>
              <div class="swiper-gallery-thumb">
                <div class="swiper-container" id="thumbSlider">
                  <div class="swiper-wrapper">
                    <img src="/assets/shop/img/products/1_small.jpg" alt="Product" class="swiper-slide img-thumbnail">
                    <img src="/assets/shop/img/products/1_small_yellow.jpg" alt="Product" class="swiper-slide img-thumbnail">
                    <img src="/assets/shop/img/products/1_small_red.jpg" alt="Product" class="swiper-slide img-thumbnail">
                    <img src="/assets/shop/img/products/1_small_maroon.jpg" alt="Product" class="swiper-slide img-thumbnail">
                    <img src="/assets/shop/img/products/1_small_charcoal.jpg" alt="Product" class="swiper-slide img-thumbnail">
                  </div>
                  <div class="swiper-button-prev swiper-button-prev-sm vertical"><i class="material-icons">keyboard_arrow_up</i></div>
                  <div class="swiper-button-next swiper-button-next-sm vertical"><i class="material-icons">keyboard_arrow_down</i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pt-3 pt-md-0">
            <h4 class="card-title font-weight-normal mb-3">Hanes Men's Pullover EcoSmart Fleece Hooded Sweatshirt</h4>
            <h6 class="mb-3"><span class="rating" data-value="4.5"></span> <a href="javascript:void(0)">2 reviews</a></h6>
            <h3 class="price mb-3">
              <span class="del">$140.00</span>
              <span >$120.00</span>
            </h3>
            <form>
              <div class="form-group">
                <label class="font-weight-bold d-block">Size</label>
                <div class="btn-group btn-group-sm btn-group-toggle btn-group-circle" data-toggle="buttons">
                  <label class="btn btn-outline-secondary" data-toggle="tooltip" title="Small">
                    <input type="radio" name="productSize">S
                  </label>
                  <label class="btn btn-outline-secondary active" data-toggle="tooltip" title="Medium">
                    <input type="radio" name="productSize" checked>M
                  </label>
                  <label class="btn btn-outline-secondary" data-toggle="tooltip" title="Large">
                    <input type="radio" name="productSize">L
                  </label>
                  <label class="btn btn-outline-secondary" data-toggle="tooltip" title="Extra Large">
                    <input type="radio" name="productSize">XL
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
                  <div class="color-item">
                    <input type="radio" name="colorOption" id="colorOption-4" class="custom-control-input">
                    <label for="colorOption-4" class="rounded-circle" style="background-color:#793a41"></label>
                  </div>
                  <div class="color-item">
                    <input type="radio" name="colorOption" id="colorOption-5" class="custom-control-input">
                    <label for="colorOption-5" class="rounded-circle" style="background-color:#605f63"></label>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6 col-sm-4 col-md-5 col-lg-4">
                  <label class="d-block font-weight-bold">Quantity</label>
                  <div class="custom-spinner">
                    <button class="btn btn-icon rounded-circle btn-faded-primary down" type="button"><i class="material-icons">remove</i></button>
                    <input type="number" class="form-control" value="1" min="1" max="999">
                    <button class="btn btn-icon rounded-circle btn-faded-primary up" type="button"><i class="material-icons">add</i></button>
                  </div>
                </div>
                <div class="form-group col-6 col-sm-8 col-md-7 col-lg-8 d-flex align-items-end">
                  <button class="btn rounded-pill btn-primary btn-block atc-demo" type="button" data-title="Hanes Men's Pullover EcoSmart Fleece Hooded Sweatshirt">Add to Cart</button>
                </div>
              </div>
            </form>
            <hr>
            <div class="d-flex align-items-center">
              <span class="text-muted">Share</span>
              <button class="btn btn-icon btn-faded-primary btn-sm rounded-circle ml-1" data-toggle="tooltip" title="Facebook">
                <i class="custom-icon" data-icon="facebook" data-size="17x17"></i>
              </button>
              <button class="btn btn-icon btn-faded-info btn-sm rounded-circle ml-1" data-toggle="tooltip" title="Twitter">
                <i class="custom-icon" data-icon="twitter" data-size="17x17"></i>
              </button>
              <button class="btn btn-icon btn-faded-danger btn-sm rounded-circle ml-1" data-toggle="tooltip" title="Google">
                <i class="custom-icon" data-icon="gplus" data-size="17x17"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <nav class="nav nav-tabs justify-content-center border-bottom mt-3">
        <a class="nav-item nav-link has-icon active" href="#description-content" data-toggle="tab"><i class="material-icons mr-1">list</i>Description</a>
        <a class="nav-item nav-link has-icon" href="#review-content" data-toggle="tab"><i class="material-icons mr-1">star_border</i>Reviews (2)</a>
      </nav>
      <div class="tab-content pt-4">
        <div class="tab-pane fade show active" id="description-content">
          <p>HanesBrands is a socially responsible manufacturer and marketer of leading everyday basic apparel under some of the world's strongest apparel brands in the Americas, Europe and Asia, as well as in Australia and South Africa.</p>
          <p>Now this medium weight 7.8-o fleece sweatshirt is even better, because it is made with up to 5 percent polyester created from recycled plastic.</p>
          <ul>
            <li>50% Cotton, 50% Polyester</li>
            <li>Imported</li>
            <li>shirts closure</li>
            <li>Machine Wash</li>
            <li>Soft, durable fleece with double-needle cover-seamed neck and armholes stays strong when you work or play hard</li>
            <li>Machine wash it again and again without hesitation because it's pill-resistant</li>
            <li>Ribbed waistband and cuffs</li>
          </ul>
        </div>
        <div class="tab-pane fade " id="review-content">
          <div class="row gutters-3 justify-content-center">
            <div class="col-11 col-sm-6 col-md-4 col-lg-3">
              <h5 class="d-flex align-items-center font-condensed">
                Overall Rating: 4.5
                <span class="rating ml-1" data-value="4.5"></span>
              </h5>
              <div class="list-group">
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="5"></span> <span>21</span></a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="4"></span> <span>5</span></a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="3"></span> <span>2</span></a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="2"></span> <span>1</span></a>
                <a href="javascript:void(0)" class="list-group-item list-group-item-action text-muted d-flex align-items-center justify-content-between"><span class="rating" data-value="0"></span></a>
              </div>
              <div class="text-center mt-1">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#reviewModal">Write a review</button>
              </div>
            </div>
            <div class="col-md-8 col-lg-9 mt-5 mt-md-0">
              <div class="media">
                <a href="javascript:void(0)"><img src="/assets/shop/img/user/user1.svg" alt="User" width="45" height="45" class="rounded-circle"></a>
                <div class="media-body ml-2 ml-sm-3">
                  <h6>Terrific Shirt, Exactly What I Wanted.</h6>
                  <p class="d-flex flex-wrap align-items-center">
                    <span class="rating mr-2" data-value="5"></span>
                    <a href="javascript:void(0)" class="mr-2">Alan Lewis</a>
                    <span class="text-muted font-size-sm">3 days ago</span>
                  </p>
                  <p>The Hanes sweatshirt was precisely what I wanted except for the color which is better than what I thought I was getting. This order went perfectly, so much so that another two are being shipped to me right now. It is way too early to say anything about durability; but otherwise, there is no way this order could have gone any better than it did. If you are interested in a pretty traditional long-sleeve sweatshirt, you would do well to give this one serious consideration.</p>
                  <hr>
                </div>
              </div>
              <div class="media">
                <a href="javascript:void(0)"><img src="/assets/shop/img/user/user2.svg" alt="User" width="45" height="45" class="rounded-circle"></a>
                <div class="media-body ml-2 ml-sm-3">
                  <h6>Very comfortable.</h6>
                  <p class="d-flex flex-wrap align-items-center">
                    <span class="rating mr-2" data-value="4"></span>
                    <a href="javascript:void(0)" class="mr-2">Amy</a>
                    <span class="text-muted font-size-sm">5 days ago</span>
                  </p>
                  <p>Fits slightly larger than expected, but gets longer, not just wider. (For reference, I am female, 5'8'', 170lbs, and this sweatshirt fits around my 36J chest with room to spare, coming to rest at about crotch level)</p>
                  <hr>
                </div>
              </div>
              <ul class="pagination justify-content-center">
                <li class="page-item disabled"><span class="page-link has-icon"><i class="material-icons">chevron_left</i></span></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                <li class="page-item active"><span class="page-link">2</span></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                <li class="page-item"><a class="page-link has-icon" href="javascript:void(0)"><i class="material-icons">chevron_right</i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- RELATED PRODUCTS -->
    <h4 class="text-center mt-4">Related Products</h4>
    <div class="d-grid grid-template-col-2 grid-template-col-md-4 grid-gap-1 grid-gap-sm-3 my-3">
      <div class="card card-product card-style1">
        <div class="card-body">
          <button class="btn btn-icon btn-text-danger rounded-circle btn-wishlist atw-demo" data-toggle="button" title="Add to wishlist"></button>
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
          <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/2_small.jpg" alt="Card image cap"></a>
          <a href="shop-single.html" class="card-title card-link">The Flash Logo T-Shirt</a>
          <div class="price">
            <span class="h5">$16.64</span>
          </div>
          <div class="custom-color custom-color-lg">
            <div class="color-item">
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
          <a href="shop-single.html"><img class="card-img-top" src="/assets/shop/img/products/4_small.jpg" alt="Card image cap"></a>
          <a href="shop-single.html" class="card-title card-link">Cotton Fleece Long Hoodie</a>
          <div class="price">
            <span class="h5 del">$98.90</span>
            <span class="h5">$85.00</span>
          </div>
          <div class="custom-color custom-color-lg">
            <div class="color-item">
              <input type="radio" name="productColor2" value="/assets/shop/img/products/4_small.jpg" id="productColor2-1" class="custom-control-input" checked>
              <label for="productColor2-1" class="rounded-circle" style="background-color:#625e39"></label>
            </div>
            <div class="color-item">
              <input type="radio" name="productColor2" value="/assets/shop/img/products/4_small_blue.jpg" id="productColor2-2" class="custom-control-input">
              <label for="productColor2-2" class="rounded-circle" style="background-color:#2e4797"></label>
            </div>
            <div class="color-item">
              <input type="radio" name="productColor2" value="/assets/shop/img/products/4_small_maroon.jpg" id="productColor2-3" class="custom-control-input">
              <label for="productColor2-3" class="rounded-circle" style="background-color:#791949"></label>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-sm rounded-pill btn-faded-primary btn-block atc-demo">Add to Cart</button>
        </div>
      </div>
    </div>
    <!-- /RELATED PRODUCTS -->
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

  <div class="copyright">Copyright ?? 2019 Mimity All right reserved</div>
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
                <li class="mm-active"><a href="shop-single.html">Single Product</a></li>
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

  <!-- Add review modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="reviewModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-light">
        <div class="modal-header">
          <h5 class="modal-title">Write a review</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-style-1">
            <div class="form-group">
              <label for="reviewName">Your Name</label>
              <input type="email" class="form-control bg-white" id="reviewName">
            </div>
            <div class="form-group">
              <label for="reviewSubject">Subject</label>
              <input type="email" class="form-control bg-white" id="reviewSubject">
            </div>
            <div class="form-group">
              <label for="reviewRating">Rating</label>
              <select class="form-control bg-white custom-select" id="reviewRating">
                <option>5 Stars</option>
                <option>4 Stars</option>
                <option>3 Stars</option>
                <option>2 Stars</option>
                <option>1 Star</option>
              </select>
            </div>
            <div class="form-group">
              <label for="reviewText">Review</label>
              <textarea class="form-control bg-white" id="reviewText" rows="5"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Submit review</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add review modal -->

  <!-- Photoswipe element-->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
        <div class="pswp__top-bar">
          <div class="pswp__counter"></div>
          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
          <button class="pswp__button pswp__button--share" title="Share"></button>
          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>
        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main script -->
  <script src="/assets/shop/js/script.min.js"></script>

  <!-- Plugins -->
  <script src="/assets/shop/plugins/swiper/swiper.min.js"></script>
  <script src="/assets/shop/plugins/photoswipe/photoswipe.min.js"></script>
  <script src="/assets/shop/plugins/photoswipe/photoswipe-ui-default.min.js"></script>
  
  <!-- Application script -->
  <script src="/assets/shop/js/app.min.js"></script>
  <script>
  $(() => {

    App.atcDemo() // Add to Cart Demo
    App.atwDemo() // Add to Wishlist Demo
    App.colorOption()
    App.rating()

    // Main Slider
    const mainSlider = new Swiper('#mainSlider', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        init: () => {
          setTimeout(() => {
            document.querySelector('#thumbSlider .swiper-slide:first-child').classList.add('active')
          }, 100)
        }
      }
    })

    // Thumbnail slider
    const thumbSlider = new Swiper('#thumbSlider', {
      direction: 'vertical',
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      spaceBetween: 5,
      slidesPerView: 4,
      breakpoints: {
        991: { // lg
          slidesPerView: 3,
        },
        1199: { // xl
          slidesPerView: 4
        }
      }
    })

    App.resize(() => {
      if (App.mdDown()) {
        thumbSlider.changeDirection('horizontal')
        document.querySelector('#thumbSlider .swiper-button-prev').classList.remove('vertical')
        document.querySelector('#thumbSlider .swiper-button-next').classList.remove('vertical')
        document.querySelector('#thumbSlider .swiper-button-prev i').innerText = 'keyboard_arrow_left'
        document.querySelector('#thumbSlider .swiper-button-next i').innerText = 'keyboard_arrow_right'
      } else {
        thumbSlider.changeDirection('vertical')
        document.querySelector('#thumbSlider .swiper-button-prev').classList.add('vertical')
        document.querySelector('#thumbSlider .swiper-button-next').classList.add('vertical')
        document.querySelector('#thumbSlider .swiper-button-prev i').innerText = 'keyboard_arrow_up'
        document.querySelector('#thumbSlider .swiper-button-next i').innerText = 'keyboard_arrow_down'
      }
    })()

    // Hide navigation when thumb items less than 5
    if (document.querySelectorAll('#thumbSlider .swiper-slide').length < 5) {
      for (const el of document.querySelectorAll('#thumbSlider .swiper-button-next, #thumbSlider .swiper-button-prev')) {
        el.remove()
      }
    }

    // Update thumb slider active
    mainSlider.on('slideChange', function () {
      thumbSlider.slideTo(mainSlider.activeIndex)
      for (const el of document.querySelectorAll('#thumbSlider .swiper-slide')) {
        el.classList.remove('active')
      }
      document.querySelector(`#thumbSlider .swiper-slide:nth-child(${mainSlider.activeIndex + 1})`).classList.add('active')
    })

    // Update main slider active
    for (const el of document.querySelectorAll('#thumbSlider .swiper-slide')) {
      el.addEventListener('click', () => {
        mainSlider.slideTo(Array.prototype.indexOf.call(el.parentElement.children, el))
      })
    }

    // Photoswipe
    const openPhotoSwipe = (items, activeIndex) => {
      activeIndex = typeof activeIndex !== 'undefined' ? activeIndex : 0
      const pswpElement = document.querySelector('.pswp')
      const options = {
        index: activeIndex
      }
      const gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options)
      gallery.init()
    }
    let items = []
    for (const el of document.querySelectorAll('.swiper-gallery-carousel img')) {
      // Collect items
      items.push({
        src: el.getAttribute('data-large'),
        w: 1395,
        h: 1500
      })
      // Open on click
      el.addEventListener('click', () => {
        openPhotoSwipe(items, Array.prototype.indexOf.call(el.parentElement.children, el))
      })
    }

  })
  </script>
</body>

</html>
