<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Tabs and Accordions</title>
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
          <h4 class="breadcrumbs-custom-title">Tabs and Accordions</h4>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Tabs and Accordions</li>
          </ul>
        </div>
      </section>
      <section class="section section-md bg-gray-700 text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-7">
              <h4>Accordion</h4>
              <!-- Bootstrap collapse-->
              <div class="card-group-custom card-group-minimal" id="accordion1" role="tablist" aria-multiselectable="false">
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate card-minimal">
                  <div class="card-header" role="tab">
                    <div class="card-title"><a class="heading-4" id="accordion1-card-head-tyceuuvf" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-ecavovho" aria-controls="accordion1-card-body-ecavovho" aria-expanded="true" role="button">Insurance Defence
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse show" id="accordion1-card-body-ecavovho" aria-labelledby="accordion1-card-head-tyceuuvf" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>We aim to support families in resolving their own disputes. We ensure professional consultancy and result.</p>
                    </div>
                  </div>
                </article>
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate card-minimal">
                  <div class="card-header" role="tab">
                    <div class="card-title"><a class="heading-4 collapsed" id="accordion1-card-head-rvcihjtg" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-vgapivgs" aria-controls="accordion1-card-body-vgapivgs" aria-expanded="false" role="button">Land&amp;Asset
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse" id="accordion1-card-body-vgapivgs" aria-labelledby="accordion1-card-head-rvcihjtg" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>Professional help with financial, commercial, tax disputes and other complex business issues.</p>
                    </div>
                  </div>
                </article>
                <!-- Bootstrap card-->
                <article class="card card-custom card-corporate card-minimal">
                  <div class="card-header" role="tab">
                    <div class="card-title"><a class="heading-4 collapsed" id="accordion1-card-head-ycmldsqp" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-oqkpwscb" aria-controls="accordion1-card-body-oqkpwscb" aria-expanded="false" role="button">Finance Law
                        <div class="card-arrow"></div></a></div>
                  </div>
                  <div class="collapse" id="accordion1-card-body-oqkpwscb" aria-labelledby="accordion1-card-head-ycmldsqp" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>Your civil rights will be defended and represented on the highest level with the best outcome.</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Tabs-->
      <section class="section section-md bg-default text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-10">
              <h4>Horizontal Tabs</h4>
              <!-- Bootstrap tabs -->
              <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Tab 1</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Tab 2</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Tab 3</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4" data-toggle="tab">Tab 4</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-1-1">
                    <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly.  </p>
                    <p>Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-2">
                    <p>The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click.  </p>
                    <p>We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. Our blog and social media accounts are available to encourage communication and connection between clients and personnel and tell you more about us in the informal environments where we can have a dialogue instead of just a narrative like that.  With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-3">
                    <p>We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers.  </p>
                    <p>Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. Our blog and social media accounts are available to encourage communication and connection between clients and personnel and tell you more about us.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-1-4">
                    <p>Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly.  </p>
                    <p>You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <!-- Vertical Tabs-->
      <section class="section section-lg bg-default text-center">
        <div class="container">
          <h4>Vertical Tabs</h4>
          <div class="row">
            <div class="col-xl-11">
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-vertical tabs-corporate" id="tabs-2">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-2-1" data-toggle="tab">Tab 1</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-2" data-toggle="tab">Tab 2</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-3" data-toggle="tab">Tab 3</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-4" data-toggle="tab">Tab 4</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-2-5" data-toggle="tab">Tab 5</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-2-1">
                    <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly.  </p>
                    <p>Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-2-2">
                    <p>The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click.  </p>
                    <p>We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. Our blog and social media accounts are available to encourage communication and connection between clients and personnel and tell you more about us in the informal environments where we can have a dialogue instead of just a narrative like that.  With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. </p>
                  </div>
                  <div class="tab-pane fade" id="tabs-2-3">
                    <p>We sincerely hope that each and every user entering our website will find exactly what he/she is looking for. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers.  </p>
                    <p>Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. Our blog and social media accounts are available to encourage communication and connection between clients and personnel and tell you more about us.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-2-4">
                    <p>Our site design and navigation has been thoroughly thought out. The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly.  </p>
                    <p>You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers. You will always know where you are now and will be able to skip from one page to another with a single mouse click. We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-2-5">
                    <p>The layout is aesthetically appealing, contains concise texts in order not to take your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely intuitive and user-friendly. You will always know where you are now and will be able to skip from one page to another with a single mouse click.  </p>
                    <p>We use only trusted, verified content, so you can believe every word we are saying. We are always happy to greet the new visitors on our site. Our blog and social media accounts are available to encourage communication and connection between clients and personnel and tell you more about us in the informal environments where we can have a dialogue instead of just a narrative like that.  With advanced features of activating account and new login widgets, you will definitely have a great experience of using our web page. It will tell you lots of interesting things about our company, its products and services, highly professional staff and happy customers.</p>
                  </div>
                </div>
              </div>
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