// Code start

$(function() {

    GetReviews('#reviews')


    function GetReviews(insert){
        $.ajax({
            type: "POST",
            url: "../php/userscode.php",
            data: {
                action: 'getrev'
            },
            success: function(response) {
                $(insert).html(response)
            }
        });
    }


});






// Code end