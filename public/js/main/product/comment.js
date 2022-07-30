
function reply() {
    var reply = document.getElementsByClassName("reply-btn");
    for(var i=0; i < reply.length; i++) {
        reply[i].onclick = function() {
            var user_id = $(this).data("uid");
            var product_id = $(this).data("pid");
            var parent_comment = $(this).data("parent_comment");
            var get_content = "#content_p_" + parent_comment;
            var user_name = $(this).data("user_name");
            var user_img = $(this).data("user_img");
            var content = $(get_content).val();
            $(get_content).val("");
            if(user_id == -1) {
                alert("Đăng nhập để bình luận!");
            } else if(content.length == 0) {
                alert("Cần nhập nội dung để bình luận!");
            } else {
                $.ajax({
                    type: 'POST',
                    url: '/checkass_Web/main/product/reply_comment',
                    data: { product_id : product_id, user_id : user_id, content : content, parent_comment : parent_comment},
                    success:function(response) {
                        var add_reply = 
                        '<li>'+
                            '<div class="comment-avatar">'+
                                '<img src="' + '/' + 'checkass_Web' + '/' + user_img + '"' + 'alt="">'+
                            '</div>' + 
                            '<div class="comment-box">' +
                                '<div class="comment-head">' +
                                    '<h6 class="comment-name"><a>' + user_name + '</a></h6>' +
                                    '<span>' + response + '</span>' +
                                    '<i class="fa fa-times"></i>' +
                                '</div>' +
                                '<div class="comment-content">' +
                                    content +
                                '</div>' +
                            '</div>' +
                        '</li>';
                        var div_to_append = "#reply_p_" + parent_comment;
                        $(add_reply).insertBefore(div_to_append);
                }});
            }
        }
    }
}

reply();

$("#btn-write").on("click", function() {
    var user_id = $(this).data("uid");
    var product_id = $(this).data("pid");
    var user_name = $(this).data("user_name");
    var user_img = $(this).data("user_img");
    var content = $("#content_p_write").val();
    $("#content_p_write").val("");
    if(user_id == -1) {
        alert("Đăng nhập để bình luận!");
    } else if(content.length == 0) {
        alert("Cần nhập nội dung để bình luận!");
    } else {
        $.ajax({
            type: 'POST',
            url: '/checkass_Web/main/product/get_date',
            data: { product_id : product_id},
            success:function(response) {
                var date = response;
                $.ajax({
                type: 'POST',
                url: '/checkass_Web/main/product/insert_comment',
                data: { product_id : product_id, user_id : user_id, content : content},
                success:function(response) {
                    var add_reply = 
                    '<li>'+
                    '<div class="comment-main-level">'+
                        '<div class="comment-avatar"><img class="profile-img" src="' + '/' + 'checkass_Web' + '/' + user_img + '"' +'alt=""></div>' +
                        '<div class="comment-box">' +
                            '<div class="comment-head">' +
                                '<h6 class="comment-name by-author"><a>' + user_name + '</a></h6>' +
                                '<span>' + date + '</span>' +
                                '<i class="fa fa-times"></i>' +
                            '</div>' +
                            '<div class="star-rating">' +
                                '<i class="fa fa-star checked"></i>' +
                                '<i class="fa fa-star checked"></i>' +
                                '<i class="fa fa-star checked"></i>' +
                                '<i class="fa fa-star checked"></i>' +
                                '<i class="fa fa-star-o not-checked"></i>' +

                            '</div>' +
                            '<div class="comment-content">' +
                                content +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<ul class="comments-list reply-list">' +
                        '<div id="reply_p_' + response + '">' +
                            '<textarea id="content_p_' + response + '"' + ' class="form-control" placeholder="Reply a comment..." rows="3"></textarea>' +
                            '<br>' +
                            '<button type="button" class="btn btn-info pull-right reply-btn" data-pid=' +  product_id + ' data-uid=' +
                            user_id +
                            ' data-parent_comment= ' + response + ' data-user_name = "' +
                            user_name +
                            '"' + ' data-user_img = "' +
                            user_img +
                            '"' + '>Post</button>' +
                        '</div>' +
                    '</ul>'
                    '</li><br>'+
                    '<script src="/checkass_Web/public/js/main/product/comment.js"></script>';
                    $(add_reply).insertBefore("#write-p");
                    reply();
                }});
        }});
        
    }

})
