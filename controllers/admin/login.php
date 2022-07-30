<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/admin.php";


    class login {

        function index(){
            if (isset($_SESSION["admin"]))
            {
                header('Location: /checkass_Web/admin/home/index');
            }
            else if (isset($_POST['submit-btn']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $check = admin_db::validation($username, $password);
                if ($check == 1)
                {
                    $_SESSION["admin"] = $username;
                    $result = admin_db::get_admin_username($_SESSION["admin"]);
                    while($pd = $result -> fetch_assoc()) {
                        $_SESSION["id_admin"] = $pd["id"];
                    }
                    header('Location: /checkass_Web/admin/home/index');
                }
                else 
                {
                    $err = "Sai tài khoản hoặc mật khẩu";
                    $data = array('err' => $err, 'username' => $username);
                    render("login", "index", $data);
                }
            }
            else
            {
                render("login", "index");
            }
        }

        public function logout()
        {
            unset($_SESSION["admin"]);
            unset($_SESSION["id_admin"]);
            session_destroy();
            header("Location: /checkass_Web/admin/login/index");
        }
    }

?>