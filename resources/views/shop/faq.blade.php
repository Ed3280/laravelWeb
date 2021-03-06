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
          <a class="nav-link dropdown-toggle no-caret forwardable" href="shop-categories.html" id="shopDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <a class="nav-link dropdown-toggle no-caret active" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pages
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="about.html">About Us</a>
            <a class="dropdown-item" href="contact.html">Contact Us</a>
            <a class="dropdown-item" href="compare.html">Compare</a>
            <a class="dropdown-item active" href="faq.html">Help / FAQ</a>
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
          <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
          <li class="breadcrumb-item active" aria-current="page">Help / FAQ</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container-fluid mb-3">
    <div class="card card-style1">
      <div class="card-body" lang="zxx"> <!-- because 'lorem ipsum' is not english language, so we add lang="zxx" attribute, remove it on production environment -->

        <div class="row">

          <div class="col-12 mb-4">
            <h3>Frequently Asked Questions (FAQ)</h3><hr>
          </div>

          <!-- Shopping FAQ -->
          <div class="col-md-4">
            <h4 class="mb-3 mb-md-0"><i class="material-icons align-top">shopping_cart</i> Shopping</h4>
          </div>
          <div class="col-md-8 mb-5">
            <div class="accordion accordion-caret accordion-no-border" id="accordion1">
              <div class="card card-primary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse1-1" aria-expanded="false" aria-controls="collapse1-1">
                  I see different prices with the same title. Why?
                </a>
                <div id="collapse1-1" class="collapse" aria-labelledby="heading1-1" data-parent="#accordion1">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse1-2" aria-expanded="false" aria-controls="collapse1-2">
                  Why do I see different prices for the same product?
                </a>
                <div id="collapse1-2" class="collapse" aria-labelledby="heading1-2" data-parent="#accordion1">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident blanditiis ipsa expedita, earum esse omnis delectus possimus fugit perferendis ex veritatis veniam consequuntur mollitia, facilis vel velit voluptatem eos ut!
                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse1-3" aria-expanded="false" aria-controls="collapse1-3">
                  Is it necessary to have an account to shop on Marketshop?
                </a>
                <div id="collapse1-3" class="collapse" aria-labelledby="heading1-3" data-parent="#accordion1">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, quisquam, corrupti. Perspiciatis maxime provident in vero dolore similique quam voluptatum eum reiciendis ex repellat a saepe, explicabo odit quae perferendis!
                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse1-4" aria-expanded="false" aria-controls="collapse1-4">
                  What do I need to know before getting an order gift wrapped?
                </a>
                <div id="collapse1-4" class="collapse" aria-labelledby="heading1-4" data-parent="#accordion1">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab perferendis, similique a accusamus ipsum incidunt repellendus quis, soluta, minus molestiae illum eligendi id hic eum accusantium voluptatem quae facilis architecto.
                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse1-5" aria-expanded="false" aria-controls="collapse1-5">
                  What is Advantage?
                </a>
                <div id="collapse1-5" class="collapse" aria-labelledby="heading1-5" data-parent="#accordion1">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Shopping FAQ -->

          <!-- Payments FAQ -->
          <div class="col-md-4">
            <h4 class="mb-3 mb-md-0"><i class="material-icons align-top">credit_card</i> Payments</h4>
          </div>
          <div class="col-md-8 mb-5">
            <div class="accordion accordion-caret accordion-no-border" id="accordion2">
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-1" aria-expanded="false" aria-controls="collapse2-1">
                  How do I pay for a purchase?
                </a>
                <div id="collapse2-1" class="collapse" aria-labelledby="heading2-1" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                  Are there any hidden charges (Octroi or Sales Tax) when I make a purchase?
                </a>
                <div id="collapse2-2" class="collapse" aria-labelledby="heading2-2" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident blanditiis ipsa expedita, earum esse omnis delectus possimus fugit perferendis ex veritatis veniam consequuntur mollitia, facilis vel velit voluptatem eos ut!
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-3" aria-expanded="false" aria-controls="collapse2-3">
                  What is Cash on Delivery?
                </a>
                <div id="collapse2-3" class="collapse" aria-labelledby="heading2-3" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, quisquam, corrupti. Perspiciatis maxime provident in vero dolore similique quam voluptatum eum reiciendis ex repellat a saepe, explicabo odit quae perferendis!
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-4" aria-expanded="false" aria-controls="collapse2-4">
                  How do I pay using a credit/debit card?
                </a>
                <div id="collapse2-4" class="collapse" aria-labelledby="heading2-4" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab perferendis, similique a accusamus ipsum incidunt repellendus quis, soluta, minus molestiae illum eligendi id hic eum accusantium voluptatem quae facilis architecto.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-5" aria-expanded="false" aria-controls="collapse2-5">
                  Is it safe to use my credit/debit card on this store?
                </a>
                <div id="collapse2-5" class="collapse" aria-labelledby="heading2-5" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-6" aria-expanded="false" aria-controls="collapse2-6">
                  What is a 3D Secure password?
                </a>
                <div id="collapse2-6" class="collapse" aria-labelledby="heading2-6" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-7" aria-expanded="false" aria-controls="collapse2-7">
                  How can I get the 3D Secure password for my credit/debit card?
                </a>
                <div id="collapse2-7" class="collapse" aria-labelledby="heading2-7" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-8" aria-expanded="false" aria-controls="collapse2-8">
                  Can I use my bank's Internet Banking feature to make a payment?
                </a>
                <div id="collapse2-8" class="collapse" aria-labelledby="heading2-8" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-9" aria-expanded="false" aria-controls="collapse2-9">
                  Can I make a credit/debit card or Internet Banking payment through my mobile?
                </a>
                <div id="collapse2-9" class="collapse" aria-labelledby="heading2-9" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-10" aria-expanded="false" aria-controls="collapse2-10">
                  How does 'Instant Cashback' work?
                </a>
                <div id="collapse2-10" class="collapse" aria-labelledby="heading2-10" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                  </div>
                </div>
              </div>
              <div class="card card-success">
                <a class="card-header h6" data-toggle="collapse" href="#collapse2-11" aria-expanded="false" aria-controls="collapse2-11">
                  How do I place a Cash on Delivery (COD) order?
                </a>
                <div id="collapse2-11" class="collapse" aria-labelledby="heading2-11" data-parent="#accordion2">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa rem in voluptate inventore repudiandae officia ad eveniet aut reiciendis corrupti, odit, velit officiis voluptatibus, incidunt minima omnis voluptas. Similique.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Payments FAQ -->

          <!-- My Account &amp; My Orders FAQ -->
          <div class="col-md-4">
            <h4 class="mb-3 mb-md-0"><i class="material-icons align-top">person</i> My Account &amp; My Orders</h4>
          </div>
          <div class="col-md-8 mb-5">
            <div class="accordion accordion-caret accordion-no-border" id="accordion3">
              <div class="card card-warning">
                <a class="card-header h6" data-toggle="collapse" href="#collapse3-1" aria-expanded="false" aria-controls="collapse3-1">
                  What is 'My Account'? How do I update my information ?
                </a>
                <div id="collapse3-1" class="collapse" aria-labelledby="heading3-1" data-parent="#accordion3">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-warning">
                <a class="card-header h6" data-toggle="collapse" href="#collapse3-2" aria-expanded="false" aria-controls="collapse3-2">
                  How do I merge my accounts linked to different email ids?
                </a>
                <div id="collapse3-2" class="collapse" aria-labelledby="heading3-2" data-parent="#accordion3">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-warning">
                <a class="card-header h6" data-toggle="collapse" href="#collapse3-3" aria-expanded="false" aria-controls="collapse3-3">
                  How do I know my order has been confirmed?
                </a>
                <div id="collapse3-3" class="collapse" aria-labelledby="heading3-3" data-parent="#accordion3">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-warning">
                <a class="card-header h6" data-toggle="collapse" href="#collapse3-4" aria-expanded="false" aria-controls="collapse3-4">
                  Can I order a product that is 'Out of Stock'?
                </a>
                <div id="collapse3-4" class="collapse" aria-labelledby="heading3-4" data-parent="#accordion3">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /My Account &amp; My Orders FAQ -->

          <!-- Gift Voucher FAQ -->
          <div class="col-md-4">
            <h4 class="mb-3 mb-md-0"><i class="material-icons align-top">card_giftcard</i> Gift Voucher</h4>
          </div>
          <div class="col-md-8 mb-5">
            <div class="accordion accordion-caret accordion-no-border" id="accordion4">
              <div class="card card-secondary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse4-1" aria-expanded="false" aria-controls="collapse4-1">
                  How do I buy/gift an e-Gift Voucher?
                </a>
                <div id="collapse4-1" class="collapse" aria-labelledby="heading4-1" data-parent="#accordion4">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-secondary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse4-2" aria-expanded="false" aria-controls="collapse4-2">
                  How do I make a purchase with an e-Gift Voucher?
                </a>
                <div id="collapse4-2" class="collapse" aria-labelledby="heading4-2" data-parent="#accordion4">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-secondary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse4-3" aria-expanded="false" aria-controls="collapse4-3">
                  Does an e-Gift Voucher expire?
                </a>
                <div id="collapse4-3" class="collapse" aria-labelledby="heading4-3" data-parent="#accordion4">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-secondary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse4-4" aria-expanded="false" aria-controls="collapse4-4">
                  Can I use promotional codes with e-Gift Vouchers?
                </a>
                <div id="collapse4-4" class="collapse" aria-labelledby="heading4-4" data-parent="#accordion4">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-secondary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse4-5" aria-expanded="false" aria-controls="collapse4-5">
                  Is there a limit on how many e-Gift vouchers I can use on a single order?
                </a>
                <div id="collapse4-5" class="collapse" aria-labelledby="heading4-5" data-parent="#accordion4">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-secondary">
                <a class="card-header h6" data-toggle="collapse" href="#collapse4-6" aria-expanded="false" aria-controls="collapse4-6">
                  What Terms & Conditions apply to e-Gift Vouchers?
                </a>
                <div id="collapse4-6" class="collapse" aria-labelledby="heading4-6" data-parent="#accordion4">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Gift Voucher FAQ -->

          <!-- Order Status FAQ -->
          <div class="col-md-4">
            <h4 class="mb-3 mb-md-0"><i class="material-icons align-top">help</i> Order Status</h4>
          </div>
          <div class="col-md-8 mb-5">
            <div class="accordion accordion-caret accordion-no-border" id="accordion5">
              <div class="card card-info">
                <a class="card-header h6" data-toggle="collapse" href="#collapse5-1" aria-expanded="false" aria-controls="collapse5-1">
                  How do I check the current status of my orders?
                </a>
                <div id="collapse5-1" class="collapse" aria-labelledby="heading5-1" data-parent="#accordion5">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-info">
                <a class="card-header h6" data-toggle="collapse" href="#collapse5-2" aria-expanded="false" aria-controls="collapse5-2">
                  What do the different order status mean?
                </a>
                <div id="collapse5-2" class="collapse" aria-labelledby="heading5-2" data-parent="#accordion5">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-info">
                <a class="card-header h6" data-toggle="collapse" href="#collapse5-3" aria-expanded="false" aria-controls="collapse5-3">
                  When and how can I cancel an order?
                </a>
                <div id="collapse5-3" class="collapse" aria-labelledby="heading5-3" data-parent="#accordion5">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Order Status FAQ -->

          <!-- Shipping FAQ -->
          <div class="col-md-4">
            <h4 class="mb-3 mb-md-0"><i class="material-icons align-top">local_shipping</i> Shipping</h4>
          </div>
          <div class="col-md-8 mb-5">
            <div class="accordion accordion-caret accordion-no-border" id="accordion6">
              <div class="card card-dark">
                <a class="card-header h6" data-toggle="collapse" href="#collapse6-1" aria-expanded="false" aria-controls="collapse6-1">
                  What are the delivery charges?
                </a>
                <div id="collapse6-1" class="collapse" aria-labelledby="heading6-1" data-parent="#accordion6">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-dark">
                <a class="card-header h6" data-toggle="collapse" href="#collapse6-2" aria-expanded="false" aria-controls="collapse6-2">
                  Are there any hidden costs (sales tax, octroi etc) on items sold by sellers?
                </a>
                <div id="collapse6-2" class="collapse" aria-labelledby="heading6-2" data-parent="#accordion6">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-dark">
                <a class="card-header h6" data-toggle="collapse" href="#collapse6-3" aria-expanded="false" aria-controls="collapse6-3">
                  What is the estimated delivery time?
                </a>
                <div id="collapse6-3" class="collapse" aria-labelledby="heading6-3" data-parent="#accordion6">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-dark">
                <a class="card-header h6" data-toggle="collapse" href="#collapse6-4" aria-expanded="false" aria-controls="collapse6-4">
                  Why does the estimated delivery time vary from seller to seller?
                </a>
                <div id="collapse6-4" class="collapse" aria-labelledby="heading6-4" data-parent="#accordion6">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-dark">
                <a class="card-header h6" data-toggle="collapse" href="#collapse6-5" aria-expanded="false" aria-controls="collapse6-5">
                  Why does the delivery date not correspond to the delivery timeline mentioned?
                </a>
                <div id="collapse6-5" class="collapse" aria-labelledby="heading6-5" data-parent="#accordion6">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-dark">
                <a class="card-header h6" data-toggle="collapse" href="#collapse6-6" aria-expanded="false" aria-controls="collapse6-6">
                  Seller does not/cannot ship to my area. Why?
                </a>
                <div id="collapse6-6" class="collapse" aria-labelledby="heading6-6" data-parent="#accordion6">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-dark">
                <a class="card-header h6" data-toggle="collapse" href="#collapse6-7" aria-expanded="false" aria-controls="collapse6-7">
                  I need to return an item, how do I arrange for a pick-up?
                </a>
                <div id="collapse6-7" class="collapse" aria-labelledby="heading6-7" data-parent="#accordion6">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
              <div class="card card-dark">
                <a class="card-header h6" data-toggle="collapse" href="#collapse6-8" aria-expanded="false" aria-controls="collapse6-8">
                  Does deliver internationally?
                </a>
                <div id="collapse6-8" class="collapse" aria-labelledby="heading6-8" data-parent="#accordion6">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam unde dicta ab sapiente harum beatae nihil aspernatur nam eos perferendis. Iusto perspiciatis assumenda vitae aspernatur nam est fuga maiores sequi.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Shipping FAQ -->

          <div class="col-12">
            <div class="alert alert-primary" role="alert">
              Was this article helpful ? <a href="javascript:void(0)" class="alert-link">Yes</a> / <a href="contact.html" class="alert-link">No, I want to contact support</a>
            </div>
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
                <li class="mm-active"><a href="faq.html">Help / FAQ</a></li>
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

  <!-- Main script -->
  <script src="/assets/shop/js/script.min.js"></script>

  <!-- Plugins -->
  
  <!-- Application script -->
  <script src="/assets/shop/js/app.min.js"></script>
</body>

</html>
