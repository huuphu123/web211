<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/comment.php";

    class comment {

        function index() {
            $result = comment_db::get_comment();
            $data = array("result" => $result);
            render("comment","index", $data);
        }
    }

?>