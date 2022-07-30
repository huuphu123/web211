<?php
    require_once "render.php";
    require_once "models/connection.php";

    class home {

        function index(){
            render("home","index");
        }
    }

?>