$("#add-btn").on("click", function(){
    var username = $("#username").val();
    var password = $("#password").val();
    var error = $("#error");

    error.html("");
    if (username == "") {
        error.html("Tên admin không được để trống");
        return false;
    }else if (password == "") {
        error.html("Mật khẩu không được để trống");
        return false;
    } else {
        $(this).attr("type", "submit");
    }

});