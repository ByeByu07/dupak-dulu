<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <button class="btn dropdown-toggle navbar-toggler" type="button" id="p" data-bs-toggle="offcanvas" data-bs-target="#menuRight" aria-controls="offcanvasRight">
                      Menu
                    </button>
                    <div class="offcanvas offcanvas-end collapse bg-light" tabindex="-1" id="menuRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h2 id="offcanvasRightLabel" class="text-center border-bottom border-1">Menu</h5>
                          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="list-group text-center">
                                <li class="list-group-item {{Request::is('dashboard')?'active':''}}" ><a  class="text-a-dashboard" href="/dashboard"><img src="https://img.icons8.com/windows/32/000000/user-male-circle.png"/>&nbsp;Profile </a></li>
                                <li class="list-group-item {{Request::is('history')?'active':''}}"><a class="text-a-dashboard"href="/history"><img src="https://img.icons8.com/windows/32/000000/order-history.png"/>&nbsp;History </a></li>
                                <li class="list-group-item {{Request::is('setting')?'active':''}}"><a class="text-a-dashboard"href="setting"><img src="https://img.icons8.com/windows/32/000000/settings--v1.png"/>&nbsp;Setting </a></li>
                                <li class="list-group-item {{Request::is('logout')?'active':''}}"><a class="text-a-dashboard"href="/logout"><img src="https://img.icons8.com/windows/32/000000/exit.png"/>&nbsp;LogOut</a></li>
                            </ul>
                        </div>
                      </div>
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
        <div class="col-3 m-3 d-none d-sm-block">
            <ul class="list-group text-center sh-dashboard-user">
                <li class="list-group-item {{Request::is('dashboard')?'active':''}}" ><a  class="text-a-dashboard" href="/dashboard"><img src="https://img.icons8.com/windows/32/000000/user-male-circle.png"/>&nbsp;Profile </a></li>
                <li class="list-group-item {{Request::is('history')?'active':''}}"><a class="text-a-dashboard"href="/history"><img src="https://img.icons8.com/windows/32/000000/order-history.png"/>&nbsp;History </a></li>
                <li class="list-group-item {{Request::is('setting')?'active':''}}"><a class="text-a-dashboard"href="setting"><img src="https://img.icons8.com/windows/32/000000/settings--v1.png"/>&nbsp;Setting </a></li>
                <li class="list-group-item {{Request::is('logout')?'active':''}}"><a class="text-a-dashboard"href="/logout"><img src="https://img.icons8.com/windows/32/000000/exit.png"/>&nbsp;LogOut</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-8">
            @yield('content')
        </div>
    </div>
          <div class="row mt-5">
            <div class="col-lg-12">
                <div class="navbar d-flex justify-content-center text-white py-3 fixed-bottom" style="background-color: #023047">Made By <span class="border-light border-bottom mx-1 footer-ku"> DupakDulu </span> With ❤ </div>
            </div>
        </div>
        <script defer src="/js/app.js"></script>
        <script defer src="/js/Jquery3.6.0.main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>




