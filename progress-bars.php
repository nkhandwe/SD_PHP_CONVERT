<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Progress Bars</title>
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
      <header class="section page-header header-transparent">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic rd-navbar-classic-dark" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-secondary">
              <div class="rd-navbar-aside">
                <ul class="list-inline list-inline-md">
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-phone"></span></div>
                      <div class="unit-body"><a href="tel:#+(905) 459 9991">+(905) 459 9991</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                      <div class="unit-body"><a href="mailto:info@sdlawoffice.ca">info@sdlawoffice.ca </a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                      <div class="unit-body"><a href="#">17700 Hurontario Street #407A Bramptam, Ontario L6Y 4M3</a></div>
                    </div>
                  </li>
                </ul>
                <ul class="rd-navbar-soc list-inline list-inline-sm">
                  <li class="list-inline-item"><a class="icon fa-linkedin" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon fa-twitter" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon fa-facebook-f" href="#"></a></li>
                  <li class="list-inline-item"><a class="icon fa-instagram" href="#"></a></li>
                </ul>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php"><img class="brand-logo-dark" src="images/logo-default-159x40.png" alt="" width="159" height="40" srcset="images/logo-default-318x80.png 2x"/><img class="brand-logo-light" src="images/logo-inverse-159x40.png" alt="" width="159" height="40" srcset="images/logo-inverse-318x80.png 2x"/></a>
                  </div>
                </div>
               <?php include 'navbar.php' ?>
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="search-results.php" data-search-live="rd-search-results-live" method="GET">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit fa-search" type="submit"></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/breadcrumbs-bg.jpg);">
        <div class="container">
          <h4 class="breadcrumbs-custom-title">Progress Bars</h4>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Progress Bars</li>
          </ul>
        </div>
      </section>
      <!-- Skill Bars-->
      <section class="section section-md bg-default">
        <div class="container">
          <div class="row justify-content-md-center row-md-reverse row-lg-justify row-50">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h4>Welcome to Our Website</h4>
              <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers.</p>
            </div>
            <div class="col-md-10 col-lg-6">
              <!--Linear progress bar-->
              <article class="progress-linear">
                <div class="progress-linear-header">
                  <p class="progress-linear-title">Knowledge</p><span class="progress-linear-counter">75</span>
                </div>
                <div class="progress-linear-body">
                  <div class="progress-linear-bar"></div>
                </div>
              </article>
              <!--Linear progress bar-->
              <article class="progress-linear">
                <div class="progress-linear-header">
                  <p class="progress-linear-title">Dedication</p><span class="progress-linear-counter">85</span>
                </div>
                <div class="progress-linear-body">
                  <div class="progress-linear-bar"></div>
                </div>
              </article>
              <!--Linear progress bar-->
              <article class="progress-linear">
                <div class="progress-linear-header">
                  <p class="progress-linear-title">Professionalism</p><span class="progress-linear-counter">80</span>
                </div>
                <div class="progress-linear-body">
                  <div class="progress-linear-bar"></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Counters-->
      <section class="parallax-container" data-parallax-img="images/parallax-img-1.jpg">
        <div class="parallax-content section-md context-dark text-center bg-gray-700-filter-70">
          <div class="container">
            <div class="row row-50">
              <div class="col-12">
                <h4>Counters</h4>
              </div>
              <div class="col-12">
                <div class="row row-30 row-bordered">
                  <div class="col-6 col-md-3">
                    <!-- Box counter-->
                    <article class="box-counter">
                      <div class="box-counter-main heading-2">
                        <div class="counter">1998</div>
                      </div>
                      <p class="box-counter-title">Year of <br>Establishment</p>
                    </article>
                  </div>
                  <div class="col-6 col-md-3">
                    <!-- Box counter-->
                    <article class="box-counter">
                      <div class="box-counter-main heading-2">
                        <div class="counter">547</div>
                      </div>
                      <p class="box-counter-title">Cases<br>Won</p>
                    </article>
                  </div>
                  <div class="col-6 col-md-3">
                    <!-- Box counter-->
                    <article class="box-counter">
                      <div class="box-counter-main heading-2">
                        <div class="counter">45</div><span>+</span>
                      </div>
                      <p class="box-counter-title">business<br>Partners</p>
                    </article>
                  </div>
                  <div class="col-6 col-md-3">
                    <!-- Box counter-->
                    <article class="box-counter">
                      <div class="box-counter-main heading-2">
                        <div class="counter">1500</div>
                      </div>
                      <p class="box-counter-title">Trusting<br>Clients</p>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section Circle Progress Bars-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h4>Circle Progress Bars</h4>
          <div class="row justify-content-center row-30">
            <div class="col-sm-5 col-lg-3">
              <!--Circle progress bar-->
              <div class="progress-circle">
                <div class="progress-circle-block">
                  <svg class="progress-circle-bar" x="0" y="0" width="150" height="150" viewbox="0 0 150 150">
                    <circle class="progress-circle-bg" cx="75" cy="75" r="70"></circle>
                    <circle class="progress-circle-fg clipped" cx="75" cy="75" r="70"></circle>
                  </svg>
                  <div class="progress-circle-counter">40</div>
                </div>
                <p class="progress-circle-title">Leadership</p>
              </div>
            </div>
            <div class="col-sm-5 col-lg-3">
              <!--Circle progress bar-->
              <div class="progress-circle">
                <div class="progress-circle-block">
                  <svg class="progress-circle-bar" x="0" y="0" width="150" height="150" viewbox="0 0 150 150">
                    <circle class="progress-circle-bg" cx="75" cy="75" r="70"></circle>
                    <circle class="progress-circle-fg clipped" cx="75" cy="75" r="70"></circle>
                  </svg>
                  <div class="progress-circle-counter">50</div>
                </div>
                <p class="progress-circle-title">Management</p>
              </div>
            </div>
            <div class="col-sm-5 col-lg-3">
              <!--Circle progress bar-->
              <div class="progress-circle">
                <div class="progress-circle-block">
                  <svg class="progress-circle-bar" x="0" y="0" width="150" height="150" viewbox="0 0 150 150">
                    <circle class="progress-circle-bg" cx="75" cy="75" r="70"></circle>
                    <circle class="progress-circle-fg clipped" cx="75" cy="75" r="70"></circle>
                  </svg>
                  <div class="progress-circle-counter">60</div>
                </div>
                <p class="progress-circle-title">Innovation and creativity</p>
              </div>
            </div>
            <div class="col-sm-5 col-lg-3">
              <!--Circle progress bar-->
              <div class="progress-circle">
                <div class="progress-circle-block">
                  <svg class="progress-circle-bar" x="0" y="0" width="150" height="150" viewbox="0 0 150 150">
                    <circle class="progress-circle-bg" cx="75" cy="75" r="70"></circle>
                    <circle class="progress-circle-fg clipped" cx="75" cy="75" r="70"></circle>
                  </svg>
                  <div class="progress-circle-counter">70</div>
                </div>
                <p class="progress-circle-title">Resilience</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Countdown-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10 col-xl-9">
              <h4>Countdown</h4>
              <!-- TimeCircles-->
              <div class="countdown" data-countdown="data-countdown" data-to="2021-12-31">
                <div class="countdown-block countdown-block-days">
                  <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-days="">
                    <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                    <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                  </svg>
                  <div class="countdown-wrap">
                    <div class="countdown-counter" data-counter-days="">00</div>
                    <div class="countdown-title">days</div>
                  </div>
                </div>
                <div class="countdown-block countdown-block-hours">
                  <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-hours="">
                    <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                    <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                  </svg>
                  <div class="countdown-wrap">
                    <div class="countdown-counter" data-counter-hours="">00</div>
                    <div class="countdown-title">hours</div>
                  </div>
                </div>
                <div class="countdown-block countdown-block-minutes">
                  <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-minutes="">
                    <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                    <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                  </svg>
                  <div class="countdown-wrap">
                    <div class="countdown-counter" data-counter-minutes="">00</div>
                    <div class="countdown-title">minutes</div>
                  </div>
                </div>
                <div class="countdown-block countdown-block-seconds">
                  <svg class="countdown-circle" x="0" y="0" width="200" height="200" viewbox="0 0 200 200" data-progress-seconds="">
                    <circle class="countdown-circle-bg" cx="100" cy="100" r="90"></circle>
                    <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"></circle>
                  </svg>
                  <div class="countdown-wrap">
                    <div class="countdown-counter" data-counter-seconds="">00</div>
                    <div class="countdown-title">seconds</div>
                  </div>
                </div>
              </div>
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