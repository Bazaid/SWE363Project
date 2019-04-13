{include file='./include/header.tpl'}
{include file='./include/nav.tpl'}
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
                                <h4>{$service->name}</h4>
                                <div class="badge">{$request->status}</div>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                
                                    <div class="col-md-7 col-12">
                                        <label>Info</label>
                                        <p>{$request->info}</p>
                                    </div>

                                </div>

                            </div>
                            {if $request->completed eq 0}
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                            {/if}


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {include file='./include/footer.tpl'}