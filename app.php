<?php

    class app {
        
        protected $page = "main";
        protected $controller = "home";
        protected $action = "index";
        protected $params = "";

        function __construct() {
            $arr = $this -> url_split();

            if(isset($arr[0])) {
                if(file_exists("controllers/" . $arr[0] . "/")) {
                    $this -> page = $arr[0];
                } else {
                    $this -> page = "error";
                }
                unset($arr[0]);
            }

            
            if(isset($arr[1])) {
                if(file_exists("controllers/" . ($this -> page) . "/" . $arr[1] . ".php")) {
                    $this -> controller = $arr[1];
                } else {
                    $this -> controller = "error_page";
                }
                unset($arr[1]);
            }

            
            if($this -> page == "error" || $this -> controller == "error_page") {
                $this -> page = "error";
                $this -> controller = "error_page";
            }
            
            require_once "controllers/" . ($this -> page) . "/" . ($this -> controller) . ".php";

            if(isset($arr[2])){
                if(method_exists( $this->controller , $arr[2])) {
                    $this -> action = $arr[2];
                }
                else {   
                    $this -> page = "error";
                    $this -> controller = "error_page";
                    $this -> action = "error";
                    require_once "controllers/" . ($this -> page) . "/" . ($this -> controller) . ".php";
                }
                unset($arr[2]);
            }
            else {
                if($this -> page == "error" || $this -> controller == "error_page") {
                    $this -> action = "error";
                }
                unset($arr[2]);
            }
            $this -> params = (!empty($arr)) ? array_values($arr) :  [];
            $object = new $this->controller;
            call_user_func_array([$object, $this -> action],$this -> params);
        }

        function url_split(){
            if( isset($_GET["url"]) ){
                return explode("/", trim($_GET["url"], "/"));
            }
        }
    }

?>