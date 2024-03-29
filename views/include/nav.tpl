  <!-- Navigation -->
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top transition" id="mainNav">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="index.php">
        
         <img class="img-fluid" src="{php}echo __URL;{/php}assets/img/logo.PNG" width="29%" height="20%" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          {$logg = Session::isLoggedIn()}
          {if $logg eq 1}
          {$user = Session::get("user")}
          {if $user->role eq 0}
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <div class="d-sm-none d-lg-inline-block">Hi, {$user->first_name} {$user->last_name}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item has-icon" href="{php}echo __URL;{/php}track.php">
                <i class="fas fa-concierge-bell"></i> Track Requests
              </a>
              <a class="dropdown-item has-icon" href="{php}echo __URL;{/php}profile.php">
                <i class="far fa-user"></i> Profile
              </a>
              <a class="dropdown-item has-icon text-danger" href="logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              {else}
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <div class="d-sm-none d-lg-inline-block">Hi, {$user->first_name} {$user->last_name}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item has-icon" href="{php}echo __URL;{/php}dashboard.php">
                <i class="fas fa-concierge-bell"></i> Dashboard
              </a>
              <a class="dropdown-item has-icon text-danger" href="{php}echo __URL;{/php}logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>


              {/if}
            </div>
          </li>
          {else}
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{php}echo __URL;{/php}login.php">Login{$logg}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{php}echo __URL;{/php}register.php">Register</a>
          </li>
          {/if}

        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white p-5">
    <div class="container text-center">
    </div>
  </header>