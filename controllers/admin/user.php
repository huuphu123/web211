<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/user.php";
    require_once "models/payment.php";
    require_once "models/comment.php";

    class user {

        function check(){
            echo "<h1>FUCK U</h1>";
        }

        function index(){
            $all = user_db::getAll();
            $data = array("all" => $all);
            render("user","index", $data);
        }

        function transactions($id) {
            $info_id = user_db::get_user_id($id);
            $payment_id = payment_db::get_payment_id($id);
            $all = user_db::getAll();
            $data = array("all" => $all, "all_payment" => $payment_id, "user_id" => $id, "all_info" => $info_id->fetch_assoc());
            render("user","transactions", $data);
        }

        function information($id) {
            $info_id = user_db::get_user_id($id);
            $all = user_db::getAll();
            $data = array("all" => $all, "all_info" => $info_id->fetch_assoc(), "user_id" => $id);
            render("user","information", $data);
        }

        function comment($id) {
            $all_comment = comment_db::get_comment_user($id);
            $info_id = user_db::get_user_id($id);
            $all = user_db::getAll();
            $data = array("all" => $all, "all_info" => $info_id->fetch_assoc(), "user_id" => $id, "all_comment" => $all_comment);
            render("user","comment", $data);
        }

        function delete($id) {
            user_db::delete($id);
            header("Location: /checkass_Web/admin/user");
        }

        function delete_comment($id) {
            comment_db::delete($id);
            comment_db::delete_child($id);
            header("Location: /checkass_Web/admin/user/comment/" . $id);
        }
    }

?>