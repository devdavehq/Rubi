<?php include_once  'includes/header.php'; ?>

<div class="page">
    <div class="page-main">
        <!-- app-Header -->

        <!-- /app-Header -->
        <?php include_once  'includes/sidenav.php'; ?>
        <?php include_once  'includes/topnav.php'; ?>


        <div class="main-content app-content mt-0">
            <div class="side-app">
                <div class="row" id="subsCribers">
                  

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
<!-- <script src="../js/subs.js"></script> -->
<script>
    $(function () {
        FetchAllSubs()
    function FetchAllSubs() {
        $.ajax({
            type: "POST",
            url: "../php/subscription.php",
            data: {action : 'FetchAllSubs'},
            success: function (response) {
                if (response) {
                    console.log(response);
                    $('#subsCribers').html(response)
                }
            }
        });
    }
    });
</script>
</body>

</html>