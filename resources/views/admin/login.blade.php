<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font & Icon -->
  <link rel="stylesheet" href="/assets/admin/font/inter/inter.min.css">
  <link href="/assets/admin/plugins/material-design-icons-iconfont/material-design-icons.min.css" rel="stylesheet">
  <!-- Plugins -->
  <!-- CSS plugins goes here -->
  <!-- Main Style -->
  <link rel="stylesheet" href="/assets/admin/plugins/simplebar/simplebar.min.css">
  <link rel="stylesheet" href="/assets/admin/css/style.min.css" id="main-css">
  <link rel="stylesheet" href="/assets/admin/css/sidebar-gray.min.css" id="theme-css"> <!-- options: blue,cyan,dark,gray,green,pink,purple,red,royal,ash,crimson,namn,frost -->
  <title>Mimity Admin</title>
</head>

<body class="login-page">

  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-auto d-flex justify-content-center">
        <div class="card shadow">
          <div class="card-header bg-primary text-white flex-column">
            <h4 class="text-center mb-0">Log In</h4>
            <div class="text-center opacity-50 font-italic">to your account</div>
          </div>
          <div class="card-body p-4">

            <!-- LOG IN FORM -->
            <form>
              <div class="form-group">
                <div class="floating-label input-icon">
                  <i class="material-icons">person_outline</i>
                  <input type="text" class="form-control" placeholder="Username" id="username" autocomplete="off">
                  <label for="username">Username</label>
                </div>
              </div>
              <div class="form-group">
                <div class="floating-label input-icon">
                  <i class="material-icons">lock_open</i>
                  <input type="password" class="form-control" placeholder="Password" id="password">
                  <label for="password">Password</label>
                </div>
              </div>
              <div class="form-group d-flex justify-content-between align-items-center">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="remember">
                  <label class="custom-control-label" for="remember">Remember me</label>
                </div>
                <a href="forgot-password.html" class="text-primary text-decoration-underline small">Forgot password ?</a>
              </div>
              <button type="button" class="btn btn-primary btn-block">LOG IN</button>
            </form>
            <div class="divider-text">or</div>
            <button type="button" class="btn btn-sm btn-outline-primary btn-block has-icon"><i class="fab fa-facebook"></i> Login with Facebook</button>
            <button type="button" class="btn btn-sm btn-outline-info btn-block has-icon"><i class="fab fa-facebook"></i> Login with Twitter</button>
            <div class="small mt-4">
              Don't have an account ?
              <a href="register.html" class="text-decoration-underline">Register</a>
            </div>
            <!-- /LOG IN FORM -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Plugins -->
  <!-- JS plugins goes here -->

</body>

</html>