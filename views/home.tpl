{include file='./include/header.tpl'}
{include file='./include/nav.tpl'}
<div class="main-wrapper container transition">

  <div class="card-body">
    <div id="alertCard" class="alert alert-dismissible fade d-none">
      <div class="alert-body">
        <button class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
        <p id="alertMsg"></p>
      </div>
    </div>

    <section id="sidebar">
      <div id="mySidebar" class="sidebar transition">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <img id="sidebar_img" class="img-thumbnail w-75 ml-3" src="" alt="">
        <div class="d-flex justify-content-center">
          <h5 id="service_name" class="text-center">Name</h5>
        </div>
        <p id="description">"Description"</p>

        <form>
          <div class="form-group">
            <label for="desc">Information</label>
            <textarea class="form-control" id="desc" rows="3"></textarea>
          </div>
        </form>
        <div class="d-flex justify-content-end">
          {$logg = Session::isLoggedIn()}
          {if $logg eq 1}
          <button type="button" class="btn btn-primary" onclick="sendRequest()">Submit</button>
          {else}
          <button type="button" class="btn btn-primary disabled">Submit</button>
          {/if}
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
                {foreach $services as $service}
                <div class="col-md-6 col-lg-4">
                  <a class="portfolio-item d-block mx-auto" href="javascript:void(0)"
                    onclick="toggle({$service['id']})">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                      <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                        <p>{$service['name']}</p>
                      </div>
                    </div>
                    <figure>
                      <img class="img-fluid" src="/assets/img/{$service['logo']}" alt="">
                    </figure>

                  </a>
                </div>
                {/foreach}

              </div>
            </div>

            <div class="card-footer bg-whitesmoke">

            </div>
          </div>
        </div>
      </section>
    </div>
    {literal}

    <script>
      var serviceId;

      function toggle(id) {
        closeNav()
        serviceId = id;
        $.ajax({
          url: "getservice.php",
          data: {
            service_id: id
          },
          method: 'GET',
          success: function (rsp) {
            let service = JSON.parse(rsp)
            $("#sidebar_img").attr("src", "/assets/img/" + service[0].logo)

            $("#service_name").html(service[0].name)
            $("#description").html(service[0].description)
            setTimeout(function () {
              $("#mainNav").removeClass("navbar-expand-lg")

              $("#mySidebar").addClass("w-25")
              $("#mySidebar").addClass("border border-right-2")


              $("#mainNav").css("marginLeft", "20rem")
              $("#main").css("marginLeft", "20rem")
            }, 800)
            console.log(rsp)

            return;
          }
        });



      }

      function closeNav() {
        $("#mySidebar").css("border", "none")
        $("#mySidebar").remove("ml-25")

        $("#mySidebar").removeClass("w-25")
        $("#mySidebar").removeClass("border border-right-2")

        $("#mainNav").addClass("navbar-expand-lg")

        $("#mainNav").css("marginLeft", "0")
        $("#main").css("marginLeft", "0")
      }
    </script>
    {/literal}

    {if $logg eq 1}
    {literal}
    <script>
      function sendRequest() {
        $.ajax({
          url: "postRequest.php",
          data: {
            service_id: serviceId,
            info: $("#desc").val()
          },
          method: 'POST',
          success: function (rsp) {
            $("#alertCard").addClass("alert-info")
            $("#alertCard").removeClass("alert-danger")

            $("#alertMsg").html("Your Request has been sent.");
            $("#alertCard").removeClass("d-none")
            $("#alertCard").addClass("show")
            closeNav();
            console.log(rsp)

            return;
          },
          error: function (xhr, ajaxOptions, thrownError) {
            $("#alertCard").removeClass("d-none")

            $("#alertMsg").html("Error, Try again!.");
            $("#alertCard").removeClass("alert-info")
            $("#alertCard").addClass("alert-danger")
            $("#alertCard").addClass("show")

            closeNav();
      
          }
        });

      }
    </script>
    {/literal}
    {/if}

    {include file='./include/footer.tpl'}