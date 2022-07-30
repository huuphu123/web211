<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="/checkass_Web/public/css/style.css" />
    <link rel="stylesheet" href="/checkass_Web/public/css/grid.css" />
    <link rel="stylesheet" href="/checkass_Web/public/css/responsive.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="light-mode">
    <!-- partial:index.partial.html -->
    <?php require_once 'views/main/layout.php'; ?>
    <div style=" padding: 0; overflow: 0;" class="main-content">
        <div class="main-header">
            <a class="menu-link-main" href="#" style="text-decoration:none">User information</a>
        </div>
        <div class="content-wrapper">
            <div style="width:100%" class="main-information">
                <form action="/checkass_Web/main/user_account/change" method="post" enctype="multipart/form-data">
                    <div class="item-detail row">
                        <div style="text-align: center;margin: 0 !important;" class="user-profile-pic col l-4 m-5 c-12">
                            <img src="<?php echo "/"."checkass_Web"."/". $result['img']; ?>" alt="" class="pic-display">
                            <div class="signin-button">
                                <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <div class="user-information col l-8 m-7 c-12">
                            <div class="signin-part-name" id="error" style="color: red; font-size: 11px; text-align: center; font-weight: bold;"><?php if(isset($error)) echo $error; ?></div>
                            <div class="signin-part-name" id="ok" style="color: green; font-size: 11px; text-align: center; font-weight: bold;"><?php if(isset($success)) echo $success; ?></div>
                            <div class="input-item">
                                <label for="username">Name</label>
                                <input type="text" id="username" name="username" value="<?php echo $result['name'];?>">
                            </div>
                            <div class="input-item">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone" value="<?php echo $result['phone'];?>">
                            </div>
                            <div class="input-item">
                                <label for="age">Age</label>
                                <input type="text" id="age" name="age" value="<?php echo $result['age'];?>">
                            </div>
                            <div class="input-item">
                                <label for="location">Location</label>
                                <input type="text" id="location" name="location" value="<?php echo $result['location'];?>">
                            </div>
                            <div class="input-item">
                                <label for="location">Current Password</label>
                                <input type="password" name="current_password" id="current_password">
                            </div>
                            <div class="input-item">
                                <label for="location">New Password</label>
                                <input type="password" name="newpass" id="newpass">
                            </div>
                            <div class="input-item">
                                <label for="location">Re-type New Password</label>
                                <input type="password" name="repass" id="repass">
                            </div>
                            <button type="submit" name="btn-submit" class="signin-button">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
<?php include_once('views/main/footer.php');   ?>
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="/checkass_Web/public/js/script.js"></script>
    <script src="/checkass_Web/public/js/main/user_account/nav.js"></script>
</body>

</html>