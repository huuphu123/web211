<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Products</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/admin/user/trans.css" />
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
                            <a href="/checkass_Web/admin/user/transactions/' . $result_user['id'] . '" style="text-decoration:none;">
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
                  <div class="main-information">
                     <div class="item-information">
                        <div class="item-name">
                           <img id="show-img" src="<?php echo '/checkass_Web' . '/' . $all_info['img'] ?>" alt="" class="profile-pic">
                           <span id="show_name"><?php echo $all_info['name']; ?></span>
                        </div>
                        <div class="item-options">
                           <a id="info" href="<?php echo '/checkass_Web/admin/user/information/' . $user_id ?>"  class="item-option">Information</a>
                           <a id="trans" href="#" class="item-option is-active">Transactions</a>
                           <a id="comm" href="<?php echo '/checkass_Web/admin/user/comment/' . $user_id ?>" class="item-option">Comments</a>
                        </div>
                     </div>
                     <div class="item-detail">
                        <div class="detail-header">
                           <button class="filter">
                              <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                              </svg>
                              All
                              <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                              </svg>
                            </button>
                        </div>
                        <table class="all-details">
                           <thead>
                              <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Method</th>
					            <th>Name</th>
					            <th>Phone</th>
                                <th>Location</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($result_payment = $all_payment->fetch_assoc()){
                                        echo'<tr>
                                        <td>' .
                                          $result_payment['date'] . '
                                        </td>
                                        <td>' .
                                          $result_payment['money'] .'
                                        </td>
                                        <td>' .
                                          $result_payment['type'] . '
                                       </td>
                                      <td>' .
                                          $result_payment['name'] . '
                                       </td>
                                      <td>' .
                                          $result_payment['phone'] . '
                                       </td>
                                      <td>' .
                                          $result_payment['location'] . '
                                       </td>
                                       </tr>';
                                    }
                                 
                                ?>
                            </tbody>
                        </table>
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
        <script src="/checkass_Web/public/js/admin/user/trans.js"></script>
        <!-- <script src="/checkass_Web/public/js/admin/user/click.js"></script> -->
    </body>
</html>