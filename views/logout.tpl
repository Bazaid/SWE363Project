{include file='./include/header.tpl'}
{include file='./include/nav.tpl'}
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
    {literal}
    <script>
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
    </script>
    {/literal}
    {include file='./include/footer.tpl'}