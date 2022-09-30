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
                                <div class="card card-headpills d-flex mt-3">
                                    <div class="card-header border-bottom">
                                    <nav class="breadcrumb">
                                        <a class="breadcrumb-item text-warning" href="#" style="font-size: 15px;">Deleted <i class="fa fa-trash text-warning"></i></a>
                                    </nav>
                                    </div>

                                </div>
                            
                        </div>  
                        <!-- PAGE-HEADER END -->

                        <!-- VIDEOS -->
                        <div class="row">
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Posts</h3>
                            </div>
                            <div class="card-body">
                                <button id="" class="btn btn-primary mb-4" style="float: right;" data-bs-toggle="modal" data-bs-target="#extralargemodal">create post</button>
                                <div class="table-responsive">
                                    <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Thumbnail</th>
                                                <th>video</th>
                                                <th>code</th>
                                                <th>Description</th>
                                                <th>views</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="fetchTable">
                                            <tr>
                                                <td><a href="" class="text-white">how to upload with php</a></td>
                                                <td>
                                                    <img src="../../media/rubyimgs/dell-LXI5kqCdEcE-unsplash.jpg" alt="" width="100px">
                                                </td>
                                                <td>
                                                    <video src="../../media/rubyimgs/rubi's gat your back always (1).mp4" controls style="width: 120px;pointer-events:all;"></video>
                                                </td>
                                                <td>code available</td>
                                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, laborum.</td>

                                                <td><a href="" class="text-white">10,000</a></td>
                                                <td>
                                                    <button id="" type="button" class="btn btn-sm btn-primary">
                                                        <span class="fa fa-edit" data-bs-toggle="tooltip" data-bs-placement="left" title="edit"></span>
                                                    </button>
                                                    <button id="" type="button" class="btn  btn-sm btn-danger" style="margin-left: 10px;">
                                                        <span class="fa fa-trash" data-bs-toggle="tooltip" data-bs-placement="right" title="delete"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                                <!-- VIDEO MODAL -->
           

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