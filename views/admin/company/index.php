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
                     <a class="main-header-link" href="/checkass_Web/admin/news/index">News</a>
                     <a class="main-header-link is-active" href="/checkass_Web/admin/company/index">Company</a>
                  </div>
               </div>
            <div class="content-wrapper">
               <div class="main-information">
                     <div class="item-information">
                        <div class="item-options">
                           <a href="#" class="item-option is-active">Edit Company</a>
                        </div>
                     </div>
                     <br>
                     <form action="<?php echo '/checkass_Web/admin/company/update/' . $company['id']; ?>" method="post" enctype="multipart/form-data">
                        <div class="item-detail" style="width: 100%; padding-top: 0px;">
                        <div class="signin-part-name" id="error" style="color: red; font-size: 11px; text-align: center; font-weight: bold;"><?php if (isset($error)) echo $error; ?></div>
                                <div class="signin-part-name" id="ok" style="color: green; font-size: 11px; text-align: center; font-weight: bold;"><?php if (isset($success)) echo $success; ?></div>
                            <input type="text" id="name" name ="name" placeholder="Tên công ty" style=" border: 2px solid var(--theme-color);; width: 100%; height: 35px; margin: 10px; border-radius: 8px; padding-left: 6px; display: block;" value="<?php echo $company['name']; ?>">
                            <input type="text" id="address" name="address" placeholder="Địa chỉ" style=" border: 2px solid var(--theme-color);; width: 100%; height: 35px; margin: 10px; border-radius: 8px; padding-left: 6px; display: block;" value="<?php echo $company['address'] ?>">  
                            <button type="button" id="submit-btn" class="signin-button" style="border-radius: 0px; color: var(--theme-color); border: solid; font-size: 15px; margin-left: auto; margin-right: auto;">UPDATE CONTACT TO FOOTER</button>
                        </div>     
                    </form> 
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
        <script src="/checkass_Web/public/js/admin/company/update.js"></script>        
    </body>
</html>