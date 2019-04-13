<?php
/* Smarty version 3.1.33, created on 2019-04-13 21:10:28
  from '/Users/bazaid/Sites/sweProject/public/views/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb250444721e3_27082483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cfde017be43cec1ce15f4a95c9d906a0178f2f3' => 
    array (
      0 => '/Users/bazaid/Sites/sweProject/public/views/profile.tpl',
      1 => 1555189826,
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
function content_5cb250444721e3_27082483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./include/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="main-wrapper container transition">
    <div id="main" class="main-conten transition">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Home</a></div>
                    <div class="breadcrumb-item">Profile</div>
                </div>
            </div>
            <div class="section-body">


                <div class="row mt-sm-4 d-flex justify-content-center">

                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Building Number</label>
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->building;?>
"
                                                required="">
                                            <div class="invalid-feedback">
                                                Please fill in the building number
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Room Number</label>
                                            <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->room;?>
" >
                                            <div class="invalid-feedback">
                                                Please fill in the room number
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-7 col-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
">
                                            <div class="invalid-feedback">
                                                Please fill in the email
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:./include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
