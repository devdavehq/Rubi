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

<script>
    $(function() {
        $('#question').submit(function(e) {
            e.preventDefault();
            if ($('#que').val() === '') {
                $('#que-err').text('Please ask a question First*')
            } else {
                $.ajax({
                    type: "POST",
                    url: "../php/userscode.php",
                    data: $('#question').serialize() + "&action=createQue",
                    success: function(response) {
                        console.log(response)
                        Swal.fire({
                            icon: 'success',
                            text: 'Question Created Successfully',
                            title: 'Question Created'

                        }).then(() => {
                            getQuestions('#postedQue')
                            // $('#postedQue').html(response)
                            $('#question')[0].reset()
                        })

                    }
                });
            }
        });
    });
    getQuestions('#postedQue')

    function getQuestions(insert) {
        $.ajax({
            type: "POST",
            url: "../php/userscode.php",
            data: {
                action: 'getAllQuestions'
            },
            success: function(response) {
                $(insert).html(response)
            }
        });
    }

    $('body').on('click', '.delete', (e) => {
        e.preventDefault()
        let deletePost = $('.delete').attr('id')
        if (deletePost) {
            Swal.fire({
                title: 'Delete?',
                text: 'Are you sure you want to delete this Post?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#FF0000",
                cancelButtonColor: "blue",
                confirmButtonText: 'Delete user'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '../php/userscode.php',
                        method: 'POST',
                        data: {
                            deletePost: deletePost
                        },
                        success: function(response) {
                            // console.log(response);
                            Swal.fire({
                                icon: 'success',
                                text: 'You have successfully deleted this Post',
                                title: 'Post Deleted'
                            })
                            getQuestions('#postedQue')
                        }
                    })
                }
            })


        }


        $('#editpst').click((e)=>{
            e.preventDefault()
        })
    })
</script>
</body>

</html>