<?php
    require_once('connection.php');
    
    class category_db {

        static function getAll()
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM category");
            return $result;
        }

        static function get_category_id($id)
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM category WHERE id = $id");
            return $result;
        }

        static function insert($name) {
            $db = getConnection();
            $result = $db->query("INSERT INTO category (name) VALUES ('$name')");
            return $result;
        }

        static function update($id, $name) {
            $db = getConnection();
            $result = $db->query(
                "UPDATE category
                SET name = $name WHERE id = $id"
            );
            return $result;
        }

        static function delete($id) {
            $db = getConnection();
            $result = $db->query("DELETE FROM category WHERE id = $id");
            return $result;
        }

    }

?>