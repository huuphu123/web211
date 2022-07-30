<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>LTW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
    <link rel="stylesheet" href="/checkass_Web/public/css/style.css" />
    <link rel="stylesheet" href="/checkass_Web/public/css/grid.css" />
    <link rel="stylesheet" href="/checkass_Web/public/css/responsive.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="light-mode">
    <!-- partial:index.partial.html -->
    <?php require_once 'views/main/layout.php'; ?>
    <div style="overflow: auto;"class="content-wrapper">
                    <div class="header-wrapper">
                        <div class="content">
                            <div class="bg-shape"></div>
                            <div class="product-img-slider">
                                <div class="product-img__item" id="img3">
                                    <img src="<?php echo "/checkass_Web". "/" . $info_product['img'];?>" alt="star wars" class="product-img__img" />
                                </div>
                            </div>
                            <div class="product-slider">
                                <div class="product-slider__wrp swiper-wrapper">
                                    <div class="product-slider__item swiper-slide" data-target="img3">
                                        <div class="product-slider__card">
                                            <div class="product-slider__content">
                                                <h1 class="product-slider__title">
                                                <?php echo $info_product['name']?> <br />
                                                <h3 class="small"><?php if($info_product['category_id'] == 1){ echo "Mobile Phone";} else { echo "laptop";}?></h3>
                                                </h1>
                                                <span class="product-slider__price"><?php echo $info_product['price']?>$</sup></span>
                                                <div class="product-ctr">
                                                    <div class="product-labels" style="text-align: center;">
                                                        <div class="product-labels__title" id="num_product"><?php echo $info_product['quantity']?></div>
                                                        <div class="product-labels__title"><?php if($info_product['quantity']>1){echo "PRODUCTS";} else {echo "PRODUCT";}?></div>
                                                        
                                                    </div>

                                                    <span class="hr-vertical"></span>

                                                    <div class="product-inf">
                                                        <div class="product-inf__percent" style="font-size:11px;">
                                                            <div class="product-inf__percent-circle">
                                                            <?php echo $info_product['content'] ?>
                                                        </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="product-slider__bottom">
                                                    <?php 
                                                        if(isset($_SESSION['id'])) {
                                                            $check = product_db::check_addcart($_SESSION['id'], $info_product['id']); 
                                                        }
                                                    ?>
                                                    <button class="product-slider__cart" id="add_cart" data-pid="<?php echo $info_product['id']; ?>" data-uid="<?php if(isset($_SESSION['id'])) { echo $_SESSION['id'];} ?>" data-check="<?php if(isset($_SESSION['id'])) {if($check == 1){echo 1;} else {if($info_product['quantity'] == 0) {echo 3;} else {echo 2;}}}?>">
                                                        <?php
                                                            if(isset($_SESSION['id'])) {
                                                                if($check == 1) { 
                                                                    echo "PRODUCT HAS BEEN ADDED TO CART";
                                                                } else  { 
                                                                    if($info_product['quantity'] ==0) {
                                                                        echo "OUT OF STOCK";
                                                                    } else {
                                                                        echo "ADD TO CART";
                                                                    }
                                                                }

                                                                
                                                            } else if($info_product['quantity']==0) {
                                                                echo "OUT OF STOCK";
                                                            }else { 
                                                                echo '<a href="#" onclick="alert('.  "'Please login to buy'" . ')" style="text-decoration:none; color:black;"> ADD TO CART </a>';
                                                            }
                                                        ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <svg class="hidden" hidden>
                        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                            <path
                                d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"
                            ></path>
                        </symbol>
                        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                            <path
                                d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"
                            ></path>
                        </symbol>
                    </svg>
                    <!-- <div class="product-detail">
                    <h3>PRODUCT COMMENTS</h3></div> -->
                    <div class="comments-container">
                        <p style=" margin-bottom: 8px;">COMMENTS</p>
                        <ul id="comments-list" class="comments-list">
                    <?php 
                        foreach($all as $value) {
                            echo '                            
                                <li>
                                    <div class="comment-main-level">
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img class="profile-img" src="' . '/' . 'checkass_Web' . '/' . $value['comment_out']['img'] . '"' .'alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-author"><a>' . $value['comment_out']['name'] . '</a></h6>
                                                <span>' . $value['comment_out']['date'] . '</span>';
                                                if(isset($_SESSION['id'])) { 
                                                    if($value['comment_out']['user_id'] == $_SESSION['id']) {
                                                        echo '<a onclick="return confirm('; echo "'" . 'Bạn có muốn xóa bình luận?' . "'";   echo ')" href="/checkass_Web/main/product/delete_comment/' . $_SESSION['id'] . '/'. $info_product['id']. '" style="text-decoration:none;">' . '<i class="fa fa-times"></i></a>';
                                                    }
                                                }
                                            echo '
                                            </div>
                                            <div class="star-rating">
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star checked"></i>
                                                <i class="fa fa-star-o not-checked"></i>
        
                                            </div>
                                            <div class="comment-content">
                                            ' . $value['comment_out']['content'] . '
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comments-list reply-list">';
                                    //reply_comment
                                    while($reply = $value['reply'] -> fetch_assoc()) {
                                        echo '
                                        <li>
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="' . '/' . 'checkass_Web' . '/' . $reply['img'] . '"' .'alt=""></div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name"><a>' . $reply['name'] . '</a></h6>
                                                    <span>' . $reply['date'] . '</span>';
                                                    if(isset($_SESSION['id'])) { 
                                                        if($reply['user_id'] == $_SESSION['id']) {
                                                            echo '<a onclick="return confirm('; echo "'" . 'Bạn có muốn xóa bình luận?' . "'";   echo ')" href="/checkass_Web/main/product/delete_comment/' . $reply['id'] . '/'. $info_product['id']. '" style="text-decoration:none;">' . '<i class="fa fa-times"></i></a>';
                                                        }
                                                    }
                                                echo '
                                                </div>
                                                <div class="comment-content">
                                                    ' . $reply['content'] . ' 
                                               </div>
                                            </div>
                                        </li>';
                                    }
                            echo '
                                        <div id="reply_p_' . $value['comment_out']['id']. '"' .' class = "reply_box">
                                            <textarea id="content_p_' . $value['comment_out']['id']. '"' . ' class="form-control" placeholder="Reply a comment..." rows="3"></textarea>
                                            <br>
                                            <button type="button" class="btn btn-info pull-right reply-btn" data-pid='. $info_product['id'] . ' data-uid=';
                                                if(isset($_SESSION['id'])){ echo $_SESSION['id'];} else {echo -1;};
                                                echo ' data-parent_comment= ' . $value['comment_out']['id'] . ' data-user_name = "';
                                                if(isset($_SESSION['name'])){ echo $_SESSION['name'];} else {echo 'none';}
                                                echo '"' . ' data-user_img = "';
                                                if(isset($_SESSION['img'])){ echo $_SESSION['img'];} else {echo 'none';}
                                                echo '"' . '>Post</button>
                                        </div>
                                    </ul>
                                </li><br>';
                        }
                    ?>
                            <div id="write-p" class="write-box">
                                <textarea id="content_p_write" class="form-control" placeholder="Write a comment..." rows="3"></textarea>
                                <br>
                                <button id = "btn-write" type="button" class="btn btn-info pull-right" 
                                data-pid="<?php echo $info_product['id'];?>" 
                                data-uid="<?php if(isset($_SESSION['id'])){ echo $_SESSION['id'];} else {echo -1;};?>" 
                                data-user_name="<?php if(isset($_SESSION['name'])){ echo $_SESSION['name'];} else {echo 'none';};?>" 
                                data-user_img="<?php if(isset($_SESSION['img'])){ echo $_SESSION['img'];} else {echo 'none';};?>"    
                                >Post</button>
                            </div>
                        </ul>
                    </div>

                
            </div>
            
        </div>
        <?php      include_once('views/main/footer.php');   ?>
        <div class="modal fade" id="DeleteUserModal" tabindex="-1" role="dialog" aria-labelledby="DeleteUserModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h5 class="modal-title">Xóa</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form action="index.php?page=admin&controller=user&action=delete" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="email" />
                            <input type="hidden" name="img" />
                            <p>Bạn chắc chưa ?</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-danger btn-outline-light" type="button" data-dismiss="modal">Đóng lại</button>
                            <button class="btn btn-danger btn-outline-light" type="submit">Xác nhận</button>
                        </div>
                    </form>
                 </div>
            </div> 
        </div>
            
        <!-- </div>
                </div>
            </div>
        </div> -->
    <!-- partial -->
    <script src="/checkass_Web/public/js/script.js"></script>
    <script src="/checkass_Web/public/js/main/product/click.js"></script>
    <script src="/checkass_Web/public/js/main/product/comment.js"></script>
    <script src="/checkass_Web/public/js/main/product/nav.js"></script>
</body>

</html>