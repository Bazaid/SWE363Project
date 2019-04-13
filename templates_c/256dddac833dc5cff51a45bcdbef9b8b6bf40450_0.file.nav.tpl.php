<?php
/* Smarty version 3.1.33, created on 2019-04-13 21:26:11
  from '/Users/bazaid/Sites/sweProject/public/views/include/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb253f386a138_16599226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256dddac833dc5cff51a45bcdbef9b8b6bf40450' => 
    array (
      0 => '/Users/bazaid/Sites/sweProject/public/views/include/nav.tpl',
      1 => 1555190769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb253f386a138_16599226 (Smarty_Internal_Template $_smarty_tpl) {
?>  <!-- Navigation -->
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top transition" id="mainNav">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="/index.php">
        KFUPM Maintenance
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <?php $_smarty_tpl->_assignInScope('logg', Session::isLoggedIn());?>
          <?php if ($_smarty_tpl->tpl_vars['logg']->value == 1) {?>
            <?php $_smarty_tpl->_assignInScope('user', Session::get("user"));?>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item has-icon" href="/track.php">
                <i class="fas fa-concierge-bell"></i> Track Requests
              </a>
              <a class="dropdown-item has-icon" href="/profile.php">
                <i class="far fa-user"></i> Profile
              </a>
              <a class="dropdown-item has-icon text-danger" href="/logout.php">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
      </div>
      </li>
      <?php } else { ?>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="/login.php">Login<?php echo $_smarty_tpl->tpl_vars['logg']->value;?>
</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="/register.php">Register</a>
      </li>
      <?php }?>

      </ul>
    </div>
    </div>
  </nav>

  <header class="bg-primary text-white p-5">
    <div class="container text-center">
    </div>
  </header><?php }
}
