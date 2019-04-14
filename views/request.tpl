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
                                {if $request->completed eq 0}
                                <div class="badge badge-danger">
                                    Pending
                                </div>
                                {else}
                                <div class="badge badge-success">
                                    Closed
                                </div>
                                {/if}
                                <div class="text-muted text-center ml-1">
                                    <span class="badge badge-secondary">
                                        Building: {$request->building} Room: {$request->room}
                                    </span>
                                </div>
                            </div>
                            <div class="card-body">
                                {$user = Session::get("user")}
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <fieldset>
                                            <legend>User Information:</legend>
                                            <span>
                                                <p type="text-muted text-center">Name: {$user->first_name}
                                                    {$user->last_name} <br></p>
                                            </span>



                                        </fieldset>
                                        <fieldset>
                                            <legend>Problem Description:</legend>
                                            <label for="info">Information</label>
                                            <input id="info" type="text" class="form-control" name="info"
                                                value="{$request->info}" disabled />
                                        </fieldset>

                                    </div>

                                    {if $request->completed eq 0}
                                    <fieldset>
                                        <legend>Comments:</legend>
                                        {if !isset($commm)}
                                        <p class="text-muted text-center">No comments posted.<p>
                                                {else}


                                                {foreach $commm as $comment}
                                                <div class="form-group">
                                                    <label for="comment">By {$comment['user_name']}:</label>
                                                    <input class="form-control" id="comment1"
                                                        value="{$comment['comment']}" rows="4" disabled />
                                                </div>
                                                {/foreach}

                                                {/if}

                                                <div class="form-group">
                                                    <label for="comment">Write a Comment</label>
                                                    <textarea class="form-control" id="comment" name="comment"
                                                        rows="4"></textarea>
                                                </div>
                                    </fieldset>
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal">Close</button>

                                    </div>
                                    {/if}
                                </form>
                            </div>
                            {if $request->completed eq 0}

                            {/if}


                        </div>
                    </div>
                </div>
            </div>
        </section>
           <div class="modal fade" tabindex="-1" id="exampleModal" role="dialog">
        <div class="modal-dialog m-0" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Do you want to close this request?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="closeRequest()" data-dismiss="modal">Yes, Close</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var requestId = {$requestId}
    </script>
    {literal}
    <script>
        function closeRequest() {
        $.ajax({
          url: "closerequest.php",
          data: {
            request_id: requestId
          },
          method: 'GET',
          success: function (rsp) {
            console.log('deleted')
            window.location.href = "index.php";
            return;
          },
          error: function (xhr, ajaxOptions, thrownError) {
              console.log('not deleted')
      
          }
        });
        }
    </script>
    {/literal}
 

    {include file='./include/footer.tpl'}