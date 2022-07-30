<?php
    require_once('connection.php');
    require_once('cart.php');
    
    class product_db {

        static function getAll()
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM product");
            return $result;
        }

        static function get_product_id($id) {
            $db = getConnection();
            $result = $db->query("SELECT * FROM product WHERE id = $id");
            return $result;
        }

        static function get_product_category($category)
        {
            $db = getConnection();
            $result = $db->query("SELECT
            product.id AS id,
            product.price AS price,
            product.quantity AS quantity,
            product.name AS name,
            product.img AS img,
            product.content AS content,
            category.name AS category_name
            FROM product, category WHERE product.category_id = category.id AND category.id = $category");
            return $result;
        }

        
        static function insert($price, $quantity, $name, $category_id, $content, $img)
        {
            $db = getConnection();
            $result = $db->query(
                "INSERT INTO product (price, quantity, name, category_id, content, img)
                VALUES ($price, $quantity, '$name', $category_id, '$content', '$img')");
            return $result;
        }

        static function update($id, $price, $quantity, $name, $content, $img,$category)
        {
            $db = getConnection();
            $result = $db->query(
                "UPDATE product
                SET price = $price, quantity = $quantity, name = '$name', content = '$content', img = '$img', category_id='$category'
                WHERE id = $id");
            return $result;
        }

        static function update_noImg($id, $price, $quantity, $name, $content,$category)
        {
            $db = getConnection();
            $result = $db->query(
                "UPDATE product
                SET price = $price, quantity = $quantity, name = '$name', content = '$content', category_id='$category'
                WHERE id = $id");
            return $result;
        }

        static function update_quantity($id, $quantity)
        {
            $db = getConnection();
            $result = $db->query(
                "UPDATE product
                SET quantity = $quantity WHERE id = $id");
            return $result;
        }

        static function delete($id)
        {
            $db = getConnection();
            $result = $db->query("DELETE FROM product WHERE id = $id");
            return $result;
        }

        static function check_addcart($user_id, $product_id) {
            $cart_tb = cart_db::get_cart_id($user_id);
            while($result_check = $cart_tb->fetch_assoc()) {
                if($result_check['product_id'] == $product_id) {
                    return true;
                }
            }
            return false;
        }

        static function get_addcart($user_id, $product_id) {
            $cart_tb = cart_db::get_cart_id($user_id);
            while($result_check = $cart_tb->fetch_assoc()) {
                if($result_check['product_id'] == $product_id) {
                    return $result_check['id'];
                }
            }
            return -1;
        }

    }

?>