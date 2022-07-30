<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Products</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/admin/news/style.css" />
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
                     <a class="main-header-link" href="/checkass_Web/admin/product/index">Products</a>
                     <a class="main-header-link is-active" href="/checkass_Web/admin/news/index">News</a>
                     <a class="main-header-link" href="/checkass_Web/admin/company/index">Company</a>
                  </div>
               </div>
            <div class="content-wrapper">
               <div class="main-information">
                     <div class="item-information">
                        <div class="item-options">
                           <a href="#" class="item-option is-active">Edit News</a>
                        </div>
                     </div>
                     <div class="item-detail">
                        <form action="/checkass_Web/admin/news/edit_news/<?php echo $id; ?>"  method="post" enctype="multipart/form-data">
                            <div>
                            <div class="signin-part-name" id="error" style="color: red; font-size: 11px; font-weight: bold; padding-left: 6px;"></div>
                                <div class="signin-part-name" id="ok" style="color: green; font-size: 11px; text-align: center; font-weight: bold;"><?php if (isset($success)) echo $success; ?></div>
                                <div style="padding-left: 6px; font-size: 20px;">Image</div>
                                <div class="user-profile-pic">
                                    <img src="<?php echo "/checkass_Web" . "/" . $img; ?>" alt="" id="show_img" class="pic-display">
                                    <div class="signin-button" style="border: 2px solid var(--theme-color);; width: 70%; height: 40px; margin: 5px; border-radius: 8px">
                                        <input id="upload" type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                 </div>
                                <div style="padding-left: 6px; font-size: 20px;">Title</div>
                                <input type="text" name="title" id="title" style="border: 2px solid var(--theme-color);; width: 70%; height: 30px; margin: 5px; border-radius: 8px" value="<?php if(isset($title)){echo $title;} ?>">
                                </div>
                                <div>
                                <div style="padding-left: 6px; font-size: 20px;">Content</div>
                                <textarea style="border: 2px solid var(--theme-color); width: 70%; " name="content" id="content" cols="30" rows="10" ><?php if(isset($content)){echo $content;} ?></textarea>
                                </div>
                                <div>
                                <button name="btn-submit" id="edit-btn" type="button" style="color: #000; border: solid; font-size: 25px; margin-left: auto; margin-right: auto; border-radius: 5px;">Save</button>
                            </div>
                        </form>
                     </div>
                  
                     <div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
      </div>
        <!-- partial -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/checkass_Web/public/js/admin/news/add.js"></script>
        <script src="/checkass_Web/public/js/admin/news/edit_news.js"></script>
    </body>
</html>