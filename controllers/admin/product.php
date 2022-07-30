<?php
    require_once "render.php";
    require_once "models/connection.php";
    require_once "models/product.php";
    require_once "models/user.php";

    class product {

        function check(){
            echo "<h1>FUCK U</h1>";
        }

        function index(){
            $all_product = product_db::getAll();
            $data = array("all_product" => $all_product);
            render("product","index",$data);
        }

        function edit($id){
            $info_product = product_db::get_product_id($id);
            $data = array("info_product" => $info_product->fetch_assoc());
            render("product","edit",$data);
        }

        function add() {
            render("product","add");
        }

        function addProduct() {
            if(isset($_POST["btn-submit"])) {
                $name = $_POST['name'];
                $content = $_POST['content'];
                $price =$_POST['price'];
                $quantity =$_POST['quantity'];
                $category = $_POST['category'];
                $file_name = $_FILES['img']['name'];
                $file_temp = $_FILES['img']['tmp_name'];                
                $div =explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(mt_rand()), 0,10).'.'.$file_ext;
                $uploaded_image = "public/uploads/product/".$unique_image;
                move_uploaded_file($file_temp, $uploaded_image);
                product_db::insert($price, $quantity, $name, $category, $content, $uploaded_image);
                $success = "Thêm sản phẩm thành công";
                $data = array("success" => $success, "name" => $name, "quantity" => $quantity, "category" => $category, "content" => $content, "price" => $price, "uploaded_image" => $uploaded_image);
                render("product","add",$data);
            }
        }

        function change($id) {
            if(isset($_POST["btn-submit"])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $content = $_POST['content'];
                $category = $_POST['category'];
                if(!empty($_FILES['img']['name'])) {
                    $file_name = $_FILES['img']['name'];
                    $file_temp = $_FILES['img']['tmp_name'];                
                    $div =explode('.', $file_name);
                    $file_ext = strtolower(end($div));
                    $unique_image = substr(md5(mt_rand()), 0,10).'.'.$file_ext;
                    $uploaded_image = "public/uploads/product/".$unique_image;
                    move_uploaded_file($file_temp, $uploaded_image);
                    product_db::update($id, $price, $quantity, $name, $content, $uploaded_image,$category);
                } else {
                    product_db::update_noImg($id, $price, $quantity, $name, $content,$category);
                }
                $success = "Cập nhật thành công";
                $info_product = product_db::get_product_id($id);
                $data = array("info_product" => $info_product->fetch_assoc(), "success" => $success);
                render("product", "edit", $data);
            } else {
                header("Location: /checkass_Web/admin/product/edit");
            }
        }

        function delete($id) {
            product_db::delete($id);
            header("Location: /checkass_Web/admin/product/index");
        }

    }

?>