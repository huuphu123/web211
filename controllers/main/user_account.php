<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/user.php";

    class user_account {

        function check(){
            echo "<h1>FUCK U</h1>";
        }

        function index(){
            $get_user = user_db::get_user_email($_SESSION['user']);
            $result = $get_user -> fetch_assoc();
            $data = array("result" => $result);
            render("user_account","index", $data);
        }

        function change() {
            if(isset($_POST["btn-submit"])) {
                $name = $_POST['username'];
                $age = $_POST['age'];
                $location = $_POST['location'];
                $phone = $_POST['phone'];
                $current_password = $_POST['current_password'];
                $newpass = $_POST['newpass'];
                $repass = $_POST['repass'];
                if(!empty($_FILES['img']['name'])) {
                    $file_name = $_FILES['img']['name'];
                    $file_temp = $_FILES['img']['tmp_name'];
                    
                    $div =explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(mt_rand()), 0,10).'.'.$file_ext;
                    $uploaded_image = "public/uploads/user/".$unique_image;
                    move_uploaded_file($file_temp, $uploaded_image);
                    $_SESSION["img"] = $uploaded_image;
                    user_db::update($_SESSION['id'], $uploaded_image, $name, $age, $location, $phone);
                } else {
                    user_db::update($_SESSION['id'], $_SESSION['img'], $name, $age, $location, $phone);
                }
                $success = "Cập nhật thành công";
                if(!empty($current_password) && !empty($newpass) && !empty($repass)) {
                    $check = user_db::change_password($_SESSION['id'], $_SESSION['user'], $current_password, $newpass, $repass);
                    if($check == 1) {
                        $ok = 'Cập nhật thành công';
                    } else {
                        $error = 'Lỗi cập nhật mật khẩu, vui lòng kiểm tra lại!';
                    }
                }
                $get_user = user_db::get_user_email($_SESSION['user']);
                $result = $get_user -> fetch_assoc();
                if(isset($error)) {
                    $data = array("result" => $result, "error" => $error);
                } 
                else {
                    $data = array("result" => $result, "success" => $success);
                }
                render("user_account", "index", $data);
            } else {
                header("Location: /checkass_Web/main/user_account/index");
            }
        }
    }

?>