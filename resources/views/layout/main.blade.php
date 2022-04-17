<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>DupakDulu</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">
                <div class='justify-content-center align-items-center'>
                    <a class="navbar-brand" href="#">DupakDulu</a>
                </div>
                <div class="">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                          <a class="nav-link" href="#">DUPAK-Form</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">SKP-Form</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">ABOUT</a>
                        </li>
                      </ul>
                </div>
                <div class="btn btn-light">Login</div>
              </nav>
        </div>
    </div>
          @yield('content')
</body>
</html>
