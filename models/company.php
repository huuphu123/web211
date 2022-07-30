<?php
    require_once('connection.php');

    class company_db {

        static function getAll()
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM company");
            return $result;
        }


        static function update($id, $name, $address)
        {
            $db = getConnection();
            $result = $db->query(
                "UPDATE company 
                SET name = '$name', address = '$address'
                WHERE id = $id");
            return $result;
        }

        

    }