<?php include_once  'includes/baseurl.php'; ?>
<?php include_once  'includes/header.php'; ?>

<div class="page">
    <div class="page-main">
        <!-- app-Header -->
        <?php include_once  'includes/sidenav.php'; ?>


        <?php include_once  'includes/topnav.php'; ?>

        <div class="main-content app-content mt-0">
            <div class="side-app">
                <!-- PAGE-HEADER END -->
                <div class="page-header mt-8">
                    <h1 class="page-title">Dashboard</h1>
                </div>
                <!-- VIDEOS -->
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-0">
                        <div class="card overflow-hidden">
                            <div class="card-body pb-0">
                                <div class="float-start">
                                    <p class="mb-1">Subscribers</p>
                                    <h2 class="counter mb-0">7,865</h2>
                                </div>
                                <div class="float-end">
                                    <span class="mini-stat-icon bg-info"><i class="fa fa-group"></i></span>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
                                <div class="chart-wrapper overflow-hidden">
                                    <canvas id="areaChart1" class="areaChart overflow-hidden chart-dropshadow-primary"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-0">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="float-start">
                                    <p class="mb-1">Total Posts</p>
                                    <h2 class="counter mb-0">5,974</h2>
                                </div>
                                <div class="float-end">
                                    <span class="mini-stat-icon bg-danger"><i class="fa fa-cubes"></i></span>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
                                <div class="chart-wrapper">
                                    <canvas id="areaChart4" class="areaChart chart-dropshadow-danger"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-0">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="float-start">
                                    <p class="mb-1">Total Views</p>
                                    <h2 class="counter mb-0">4,543</h2>
                                </div>
                                <div class="float-end">
                                    <span class="mini-stat-icon bg-warning"><i class="fa fa-eye"></i></span>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
                                <div class="chart-wrapper">
                                    <canvas id="areaChart3" class="areaChart chart-dropshadow-warning"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3 mt-0">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="float-start">
                                    <p class="mb-1">Total Income</p>
                                    <h2 class="counter mb-0">8,678</h2>
                                </div>
                                <div class="float-end">
                                    <span class="mini-stat-icon bg-success"><i class="fa fa-money"></i></span>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-0 border-top-0 overflow-hidden">
                                <div class="chart-wrapper">
                                    <canvas id="areaChart2" class="areaChart chart-dropshadow-success"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <!-- VIDEO MODAL -->


                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">POSTS</h3>
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
                </div>
                <?php include_once  'includes/create-post.php'; ?>
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