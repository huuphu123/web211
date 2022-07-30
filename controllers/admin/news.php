<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/news.php";


    class news {

        function index(){
            $all_news = news_db::getAll();
            $data = array("all_news" => $all_news);
            render("news", "index", $data);
        }

        function add() {
            render("news", "add");
        }

        function edit($id) {
            $result = news_db::get_news_id($id)->fetch_assoc();
            $data = array("title" => $result['title'], "content" => $result['content'], "id" => $id, "img" => $result['img']);
            render("news", "edit", $data);
        }

        function add_news() {
            $file_name = $_FILES['img']['name'];
            $file_temp = $_FILES['img']['tmp_name'];                
            $div =explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(mt_rand()), 0,10).'.'.$file_ext;
            $uploaded_image = "public/uploads/news/".$unique_image;
            move_uploaded_file($file_temp, $uploaded_image);
            $title = $_POST["title"];
            $content = $_POST["content"];
            news_db::insert($title, $content, $uploaded_image);
            $success = "Thêm bài viết thành công";
            $data = array("success" => $success, "title" => $title, "content" => $content, "img" => $uploaded_image);
            render("news", "add", $data);
        }

        function edit_news($id) {
            if(isset($_POST["btn-submit"])) {
                $title = $_POST["title"];
                $content = $_POST["content"];
                if(!empty($_FILES['img']['name'])) {
                    $file_name = $_FILES['img']['name'];
                    $file_temp = $_FILES['img']['tmp_name'];                
                    $div =explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(mt_rand()), 0,10).'.'.$file_ext;
                    $uploaded_image = "public/uploads/news/".$unique_image;
                    move_uploaded_file($file_temp, $uploaded_image);
                    news_db::update($id, $title, $content, $uploaded_image);
                } else {
                    news_db::update_noImg($id, $title, $content);
                }
                $success = "Cập nhật thành công";
                $result_img = news_db::get_news_id($id)->fetch_assoc()['img'];
                $data = array("success" => $success, "title" => $title, "content" => $content, "id" => $id, "img" => $result_img);
                render("news", "edit", $data);
            } else {
                header("Location: /checkass_Web/admin/news/edit");
            }
        }

        function delete($id) {
            news_db::delete($id);
            header("Location: /checkass_Web/admin/news/index");
        }
    }

?>