<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Buttons</title>
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
          <h4 class="breadcrumbs-custom-title">Buttons</h4>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Buttons</li>
          </ul>
        </div>
      </section>
      <!-- Button Sizes-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h4>Button Sizes</h4>
          <p>4 different sizes: super, large, default and small.</p>
          <div class="group-xl">
            <div class="button button-xl button-primary">Super Size</div>
            <div class="button button-primary">Large size</div>
            <div class="button button-lg button-primary">Default size </div>
            <div class="button button-sm button-primary">Small size</div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Button Shapes-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h4>Button Shapes</h4>
          <p>4 different shapes: default, round, round 2, and circle.</p>
          <div class="group-xl">
            <div class="button button-primary">Default</div>
            <div class="button button-primary button-round-1">Round 1</div>
            <div class="button button-primary button-round-2">Round 2</div>
            <div class="button button-primary button-circle">Circle</div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Buttons with Icons-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h4>Buttons with Icons</h4>
          <p>Buttons are fully integrated with 900+ icons.</p>
          <div class="group-xl">
            <div>
              <div class="button button-icon button-icon-right button-primary"><span class="icon mdi mdi-account"></span>Icon right</div>
            </div>
            <div>
              <div class="button button-icon button-icon-left button-primary"><span class="icon mdi mdi-account"></span>Icon left </div>
            </div>
            <div>
              <div class="button button-icon button-icon-right button-default-outline"><span class="icon mdi mdi-account"></span>Icon right</div>
            </div>
            <div>
              <div class="button button-icon button-icon-left button-default-outline"><span class="icon mdi mdi-account"></span>Icon left</div>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Buttons with Shadow-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <h4>Buttons with Shadow</h4>
          <p>Enhance your buttons with a shadow effect.</p>
          <div class="group-xl">
            <div>
              <div class="button button-primary button-circle button-shadow">Shadow</div>
            </div>
            <div>
              <div class="button button-ghost button-circle button-shadow">Shadow</div>
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