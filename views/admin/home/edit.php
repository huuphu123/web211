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
                        EDIT ADMIN
                    </div>
                </div>

                <form action="<?php echo '/checkass_Web/admin/home/change/' . $info_admin['id']; ?>" method="post" enctype="multipart/form-data">
                    <div class="item-detail">
                            <div class="user-profile-pic">
                                <img src="<?php echo "/checkass_Web/public/uploads/admin/admin.png" ?>" alt="" class="pic-display">
                            </div>
                            <div class="user-information">
                            <div class="signin-part-name" id="error" style="color: red; font-size: 11px; text-align: center; font-weight: bold;"><?php if (isset($error)) echo $error; ?></div>
                                <div class="signin-part-name" id="ok" style="color: green; font-size: 11px; text-align: center; font-weight: bold;"><?php if (isset($success)) echo $success; ?></div>
                                <div class="input-item">
                                    <label for="productname">Username</label>
                                    <input type="text" name="username" id="username" value="<?php echo $info_admin['username'] ?>">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">Curent password</label>
                                    <input type="password" name="password" id="password">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">New password</label>
                                    <input type="password" name="new_password" id="new_password">
                                </div>
                                <div class="input-item">
                                    <label for="quantity">Re-type new password</label>
                                    <input type="password" name="re_password" id="re_password">
                                </div>
                                <button type="submit" id="edit-btn" name="btn-submit" class="signin-button">Save changes</button>
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
</body>

</html>