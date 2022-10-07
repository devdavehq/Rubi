// Register code code

$(function() {
    $("#form-master").submit((e) => {
      e.preventDefault();

      if (
        $("#user").val() === "" &&
        $("#email").val() === "" &&
        $("#password").val() === "" &&
        $("#file").val() === ""
      ) {
        $("#all-err").text("fields cannot be empty*");
      } else {
        $("#all-err").text("");
      }

      if ($("#user").val() === "") {
        $("#user-err").text("username cannot be empty*");
      } else {
        $("#user-err").text("");
        if ($("#email").val() === "") {
          $("#email-err").text("email cannot be empty*");
        } else {
          $("#email-err").text("");
          if ($("#password").val() === "") {
            $("#pass-err").text("password cannot be empty*");
          } else {
            $("#pass-err").text("");
            if ($("#file").val() === "") {
              $("#file-err").text("file cannot be empty*");
            } else {
              $("#file-err").text("");
              data = document.getElementById("form-master");
              $.ajax({
                url: "../php/login-register.php",
                method: "POST",
                processData: false,
                contentType: false,
                cache: false,
                data: new FormData(data),
                success: (response) => {
                  console.log(response);
                  if (response === 'email already Exist*') {
                    $("#email-err").text("email already Exist*");
                  } else if (response === 'fields cannot be empty') {
                    $("#all-err").text("fields cannot be empty");
                  } else if (response === 'registered') {
                    window.location = 'index'
                  } else {
                    $("#all-err").text("Please Register An Account*");
                  }
                }
              });
            }
          }
        }
      }
    });
  });

// Register code end