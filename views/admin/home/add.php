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
                <a class="main-header-link is-active" href="/checkass_Web/admin/home/index">Admin</a>
                <a class="main-header-link" href="/checkass_Web/admin/user/index">Users</a>
                <a class="main-header-link" href="/checkass_Web/admin/product/index">Products</a>
                <a class="main-header-link" href="/checkass_Web/admin/news/index">News</a>
                <a class="main-header-link" href="/checkass_Web/admin/company/index">Company</a>
            </div>
        </div>

        <div class="content-wrapper">
            <div class="main-information">
                <div class="item-detail">
                    <div class="detail-header">
                        ADD NEW ADMIN
                    </div>
                </div>

                <form action="/checkass_Web/admin/home/add_admin" method="POST" enctype="multipart/form-data">
                    <div class="item-detail">
                            <div class="user-profile-pic">
                                <img src="<?php echo "/checkass_Web/public/uploads/admin/admin.png" ?>" alt="" id="show_img" class="pic-display">
                            </div>
                            <div class="user-information">
                                <div class="signin-part-name" id="error" style="color: red; font-size: 11px; text-align: center; font-weight: bold;"></div>
                                <div class="signin-part-name" id="ok" style="color: green; font-size: 11px; text-align: center; font-weight: bold;"><?php if (isset($success)) echo $success; ?></div>
                                <div class="input-item">
                                    <label for="productname">Username</label>
                                    <input type="text" name="username" id="username" value="<?php if(isset($username)) echo $username; ?>">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">Password</label>
                                    <input type="password" name="password" id="password" value="<?php if(isset($password)) echo $password; ?>">
                                </div>
                                <button type="button" id="add-btn" name="btn-submit" class="signin-button">Add new admin</button>
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
    <script src="/checkass_Web/public/js/admin/home/add.js"></script>
</body>

</html>