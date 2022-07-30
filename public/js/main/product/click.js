
$("#add_cart").click(function(){
    data_check = $(this).data("check");
    if(data_check == 1) {
        var uid = $(this).data("uid");
        var pid = $(this).data("pid");
        var text = $("#num_cart").html();
        var string = text + '-' + "1";
        $("#num_cart").html(eval(string));
        $(this).html("ADD TO CART");
        $(this).data("check",2);
        var num = $("#num_product").html();
        $.ajax({
            url: "/checkass_Web/main/cart/get_cart_id_del",
            method: "POST",
            data: { product_id : pid , user_id : uid},
            success : function(response){
                    $.ajax({
                        url: "/checkass_Web/main/cart/delete",
                        method: "POST",
                        data: { cart_id : response},
                        success : function(response){
                            if(response == "success"){
            
                            }
                        }
                    });
            }
        });
        $.ajax({
            url: "/checkass_Web/main/cart/get_number_back",
            method: "POST",
            data: { product_id : pid , user_id : uid},
            success : function(response){
                $("#num_product").html(response);
            }
        });
    } else if(data_check == 2) {
        var pid = $(this).data("pid");
        var uid = $(this).data("uid");
        var text = $("#num_cart").html();
        var string = text + '+' + "1";
        $("#num_cart").html(eval(string));
        $(this).data("check",1);
        $(this).html("PRODUCT HAS BEEN ADDED TO CART");
        var num = $("#num_product").html();
        var string = num + "-" + "1";
        $("#num_product").html(eval(string));
        var number = eval(string);
        $.ajax({
            url: "/checkass_Web/main/cart/insert",
            method: "POST",
            data: { user_id : uid, product_id : pid},
            success : function(response){
                if(response == "success"){
                }
            }
        });
        $.ajax({
            url: "/checkass_Web/main/product/update_quantity_inc",
            method: "POST",
            data: {product_id: pid },
            success : function(response){
                
            }
        });

    }
});