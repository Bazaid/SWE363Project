{include file='./include/header.tpl'}
{include file='./include/nav.tpl'}
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
                            <form action="#" method="POST" class="needs-validation" novalidate="">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Building Number</label>
                                            <input name="building" type="text" class="form-control" value="{$user->building}"
                                                required>
                                            <div class="invalid-feedback">
                                                Please fill in the building number
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Room Number</label>
                                            <input name="room" type="text" class="form-control" value="{$user->room}"  required>
                                            <div class="invalid-feedback">
                                                Please fill in the room number
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-7 col-12">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" value="{$user->email}" required>
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

    {include file='./include/footer.tpl'}