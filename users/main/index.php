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
                                <div class="card card-headpills d-flex mt-5">
                                    <div class="card-header border-bottom">
                                        <ul class="nav nav-pills card-header-pills" id="Gettags">
                                            
                                            <li class="nav-item">
                                                <a class="nav-link active recent " data-bs-toggle="tab" href="#activepills">All</a>
                                            </li>
                                            
                                            <!-- <li class="nav-item">
                                                <a class="nav-link recent" data-bs-toggle="tab" href="#linkpills">typescript</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link recent" data-bs-toggle="tab" href="#linkpills">node</a>
                                            </li> -->
                                         
                                        </ul>
                                    </div>

                                </div>
                            
                        </div>  
                        <!-- PAGE-HEADER END -->

                        <!-- VIDEOS -->
                        <div class="row" id="AllVideos">
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

    <script src="../js/index.js"></script>
    
</body>
</html>