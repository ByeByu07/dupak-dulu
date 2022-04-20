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
            <nav class="navbar navbar-expand-lg navbar-dark justify-content-between d-flex" style="background-color: #023047">
                <div class='justify-content-center align-items-center'>
                    <a class="navbar-brand" href="/">DupakDulu</a>
                </div>
                <div class="text-white">
                    <ul class="nav">
                        <div class="d-flex">
                            <li class="nav-item">
                                <a class="nav-link" href="/dupak" style="color:#8ecae6">DUPAK</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/skp" style="color:#8ecae6">SKP</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link" href="/bapak" style="color:#8ecae6">BAPAK</a>
                              </li>
                              {{-- <li class="nav-item">
                                  <a class="nav-link" href="/dupak" style="color:#8ecae6">DUPAK</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/skp" style="color:#8ecae6">SKP</a>
                                </li>
                                 <li class="nav-item">
                                  <a class="nav-link" href="/skp" style="color:#8ecae6">BAPAK</a>
                                </li> --}}
                              <li class="nav-item">
                                <a class="nav-link" href="/about" style="color:#8ecae6">ABOUT</a>
                              </li>
                        </div>
                        {{-- <div class="collapse" id="navbarToggleExternalContent">
                            <li class="btn btn-light">Login</li>
                            <li class="nav-item">
                                <a class="nav-link" href="/dupak" style="color:#8ecae6">DUPAK</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/skp" style="color:#8ecae6">SKP</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link" href="/skp" style="color:#8ecae6">BAPAK</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="/dupak" style="color:#8ecae6">DUPAK</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/skp" style="color:#8ecae6">SKP</a>
                                </li>
                                 <li class="nav-item">
                                  <a class="nav-link" href="/skp" style="color:#8ecae6">BAPAK</a>
                                </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/about" style="color:#8ecae6">ABOUT</a>
                              </li>
                        </div>
                        <li class="nav-item container-fluid">
                            <button class="navbar-toggler nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                        </li> --}}
                        <div class="d-flex ">
                            <li class="btn btn-light">Login</li>
                        </div>
                      </ul>
                </div>

              </nav>
        </div>
    </div>
          @yield('content')
          <div class="row mt-5">
            <div class="col-lg-12">
                <div class="navbar d-flex justify-content-center text-white py-3" style="background-color: #023047">Made By DupakDulu with ❤</div>
            </div>
        </div>
</body>
</html>
