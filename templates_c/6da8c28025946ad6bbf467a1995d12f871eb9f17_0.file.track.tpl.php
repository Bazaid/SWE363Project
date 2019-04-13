<?php
/* Smarty version 3.1.33, created on 2019-04-13 22:27:07
  from '/Users/bazaid/Sites/sweProject/public/views/track.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb2623b2f6ba5_12210930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6da8c28025946ad6bbf467a1995d12f871eb9f17' => 
    array (
      0 => '/Users/bazaid/Sites/sweProject/public/views/track.tpl',
      1 => 1555194424,
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
function content_5cb2623b2f6ba5_12210930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./include/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./include/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="main-wrapper container transition">
    <div id="main" class="main-conten transition">
        <section class="section">
            <div class="section-header">
                <h1>Track</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/">Home</a></div>
                    <div class="breadcrumb-item">Track</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Track your requests here</h2>
                <p class="section-lead">
                    Change information about yourself on this page.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-6 col-lg-6">

                        <div class="card profile-widget">

                            <div class="profile-widget-header">
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Requests</div>
                                        <div class="profile-widget-item-value"><?php echo sizeOf($_smarty_tpl->tpl_vars['requests']->value);?>
</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Completed Requests</div>
                                        <div class="profile-widget-item-value">
                                            <?php echo $_smarty_tpl->tpl_vars['CompletedCount']->value;?>

                                        </div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Pinding Requests</div>
                                        <div class="profile-widget-item-value"><?php echo $_smarty_tpl->tpl_vars['PindingCount']->value;?>
</div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-widget-description">
                                <?php if ($_smarty_tpl->tpl_vars['CompletedCount']->value > 0) {?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th>Type</th>
                                            <th>Created At</th>
                                            <th>Completed At</th>
                                            <th>Action</th>
                                        </tr>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requests']->value, 'request');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['request']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['request']->value['completed'] == 1) {?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['request']->value['service_id']]['name'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['request']->value['created_at'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['request']->value['completed_at'];?>
</td>
                                            <td>
                                                <a href="request.php?id=<?php echo $_smarty_tpl->tpl_vars['request']->value['id'];?>
"
                                                    class="btn btn-secondary">Detail</a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                        <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                                    </table>
                                </div>
                                <?php } else { ?>
                                <div class="text-muted text-center">
                                    No Requests Completed
                                </div>
                                <?php }?>


                            </div>
                            <div class="card-footer text-center">
                                <?php if ($_smarty_tpl->tpl_vars['CompletedCount']->value > 0) {?>
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                    </ul>
                                </nav>
                                <?php }?>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>On Going Requests</h4>
                            </div>
                            <div class="card-body">
                                <?php if ($_smarty_tpl->tpl_vars['PindingCount']->value > 0) {?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Created At</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requests']->value, 'request');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['request']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['request']->value['completed'] == 0) {?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['request']->value['service_id']]['name'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['request']->value['created_at'];?>
</td>
                                                <td>
                                                    <div class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['request']->value['status'];?>
</div>
                                                </td>
                                                <td><a href="request.php?id=<?php echo $_smarty_tpl->tpl_vars['request']->value['id'];?>
"
                                                        class="btn btn-secondary">Detail</a></td>
                                            </tr>
                                            <?php }?>
                                            <?php ob_start();
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                                        </tbody>
                                    </table>
                                </div>
                                <?php } else { ?>
                                <div class="text-muted text-center">
                                    No Requests Pending
                                </div>
                                <?php }?>

                            </div>
                            <div class="card-footer text-right">
                                <?php if ($_smarty_tpl->tpl_vars['PindingCount']->value > 0) {?>
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                    </ul>
                                </nav>
                                <?php }?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:./include/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
