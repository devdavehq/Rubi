//  Code Start

$(function () {
    $('#searchForm').submit((e)=>{
        e.preventDefault()
        let serial = $('#searchForm').serialize() + '&action=searchForm'
        if ($('#searchVal').val() === '') {
            $('.search-err').text('Please fill the search field*')
        }
        if ($('.sele').val() === '') {
            $('.sele-err').text('Please fill one field*')
        }
        if ($('.sele').val() === '' || $('#searchVal').val() === '') {
            $('.all-err').text('Please fill the fields*')
        }else{
        
            $('.search-err').text('')
            $('.sele-err').text('')
            $('.all-err').text('')
            $('.dimmer').removeClass('d-none')
            $.ajax({
                type: "POST",
                url: "../php/search.php",
                data: serial,
                success: function (response) {
                    // $('#searchForm')[0].reset()
                    
                    setTimeout(() => {
                        $('.dimmer').addClass('d-none')
                        VerifyChannelsSubscribed()
                        $('#searchData').html(response)
                    }, 1000);
                }
            });
        }
    })


    // VerifyChannelsSubscribed()
    function VerifyChannelsSubscribed() {
        $.ajax({
            type: "POST",
            url: "../php/subscription.php",
            data: {action : 'FetchVerifiedSubs'},
            success: function (response) {
                if (response === 'Successfull') {
                    $('.subscription').addClass('d-none')
                    $('.unsubscribe').removeClass('d-none')
                }else{
                    console.log(response);
                }
            }
        });
    }
   
});