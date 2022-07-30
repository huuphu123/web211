<?php
    require_once('connection.php');
    
    class user_db {

        static function getAll()
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM user");
            return $result;
        }

        static function get_user_email($email)
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM user WHERE email = '$email'");
            return $result;
        }

        static function get_user_id($id)
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM user WHERE id = $id");
            return $result;
        }

        
        static function validation($email, $password)
        {
            $db = getConnection();
            $result = $db->query("SELECT * FROM user WHERE email = '$email'");
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

        static function insert($email, $name, $age, $location, $phone, $password)
        {
            $db = getConnection();
            $result = $db->query(
                "INSERT INTO user (email, img, name, age, location, phone, password) 
                VALUES ('$email', 'public/uploads/user/client.jpg', '$name', '$age', '$location', '$phone', '$password')"
            );
            return $result;
        }

        static function update($id, $img, $name, $age, $location, $phone)
        {
            $db = getConnection();
            $result = $db->query(
                "UPDATE user 
                SET img = '$img', name = '$name', age = $age, location = '$location', phone = '$phone'
                WHERE id = '$id'"
            );
            return $result;
        }

        static function delete($id)
        {
            $db = getConnection();
            $result = $db->query("DELETE FROM user WHERE id = $id");
            return $result;
        }

        static function change_password($id, $email, $old_password, $new_password, $repass)
        {
            $db = getConnection();
            $check = user_db::validation($email, $old_password);
            if($check) {
                if($new_password == $repass) {
                    $db->query(
                        "UPDATE user 
                        SET email = '$email', password = '$new_password'
                        WHERE id = $id");
                    return true;
                }
            }
            else {
                return false;
            }

        }


    }

?>