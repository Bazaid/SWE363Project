{include file='./include/header_dashboard.tpl'}
<div id="app">
  <div class="main-wrapper main-wrapper-1">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
      <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
          <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>

      </form>
      <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">Staff</div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="logout.php" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>

    <div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <a href="index.html">KFUPM Services</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
          <a href="index.html">KFUPM</a>
        </div>
        <ul class="sidebar-menu">
          <li class="menu-header ">Dashboard</li>
          <li class="active">
            <a href="dashboard.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
        </ul>
      </aside>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Welcome to your dashboard.</h1>
        </div>

        <div class="section-body">
          {if $requests}
          <div class="table-responsive">
            <table class="table table-striped mb-0">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Created At</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {if $requests}
                {foreach $requests as $request}
                <tr>
                  <td>{$services[$request['service_id']]['name']}</td>
                  <td>{$request['created_at']}</td>

                  <td>
                    Pending
                  </td>
                   <td><a href="request.php?id={$request['id']}" class="btn btn-primary">Detail</a></td>
                </tr>
                {/foreach}
                {else}
                <div class="text-muted text-center">
                  No unassigend requests Found,
                </div>
                {/if}


              </tbody>
            </table>

          </div>
          {else}
          <div class="text-muted text-center">
            No Assigned request were found!.
          </div>
          {/if}
        </div>
      </section>
    </div>
    <footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2018 <div class="bullet"></div>
      </div>
      <div class="footer-right">

      </div>
    </footer>
  </div>
</div>
{include file='./include/footer_dashboard.tpl'}
