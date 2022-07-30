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
        <title>LTW</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/checkass_Web/public/css/style.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/responsive.css" />
        <link rel="stylesheet" href="/checkass_Web/public/css/grid.css" />
    </head>
    <body class="light-mode">
        <!-- partial:index.partial.html -->
        <?php require_once 'views/main/layout.php'; ?>
        <div class="main-content">
          <div class="main-header">
            <a class="menu-link-main" href="#" style="text-decoration:none">News</a>
            <div class="header-menu">
            </div>
          </div>
          <div class="content-wrapper">
            <div style="width: 100%;"class="main-information">
                <div class="magazine-layout">
                  <div class="magazine-column row">
                    <?php 
                        while($result_news = $news -> fetch_assoc()){
                          echo'<article class="article col l-6 m-6 c-12">
                          <figure class="article-img">
                            <img src="/checkass_Web/' . $result_news['img'] . '" />
                          </figure>
                          <h2 class="article-title article-title--medium">
                            <a href="/checkass_Web/main/news/info/' . $result_news['id'] . '"' . 'class="article-link">' . $result_news['title'] . '</a>
                          </h2>
                          <div class="article-excerpt">
                            <p>' . textShorten($result_news['content']) . '</p>
                          </div>
                          <div class="article-author">
                            <div class="article-author-info">
                              <dl>
                                <dt>Release Date</dt>
                                <dd>' . $result_news['date'] . '</dd>
                              </dl>
                            </div>
                          </div>
                        </article>';
                        }
                    ?>
                  </div>
                  <div style="font-size: 17px;">Lastest News</div>
                  <div class="magazine-column row">
                        <?php 
                            $i = 1;
                            while($result_lastest = $lastest_news->fetch_assoc()){
                              if($i <= 3) {
                                echo '<article style="margin: 0 !important;" class="article col l-4 m-4 c-6">
                                <figure class="article-img">
                                  <img src="/checkass_Web/' . $result_lastest['img'] . '" />
                                </figure>
                                <h2 class="article-title article-title--small">
                                  <a href="/checkass_Web/main/news/info/' . $result_lastest['id'] . '"' . 'class="article-link">' . $result_lastest['title'] . '</a>
                                </h2>
                                <div class="article-creditation">
                                      <p>' . $result_lastest['date'] . '</p>
                                </div>
                              </article>';
                              }
                              $i ++;
                            }
                        ?>
                  </div>
                </div>
                
              </div>
              </div>
              </div>
          </div>
          <?php      include_once('views/main/footer.php');   ?>
          
        </div>
        <!-- partial -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/checkass_Web/public/js/main/news/nav.js"></script>
        <script src="/checkass_Web/public/js/script.js"></script>
    </body>
</html>