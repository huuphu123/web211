$("#add-btn").on("click", function(){
    var title = $("#title").val();
    var content = $("#content").val();
    var error = $("#error");

    error.html("");
    if (title == "") {
        error.html("Tiêu đề bài viết không được để trống");
        return false;
    }
    if (content == "") {
        error.html("Nội dung bài viết không được để trống");
        return false;
    }
    $(this).attr("type", "submit");
});