<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/user.php";


    class login {

        function index(){
            if (isset($_SESSION["user"]))
            {
                header('Location: /checkass_Web/main/home/index');
            }
            else
            {
                render("login", "index");
            }
        }

        function checklogin() {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $check = user_db::validation($username, $password);
                if ($check == 1)
                {
                    $_SESSION["user"] = $username;
                    $result = user_db::get_user_email($username);
                    while($pd = $result -> fetch_assoc()) {
                        $_SESSION["id"] = $pd["id"];
                        $_SESSION["img"] = $pd["img"];
                        $_SESSION["name"] = $pd["name"];
                    }
                    echo 'success';
                }
                else 
                {
                    echo 'error';
                }
        }

        function register() {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $location = $_POST["location"];
            $password = $_POST["password"];
            $age = $_POST["age"];
            user_db::insert($email, $name, $age, $location, $phone, $password);
            echo 'success';
        }


        public function logout()
        {
            session_start();
            unset($_SESSION["user"]);
            unset($_SESSION["id"]);
            unset($_SESSION["img"]);
            unset($_SESSION["name"]);
            session_destroy();
            header("Location: /checkass_Web/main/login/index");
        }
    }

?>