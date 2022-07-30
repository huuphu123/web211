<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Products</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/admin/user/info.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="light-mode">
        <!-- partial:index.partial.html -->
        <?php require_once 'views/admin/layout.php'; ?>
              <div class="main-content">
                <div class="main-header">
                  <div class="header-menu">
                     <a class="main-header-link" href="/checkass_Web/admin/home/index">Admin</a>
                     <a class="main-header-link is-active" href="/checkass_Web/admin/user/index">Users</a>
                     <a class="main-header-link" href="/checkass_Web/admin/product/index">Products</a>
                     <a class="main-header-link" href="/checkass_Web/admin/news/index">News</a>
                     <a class="main-header-link" href="/checkass_Web/admin/company/index">Company</a>
                  </div>
               </div>
               <div class="content-wrapper">
                  <div class="search-side">
                     <div class="content-section-title">
                        USERS
                     </div>
                     <div class="search-results">
                        <?php 
                          while($result_user = $all ->fetch_assoc()){
                           echo'
                           <a href="/checkass_Web/admin/user/information/' . $result_user['id'] . '" style="text-decoration:none;">
                           <button class="search-result-item"';
                           if($result_user['id'] == $user_id) {echo ' style="border: 2px solid black;" ';}
                            echo 'data-email = "' . $result_user['email'] . '"' .' 
                           data-name = "' . $result_user['name'] . '"' .' data-img = "' . $result_user['img'] . '"' .' 
                           data-phone = "' . $result_user['phone'] . '"' .' data-location = "' . $result_user['location'] . '"' .' 
                           data-uid = "' . $result_user['id'] . '"' .'>
                              <div class="result-information">
                                 <img src="/checkass_Web/' . $result_user['img'] . '"' . 'alt="" class="profile-pic">' .
                                 $result_user['name'] . '
                              </div>
                              <div class="additional-information">
                                 <div class="first-addition">' . 
                                    $result_user['email'] . '
                                 </div>
                              </div>
                           </button></a>';
                          }
                        ?>
                     </div>
                  </div>
                  <div id="information-user" class="main-information">
                     <div class="item-information">
                        <div class="item-name">
                           <img id="show-img" src="<?php echo '/checkass_Web' . '/' . $all_info['img'] ?>" alt="" class="profile-pic">
                           <span id="show_name"><?php echo $all_info['name']; ?></span>
                        </div>
                        <div class="item-options">
                           <a id="info" href="#" class="item-option is-active">Information</a>
                           <a id="trans" href="<?php echo '/checkass_Web/admin/user/transactions/' . $user_id ?>" class="item-option">Transactions</a>
                           <a id="comm" href="<?php echo '/checkass_Web/admin/user/comment/' . $user_id ?>" class="item-option">Comments</a>
                        </div>
                     </div>
                     <div class="item-detail">
                        <div class="user-profile-pic">
                           <img id= "img" src="<?php echo '/checkass_Web' . '/' . $all_info['img'] ?>" alt="" class="pic-display">
               
                        </div>
                        <div class="user-information">
                           <div class="input-item">
                              <label for="email">Email:</label>
                              <input id = "email" style="background-color: var(--box-color); color: var(--theme-color);" value="<?php echo $all_info['email'] ?>">
                           </div>
                           <div class="input-item">
                              <label for="username">Name:</label>
                              <input id="name" style="background-color: var(--box-color); color: var(--theme-color);" value="<?php echo $all_info['name'] ?>">
                           </div>
                           <div class="input-item">
                              <label for="phone">Phone Number:</label>
                              <input id="phone" style="background-color: var(--box-color); color: var(--theme-color);" value="<?php echo $all_info['phone'] ?>">
                           </div>
                           <div class="input-item">
                              <label for="location">Location</label>
                              <input id= "location" style="background-color: var(--box-color); color: var(--theme-color);" value="<?php echo $all_info['location'] ?>">
                           </div>
                           <a href="/checkass_Web/admin/user/delete/<?php echo $all_info['id']?>"><button style="display: inline;" class="signin-button">Xóa thành viên</button></a>
                        </div>
                     </div>
                     <div>
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
        <script src="/checkass_Web/public/js/admin/user/info.js"></script>
        <!-- <script src="/checkass_Web/public/js/admin/user/click.js"></script> -->
    </body>
</html>