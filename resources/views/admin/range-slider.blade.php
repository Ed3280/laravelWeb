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
  <link rel="stylesheet" href="/assets/admin/plugins/nouislider/nouislider.min.css">
  <!-- Main Style -->
  <link rel="stylesheet" href="/assets/admin/plugins/simplebar/simplebar.min.css">
  <link rel="stylesheet" href="/assets/admin/css/style.min.css" id="main-css">
  <link rel="stylesheet" href="/assets/admin/css/sidebar-gray.min.css" id="theme-css"> <!-- options: blue,cyan,dark,gray,green,pink,purple,red,royal,ash,crimson,namn,frost -->
  <title>Mimity Admin</title>
  <style>
    .slider-example {
      max-width: 300px;
    }
  </style>
</head>

<body>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar header -->
    <div class="sidebar-header">
      <a href="../../../index.php" class="logo">
        <img src="/assets/admin/img/logo-white.svg" alt="Logo" id="main-logo">
        Mimity Admin
      </a>
      <a href="#" class="nav-link nav-icon rounded-circle ml-auto" data-toggle="sidebar">
        <i class="material-icons">close</i>
      </a>
    </div>
    <!-- /Sidebar header -->

    <!-- Sidebar body -->
    <div class="sidebar-body">
      <ul class="nav treeview mb-4" data-accordion>
        <li class="nav-label">DASHBOARD</li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="../../../index.php"><i data-feather="globe"></i>Website Analytics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="index2.html"><i data-feather="shopping-bag"></i>Sales Monitoring</a>
        </li>
        <li class="nav-label">APPLICATION</li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="mail.html"><i class="material-icons">mail_outline</i>Mail<span class="badge badge-warning ml-auto badge-pill">3</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i class="material-icons">folder_open</i>File Manager</a>
          <ul class="nav">
            <li class="nav-item"><a href="file-manager.html" class="nav-link">File Manager v1</a></li>
            <li class="nav-item"><a href="file-manager2.html" class="nav-link">File Manager v2</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="chat.html"><i data-feather="message-square"></i>Chat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="calendar.html"><i data-feather="calendar"></i>Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="todo-list.html"><i data-feather="check-square"></i>Todo List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="images.html"><i data-feather="image"></i>Images</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="pricing.html"><i class="material-icons">list_alt</i>Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="timeline.html"><i data-feather="clock"></i>Timeline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="invoice.html"><i class="fa fa-file-invoice-dollar"></i>Invoice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon" href="forum.html"><i class="far fa-comments"></i>Forum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i data-feather="lock"></i>Authentication</a>
          <ul class="nav">
            <li class="nav-item"><a href="../static/login.html" class="nav-link">Login v1</a></li>
            <li class="nav-item"><a href="../static/login2.html" class="nav-link">Login v2</a></li>
            <li class="nav-item"><a href="../static/register.html" class="nav-link">Register</a></li>
            <li class="nav-item"><a href="../static/forgot-password.html" class="nav-link">Forgot Password</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i data-feather="rss"></i>Blog</a>
          <ul class="nav">
            <li class="nav-item"><a href="post-all.html" class="nav-link">All Posts</a></li>
            <li class="nav-item"><a href="post-new.html" class="nav-link">Add New Post</a></li>
          </ul>
        </li>
        <li class="nav-label">UI DESIGN</li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i data-feather="pie-chart"></i>Charts</a>
          <ul class="nav">
            <li class="nav-item"><a href="chart-line.html" class="nav-link">Line Charts</a></li>
            <li class="nav-item"><a href="chart-bar.html" class="nav-link">Bar Charts</a></li>
            <li class="nav-item"><a href="chart-radar.html" class="nav-link">Radar Charts</a></li>
            <li class="nav-item"><a href="chart-doughnutpie.html" class="nav-link">Doughnut and Pie</a></li>
            <li class="nav-item"><a href="sparkline.html" class="nav-link">Sparkline</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i data-feather="box"></i>UI Elements</a>
          <ul class="nav">
            <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
            <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
            <li class="nav-item"><a href="badge.html" class="nav-link">Badge</a></li>
            <li class="nav-item"><a href="breadcrumb.html" class="nav-link">Breadcrumb</a></li>
            <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
            <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
            <li class="nav-item"><a href="carousel.html" class="nav-link">Carousel</a></li>
            <li class="nav-item"><a href="collapse.html" class="nav-link">Collapse</a></li>
            <li class="nav-item"><a href="dropdowns.html" class="nav-link">Dropdowns</a></li>
            <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
            <li class="nav-item"><a href="lists.html" class="nav-link">List Group</a></li>
            <li class="nav-item"><a href="media-object.html" class="nav-link">Media Object</a></li>
            <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
            <li class="nav-item"><a href="navigation.html" class="nav-link">Navigation</a></li>
            <li class="nav-item"><a href="notifications.html" class="nav-link">Notifications</a></li>
            <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
            <li class="nav-item"><a href="popovers.html" class="nav-link">Popovers</a></li>
            <li class="nav-item"><a href="progress.html" class="nav-link">Progress Bars</a></li>
            <li class="nav-item"><a href="sortable.html" class="nav-link">Sortable List</a></li>
            <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
            <li class="nav-item"><a href="tooltips.html" class="nav-link">Tooltips</a></li>
            <li class="nav-item"><a href="treeview.html" class="nav-link">Treeview</a></li>
            <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i class="material-icons">table_chart</i>Tables</a>
          <ul class="nav">
            <li class="nav-item"><a href="table-basic.html" class="nav-link">Table Basic</a></li>
            <li class="nav-item"><a href="table-advanced.html" class="nav-link">Table Advanced</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle active show" href="#"><i class="material-icons">notes</i>Forms</a>
          <ul class="nav">
            <li class="nav-item"><a href="form-elements.html" class="nav-link">Elements</a></li>
            <li class="nav-item"><a href="form-layouts.html" class="nav-link">Layouts</a></li>
            <li class="nav-item"><a href="bootstrap-select.html" class="nav-link">Bootstrap Select</a></li>
            <li class="nav-item"><a href="color-picker.html" class="nav-link">Color Picker</a></li>
            <li class="nav-item"><a href="date-picker.html" class="nav-link">Date Picker</a></li>
            <li class="nav-item"><a href="text-editor.html" class="nav-link">Editor</a></li>
            <li class="nav-item"><a href="input-group.html" class="nav-link">Input Group</a></li>
            <li class="nav-item"><a href="input-masks.html" class="nav-link">Input Masks</a></li>
            <li class="nav-item"><a href="markdown-parser.html" class="nav-link">Markdown</a></li>
            <li class="nav-item"><a href="range-slider.html" class="nav-link active">Range Slider</a></li>
            <li class="nav-item"><a href="select2.html" class="nav-link">Select2</a></li>
            <li class="nav-item"><a href="tag-input.html" class="nav-link">Tag Input</a></li>
            <li class="nav-item"><a href="bootstrap-touchspin.html" class="nav-link">TouchSpin</a></li>
            <li class="nav-item"><a href="form-wizard.html" class="nav-link">Wizard</a></li>
            <li class="nav-item"><a href="form-validation.html" class="nav-link">Validation</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i data-feather="users"></i>User</a>
          <ul class="nav">
            <li class="nav-item"><a href="user-profile.html" class="nav-link">User Profile</a></li>
            <li class="nav-item"><a href="user-list.html" class="nav-link">User List</a></li>
            <li class="nav-item"><a href="user-grid.html" class="nav-link">User Grid</a></li>
            <li class="nav-item"><a href="user-profile-setting.html" class="nav-link">Profile Settings</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link has-icon treeview-toggle" href="#"><i class="material-icons">error_outline</i>Error Pages</a>
          <ul class="nav">
            <li class="nav-item"><a href="../static/error-404.html" class="nav-link">Page Not Found</a></li>
            <li class="nav-item"><a href="../static/error-500.html" class="nav-link">Internal Server Error</a></li>
            <li class="nav-item"><a href="../static/error-503.html" class="nav-link">Service Unavailable</a></li>
            <li class="nav-item"><a href="../static/error-505.html" class="nav-link">Forbidden Access</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link has-icon treeview-toggle"><i class="material-icons">account_tree</i>Menu Levels</a>
          <ul class="nav">
            <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Second level item</a></li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link treeview-toggle">Second level item</a>
              <ul class="nav">
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Third level item</a></li>
                <li class="nav-item">
                  <a href="javascript:void(0)" class="nav-link treeview-toggle">Third level item</a>
                  <ul class="nav">
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Fourth level item</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Fourth level item</a></li>
                    <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Fourth level item</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Third level item</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Second level item</a></li>
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
            <span class="badge badge-pill badge-danger">4</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right p-0">
            <div class="card">
              <div class="card-header bg-primary text-white">
                <i data-feather="bell" class="mr-2"></i>4 notifications
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
                  <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                    <div class="media">
                      <span class="bg-success text-white btn-icon rounded-circle"><i data-feather="shopping-bag"></i></span>
                      <div class="media-body ml-2">
                        <p class="mb-0">10+ New orders</p>
                        <small class="text-secondary">
                          <i class="material-icons icon-inline mr-1">access_time</i>15 minutes ago
                        </small>
                      </div>
                    </div>
                  </a>
                  <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                    <div class="media">
                      <span class="bg-warning text-white btn-icon rounded-circle"><i data-feather="user-check"></i></span>
                      <div class="media-body ml-2">
                        <p class="mb-0">Complete your account details</p>
                        <small class="text-secondary">
                          <i class="material-icons icon-inline mr-1">access_time</i>20 minutes ago
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
            <img src="/assets/admin/img/user.svg" alt="Admin" class="rounded-circle mr-2">
            <span class="d-none d-sm-block">Admin</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right pt-0 overflow-hidden">
            <div class="media align-items-center bg-primary text-white px-4 py-3 mb-2">
              <img src="/assets/admin/img/user.svg" alt="Admin" class="rounded-circle" width="50" height="50">
              <div class="media-body ml-2 text-nowrap">
                <h6 class="mb-0">Admin</h6>
                <span class="text-gray-400 font-size-sm">Administrator</span>
              </div>
            </div>
            <a class="dropdown-item has-icon" href="javascript:void(0)"><i class="mr-2" data-feather="user"></i>Profile</a>
            <a class="dropdown-item has-icon" href="javascript:void(0)"><i class="mr-2" data-feather="settings"></i>Settings</a>
            <a class="dropdown-item has-icon text-danger" href="../static/login2.html"><i class="mr-2" data-feather="log-out"></i>Sign out</a>
          </div>
        </li>
      </ul>
    </div>
    <!-- /Main header -->

    <!-- Main body -->
    <div class="main-body">

      <!-- Breadcrumb -->
      <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../../../index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="javascript:void(0)">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page">Range Slider</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->

      <div class="row">
        <div class="col">

          <div class="card">
            <div class="card-body">
              <section id="section1">
                <h5>Basic example</h5>
                <p class="text-muted font-size-sm mb-5">
                  Set min value, max value and start point.
                </p>
                <div id="slider1" class="slider-example"></div>
              </section>
            </div>
          </div>

          <div class="card mt-5">
            <div class="card-body">
              <section id="section2">
                <h5>Range</h5>
                <p class="text-muted font-size-sm mb-5">
                  Set min value, max value, start point and end point.
                </p>
                <div id="slider2" class="slider-example"></div>
              </section>
            </div>
          </div>

          <div class="card mt-5">
            <div class="card-body">
              <section id="section3">
                <h5>Connect</h5>
                <p class="text-muted font-size-sm mb-5">
                  The connect option can be used to control the bar between the handles or the edges of the slider.
                </p>
                <div id="slider3" class="slider-example"></div>
                <div id="slider4" class="slider-example mt-5"></div>
                <div id="slider5" class="slider-example mt-5"></div>
              </section>
            </div>
          </div>

          <div class="card mt-5">
            <div class="card-body">
              <section id="section4">
                <h5>Step</h5>
                <p class="text-muted font-size-sm mb-5">
                  By default, the slider slides fluently. In order to make the handles jump between intervals, you can use the step option.
                </p>
                <div id="slider6" class="slider-example"></div>
              </section>
            </div>
          </div>

          <div class="card mt-5">
            <div class="card-body">
              <section id="section5">
                <h5>Orientation</h5>
                <p class="text-muted font-size-sm mb-5">
                  The orientation setting can be used to set the slider to "vertical" or "horizontal".
                </p>
                <div class="pl-5">
                  <div id="slider7" style="height: 200px"></div>
                </div>
              </section>
            </div>
          </div>

          <div class="card mt-5">
            <div class="card-body">
              <section id="section6">
                <h5>Direction</h5>
                <p class="text-muted font-size-sm mb-5">
                  By default the sliders are top-to-bottom and left-to-right, but you can change this using the direction option, which decides where the upper side of the slider is.
                </p>
                <div id="slider8" class="slider-example"></div>
                <div class="pl-5 mt-3">
                  <div id="slider9" style="height: 200px"></div>
                </div>
              </section>
            </div>
          </div>

          <div class="card mt-5">
            <div class="card-body">
              <section id="section7">
                <h5>Tooltips</h5>
                <p class="text-muted font-size-sm">
                  Disable tooltip using the <code>tooltips</code> option.
                </p>
                <div id="slider10" class="slider-example"></div>
              </section>
            </div>
          </div>

          <div class="card mt-5">
            <div class="card-body">
              <section id="section8">
                <h5>Color variations</h5>
                <p class="text-muted font-size-sm mb-5">
                  Add modifier classes to change the appearance of a slider.
                </p>
                <div class="slider-variations slider-secondary slider-example"></div>
                <div class="slider-variations slider-success slider-example mt-5"></div>
                <div class="slider-variations slider-warning slider-example mt-5"></div>
                <div class="slider-variations slider-danger slider-example mt-5"></div>
                <div class="slider-variations slider-info slider-example mt-5"></div>
                <div class="slider-variations slider-dark slider-example mt-5"></div>
              </section>
            </div>
          </div>

        </div>

        <div class="col-3 d-none d-xl-block">
          <div class="nav-section">
            <label class="text-muted">On This Page</label>
            <nav id="navSection" class="nav flex-column">
              <a href="#section1" class="nav-link nav-link-sm">Basic example</a>
              <a href="#section2" class="nav-link nav-link-sm">Range</a>
              <a href="#section3" class="nav-link nav-link-sm">Connect</a>
              <a href="#section4" class="nav-link nav-link-sm">Step</a>
              <a href="#section5" class="nav-link nav-link-sm">Orientation</a>
              <a href="#section6" class="nav-link nav-link-sm">Direction</a>
              <a href="#section7" class="nav-link nav-link-sm">Tooltips</a>
              <a href="#section8" class="nav-link nav-link-sm">Color variations</a>
            </nav>
          </div>
        </div>
      </div>

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
  <script src="/assets/admin/plugins/nouislider/nouislider.min.js"></script>
  <script>
    // Basic example
    noUiSlider.create(document.getElementById('slider1'), {
      start: 50,
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })

    // Range
    noUiSlider.create(document.getElementById('slider2'), {
      start: [25, 75],
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })

    // Connect 'lower'
    noUiSlider.create(document.getElementById('slider3'), {
      connect: 'lower',
      start: 25,
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })

    // Connect 'upper'
    noUiSlider.create(document.getElementById('slider4'), {
      connect: 'upper',
      start: 75,
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })

    // Connect 'true' sets the bars between the handles, but not between the handles and the sliders edges
    noUiSlider.create(document.getElementById('slider5'), {
      connect: true,
      start: [25, 75],
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })

    // Step
    noUiSlider.create(document.getElementById('slider6'), {
      connect: 'lower',
      step: 5,
      start: 25,
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })

    // Orientation
    noUiSlider.create(document.getElementById('slider7'), {
      orientation: 'vertical',
      connect: 'lower',
      start: 25,
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })

    // Direction
    noUiSlider.create(document.getElementById('slider8'), {
      direction: 'rtl',
      connect: 'lower',
      start: 25,
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })

    // Direction
    noUiSlider.create(document.getElementById('slider9'), {
      direction: 'rtl',
      orientation: 'vertical',
      connect: 'lower',
      start: 25,
      range: {
        min: 0,
        max: 100
      },
      tooltips: true
    })

    // Disable tooltip
    noUiSlider.create(document.getElementById('slider10'), {
      connect: 'lower',
      start: 25,
      range: {
        min: 0,
        max: 100
      },
      tooltips: false
    })

    // Color variations 'lower'
    let start = 20
    for (const el of document.querySelectorAll('.slider-variations')) {
      noUiSlider.create(el, {
        connect: 'lower',
        start: start,
        range: {
          min: 0,
          max: 100
        },
        tooltips: true
      })
      start = start + 10
    }
  </script>

</body>

</html>