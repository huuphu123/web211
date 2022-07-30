<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>LTW</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <div class="main-content">
    <div class="main-header">
      <a class="menu-link-main" href="#" style="text-decoration:none">Our Products</a>
      <div class="header-menu">
      </div>
    </div>
    <div class="content-wrapper">
    <div class="ad-cont">
                    <div class="ad-slider animation" style="transform: translate3d(0%, 0px, 0px);">
                       <div data-target="1" class="slide slide--1">
                          <div class="slide__darkbg slide--1__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                            
                          </div> 
                       </div>
                       <div data-target="2" class="slide slide--2">
                          <div class="slide__darkbg slide--2__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                            
                          </div>                        
                        </div>
                       <div data-target="3" class="slide slide--3">
                          <div class="slide__darkbg slide--3__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                           
                          </div>
                       </div>
                       <div data-target="4" class="slide slide--4">
                          <div class="slide__darkbg slide--4__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                            
                          </div>
                       </div>
                       <div data-target="5" class="slide slide--5">
                          <div class="slide__darkbg slide--5__darkbg" style="transform: translate3d(0%, 0px, 0px);">
                            
                          </div>
                       </div>                      
                        </div>
                        <ul class="nav">
                       <li data-target="1" class="nav__slide nav__slide--1 nav-active"></li>
                       <li data-target="2" class="nav__slide nav__slide--2"></li>
                       <li data-target="3" class="nav__slide nav__slide--3"></li>
                       <li data-target="4" class="nav__slide nav__slide--4"></li>
                       <li data-target="5" class="nav__slide nav__slide--5"></li>
                        </ul>
                        <div data-target="right" class="side-nav side-nav--right"></div>
                        <div data-target="left" class="side-nav side-nav--left"></div>
                  </div>
      <div class="content-section">
        <!-- <div class="main-information"> -->
        <div class="apps-card row">
          <?php 
          $cat="";
            while($all_p = $all->fetch_assoc()) {
              if($all_p['category_id']==1) {
                $cat="Mobile phone";
              }
              else {
                $cat="Laptop";
              }
              echo '
              <div class="app-card col l-3 m-6 c-12">
              <a href="/checkass_Web/main/product/info/' . $all_p['id'] . '"' . ' style="cursor: pointer; text-decoration: none;">
              <div class="product-cards__container">
                <div class="card">
                    <div class="card-head">
                      <img src="/checkass_Web/'. $all_p['img'] . '"' . 'alt="Shoe" class="product-img">
                    </div>
                  <div class="card-body">
                    <div class="product-desc">
                      <span class="product-title">
                        <b>'. $all_p['name'] . '</b>
                        <span class="badge">
                          New
                        </span>
                      </span>
                      <span class="product-caption">
                      <b>'. $cat . '</b>
                      </span>
                    </div>
                    <div class="product-properties">
                      <span class="product-price">
                        <b>' . $all_p['price'] . '</b>$
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>';
            }
            ?>
          
        </div>
      </div>
    </div>
  </div>
  </div>
  <div style="display: none" class="img__btn"></div>     
  <?php      include_once('views/main/footer.php');   ?>

  </div>
  <!-- partial -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="/checkass_Web/public/js/script.js"></script>
  <script src="/checkass_Web/public/js/main/product/nav.js"></script>
</body>

</html>