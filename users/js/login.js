
// login code
$(function () {
    $('#form-master').submit(function (e) { 
        e.preventDefault();
        let serial = $('#form-master').serialize() + '&action=logUser'
        if ($('#email').val === '') {
            $('#email-err').text('email cannot be Empty*')
        }else{
            if ($('#password').val === '') {
                $('#pass-err').text('email cannot be Empty*')
            }else{
                $.ajax({
                    type: "POST",
                    url: "../php/login-register.php",
                    data: serial,
                    success: function (response) {
                        console.log(response);
                        if (response === 'User not Found') 
                        {
                            $('#all-err').text('User not Found*')
                        }else if(response === 'Password does not exist')
                        {
                             $('#pass-err').text('Password does not exist*')
                        }else if(response === 'verified')
                         {
                            window.location = 'index'
                        }  else{
                            $('#all-err').text('Please enter Details*')
                        }    
                        
                    }
                });
            }
        }
    });
});
// login code end