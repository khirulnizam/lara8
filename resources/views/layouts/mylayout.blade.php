<!DOCTYPE html>
<html lang="en">
<head>
  <title>myNew Laravel System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-between sticky-top">
  <!-- Brand -->

  <a class="navbar-brand" href="#">KUIS</a>
  
  


  <!-- Links -->
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link" href="#">JSK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FSTM</a>
      </li>
      <!-- for auth user -->
      @auth
          
      
      <li class="nav-item">
        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Logout') }}
        </a>
      </form>
      @endauth
      <!-- for auth user -->

    </ul>
  </div>

  <form class="form-inline" action="">
    <input class="form-control mr-sm-2" type="text" placeholder="Search trough-out system">
    <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
    
  	</form>
  

</nav>
<br>
  
<div class="container">
  <h3>My new laravel system</h3>
  @yield('content')
</div>

</body>
</html>
