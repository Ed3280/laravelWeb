<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font & Icon -->
  <link rel="stylesheet" href="/assets/admin/font/inter/inter.min.css" id="font-css">
  <link rel="stylesheet" href="/assets/admin/plugins/material-design-icons-iconfont/material-design-icons.min.css">
  <link rel="stylesheet" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Main Style -->
  <link rel="stylesheet" href="/assets/admin/plugins/simplebar/simplebar.min.css">
  <link rel="stylesheet" href="/assets/admin/css/style.min.css" id="main-css">
  <link rel="stylesheet" href="/assets/admin/css/sidebar-gray.min.css" id="theme-css"> <!-- options: blue,cyan,dark,gray,green,pink,purple,red,royal,ash,crimson,namn,frost -->
  <!-- Plugins -->
  <!-- CSS plugins goes here -->
  <title>Mimity Admin</title>
  <style>
    .card-example {
      max-width: 400px;
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
          <a class="nav-link has-icon treeview-toggle active show" href="#"><i data-feather="box"></i>UI Elements</a>
          <ul class="nav">
            <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
            <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
            <li class="nav-item"><a href="badge.html" class="nav-link">Badge</a></li>
            <li class="nav-item"><a href="breadcrumb.html" class="nav-link">Breadcrumb</a></li>
            <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
            <li class="nav-item"><a href="cards.html" class="nav-link active">Cards</a></li>
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
          <a class="nav-link has-icon treeview-toggle" href="#"><i class="material-icons">notes</i>Forms</a>
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
            <li class="nav-item"><a href="range-slider.html" class="nav-link">Range Slider</a></li>
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
          <li class="breadcrumb-item"><a href="javascript:void(0)">UI Elements</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cards</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->

      <div class="row">
        <div class="col">

          <!-- Card Block -->
          <section id="section1">
            <h5>Card Block</h5>
            <p class="text-secondary font-size-sm">
              The building block of a card is the <code>.card-body</code>. Use it whenever you need a padded section within a card.
            </p>
            <div class="card card-example">
              <div class="card-body">
                <p class="card-text">This is some text within a card body.</p>
              </div>
            </div>
          </section>
          <!-- /Card Block -->

          <!-- Card Titles, text, and links -->
          <section id="section2" class="mt-5 py-5">
            <h5>Card Titles, text, and links</h5>
            <p class="text-secondary font-size-sm">
              Card titles are used by adding <code>.card-title</code> to a <code>&lt;h*&gt;</code> tag.<br>
              In the same way, links are added and placed next to each other by adding <code>.card-link</code> to an <code>&lt;a&gt;</code> tag.
            </p>
            <div class="card card-example">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle text-secondary mb-2">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="javascript:void(0)" class="card-link">Card link</a>
                <a href="javascript:void(0)" class="card-link">Another link</a>
              </div>
            </div>
          </section>
          <!-- /Card Titles, text, and links -->

          <!-- Card with List groups -->
          <section id="section3" class="mt-5 py-5">
            <h5>Card with List groups</h5>
            <p class="text-secondary font-size-sm">
              Create lists of content in a card with a flush list group.
            </p>
            <div class="card card-example">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, cupiditate.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">List group item</li>
                <li class="list-group-item">List group item</li>
                <li class="list-group-item disabled">List group item (disabled)</li>
              </ul>
            </div>
          </section>
          <!-- /Card with List groups -->

          <!-- Card with Accordion -->
          <section id="section4" class="mt-5 py-5">
            <h5>Card with Accordion</h5>
            <p class="text-secondary font-size-sm">
              Create accordion in a card with a flush accordion.
            </p>
            <div class="card card-example">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, cupiditate.</p>
              </div>
              <div class="accordion accordion-flush" id="accordion-flush">
                <div class="card">
                  <div class="card-header">
                    <button class="btn dropdown-toggle" type="button" data-toggle="collapse" data-target="#accordion-flush-1" aria-expanded="true">
                      How do I pay for a purchase?
                    </button>
                  </div>
                  <div id="accordion-flush-1" class="collapse show" data-parent="#accordion-flush">
                    <div class="card-body text-secondary font-size-sm pt-0">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <button class="btn dropdown-toggle collapsed" type="button" data-toggle="collapse" data-target="#accordion-flush-2" aria-expanded="false">
                      What is a 3D Secure password?
                    </button>
                  </div>
                  <div id="accordion-flush-2" class="collapse" data-parent="#accordion-flush">
                    <div class="card-body text-secondary font-size-sm pt-0">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <button class="btn dropdown-toggle collapsed" type="button" data-toggle="collapse" data-target="#accordion-flush-3" aria-expanded="false">
                      How do I pay using a credit/debit card?
                    </button>
                  </div>
                  <div id="accordion-flush-3" class="collapse" data-parent="#accordion-flush">
                    <div class="card-body text-secondary font-size-sm pt-0">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- /Card with Accordion -->

          <!-- Card Header -->
          <section id="section5" class="mt-5 py-5">
            <h5>Card Header</h5>
            <p class="text-secondary font-size-sm">
              Add an optional header within a card.
            </p>
            <div class="card card-example">
              <div class="card-header">Featured</div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
            </div>
          </section>
          <!-- /Card Header -->

          <!-- Card Footer -->
          <section id="section6" class="mt-5 py-5">
            <h5>Card Footer</h5>
            <p class="text-secondary font-size-sm">
              Add an optional footer within a card.
            </p>
            <div class="card card-example">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer text-muted font-size-sm"><i class="material-icons mr-1">access_time</i>10:00</div>
            </div>
          </section>
          <!-- /Card Footer -->

          <!-- Card with Tabs Navigation -->
          <section id="section7" class="mt-5 py-5">
            <h5>Card with Tabs Navigation</h5>
            <p class="text-secondary font-size-sm">
              Add some navigation to a card???s header (or block) with Bootstrap???s nav components.
            </p>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="card text-center">
                  <div class="card-header border-bottom">
                    <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body tab-content">
                    <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      home content here
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      profile content here
                    </div>
                    <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      contact content here
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card text-center">
                  <div class="card-header">
                    <ul class="nav nav-tabs nav-tabs-simple card-header-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body tab-content">
                    <div class="tab-pane show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                      home content here
                    </div>
                    <div class="tab-pane" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                      profile content here
                    </div>
                    <div class="tab-pane" id="contact2" role="tabpanel" aria-labelledby="contact-tab2">
                      contact content here
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="card text-center">
                  <div class="card-header">
                    <ul class="nav nav-pills card-header-pills" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-pills" data-toggle="tab" href="#home-p" role="tab" aria-controls="home-p" aria-selected="true">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-pills" data-toggle="tab" href="#profile-p" role="tab" aria-controls="profile-p" aria-selected="false">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-pills" data-toggle="tab" href="#contact-p" role="tab" aria-controls="contact-p" aria-selected="false">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body tab-content">
                    <div class="tab-pane show active" id="home-p" role="tabpanel" aria-labelledby="home-pills">
                      home content here
                    </div>
                    <div class="tab-pane" id="profile-p" role="tabpanel" aria-labelledby="profile-pills">
                      profile content here
                    </div>
                    <div class="tab-pane" id="contact-p" role="tabpanel" aria-labelledby="contact-pills">
                      contact content here
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card text-center">
                  <div class="card-header">
                    <ul class="nav nav-pills card-header-pills nav-gap-x-1" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link nav-link-faded active" id="home-faded" data-toggle="tab" href="#home-f" role="tab" aria-controls="home-f" aria-selected="true">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-faded" id="profile-faded" data-toggle="tab" href="#profile-f" role="tab" aria-controls="profile-f" aria-selected="false">Profile</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-faded" id="contact-faded" data-toggle="tab" href="#contact-f" role="tab" aria-controls="contact-f" aria-selected="false">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-link-faded disabled" href="javascript:void(0)">Disabled</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body tab-content">
                    <div class="tab-pane show active" id="home-f" role="tabpanel" aria-labelledby="home-faded">
                      home content here
                    </div>
                    <div class="tab-pane" id="profile-f" role="tabpanel" aria-labelledby="profile-faded">
                      profile content here
                    </div>
                    <div class="tab-pane" id="contact-f" role="tabpanel" aria-labelledby="contact-faded">
                      contact content here
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- /Card with Tabs Navigation -->

          <!-- Card with Toolbar -->
          <section id="section8" class="mt-5 py-5">
            <h5>Card with Toolbar</h5>
            <p class="text-secondary font-size-sm">
              Add some useful and functional tools.
            </p>
            <div class="row gutters-sm">
              <div class="col-md-6 mb-3">
                <div class="card overflow-hidden" id="exampe-card-with-toolbar">
                  <div class="card-header">
                    Toolbar
                    <div class="list-with-gap ml-auto">
                      <span class="badge badge-success">100%</span>
                      <div class="custom-control custom-control-nolabel custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch">
                        <label class="custom-control-label" for="customSwitch"></label>
                      </div>
                      <button type="button" data-action="fullscreen" class="btn btn-xs btn-light text-secondary btn-icon rounded-circle shadow-none">
                        <i class="material-icons">fullscreen</i>
                      </button>
                      <button type="button" data-action="reload" class="btn btn-xs btn-light text-success btn-icon rounded-circle shadow-none">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" data-action="close" class="btn btn-xs btn-light text-danger btn-icon rounded-circle shadow-none">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card">
                  <div class="card-header justify-content-between bg-dark text-white">
                    <div class="list-with-gap">
                      <button type="button" data-action="close" class="btn btn-xs btn-danger btn-icon rounded-circle shadow-none">
                        <i class="material-icons">close</i>
                      </button>
                      <button type="button" data-action="collapse" data-target="#card-body" data-toggle="collapse" aria-expanded="true" class="btn btn-xs btn-warning btn-icon rounded-circle shadow-none">
                        <i class="material-icons">remove</i>
                      </button>
                      <button type="button" data-action="fullscreen" class="btn btn-xs btn-success btn-icon rounded-circle shadow-none">
                        <i class="material-icons">fullscreen</i>
                      </button>
                    </div>
                    Collapsible
                    <button class="btn btn-xs btn-outline-light btn-icon rounded-circle" type="button">?</button>
                  </div>
                  <div class="collapse show" id="card-body">
                    <div class="card-body text-center">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card">
                  <div class="card-header">
                    Toolbar
                    <div class="btn-group btn-group-sm ml-auto" role="group">
                      <button type="button" class="btn btn-light btn-icon"><i data-feather="printer"></i></button>
                      <button type="button" class="btn btn-light btn-icon"><i data-feather="edit"></i></button>
                      <button type="button" class="btn btn-light btn-icon"><i data-feather="trash"></i></button>
                    </div>
                    <div class="dropdown ml-1">
                      <button class="btn btn-sm btn-light btn-icon dropdown-toggle no-caret" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">arrow_drop_down</i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                        <button class="dropdown-item" type="button">Action</button>
                        <button class="dropdown-item" type="button">Another action</button>
                        <button class="dropdown-item" type="button">Something else here</button>
                      </div>
                    </div>
                    <button type="button" data-action="close" class="ml-1 btn btn-sm btn-light btn-icon">
                      <i class="material-icons">close</i>
                    </button>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- /Card with Toolbar -->

          <!-- Card Image Top -->
          <section id="section9" class="mt-5 py-5">
            <h5>Card Image Top</h5>
            <p class="text-secondary font-size-sm">
              <code>.card-img-top</code> places an image to the top of the card. With <code>.card-text</code>, text can be added to the card.<br>
              Text within <code>.card-text</code> can also be styled with the standard HTML tags.
            </p>
            <div class="card card-example">
              <img class="card-img-top" src="/assets/admin/img/gallery/10m.jpeg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </section>
          <!-- /Card Image Top -->

          <!-- Card Image Bottom -->
          <section id="section10" class="mt-5 py-5">
            <h5>Card Image Bottom</h5>
            <p class="text-secondary font-size-sm">
              <code>.card-img-bottom</code> places an image to the bottom of the card. With <code>.card-text</code>, text can be added to the card.<br>
              Text within <code>.card-text</code> can also be styled with the standard HTML tags.
            </p>
            <div class="card card-example">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <img class="card-img-bottom" src="/assets/admin/img/gallery/4m.jpeg" alt="Card image cap">
            </div>
          </section>
          <!-- /Card Image Bottom -->

          <!-- Card Image Overlays -->
          <section id="section11" class="mt-5 py-5">
            <h5>Card Image Overlays</h5>
            <p class="text-secondary font-size-sm">
              Turn an image into a card background and overlay your card???s text.<br>
              Depending on the image, you may or may not need additional styles or utilities.
            </p>
            <div class="card text-white border-0 card-example">
              <img class="card-img" src="/assets/admin/img/gallery/4m.jpeg" alt="Card image cap">
              <div class="card-img-overlay">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle mb-2">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content... <u><a href="javascript:void(0)" class="text-white">read more</a></u></p>
              </div>
            </div>
          </section>
          <!-- /Card Image Overlays -->

          <!-- Card Groups -->
          <section id="section12" class="mt-5 py-5">
            <h5>Card Groups</h5>
            <p class="text-secondary font-size-sm">
              Use card groups to render cards as a single, attached element with equal width and height columns.<br>
              Card groups use <code>display: flex;</code> to achieve their uniform sizing.
            </p>
            <div class="card-group">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer small text-muted">Last updated 3 mins ago</div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer small text-muted">Last updated 3 mins ago</div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer small text-muted">Last updated 3 mins ago</div>
              </div>
            </div>
          </section>
          <!-- /Card Groups -->

          <!-- Card Decks -->
          <section id="section13" class="mt-5 py-5">
            <h5>Card Decks</h5>
            <p class="text-secondary font-size-sm">
              Need a set of equal width and height cards that aren???t attached to one another? Use card decks.
            </p>
            <div class="card-deck">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer small text-muted">Last updated 3 mins ago</div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer small text-muted">Last updated 3 mins ago</div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer small text-muted">Last updated 3 mins ago</div>
              </div>
            </div>
          </section>
          <!-- /Card Decks -->

          <!-- Card Columns -->
          <section id="section14" class="mt-5 py-5">
            <h5>Card Columns</h5>
            <p class="text-secondary font-size-sm">
              Cards can be organized into Masonry-like columns with just CSS by wrapping them in <code>.card-columns</code>.<br>
              Cards are built with CSS <code>column</code> properties instead of flexbox for easier alignment.<br>
              Cards are ordered from top to bottom and left to right.
            </p>
            <div class="card-columns">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title that wraps to a new line</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <footer class="blockquote-footer">
                    <small class="text-muted">
                      Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                  </footer>
                </blockquote>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card bg-primary text-white text-center p-3">
                <blockquote class="blockquote mb-0">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                  <footer class="blockquote-footer text-white">
                    <small>
                      Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                  </footer>
                </blockquote>
              </div>
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card border-0">
                <img class="card-img" src="/assets/admin/img/gallery/4m.jpeg" alt="Card image cap">
              </div>
              <div class="card p-3 text-right">
                <blockquote class="blockquote mb-0">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  <footer class="blockquote-footer">
                    <small class="text-muted">
                      Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                  </footer>
                </blockquote>
              </div>
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </section>
          <!-- /Card Columns -->

        </div>

        <div class="col-3 d-none d-xl-block">
          <div class="nav-section">
            <label class="text-muted">On This Page</label>
            <nav id="navSection" class="nav flex-column">
              <a href="#section1" class="nav-link nav-link-sm">Card Block</a>
              <a href="#section2" class="nav-link nav-link-sm">Card Titles, text, and links</a>
              <a href="#section3" class="nav-link nav-link-sm">Card with List groups</a>
              <a href="#section4" class="nav-link nav-link-sm">Card with Accordion</a>
              <a href="#section5" class="nav-link nav-link-sm">Card Header</a>
              <a href="#section6" class="nav-link nav-link-sm">Card Footer</a>
              <a href="#section7" class="nav-link nav-link-sm">Card with Tabs Navigation</a>
              <a href="#section8" class="nav-link nav-link-sm">Card with Toolbar</a>
              <a href="#section9" class="nav-link nav-link-sm">Card Image Top</a>
              <a href="#section10" class="nav-link nav-link-sm">Card Image Bottom</a>
              <a href="#section11" class="nav-link nav-link-sm">Card Image Overlays</a>
              <a href="#section12" class="nav-link nav-link-sm">Card Groups</a>
              <a href="#section13" class="nav-link nav-link-sm">Card Decks</a>
              <a href="#section14" class="nav-link nav-link-sm">Card Columns</a>
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
  <!-- JS plugins goes here -->
  <script>
    /***************** CARD RELOAD *****************/
    document.getElementById('exampe-card-with-toolbar').addEventListener('card:reload', function() {
      var thisCard = this

      // YOUR ACTION HERE

      // do nothing for a second (this is only for demo)
      setTimeout(() => {
        App.stopCardLoader(thisCard) // when done, run this function
      }, 1000)
    })
  </script>

</body>

</html>