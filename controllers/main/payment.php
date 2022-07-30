<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/payment.php";
    require_once "models/cart.php";


    class payment {

        function insert() {
            $name = $_POST['name'];
            $user_id = $_POST['user_id'];
            $phone = $_POST['phone'];
            $location = $_POST['location'];
            $money = $_POST['money'];
            $type = $_POST['type'];
            payment_db::insert($money, $user_id, $name, $phone, $location, $type);
            cart_db::delete_user_id($user_id);
            echo "succes";
        }
    }

?>