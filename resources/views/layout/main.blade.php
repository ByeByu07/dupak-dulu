<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="/js/app.js"></script>
    <script defer src="/js/Jquery3.6.0.main.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>DupakDulu</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #023047">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">DupakDulu</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex justify-content-between">
                    @auth
                    <a class="btn btn-light" href="/dashboard">Dashboard</a>
                    @else
                    <a class="btn btn-light" href="/login" data-bs-toggle="modal" data-bs-target="#login">Login</a>
                    @endauth
                    <a class="nav-link" href="/dupak" style="color:#8ecae6">DUPAK</a>
                    <a class="nav-link" href="/skp" style="color:#8ecae6">SKP</a>
                    <a class="nav-link" href="/about" style="color:#8ecae6">About Us</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
    </div>
          @yield('content')
          <div class="row mt-5">
            <div class="col-lg-12">
                <div class="navbar d-flex justify-content-center text-white py-3" style="background-color: #023047">Made By DupakDulu With ❤</div>
            </div>
        </div>
</body>
</html>

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title" id="exampleModalLabel">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/login" method="post">
                <div class="container">
                    <input class="form-control" type="email" name="email" id="email">
                    <input class="form-control" type="password" name="password" id="password">
                </div>
        </div>
        <div class="modal-footer">
          <a data-bs-dismiss="modal">Register ?</a>
          <button type="button" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
