<?php
/* Smarty version 3.1.33, created on 2019-04-11 22:50:37
  from '/Users/bazaid/Sites/sweProject/public/views/pages/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cafc4bd1bf496_69168025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e37fa4728896fc2bbc7f41d162c15348aa243994' => 
    array (
      0 => '/Users/bazaid/Sites/sweProject/public/views/pages/home.tpl',
      1 => 1555022996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../nav.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5cafc4bd1bf496_69168025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:../nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="main-wrapper container transition">
  <section id="sidebar">
    <div id="mySidebar" class="sidebar transition">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <img class="img-thumbnail w-75 ml-3"
        src="https://blackrockdigital.github.io/startbootstrap-freelancer/img/portfolio/game.png" alt="">
      <div class="d-flex justify-content-center">
        <h5 clss="text-center">Room Unlock</h5>
      </div>
      <p>"Description"</p>

      <form>
        <div class="form-group">
          <label for="desc">Information</label>
          <textarea class="form-control" id="desc" rows="3"></textarea>
        </div>
      </form>
      <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </section>
  
  <div id="main" class="main-conten transition">
    <section class="section portfolio">
      <div class="section-header">
        <h1>Services</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item">Home</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Welcome to KFUPM Maintenance</h2>
        <p class="section-lead">You can find our services listed down below.</p>
        <div class="card">
          <div class="card-header">
            <h4>Available Services</h4>
          </div>
          <div class="card-body">

            <div class="row">

              <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="javascript:void(0)" onclick="toggle()">
                  <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                    <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                      <p>Unlock Room</p>
                    </div>
                  </div>
                  <figure>
                    <img class="img-fluid"
                      src="https://blackrockdigital.github.io/startbootstrap-freelancer/img/portfolio/game.png" alt="">
                  </figure>

                </a>
              </div>
              <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="javascript:void(0)" onclick="toggle()">
                  <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                    <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                      <p>AC Problem</p>
                    </div>
                  </div>
                  <img class="img-fluid"
                    src="https://blackrockdigital.github.io/startbootstrap-freelancer/img/portfolio/cabin.png" alt="">
                </a>
              </div>
              <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="javascript:void(0)" onclick="toggle()">
                  <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                    <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                      <p>Paint Room</p>

                    </div>
                  </div>
                  <img class="img-fluid"
                    src="https://blackrockdigital.github.io/startbootstrap-freelancer/img/portfolio/cake.png" alt="">
                </a>
              </div>
              <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="javascript:void(0)" onclick="toggle()">
                  <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                    <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                      <p>Clean Room</p>
                    </div>
                  </div>
                  <img class="img-fluid"
                    src="https://blackrockdigital.github.io/startbootstrap-freelancer/img/portfolio/cabin.png" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="card-footer bg-whitesmoke">

          </div>
        </div>
      </div>
    </section>
  </div>

          <?php echo '<script'; ?>
>
            function toggle() {
                closeNav()
                setTimeout(function() { 
                    $("#mainNav").removeClass("navbar-expand-lg")

                    $("#mySidebar").addClass("w-25")
                    $("#mySidebar").addClass("border border-right-2")


                    $("#mainNav").css("marginLeft","20rem")
                    $("#main").css("marginLeft","20rem")
                } ,730)
            
            }

            function closeNav() {
                $("#mySidebar").css("border","none")
                $("#mySidebar").remove("ml-25")

                $("#mySidebar").removeClass("w-25")
                $("#mySidebar").removeClass("border border-right-2")

                $("#mainNav").addClass("navbar-expand-lg")

                $("#mainNav").css("marginLeft","0")
                $("#main").css("marginLeft","0")


                
            }
        <?php echo '</script'; ?>
>
  <?php $_smarty_tpl->_subTemplateRender('file:../footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
