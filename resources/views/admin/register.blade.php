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

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-7 col-xl-8 d-none d-lg-block">
        <img src="/assets/admin/img/register.svg" alt="" class="img-fluid w-100">
      </div>
      <div class="col-lg-5 col-xl-4 d-flex justify-content-center align-items-start">
        <div class="card mb-3">
          <div class="card-body p-4">
            <h3>Create New Account!</h3>
            <p class="font-weight-light text-secondary">It's free and only takes a minute.</p>
            <hr>
            <form action="{{ route("create.user") }}" method="post">
                @csrf
              <div class="form-group">
                <label class="font-size-sm" for="name">Name</label>
                <input type="text" class="form-control bg-gray-200 border-gray-200" name="name" id="name" placeholder="Your name" autocomplete="off">
              </div>
                <div class="form-group">
                    <label class="font-size-sm" for="lastname">Lastname</label>
                    <input type="text" class="form-control bg-gray-200 border-gray-200" name="lastname" id="lastname" placeholder="Your lastname" autocomplete="off">
                </div>
              <div class="form-group">
                <label class="font-size-sm" for="email">Email address</label>
                <input type="email" class="form-control bg-gray-200 border-gray-200" name="email" id="email" placeholder="yourname@yourmail.com" autocomplete="off">
              </div>
              <div class="form-group">
                <label class="font-size-sm" for="password">Password</label>
                <input type="password" class="form-control bg-gray-200 border-gray-200" name="password" id="password" placeholder="Enter your password">
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="agreeCheck">
                  <label class="custom-control-label" for="agreeCheck">I agree with </label>
                  <a href="javascript:void(0)"><u>terms and conditions</u></a>
                </div>
              </div>
{{--              <button type="button" class="btn btn-primary btn-block">CREATE NEW ACCOUNT</button>--}}
                <button type="submit" class="btn btn-primary btn-block">CREATE NEW ACCOUNT</button>
              <div class="divider-text">or register with</div>
              <button type="button" class="btn btn-sm btn-outline-primary btn-block has-icon"><i class="fab fa-facebook"></i> Facebook</button>
              <button type="button" class="btn btn-sm btn-outline-info btn-block has-icon"><i class="fab fa-facebook"></i> Twitter</button>
              <div class="small mt-4">
                Already have an account ?
                <a href="login2.html" class="text-decoration-underline">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Plugins -->
  <!-- JS plugins goes here -->

</body>

</html>
