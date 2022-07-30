<?php
    require_once('connection.php');
    
    class admin_db {

        static function getAll()
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM admin");
            return $result;
        }

        static function get_admin_username($username)
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM admin WHERE username = '$username'");
            return $result;
        }

        static function get_admin_id($id)
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM admin WHERE id = $id");
            return $result;
        }

        
        static function validation($username, $password)
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM admin WHERE username = '$username'");
            if($result = $result -> fetch_assoc()) {
                if ($password == $result['password'])
                    return true;
                else
                    return false;
            }
            else {
                return false;
            }
        }

        static function change_password($id, $username, $old_password, $new_password, $repass)
        {
            $db = getConnection();
            $check = admin_db::validation($username, $old_password);
            if($check) {
                if($new_password == $repass) {
                    $db->query(
                        "UPDATE admin
                        SET username = '$username', password = '$new_password'
                        WHERE id = $id");
                    return true;
                }
            }
            else {
                return false;
            }

        }

        static function update($id, $username)
        {
            $db = getConnection();
            $result = $db->query(
                "UPDATE admin 
                SET username = '$username'
                WHERE id = $id");
            return $result;
        }

        static function insert($username, $password)
        {
            $db = getConnection();
            $result = $db->query("INSERT INTO admin (username, password) VALUES ('$username', '$password')");
            return $result;
        }

        static function delete($id)
        {
            $db = getConnection();
            $result = $db->query("DELETE FROM admin WHERE id = $id");
            return $result;
        }

    }

?>