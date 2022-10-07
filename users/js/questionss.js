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


    
})