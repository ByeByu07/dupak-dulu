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
                            <li><a class="dropdown-item" href="/dashboard/up-profile">Update Profile</a></li>
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
    <div class="row">
        <div class="col-3 m-3">
            <ul class="list-group text-center sh-dashboard-user">
                <li class="list-group-item {{Request::is('dashboard')?'active':''}}" ><a  class="text-a-dashboard" href="/dashboard"><img src="https://img.icons8.com/windows/32/000000/user-male-circle.png"/>&nbsp;Profile </a></li>
                <li class="list-group-item {{Request::is('history')?'active':''}}"><a class="text-a-dashboard"href="/history"><img src="https://img.icons8.com/windows/32/000000/order-history.png"/>&nbsp;History </a></li>
                <li class="list-group-item {{Request::is('setting')?'active':''}}"><a class="text-a-dashboard"href="setting"><img src="https://img.icons8.com/windows/32/000000/settings--v1.png"/>&nbsp;Setting </a></li>
                <li class="list-group-item {{Request::is('logout')?'active':''}}"><a class="text-a-dashboard"href="/logout"><img src="https://img.icons8.com/windows/32/000000/exit.png"/>&nbsp;LogOut</a></li>
              </ul>
        </div>
        <div class="col-8">
            @yield('content')
        </div>
    </div>
          <div class="row mt-5">
            <div class="col-lg-12">
                <div class="navbar d-flex justify-content-center text-white py-3 fixed-bottom" style="background-color: #023047">Made By <span class="border-light border-bottom mx-1 footer-ku"> DupakDulu </span> With ❤ </div>
            </div>
        </div>
</body>
</html>


