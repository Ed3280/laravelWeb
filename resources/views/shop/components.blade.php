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
  <link rel="stylesheet" href="/assets/shop/plugins/nouislider/nouislider.min.css">

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
        <a class="nav-item nav-link active" href="components.html">
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
          <li class="breadcrumb-item active" aria-current="page">Components</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container-fluid mb-3">
    <div class="card card-style1">
      <div class="card-body">

        <!-- ACCORDION -->
        <h1 class="text-info text-decoration-underline">Accordion</h1>
        <hr>
        <div class="d-grid column-gap-3 row-gap-5 grid-template-col-sm-2">

          <!-- Basic -->
          <div class="accordion" id="accordion-basic">
            <h5 class="text-center">Basic</h5>
            <div class="card">
              <a class="card-header h6" data-toggle="collapse" href="#content-1" aria-expanded="true">
                Collapsible Group Item #1
              </a>
              <div id="content-1" class="collapse show" data-parent="#accordion-basic">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
            <div class="card">
              <a class="card-header h6" data-toggle="collapse" href="#content-2" aria-expanded="false">
                Collapsible Group Item #2
              </a>
              <div id="content-2" class="collapse" data-parent="#accordion-basic">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
            <div class="card">
              <a class="card-header h6" data-toggle="collapse" href="#content-3" aria-expanded="false">
                Collapsible Group Item #3
              </a>
              <div id="content-3" class="collapse" data-parent="#accordion-basic">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
          </div>
          <!-- /Basic -->

          <!-- With caret -->
          <div class="accordion accordion-caret" id="accordion-caret">
            <h5 class="text-center">With caret</h5>
            <div class="card">
              <a class="card-header h6" data-toggle="collapse" href="#content-caret-1" aria-expanded="true">
                Collapsible Group Item #1
              </a>
              <div id="content-caret-1" class="collapse show" data-parent="#accordion-caret">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
            <div class="card">
              <a class="card-header h6" data-toggle="collapse" href="#content-caret-2" aria-expanded="false">
                Collapsible Group Item #2
              </a>
              <div id="content-caret-2" class="collapse" data-parent="#accordion-caret">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
            <div class="card">
              <a class="card-header h6" data-toggle="collapse" href="#content-caret-3" aria-expanded="false">
                Collapsible Group Item #3
              </a>
              <div id="content-caret-3" class="collapse" data-parent="#accordion-caret">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
          </div>
          <!-- /With caret -->

          <!-- No border -->
          <div class="accordion accordion-caret accordion-no-border" id="accordion-no-border">
            <h5 class="text-center">No border</h5>
            <div class="card">
              <a class="card-header h6" data-toggle="collapse" href="#content-noborder-1" aria-expanded="true">
                Collapsible Group Item #1
              </a>
              <div id="content-noborder-1" class="collapse show" data-parent="#accordion-no-border">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
            <div class="card">
              <a class="card-header h6" data-toggle="collapse" href="#content-noborder-2" aria-expanded="false">
                Collapsible Group Item #2
              </a>
              <div id="content-noborder-2" class="collapse" data-parent="#accordion-no-border">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
            <div class="card">
              <a class="card-header h6" data-toggle="collapse" href="#content-noborder-3" aria-expanded="false">
                Collapsible Group Item #3
              </a>
              <div id="content-noborder-3" class="collapse" data-parent="#accordion-no-border">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                </div>
              </div>
            </div>
          </div>
          <!-- /No border -->

          <div>
            <h5 class="text-center">Accordion Colors</h5>

            <!-- Accordion Colors -->
            <div class="accordion accordion-caret accordion-no-border" id="accordion-colors">
              <div class="card card-primary">
                <a class="card-header h6" data-toggle="collapse" href="#content-color-1" aria-expanded="true">
                  Collapsible Group Item #1
                </a>
                <div id="content-color-1" class="collapse show" data-parent="#accordion-colors">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <a class="card-header h6" data-toggle="collapse" href="#content-color-2" aria-expanded="false">
                  Collapsible Group Item #2
                </a>
                <div id="content-color-2" class="collapse" data-parent="#accordion-colors">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <a class="card-header h6" data-toggle="collapse" href="#content-color-3" aria-expanded="false">
                  Collapsible Group Item #3
                </a>
                <div id="content-color-3" class="collapse" data-parent="#accordion-colors">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  </div>
                </div>
              </div>
            </div>
            <!-- /Accordion Colors -->

            <div class="text-center">
              <div class="custom-color custom-color-lg mt-3">
                <div class="color-item">
                  <input type="radio" name="accordion-color" value="primary" id="accordion-primary" class="custom-control-input" checked>
                  <label class="rounded-circle" for="accordion-primary" style="background-color:#36A2EB"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="accordion-color" value="secondary" id="accordion-secondary" class="custom-control-input">
                  <label class="rounded-circle" for="accordion-secondary" style="background-color:#6c757d"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="accordion-color" value="success" id="accordion-success" class="custom-control-input">
                  <label class="rounded-circle" for="accordion-success" style="background-color:#4cc065"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="accordion-color" value="danger" id="accordion-danger" class="custom-control-input">
                  <label class="rounded-circle" for="accordion-danger" style="background-color:#f05a5c"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="accordion-color" value="warning" id="accordion-warning" class="custom-control-input">
                  <label class="rounded-circle" for="accordion-warning" style="background-color:#ffd062"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="accordion-color" value="info" id="accordion-info" class="custom-control-input">
                  <label class="rounded-circle" for="accordion-info" style="background-color:#19aec6"></label>
                </div>
                <div class="color-item">
                  <input type="radio" name="accordion-color" value="dark" id="accordion-dark" class="custom-control-input">
                  <label class="rounded-circle" for="accordion-dark" style="background-color:#343a40"></label>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /.grid -->
        <hr class="mb-5">
        <!-- /ACCORDION -->

        <!-- ALERTS -->
        <h1 class="text-info text-decoration-underline">Alerts</h1>
        <hr>
        <div class="alert alert-primary" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-primary btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <strong>Hi there!</strong> This is a simple primary alert. <a href="javascript:void(0)" class="alert-link">check it out!</a>
        </div>
        <div class="alert alert-success" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-success btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <strong>Hi there!</strong> This is a simple success alert. <a href="javascript:void(0)" class="alert-link">check it out!</a>
        </div>
        <div class="alert alert-danger" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-danger btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <strong>Hi there!</strong> This is a simple danger alert. <a href="javascript:void(0)" class="alert-link">check it out!</a>
        </div>
        <div class="alert alert-warning" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-warning btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <strong>Hi there!</strong> This is a simple warning alert. <a href="javascript:void(0)" class="alert-link">check it out!</a>
        </div>
        <div class="alert alert-info" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-info btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <strong>Hi there!</strong> This is a simple info alert. <a href="javascript:void(0)" class="alert-link">check it out!</a>
        </div>
        <div class="alert alert-secondary" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-secondary btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <strong>Hi there!</strong> This is a simple secondary alert. <a href="javascript:void(0)" class="alert-link">check it out!</a>
        </div>
        <div class="alert alert-dark" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-dark btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <strong>Hi there!</strong> This is a simple dark alert. <a href="javascript:void(0)" class="alert-link">check it out!</a>
        </div>

        <hr>
        <h5>With Icon</h5>
        <div class="alert alert-success fade show" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-success btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <div class="media">
            <i class="material-icons">check_circle_outline</i>
            <div class="media-body ml-2">
              <strong>Well Done!</strong> Successful alert message.
            </div>
          </div>
        </div>
        <div class="alert alert-info fade show" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-info btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <div class="media">
            <i class="material-icons">info</i>
            <div class="media-body ml-2">
              <strong>Heads up!</strong> This alert needs your attention.
            </div>
          </div>
        </div>
        <div class="alert alert-warning fade show" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-warning btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <div class="media">
            <i class="material-icons">warning</i>
            <div class="media-body ml-2">
              <strong>Warning!</strong> Better check yourself.
            </div>
          </div>
        </div>
        <div class="alert alert-danger fade show" role="alert">
          <button class="btn btn-sm btn-icon btn-faded-danger btn-close" type="button" data-dismiss="alert"><i class="material-icons">close</i></button>
          <div class="media">
            <i class="material-icons">highlight_off</i>
            <div class="media-body ml-2">
              <strong>Oh snap!</strong> Error alert message.
            </div>
          </div>
        </div>
        <hr class="mb-5">
        <!-- /ALERTS -->

        <!-- BUTTONS -->
        <h1 class="text-info text-decoration-underline">Buttons</h1>
        <hr>
        <div class="d-grid row-gap-5 column-gap-3 grid-template-col-lg-2">
          <section>
            <h4>Button Styles</h4>
            <p>Several predefined button styles.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-dark">Dark</button>
                <button type="button" class="btn btn-secondary">Secondary</button>
              </div>
            </div>
          </section>

          <section>
            <h4>Outline Buttons</h4>
            <p>In need of a button, but not the hefty background colors they bring.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <div class="bg-secondary p-2">
                  <button type="button" class="btn btn-outline-light">Light</button>
                </div>
                <button type="button" class="btn btn-outline-primary">Primary</button>
                <button type="button" class="btn btn-outline-success">Success</button>
                <button type="button" class="btn btn-outline-danger">Danger</button>
                <button type="button" class="btn btn-outline-warning">Warning</button>
                <button type="button" class="btn btn-outline-info">Info</button>
                <button type="button" class="btn btn-outline-dark">Dark</button>
                <button type="button" class="btn btn-outline-secondary">Secondary</button>
              </div>
            </div>
          </section>

          <section>
            <h4>Faded Buttons</h4>
            <p>Buttons with faded colors.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <button type="button" class="btn btn-faded-light">Light</button>
                <button type="button" class="btn btn-faded-primary">Primary</button>
                <button type="button" class="btn btn-faded-success">Success</button>
                <button type="button" class="btn btn-faded-danger">Danger</button>
                <button type="button" class="btn btn-faded-warning">Warning</button>
                <button type="button" class="btn btn-faded-info">Info</button>
                <button type="button" class="btn btn-faded-dark">Dark</button>
                <button type="button" class="btn btn-faded-secondary">Secondary</button>
              </div>
            </div>
          </section>

          <section>
            <h4>Text Buttons</h4>
            <p>Transparent background for text buttons.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <button type="button" class="btn btn-text-primary">Primary</button>
                <button type="button" class="btn btn-text-success">Success</button>
                <button type="button" class="btn btn-text-danger">Danger</button>
                <button type="button" class="btn btn-text-warning">Warning</button>
                <button type="button" class="btn btn-text-info">Info</button>
                <button type="button" class="btn btn-text-dark">Dark</button>
                <button type="button" class="btn btn-text-secondary">Secondary</button>
              </div>
            </div>
          </section>

          <section>
            <h4>Button Sizes</h4>
            <p>Several predefined button sizes.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <button type="button" class="btn btn-light btn-xs">Extra small</button>
                <button type="button" class="btn btn-light btn-xs">Extra small</button>
                <button type="button" class="btn btn-light btn-xs">Extra small</button>
              </div>
            </div>
            <div class="list-inline-block-wrapper mt-2">
              <div class="list-inline-block">
                <button type="button" class="btn btn-light btn-sm">Small</button>
                <button type="button" class="btn btn-light btn-sm">Small</button>
                <button type="button" class="btn btn-light btn-sm">Small</button>
              </div>
            </div>
            <div class="list-inline-block-wrapper mt-2">
              <div class="list-inline-block">
                <button type="button" class="btn btn-light">Default</button>
                <button type="button" class="btn btn-light">Default</button>
                <button type="button" class="btn btn-light">Default</button>
              </div>
            </div>
            <div class="list-inline-block-wrapper mt-2">
              <div class="list-inline-block">
                <button type="button" class="btn btn-light btn-lg">Large</button>
                <button type="button" class="btn btn-light btn-lg">Large</button>
                <button type="button" class="btn btn-light btn-lg">Large</button>
              </div>
            </div>
          </section>

          <section>
            <h4>Border-radius</h4>
            <p>Add classes to an element to easily round its corners.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <button type="button" class="btn rounded-pill btn-primary">Pill rounded</button>
                <button type="button" class="btn rounded-pill btn-outline-primary">Pill rounded</button>
                <button type="button" class="btn rounded-pill btn-faded-primary">Pill rounded</button>
                <button type="button" class="btn rounded-pill btn-text-primary">Pill rounded</button>
                <button type="button" class="btn rounded-0 btn-success">No rounded</button>
                <button type="button" class="btn rounded-0 btn-outline-success">No rounded</button>
                <button type="button" class="btn rounded-0 btn-faded-success">No rounded</button>
                <button type="button" class="btn rounded-0 btn-text-success">No rounded</button>
              </div>
            </div>
          </section>

          <section>
            <h4>Buttons with an Icon</h4>
            <p>Buttons support an icon on either before or after the label. Avoid using two icons in a button.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <button type="button" class="btn btn-primary has-icon"><i class="material-icons mr-1">thumb_up</i> Like</button>
                <button type="button" class="btn btn-success has-icon"><i class="material-icons mr-1">security</i> Secure</button>
                <button type="button" class="btn btn-danger has-icon"><i class="material-icons mr-1">delete</i> Remove</button>
                <button type="button" class="btn btn-info has-icon">Call <i class="material-icons ml-1">phone</i></button>
                <button type="button" class="btn btn-light has-icon">Share <i class="material-icons ml-1">share</i></button>
                <button type="button" class="btn btn-outline-primary has-icon"><i class="material-icons mr-1">thumb_up</i> Like</button>
                <button type="button" class="btn btn-outline-success has-icon"><i class="material-icons mr-1">security</i> Secure</button>
                <button type="button" class="btn btn-outline-danger has-icon"><i class="material-icons mr-1">delete</i> Remove</button>
                <button type="button" class="btn btn-outline-info has-icon">Call <i class="material-icons ml-1">phone</i></button>
                <div class="bg-secondary d-inline-flex p-2">
                  <button type="button" class="btn btn-outline-light has-icon">Share <i class="material-icons ml-1">share</i></button>
                </div>
                <button type="button" class="btn btn-faded-primary has-icon"><i class="material-icons mr-1">thumb_up</i> Like</button>
                <button type="button" class="btn btn-faded-success has-icon"><i class="material-icons mr-1">security</i> Secure</button>
                <button type="button" class="btn btn-faded-danger has-icon"><i class="material-icons mr-1">delete</i> Remove</button>
                <button type="button" class="btn btn-faded-info has-icon">Call <i class="material-icons ml-1">phone</i></button>
                <button type="button" class="btn btn-faded-light has-icon">Share <i class="material-icons ml-1">share</i></button>
                <button type="button" class="btn btn-text-primary has-icon"><i class="material-icons mr-1">thumb_up</i> Like</button>
                <button type="button" class="btn btn-text-success has-icon"><i class="material-icons mr-1">security</i> Secure</button>
                <button type="button" class="btn btn-text-danger has-icon"><i class="material-icons mr-1">delete</i> Remove</button>
                <button type="button" class="btn btn-text-info has-icon">Call <i class="material-icons ml-1">phone</i></button>
                <div class="bg-secondary d-inline-flex p-2">
                  <button type="button" class="btn btn-text-light has-icon">Share <i class="material-icons ml-1">share</i></button>
                </div>
              </div>
            </div>
          </section>

          <section>
            <h4>Icon Buttons</h4>
            <p>Button with icons only.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <button type="button" class="btn btn-primary btn-icon"><i class="material-icons">home</i></button>
                <button type="button" class="btn btn-outline-primary btn-icon"><i class="material-icons">home</i></button>
                <button type="button" class="btn btn-faded-primary btn-icon"><i class="material-icons">home</i></button>
                <button type="button" class="btn btn-text-primary btn-icon"><i class="material-icons">home</i></button>
                <button type="button" class="btn btn-secondary btn-icon rounded-circle"><i class="material-icons">build</i></button>
                <button type="button" class="btn btn-outline-secondary btn-icon rounded-circle"><i class="material-icons">build</i></button>
                <button type="button" class="btn btn-faded-secondary btn-icon rounded-circle"><i class="material-icons">build</i></button>
                <button type="button" class="btn btn-text-secondary btn-icon rounded-circle"><i class="material-icons">build</i></button>
                <button type="button" class="btn btn-success btn-icon rounded-0"><i class="material-icons">launch</i></button>
                <button type="button" class="btn btn-outline-success btn-icon rounded-0"><i class="material-icons">launch</i></button>
                <button type="button" class="btn btn-faded-success btn-icon rounded-0"><i class="material-icons">launch</i></button>
                <button type="button" class="btn btn-text-success btn-icon rounded-0"><i class="material-icons">launch</i></button>
                <button type="button" class="btn btn-text-primary btn-icon rounded-circle"><i class="material-icons">zoom_in</i></button>
                <button type="button" class="btn btn-text-success btn-icon rounded-circle"><i class="material-icons">edit</i></button>
                <button type="button" class="btn btn-text-danger btn-icon rounded-circle"><i class="material-icons">delete</i></button>
              </div>
            </div>
          </section>

          <section>
            <h4>Button group</h4>
            <p>Group a series of buttons together on a single line with the button group.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-primary">Left</button>
                  <button type="button" class="btn btn-primary">Middle</button>
                  <button type="button" class="btn btn-primary">Right</button>
                </div>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-outline-secondary">Left</button>
                  <button type="button" class="btn btn-outline-secondary">Middle</button>
                  <button type="button" class="btn btn-outline-secondary">Right</button>
                </div>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-faded-success">Left</button>
                  <button type="button" class="btn btn-faded-success">Middle</button>
                  <button type="button" class="btn btn-faded-success">Right</button>
                </div>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-text-info">Left</button>
                  <button type="button" class="btn btn-text-info">Middle</button>
                  <button type="button" class="btn btn-text-info">Right</button>
                </div>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-faded-secondary has-icon"><i class="material-icons text-primary mr-1">zoom_in</i> View</button>
                  <button type="button" class="btn btn-faded-secondary has-icon"><i class="material-icons text-success mr-1">edit</i> Edit</button>
                  <button type="button" class="btn btn-faded-secondary has-icon"><i class="material-icons text-danger mr-1">delete</i> Delete</button>
                </div>
                <div class="btn-group" role="group">
                  <button type="button" class="btn btn-text-primary btn-icon rounded-circle"><i class="material-icons">zoom_in</i></button>
                  <button type="button" class="btn btn-text-success btn-icon rounded-circle"><i class="material-icons">edit</i></button>
                  <button type="button" class="btn btn-text-danger btn-icon rounded-circle"><i class="material-icons">delete</i></button>
                </div>
                <div class="btn-group-vertical" role="group">
                  <button type="button" class="btn btn-light">Top</button>
                  <button type="button" class="btn btn-light">Middle</button>
                  <button type="button" class="btn btn-light">Bottom</button>
                </div>
                <div class="btn-group-vertical" role="group">
                  <button type="button" class="btn btn-light btn-icon"><i class="material-icons text-primary">zoom_in</i></button>
                  <button type="button" class="btn btn-light btn-icon"><i class="material-icons text-success">edit</i></button>
                  <button type="button" class="btn btn-light btn-icon"><i class="material-icons text-danger">delete</i></button>
                </div>
              </div>
            </div>
          </section>

          <section>
            <h4>Button plugin</h4>
            <p>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <section class="text-center p-1">
                  <h6>Toggle states</h6>
                  <button type="button" class="btn btn-light" data-toggle="button" aria-pressed="false">
                    Toggle
                  </button>
                </section>
                <section class="text-center p-1">
                  <h6>Checkbox</h6>
                  <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-light active">
                      <input type="checkbox" checked> HTML
                    </label>
                    <label class="btn btn-light">
                      <input type="checkbox"> CSS
                    </label>
                    <label class="btn btn-light">
                      <input type="checkbox"> JS
                    </label>
                  </div>
                </section>
                <section class="text-center p-1">
                  <h6>Radio</h6>
                  <div class="btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-light active">
                      <input type="radio" name="options" checked> PNG
                    </label>
                    <label class="btn btn-light">
                      <input type="radio" name="options"> JPG
                    </label>
                    <label class="btn btn-light">
                      <input type="radio" name="options"> SVG
                    </label>
                  </div>
                </section>
              </div>
            </div>
          </section>

          <section>
            <h4>Button States</h4>
            <p>Button active state and disabled state.</p>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <button type="button" class="btn active btn-primary">Active</button>
                <button type="button" class="btn active btn-outline-success">Active</button>
                <button type="button" class="btn active btn-faded-danger">Active</button>
                <button type="button" class="btn active btn-text-warning">Active</button>
                <button type="button" class="btn active btn-info">Active</button>
                <button type="button" class="btn active btn-light">Active</button>
                <button type="button" class="btn btn-primary" disabled>Disabled</button>
                <button type="button" class="btn btn-outline-success" disabled>Disabled</button>
                <button type="button" class="btn btn-faded-danger" disabled>Disabled</button>
                <button type="button" class="btn btn-text-warning" disabled>Disabled</button>
                <button type="button" class="btn btn-info" disabled>Disabled</button>
                <button type="button" class="btn btn-light" disabled>Disabled</button>
              </div>
            </div>
          </section>

          <section>
            <h4>Miscellaneous</h4>
            <div class="list-inline-block-wrapper">
              <div class="list-inline-block">
                <div class="btn-group btn-group-toggle btn-group-circle" data-toggle="buttons">
                  <label class="btn btn-outline-secondary">
                    <input type="radio" name="size">S
                  </label>
                  <label class="btn btn-outline-secondary">
                    <input type="radio" name="size">M
                  </label>
                  <label class="btn btn-outline-secondary active">
                    <input type="radio" name="size" checked>L
                  </label>
                  <label class="btn btn-outline-secondary">
                    <input type="radio" name="size">XL
                  </label>
                </div>
                <button type="button" class="btn btn-primary">
                  Badge <span class="badge badge-light">8</span>
                </button>
                <button type="button" class="btn btn-faded-primary btn-icon rounded-circle has-badge">
                  <i class="material-icons">mail</i> <span class="badge badge-pill badge-danger">8</span>
                </button>
              </div>
              <p class="mt-3">
                <button type="button" class="btn btn-success shadow">Shadow</button>
                <button type="button" class="btn btn-light shadow-sm ml-3">Small shadow</button>
              </p>
              <button type="button" class="btn btn-light btn-block">Block level button</button>
            </div>
          </section>
        </div>
        <hr class="mb-5">
        <!-- /BUTTONS -->

        <!-- CAROUSEL -->
        <h1 class="text-info text-decoration-underline">Carousel</h1>
        <hr>
        <h3 class="text-center">Bootstrap's Carousel</h3>
        <div class="d-grid grid-template-col-md-3 grid-gap-3">
          <div class="card card-body">
            <h5 class="text-center">Basic</h5>
            <div id="carouselSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2500" data-pause="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/shop/img/gallery/1.jpeg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/2.jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/3.jpeg" class="d-block w-100" alt="Slide 3">
                </div>
              </div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">With Controls</h5>
            <div id="carouselControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/shop/img/gallery/4.jpeg" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/5.jpeg" class="d-block w-100" alt="Slide 5">
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/6.jpeg" class="d-block w-100" alt="Slide 6">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">With Indicators</h5>
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators" data-slide-to="1"></li>
                <li data-target="#carouselIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/shop/img/gallery/7.jpeg" class="d-block w-100" alt="Slide 7">
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/8.jpeg" class="d-block w-100" alt="Slide 8">
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/9.jpeg" class="d-block w-100" alt="Slide 9">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">With Captions</h5>
            <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselCaptions" data-slide-to="1"></li>
                <li data-target="#carouselCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/shop/img/gallery/10.jpeg" class="d-block w-100" alt="Slide 10">
                  <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/1.jpeg" class="d-block w-100" alt="Slide 1">
                  <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/2.jpeg" class="d-block w-100" alt="Slide 2">
                  <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">Crossfade</h5>
            <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/assets/shop/img/gallery/3.jpeg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/4.jpeg" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="carousel-item">
                  <img src="/assets/shop/img/gallery/5.jpeg" class="d-block w-100" alt="Slide 5">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>

        <h3 class="text-center mt-5">Swiper Modern Touch Slider</h3>
        <div class="d-grid grid-template-col-md-3 grid-gap-3 overflow-hidden">
          <div class="card card-body">
            <h5 class="text-center">Basic</h5>
            <div class="swiper-container" id="swiperBasic">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/1.jpeg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/2.jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/3.jpeg" class="d-block w-100" alt="Slide 3">
                </div>
              </div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">With Navigation</h5>
            <div class="swiper-container" id="swiperNavigation">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/4.jpeg" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/5.jpeg" class="d-block w-100" alt="Slide 5">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/6.jpeg" class="d-block w-100" alt="Slide 6">
                </div>
              </div>
              <div class="swiper-button-prev"><i class="material-icons">chevron_left</i></div>
              <div class="swiper-button-next"><i class="material-icons">chevron_right</i></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">Small Navigation</h5>
            <div class="swiper-container" id="swiperNavigationSmall">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/7.jpeg" class="d-block w-100" alt="Slide 7">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/8.jpeg" class="d-block w-100" alt="Slide 8">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/9.jpeg" class="d-block w-100" alt="Slide 9">
                </div>
              </div>
              <div class="swiper-button-prev swiper-button-prev-sm"><i class="material-icons">chevron_left</i></div>
              <div class="swiper-button-next swiper-button-next-sm"><i class="material-icons">chevron_right</i></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">Autohide Navigation</h5>
            <div class="swiper-container" id="swiperNavigationAutohide">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/10.jpeg" class="d-block w-100" alt="Slide 10">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/1.jpeg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/2.jpeg" class="d-block w-100" alt="Slide 2">
                </div>
              </div>
              <div class="swiper-button-prev swiper-button-prev-sm autohide"><i class="material-icons">chevron_left</i></div>
              <div class="swiper-button-next swiper-button-next-sm autohide"><i class="material-icons">chevron_right</i></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">With Pagination</h5>
            <div class="swiper-container" id="swiperPagination">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/3.jpeg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/4.jpeg" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/5.jpeg" class="d-block w-100" alt="Slide 5">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">Fraction Pagination</h5>
            <div class="swiper-container" id="swiperPaginationFraction">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/6.jpeg" class="d-block w-100" alt="Slide 6">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/7.jpeg" class="d-block w-100" alt="Slide 7">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/8.jpeg" class="d-block w-100" alt="Slide 8">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">Progressbar Pagination</h5>
            <div class="swiper-container" id="swiperPaginationProgressbar">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/9.jpeg" class="d-block w-100" alt="Slide 9">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/10.jpeg" class="d-block w-100" alt="Slide 10">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/1.jpeg" class="d-block w-100" alt="Slide 1">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">Fade Effect</h5>
            <div class="swiper-container" id="swiperEffectFade">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/2.jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/3.jpeg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/4.jpeg" class="d-block w-100" alt="Slide 4">
                </div>
              </div>
              <div class="swiper-button-prev swiper-button-prev-sm"><i class="material-icons">chevron_left</i></div>
              <div class="swiper-button-next swiper-button-next-sm"><i class="material-icons">chevron_right</i></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">Coverflow Effect</h5>
            <div class="swiper-container" id="swiperEffectCoverflow">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/5.jpeg" class="d-block w-100" alt="Slide 5">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/6.jpeg" class="d-block w-100" alt="Slide 6">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/7.jpeg" class="d-block w-100" alt="Slide 7">
                </div>
              </div>
              <div class="swiper-button-prev swiper-button-prev-sm"><i class="material-icons">chevron_left</i></div>
              <div class="swiper-button-next swiper-button-next-sm"><i class="material-icons">chevron_right</i></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">Flip Effect</h5>
            <div class="swiper-container" id="swiperEffectFlip">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/8.jpeg" class="d-block w-100" alt="Slide 8">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/9.jpeg" class="d-block w-100" alt="Slide 9">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/10.jpeg" class="d-block w-100" alt="Slide 10">
                </div>
              </div>
              <div class="swiper-button-prev swiper-button-prev-sm"><i class="material-icons">chevron_left</i></div>
              <div class="swiper-button-next swiper-button-next-sm"><i class="material-icons">chevron_right</i></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">Cube Effect</h5>
            <div class="swiper-container" id="swiperEffectCube">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/1.jpeg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/2.jpeg" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/3.jpeg" class="d-block w-100" alt="Slide 3">
                </div>
              </div>
              <div class="swiper-button-prev swiper-button-prev-sm"><i class="material-icons">chevron_left</i></div>
              <div class="swiper-button-next swiper-button-next-sm"><i class="material-icons">chevron_right</i></div>
            </div>
          </div>
          <div class="card card-body" style="height: 280px">
            <h5 class="text-center">Vertical Slider</h5>
            <div class="swiper-container" id="swiperVertical">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/4.jpeg" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/5.jpeg" class="d-block w-100" alt="Slide 5">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/6.jpeg" class="d-block w-100" alt="Slide 6">
                </div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev swiper-button-prev-sm vertical"><i class="material-icons">keyboard_arrow_up</i></div>
              <div class="swiper-button-next swiper-button-next-sm vertical"><i class="material-icons">keyboard_arrow_down</i></div>
            </div>
          </div>
          <div class="card card-body">
            <h5 class="text-center">With Navigation v2</h5>
            <div class="swiper-container" id="swiperNavigationV2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/4.jpeg" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/5.jpeg" class="d-block w-100" alt="Slide 5">
                </div>
                <div class="swiper-slide">
                  <img src="/assets/shop/img/gallery/6.jpeg" class="d-block w-100" alt="Slide 6">
                </div>
              </div>
              <div class="swiper-button-prev swiper-button-prev2"><i class="material-icons">chevron_left</i></div>
              <div class="swiper-button-next swiper-button-next2"><i class="material-icons">chevron_right</i></div>
            </div>
          </div>
        </div>
        <hr class="mb-5">
        <!-- /CAROUSEL -->

        <!-- LIST GROUP -->
        <h1 class="text-info text-decoration-underline">List Group</h1>
        <hr>
        <!-- BASIC LIST GROUP -->
        <h5 class="mb-3 text-center text-decoration-underline">Basic List Group</h5>
        <div class="d-grid column-gap-3 row-gap-4 grid-template-col-md-2 grid-template-col-lg-3 mb-5">
          <ul class="list-group">
            <li class="list-group-item"><strong>Retina: 13.3-inch </strong><span class="text-secondary">Display</span></li>
            <li class="list-group-item"><strong>Intel Iris Graphics 6100 </strong><span class="text-secondary">Graphics</span></li>
            <li class="list-group-item"><strong>500 GB Flash </strong><span class="text-secondary">Storage</span></li>
            <li class="list-group-item"><strong>3.1 GHz Intel Core i7 </strong><span class="text-secondary">Processor</span></li>
            <li class="list-group-item"><strong>16 GB 1867 MHz DDR3 </strong><span class="text-secondary">Memory</span></li>
          </ul>
          <ul class="list-group">
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>Retina: 13.3-inch</strong><span class="text-secondary ml-1">Display</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>Intel Iris Graphics 6100</strong><span class="text-secondary ml-1">Graphics</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>500 GB Flash</strong><span class="text-secondary ml-1">Storage</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>3.1 GHz Intel Core i7</strong><span class="text-secondary ml-1">Processor</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>16 GB 1867 MHz DDR3</strong><span class="text-secondary ml-1">Memory</span></li>
          </ul>
          <div class="list-group">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>Retina: 13.3-inch</strong><span class="text-secondary ml-1">Display</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>Intel Iris Graphics 6100</strong><span class="text-secondary ml-1">Graphics</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>500 GB Flash</strong><span class="text-secondary ml-1">Storage</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>3.1 GHz Intel Core i7</strong><span class="text-secondary ml-1">Processor</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>16 GB 1867 MHz DDR3</strong><span class="text-secondary ml-1">Memory</span></a>
          </div>
        </div>
        <!-- /BASIC LIST GROUP -->

        <!-- SMALL LIST GROUP -->
        <h5 class="my-3 text-center text-decoration-underline">List Group Small</h5>
        <div class="d-grid column-gap-3 row-gap-4 grid-template-col-md-2 grid-template-col-lg-3 mb-5">
          <ul class="list-group list-group-sm">
            <li class="list-group-item"><strong>Retina: 13.3-inch </strong><span class="text-secondary">Display</span></li>
            <li class="list-group-item"><strong>Intel Iris Graphics 6100 </strong><span class="text-secondary">Graphics</span></li>
            <li class="list-group-item"><strong>500 GB Flash </strong><span class="text-secondary">Storage</span></li>
            <li class="list-group-item"><strong>3.1 GHz Intel Core i7 </strong><span class="text-secondary">Processor</span></li>
            <li class="list-group-item"><strong>16 GB 1867 MHz DDR3 </strong><span class="text-secondary">Memory</span></li>
          </ul>
          <ul class="list-group list-group-sm">
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>Retina: 13.3-inch</strong><span class="text-secondary ml-1">Display</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>Intel Iris Graphics 6100</strong><span class="text-secondary ml-1">Graphics</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>500 GB Flash</strong><span class="text-secondary ml-1">Storage</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>3.1 GHz Intel Core i7</strong><span class="text-secondary ml-1">Processor</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>16 GB 1867 MHz DDR3</strong><span class="text-secondary ml-1">Memory</span></li>
          </ul>
          <div class="list-group list-group-sm">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>Retina: 13.3-inch</strong><span class="text-secondary ml-1">Display</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>Intel Iris Graphics 6100</strong><span class="text-secondary ml-1">Graphics</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>500 GB Flash</strong><span class="text-secondary ml-1">Storage</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>3.1 GHz Intel Core i7</strong><span class="text-secondary ml-1">Processor</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>16 GB 1867 MHz DDR3</strong><span class="text-secondary ml-1">Memory</span></a>
          </div>
        </div>
        <!-- /SMALL LIST GROUP -->

        <!-- LIST GROUP WITHOUT BORDER -->
        <h5 class="my-3 text-center text-decoration-underline">List Group Without Border</h5>
        <div class="d-grid column-gap-3 row-gap-4 grid-template-col-md-2 grid-template-col-lg-3 mb-5">
          <ul class="list-group list-group-no-border">
            <li class="list-group-item"><strong>Retina: 13.3-inch </strong><span class="text-secondary">Display</span></li>
            <li class="list-group-item"><strong>Intel Iris Graphics 6100 </strong><span class="text-secondary">Graphics</span></li>
            <li class="list-group-item"><strong>500 GB Flash </strong><span class="text-secondary">Storage</span></li>
            <li class="list-group-item"><strong>3.1 GHz Intel Core i7 </strong><span class="text-secondary">Processor</span></li>
            <li class="list-group-item"><strong>16 GB 1867 MHz DDR3 </strong><span class="text-secondary">Memory</span></li>
          </ul>
          <ul class="list-group list-group-no-border">
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>Retina: 13.3-inch</strong><span class="text-secondary ml-1">Display</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>Intel Iris Graphics 6100</strong><span class="text-secondary ml-1">Graphics</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>500 GB Flash</strong><span class="text-secondary ml-1">Storage</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>3.1 GHz Intel Core i7</strong><span class="text-secondary ml-1">Processor</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>16 GB 1867 MHz DDR3</strong><span class="text-secondary ml-1">Memory</span></li>
          </ul>
          <div class="list-group list-group-no-border list-group-sm">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>Retina: 13.3-inch</strong><span class="text-secondary ml-1">Display</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>Intel Iris Graphics 6100</strong><span class="text-secondary ml-1">Graphics</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>500 GB Flash</strong><span class="text-secondary ml-1">Storage</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>3.1 GHz Intel Core i7</strong><span class="text-secondary ml-1">Processor</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>16 GB 1867 MHz DDR3</strong><span class="text-secondary ml-1">Memory</span></a>
          </div>
        </div>
        <!-- /LIST GROUP WITHOUT BORDER -->

        <!-- STRIPED LIST GROUP -->
        <h5 class="my-3 text-center text-decoration-underline">Striped List Group</h5>
        <div class="d-grid column-gap-3 row-gap-4 grid-template-col-md-2 grid-template-col-lg-3 mb-5">
          <ul class="list-group list-group-striped">
            <li class="list-group-item"><strong>Retina: 13.3-inch </strong><span class="text-secondary">Display</span></li>
            <li class="list-group-item"><strong>Intel Iris Graphics 6100 </strong><span class="text-secondary">Graphics</span></li>
            <li class="list-group-item"><strong>500 GB Flash </strong><span class="text-secondary">Storage</span></li>
            <li class="list-group-item"><strong>3.1 GHz Intel Core i7 </strong><span class="text-secondary">Processor</span></li>
            <li class="list-group-item"><strong>16 GB 1867 MHz DDR3 </strong><span class="text-secondary">Memory</span></li>
          </ul>
          <ul class="list-group list-group-striped">
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>Retina: 13.3-inch</strong><span class="text-secondary ml-1">Display</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>Intel Iris Graphics 6100</strong><span class="text-secondary ml-1">Graphics</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>500 GB Flash</strong><span class="text-secondary ml-1">Storage</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>3.1 GHz Intel Core i7</strong><span class="text-secondary ml-1">Processor</span></li>
            <li class="list-group-item has-icon"><i class="material-icons text-success mr-2">check_circle_outline</i><strong>16 GB 1867 MHz DDR3</strong><span class="text-secondary ml-1">Memory</span></li>
          </ul>
          <div class="list-group list-group-striped">
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>Retina: 13.3-inch</strong><span class="text-secondary ml-1">Display</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>Intel Iris Graphics 6100</strong><span class="text-secondary ml-1">Graphics</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>500 GB Flash</strong><span class="text-secondary ml-1">Storage</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>3.1 GHz Intel Core i7</strong><span class="text-secondary ml-1">Processor</span></a>
            <a href="javascript:void(0)" class="list-group-item list-group-item-action has-icon"><i class="material-icons text-info mr-2">label_important</i><strong>16 GB 1867 MHz DDR3</strong><span class="text-secondary ml-1">Memory</span></a>
          </div>
        </div>
        <!-- /STRIPED LIST GROUP -->

        <!-- ATTACHED LIST GROUP -->
        <h5 class="my-3 text-center text-decoration-underline">Attached List Group</h5>
        <div class="card-group mb-5">
          <div class="card">
            <ul class="list-group list-group-striped list-group-flush">
              <li class="list-group-item"><strong>Retina: 13.3-inch </strong><span class="text-secondary">Display</span></li>
              <li class="list-group-item"><strong>Intel Iris Graphics 6100 </strong><span class="text-secondary">Graphics</span></li>
              <li class="list-group-item"><strong>500 GB Flash </strong><span class="text-secondary">Storage</span></li>
              <li class="list-group-item"><strong>3.1 GHz Intel Core i7 </strong><span class="text-secondary">Processor</span></li>
              <li class="list-group-item"><strong>16 GB 1867 MHz DDR3 </strong><span class="text-secondary">Memory</span></li>
            </ul>
          </div>
          <div class="card">
            <ul class="list-group list-group-striped list-group-flush">
              <li class="list-group-item"><strong>Retina: 13.3-inch </strong><span class="text-secondary">Display</span></li>
              <li class="list-group-item"><strong>Intel Iris Graphics 6100 </strong><span class="text-secondary">Graphics</span></li>
              <li class="list-group-item"><strong>500 GB Flash </strong><span class="text-secondary">Storage</span></li>
              <li class="list-group-item"><strong>3.1 GHz Intel Core i7 </strong><span class="text-secondary">Processor</span></li>
              <li class="list-group-item"><strong>16 GB 1867 MHz DDR3 </strong><span class="text-secondary">Memory</span></li>
            </ul>
          </div>
          <div class="card">
            <ul class="list-group list-group-striped list-group-flush">
              <li class="list-group-item"><strong>Retina: 13.3-inch </strong><span class="text-secondary">Display</span></li>
              <li class="list-group-item"><strong>Intel Iris Graphics 6100 </strong><span class="text-secondary">Graphics</span></li>
              <li class="list-group-item"><strong>500 GB Flash </strong><span class="text-secondary">Storage</span></li>
              <li class="list-group-item"><strong>3.1 GHz Intel Core i7 </strong><span class="text-secondary">Processor</span></li>
              <li class="list-group-item"><strong>16 GB 1867 MHz DDR3 </strong><span class="text-secondary">Memory</span></li>
            </ul>
          </div>
        </div>
        <!-- /ATTACHED LIST GROUP -->

        <!-- MEDIA LIST GROUP -->
        <h5 class="mb-3 text-center text-decoration-underline">Media List Group</h5>
        <div class="d-grid grid-gap-3 grid-template-col-md-2 mb-5">
          <div class="list-group">
            <div class="list-group-item">
              <div class="media">
                <i class="material-icons text-info display-4">extension</i>
                <div class="media-body ml-3">
                  <h5 class="font-weight-bold">Easy Customization</h5>
                  <span class="text-secondary">List groups are a flexible and powerful component for displaying simple.</span>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="media">
                <i class="material-icons text-info display-4">label_important</i>
                <div class="media-body ml-3">
                  <h5 class="font-weight-bold">Get Started Easily</h5>
                  <span class="text-secondary">List groups are a flexible and powerful component for displaying simple.</span>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="media">
                <i class="material-icons text-info display-4">star</i>
                <div class="media-body ml-3">
                  <h5 class="font-weight-bold">Customer Satisfaction</h5>
                  <span class="text-secondary">List groups are a flexible and powerful component for displaying simple.</span>
                </div>
              </div>
            </div>
          </div>
          <div class="list-group">
            <div class="list-group-item">
              <div class="media">
                <div class="media-body ml-3">
                  <h5 class="font-weight-bold">Easy Customization</h5>
                  <span class="text-secondary">List groups are a flexible and powerful component for displaying simple.</span>
                </div>
                <i class="material-icons text-info display-4">extension</i>
              </div>
            </div>
            <div class="list-group-item">
              <div class="media">
                <div class="media-body ml-3">
                  <h5 class="font-weight-bold">Get Started Easily</h5>
                  <span class="text-secondary">List groups are a flexible and powerful component for displaying simple.</span>
                </div>
                <i class="material-icons text-info display-4">label_important</i>
              </div>
            </div>
            <div class="list-group-item">
              <div class="media">
                <div class="media-body ml-3">
                  <h5 class="font-weight-bold">Customer Satisfaction</h5>
                  <span class="text-secondary">List groups are a flexible and powerful component for displaying simple.</span>
                </div>
                <i class="material-icons text-info display-4">star</i>
              </div>
            </div>
          </div>
        </div>
        <!-- /MEDIA LIST GROUP -->

        <!-- HORIZONTAL LIST GROUP -->
        <h5 class="mb-3 text-center text-decoration-underline">Horizontal List Group</h5>
        <ul class="list-group list-group-horizontal justify-content-center">
          <li class="list-group-item"><div class="text-secondary">Display</div><strong>Retina: 13.3-inch </strong></li>
          <li class="list-group-item"><div class="text-secondary">Graphics</div><strong>Intel Iris Graphics 6100 </strong></li>
          <li class="list-group-item"><div class="text-secondary">Storage</div><strong>500 GB Flash </strong></li>
        </ul>
        <h6 class="text-center text-decoration-underline mt-3">Equal Width</h6>
        <ul class="list-group list-group-horizontal justify-content-center">
          <li class="list-group-item flex-fill text-center"><div class="text-secondary">Display</div><strong>Retina: 13.3-inch </strong></li>
          <li class="list-group-item flex-fill text-center"><div class="text-secondary">Graphics</div><strong>Intel Iris Graphics 6100 </strong></li>
          <li class="list-group-item flex-fill text-center"><div class="text-secondary">Storage</div><strong>500 GB Flash </strong></li>
        </ul>
        <!-- /HORIZONTAL LIST GROUP -->
        <hr class="mb-5">
        <!-- /LIST GROUP -->

        <!-- MODAL -->
        <h1 class="text-info text-decoration-underline">Modal</h1>
        <hr>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Basic demo</td>
              <td><button type="button" class="btn btn-sm btn-faded-primary" data-toggle="modal" data-target="#basicModal">Launch Modal</button></td>
            </tr>
            <tr>
              <td>Scrolling long content</td>
              <td><button type="button" class="btn btn-sm btn-faded-primary" data-toggle="modal" data-target="#scrollingModal">Launch Modal</button></td>
            </tr>
            <tr>
              <td class="nostretch">Scrollable fixed content</td>
              <td><button type="button" class="btn btn-sm btn-faded-primary" data-toggle="modal" data-target="#scrollableModal">Launch Modal</button></td>
            </tr>
            <tr>
              <td>Tooltips and popovers</td>
              <td><button type="button" class="btn btn-sm btn-faded-primary" data-toggle="modal" data-target="#tpModal">Launch Modal</button></td>
            </tr>
            <tr>
              <td>Vertically centered</td>
              <td><button type="button" class="btn btn-sm btn-faded-primary" data-toggle="modal" data-target="#verticalModal">Launch Modal</button></td>
            </tr>
            <tr>
              <td>Small modal</td>
              <td><button type="button" class="btn btn-sm btn-faded-primary" data-toggle="modal" data-target="#smModal">Launch Modal</button></td>
            </tr>
            <tr>
              <td>Large modal</td>
              <td><button type="button" class="btn btn-sm btn-faded-primary" data-toggle="modal" data-target="#lgModal">Launch Modal</button></td>
            </tr>
            <tr>
              <td>Extra large modal</td>
              <td><button type="button" class="btn btn-sm btn-faded-primary" data-toggle="modal" data-target="#xlModal">Launch Modal</button></td>
            </tr>
            <tr>
              <td>No animation</td>
              <td><button type="button" class="btn btn-sm btn-faded-primary" data-toggle="modal" data-target="#noanimationModal">Launch Modal</button></td>
            </tr>
            <tr>
              <td>Side modals</td>
              <td>
                  <button type="button" class="btn btn-sm btn-faded-primary mb-1" data-toggle="modal" data-target="#topModal">Top</button>
                  <button type="button" class="btn btn-sm btn-faded-primary mb-1" data-toggle="modal" data-target="#rightModal">Right</button>
                  <button type="button" class="btn btn-sm btn-faded-primary mb-1" data-toggle="modal" data-target="#bottomModal">Bottom</button>
                  <button type="button" class="btn btn-sm btn-faded-primary mb-1" data-toggle="modal" data-target="#leftModal">Left</button>
              </td>
            </tr>
          </tbody>
        </table>
        <hr class="mb-5">
        <!-- /MODAL -->

        <!-- DROPDOWNS -->
        <h1 class="text-info text-decoration-underline">Dropdowns</h1>
        <hr>
        <div class="dropdown">
          <button class="btn btn-faded-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown button
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <hr>
        <div class="dropdown">
          <button class="btn btn-faded-primary dropdown-toggle no-caret" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            No caret
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <hr>
        <div class="dropdown">
          <button class="btn btn-faded-primary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Submenu
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-submenu">
              <a class="dropdown-item" href="#">Submenu</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0)">item #1</a>
                <a class="dropdown-item" href="javascript:void(0)">item #2</a>
                <a class="dropdown-item" href="javascript:void(0)">item #3</a>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="dropdown dropdown-hover d-inline-block">
          <button class="btn btn-faded-primary dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown hover
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <hr class="mb-5">
        <!-- /DROPDOWNS -->

        <!-- FORMS -->
        <h1 class="text-info text-decoration-underline">Forms</h1>
        <hr>
        <h5>Basic input</h5>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
        </form>
        <h5>Input icon</h5>
        <form>
          <div class="form-group">
            <span class="input-icon input-icon-sm">
              <i class="material-icons">mail_outline</i>
              <input type="email" class="form-control form-control-sm" value="username@example">
            </span>
          </div>
          <div class="form-group">
            <span class="input-icon">
              <i class="material-icons">mail_outline</i>
              <input type="email" class="form-control" value="username@example">
            </span>
          </div>
          <div class="form-group">
            <span class="input-icon input-icon-lg">
              <i class="material-icons">mail_outline</i>
              <input type="email" class="form-control form-control-lg" value="username@example">
            </span>
          </div>
          <div class="form-group">
            <span class="input-icon input-icon-sm input-icon-right">
              <i class="material-icons">lock</i>
              <input type="password" class="form-control form-control-sm" value="secretpassword">
            </span>
          </div>
          <div class="form-group">
            <span class="input-icon input-icon-right">
              <i class="material-icons">lock</i>
              <input type="password" class="form-control" value="secretpassword">
            </span>
          </div>
          <div class="form-group">
            <span class="input-icon input-icon-lg input-icon-right">
              <i class="material-icons">lock</i>
              <input type="password" class="form-control form-control-lg" value="secretpassword">
            </span>
          </div>
        </form>
        <h5>Custom Color input</h5>
        <form>
          <div class="custom-color custom-color-lg">
            <div class="color-item">
              <input type="radio" name="colorLarge" value="blue" id="radioBlueColorLarge" class="custom-control-input">
              <label for="radioBlueColorLarge" style="background-color:#36A2EB"></label>
            </div>
            <div class="color-item">
              <input type="radio" name="colorLarge" value="green" id="radioGreenColorLarge" class="custom-control-input">
              <label for="radioGreenColorLarge" style="background-color:#4cc065"></label>
            </div>
            <div class="color-item">
              <input type="radio" name="colorLarge" value="red" id="radioRedColorLarge" class="custom-control-input">
              <label for="radioRedColorLarge" style="background-color:#f05a5c"></label>
            </div>
            <div class="color-item">
              <input type="radio" name="colorLarge" value="yellow" id="radioYellowColorLarge" class="custom-control-input">
              <label for="radioYellowColorLarge" style="background-color:#ffb300"></label>
            </div>
          </div>
        </form>
        <h5>Switches</h5>
        <form>
          <div class="form-group">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch1">
              <label class="custom-control-label" for="customSwitch1">Default</label>
            </div>
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
              <label class="custom-control-label" for="customSwitch2">Disabled</label>
            </div>
          </div>
        </form>
        <h5>Without labels</h5>
        <form>
          <div class="form-group">
            <div class="custom-control custom-control-nolabel custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchNoLabel1">
              <label class="custom-control-label" for="customSwitchNoLabel1"></label>
            </div>
            <div class="custom-control custom-control-nolabel custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitchNoLabel2" checked>
              <label class="custom-control-label" for="customSwitchNoLabel2"></label>
            </div>
            <div class="w-100"></div>
            <div class="custom-control custom-control-nolabel custom-switch">
              <input type="checkbox" class="custom-control-input" disabled id="customSwitchNoLabel3">
              <label class="custom-control-label" for="customSwitchNoLabel3"></label>
            </div>
            <div class="custom-control custom-control-nolabel custom-switch">
              <input type="checkbox" class="custom-control-input" disabled id="customSwitchNoLabel4" checked>
              <label class="custom-control-label" for="customSwitchNoLabel4"></label>
            </div>
          </div>
        </form>
        <hr>
        <div class="custom-file">
          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <hr>
        <div class="custom-spinner">
          <button class="btn btn-icon rounded-circle btn-faded-primary down" type="button"><i class="material-icons">remove</i></button>
          <input type="number" class="form-control" value="1" min="1" max="999">
          <button class="btn btn-icon rounded-circle btn-faded-primary up" type="button"><i class="material-icons">add</i></button>
        </div>
        <hr>
        <div class="custom-spinner custom-spinner-vertical">
          <button class="btn btn-icon rounded-circle btn-faded-primary up" type="button"><i class="material-icons">keyboard_arrow_up</i></button>
          <input type="number" class="form-control" value="1" min="1" max="999">
          <button class="btn btn-icon rounded-circle btn-faded-primary down" type="button"><i class="material-icons">keyboard_arrow_down</i></button>
        </div>
        <hr class="mb-5">
        <!-- /FORMS -->

        <!-- IMAGES -->
        <h1 class="text-info text-decoration-underline">Images</h1>
        <hr>
        <div class="img img-zoom-in rounded-circle">
          <img src="/assets/shop/img/gallery/1s.jpeg" alt="" class="img-fluid" width="140">
        </div>

        <div style="width: 300px; height: 300px" class="img img-zoom-in">
          <div data-cover="/assets/shop/img/gallery/1.jpeg"></div>
        </div>

        <div class="img img-zoom-in rounded-circle">
          <img src="/assets/shop/img/gallery/1s.jpeg" alt="" class="img-fluid" width="140">
          <div class="overlay bg-dark"></div>
          <div class="overlay-content text-center text-white">Sample caption on hover</div>
        </div>
        <div class="img img-zoom-in rounded-circle">
          <img src="/assets/shop/img/gallery/1s.jpeg" alt="" class="img-fluid" width="140">
          <div class="overlay overlay-show bg-dark"></div>
          <div class="overlay-content overlay-show text-center text-white">Sample active caption</div>
        </div>
        <hr class="mb-5">
        <!-- /IMAGES -->

        <!-- NAVS -->
        <h1 class="text-info text-decoration-underline">Navs</h1>
        <hr>
        <nav class="nav nav-gap-x-1">
          <a class="nav-link active" href="#">Active</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link has-img" href="#">
            <img src="/assets/shop/img/gallery/1s.jpeg" alt="img" class="rounded-circle mr-2"> Link
          </a>
          <span class="nav-link-divider mx-1"></span>
          <a class="nav-link hover" href="#">Hover</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>
        <hr>
        <nav class="nav nav-gap-x-1">
          <a class="nav-link nav-link-sm active" href="#">Active</a>
          <a class="nav-link nav-link-sm" href="#">Link</a>
          <a class="nav-link nav-link-sm has-img" href="#">
            <img src="/assets/shop/img/gallery/1s.jpeg" alt="img" class="rounded-circle mr-2"> Link
          </a>
          <span class="nav-link-divider mx-1"></span>
          <a class="nav-link nav-link-sm" href="#">Link</a>
          <a class="nav-link nav-link-sm disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>
        <hr>
        <nav class="nav nav-gap-x-1">
          <a class="nav-link has-icon active" href="#"><i class="material-icons mr-1">done</i>Active</a>
          <a class="nav-link has-icon" href="#"><i class="material-icons mr-1">link</i>Link</a>
          <a class="nav-link has-icon" href="#"><i class="material-icons mr-1">link</i>Link</a>
          <a class="nav-link has-icon disabled" href="#" tabindex="-1" aria-disabled="true"><i class="material-icons mr-1">not_interested</i>Disabled</a>
        </nav>
        <hr>
        <nav class="nav nav-gap-x-1">
          <a class="nav-link nav-link-sm has-icon active" href="#"><i class="material-icons mr-1">done</i>Active</a>
          <a class="nav-link nav-link-sm has-icon" href="#"><i class="material-icons mr-1">label</i>Link</a>
          <a class="nav-link nav-link-sm has-icon" href="#"><i class="material-icons mr-1">label</i>Link</a>
          <a class="nav-link nav-link-sm has-icon disabled" href="#" tabindex="-1" aria-disabled="true"><i class="material-icons mr-1">not_interested</i>Disabled</a>
        </nav>
        <hr>
        <nav class="nav nav-gap-x-1 nav-circle">
          <a class="nav-link nav-icon active" href="#"><i class="material-icons">dashboard</i></a>
          <a class="nav-link nav-icon" href="#"><i class="material-icons">person</i></a>
          <a class="nav-link nav-icon" href="#"><i class="material-icons">phone</i></a>
          <a class="nav-link nav-icon disabled" href="#" tabindex="-1" aria-disabled="true"><i class="material-icons">not_interested</i></a>
        </nav>
        <hr>
        <nav class="nav nav-gap-x-1 nav-circle">
          <a class="nav-link nav-link-sm nav-icon active" href="#"><i class="material-icons">dashboard</i></a>
          <a class="nav-link nav-link-sm nav-icon" href="#"><i class="material-icons">person</i></a>
          <a class="nav-link nav-link-sm nav-icon" href="#"><i class="material-icons">phone</i></a>
          <a class="nav-link nav-link-sm nav-icon disabled" href="#" tabindex="-1" aria-disabled="true"><i class="material-icons">not_interested</i></a>
        </nav>
        <hr>
        <nav class="nav nav-gap-y-1 flex-column" style="max-width: 250px">
          <a class="nav-link active" href="#">Active</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>
        <hr>
        <nav class="nav nav-gap-y-1 flex-column" style="max-width: 250px">
          <a class="nav-link has-icon active" href="#"><i class="material-icons mr-1">done</i>Active</a>
          <a class="nav-link has-icon" href="#"><i class="material-icons mr-1">link</i>Link</a>
          <a class="nav-link has-icon" href="#"><i class="material-icons mr-1">link</i>Link</a>
          <a class="nav-link has-icon disabled" href="#" tabindex="-1" aria-disabled="true"><i class="material-icons mr-1">not_interested</i>Disabled</a>
        </nav>
        <hr>
        <nav class="nav nav-tabs">
          <a class="nav-item nav-link active" href="#home" data-toggle="tab">Home</a>
          <a class="nav-item nav-link" href="#profile" data-toggle="tab">Profile</a>
          <a class="nav-item nav-link" href="#contact" data-toggle="tab">Contact</a>
          <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>
        <div class="tab-content">
          <div class="tab-pane show active" id="home">home content</div>
          <div class="tab-pane" id="profile">profile content</div>
          <div class="tab-pane" id="contact">contact content</div>
        </div>
        <hr>
        <nav class="nav nav-tabs">
          <a class="nav-item nav-link has-icon active" href="#home_i" data-toggle="tab"><i class="material-icons mr-1">dashboard</i>Home</a>
          <a class="nav-item nav-link has-icon" href="#profile_i" data-toggle="tab"><i class="material-icons mr-1">person</i>Profile</a>
          <a class="nav-item nav-link has-icon" href="#contact_i" data-toggle="tab"><i class="material-icons mr-1">phone</i>Contact</a>
          <a class="nav-item nav-link has-icon disabled" href="#" tabindex="-1" aria-disabled="true"><i class="material-icons mr-1">not_interested</i>Disabled</a>
        </nav>
        <div class="tab-content">
          <div class="tab-pane show active" id="home_i">home content</div>
          <div class="tab-pane" id="profile_i">profile content</div>
          <div class="tab-pane" id="contact_i">contact content</div>
        </div>
        <hr>
        <nav class="nav nav-gap-x-1 nav-pills">
          <a class="nav-item nav-link active" href="#home2" data-toggle="tab">Home</a>
          <a class="nav-item nav-link" href="#profile2" data-toggle="tab">Profile</a>
          <a class="nav-item nav-link" href="#contact2" data-toggle="tab">Contact</a>
          <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>
        <div class="tab-content">
          <div class="tab-pane show active" id="home2">home content</div>
          <div class="tab-pane" id="profile2">profile content</div>
          <div class="tab-pane" id="contact2">contact content</div>
        </div>
        <hr>
        <nav class="nav nav-gap-x-1 nav-pills">
          <a class="nav-item nav-link has-icon active" href="#home2_i" data-toggle="tab"><i class="material-icons mr-1">dashboard</i>Home</a>
          <a class="nav-item nav-link has-icon" href="#profile2_i" data-toggle="tab"><i class="material-icons mr-1">person</i>Profile</a>
          <a class="nav-item nav-link has-icon" href="#contact2_i" data-toggle="tab"><i class="material-icons mr-1">phone</i>Contact</a>
          <a class="nav-item nav-link has-icon disabled" href="#" tabindex="-1" aria-disabled="true"><i class="material-icons mr-1">not_interested</i>Disabled</a>
        </nav>
        <div class="tab-content">
          <div class="tab-pane show active" id="home2_i">home content</div>
          <div class="tab-pane" id="profile2_i">profile content</div>
          <div class="tab-pane" id="contact2_i">contact content</div>
        </div>
        <hr>
        <div class="row w-75 no-gutters">
          <div class="col-4">
            <nav class="nav nav-gap-y-1 flex-column">
              <a class="nav-item nav-link active" href="#home3" data-toggle="tab">Home</a>
              <a class="nav-item nav-link" href="#profile3" data-toggle="tab">Profile</a>
              <a class="nav-item nav-link" href="#contact3" data-toggle="tab">Contact</a>
              <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </nav>
          </div>
          <div class="col-8">
            <div class="tab-content">
              <div class="tab-pane show active" id="home3">home content</div>
              <div class="tab-pane" id="profile3">profile content</div>
              <div class="tab-pane" id="contact3">contact content</div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row w-75 no-gutters">
          <div class="col-4">
            <nav class="nav nav-gap-y-1 flex-column">
              <a class="nav-item nav-link has-icon active" href="#home3_i" data-toggle="tab"><i class="material-icons mr-1">dashboard</i>Home</a>
              <a class="nav-item nav-link has-icon" href="#profile3_i" data-toggle="tab"><i class="material-icons mr-1">person</i>Profile</a>
              <a class="nav-item nav-link has-icon" href="#contact3_i" data-toggle="tab"><i class="material-icons mr-1">phone</i>Contact</a>
              <a class="nav-item nav-link has-icon disabled" href="#" tabindex="-1" aria-disabled="true"><i class="material-icons mr-1">not_interested</i>Disabled</a>
            </nav>
          </div>
          <div class="col-8">
            <div class="tab-content">
              <div class="tab-pane show active" id="home3_i">home content</div>
              <div class="tab-pane" id="profile3_i">profile content</div>
              <div class="tab-pane" id="contact3_i">contact content</div>
            </div>
          </div>
        </div>
        <hr class="mb-5">
        <!-- /NAVS -->

        <!-- NOUISLIDER -->
        <h1 class="text-info text-decoration-underline">noUiSlider</h1>
        <hr>
        <div id="slider1"></div>
        <br>
        <div id="slider2"></div>
        <br>
        <div class="px-3">
          <div id="slider3"></div>
        </div>
        <br><br><br><br><br>
        <div class="px-5">
          <div id="slider4"></div>
        </div>
        <br>
        <div id="slider5" style="height: 10rem" class="ml-5"></div>
        <br>
        <div id="slider6" style="height: 20rem"></div>
        <br><br>
        <hr class="mb-5">
        <!-- /NOUISLIDER -->

        <!-- STEPS -->
        <h1 class="text-info text-decoration-underline">Steps</h1>
        <hr>
        <nav class="steps">
          <a href="#" data-step="1" class="done">Personal</a>
          <a href="#" data-step="2" class="done">Shipping</a>
          <a href="#" data-step="3" class="current">Payment</a>
          <a href="#" data-step="4">Review</a>
        </nav>
        <hr>
        <nav class="steps">
          <a href="#" data-step="1" class="done">Processing</a>
          <a href="#" data-step="2" class="current">Sending</a>
          <a href="#" data-step="3">Delivered</a>
          <a href="#" data-step="4">Finished</a>
        </nav>
        <hr class="mb-5">
        <!-- /STEPS -->

      </div>
    </div>
  </div>

  <!-- Basic -->
  <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="basicModalLabel">Modal title</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scrolling -->
  <div class="modal fade" id="scrollingModal" tabindex="-1" role="dialog" aria-labelledby="scrollingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="scrollingModalLabel">Modal title</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scrollable -->
  <div class="modal fade" id="scrollableModal" tabindex="-1" role="dialog" aria-labelledby="scrollableModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header shadow-sm">
          <h5 class="modal-title" id="scrollableModalLabel">Modal title</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
          <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        </div>
        <div class="modal-footer border-top">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Tooltips and popovers -->
  <div class="modal fade" id="tpModal" tabindex="-1" role="dialog" aria-labelledby="tpModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tpModalLabel">Modal title</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          <h5>Popover in a modal</h5>
          <p>This <button type="button" class="btn btn-secondary" data-toggle="popover" data-container="#tpModal" title="Popover title" data-content="Popover body content is set in this attribute.">button</button> triggers a popover on click.</p>
          <hr>
          <h5>Tooltips in a modal</h5>
          <p><a href="#" data-toggle="tooltip" data-container="#tpModal" title="Tooltip">This link</a> and <a href="#" data-toggle="tooltip" data-container="#tpModal" title="Tooltip">that link</a> have tooltips on hover.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Vertically centered -->
  <div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="verticalModalLabel">Modal title</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Small -->
  <div class="modal fade" id="smModal" tabindex="-1" role="dialog" aria-labelledby="smModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="smModalLabel">Modal title</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Large -->
  <div class="modal fade" id="lgModal" tabindex="-1" role="dialog" aria-labelledby="lgModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="lgModalLabel">Modal title</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Extra Large -->
  <div class="modal fade" id="xlModal" tabindex="-1" role="dialog" aria-labelledby="xlModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="xlModalLabel">Modal title</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- No Animation -->
  <div class="modal" id="noanimationModal" tabindex="-1" role="dialog" aria-labelledby="noanimationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="noanimationModalLabel">Modal title</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL CONTENT TOP -->
  <div class="modal fade modal-content-top" id="topModal" tabindex="-1" role="dialog" aria-labelledby="topModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="topModalLabel">Modal Content Top</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="modal-footer">
          <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="button" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /MODAL CONTENT TOP -->

  <!-- MODAL CONTENT RIGHT -->
  <div class="modal fade modal-content-right" id="rightModal" tabindex="-1" role="dialog" aria-labelledby="rightModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rightModalLabel">Modal Content Right</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="modal-footer">
          <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="button" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /MODAL CONTENT RIGHT -->

  <!-- MODAL CONTENT BOTTOM -->
  <div class="modal fade modal-content-bottom" id="bottomModal" tabindex="-1" role="dialog" aria-labelledby="bottomModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bottomModalLabel">Modal Content Bottom</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="modal-footer">
          <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="button" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /MODAL CONTENT BOTTOM -->

  <!-- MODAL CONTENT LEFT -->
  <div class="modal fade modal-content-left" id="leftModal" tabindex="-1" role="dialog" aria-labelledby="leftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="leftModalLabel">Modal Content Left</h5>
          <button class="btn btn-icon btn-sm btn-text-secondary rounded-circle" type="button" data-dismiss="modal">
            <i class="material-icons">close</i>
          </button>
        </div>
        <div class="modal-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="modal-footer">
          <button class="btn btn-light" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="button" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /MODAL CONTENT LEFT -->

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
                <li><a href="faq.html">Help / FAQ</a></li>
                <li><a href="404.html">404 Not Found</a></li>
              </ul>
            </li>
            <li class="no-sub mm-active"><a href="components.html"><i class="material-icons">check_box_outline_blank</i> Components</a></li>
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
  <script src="/assets/shop/plugins/swiper/swiper.min.js"></script>
  <script src="/assets/shop/plugins/nouislider/nouislider.min.js"></script>
  
  <!-- Application script -->
  <script src="/assets/shop/js/app.min.js"></script>
  <script>
  $(() => {

    // Change accordion card's color
    for (const color of document.querySelectorAll('input[name="accordion-color"]')) {
      color.addEventListener('change', () => {
        for (const card of document.querySelectorAll('#accordion-colors .card')) {
          card.className = 'card card-' + color.value
        }
      })
    }

    const swiperBasic = new Swiper('#swiperBasic', {
      loop: true,
      autoplay: {
        disableOnInteraction: false
      },
      slidesPerView: 1
    })
    const swiperNavigation = new Swiper('#swiperNavigation', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    })
    const swiperNavigationSmall = new Swiper('#swiperNavigationSmall', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    })
    const swiperNavigationAutohide = new Swiper('#swiperNavigationAutohide', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    })
    const swiperPagination = new Swiper('#swiperPagination', {
      loop: true,
      slidesPerView: 1,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      }
    })
    const swiperPaginationFraction = new Swiper('#swiperPaginationFraction', {
      loop: true,
      slidesPerView: 1,
      pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
        clickable: true
      }
    })
    const swiperPaginationProgressbar = new Swiper('#swiperPaginationProgressbar', {
      slidesPerView: 1,
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
        clickable: true
      }
    })
    const swiperEffectFade = new Swiper('#swiperEffectFade', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      effect: 'fade'
    })
    const swiperEffectCoverflow = new Swiper('#swiperEffectCoverflow', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      effect: 'coverflow'
    })
    const swiperEffectFlip = new Swiper('#swiperEffectFlip', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      effect: 'flip'
    })
    const swiperEffectCube = new Swiper('#swiperEffectCube', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      effect: 'cube'
    })
    const swiperVertical = new Swiper('#swiperVertical', {
      loop: true,
      direction: 'vertical',
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      }
    })
    const swiperNavigationV2 = new Swiper('#swiperNavigationV2', {
      slidesPerView: 1,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    })

    noUiSlider.create(document.getElementById('slider1'), {
      connect: 'lower',
      start: 50,
      range: {
        min: 0,
        max: 100
      }
    })
    noUiSlider.create(document.getElementById('slider2'), {
      start: [20, 80],
      connect: true,
      range: {
        min: 0,
        max: 100
      }
    })
    var pipsSlider = document.getElementById('slider3')
    noUiSlider.create(pipsSlider, {
      start: 50,
      range: {
        min: 0,
        max: 100
      },
      pips: {
        mode: 'count',
        values: 5
      }
    })
    for (const el of pipsSlider.querySelectorAll('.noUi-value')) {
      el.style.cursor = 'pointer'
      el.addEventListener('click', function () {
        pipsSlider.noUiSlider.set(Number(this.getAttribute('data-value')))
      })
    }
    noUiSlider.create(document.getElementById('slider4'), {
      start: [20, 80],
      connect: true,
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })
    noUiSlider.create(document.getElementById('slider5'), {
      connect: 'lower',
      orientation: 'vertical',
      direction: 'rtl',
      start: 50,
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })
    noUiSlider.create(document.getElementById('slider6'), {
      connect: true,
      orientation: 'vertical',
      direction: 'rtl',
      start: [20, 80],
      range: {
        min: 0,
        max: 100
      },
      pips: {
        mode: 'count',
        values: 5
      }
    })

  })
  </script>
</body>

</html>
