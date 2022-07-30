$("#sign-up-btn").on("click", function(){
    var name = $("#name-signup").val();
    var email = $("#email-signup").val();
    var age = $("#age-signup").val();
    var password = $("#password-signup").val();
    var phone = $("#phone-signup").val();
    var location_signup = $("#location-signup").val();
    var error = $("#error_signup");


    error.html("");

    if (name == "") {
        error.html("Tên đăng kí không được để trống");
        return false;
    }
    if (email == "") {
        error.html("Email đăng kí không được để trống");
        return false;
    } else {
        var at = email.indexOf("@");
        var dot = email.lastIndexOf(".");
        var space = email.indexOf(" ");
        
        if ((at != -1) &&  (at != 0) && (dot != -1) && (dot > at + 1) && (dot < email.length - 1)
        &&
        (space == -1)) //không có khoẳng trắng 
        {
            var a = 1;
        } else {
            error.html("Email đăng kí không hợp lệ");
            return false;
        }
    }
    if (password == "") {
        error.html("Mật khẩu không được để trống");
        return false;
    } else if(password.length < 6) {
        error.html("Mật khẩu phải chứa từ 6 kí tự trở lên");
        return false;
    }
    if (phone == "") {
        error.html("Số điện thoại không được để trống");
        return false;
    } else if(phone.length != 10) {
        error.html("Số điện thoại phải chứa 10 số");
        return false;
    }
    if (age == "") {
        error.html("Tuổi không được để trống");
        return false;
    } else if(isNaN(age)) {
        error.html("Tuổi phải là 1 số nguyên");
        return false;
    }
    if (location_signup == "") {
        error.html("Địa chỉ không được để trống");
        return false;
    }

    $.ajax({
      url: "/checkass_Web/main/login/register",
      method: "POST",
      data: { name: name, email: email, password: password, phone: phone, location: location_signup, age: age },
      success : function(response){
          if (response == "success") {
                alert("Đăng kí thành công!");
                location.reload(true);
          }
      }
    });

});