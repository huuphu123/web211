<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/comment.php";
    require_once "models/news.php";


    class news {

        function index(){
            $news = news_db::getAll_show();
            $lastest_news = news_db::getAll_show_lastest();
            $data = array("news" => $news, "lastest_news" => $lastest_news);
            render("news", "index", $data);
        }

        function info($id){
            $news_by_id = news_db::get_news_id($id);
            $all_news = news_db::getAll_show();
            $comment = comment_db::get_comment_news($id);
            $arr = array();
            while($result = $comment -> fetch_assoc()){
                $arr_comment = array(
                    "comment_out" => $result,
                    "reply" => comment_db::get_reply_comment_news($result['id'])
                );
                array_push($arr, $arr_comment);
            }
            $data = array("all" => $arr, "info_news" => $news_by_id->fetch_assoc(), "all_news" => $all_news, "id" => $id);
            render("news", "info", $data);
        }


        function reply_comment() {
            $content = $_POST['content'];
            $news_id = $_POST['news_id'];
            $parent_id = $_POST['parent_comment'];
            $user_id = $_POST['user_id'];
            comment_db::reply_news($parent_id, $content, $news_id, $user_id);
            $date = date("Y-m-d H:i:s");
            echo $date;
        }

        function get_date() {
            $date = date("Y-m-d H:i:s");
            echo $date;
        }

        function insert_comment() {
            $content = $_POST['content'];
            $news_id = $_POST['news_id'];
            $user_id = $_POST['user_id'];
            comment_db::insert_news($content, $news_id, $user_id);
            $get_last = comment_db::get_comment_news($news_id);
            $comment_id = 0;
            while($result = $get_last->fetch_assoc()) {
                $comment_id = $result['id'];
            }
            echo $comment_id;
        }

        function delete_comment($id, $news_id) {
            comment_db::delete($id);
            comment_db::delete_child($id);
            header("Location: /checkass_Web/main/news/info/" . $news_id);
        }
    }

?>