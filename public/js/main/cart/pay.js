$("#pay-btn").on("click", function(){
    var uid = $(this).data("cid");
    var name = $("#name").val();
    var phone = $("#phone").val();
    var location_pay = $("#location").val();
    var money_ = $("#value_money").html();
    var money = money_.substr(0, money_.length-1);
    var value_radio = "";
    var error = $("#error");
    var radio = document.getElementsByName("tools");
    for(var i=0; i<radio.length; i++) {
        if(radio[i].checked === true) {
            value_radio = radio[i].value;
        }
    }
    error.html("");
    if(money == 0) {
        alert("Giỏ hàng rỗng!");
        window.reload();
        return false;
    }
    if(name == "") {
        error.html("Không được để trống tên thanh toán!")
        return false;
    } else if(phone == "") {
        error.html("Không được để trống số điện thoại thanh toán!")
        return false;
    } else if(location == "") {
        error.html("Không được để trống địa chỉ thanh toán!")
        return false;
    } else if(value_radio == "") {
        error.html("Không được để trống phương thức thanh toán!")
        return false;
    } else {
        $.ajax({
            type: 'POST',
            url: '/checkass_Web/main/payment/insert',
            data: { name: name, phone: phone, location: location_pay, type: value_radio, user_id: uid, money: money},
            success:function(response) {
                alert("Thanh toán thành công!");
                location.reload(true);
            } 
        });
    }
})