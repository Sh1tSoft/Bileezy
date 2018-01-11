$(".show-desc").click(function () {
    $(".desc-text").toggleClass("toggle-desc");
    $(this).html() == "Vis mere" ? $(this).html('Vis mindre') : $(this).html('Vis mere');
})



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
