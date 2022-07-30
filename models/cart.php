<?php
    require_once('connection.php');
    
    class cart_db {

        static function get_cart_id($id)
        {
            $db = getConnection();
            $result = $db->query("SELECT
            cart.id AS id,
            cart.number AS number,
            cart.user_id AS user_id,
            product.name AS product_name,
            product.price AS price,
            product.quantity AS product_quantity,
            product.img AS img,
            cart.product_id AS product_id,
            user.email AS user_email
            FROM cart, product, user WHERE cart.product_id = product.id AND user_id = user.id AND user_id = $id");
            return $result;
        }

        static function get_cart_cid($id)
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM cart WHERE id = $id");
            return $result;
        }

        
        static function insert($product_id, $user_id)
        {
            $db = getConnection();
            $result = $db->query("INSERT INTO cart (product_id, number, user_id) VALUES ($product_id, 1, $user_id)");
            return $result;
        }

        static function update($id, $number)
        {
            $db = getConnection();
            $result = $db->query(
                "UPDATE cart 
                SET number = $number WHERE id = $id"
            );
            return $result;
        }

        static function delete($id)
        {
            $db = getConnection();
            $result = $db->query("DELETE FROM cart WHERE id = $id");
            return $result;
        }

        static function delete_user_id($id)
        {
            $db = getConnection();
            $result = $db->query("DELETE FROM cart WHERE user_id = $id");
            return $result;
        }

    }

?>