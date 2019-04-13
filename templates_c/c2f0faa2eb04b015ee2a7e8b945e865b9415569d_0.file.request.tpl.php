<?php
/* Smarty version 3.1.33, created on 2019-04-13 22:55:29
  from '/Users/bazaid/Sites/sweProject/public/views/request.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb268e1778354_30362742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f0faa2eb04b015ee2a7e8b945e865b9415569d' => 
    array (
      0 => '/Users/bazaid/Sites/sweProject/public/views/request.tpl',
      1 => 1555196126,
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
function content_5cb268e1778354_30362742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./include/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="main-wrapper container transition">
    <div id="main" class="main-conten transition">
        <section class="section">
            <div class="section-header">
                <h1>Request</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Home</a></div>
                    <div class="breadcrumb-item active"><a href="/track.php">Track</a></div>
                    <div class="breadcrumb-item">Request</div>
                </div>
            </div>
            <div class="section-body">


                <div class="row mt-sm-4 d-flex justify-content-center">

                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                            <div class="card-header">
                                <h4><?php echo $_smarty_tpl->tpl_vars['service']->value->name;?>
</h4>
                                <div class="badge"><?php echo $_smarty_tpl->tpl_vars['request']->value->status;?>
</div>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <label>Info</label>
                                        <p><?php echo $_smarty_tpl->tpl_vars['request']->value->info;?>
</p>
                                    </div>

                                </div>

                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['request']->value->completed == 0) {?>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                            <?php }?>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:./include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
