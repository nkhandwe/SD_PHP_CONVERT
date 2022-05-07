<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Forms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Slab:700%7CPlayfair+Display:400,700,700i%7CLato:300%7CMontserrat:300,400,500,600">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"> </div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
             <!-- Page Header-->
     <?php include 'pageheader.php' ?>
     <?php include 'menu.php' ?>
      </header>
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/breadcrumbs-bg.jpg);">
        <div class="container">
          <h4 class="breadcrumbs-custom-title">Forms</h4>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Forms</li>
          </ul>
        </div>
      </section>
      <!-- Forms-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7 col-xl-5">
              <h3>Login form</h3>
              <div class="group-sm group-middle group-custom"><a class="button button-facebook button-icon button-icon-left button-round" href="#"><span class="icon fa fa-facebook"></span>Facebook</a><a class="button button-twitter button-icon button-icon-left button-round" href="#"><span class="icon fa fa-twitter"></span>Twitter</a><a class="button button-google button-icon button-icon-left button-round" href="#"><span class="icon fa fa-google-plus"></span>Google+</a></div>
              <div class="text-decoration-lines"><span class="text-decoration-lines-content">or</span></div>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform rd-form-centered">
                <div class="form-wrap">
                  <input class="form-input" id="login-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="login-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                  <label class="form-label" for="login-password">Password</label>
                </div>
                <button class="button button-block button-primary" type="submit">Enter </button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact us-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
              <h3>Contact us</h3>
              <!-- RD Mailform-->
              <form class="rd-mailform text-left row row-20" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="col-sm-6 col-lg-4">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-name">Your Name * </label>
                    <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-email">Your Email * </label>
                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-phone">Your Phone   </label>
                    <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message">Your Message * </label>
                    <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                  </div>
                  <div class="form-button text-center">
                    <button class="button button-primary button-circle" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Contact Us-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
              <h3>Contact Us (with reCAPTCHA)</h3>
              <form class="rd-mailform text-left row row-20" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="col-sm-6 col-lg-4">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-name2">Your Name * </label>
                    <input class="form-input" id="contact-name2" type="text" name="name" data-constraints="@Required">
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-email2">Your Email * </label>
                    <input class="form-input" id="contact-email2" type="email" name="email" data-constraints="@Email @Required">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-phone2">Your Phone   </label>
                    <input class="form-input" id="contact-phone2" type="text" name="phone" data-constraints="@Numeric @Required">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message2">Your Message * </label>
                    <textarea class="form-input" id="contact-message2" name="message" data-constraints="@Required"></textarea>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-wrap form-wrap-recaptcha">
                    <!-- Google captcha-->
                    <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-button">
                    <button class="button button-primary button-circle" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Subscribe to Our Newsletter-->
      <section class="parallax-container" data-parallax-img="images/parallax-img-1.jpg">
        <div class="parallax-content section-md context-dark text-center bg-gray-700-filter-70">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-9 col-lg-8 col-xl-7">
                <h3>Subscribe to Our Newsletter</h3>
                <p class="big">Sign up to our newsletter and be the first to know about the latest company news, special offers, events, and discounts.</p>
                <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap">
                    <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="subscribe-form-email">Your E-mail</label>
                  </div>
                  <div class="form-button">
                    <button class="button button-primary" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
              <h3>MailChimp</h3>
              <p class="big">Sign up to our newsletter and be the first to know about latest news, special offers, events, and discounts.</p>
              <!-- Mailchimp-->
              <form class="rd-form mailchimp-mailform rd-form-inline" data-form-output="form-output-global" action="https://templatemonster.us15.list-manage.com/subscribe/post?u=ba5bb362073a413f48e4a7b90&amp;id=8dc95d9dec" method="post">
                <div class="form-wrap">
                  <label class="form-label" for="mailchimp-email">Enter your e-mail</label>
                  <input class="form-input" id="mailchimp-email" type="email" name="email" data-constraints="@Email @Required">
                </div>
                <div class="form-button">
                  <button class="button button-primary" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
              <h3>Campaign Monitor</h3>
              <p class="big">Sign up to our newsletter and be the first to know about latest news, special offers, events, and discounts.</p>
              <!-- Campaign Monitor-->
              <form class="rd-form campaign-mailform rd-form-inline" data-form-output="form-output-global" action="https://templatermonster.createsend.com/t/j/s/zjjikd/" method="post">
                <div class="form-wrap">
                  <label class="form-label" for="campaign-email">Enter your e-mail</label>
                  <input class="form-input" id="campaign-email" type="email" name="cm-zjjikd-zjjikd" data-constraints="@Email @Required">
                </div>
                <div class="form-button">
                  <button class="button button-primary" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
     <?php include 'footer.php' ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>