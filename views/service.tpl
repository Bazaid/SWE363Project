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
                    <a href="index.html">KFUPM Services</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html">KFUPM</a>
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
                    <li><a class="nav-link" href="manage_staff.php"><i class="fas fa-user-tie"></i> <span>Manage
                                Staff</span></a></li>

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
                    <h1>Edit {$service->name} </h1>
                </div>

                <div class="section-body">
                    <form action="edit_service.php?id={$service->id}" method="POST">
                        <div class="form-group">
                            <fieldset>
                                <legend>Service Information:</legend>
                                <span>
                                    <p type="text-muted text-center">Name:<br></p>
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{$service->name}" required />
                                </span>
                                <label for="desc">Description</label>
                                <textarea class="form-control" id="desc" name="desc" rows="4"  required>{$service->description}</textarea>
                           
                            </fieldset>




                        </div>


                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#exampleModal">Close</button>

                        </div>
                    </form>

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
