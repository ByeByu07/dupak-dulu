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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600&display=swap');
    body{
        font-family: 'Roboto', sans-serif;
    }
    .logo{
        font-family: 'Roboto Mono', monospace;
        font-weight: 600;
    }
    .footer-ku{
        font-family: 'Roboto Mono', monospace;
        font-weight: 400;
    }
</style>
<body class="bg-light">
    <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #023047">
            <div class="container-fluid">
              <a class="navbar-brand logo border-bottom border-white" href="/">DupakDulu</a>
                <div class="dropdown">
                    <button class="btn dropdown-toggle navbar-toggler" type="button" id="p" data-bs-toggle="dropdown" aria-expanded="false">
                      Dashboard
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="p">
                        @if (Request::is('/dashboard'))
                            <li><a class="dropdown-item" href="/dashboard">Go Dashboard</a></li>
                        @else
                            <li><a class="dropdown-item" href="/dashboard/chg-pass">Change Password</a></li>
                            <li><a class="dropdown-item" href="/dashboard/contact-us">Contact Us</a></li>
                            <li>
                                <form action="/logout" method="post">
                                    <button class="dropdown-item" type="submit">LogOut</button>
                                </form>
                            </li>
                        @endif
                    </ul>
                </div>
              </button>
              <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
                <div class="navbar-nav d-flex justify-content-between">
                </div>
              </div>
            </div>
          </nav>
        </div>
    </div>
          @yield('content')
          <div class="row mt-5">
            <div class="col-lg-12">
                <div class="navbar d-flex justify-content-center text-white py-3 fixed-bottom" style="background-color: #023047">Made By <span class="border-light border-bottom mx-1 footer-ku"> DupakDulu </span> With ❤ </div>
            </div>
        </div>
</body>
</html>


{{-- MODAL  SECTION --}}

{{-- Login --}}
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header justify-content-beetwen">
          <h2 class="modal-title" id="exampleModalLabel">SignIn</h2>
          <button type="button" class="btn-close float-end btn-light btn" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body bg-light">
            <form action="/login" method="post">
                <div class="container">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                </div>
        </div>
        <div class="modal-footer justify-content-between p-4">
            <div class="">
                <a href="#" data-bs-toggle="modal" data-bs-target="#forgot-password">Forgot password ?</a>
            </div>
            <div class="">
                <a data-bs-toggle="modal" data-bs-target="#register" href="#">SignUp ?</a>
                <button type="button" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- REGISTER --}}
  <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header justify-content-beetwen">
          <h2 class="modal-title" id="exampleModalLabel">SignUp</h2>
          <button type="button" class="btn-close float-end btn-light btn" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body bg-light">
            <form action="/login" method="post">
                <div class="container">
                    {{-- <div class="mb-3 bg-warning p-2 rounded text-white">
                          <h5> Masukkan nomor TelePhone dan Email yang aktif</h5>
                          <ul>
                              <li>No TelePhone diutamakan What'sApp yang aktif</li>
                          </ul>
                    </div> --}}
                    <hr>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="email">@</span>
                                <input class="form-control" type="email" name="email" id="email"  aria-describedby="email">
                            </div>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label for="no-wa" class="form-label">No WhatsApp</label>
                            <div class="input-group">
                                <span class="input-group-text" id="no-wa">@</span>
                                <input class="form-control" type="no-wa" name="no-wa" id="no-wa"  aria-describedby="no-wa">
                            </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group">
                                <span class="input-group-text" id="username">@</span>
                                <input class="form-control" type="username" name="username" id="username"  aria-describedby="username">
                            </div>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text" id="password">@</span>
                                <input class="form-control" type="password" name="password" id="password"  aria-describedby="password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center my-5">
                    <p>Or SignIn With</p>
                </div>
                <div class="third-sign-in row">
                    <a href="" class=" col-12">
                        <img class="img-fluid mx-auto d-block" src="black.jpg" width="200">
                    </a>
                </div>
        </div>
        <div class="modal-footer justify-content-between p-4">
            {{-- <div class="">
                <a href="#" data-bs-toggle="modal" data-bs-target="#forgot-password">Forgot password ?</a>
            </div> --}}
            <div class="">
                <button type="button" class="btn btn-primary">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- FORGOT PASWORD --}}
  <div class="modal fade" id="forgot-password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header justify-content-beetwen">
          <h2 class="modal-title" id="exampleModalLabel">Forgot Password</h2>
          <button type="button" class="btn-close float-end btn-light btn" data-bs-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body bg-light">
            <form action="/forgot-password" method="post">
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="mb-3 col-lg-12">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="email">@</span>
                                <input class="form-control" type="email" name="email" id="email"  aria-describedby="email">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer justify-content-between p-4">
            <div class="">
                <button type="button" class="btn btn-primary">Send e-mail forgot password </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

