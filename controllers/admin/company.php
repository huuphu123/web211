<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/company.php";

    class company {

        function index(){
            $company = company_db::getAll();
            $data = array("company" => $company->fetch_assoc());
            render("company", "index", $data);
        }

        function update($id) {
            $name = $_POST["name"];
            $address = $_POST["address"];
            company_db::update($id, $name, $address);
            $company = company_db::getAll();
            $data = array("company" => $company->fetch_assoc(), "success" => "Cập nhật thành công");
            render("company", "index", $data);

        }
    }

?>