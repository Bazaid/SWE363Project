<?php
/* Smarty version 3.1.33, created on 2019-04-13 19:10:24
  from '/Users/bazaid/Sites/sweProject/public/views/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb23420b96092_81422568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbb11fc540b79044be38b2bed9b703dbc71d3d5c' => 
    array (
      0 => '/Users/bazaid/Sites/sweProject/public/views/login.tpl',
      1 => 1555182509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./include/header.tpl' => 1,
    'file:./include/nav.tpl' => 1,
    'file:./include/footer.tpl' => 1,
  ),
),false)) {
function content_5cb23420b96092_81422568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./include/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="main-wrapper container transition">
  <div id="main" class="main-conten transition">
    <section class="section">
    <section class="section">
            <div class="container mt-5">
              <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                  <div class="card card-primary">
                    <div class="card-header"><h4>Login</h4></div>
      
                    <div class="card-body">
                      <form method="POST" action="#" class="needs-validation" novalidate="">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                          <div class="invalid-feedback">
                            Please fill in your email
                          </div>
                        </div>
      
                        <div class="form-group">
                          <div class="d-block">
                            <label for="password" class="control-label">Password</label>
                            <div class="float-right">
                              <a href="/forgot.php" class="text-small">
                                Forgot Password?
                              </a>
                            </div>
                          </div>
                          <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                          <div class="invalid-feedback">
                            please fill in your password
                          </div>
                        </div>
      
                        <div class="form-group">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                          </div>
                        </div>
      
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                            Login
                          </button>
                        </div>
                      </form>
               
      
                    </div>
                  </div>
                  <div class="mt-5 text-muted text-center">
                    Don't have an account? <a href="/register.php">Create One</a>
                  </div>
                
                </div>
              </div>
            </div>
          </section>
    </section>
  </div>

  <?php $_smarty_tpl->_subTemplateRender('file:./include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
