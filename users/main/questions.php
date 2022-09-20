<?php include_once  'includes/header.php'; ?>

    <div class="page">
        <div class="page-main">
            <!-- app-Header -->
            <?php include_once  'includes/sidenav.php'; ?>
            <?php include_once  'includes/topnav.php'; ?>

            <div class="main-content app-content mt-0">
                <div class="side-app">
                       <div class="row">
                            <div class="card mt-9">
                                <div class="card-header">
                                    <h3 class="card-title">Ask question</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <textarea rows="5" class="form-control"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer ">
                                        <button class="btn btn-primary btn-space mb-0" style="width: 100%;">Ask question</button>
                                </div>
                            </div>

                            <div class="card text-start">
                              <div class="card-body">
                                  <div class="media-body overflow-visible">
                                      <div class="border mb-5 p-4 br-5">
                                          <nav class="nav float-end">
                                              <div class="dropdown">
                                                  <a class="nav-link text-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                  <div class="dropdown-menu dropdown-menu-end" style="">
                                                      <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit mx-1"></i> Edit</a>
                                                      <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-corner-up-left mx-1"></i> Reply</a>
                                                      <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-flag mx-1"></i> Report Abuse</a>
                                                      <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 mx-1"></i> Delete</a>
                                                  </div>
                                              </div>
                                          </nav>
                                          <a href="answer.html"><h5 class="mt-0">Gavin Murray</h5></a>
                                          <span><i class="fe fe-thumb-up text-danger"></i></span>
                                          <a href="answer.html"><p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter
                                              what industry you’re working in, as a blogger, you should live and die by this statement.</p></a>
                                          <a class="like" href="javascript:;">
                                              <span class="badge btn-danger-light rounded-pill py-2 px-3">
                                                  <i class="fe fe-heart me-1"></i>0</span>
                                          </a>
                                          <span class="reply" id="1">
                                              <a href="javascript:;"><span class="badge btn-primary-light rounded-pill py-2 px-3"><i class="fe fe-corner-up-left mx-1"></i>Reply</span></a>
                                          </span>
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