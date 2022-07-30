<?php
    require_once "render.php";
    require_once "models/connection.php";

    class about {

        function check(){
            echo "<h1>FUCK U</h1>";
        }

        function index(){
            render("about","index");
        }
    }

?>