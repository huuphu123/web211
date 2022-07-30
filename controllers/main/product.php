<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/comment.php";
    require_once "models/product.php";
    require_once "models/cart.php";

    class product {

        function index(){
            $all_product = product_db::getAll();
            $data = array("all" => $all_product);
            render("product", "index", $data);
        }

        function info($id){
            $product_by_id = product_db::get_product_id($id);

            $comment = comment_db::get_comment_product($id);
            $arr = array();
            while($result = $comment -> fetch_assoc()){
                $arr_comment = array(
                    "comment_out" => $result,
                    "reply" => comment_db::get_reply_comment_product($result['id'])
                );
                array_push($arr, $arr_comment);
            }
            $data = array("all" => $arr, "info_product" => $product_by_id->fetch_assoc());
            render("product", "info", $data);
        }

        function update_quantity_inc() {
            $product_id = $_POST['product_id'];
            $update_check = product_db::get_product_id($product_id);
            $current_number = $update_check->fetch_assoc()['quantity'];
            $num_to_update = $current_number - 1;
            product_db::update_quantity($product_id, $num_to_update);
            echo 'success';
        }

        function update_quantity_dec() {
            $product_id = $_POST['product_id'];
            $update_check = product_db::get_product_id($product_id);
            $current_number = $update_check->fetch_assoc()['quantity'];
            $num_to_update = $current_number + 1;
            product_db::update_quantity($product_id, $num_to_update);
            echo 'success';
        }

        function get_product_quantity() {
            $product_id = $_POST['product_id'];
            $result = product_db::get_product_id($product_id);
            $quantity = $result -> fetch_assoc()['quantity'];
            echo $quantity;
        }

        function reply_comment() {
            $content = $_POST['content'];
            $product_id = $_POST['product_id'];
            $parent_id = $_POST['parent_comment'];
            $user_id = $_POST['user_id'];
            comment_db::reply_product($parent_id, $content, $product_id, $user_id);
            $date = date("Y-m-d H:i:s");
            echo $date;
        }

        function get_date() {
            $date = date("Y-m-d H:i:s");
            echo $date;
        }

        function insert_comment() {
            $content = $_POST['content'];
            $product_id = $_POST['product_id'];
            $user_id = $_POST['user_id'];
            comment_db::insert_product($content, $product_id, $user_id);
            $get_last = comment_db::get_comment_product($product_id);
            $comment_id = 0;
            while($result = $get_last->fetch_assoc()) {
                $comment_id = $result['id'];
            }
            echo $comment_id;
        }

        function delete_comment($id, $product_id) {
            comment_db::delete($id);
            comment_db::delete_child($id);
            header("Location: /checkass_Web/main/product/info/" . $product_id);
        }
    }

?>