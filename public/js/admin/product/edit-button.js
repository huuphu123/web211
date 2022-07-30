$("#edit-btn").on("click", function(){
    var name = $("#name").val();
    var quantity = $("#quantity").val();
    var price = $("#price").val();
    var content = $("#content").val();
    var category = $("#category").val();
    var error = $("#error");

    error.html("");
    if (name == "") {
        error.html("Tên sản phẩm không được để trống");
        return false;
    }else if (quantity == "") {
        error.html("Số lượng sản phẩm không được để trống");
        return false;
    }else if(isNaN(quantity)) {
        error.html("Số lượng sản phẩm phải là số nguyên");
        return false;
    }else if (price == "") {
        error.html("Giá sản phẩm không được để trống");
        return false;
    }else if(isNaN(price)) {
        error.html("Giá sản phẩm phải là số nguyên");
        return false;
    }
    else if (content == "") {
        error.html("Nội dung sản phẩm không được để trống");
        return false;
    }else if (category == "") {
        error.html("Danh mục sản phẩm không được để trống");
        return false;
    } else {
        $(this).attr("type", "submit");
    }

});