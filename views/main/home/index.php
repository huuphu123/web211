<?php $dir = dirname(__FILE__); ?>
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
                        <!-- Home -->
                        <h2 style="color: var(--theme-color);"><img height="100" src="/checkass_Web/views/main/image/logo.png" alt=""> BESTBARGAIN FOR YOU</h2>
                        <div style="margin-top: 20px; border-radius: 50px; color: var(--theme-color); background-color: var(--box-color); display: flex;" class="row">
                          <div class="col-md-12" style="text-align: center;">
                            <p>Since 2022 by four ambitious youngsters. We always put customers on top, our destiny is too create a platform where everyone have a chance to buy modern technology devices at the lowest cost in the world</p>
                        
                          <p>Each year, all manufacturer will plan to sale off their products. Not many people catch up with this because the sales off products usually out of stock quickly. So on BESTBARGAIN is here to help you.</p>
                          </div>
                        </div>  

                        <!-- Products -->
                        <div style="margin-top: 50px; text-indent: 25px; color: var(--theme-color);">
                          <div>
                            <h2>GET TO KNOW MORE ABOUT US</h2>
                            
                          </div> 
                          <div class="row">
                            <div class="col l-6 m-6 c-12" style="background-color: var(--box-color); text-align: center;  height: 400px; padding-right: 2px; padding-bottom: 2px; background-clip: content-box;">
                              <a style="color: var(--theme-color);" href="/checkass_Web/main/product">
                                <img style="height: 50%; margin-top: 10px;" src="https://icon-library.com/images/about-us-icon/about-us-icon-15.jpg" alt="">
                                <h3 style="height: 20%; text-align: center;">About us</h3>
                                <p>Want to know more about us, let's check it out</p>
                              </a>
                            </div>
                            <div class="col l-6 m-6 c-12" style="background-color: var(--box-color); text-align: center;  height: 400px; padding-left: 2px; padding-bottom: 2px; background-clip: content-box;">
                              <a style="z-index: 1000; color: var(--theme-color);" href="/checkass_Web/main/product">
                                <img style="height: 50%; margin-top: 10px;" src="https://vn.worknc.com/images/icons/hexagon/darkblue/GENERAL_USE_DARK_BLUE_ICON_NEWS-71.png" alt="">
                                <h3 style="height: 20%; text-align: center;">Check out the news</h3>
                                <p>Latest news of sale off that you love</p>
                              </a>
                            </div>
                          </div>
                        </div>

                
                        <!-- News -->
                         
                        
                      
                    </div>                 
                </div>

            </div>                    
            <div style="display: none" class="img__btn"></div>     
            
          </div>
          <?php include_once('views/main/footer.php');   ?>
</div>
        <!-- partial -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/checkass_Web/public/js/script.js"></script>
        <script src="/checkass_Web/public/js/main/home/nav.js"></script>
    </body>
</html>