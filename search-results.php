<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Search Results</title>
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
          <h4 class="breadcrumbs-custom-title">Search Results</h4>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active">Search Results</li>
          </ul>
        </div>
      </section>
      <!-- Search results-->
      <section class="section-md">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <!-- RD Search-->
              <form class="rd-form rd-search rd-form-inline" action="search-results.php" method="GET">
                <div class="form-wrap">
                  <label class="form-label" for="rd-search-form-input">Search</label>
                  <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                </div>
                <div class="form-wrap form-button">
                  <button class="button button-primary" type="submit">Search</button>
                </div>
              </form>
              <div class="rd-search-results"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
     <?php include 'footer.php'  ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>