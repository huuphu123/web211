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
  <!-- <link rel="stylesheet" href="/checkass_Web/public/css/main/cart/style.css" /> -->
  <link rel="stylesheet" href="/checkass_Web/public/css/grid.css" />
  <link rel="stylesheet" href="/checkass_Web/public/css/responsive.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="light-mode">
  <!-- partial:index.partial.html -->
  <?php require_once 'views/main/layout.php'; ?>
  <div style="flex-grow:1; padding-left: 22px;">
    <div style="width: 100%;" class="row">
      <div style="margin: 0 !important; padding-top: 0px;" class="cart-section  col l-6 m-6 c-12">
        <div class="cart">
          <?php 
              $money = 0;
              while($result_list = $product->fetch_assoc()){
                echo '<div class="cart-items">
                <div class="cart-item">
                  <div class="left">
                    <div class="cart-image">
                      <div class="image-wrapper"><img src="/checkass_Web/'. $result_list['img'] . '"' . ' class="image" /></div>
                    </div>
                  </div>
                  <div class="right">
                    <div class="name">'. $result_list['product_name'] . '</div>
                    <div class="price">'. $result_list['price'] . '$' . '</div>
                    <div class="count">
                      <div class="button dec" data-pid="' . $result_list['product_id'] . '"' . ' data-cid="' . $result_list['id'] . '"' . ' data-price_product="' . $result_list['price']. '"' . ' data-product_quantity="' . $result_list['product_quantity']. '"' . '>&lt;</div>
                      <div class="number" id="number_' . $result_list['id'] . '"' .' data-pid="' . $result_list['product_id'] . '"' . ' data-cid="' . $result_list['id'] . '"' . '>'.$result_list['number'].'</div>
                      <div class="button inc" data-pid="' . $result_list['product_id'] . '"' . ' data-cid="' . $result_list['id'] . '"' . ' data-price_product="' . $result_list['price']. '"' . ' data-product_quantity="' . $result_list['product_quantity']. '"' . '>&gt;</div>
                    </div>
                  </div>
                </div>
                </div>';
                $money = $money + $result_list['price'] * $result_list['number'];
              }
          ?>
          <div class="calc-cost">
            <div class="calc-cost-item">
              <div class="cost-note">SUMMARY:</div>
              <div class="cost-value" id="value_money" value="<?php if(isset($money)) {echo $money ;} else { echo 0;} ?>"><?php if(isset($money)) {echo $money . '$';} else { echo 0;} ?></div>
            </div>
          </div>
          <br><br><br>
          <div class="payment-part-name">Trading History:</div>
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
      <div style="margin: 0 !important" class="payment-section col l-6 m-6 c-12">
        <form >
        <div style="overflow: scroll;" class="payment-information">
        <div class="signin-part-name" id="error" style="color: red; font-size: 11px; text-align: center; font-weight: bold;"></div>
            <div class="information">
              <div class="payment-part-name">Thông tin cá nhân:</div>
              <span class="information-input">
                <input class="clean-slide" id="name" name="name" type="text" /><label for="fullname">Name</label>
              </span>
              <span class="information-input">
                <input class="clean-slide" id="phone" name="phone" type="text" /><label for="phonenumber">Phone numbers</label>
              </span>
              <span class="information-input">
                <input class="clean-slide" id="location" name="location" type="text" /><label for="location">Address</label>
              </span>
            </div>
            <div class="payment-part-name">PAYMENT METHOD</div>
            <div class="payment-choice">
              <div style="text-align: center;" class="col-12 checkboxes row">
                <div class="col l-4 m-12 c-4">
                  <input class="checkbox-tools" type="radio" name="tools" id="tool-4" value="Momo">
                  <label class="for-checkbox-tools" for="tool-4">
                    <i class="uil uil-crop-alt"></i>
                    Momo
                  </label>
                </div>
                <div class="col l-4 m-12 c-4">
                  <input class="checkbox-tools" type="radio" name="tools" id="tool-5" value="Paypal">
                  <label class="for-checkbox-tools" for="tool-5">
                    <i class="uil uil-brush-alt"></i>
                    Paypal
                  </label>
                </div>
                <div class="col l-4 m-12 c-4">
                  <input class="checkbox-tools" type="radio" name="tools" id="tool-6" value="COD">
                  <label class="for-checkbox-tools" for="tool-6">
                    <i class="uil uil-image-resize-landscape"></i>
                    COD
                  </label>
                </div>
              </div>
            </div>
            <div class="confirm-payment">
              <button type="button" id="pay-btn" class="blog-slider__button" data-cid=<?php echo $_SESSION['id']?>>PAY NOW</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('views/main/footer.php');   ?>

  </div>
  <!-- partial -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="/checkass_Web/public/js/script.js"></script>
  <script src="/checkass_Web/public/js/main/cart/click.js"></script>
  <script src="/checkass_Web/public/js/main/cart/pay.js"></script>
  <script src="/checkass_Web/public/js/main/cart/nav.js"></script>
</body>

</html>