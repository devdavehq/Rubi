<?php
    include_once '../php/view.php';
?>
<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Sash – Bootstrap 5 Admin & Dashboard Template</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
    <link href="../../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../../assets/css/transparent-style.css" rel="stylesheet">
    <link href="../../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../../assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="../../assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <div class="col col-login mx-auto">
                    <div class="text-center">
                        <!-- <img src="../../assets/images/brand/logo-white.png" class="header-brand-img" alt=""> -->
                    </div>
                </div>
                <!-- CONTAINER OPEN -->
                <div class="container-login100" id="logbx">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" id="form-master" method="POST">
                            <div class="text-center mb-4">
                                <img src="../../assets/images/users/21.jpg" alt="lockscreen image" class="avatar avatar-xxl brround mb-2">
                                <h4>Become A Creator</h4>
                            </div>
                            <span id="all-err" class="text-danger"></span>
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Email is required">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>

                                <input class="input100 border-start-0 ms-0 form-control" name="verify" type="email" placeholder="Enter email" id="email">
                            </div>
                            <div class="container-login100-form-btn pt-0">
                                <?php if(!isset($_SESSION['Account'])) : ?>
                                    <input type="submit" name="Submit" class="login100-form-btn btn-primary" value="Create Channel">
                                    <?php else : ?>
                                        <input type="submit" name="update" class="login100-form-btn btn-primary" value="Verify" id="verifyChannel">
                                <?php endif; ?>
                            </div>

                            <label class="login-social-icon"><span>OR</span></label>
                            <div class="d-flex justify-content-center">
                                <a href="javascript:void(0)">
                                    <div class="social-login me-4 text-center">
                                        <i class="fa fa-google"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="social-login me-4 text-center">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)">
                                    <div class="social-login text-center">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End GLOABAL LOADER -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="../../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/sweet.js"></script>
    <script src="../../assets/js/sweet-alert.js"></script>
    <!-- SHOW PASSWORD JS -->
    <script src="../../assets/js/show-password.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <!-- <script src="../../assets/plugins/p-scroll/perfect-scrollbar.js"></script> -->

    <!-- Color Theme js -->
    <script src="../../assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../../assets/js/custom.js"></script>
    <script>
        $(function() {
            $('#form-master').submit(e => {
                e.preventDefault()
                let arrange = $('#form-master').serialize() + "&action=BecomeCreator"
                if ($('#email').val() === '') {
                    $('#all-err').text('Email cannot be empty*')
                } else {
                    $.ajax({
                        type: "POST",
                        url: "../php/creatorverify.php",
                        data: arrange,
                        success: function(response) {
                            if (response === 'Verified') {
                                    window.location = 'index'
                                 console.log(response);
                            } else {
                                $('#all-err').text(response)
                                console.log(response);
                            }
                        }
                    });
                }
            })

            $('#verifyChannel').click(e => {
                e.preventDefault()
                let arrange = $('#form-master').serialize() + "&action=VerifyCreator"
                if ($('#email').val() === '') {
                    $('#all-err').text('Email cannot be empty*')
                } else {
                    $.ajax({
                        type: "POST",
                        url: "../php/creatorverify.php",
                        data: arrange,
                        success: function(response) {
                            if (response === 'Verified') {
                                checkLogged($('#email').val())
                            } else {
                                $('#all-err').text(response)
                                console.log(response);
                            }
                        }
                    });
                }
            })

             

            function checkLogged(value) { 
                $.ajax({
                    type: "POST",
                    url: "../php/creatorverify.php",
                    data: {action : 'checkedLogged'},
                    success: function (response) {
                        if (response === 'Right') {
                            // window.location = 'index'
                            $('#logbx').css({display: 'none'})
                            Swal.fire({
                                    icon: 'success',
                                    text: 'Welcome back  '+value,
                                    title: 'Welcome'

                                }).then(() => {
                                    window.location = 'index'
                                })
                        }else{
                            $('#all-err').text("Please Login")
                        }
                    }
                });
             }

        });
    </script>
</body>
</html>