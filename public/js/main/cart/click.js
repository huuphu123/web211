var button_inc = document.getElementsByClassName("inc");
for(var i=0; i < button_inc.length ; i++) {
    button_inc[i].onclick = function(){
        var pid = $(this).data("pid");
        var product_quantity =$(this).data("product_quantity");
        var cid = $(this).data("cid");
        var price_product = $(this).data("price_product");
        var checkid = "#number_" + cid;
        var value = $(checkid).html();
        $.ajax({
            url: "/checkass_Web/main/product/get_product_quantity",
            method: "POST",
            data: { product_id : pid},
            success : function(response){
                if(response > 0) {
                    string = value + "+" + "1";
                    $(checkid).html(eval(string));
                    var value1 = $("#value_money").html();
                    string1 = value1.substring(0, value1.length -1) + "+" + price_product;
                    $("#value_money").html( eval(string1)+ "$");
                    number = $(checkid).html();
                    update_number = 1;
                    $.ajax({
                        url: "/checkass_Web/main/cart/update",
                        method: "POST",
                        data: { cart_id : cid, number : number },
                        success : function(response){
                            if(response == "success"){
                                $.ajax({
                                    url: "/checkass_Web/main/product/update_quantity_inc",
                                    method: "POST",
                                    data: { product_id : pid},
                                    success : function(response){
                                        if(response == "success"){}
                                    }
                                });
                            }
                        }
                    });
                } else {
                    alert("Đã hết sản phẩm");
                }
            }
        });
    };
}

var button_dec = document.getElementsByClassName("dec");
for(var i=0; i < button_inc.length ; i++) {
    button_dec[i].onclick = function(){
        var pid = $(this).data("pid");
        var product_quantity =$(this).data("product_quantity");
        var cid = $(this).data("cid");
        var price_product = $(this).data("price_product");
        var checkid = "#number_" + cid;
        var value = $(checkid).html();
        if(value != 0) {
            string = value + "-" + "1";
            $(checkid).html(eval(string));
            var value1 = $("#value_money").html();
            string1 = value1.substring(0, value1.length -1) + "-" + price_product;
            $("#value_money").html( eval(string1)+ "$");
            number = $(checkid).html();
            update_number = -1;
            $.ajax({
                url: "/checkass_Web/main/cart/update",
                method: "POST",
                data: { cart_id : cid, number : number },
                success : function(response){
                    if(response == "success"){
                        $.ajax({
                            url: "/checkass_Web/main/product/update_quantity_dec",
                            method: "POST",
                            data: { product_id : pid },
                            success : function(response){
                                if(response == "success"){
                                }
                            }
                        });
                    }
                }
              });
        }
    };
}

// var number_cart = document.getElementsByClassName("number");
// // window.onload=function(){
// //     for(var i=0; i<number_cart.length; i++) {
// //         alert(number_cart[i].dataset.cid);
// //     }
// // }

// window.onload = function(){
//     for(var i=0; i<number_cart.length; i++) {
//         var pid = number_cart[i].dataset.pid;
//         var cid = number_cart[i].dataset.cid
//         var checkid = "#number_" + cid;
//         var number = $(checkid).html();
//         $.ajax({
//             url: "/checkass_Web/main/product/update_quantity",
//             method: "POST",
//             data: { product_id : pid, number : number },
//             success : function(response){
//                 if(response == "success"){
//                 }
//             }
//         });
//     }
// }