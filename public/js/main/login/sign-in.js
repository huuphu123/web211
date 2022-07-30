$("#sign-in-btn").on("click", function(){
    var username = $("#email").val();
    var password = $("#password").val();
    var error = $("#error");

    error.html("");

    // Kiểm tra nếu username rỗng thì báo lỗi
    if (username == "") {
        error.html("Tên đăng nhập không được để trống");
        return false;
    }
    // Kiểm tra nếu password rỗng thì báo lỗi
    if (password == "") {
        error.html("Mật khẩu không được để trống");
        return false;
    }
    
    // Chạy ajax gửi thông tin username và password về server check_dang_nhap.php
    // để kiểm tra thông tin đăng nhập hợp lệ hay chưa
    $.ajax({
      url: "/checkass_Web/main/login/checklogin",
      method: "POST",
      data: { username : username, password : password },
      success : function(response){
          if (response == "success") {
            location.reload();
          }else{
              error.html("Tên đăng nhập hoặc mật khẩu không chính xác !");
          }
      }
    });

});