<?php include_once  'includes/header.php'; ?>

    <div class="page">
        <div class="page-main">
    
        <?php include_once  'includes/sidenav.php'; ?>
        <?php include_once  'includes/topnav.php'; ?>



            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->

                        <!-- PAGE-HEADER END -->

                        <!-- VIDEOS -->
                        <div class="row" id="user-profile">
                            <div class="col-lg-12">
                                <div class="card mt-9">
                                    <div class="card-body">
                                        <div class="wideget-user mb-2">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="row">
                                                        <div class="panel profile-cover">
                                                            <div class="profile-cover__action bg-img"></div>
                                                            <div class="profile-cover__img">
                                                                <div class="profile-img-1">
                                                                    <img src="../assets/images/users/21.jpg" alt="img">
                                                                </div>
                                                                <div class="profile-img-content text-dark text-start">
                                                                    <div class="text-dark">
                                                                        <h3 class="h3 mb-2">Percy Kewshun <i class="fa fa-check-circle"></i></h3>
                                                                        <h5 class="text-muted">subscribers 10M</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="btn-profile">
                                                                <a href="" class="btn btn-primary mt-1 mb-1"><span>subscribe</span><i class="fa fa-qq"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="px-0 px-sm-4">
                                                            <div class="social social-profile-buttons mt-5 float-end">
                                                                <div class="mt-3">
                                                                    <a class="social-icon text-primary" href="https://www.facebook.com/" target="_blank"><i class="fa fa-github"></i></a>
                                                                    <a class="social-icon text-primary" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a class="social-icon text-primary" href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                                   
                                       
                            </div>

                            <div class="col-lg-12">
                                <div class="card text-start">
                                  <div class="card-body">
                                    <h4 class="card-title">Videos</h4>
                                  </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <img class="card-img-top" src="../../others/rubyimgs/arnold-francisca-f77Bh3inUpE-unsplash.jpg" alt="Title">
                                            <div class="card-body">
                                                <h4 class="card-title text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas a.</h4>
                                        
                                                <div class="d-flex">
                                                    <img src="../../others/rubyimgs/walkator-klMii3cR9iI-unsplash.jpg" alt="" class="rounded" width="40px" height="40px">
                                                    <a href='' class="text-light mt-3 creator">aaron schultz</a>
                                                </div>
                                                <a  href='' class="card-title btn btn-primary mt-2 increase" data-bs-toggle="modal" data-bs-target="#extralargemodal">
                                                    Watch now
                                                </a>
                                            </div>
                                            <div class="card-footer">
                                                <div class="d-flex codeAvail">
                                                    2 min ago
                                                <div class="text-center text-light bg-primary font">code avaliable</div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- VIDEO MODAL -->
                                    <?php include_once  'includes/modal.php'; ?>

                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                    
                       
                       
                    
                    </div>
                    <!-- CONTAINER END -->
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