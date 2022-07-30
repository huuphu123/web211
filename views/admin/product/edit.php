<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Products</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
    <link rel="stylesheet" href="/checkass_Web/public/css/admin/product/edit.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="light-mode">
    <!-- partial:index.partial.html -->
    <?php require_once 'views/admin/layout.php'; ?>
    <div class="main-content">
        <div class="main-header">
            <div class="header-menu">
                <a class="main-header-link" href="/checkass_Web/admin/home/index">Admin</a>
                <a class="main-header-link" href="/checkass_Web/admin/user/index">Users</a>
                <a class="main-header-link is-active" href="/checkass_Web/admin/product/index">Products</a>
                <a class="main-header-link" href="/checkass_Web/admin/news/index">News</a>
                <a class="main-header-link" href="/checkass_Web/admin/company/index">Company</a>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="main-information">
                <div class="item-detail">
                    <div class="detail-header">
                        EDIT PRODUCT
                    </div>
                </div>

                <form action="<?php echo '/checkass_Web/admin/product/change/' . $info_product['id']; ?>" method="post" enctype="multipart/form-data">
                    <div class="item-detail">
                            <div class="user-profile-pic">
                                <img src="<?php echo "/checkass_Web" . "/" . $info_product['img']; ?>" alt="" class="pic-display">
                                <div class="signin-button">
                                    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                            <div class="user-information">
                            <div class="signin-part-name" id="error" style="color: red; font-size: 11px; text-align: center; font-weight: bold;"></div>
                                <div class="signin-part-name" id="ok" style="color: green; font-size: 11px; text-align: center; font-weight: bold;"><?php if (isset($success)) echo $success; ?></div>
                                <div class="input-item">
                                    <label for="productname">Name</label>
                                    <input type="text" name="name" id="name" value="<?php echo $info_product['name'] ?>">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" name="quantity" id="quantity" value="<?php echo $info_product['quantity'] ?>">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">Price</label>
                                    <input type="text" name="price" id="price" value="<?php echo $info_product['price'] ?>">
                                </div>
                                <div class="input-item">
                                    <label for="descript">Description</label>
                                    <input type="text" name="content" id="content" value="<?php echo $info_product['content'] ?>">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">Category</label>
                                    <br>
                                    <select name="category" id="category" value=<?php echo $info_product['category_id'] ?>>
                                    <?php
                                    if($info_product['category_id']==1) {
                                        echo'
                                        <option selected="selected" value="1">Mobile Phone</option>
                                        <option value="2">Laptop</option>
                                        ';
                                    }
                                    else {
                                        echo'
                                        <option value="1">Mobile Phone</option>
                                        <option selected="selected" value="2">Laptop</option>
                                        ';
                                    }
                                        ?>
                                    </select>
                                </div>
                                <button type="button" id="edit-btn" name="btn-submit" class="signin-button">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    </div>
    </div>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="/checkass_Web/public/js/admin/product/edit.js"></script>
    <script src="/checkass_Web/public/js/admin/product/edit-button.js"></script>
</body>

</html>