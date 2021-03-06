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
  <link rel="stylesheet" href="/assets/admin/plugins/bootstrap-select/bootstrap-select.min.css">
  <link rel="stylesheet" href="/assets/admin/plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="/assets/admin/plugins/select2/css/select2.min.css">
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
            <li class="nav-item"><a href="range-slider.html" class="nav-link">Range Slider</a></li>
            <li class="nav-item"><a href="select2.html" class="nav-link">Select2</a></li>
            <li class="nav-item"><a href="tag-input.html" class="nav-link">Tag Input</a></li>
            <li class="nav-item"><a href="bootstrap-touchspin.html" class="nav-link">TouchSpin</a></li>
            <li class="nav-item"><a href="form-wizard.html" class="nav-link">Wizard</a></li>
            <li class="nav-item"><a href="form-validation.html" class="nav-link active">Validation</a></li>
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
          <li class="breadcrumb-item active" aria-current="page">Validation</li>
        </ol>
      </nav>
      <!-- /Breadcrumb -->

      <div class="row">
        <div class="col">

          <section id="section1">
            <h5>Simple feedback</h5>
            <p class="text-secondary font-size-sm">
              Simple feedback using border colors.
            </p>
            <div class="card" style="max-width: 400px">
              <div class="card-body">
                <form method="post" class="needs-validation" novalidate>
                  <div class="form-group">
                    <label for="fullName1">Full name</label>
                    <input type="text" class="form-control" id="fullName1" placeholder="Full name" value="Arthur Rice" required>
                  </div>
                  <div class="form-group">
                    <label for="email1">Email address</label>
                    <input type="email" class="form-control" id="email1" placeholder="Enter email" required>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input type="radio" name="gender1" class="custom-control-input" id="gender1" required>
                      <label class="custom-control-label" for="gender1">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="gender1" class="custom-control-input" id="gender2" required>
                      <label class="custom-control-label" for="gender2">Female</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="agreeCheck1" required>
                      <label class="custom-control-label" for="agreeCheck1">Agree to terms and conditions</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
              </div>
            </div>
          </section>

          <section id="section2" class="mt-5">
            <h5>With text feedback</h5>
            <p class="text-secondary font-size-sm">
              Same as before but added with text feedback.
            </p>
            <div class="card" style="max-width: 400px">
              <div class="card-body">
                <form method="post" class="needs-validation" novalidate>
                  <div class="form-group">
                    <label for="fullName2">Full name</label>
                    <input type="text" class="form-control" id="fullName2" placeholder="Full name" value="Sophie Dean" required>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">This field is required.</div>
                  </div>
                  <div class="form-group">
                    <label for="email2">Email address</label>
                    <input type="email" class="form-control" id="email2" placeholder="Enter email" required>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please provide a valid email.</div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input type="radio" name="gender2" class="custom-control-input" id="gender3" required>
                      <label class="custom-control-label" for="gender3">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" name="gender2" class="custom-control-input" id="gender4" required>
                      <label class="custom-control-label" for="gender4">Female</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please choose your gender.</div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="agreeCheck2" required>
                      <label class="custom-control-label" for="agreeCheck2">Agree to terms and conditions</label>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">You must agree before signing up.</div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
              </div>
            </div>
          </section>

          <section id="section3" class="mt-5">
            <h5>With tooltip feedback</h5>
            <p class="text-secondary font-size-sm">
              Swap text feedback with tooltip feedback. Be sure to have a parent with <code>position: relative</code> on it for tooltip positioning.
            </p>
            <div class="card" style="max-width: 400px">
              <div class="card-body">
                <form method="post" class="needs-validation" novalidate>
                  <div class="form-group position-relative">
                    <label for="fullName3">Full name</label>
                    <input type="text" class="form-control" id="fullName3" placeholder="Full name" value="Sophie Dean" required>
                    <div class="invalid-tooltip">This field is required.</div>
                  </div>
                  <div class="form-group position-relative">
                    <label for="email3">Email address</label>
                    <input type="email" class="form-control" id="email3" placeholder="Enter email" required>
                    <div class="invalid-tooltip">Please provide a valid email.</div>
                  </div>
                  <div class="form-group position-relative">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="agreeCheck3" required>
                      <label class="custom-control-label" for="agreeCheck3">Agree to terms and conditions</label>
                      <div class="invalid-tooltip">You must agree before signing up.</div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
              </div>
            </div>
          </section>

          <section id="section4" class="mt-5">
            <h5>Supported elements</h5>
            <p class="text-secondary font-size-sm">
              Validation styles are available for the following form controls and components.
            </p>
            <div class="card">
              <div class="card-body">
                <form method="post" class="was-validated">
                  <div class="mb-3">
                    <label for="validationTextarea">Textarea</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                      Please enter a message in the textarea.
                    </div>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                    <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                    <div class="invalid-feedback">Example invalid feedback text</div>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                  </div>
                  <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                  </div>
                  <div class="form-group">
                    <select class="custom-select" required>
                      <option value="">Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                  </div>
                  <div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </div>
                  <div class="form-group">
                    <select class="form-control bs-select" title="Choose browser" data-bs-select-clearable="true" required>
                      <option value="1">Firefox</option>
                      <option value="2">Chrome</option>
                      <option value="4">Safari</option>
                      <option value="5">Opera</option>
                      <option value="6">Edge</option>
                    </select>
                    <div class="invalid-feedback">Example invalid bootstrap select feedback</div>
                  </div>
                  <div class="form-group" id="select2-validation">
                    <select class="form-control select2" data-placeholder="Choose browser" data-allow-clear="true" data-dropdown-parent="#select2-validation" required>
                      <option></option>
                      <option value="1">Firefox</option>
                      <option value="2">Chrome</option>
                      <option value="4">Safari</option>
                      <option value="5">Opera</option>
                      <option value="6">Edge</option>
                    </select>
                    <div class="invalid-feedback">Example invalid select2 feedback</div>
                  </div>
                  <div class="form-group" id="select2-validation2">
                    <select class="form-control select2" data-placeholder="Choose browsers" multiple data-dropdown-parent="#select2-validation2" required>
                      <option value="1">Firefox</option>
                      <option value="2">Chrome</option>
                      <option value="4">Safari</option>
                      <option value="5">Opera</option>
                      <option value="6">Edge</option>
                    </select>
                    <div class="invalid-feedback">Example invalid select2 (multiple) feedback</div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control tagin" required>
                    <div class="invalid-feedback">Example invalid input-tag feedback</div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control summernote" name="content1" required></textarea>
                    <div class="invalid-feedback">Example invalid summernote feedback</div>
                  </div>
                </form>
              </div>
            </div>
          </section>

        </div>

        <div class="col-3 d-none d-xl-block">
          <div class="nav-section">
            <label class="text-muted">On This Page</label>
            <nav id="navSection" class="nav flex-column">
              <a href="#section1" class="nav-link nav-link-sm">Simple feedback</a>
              <a href="#section2" class="nav-link nav-link-sm">With text feedback</a>
              <a href="#section3" class="nav-link nav-link-sm">With tooltip feedback</a>
              <a href="#section4" class="nav-link nav-link-sm">Supported elements</a>
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
  <script src="/assets/admin/plugins/bootstrap-select/bootstrap-select.min.js"></script>
  <script src="/assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
  <script src="/assets/admin/plugins/select2/js/select2.min.js"></script>
  <script src="/assets/admin/plugins/tagin/tagin.min.js"></script>
  <script>
    $(() => {
      // Example starter for disabling form submissions if there are invalid fields
      $('.needs-validation').on('submit', function(e) {
        if (this.checkValidity() === false) {
          e.preventDefault()
          e.stopPropagation()
        }
        this.classList.add('was-validated')
      })

      // Bootstrap select
      App.bootstrapSelect()
      for (const el of document.querySelectorAll('select.bs-select')) {
        toggleValidityClass(el)
        el.addEventListener('change', () => toggleValidityClass(el))
      }

      function toggleValidityClass(el) {
        if (el.validity.valid) {
          el.parentNode.classList.add('is-valid')
          el.parentNode.classList.remove('is-invalid')
        } else {
          el.parentNode.classList.add('is-invalid')
          el.parentNode.classList.remove('is-valid')
        }
      }

      // Select2
      App.select2()

      // Summernote
      $('.summernote').summernote({
        minHeight: 100,
        callbacks: {
          onChange: function(contents, $editable) {
            // fix https://github.com/summernote/summernote/issues/2631
            if ($(this).summernote('isEmpty') && contents != '') {
              $(this).summernote('code', '')
            }
          }
        }
      })

      for (const el of document.querySelectorAll('.tagin')) {
        tagin(el)
      }
    })
  </script>

</body>

</html>