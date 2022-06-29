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


      <nav class="nav">
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
          <a class="nav-link dropdown-toggle no-caret forwardable active" href="account-profile.html" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <div class="dropdown-menu" aria-labelledby="accountDropdown">
            <a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a>
            <a class="dropdown-item" href="account-profile.html">Profile Page</a>
            <a class="dropdown-item active" href="account-orders.html">Orders List</a>
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
          <li class="breadcrumb-item"><a href="javascript:void(0)">Account</a></li>
          <li class="breadcrumb-item active" aria-current="page">Orders List</li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="container-fluid my-3">
    <div class="row gutters-3">
      <div class="col-md-4 col-lg-3">
        <div class="card card-style1">
          <div class="card-body text-center">
            <img src="/assets/shop/img/user/user.svg" width="100" height="100" alt="User" class="rounded-circle mb-3">
            <h5 class="mb-0">John Thor</h5>
            <small class="text-muted">Joined Dec 31, 2017</small>
            <hr>
            <div class="font-condensed d-flex align-items-center justify-content-center" data-toggle="tooltip" title="You currently have 9,386 Points to spend.">
              <i class="material-icons text-warning mr-2">grade</i> Points: 9386</div>
          </div>
          <div class="list-group list-group-flush">
            <a href="account-profile.html" class="list-group-item list-group-item-action d-flex">
              <i class="material-icons mr-3">person</i> Profile
            </a>
            <a href="account-orders.html" class="list-group-item list-group-item-action d-flex active">
              <i class="material-icons mr-3">shopping_cart</i> Orders
            </a>
            <a href="account-wishlist.html" class="list-group-item list-group-item-action d-flex align-items-center">
              <i class="material-icons mr-3">favorite_border</i> Wishlist

              <span class="badge badge-primary badge-pill ml-auto">3</span>
            </a>
            <a href="account-address.html" class="list-group-item list-group-item-action d-flex">
              <i class="material-icons mr-3">location_on</i> Address
            </a>
            <a href="account-signin.html" class="list-group-item list-group-item-action text-danger d-flex">
              <i class="material-icons mr-3">exit_to_app</i> Sign Out
            </a>
          </div>
        </div>
      </div>
      <div class="col mt-3 mt-md-0">
        <div class="card card-style1">
          <div class="card-body">
            <h4>My Orders</h4>
            <hr>
            <div class="table-responsive" id="table-orders">
              <table class="table table-hover">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Date</th>
                    <th scope="col" class="text-right">Total</th>
                    <th scope="col" class="text-center">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="account-order-detail.html">ORD556789</a></th>
                    <td>Dec 19, 2017</td>
                    <td class="text-right">$74.00</td>
                    <td class="text-center"><span class="badge badge-warning rounded">In Progress</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="account-order-detail.html">ORD456789</a></th>
                    <td>Dec 10, 2017</td>
                    <td class="text-right">$100.00</td>
                    <td class="text-center"><span class="badge badge-danger rounded">Canceled</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="account-order-detail.html">ORD356789</a></th>
                    <td>Dec 01, 2017</td>
                    <td class="text-right">$20.00</td>
                    <td class="text-center"><span class="badge badge-success rounded">Finished</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="account-order-detail.html">ORD256789</a></th>
                    <td>Nov 19, 2017</td>
                    <td class="text-right">$74.00</td>
                    <td class="text-center"><span class="badge badge-success rounded">Finished</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="account-order-detail.html">ORD156789</a></th>
                    <td>Nov 10, 2017</td>
                    <td class="text-right">$100.00</td>
                    <td class="text-center"><span class="badge badge-success rounded">Finished</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button class="btn btn-outline-success btn-sm has-icon"><i class="material-icons mr-2">cloud_download</i> Download as xls</button>
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
                <li class="mm-active"><a href="account-orders.html">Orders List</a></li>
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

  <!-- Main script -->
  <script src="/assets/shop/js/script.min.js"></script>

  <!-- Plugins -->

  <!-- Application script -->
  <script src="/assets/shop/js/app.min.js"></script>
  <script>
  $(() => {

    // Make table-sm on xs
    const table = document.querySelector('#table-orders')
    App.resize(() => {
      if (App.xs()) {
        table.classList.add('table-sm')
      } else {
        table.classList.remove('table-sm')
      }
    })()

  })
  </script>
</body>

</html>
