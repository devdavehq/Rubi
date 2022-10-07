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
                        <form method="POST" id="question">
                            <div class="card-body">

                                <div class="form-group">
                                    <textarea name="questions" value="questions" rows="5" class="form-control" id="que"></textarea>
                                </div>
                                <span id="que-err"></span>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary btn-space mb-0" style="width: 100%;">Ask question</button>
                            </div>
                        </form>
                    </div>

                    <div class="card text-start" id="postedQue">

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
<script src="../js/questionss.js"></script>
</body>

</html>