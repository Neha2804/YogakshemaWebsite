<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Habitat - A Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            
            <!-- === BEGIN HEADER === -->
            <?php include'header.php' ?>
            <!-- === END HEADER === -->
            
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-40">
                        <!-- Begin Sidebar Menu -->
                        <div class="col-md-3">
                            <ul class="list-group sidebar-nav" id="sidebar-nav">
                                <!-- Typography -->
                                <li class="list-group-item list-toggle">
                                    <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-typography">Typography</a>
                                    <ul id="collapse-typography" class="collapse">
                                        <li>
                                            <a href="features-typo-basic.html">
                                                <i class="fa fa-sort-alpha-asc"></i>Basic Typography</a>
                                        </li>
                                        <li>
                                            <a href="features-typo-blockquotes.html">
                                                <i class="fa fa-magic"></i>Blockquotes</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End Typography -->
                                <!-- Components -->
                                <li class="list-group-item list-toggle">
                                    <a class="accordion-toggle" href="#collapse-components" data-toggle="collapse">Components</a>
                                    <ul id="collapse-components" class="collapse">
                                        <li>
                                            <span class="badge">New</span>
                                            <a href="features-labels.html">
                                                <i class="fa fa-tags"></i>Labels</a>
                                        </li>
                                        <li>
                                            <span class="badge">New</span>
                                            <a href="features-progress-bars.html">
                                                <i class="fa fa-align-left"></i>Progress Bars</a>
                                        </li>
                                        <li>
                                            <a href="features-panels.html">
                                                <i class="fa fa-columns"></i>Panels</a>
                                        </li>
                                        <li>
                                            <a href="features-pagination.html">
                                                <i class="fa fa-arrows-h"></i>Pagination</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End Components -->
                                <!-- Icons -->
                                <li class="list-group-item list-toggle">
                                    <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-icons">Icons</a>
                                    <ul id="collapse-icons" class="collapse">
                                        <li>
                                            <span class="badge badge-u">New</span>
                                            <a href="features-icons.html">
                                                <i class="fa fa-chevron-circle-right"></i>Icon Styling</a>
                                        </li>
                                        <li>
                                            <a href="features-icons-font-awesome.html">
                                                <i class="fa fa-chevron-circle-right"></i>Font Awesome Icons</a>
                                        </li>
                                        <li>
                                            <a href="features-icons-social.html">
                                                <i class="fa fa-chevron-circle-right"></i>Social Icons</a>
                                        </li>
                                        <li>
                                            <a href="features-icons-glyphicons.html">
                                                <i class="fa fa-chevron-circle-right"></i>Glyphicons</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End Icons -->
                                <!-- Testimonials -->
                                <li class="list-group-item">
                                    <a href="features-testimonials.html">Testimonials</a>
                                </li>
                                <!-- End Testimonials -->
                                <!-- Accordion and Tabs -->
                                <li class="list-group-item">
                                    <a href="features-accordions-tabs.html">Accordions & Tabs</a>
                                </li>
                                <!-- End Accordion and Tabs -->
                                <!-- Buttons -->
                                <li class="list-group-item">
                                    <a href="features-buttons.html">Buttons</a>
                                </li>
                                <!-- End Buttons -->
                                <!-- Carousels -->
                                <li class="list-group-item">
                                    <a href="features-carousels.html">Carousels</a>
                                </li>
                                <!-- End Accordion and Tabs -->
                                <!-- Animate On Scroll -->
                                <li class="list-group-item">
                                    <a href="features-animate-on-scroll.html">Animate On Scroll</a>
                                </li>
                                <!-- End Animate On Scroll -->
                                <!-- Grid System -->
                                <li class="list-group-item">
                                    <a href="features-grid.html">Grid System</a>
                                </li>
                                <!-- End Grid System -->
                            </ul>
                        </div>
                        <!-- End Sidebar Menu -->
                        <div class="col-md-9">
                            <h2>Carousels</h2>
                            <!-- Carousel - Example 1 -->
                            <div id="carousel-example-1" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-1" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-1" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="assets/img/slideshow/slide1.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/slide2.jpg">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/slideshow/slide3.jpg">
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-1" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-1" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <!-- End Carousel - Example 1  -->
                            <pre class="margin-top-20"><code>&lt;div id=&quot;carousel-example-1&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
	&lt;!-- Indicators --&gt;
	&lt;ol class=&quot;carousel-indicators&quot;&gt;
		&lt;li data-target=&quot;#carousel-example-1&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
		&lt;li data-target=&quot;#carousel-example-1&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
		&lt;li data-target=&quot;#carousel-example-1&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
	&lt;/ol&gt;
	&lt;!-- Wrapper for slides --&gt;
	&lt;div class=&quot;carousel-inner&quot;&gt;
		&lt;div class=&quot;item active&quot;&gt;&lt;img src=&quot;slide1.jpg&quot;&gt;&lt;/div&gt;
		&lt;div class=&quot;item&quot;&gt;&lt;img src=&quot;slide2.jpg&quot;&gt;&lt;/div&gt;
		&lt;div class=&quot;item&quot;&gt;&lt;img src=&quot;slide3.jpg&quot;&gt;&lt;/div&gt;
	&lt;/div&gt;
	&lt;!-- Controls --&gt;
	&lt;a class=&quot;left carousel-control&quot; href=&quot;#carousel-example-1&quot; data-slide=&quot;prev&quot;&gt;
		&lt;span class=&quot;glyphicon glyphicon-chevron-left&quot;&gt;&lt;/span&gt;
	&lt;/a&gt;
	&lt;a class=&quot;right carousel-control&quot; href=&quot;#carousel-example-1&quot; data-slide=&quot;next&quot;&gt;
		&lt;span class=&quot;glyphicon glyphicon-chevron-right&quot;&gt;&lt;/span&gt;
	&lt;/a&gt;
&lt;/div&gt;</code></pre>
                            <hr class="margin-top-30">
                            <!-- Carousel - Example 2 -->
                            <div id="carousel-example-2" class="carousel slide alternative" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image1.jpg" style="max-width:100%;">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image2.jpg" style="max-width:100%;">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image3.jpg" style="max-width:100%;">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image4.jpg" style="max-width:100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image5.jpg" style="max-width:100%;">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image6.jpg" style="max-width:100%;">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image7.jpg" style="max-width:100%;">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image8.jpg" style="max-width:100%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image9.jpg" style="max-width:100%;">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image10.jpg" style="max-width:100%;">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image11.jpg" style="max-width:100%;">
                                            </div>
                                            <div class="col-md-3">
                                                <img src="assets/img/portfolio/image12.jpg" style="max-width:100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-2" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-2" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                            <!-- End Carousel - Example 2  -->
                            <div class="clearfix"></div>
                            <pre class="margin-top-10"><code>&lt;div id=&quot;carousel-example-2&quot; class=&quot;carousel slide alternative&quot; data-ride=&quot;carousel&quot;&gt;
  &lt;!-- Indicators --&gt;
  &lt;ol class=&quot;carousel-indicators&quot;&gt;
    &lt;li data-target=&quot;#carousel-example-2&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
    &lt;li data-target=&quot;#carousel-example-2&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
  &lt;/ol&gt;
  &lt;!-- Wrapper for slides --&gt;
  &lt;div class=&quot;carousel-inner&quot;&gt;
    &lt;div class=&quot;item active&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-md-3&quot;&gt;&lt;img src=&quot;image1.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;col-md-3&quot;&gt;&lt;img src=&quot;image2.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;col-md-3&quot;&gt;&lt;img src=&quot;image3.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;col-md-3&quot;&gt;&lt;img src=&quot;image4.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;item&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-md-3&quot;&gt;&lt;img src=&quot;image5.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;col-md-3&quot;&gt;&lt;img src=&quot;image6.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;col-md-3&quot;&gt;&lt;img src=&quot;image7.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;col-md-3&quot;&gt;&lt;img src=&quot;image8.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Controls --&gt;
  &lt;a class=&quot;left carousel-control&quot; href=&quot;#carousel-example-2&quot; data-slide=&quot;prev&quot;&gt;
    &lt;span class=&quot;glyphicon glyphicon-chevron-left&quot;&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class=&quot;right carousel-control&quot; href=&quot;#carousel-example-2&quot; data-slide=&quot;next&quot;&gt;
    &lt;span class=&quot;glyphicon glyphicon-chevron-right&quot;&gt;&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>
                            <hr class="margin-top-30">
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <?php include 'footer.php' ?>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->