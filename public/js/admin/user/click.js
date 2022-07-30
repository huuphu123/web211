var user_box = document.getElementsByClassName("search-result-item");
for(var i = 0; i < user_box.length; i++) {
    user_box[i].onclick = function() {
        var email = $(this).data("email");
        var name = $(this).data("name");
        var phone = $(this).data("phone");
        var location = $(this).data("location");
        var img = $(this).data("img");
        var uid = $(this).data("uid");
        $("#name").val(name);
        $("#email").val(email);
        $("#phone").val(phone);
        $("#location").val(location);
        var img_src = "/checkass_Web/" + img;
        $("#img").attr("src", img_src);
        $("#show-img").attr("src", img_src);
        $("#show_name").html(name);
        $("#info").attr("href","/checkass_Web/admin/user/information/" + uid);
        $("#trans").attr("href","/checkass_Web/admin/user/transactions/" + uid);
        $("#comm").attr("href","/checkass_Web/admin/user/comment/" + uid);
        $("#delete-user").attr("href","/checkass_Web/admin/user/delete/" + uid);
        var information = document.getElementById("information-user");
        information.style.display = "block";
    }
}

window.onload = function() {
    $("#name").val("");
        $("#email").val("");
        $("#phone").val("");
        $("#location").val("");
}