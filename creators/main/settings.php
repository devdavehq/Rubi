<?php include_once  'includes/baseurl.php'; ?>
<?php include_once  'includes/header.php'; ?>

<div class="page">
    <div class="page-main">
        <!-- app-Header -->
        <?php include_once  'includes/sidenav.php'; ?>


        <?php include_once  'includes/topnav.php'; ?>

        <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header mt-9">
                            <h1 class="page-title">Edit Profile</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Edit Password</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center chat-image mb-5">
                                            <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                                <a class="" href="profile.html"><img alt="avatar" src="../../assets/images/users/7.jpg" class="brround"></a>
                                            </div>
                                            <div class="main-chat-msg-name">
                                                <a href="profile.html">
                                                    <h5 class="mb-1 text-dark fw-semibold">Percy Kewshun</h5>
                                                </a>
                                                <p class="text-muted mt-0 mb-0 pt-0 fs-13">Web Designer</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Current Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="password" placeholder="Current Password">
                                            </div>
                                            <!-- <input type="password" class="form-control" value="password"> -->
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">New Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="password" placeholder="New Password">
                                            </div>
                                            <!-- <input type="password" class="form-control" value="password"> -->
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="password" placeholder="Confirm Password">
                                            </div>
                                            <!-- <input type="password" class="form-control" value="password"> -->
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                                        <a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                                <div class="card panel-theme">
                                    <div class="card-header">
                                        <div class="float-start">
                                            <h3 class="card-title">Contact</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="card-body no-padding">
                                        <ul class="list-group no-margin">
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-mail"></i></a>
                                                </div>
                                                <a href="javascript:void(0)" class="my-auto">support@demo.com</a>
                                            </li>
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-globe"></i></a>
                                                </div>
                                                <a href="javascript:void(0)" class="my-auto">www.abcd.com</a>
                                            </li>
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-phone"></i></a>
                                                </div>
                                                <a href="javascript:void(0)" class="my-auto">+125 5826 3658</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Profile</h3>
                                    </div>
                                    <div class="card-body">
                                    <form action="" method="post">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputname">Channel name</label>
                                                        <input type="text" class="form-control" id="exampleInputname" placeholder="Channel Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputname1">Sub name</label>
                                                        <input type="text" class="form-control" id="exampleInputname1" placeholder="Channel SubName">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputnumber">Contact Number</label>
                                                <input type="number" class="form-control" id="exampleInputnumber" placeholder="Contact number">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">About Channel</label>
                                                <textarea class="form-control" rows="6">My bio.........</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Channel id</label>
                                                <input class="form-control" placeholder="http://splink.com">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Website address</label>
                                                <input class="form-control" placeholder="http://splink.com">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-end">
                                        <input type="submit" class="btn btn-success my-1" value="Update Profile">
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Delete Account</div>
                                    </div>
                                    <div class="card-body">
                                        <p>Its Advisable for you to request your data to be sent to your Email.</p>
                                        <label class="custom-control custom-checkbox mb-0">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                            <span class="custom-control-label">Yes, Send my data to my Email.</span>
                                        </label>
                                    </div>
                                    <div class="card-footer text-end">
                                        <a href="javascript:void(0)" class="btn btn-primary my-1">Deactivate</a>
                                        <a href="javascript:void(0)" class="btn btn-danger my-1">Delete Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!--CONTAINER CLOSED -->

                </div>
            </div>
    </div>
</div>
</div>





<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<?php include_once  'includes/footer.php'; ?>
</body>

</html>