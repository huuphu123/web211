<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>LTW</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" />
  <link rel="stylesheet" href="/checkass_Web/public/css/main/login/style.css" />
</head>

<body style="background: url(https://wallpaperaccess.com/full/2985860.jpg) no-repeat ; background-size: 100% 100%;">
  <div>

    <div class="cont">

      <div class="form sign-in">
        <div class="signin-information">
          <div class="information">
            <div class="signin-part-name">Welcome back</div>
            <div class="signin-part-name" id="error" style="color: red; font-size: 11px;"></div>
            <span class="information-input">
              <input class="clean-slide" id="email" type="text" /><label for="fullname">Email</label>
            </span>
            <span class="information-input">
              <input class="clean-slide" id="password" type="password" /><label for="phonenumber">Password</label>
            </span>
          </div>
          <div class="confirm-signin">
            <button class="blog-slider__button" id="sign-in-btn">Sign In</button>
          </div>
          <div class="signin-part-name" style="font-size: 9px;">
            <a href="/checkass_Web/" class="txt1">
              BACK TO HOME
            </a>
          </div>
        </div>
      </div>
      <div class="sub-cont">
        <div class="img">
          <div class="img__text m--up">
            <h2>New here?</h2>
            <p>Sign up and discover great amount of new opportunities!</p>
          </div>
          <div class="img__text m--in">
            <h2>One of us?</h2>
            <p>If you already has an account, just sign in. We've missed you!</p>
          </div>
          <div class="img__btn">
            <span class="m--up">Sign Up</span>
            <span class="m--in">Sign In</span>
          </div>
        </div>
        <div class="form sign-up">
          <div class="signup-information">
            <div class="information">
              <div class="signin-part-name">Welcome to our website</div>
              <div class="signin-part-name" id="error_signup" style="color: red; font-size: 11px;"></div>
              <span class="information-input">
                <input class="clean-slide" id="name-signup" type="text" /><label for="fullname">Fullname</label>
              </span>
              <span class="information-input">
                <input class="clean-slide" id="email-signup" type="text" /><label for="email">Email</label>
              </span>
              <span class="information-input">
                <input class="clean-slide" id="password-signup" type="password" /><label for="password">Password</label>
              </span>
              <span class="information-input">
                <input class="clean-slide" id="phone-signup" type="text" /><label for="password">Phone</label>
              </span>
              <span class="information-input">
                <input class="clean-slide" id="age-signup" type="text" /><label for="password">Age</label>
              </span>
              <span class="information-input">
                <input class="clean-slide" id="location-signup" type="text" /><label for="password">Location</label>
              </span>
            </div>
            <div class="confirm-signin">
              <button class="blog-slider__button" id="sign-up-btn">Sign Up</button>
            </div>
            <div class="signin-part-name" style="font-size: 9px;">
              <a href="/checkass_Web/" class="txt1">
                BACK TO HOME
              </a>
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
  <script src="/checkass_Web/public/js/main/home/script.js"></script>
  <script src="/checkass_Web/public/js/main/login/sign-in.js"></script>
  <script src="/checkass_Web/public/js/main/login/sign-up.js"></script>
</body>

</html>