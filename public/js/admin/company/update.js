$("#submit-btn").on("click", function(){
    var name = $("#name").val();
    var address = $("#address").val();
    var error = $("#error");

    error.html("");
    if (name == "") {
        error.html("Tên công ty không được để trống");
        return false;
    }
    if (address == "") {
        error.html("Địa chỉ công ty không được để trống");
        return false;
    }
    $(this).attr("type", "submit");
});