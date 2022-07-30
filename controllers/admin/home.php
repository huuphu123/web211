<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/admin.php";

    class home {

        function index(){
            if(isset($_SESSION["admin"])) {
                $all_admin = admin_db::getAll();
                $data = array("all_admin" => $all_admin);
                render("home","index", $data);
            } else {
                header("Location: /checkass_Web/admin/login/index");
            }
        }

        function add() {
            render("home", "add");
        }

        function edit($id) {
            $info_admin = admin_db::get_admin_id($id)->fetch_assoc();
            $data = array("info_admin" => $info_admin);
            render("home", "edit", $data);

        }

        function change($id) {
            if(isset($_POST["btn-submit"])) {
                $username = $_POST['username'];
                $current_password = $_POST['password'];
                $newpass = $_POST['new_password'];
                $repass = $_POST['re_password'];
                admin_db::update($id, $username);
                $success = "Cập nhật thành công";
                if(!empty($current_password) && !empty($newpass) && !empty($repass)) {
                    $check = admin_db::change_password($id, $username, $current_password, $newpass, $repass);
                    if($check == 1) {
                        $success = 'Cập nhật thành công';
                    } else {
                        $error = 'Lỗi cập nhật mật khẩu, vui lòng kiểm tra lại!';
                    }
                }
                $get_admin = admin_db::get_admin_id($id);
                $result = $get_admin -> fetch_assoc();
                if(isset($error)) {
                    $data = array("info_admin" => $result, "error" => $error);
                } 
                else {
                    $data = array("info_admin" => $result, "success" => $success);
                }
                render("home", "edit", $data);
            } else {
                header("Location: /checkass_Web/admin/home/edit/" . $id);
            }
        }

        function delete($id) {
            admin_db::delete($id);
            header("Location: /checkass_Web/admin/home/index");
        }

        function add_admin() {
            if(isset($_POST["btn-submit"])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                admin_db::insert($username, $password);
                $success = "Thêm admin thành công";
                $data = array("success" => $success, "username" => $username, "password" => $password);
                render("home","add",$data);
            }
        }
    }

?>