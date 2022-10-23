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
                        <div class="card-body pb-0">
                            <form action="" method="post" id="searchForm">
                                <span class="all-err text-danger"></span>
                                <div class="row justify-content-center align-items-center g-2">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Select Category</label>
                                            <span class="sele-err text-danger"></span>
                                            <select class="form-select form-select-lg sele" name="sele" id="">
                                                <option selected value="">Select one</option>
                                                <option value="Videos">Videos</option>
                                                <option value="Channels">Channels</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <label for="" class="form-label">Search</label>
                                        <span class="search-err" style="color: crimson;"></span>
                                        <div class="input-group mb-2">
                                            <input type="text" name="search" class="form-control" placeholder="Searching....." id="searchVal">
                                            <input type="submit" name="searchBtn" value="search" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-body p-5">
                            <p class="text-muted mb-0 ps-3 data">About 12,546,90000 results (0.56 Seconds)</p>
                        </div>
                    </div>


                </div>
                <div class="row" id="searchData">
                    <div class="dimmer active d-none">
                        <div class="spinner"></div>
                    
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
<script src="../js/explore.js"></script>
<!-- <script src="../js/subs.js"></script> -->

<script>
    $(function() {
        $('body').on('click', '.subscription',(e) => {
            let id = e.currentTarget
            let subscribe = $(id).attr('id')
            // console.log(subscribe);

            // let Rules = '<i class="fa fa-book text-primary" style="font-size: 20px;"></i>'
            if (subscribe) {
                e.preventDefault();
                // console.log(subscribe);
                $.ajax({
                    type: "POST",
                    url: "../php/subscription.php",
                    data: {
                        subscribe: subscribe
                    },
                    success: function(response) {
                        if (response === 'impossible') {
                            Swal.fire({
                                icon: 'warning',
                                text: '<?= $grabuser['username']; ?> cannot subscribe to yourself',
                                title: 'Violation #1'

                            }).then(() => {
                                Swal.fire({
                                    icon: 'warning',
                                    text: 'Check Rules And Standards',
                                    title: 'Rules',
                                    showCancelButton: true,
                                    confirmButtonColor: "blue",
                                    cancelButtonColor: "red",
                                    confirmButtonText: 'Rules'

                                }).then(() => {
                                    // window.location
                                })
                            })
                        } else {
                            if (response === 'Subscribed') {
                                    // VerifyChannelsSubscribed()
                                    $('.subscription').addClass('d-none')
                                     $('.unsubscribe').removeClass('d-none')
                            } else {
                                console.log(response);
                            }
                        }
                    }
                });
            }
        })

    // VerifyChannelsSubscribed()
    // function VerifyChannelsSubscribed() {
    //     $.ajax({
    //         type: "POST",
    //         url: "../php/subscription.php",
    //         data: {action : 'FetchVerifiedSubs'},
    //         success: function (response) {
    //             if (response) {
    //                 $('.subscription').addClass('d-none')
    //                 $('.unsubscribe').removeClass('d-none')
    //             }else{
    //                 console.log(response);
    //             }
    //         }
    //     });
    // }

    })
</script>
</body>

</html>