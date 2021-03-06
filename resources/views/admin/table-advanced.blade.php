<!doctype html>
<html lang="en">

<>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font & Icon -->
  <link rel="stylesheet" href="/assets/admin/font/inter/inter.min.css" id="font-css">
  <link rel="stylesheet" href="/assets/admin/plugins/material-design-icons-iconfont/material-design-icons.min.css">
  <link rel="stylesheet" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="/assets/admin/plugins/datatables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/admin/plugins/datatables/responsive.bootstrap4.min.css">
  <!-- Main Style -->
  <link rel="stylesheet" href="/assets/admin/plugins/simplebar/simplebar.min.css">
  <link rel="stylesheet" href="/assets/admin/css/style.min.css" id="main-css">
  <link rel="stylesheet" href="/assets/admin/css/sidebar-gray.min.css" id="theme-css"> <!-- options: blue,cyan,dark,gray,green,pink,purple,red,royal,ash,crimson,namn,frost -->
  <title>Mimity Admin</title>
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
          <a class="nav-link has-icon treeview-toggle active show" href="#"><i class="material-icons">table_chart</i>Tables</a>
          <ul class="nav">
            <li class="nav-item"><a href="table-basic.html" class="nav-link">Table Basic</a></li>
            <li class="nav-item"><a href="table-advanced.html" class="nav-link active">Table Advanced</a></li>
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
          <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page">Table Advanced</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->

      <h5>Static Data Table</h5>

      <div class="card">
        <div class="card-body">
          <!-- Toolbar -->
          <div class="btn-group btn-group-sm mb-3" role="group">
            <button type="button" class="btn btn-light has-icon"><i class="material-icons mr-1">add_circle_outline</i> Add</button>
            <button type="button" class="btn btn-light has-icon"><i class="material-icons mr-1">refresh</i> Refresh</button>
            <button type="button" class="btn btn-light has-icon"><i class="mr-1" data-feather="paperclip"></i> Export</button>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered table-sm has-checkAll mb-0" data-bulk-target="#bulk-dropdown" data-checked-class="table-warning">
              <caption class="p-0 text-right"><small>Showing 1 to 5 of 57 entries</small></caption>

              <!-- Filter columns -->
              <thead class="thead-primary">
                <tr class="column-filter">
                  <th colspan="2"></th>
                  <th>
                    <label class="input-clearable input-icon input-icon-sm input-icon-right">
                      <input type="text" class="form-control form-control-sm border-primary" placeholder="Search First name"><i data-toggle="clear" class="material-icons">clear</i>
                    </label>
                  </th>
                  <th>
                    <label class="input-clearable input-icon input-icon-sm input-icon-right">
                      <input type="text" class="form-control form-control-sm border-primary" placeholder="Search Last name"><i data-toggle="clear" class="material-icons">clear</i>
                    </label>
                  </th>
                  <th>
                    <label class="input-clearable input-icon input-icon-sm input-icon-right">
                      <input type="text" class="form-control form-control-sm border-primary" placeholder="Search Position"><i data-toggle="clear" class="material-icons">clear</i>
                    </label>
                  </th>
                  <th>
                    <label class="input-clearable input-icon input-icon-sm input-icon-right">
                      <input type="text" class="form-control form-control-sm border-primary" placeholder="Search Office"><i data-toggle="clear" class="material-icons">clear</i>
                    </label>
                  </th>
                  <th><button class="btn btn-sm btn-outline-primary btn-block has-icon"><i class="material-icons">search</i></button></th>
                </tr>
                <tr>
                  <th scope="col">
                    <div class="custom-control custom-control-nolabel custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkAll">
                      <label class="custom-control-label" for="checkAll"></label>
                    </div>
                  </th>
                  <th scope="col" class="text-center">Detail</th>
                  <th scope="col"><a href="javascript:void(0)" class="sorting asc">First name</a></th>
                  <th scope="col"><a href="javascript:void(0)" class="sorting">Last name</a></th>
                  <th scope="col"><a href="javascript:void(0)" class="sorting">Position</a></th>
                  <th scope="col"><a href="javascript:void(0)" class="sorting">Office</a></th>
                  <th scope="col" class="text-center">Actions</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <div class="custom-control custom-control-nolabel custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox1">
                      <label for="checkbox1" class="custom-control-label"></label>
                    </div>
                  </td>
                  <td class="text-center"><a href="#detailRow1" class="detail-toggle text-secondary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="detailRow1"></a></td>
                  <td>Airi</td>
                  <td>Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td class="text-center">
                    <div class="btn-group btn-group-xs" role="group">
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-success"><i data-feather="edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-danger"><i data-feather="trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr class="detail-row collapse" id="detailRow1">
                  <td colspan="7">
                    <ul class="data-detail ml-5">
                      <li><span>Age</span><span>33</span></li>
                      <li><span>Start date</span><span>2008/11/28</span></li>
                      <li><span>Salary</span><span>$162,700</span></li>
                      <li><span>Extn.</span><span>5407</span></li>
                      <li><span>E-mail</span><span>a.satou@datatables.net</span></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-control-nolabel custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox2">
                      <label for="checkbox2" class="custom-control-label"></label>
                    </div>
                  </td>
                  <td class="text-center"><a href="#detailRow2" class="detail-toggle text-secondary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="detailRow2"></a></td>
                  <td>Angelica</td>
                  <td>Ramos</td>
                  <td>CEO</td>
                  <td>London</td>
                  <td class="text-center">
                    <div class="btn-group btn-group-xs" role="group">
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-success"><i data-feather="edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-danger"><i data-feather="trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr class="detail-row collapse" id="detailRow2">
                  <td colspan="7">
                    <ul class="data-detail ml-5">
                      <li><span>Age</span><span>47</span></li>
                      <li><span>Start date</span><span>2009/10/09</span></li>
                      <li><span>Salary</span><span>$1,200,000</span></li>
                      <li><span>Extn.</span><span>5797</span></li>
                      <li><span>E-mail</span><span>a.ramos@datatables.net</span></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-control-nolabel custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox3">
                      <label for="checkbox3" class="custom-control-label"></label>
                    </div>
                  </td>
                  <td class="text-center"><a href="#detailRow3" class="detail-toggle text-secondary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="detailRow3"></a></td>
                  <td>Ashton</td>
                  <td>Cox</td>
                  <td>Junior Technical Author</td>
                  <td>San Francisco</td>
                  <td class="text-center">
                    <div class="btn-group btn-group-xs" role="group">
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-success"><i data-feather="edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-danger"><i data-feather="trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr class="detail-row collapse" id="detailRow3">
                  <td colspan="7">
                    <ul class="data-detail ml-5">
                      <li><span>Age</span><span>66</span></li>
                      <li><span>Start date</span><span>2009/01/12</span></li>
                      <li><span>Salary</span><span>$86,000</span></li>
                      <li><span>Extn.</span><span>1562</span></li>
                      <li><span>E-mail</span><span>a.cox@datatables.net</span></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-control-nolabel custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox4">
                      <label for="checkbox4" class="custom-control-label"></label>
                    </div>
                  </td>
                  <td class="text-center"><a href="#detailRow4" class="detail-toggle text-secondary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="detailRow4"></a></td>
                  <td>Bradley</td>
                  <td>Greer</td>
                  <td>Software Engineer</td>
                  <td>London</td>
                  <td class="text-center">
                    <div class="btn-group btn-group-xs" role="group">
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-success"><i data-feather="edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-danger"><i data-feather="trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr class="detail-row collapse" id="detailRow4">
                  <td colspan="7">
                    <ul class="data-detail ml-5">
                      <li><span>Age</span><span>41</span></li>
                      <li><span>Start date</span><span>2012/10/13</span></li>
                      <li><span>Salary</span><span>$132,000</span></li>
                      <li><span>Extn.</span><span>2558</span></li>
                      <li><span>E-mail</span><span>b.greer@datatables.net</span></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="custom-control custom-control-nolabel custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkbox5">
                      <label for="checkbox5" class="custom-control-label"></label>
                    </div>
                  </td>
                  <td class="text-center"><a href="#detailRow5" class="detail-toggle text-secondary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="detailRow5"></a></td>
                  <td>Brenden</td>
                  <td>Wagner</td>
                  <td>Software Engineer</td>
                  <td>San Francisco</td>
                  <td class="text-center">
                    <div class="btn-group btn-group-xs" role="group">
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-success"><i data-feather="edit"></i></a>
                      <a href="javascript:void(0)" class="btn btn-link btn-icon bigger-130 text-danger"><i data-feather="trash"></i></a>
                    </div>
                  </td>
                </tr>
                <tr class="detail-row collapse" id="detailRow5">
                  <td colspan="7">
                    <ul class="data-detail ml-5">
                      <li><span>Age</span><span>28</span></li>
                      <li><span>Start date</span><span>2011/06/07</span></li>
                      <li><span>Salary</span><span>$206,850</span></li>
                      <li><span>Extn.</span><span>1314</span></li>
                      <li><span>E-mail</span><span>b.wagner@datatables.net</span></li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table><!-- /.table -->

          </div><!-- /.table-responsive -->

          <div class="d-flex align-items-center flex-column flex-sm-row">

            <!-- Bulk action dropdown -->
            <div class="dropdown dropup bulk-dropdown align-self-start mr-2 mt-1 mt-sm-0" id="bulk-dropdown" hidden>
              <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="checked-counter"></span>
              </button>
              <div class="dropdown-menu">
                <button class="dropdown-item has-icon" type="button"><i class="mr-2" data-feather="copy"></i> Copy</button>
                <button class="dropdown-item has-icon" type="button"><i class="mr-2" data-feather="archive"></i> Archive</button>
                <div class="dropdown-divider"></div>
                <button class="dropdown-item has-icon text-danger" type="button"><i class="mr-2" data-feather="trash"></i> Remove</button>
              </div>
            </div>

            <!-- Show entries -->
            <form class="form-inline mt-1 mt-sm-0">
              Show
              <select class="custom-select custom-select-sm w-auto mx-1">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
              </select>
              entries
            </form>

            <!-- Pagination -->
            <ul class="pagination pagination-sm pagination-circle mb-0 ml-sm-auto mt-1 mt-sm-0">
              <li class="page-item disabled">
                <span class="page-link"><i data-feather="chevron-left"></i></span>
              </li>
              <li class="page-item active"><span class="page-link">1</span></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
              <li class="page-item readonly"><span class="page-link">...</span></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)">10</a></li>
              <li class="page-item"><a class="page-link" href="javascript:void(0)"><i data-feather="chevron-right"></i></a></li>
            </ul>

          </div><!-- /.d-flex -->
        </div>
      </div>

      <h5 class="mt-5">DataTables</h5>
      <p class="text-secondary font-size-sm">
        DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table.
      </p>
      <div class="card">
        <div class="card-body">
          <table id="example" class="table table-striped table-bordered table-sm dt-responsive nowrap w-100">
            <!-- Filter columns -->
            <thead>
              <tr class="column-filter dt-column-filter">
                <th><input type="text" class="form-control form-control-sm" placeholder="Search First name"></th>
                <th><input type="text" class="form-control form-control-sm" placeholder="Search Last name"></th>
                <th><input type="text" class="form-control form-control-sm" placeholder="Search Position"></th>
                <th><input type="text" class="form-control form-control-sm" placeholder="Search Office"></th>
                <th><input type="text" class="form-control form-control-sm" placeholder="Search Age"></th>
                <th><input type="text" class="form-control form-control-sm" placeholder="Search Start date"></th>
                <th><input type="text" class="form-control form-control-sm" placeholder="Search Salary"></th>
                <th><input type="text" class="form-control form-control-sm" placeholder="Search Extn."></th>
                <th><input type="text" class="form-control form-control-sm" placeholder="Search E-mail"></th>
              </tr>
              <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Extn.</th>
                <th>E-mail</th>
              </tr>
            </thead>
            <!-- /Filter columns -->

            <tbody>
              <tr>
                <td>Tiger</td>
                <td>Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td class="font-number">61</td>
                <td class="font-number">2011-04-25</td>
                <td class="font-number">$320,800</td>
                <td class="font-number">5421</td>
                <td>t.nixon@datatables.net</td>
              </tr>
              <tr>
                <td>Garrett</td>
                <td>Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td class="font-number">63</td>
                <td class="font-number">2011-07-25</td>
                <td class="font-number">$170,750</td>
                <td class="font-number">8422</td>
                <td>g.winters@datatables.net</td>
              </tr>
              <tr>
                <td>Ashton</td>
                <td>Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td class="font-number">66</td>
                <td class="font-number">2009-01-12</td>
                <td class="font-number">$86,000</td>
                <td class="font-number">1562</td>
                <td>a.cox@datatables.net</td>
              </tr>
              <tr>
                <td>Cedric</td>
                <td>Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td class="font-number">22</td>
                <td class="font-number">2012-03-29</td>
                <td class="font-number">$433,060</td>
                <td class="font-number">6224</td>
                <td>c.kelly@datatables.net</td>
              </tr>
              <tr>
                <td>Airi</td>
                <td>Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td class="font-number">33</td>
                <td class="font-number">2008-11-28</td>
                <td class="font-number">$162,700</td>
                <td class="font-number">5407</td>
                <td>a.satou@datatables.net</td>
              </tr>
              <tr>
                <td>Brielle</td>
                <td>Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td class="font-number">61</td>
                <td class="font-number">2012-12-02</td>
                <td class="font-number">$372,000</td>
                <td class="font-number">4804</td>
                <td>b.williamson@datatables.net</td>
              </tr>
              <tr>
                <td>Herrod</td>
                <td>Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td class="font-number">59</td>
                <td class="font-number">2012-08-06</td>
                <td class="font-number">$137,500</td>
                <td class="font-number">9608</td>
                <td>h.chandler@datatables.net</td>
              </tr>
              <tr>
                <td>Rhona</td>
                <td>Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td class="font-number">55</td>
                <td class="font-number">2010-10-14</td>
                <td class="font-number">$327,900</td>
                <td class="font-number">6200</td>
                <td>r.davidson@datatables.net</td>
              </tr>
              <tr>
                <td>Colleen</td>
                <td>Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td class="font-number">39</td>
                <td class="font-number">2009-09-15</td>
                <td class="font-number">$205,500</td>
                <td class="font-number">2360</td>
                <td>c.hurst@datatables.net</td>
              </tr>
              <tr>
                <td>Sonya</td>
                <td>Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td class="font-number">23</td>
                <td class="font-number">2008-12-13</td>
                <td class="font-number">$103,600</td>
                <td class="font-number">1667</td>
                <td>s.frost@datatables.net</td>
              </tr>
              <tr>
                <td>Jena</td>
                <td>Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td class="font-number">30</td>
                <td class="font-number">2008-12-19</td>
                <td class="font-number">$90,560</td>
                <td class="font-number">3814</td>
                <td>j.gaines@datatables.net</td>
              </tr>
              <tr>
                <td>Quinn</td>
                <td>Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td class="font-number">22</td>
                <td class="font-number">2013-03-03</td>
                <td class="font-number">$342,000</td>
                <td class="font-number">9497</td>
                <td>q.flynn@datatables.net</td>
              </tr>
              <tr>
                <td>Charde</td>
                <td>Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td class="font-number">36</td>
                <td class="font-number">2008-10-16</td>
                <td class="font-number">$470,600</td>
                <td class="font-number">6741</td>
                <td>c.marshall@datatables.net</td>
              </tr>
              <tr>
                <td>Haley</td>
                <td>Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td class="font-number">43</td>
                <td class="font-number">2012-12-18</td>
                <td class="font-number">$313,500</td>
                <td class="font-number">3597</td>
                <td>h.kennedy@datatables.net</td>
              </tr>
              <tr>
                <td>Tatyana</td>
                <td>Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td class="font-number">19</td>
                <td class="font-number">2010-03-17</td>
                <td class="font-number">$385,750</td>
                <td class="font-number">1965</td>
                <td>t.fitzpatrick@datatables.net</td>
              </tr>
              <tr>
                <td>Michael</td>
                <td>Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td class="font-number">66</td>
                <td class="font-number">2012-11-27</td>
                <td class="font-number">$198,500</td>
                <td class="font-number">1581</td>
                <td>m.silva@datatables.net</td>
              </tr>
              <tr>
                <td>Paul</td>
                <td>Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td class="font-number">64</td>
                <td class="font-number">2010-06-09</td>
                <td class="font-number">$725,000</td>
                <td class="font-number">3059</td>
                <td>p.byrd@datatables.net</td>
              </tr>
              <tr>
                <td>Gloria</td>
                <td>Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td class="font-number">59</td>
                <td class="font-number">2009-04-10</td>
                <td class="font-number">$237,500</td>
                <td class="font-number">1721</td>
                <td>g.little@datatables.net</td>
              </tr>
              <tr>
                <td>Bradley</td>
                <td>Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td class="font-number">41</td>
                <td class="font-number">2012-10-13</td>
                <td class="font-number">$132,000</td>
                <td class="font-number">2558</td>
                <td>b.greer@datatables.net</td>
              </tr>
              <tr>
                <td>Dai</td>
                <td>Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td class="font-number">35</td>
                <td class="font-number">2012-09-26</td>
                <td class="font-number">$217,500</td>
                <td class="font-number">2290</td>
                <td>d.rios@datatables.net</td>
              </tr>
              <tr>
                <td>Jenette</td>
                <td>Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td class="font-number">30</td>
                <td class="font-number">2011-09-03</td>
                <td class="font-number">$345,000</td>
                <td class="font-number">1937</td>
                <td>j.caldwell@datatables.net</td>
              </tr>
              <tr>
                <td>Yuri</td>
                <td>Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td class="font-number">40</td>
                <td class="font-number">2009-06-25</td>
                <td class="font-number">$675,000</td>
                <td class="font-number">6154</td>
                <td>y.berry@datatables.net</td>
              </tr>
              <tr>
                <td>Caesar</td>
                <td>Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td class="font-number">21</td>
                <td class="font-number">2011-12-12</td>
                <td class="font-number">$106,450</td>
                <td class="font-number">8330</td>
                <td>c.vance@datatables.net</td>
              </tr>
              <tr>
                <td>Doris</td>
                <td>Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td class="font-number">23</td>
                <td class="font-number">2010-09-20</td>
                <td class="font-number">$85,600</td>
                <td class="font-number">3023</td>
                <td>d.wilder@datatables.net</td>
              </tr>
              <tr>
                <td>Angelica</td>
                <td>Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td class="font-number">47</td>
                <td class="font-number">2009-10-09</td>
                <td class="font-number">$1,200,000</td>
                <td class="font-number">5797</td>
                <td>a.ramos@datatables.net</td>
              </tr>
              <tr>
                <td>Gavin</td>
                <td>Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td class="font-number">42</td>
                <td class="font-number">2010-12-22</td>
                <td class="font-number">$92,575</td>
                <td class="font-number">8822</td>
                <td>g.joyce@datatables.net</td>
              </tr>
              <tr>
                <td>Jennifer</td>
                <td>Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td class="font-number">28</td>
                <td class="font-number">2010-11-14</td>
                <td class="font-number">$357,650</td>
                <td class="font-number">9239</td>
                <td>j.chang@datatables.net</td>
              </tr>
              <tr>
                <td>Brenden</td>
                <td>Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td class="font-number">28</td>
                <td class="font-number">2011-06-07</td>
                <td class="font-number">$206,850</td>
                <td class="font-number">1314</td>
                <td>b.wagner@datatables.net</td>
              </tr>
              <tr>
                <td>Fiona</td>
                <td>Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td class="font-number">48</td>
                <td class="font-number">2010-03-11</td>
                <td class="font-number">$850,000</td>
                <td class="font-number">2947</td>
                <td>f.green@datatables.net</td>
              </tr>
              <tr>
                <td>Shou</td>
                <td>Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td class="font-number">20</td>
                <td class="font-number">2011-08-14</td>
                <td class="font-number">$163,000</td>
                <td class="font-number">8899</td>
                <td>s.itou@datatables.net</td>
              </tr>
              <tr>
                <td>Michelle</td>
                <td>House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td class="font-number">37</td>
                <td class="font-number">2011-06-02</td>
                <td class="font-number">$95,400</td>
                <td class="font-number">2769</td>
                <td>m.house@datatables.net</td>
              </tr>
              <tr>
                <td>Suki</td>
                <td>Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td class="font-number">53</td>
                <td class="font-number">2009-10-22</td>
                <td class="font-number">$114,500</td>
                <td class="font-number">6832</td>
                <td>s.burks@datatables.net</td>
              </tr>
              <tr>
                <td>Prescott</td>
                <td>Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td class="font-number">27</td>
                <td class="font-number">2011-05-07</td>
                <td class="font-number">$145,000</td>
                <td class="font-number">3606</td>
                <td>p.bartlett@datatables.net</td>
              </tr>
              <tr>
                <td>Gavin</td>
                <td>Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td class="font-number">22</td>
                <td class="font-number">2008-10-26</td>
                <td class="font-number">$235,500</td>
                <td class="font-number">2860</td>
                <td>g.cortez@datatables.net</td>
              </tr>
              <tr>
                <td>Martena</td>
                <td>Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td class="font-number">46</td>
                <td class="font-number">2011-03-09</td>
                <td class="font-number">$324,050</td>
                <td class="font-number">8240</td>
                <td>m.mccray@datatables.net</td>
              </tr>
              <tr>
                <td>Unity</td>
                <td>Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td class="font-number">47</td>
                <td class="font-number">2009-12-09</td>
                <td class="font-number">$85,675</td>
                <td class="font-number">5384</td>
                <td>u.butler@datatables.net</td>
              </tr>
              <tr>
                <td>Howard</td>
                <td>Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td class="font-number">51</td>
                <td class="font-number">2008-12-16</td>
                <td class="font-number">$164,500</td>
                <td class="font-number">7031</td>
                <td>h.hatfield@datatables.net</td>
              </tr>
              <tr>
                <td>Hope</td>
                <td>Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td class="font-number">41</td>
                <td class="font-number">2010-02-12</td>
                <td class="font-number">$109,850</td>
                <td class="font-number">6318</td>
                <td>h.fuentes@datatables.net</td>
              </tr>
              <tr>
                <td>Vivian</td>
                <td>Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td class="font-number">62</td>
                <td class="font-number">2009-02-14</td>
                <td class="font-number">$452,500</td>
                <td class="font-number">9422</td>
                <td>v.harrell@datatables.net</td>
              </tr>
              <tr>
                <td>Timothy</td>
                <td>Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td class="font-number">37</td>
                <td class="font-number">2008-12-11</td>
                <td class="font-number">$136,200</td>
                <td class="font-number">7580</td>
                <td>t.mooney@datatables.net</td>
              </tr>
              <tr>
                <td>Jackson</td>
                <td>Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td class="font-number">65</td>
                <td class="font-number">2008-09-26</td>
                <td class="font-number">$645,750</td>
                <td class="font-number">1042</td>
                <td>j.bradshaw@datatables.net</td>
              </tr>
              <tr>
                <td>Olivia</td>
                <td>Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td class="font-number">64</td>
                <td class="font-number">2011-02-03</td>
                <td class="font-number">$234,500</td>
                <td class="font-number">2120</td>
                <td>o.liang@datatables.net</td>
              </tr>
              <tr>
                <td>Bruno</td>
                <td>Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td class="font-number">38</td>
                <td class="font-number">2011-05-03</td>
                <td class="font-number">$163,500</td>
                <td class="font-number">6222</td>
                <td>b.nash@datatables.net</td>
              </tr>
              <tr>
                <td>Sakura</td>
                <td>Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td class="font-number">37</td>
                <td class="font-number">2009-08-19</td>
                <td class="font-number">$139,575</td>
                <td class="font-number">9383</td>
                <td>s.yamamoto@datatables.net</td>
              </tr>
              <tr>
                <td>Thor</td>
                <td>Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td class="font-number">61</td>
                <td class="font-number">2013-08-11</td>
                <td class="font-number">$98,540</td>
                <td class="font-number">8327</td>
                <td>t.walton@datatables.net</td>
              </tr>
              <tr>
                <td>Finn</td>
                <td>Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td class="font-number">47</td>
                <td class="font-number">2009-07-07</td>
                <td class="font-number">$87,500</td>
                <td class="font-number">2927</td>
                <td>f.camacho@datatables.net</td>
              </tr>
              <tr>
                <td>Serge</td>
                <td>Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td class="font-number">64</td>
                <td class="font-number">2012-04-09</td>
                <td class="font-number">$138,575</td>
                <td class="font-number">8352</td>
                <td>s.baldwin@datatables.net</td>
              </tr>
              <tr>
                <td>Zenaida</td>
                <td>Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td class="font-number">63</td>
                <td class="font-number">2010-01-04</td>
                <td class="font-number">$125,250</td>
                <td class="font-number">7439</td>
                <td>z.frank@datatables.net</td>
              </tr>
              <tr>
                <td>Zorita</td>
                <td>Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td class="font-number">56</td>
                <td class="font-number">2012-06-01</td>
                <td class="font-number">$115,000</td>
                <td class="font-number">4389</td>
                <td>z.serrano@datatables.net</td>
              </tr>
              <tr>
                <td>Jennifer</td>
                <td>Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td class="font-number">43</td>
                <td class="font-number">2013-02-01</td>
                <td class="font-number">$75,650</td>
                <td class="font-number">3431</td>
                <td>j.acosta@datatables.net</td>
              </tr>
              <tr>
                <td>Cara</td>
                <td>Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td class="font-number">46</td>
                <td class="font-number">2011-12-06</td>
                <td class="font-number">$145,600</td>
                <td class="font-number">3990</td>
                <td>c.stevens@datatables.net</td>
              </tr>
              <tr>
                <td>Hermione</td>
                <td>Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td class="font-number">47</td>
                <td class="font-number">2011-03-21</td>
                <td class="font-number">$356,250</td>
                <td class="font-number">1016</td>
                <td>h.butler@datatables.net</td>
              </tr>
              <tr>
                <td>Lael</td>
                <td>Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td class="font-number">21</td>
                <td class="font-number">2009-02-27</td>
                <td class="font-number">$103,500</td>
                <td class="font-number">6733</td>
                <td>l.greer@datatables.net</td>
              </tr>
              <tr>
                <td>Jonas</td>
                <td>Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td class="font-number">30</td>
                <td class="font-number">2010-07-14</td>
                <td class="font-number">$86,500</td>
                <td class="font-number">8196</td>
                <td>j.alexander@datatables.net</td>
              </tr>
              <tr>
                <td>Shad</td>
                <td>Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td class="font-number">51</td>
                <td class="font-number">2008-11-13</td>
                <td class="font-number">$183,000</td>
                <td class="font-number">6373</td>
                <td>s.decker@datatables.net</td>
              </tr>
              <tr>
                <td>Michael</td>
                <td>Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td class="font-number">29</td>
                <td class="font-number">2011-06-27</td>
                <td class="font-number">$183,000</td>
                <td class="font-number">5384</td>
                <td>m.bruce@datatables.net</td>
              </tr>
              <tr>
                <td>Donna</td>
                <td>Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td class="font-number">27</td>
                <td class="font-number">2011-01-25</td>
                <td class="font-number">$112,000</td>
                <td class="font-number">4226</td>
                <td>d.snider@datatables.net</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <h5  class="mt-5">Users DataTables</h5>
      <p  class="text-secondary font-size-sm">Example users datatables</p>
     <div class="card">
         <div class="card-body">
             <table name="customerTable" id="customerTable" class="customerTable table table-striped table-bordered table-sm dt-responsive nowrap w-100">
                 <thead>
                    <tr class="column-filter dt-column-filter">
                        <th><input type="text" class="form-control form-control-sm" placeholder="Search Id"></th>
                        <th><input type="text" class="form-control form-control-sm" placeholder="Search login"></th>
                        <th><input type="text" class="form-control form-control-sm" placeholder="Search name"></th>
                        <th><input type="text" class="form-control form-control-sm" placeholder="Search lastname"></th>
                        <th><input type="text" class="form-control form-control-sm" placeholder="Search email"></th>
                        <th><input type="text" class="form-control form-control-sm" placeholder="Search active"></th>
                        <th width="100px"><input type="text" class="form-control form-control-sm" placeholder="Search action"></th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Login</th>
                        <th>Name</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Active</th>
                        <th width="100px">Action</th>
                    </tr>
                 </thead>
                 <tbody></tbody>
             </table>
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
  <script src="/assets/admin/plugins/datatables/jquery.dataTables.bootstrap4.responsive.min.js"></script>
  <script>
    $(() => {
      App.checkAll()
      // Run datatable
      var table = $('#example').DataTable({
        drawCallback: function() {
          $('.dataTables_paginate > .pagination').addClass('pagination-sm') // make pagination small
        }
      })

      // Apply column filter
      $('#example .dt-column-filter th').each(function(i) {
        $('input', this).on('keyup change', function() {
          if (table.column(i).search() !== this.value) {
            table
              .column(i)
              .search(this.value)
              .draw()
          }
        })
      })

      // Toggle Column filter function
      var responsiveFilter = function(table, index, val) {
        var th = $(table).find('.dt-column-filter th').eq(index)
        val === true ? th.removeClass('d-none') : th.addClass('d-none')
      }

      // Run Toggle Column filter at first
      $.each(table.columns().responsiveHidden(), function(index, val) {
        responsiveFilter('#example', index, val)
      })

      // Run Toggle Column filter on responsive-resize event
      table.on('responsive-resize', function(e, datatable, columns) {
        $.each(columns, function(index, val) {
          responsiveFilter('#example', index, val)
        })
      })


      var table2 = $(".customerTable").DataTable({
          processing:true,
          serverSide:true,
          ajax:"{{ route('show.users') }}",
          columns:[
              {data:"code",name:"code"},
              {data:"login",name:"login"},
              {data:"name",name:"name"},
              {data:"lastname",name:"lastname"},
              {data:"email",name:"email"},
              {data:"active",name:"active"},
              {data:"action",name:"action",orderable:false,searchable:false},
          ]
      });
    })
  </script>

</body>

</html>
