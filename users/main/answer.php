<?php include_once  'includes/header.php'; ?>

    <div class="page">
        <div class="page-main">
        <?php include_once  'includes/sidenav.php'; ?>


        <?php include_once  'includes/topnav.php'; ?>
        
            <div class="main-content app-content mt-0">
                <div class="side-app">
                        <!-- VIDEOS -->
                        <div class="row">
                            <div class="card mt-9">
                                <div class="card-header">
                                    <h3 class="card-title">Reply to user question</h3>
                                </div>
                                <div class="card-body">
                                    <div class="email-media">
                                        <div class="mt-0 d-sm-flex">
                                            <img class="me-2 rounded-circle avatar avatar-lg" src="../assets/images/users/6.jpg" alt="avatar">
                                            <div class="media-body pt-0">
                                                <div class="media-title text-dark font-weight-semibold mt-1">Cherry Blossom</div>
                                                <small class="me-2 d-md-none">June 15 , 2021 10:30 AM</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="eamil-body mt-5">
                                        <h6>Hi Sir/Madam</h6><br><br>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                        <p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To
                                            take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
                                        <br><br>
                                        <p class="mb-0">Thanking you Sir/Madam</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <h3 class="card-title">Reply</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <textarea rows="5" class="form-control"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer ">
                                        <button class="btn btn-primary btn-space mb-0" style="width: 100%;">Reply</button>
                                </div>

                                <div class="card-body">
                                    <div class="media-body overflow-visible">
                                        <div class="border mb-5 p-4 br-5">
                                           
                                            <?php include_once  'includes/editable.php'; ?>

                                            <a href="answer.php"><h5 class="mt-0">Gavin Murray</h5></a>
                                            <span><i class="fe fe-thumb-up text-danger"></i></span>
                                            <p class="font-13 text-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter
                                                what industry you’re working in, as a blogger, you should live and die by this statement.</p>
                                            <a class="like" href="javascript:;">
                                                <span class="badge btn-danger-light rounded-pill py-2 px-3">
                                                    <i class="fe fe-heart me-1"></i>0</span>
                                            </a>
                                           
                                        </div>
                                  </div>
                                </div>
                            </div>                    
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