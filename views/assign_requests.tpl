{include file='./include/header_dashboard.tpl'}
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block">Admin</div>
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
                    <a href="index.php">KFUPM Services</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.php">KFUPM</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header ">Dashboard</li>
                    <li>
                        <a href="dashboard.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                    </li>

                    <li class="menu-header">Services/Requests</li>
                    <li><a class="nav-link" href="manage_services.php"><i class="fas fa-tasks"></i> <span>Manage
                                Services</span></a></li>
                    <li><a class="nav-link" href="manage_requests.php"><i class="fas fa-cogs"></i> <span>Manage
                                Requests</span></a></li>

                    <li class="menu-header">Staff</li>
                    <li class="active"><a class="nav-link" href="manage_staff.php"><i class="fas fa-user-tie"></i>
                            <span>Manage Staff</span></a></li>

                    <li class="menu-header">Users</li>
                    <li><a class="nav-link" href="manage_users.php"><i class="fas fa-user-tie"></i> <span>Manage
                                Users</span></a></li>
                </ul>
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Assign Requests</h1>
                </div>

                <div class="section-body">

                    <div class="card">
                        <div class="card-header">
                            <h4>unassigend Requests</h4>
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
                                Request Assigned!.
                            </div>
                            {else if $alert eq -1}
                            <div class="alert alert-danger alert-dismissible show fade">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                Request not assigned!.
                            </div>
                            {/if}
                            {/if}
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
                                            <td>
                                                <a href="assign.php?id={$staff_id}&request_id={$request['id']}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                    title="Assign request to selected request"><i class="fas fa-thumbtack"></i></a>
                                            </td>
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
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Staff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="#">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="first_name" class="col-form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name" class="col-form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
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
{include file='./include/footer_dashboard.tpl'}
