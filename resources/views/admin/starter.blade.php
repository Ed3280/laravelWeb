<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font & Icon -->
  <link rel="stylesheet" href="/assets/admin/font/inter/inter.min.css" id="font-css">
  <link rel="stylesheet" href="/assets/admin/plugins/material-design-icons-iconfont/material-design-icons.min.css">
  <link rel="stylesheet" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Plugins -->
  <!-- CSS plugins goes here -->
  <!-- Main Style -->
  <link rel="stylesheet" href="/assets/admin/plugins/simplebar/simplebar.min.css">
  <link rel="stylesheet" href="/assets/admin/css/style.min.css" id="main-css">
  <link rel="stylesheet" href="/assets/admin/css/sidebar-gray.min.css" id="theme-css"> <!-- options: blue,cyan,dark,gray,green,pink,purple,red,royal,ash,crimson,namn,frost -->
  <title>Your Brand</title>
</head>

<body>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar header -->
    <div class="sidebar-header">
      <a href="../../../index.php" class="logo">
        <img src="/assets/admin/img/logo-white.svg" alt="Logo" id="main-logo">
        Your Brand
      </a>
      <a href="#" class="nav-link nav-icon rounded-circle ml-auto" data-toggle="sidebar">
        <i class="material-icons">close</i>
      </a>
    </div>
    <!-- /Sidebar header -->

    <!-- Sidebar body -->
    <div class="sidebar-body">
      <ul class="nav treeview" data-accordion>
        <li class="nav-label">LABEL</li>
        <li class="nav-item">
          <a class="nav-link has-icon active" href="starter.html"><i data-feather="home"></i>Menu item (active)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="starter.html"><i class="fa fa-home"></i>Menu item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="starter.html"><i class="material-icons">home</i>Menu item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i data-feather="list"></i>Submenu</a>
          <ul class="nav">
            <li class="nav-item"><a href="starter.html" class="nav-link">Submenu item</a></li>
            <li class="nav-item"><a href="starter.html" class="nav-link">Submenu item</a></li>
            <li class="nav-item"><a href="starter.html" class="nav-link">Submenu item</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i data-feather="list"></i>Submenu</a>
          <ul class="nav">
            <li class="nav-item"><a href="starter.html" class="nav-link">Submenu item</a></li>
            <li class="nav-item"><a href="starter.html" class="nav-link">Submenu item</a></li>
            <li class="nav-item"><a href="starter.html" class="nav-link">Submenu item</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /Sidebar body -->

  </div>
  <!-- /Sidebar -->

  <!-- Main -->
  <div class="main">

    <!-- Main header -->
    <div class="main-header">
      <a class="nav-link nav-link-faded rounded-circle nav-icon" href="#" data-toggle="sidebar"><i class="material-icons">menu</i></a>
      <form class="form-inline ml-3 d-none d-md-flex">
        <span class="input-icon">
          <i class="material-icons">search</i>
          <input type="text" placeholder="Search..." class="form-control bg-gray-200 border-gray-200 rounded-lg">
        </span>
      </form>
      <ul class="nav nav-circle ml-auto">
        <li class="nav-item d-md-none"><a class="nav-link nav-link-faded nav-icon" data-toggle="modal" href="#searchModal"><i class="material-icons">search</i></a></li>
        <li class="nav-item d-none d-sm-block"><a class="nav-link nav-link-faded nav-icon" href="" id="refreshPage"><i class="material-icons">refresh</i></a></li>
        <li class="nav-item dropdown nav-notif">
          <a class="nav-link nav-link-faded nav-icon has-badge dropdown-toggle no-caret" href="#" data-toggle="dropdown" data-display="static">
            <i data-feather="bell"></i>
            <span class="badge badge-pill badge-danger">2</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right p-0">
            <div class="card">
              <div class="card-header bg-primary text-white">
                <i data-feather="bell" class="mr-2"></i>2 notifications
              </div>
              <div class="card-body p-0 pt-1">
                <div class="list-group list-group-sm list-group-flush">
                  <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                    <div class="media">
                      <span class="bg-primary text-white btn-icon rounded-circle"><i data-feather="user-plus"></i></span>
                      <div class="media-body ml-2">
                        <p class="mb-0">5 New members joined today</p>
                        <small class="text-secondary">
                          <i class="material-icons icon-inline mr-1">access_time</i>5 minutes ago
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                    <div class="media">
                      <span class="bg-info text-white btn-icon rounded-circle"><i data-feather="message-square"></i></span>
                      <div class="media-body ml-2">
                        <p class="mb-0">2 New comments</p>
                        <small class="text-secondary">
                          <i class="material-icons icon-inline mr-1">access_time</i>10 minutes ago
                        </small>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="card-footer justify-content-center">
                <a href="javascript:void(0)">View more &rsaquo;</a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown ml-2">
          <a class="nav-link nav-link-faded rounded nav-link-img dropdown-toggle px-2" href="#" data-toggle="dropdown" data-display="static">
            <img src="/assets/admin/img/user.svg" alt="User" class="rounded-circle mr-2">
            <span class="d-none d-sm-block">User</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right pt-0 overflow-hidden">
            <div class="media align-items-center bg-primary text-white px-4 py-3 mb-2">
              <img src="/assets/admin/img/user.svg" alt="User" class="rounded-circle" width="50" height="50">
              <div class="media-body ml-2 text-nowrap">
                <h6 class="mb-0">User</h6>
                <span class="text-gray-400 font-size-sm">User Group</span>
              </div>
            </div>
            <a class="dropdown-item has-icon" href="javascript:void(0)"><i class="mr-2" data-feather="arrow-right"></i>Dropdown item</a>
            <a class="dropdown-item has-icon" href="javascript:void(0)"><i class="mr-2" data-feather="arrow-right"></i>Dropdown item</a>
            <a class="dropdown-item has-icon text-danger" href="javascript:void(0)"><i class="mr-2" data-feather="arrow-right"></i>Dropdown item</a>
          </div>
        </li>
      </ul>
    </div>
    <!-- /Main header -->

    <!-- Main body -->
    <div class="main-body">

      your content here

    </div>
    <!-- /Main body -->

  </div>
  <!-- /Main -->

  <!-- Search Modal -->
  <div class="modal" id="searchModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body p-1 p-lg-3">
          <form>
            <div class="input-group input-group-lg input-group-search">
              <div class="input-group-prepend">
                <button class="btn text-secondary btn-icon btn-lg" type="button" data-dismiss="modal">
                  <i class="fa fa-chevron-left"></i>
                </button>
              </div>
              <input type="text" class="form-control form-control-lg border-0 mx-1 px-0 px-lg-3" placeholder="Search..." autocomplete="off" required autofocus>
              <div class="input-group-append">
                <button class="btn text-secondary btn-icon btn-lg" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Search Modal -->

  <!-- Main Scripts -->
  <script src="/assets/admin/js/jquery.min.js"></script>
  <script src="/assets/admin/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/admin/plugins/simplebar/simplebar.min.js"></script>
  <script src="/assets/admin/plugins/feather-icons/feather.min.js"></script>
  <script src="/assets/admin/js/script.min.js"></script>
  <script src="/assets/admin/js/settings.min.js"></script>

  <!-- Plugins -->
  <!-- JS plugins goes here -->

</body>

</html>