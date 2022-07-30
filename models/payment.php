<?php
    require_once('connection.php');
    
    class payment_db {

        static function get_payment_id($id)
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM payment WHERE user_id = $id");
            return $result;
        }

        static function insert($money, $user_id, $name, $phone, $location, $type) {
            $db = getConnection();
            $date = date("Y-m-d H:i:s");
            $result = $db->query("INSERT INTO `payment` (money, date, user_id, name, phone, location, type)
            VALUES ($money, '$date', $user_id, '$name', '$phone', '$location', '$type')");
        }
    }

?>