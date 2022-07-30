<?php

    function render($directory, $view_file, $data = array()) {

        $view = "views/main/" . $directory . '/' . $view_file . '.php';
        
        if(file_exists($view)) {
            extract($data);
            require_once($view);
        } else {
            header('Location: /checkass_Web/error/error_page/error');
        }

    }

?>