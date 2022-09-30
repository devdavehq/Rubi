<?php include_once  'includes/header.php'; ?>

    <div class="page">
        <div class="page-main">
            <!-- app-Header -->
      
            <?php include_once  'includes/sidenav.php'; ?>
             <?php include_once  'includes/topnav.php'; ?>
            <?php  $search = "<i class='fa faa-search'></i>"  ?>
            <div class="main-content app-content mt-0">
                <div class="side-app">
                        <div class="row">
                            <div class="card mt-9">
                                <div class="card-body pb-0">
                                    <form action="" method="post">
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control" placeholder="Searching.....">
                                                <input type="submit" name="search" value="search" class="btn btn-primary">
                                            </div>
                                    </form>
                                </div>
                                <div class="card-body p-5">
                                    <p class="text-muted mb-0 ps-3">About 12,546,90000 results (0.56 Seconds)</p>
                                </div>
                            </div>
                            <div class="card channel">
                                <div class="card-body d-flex Subscriptions">
                                    <div class="d-flex">
                                        <img src="../../media/rubyimgs/dell-LXI5kqCdEcE-unsplash.jpg" alt="" class="rounded" width="70px" height="70px">
                                        <div class="d-flex subs">
                                            <a href='' class="text-light mt-3 creator-name">aaron schultz<i class="fa fa-check-circle text-primary verified"></i></a>
                                            <p class="text-default">subscribers 10M</p>
                                        </div>
                                     </div> 
                                        <div class="sub-btn">
                                            <a href="" class="btn btn-primary text-light subscribe">subscribe <i class="fa fa-qq"></i></a>
                                        </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <img class="card-img-top" src="../../media/rubyimgs/dell-LXI5kqCdEcE-unsplash.jpg" alt="Title">
                                    <div class="card-body">
                                        <h4 class="card-title text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas a.</h4>
                                
                                        <div class="d-flex">
                                            <img src="../../media/rubyimgs/dell-LXI5kqCdEcE-unsplash.jpg" alt="" class="rounded" width="40px" height="40px">
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
                        </div>
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