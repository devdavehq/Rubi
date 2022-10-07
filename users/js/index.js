$(function () {
    // window.addEventListener('load', ()=>{
        FetchReadyPosts('#AllVideos')

        function FetchReadyPosts(insert) {
            $.ajax({
                type: "POST",
                url: "../php/indexcode.php",
                data: {
                    action: 'FetchReadyPosts'
                },
                success: function(response) {
                    console.log(response);
                    $(insert).html(response)
                    FetchTags('#Gettags') 
                }
            });
        }
        
    // })
    $('.recent').click(e=>{
        // $('.recent').removeClass('activetags')
        let gtnval = e.currentTarget.innerHTML
        // console.log(gtnval);

        if (gtnval == 'All') {
            FetchReadyPosts('#AllVideos')
        }else{
            $.ajax({
                type: "POST",
                url: "../php/indexcode.php",
                data: {gtnval: gtnval},
                success: function (response) {
                   $('#AllVideos').html(response)
                }
            });
        }
        
    })

    function FetchTags(param) 
    { 
        $.ajax({
            type: "POST",
            url: "../php/indexcode.php",
            data: {action: 'getAllTags'},
            success: function (response) {
                $(param).append(response)
                console.log(response);
            } 
        });
    }
});

$('#watchNow').click(e => {
    e.preventDefault()
    $.ajax({
        type: "GET",
        url: "../php/indexcode.php",
        data: {action: 'fetchVids'},
        success: function (response) {
            $data = JSON.parse(response)
            
        }
    });
})
