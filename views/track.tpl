{include file='./include/header.tpl'}
{include file='./include/nav.tpl'}
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
                                        <div class="profile-widget-item-value">
                                            {if isset($requests)}
                                            {sizeOf($requests)}
                                            {else}
                                            0
                                            {/if}
                                        </div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Completed Requests</div>
                                        <div class="profile-widget-item-value">
                                            {$CompletedCount}
                                        </div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Pinding Requests</div>
                                        <div class="profile-widget-item-value">{$PindingCount}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="profile-widget-description">
                                {if $CompletedCount > 0}
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th>Type</th>
                                            <th>Created At</th>
                                            <th>Completed At</th>
                                            <th>Action</th>
                                        </tr>

                                        {foreach $requests as $request}
                                        {if $request['completed'] eq 1 }
                                        <tr>
                                            <td>{$services[$request['service_id']]['name']}</td>
                                            <td>{$request['created_at']}</td>
                                            <td>{$request['completed_at']}</td>
                                            <td>
                                                <a href="request.php?id={$request['id']}"
                                                    class="btn btn-secondary">Detail</a>
                                            </td>
                                        </tr>
                                        {/if}
                                        {{/foreach}}
                                    </table>
                                </div>
                                {else}
                                <div class="text-muted text-center">
                                    No Requests Completed
                                </div>
                                {/if}


                            </div>
                            <div class="card-footer text-center">
                                {if $CompletedCount > 0}
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>

                                    </ul>
                                </nav>
                                {/if}
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>On Going Requests</h4>
                            </div>
                            <div class="card-body">
                                {if $PindingCount > 0}
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
                                            {foreach $requests as $request}
                                            {if $request['completed'] eq 0 }
                                            <tr>
                                                <td>{$services[$request['service_id']]['name']}</td>
                                                <td>{$request['created_at']}</td>
                                                <td>
                                                    <div class="badge badge-danger">
                                                        Pending
                                                    </div>
                                                </td>
                                                <td><a href="request.php?id={$request['id']}"
                                                        class="btn btn-primary">Detail</a></td>
                                            </tr>
                                            {/if}
                                            {{/foreach}}
                                        </tbody>
                                    </table>
                                </div>
                                {else}
                                <div class="text-muted text-center">
                                    No Requests Pending
                                </div>
                                {/if}

                            </div>
                            <div class="card-footer text-right">
                                {if $PindingCount > 0}
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item active"><a class="page-link" href="#">1
                                                <span class="sr-only">(current)</span></a>
                                        </li>
                                    </ul>
                                </nav>
                                {/if}

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>


    {include file='./include/footer.tpl'}