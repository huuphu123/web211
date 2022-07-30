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
                           ADMIN
                           <a href="/checkass_Web/admin/home/add"  style="text-decoration: none;"><button class="filter">
                              Add new admin
                            </button></a>
                        </div>
                        <table class="all-details" style="text-align: center;">
                           <thead>
                              <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Username</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                                 $i = 1;
                                 while($admin = $all_admin->fetch_assoc()) {
                                    echo '
                                    <tr>
                                       <td>'. $i.'</td>
                                       <td>
                                       <img src="/checkass_Web/public/uploads/admin/admin.png" alt="" class="mini-product-img">
                                       </td>
                                       <td>'. $admin['username'] . '</td>
                                       <td>';
                                       if($admin['id']!=$_SESSION['id_admin']) { echo '<a type="button" class="btn btn-danger del-btn" onclick="return confirm('; echo "'" . 'Bạn có muốn xóa admin này không?' . "'";   echo ')" href="/checkass_Web/admin/home/delete/' . $admin['id'] . '"' .'>Delete</a>';}
                                             echo '<a type="button" class="btn btn-primary edit-btn" href="/checkass_Web/admin/home/edit/' . $admin['id'] . '"' .'>Edit</a>
                                       </td>
                                    </tr>';
                                    $i ++;
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
        <!-- partial -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/checkass_Web/public/js/admin/product/script.js"></script>
    </body>
</html>