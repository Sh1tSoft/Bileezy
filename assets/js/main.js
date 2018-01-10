$( ".change-tab" ).click(function() {
  $(".login-form").toggle();
  $(".regi-form").toggle();
});

$(function () {
    $("#submit").click(function () {
        var password = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();
        if (password != confirmPassword) {
            $("#password_error").html("Adgankoderne stemmer ikke overens med hindanden");
            $(".error").css("display", "block");
            return false;
        } else {
          $(".error").css("display", "none");
        }
    });
});
