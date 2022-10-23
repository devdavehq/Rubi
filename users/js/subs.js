//  Code start 

// subscribe
$(function() {
    $('.subscription').on('click', (e) => {
        let subscribe = $('.subscription').attr('id')
        if (subscribe) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "../php/subscriptions.php",
                data: {subscribe: subscribe},
                success: function(response) {
                    if (response === 'Subscribed') {
                        $('.subscription').addClass('d-none')
                        $('.unsubscribe').removeClass('d-none')
                        // FetchAllSubs()
                    }else{
                        // $('#substatus').text(response)
                        console.log(response);
                    }
                }
            });
        }
    })
    
    // unsuscribe Channel
    // $('.unsubscribe').on('click', (e) => {
    //     let unsubscribe = $('.unsubscribe').attr('id')
    //     if (unsubscribe) {
    //         e.preventDefault();
    //         $.ajax({
    //             type: "POST",
    //             url: "../php/subscriptions.php",
    //             data: {unsubscribe: unsubscribe},
    //             success: function(response) {
    //                 if (response === '') {
    //                     $('.subscription').removeClass('d-none')
    //                     $('.unsubscribe').addClass('d-none')
    //                 }else{
    //                     // $('#substatus').text(response)
    //                     console.log(response);
    //                 }
    //             }
    //         });
    //     }
    // })


    // VerifyChannelsSubscribed
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
                }else{
                    $('.subscription').addClass('d-none')
                    $('.unsubscribe').removeClass('d-none')
                }
            }
        });
    }
  









});

// Code ends