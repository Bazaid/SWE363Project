<?php
/* Smarty version 3.1.33, created on 2019-04-13 21:02:01
  from '/Users/bazaid/Sites/sweProject/public/views/logout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb24e4923da39_84922113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa8ffd62f71a194ed3e49813fe670457451d01c1' => 
    array (
      0 => '/Users/bazaid/Sites/sweProject/public/views/logout.tpl',
      1 => 1555189317,
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
function content_5cb24e4923da39_84922113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./include/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="main-wrapper container transition">
    <div id="main" class="main-conten transition">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Logout</h4>
                            </div>

                            <div class="card-body">

                                <p class="mt-3">
                                    You will be redirect to home page in <span id="seconds">10</span> Seconds remaining
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            let timeleft = 10;

            let downloadTimer = setInterval(function () {
                document.getElementById("seconds").innerHTML = timeleft;
                timeleft -= 1;
                if (timeleft <= 0) {
                    clearInterval(downloadTimer);
                    window.location.href = "index.php";
                }
            }, 1000);
        });
    <?php echo '</script'; ?>
>
    
    <?php $_smarty_tpl->_subTemplateRender('file:./include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
