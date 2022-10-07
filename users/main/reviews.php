<?php include_once  'includes/header.php'; ?>

<div class="page">
    <div class="page-main">
        <!-- app-Header -->
        <?php include_once  'includes/sidenav.php'; ?>
        <?php include_once  'includes/topnav.php'; ?>

        <div class="main-content app-content mt-0">
            <div class="side-app">
                <div class="row">
                    <div class="card text-start mt-9" id="reviews">
                        <div class="card-header">
                            <h3 class="card-title">Leave A Review</h3>
                        </div>

                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Review</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="review">
                            <div class="form-group">
                                <textarea rows="5" class="form-control" name="reviews" id="rev"></textarea>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" name="submitRev" class="btn btn-primary btn-space mb-0" style="width: 100%;">Leave A Review</button>
                            </div>
                            <span id="rev-err"></span>
                        </form>
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
<script>
     $('#review').submit(function(e) {
        e.preventDefault();
        if ($('#rev').val() === '') {
            $('#rev-err').text('Please Leave a Review First*')
        } else {
            $.ajax({
                type: "POST",
                url: "../php/userscode.php",
                data: $('#review').serialize() + "&action=leaveReview",
                success: function(response) {
                    console.log(response)
                    Swal.fire({
                        icon: 'success',
                        text: 'Thank You For Leaving A review',
                        title: '<?= $grabuser['username']; ?>'

                    }).then(() => {
                        GetReviews('#reviews')
                        // $('#postedQue').html(response)
                        // $('#reviews')[0].reset()
                    })

                }
            });
        }
    });
</script>
<script src="../js/reviews.js"></script>
</body>

</html>