<?php
    function textShorten($text, $limit = 400){
        if(strlen($text) > $limit) {
            $text = $text. " ";
            $text = substr($text, 0, $limit);
            $text = substr($text, 0, strrpos($text, ' '));
            $text = $text.".....";
        }
        return $text;
     }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Products</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/admin/product/style.css" />
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
                        <div class="item-options">
                           <a href="/checkass_Web/admin/news/index" class="item-option is-active">All News</a>
                           <a href="/checkass_Web/admin/news/add" class="item-option">Add News</a>
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
                        <table class="all-details" style="text-align: center;">
                           <thead>
                              <tr>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Img</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                $i = 1;
                                while($result_news= $all_news->fetch_assoc()) {
                                    echo '
                                    <tr>
                                       <td>'. $i.'</td>
                                       <td>'. $result_news['date'].'</td>
                                       <td>
                                       <img src="/checkass_Web/'. $result_news['img'] . '" alt="" class="mini-product-img">
                                       </td>
                                       <td>'. $result_news['title'] . '</td>
                                       <td>'. textShorten($result_news['content']). '</td>
                                       <td><a type="button" class="btn btn-danger del-btn" onclick="return confirm('; echo "'" . 'Bạn có muốn xóa bài viết này?' . "'";   echo ')" href="/checkass_Web/admin/news/delete/' . $result_news['id'] . '"' .'>Delete</a>
                                             <a type="button" class="btn btn-primary edit-btn" href="/checkass_Web/admin/news/edit/' . $result_news['id'] . '"' .'>Edit</a>
                                       </td>
                                    </tr>';
                                    $i++;
                                 }
                              ?>
                               
                            </tbody>
                        </table>
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
        <script src="/checkass_Web/public/js/admin/news/script.js"></script>
    </body>
</html>