<?php include_once  'includes/baseurl.php'; ?>
<?php include_once  'includes/header.php'; ?>

    <div class="page">
        <div class="page-main">
            <!-- app-Header -->
          <?php include_once  'includes/sidenav.php'; ?>


          <?php include_once  'includes/topnav.php'; ?>

            <div class="main-content app-content mt-0">
                <div class="side-app">

                        <div class="page-header">
                                <div class="card card-headpills d-flex mt-9">
                                    <div class="card-header border-bottom">
                                        <ul class="nav nav-pills card-header-pills">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#activepills">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#linkpills">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#disablepills" tabindex="-1" aria-disabled="true">Disabled</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#disablepills" tabindex="-1" aria-disabled="true">Disabled</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#disablepills" tabindex="-1" aria-disabled="true">Disabled</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#disablepills" tabindex="-1" aria-disabled="true">Disabled</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#disablepills" tabindex="-1" aria-disabled="true">Disabled</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#disablepills" tabindex="-1" aria-disabled="true">Disabled</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            
                        </div>  
                        <!-- PAGE-HEADER END -->

                        <!-- VIDEOS -->
                        <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card">
                                        <img class="card-img-top" src="../../media/rubyimgs/arnold-francisca-f77Bh3inUpE-unsplash.jpg" alt="Title">
                                        <div class="card-body">
                                            <h4 class="card-title text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas a.</h4>
                                    
                                            <div class="d-flex">
                                                <img src="../../media/rubyimgs/walkator-klMii3cR9iI-unsplash.jpg" alt="" class="rounded" width="40px" height="40px">
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
                    <!-- CONTAINER END -->
                </div>
            </div>

        </div> 
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <?php include_once  'includes/footer.php'; ?>

    <script>



    </script>
</body>
</html>