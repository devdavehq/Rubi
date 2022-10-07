<?php include_once  'includes/header.php'; ?>

    <div class="page">
        <div class="page-main">
            <!-- app-Header -->
      
            <?php include_once  'includes/sidenav.php'; ?>
             <?php include_once  'includes/topnav.php'; ?>
           
            <div class="main-content app-content mt-0">
                <div class="side-app">
                        <div class="row" id="searchData">
                            <div class="card mt-9">
                                <div class="card-body pb-0">
                                    <span class="search-err" style="color: crimson;"></span>
                                    <form action="" method="post" id="searchForm">
                                            <div class="input-group mb-2">
                                                <input type="text" name="search" class="form-control" placeholder="Searching....." id="searchVal">
                                                <input type="submit" name="searchBtn" value="search" class="btn btn-primary">
                                            </div>
                                    </form>
                                </div>
                                <div class="card-body p-5">
                                    <p class="text-muted mb-0 ps-3">About 12,546,90000 results (0.56 Seconds)</p>
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
        $(function () {
            $('#searchForm').submit((e)=>{
                e.preventDefault()
                let serial = $('#searchForm').serialize() + '&action=searchForm'
                if ($('#searchVal').val() === '') {
                    $('.search-err').text('Please fill the search field*')
                }else{
                    $('.search-err').text('')
                    $.ajax({
                        type: "POST",
                        url: "../php/search.php",
                        data: serial,
                        success: function (response) {
                            $('#searchForm')[0].reset()
                            console.log(response);
                            $('#searchData').html(response)
                        }
                    });
                }
            })
        });
    </script>
</body>

</html>