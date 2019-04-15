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
            <div class="d-sm-none d-lg-inline-block">Admin</div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="logout" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <a href="#">KFUPM Services</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
          <a href="#">KFUPM</a>
        </div>
        <ul class="sidebar-menu">
          <li class="menu-header ">Dashboard</li>
          <li>
            <a href="dashboard.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>

          <li class="menu-header">Services</li>
          <li class="active"><a class="nav-link" href="manage_services.php"><i class="fas fa-tasks"></i> <span>Manage
                Services</span></a></li>


          <li class="menu-header">Staff</li>
          <li><a class="nav-link" href="manage_staff.php"><i class="fas fa-user-tie"></i> <span>Manage Staff</span></a>
          </li>

          <li class="menu-header">Users</li>
          <li><a class="nav-link" href="manage_users.php"><i class="fas fa-user-tie"></i> <span>Manage Users</span></a>
          </li>


        </ul>
      </aside>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Manage Services</h1>
        </div>

        <div class="section-body">
          <div class="card">
            <div class="card-header">
              <h4>Available Services</h4>
              <div class="card-header-action">
                <a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-primary">+</a>
              </div>
            </div>
            <div class="card-body p-0">
              {if isset($alert)}
              {if $alert eq 1}
              <div class="alert alert-primary alert-dismissible show fade">
                <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                </button>
                Service Created.
              </div>
              {else if $alert eq -1}
              <div class="alert alert-danger alert-dismissible show fade">
                <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                </button>
                Service not created !.
              </div>
              {/if}
              {/if}

              <div class="table-responsive">
                <table class="table table-striped mb-0">
                  <thead>
                    <tr>
                      <th>Service</th>
                      <th>Creation Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    {foreach $services as $service}
                    <tr>
                      <td>
                        {$service['name']}
                      </td>
                      <td>
                        {$service['creation_date']}
                      </td>
                      <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"
                          href="edit_service.php?id={$service['id']}"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                          href="edit_service.php?id={$service['id']}&delete=1"
                         target="_blank"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    {/foreach}
                  </tbody>
                </table>
              </div>


            </div>
            <div class="card-footer text-center">
      
            </div>
          </div>
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
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">Add Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="#" enctype="multipart/form-data">

          <div class="modal-body">
            <div class="form-group">
              <label for="name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
              <label for="name" class="col-form-label">Logo:</label>
              <input type="file" class="" name="logo" id="logo" accept="image/png, image/jpeg" required>
            </div>
            <div class="form-group">
              <label for="description" class="col-form-label">Description:</label>
              <textarea class="form-control" name="description" id="description" required></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
{literal}
<script>

</script>
{/literal}
{include file='./include/footer_dashboard.tpl'}
