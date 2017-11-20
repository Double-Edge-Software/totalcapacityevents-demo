<?php
// TWITTER CONNECT STREAM CLASS
require_once 'js/plugins/revolution/php/twitter/class-twitter.php';

// TWITTER USER
$twitter_account = "verycoolplaces";

// API DATA
// Register App -> https://apps.twitter.com/
$consumer_key = 'YOUR_CONSUMER_KEY';
$consumer_secret = 'YOUR_CONSUMER_SECRET';
$access_token = 'YOUR_ACCESS_TOKEN';
$access_token_secret = 'YOUR_ACCESS_TOKEN_SECRET';

// GET TWEETS
$twitter = new TP_twitter( $consumer_key, $consumer_secret, $access_token, $access_token_secret );
$tweets = $twitter->get_public_photos( $twitter_account );

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <!-- Document title -->
    <title>POLO | The Multi-Purpose HTML5 Template</title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="css/plugins.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet"> 

		<!-- LOAD JQUERY LIBRARY -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
		
		<!-- LOADING FONTS AND ICONS -->
		<link href="http://fonts.googleapis.com/css?family=Quicksand:400%2C700" rel="stylesheet" property="stylesheet" type="text/css" media="all">
		
		<link rel="stylesheet" type="text/css" href="js/plugins/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
		<link rel="stylesheet" type="text/css" href="js/plugins/revolution/fonts/font-awesome/css/font-awesome.css">
		
		<!-- REVOLUTION STYLE SHEETS -->
		<link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/settings.css">
		
		
		
		<!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- PARTICLES ADD-ON FILES -->
		<link rel='stylesheet' href='js/plugins/revolution/revolution-addons/particles/css/revolution.addon.particles.css?ver=1.0.3' type='text/css' media='all' />
		<script type='text/javascript' src='js/plugins/revolution/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3'></script>

		<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
		<script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="js/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
		
	</head>
	
	<body><!-- Wrapper -->
    <div id="wrapper">


                <!-- Header -->
        <header id="header">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html" class="logo" data-dark-logo="images/logo-dark.png">
                            <img src="images/logo.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <!--top search-->
                                <a id="top-search-trigger" href="#" class="toggle-item">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-close"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                            <li class="hidden-xs">
                                <!--shopping cart-->
                                <div id="shopping-cart">
                                    <a href="shop-cart.html">
                                        <span class="shopping-cart-items">8</span>

                                        <i class="fa fa-shopping-cart"></i></a>
                                </div>
                                <!--end: shopping cart-->
                            </li>
                            <li>
                                <div class="topbar-dropdown">
                                    <a class="title"><i class="fa fa-globe"></i></a>
                                    <div class="dropdown-list">
                                        <a class="list-entry" href="#">French</a>
                                        <a class="list-entry" href="#">Spanish</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->


                    <!--Navigation-->
                    <div id="mainMenu" class="light">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="dropdown"> <a href="#">Features</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-heart"></i>Headers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header.html">Light</a></li>
                                                    <li><a href="header-dark.html">Dark</a></li>
                                                    <li><a href="header-transparent.html">Transparent</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Semi Transparent</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-light-transparent.html">Light</a></li>
                                                            <li><a href="header-dark-transparent.html">Dark</a></li>
                                                            <li><a href="header-colored-transparent.html">Colored</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-colored.html">Colored</a></li>
                                                    <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Modern</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-modern.html">Light</a></li>
                                                            <li><a href="header-modern-dark.html">Dark</a></li>
                                                            <li><a href="header-modern-transparent.html">Transparent</a></li>
                                                            <li><a href="header-modern-colored.html">Colored</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-mini.html">Mini</a></li>
                                                    <li><a href="header-static.html">Static</a></li>
                                                    <li><a href="header-no-sticky.html">No Sticky</a></li>
                                                    <li><a href="header-sticky-responsive.html">Sticky Responsive</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Logo Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-logo.html">Left</a></li>
                                                            <li><a href="header-logo-right.html">Right</a></li>
                                                            <li><a href="header-logo-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-menu-left.html">Left</a></li>
                                                            <li><a href="header-menu-right.html">Right</a></li>
                                                            <li><a href="header-menu-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Topbar</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-topbar.html">Light</a></li>
                                                            <li><a href="header-topbar-dark.html">Dark</a></li>
                                                            <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                            <li><a href="header-topbar-colored.html">Colored</a></li>
                                                            <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-under.html">Under Slider</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-navicon"></i>Main Menu<span class="label label-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Default</a></li>
                                                    <li><a href="menu-split.html">Split Menu</a></li>
                                                    <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                                    <li><a href="menu-slide.html">Slide Menu</a></li>
                                                    <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                                    <li><a href="menu-creative.html">Creative Menu</a></li>
                                                    <li><a href="menu-lines.html">Lines Menu</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Outline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-outline.html">Default</a></li>
                                                            <li><a href="menu-outline-dark.html">Dark</a></li>
                                                            <li><a href="menu-outline-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-rounded.html">Default</a></li>
                                                            <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                            <li><a href="menu-rounded-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-left.html">Left Aligned</a></li>
                                                            <li><a href="menu-center.html">Center Aligned</a></li>
                                                            <li><a href="menu-right.html">Right Aligned</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="menu-dots.html">Dots Menu</a></li>
                                                    <li><a href="menu-one-page.html">One Page Menu</a></li>
                                                    <li><a href="menu-hover-background.html">Hover Background</a></li>
                                                    <li><a href="menu-button.html">Button Version</a></li>
                                                    <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                                    <li><a href="menu-onclick.html">OnClick Open</a></li>
                                                    <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-sliders"></i>Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                                    <li><a href="slider-owl-slider.html">OWL Slider</a></li>
                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html" class="current">Fullscreen Text Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-star"></i>Page title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title-classic.html">Classic version</a></li>
                                                    <li><a href="page-title.html">Image background</a> </li>
                                                    <li><a href="page-title-video.html">Video background</a> </li>
                                                    <li><a href="page-title-pattern.html">Pattern background</a> </li>
                                                    <li><a href="page-title-background-color.html">Colored background</a> </li>
                                                    <li><a href="page-title-default-header.html">Default header</a></li>
                                                    <li><a href="page-title-animated.html">Animated</a></li>
                                                    <li><a href="page-title-center.html">Center Aligned</a></li>
                                                    <li><a href="page-title-right.html">Right Aligned</a></li>
                                                    <li><a href="page-title.html">Left Aligned</a></li>


                                                    <!--<li><a href="page-title-small.html">Small version</a> </li>-->
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-align-left"></i>Page Menu<span class="label label-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-menu.html">Rounded</a> </li>
                                                    <li><a href="page-menu-outline.html">Outline</a> </li>
                                                    <li><a href="page-menu-lines.html">Lines</a> </li>
                                                    <li><a href="page-menu-classic.html">Classic</a> </li>
                                                    <li><a href="page-menu-line-bottom.html">Line Bottom</a> </li>
                                                    <li><a href="page-menu-light.html">Light</a> </li>
                                                    <li><a href="page-menu-dark.html">Dark</a> </li>
                                                    <li><a href="page-menu-creative.html">Creative</a> </li>
                                                    <li><a href="page-menu-colored-background.html">Colored Background</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-columns"></i>Side Panel</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="side-panel.html">Push</a> </li>
                                                    <li><a href="side-panel-reval.html">Reval</a></li>
                                                    <li><a href="side-panel-slide-in.html">Slide In</a></li>
                                                    <li><a href="side-panel-static.html">Static</a></li>
                                                    <li><a href="side-panel-dark.html">Dark version</a></li>
                                                    <li><a href="side-panel-right.html">Push Right</a> </li>
                                                    <li><a href="side-panel-reval-right.html">Reval Right</a></li>
                                                    <li><a href="side-panel-slide-in-right.html">Slide In Right</a></li>
                                                    <li><a href="side-panel-static-right.html">Static Right</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="widgets.html"><i class="fa fa-th"></i>Widgets </a></li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-th-list"></i>Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar.html">Left aligned</a> </li>
                                                    <li><a href="sidebar-right.html">Right aligned</a> </li>
                                                    <li><a href="sidebar-both.html">Both Sidebars</a> </li>
                                                    <li><a href="sidebar-modern.html">Modern</a> </li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a> </li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a> </li>

                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="fa fa-window-minimize"></i>Footers</a></li>
                                            <li><a href="page-loaders.html"><i class="fa fa-spinner"></i>Page Loaders<span class="label label-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-expand"></i>Modal Auto Open<span class="label label-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="modal-auto-open.html">Sample Text</a></li>
                                                    <li><a href="modal-auto-open-newsletter.html">Newsletter</a></li>
                                                    <li><a href="modal-auto-open-shop.html">Shop Sale</a></li>
                                                    <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                                    <li><a href="modal-auto-open-audio.html">Audio</a></li>
                                                    <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                                    <li><a href="modal-auto-open-youtube.html">YouTube</a></li>
                                                    <li><a href="modal-auto-open-vimeo.html">Vimeo</a></li>
                                                    <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-bullhorn"></i>Cookie Notify<span class="label label-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cookie-notify.html">Top position</a> </li>
                                                    <li><a href="cookie-notify-bottom.html">Bottom position</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-tags"></i>Menu Labels</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span class="label label-default">NEW</span></a> </li>
                                                    <li><a href="#">Label (hot)<span class="label label-danger">HOT</span></a> </li>
                                                    <li><a href="#">Label (popular)<span class="label label-success">POPULAR</span></a> </li>
                                                    <li><a href="#">Label (sale)<span class="label label-warning">SALE</span></a> </li>
                                                    <li><a href="#">Label (info)<span class="label label-info">INFO</span></a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Elements</a>
                                        <ul class="dropdown-menu" style="background-image: url('images/shortcode-megamenu-bg.png');">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-according.html"> <i class="fa fa-list-ul"></i>Accordions</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-alerts.html"> <i class="fa fa-exclamation-circle"></i>Alerts</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-animations.html"> <i class="fa fa-magic"></i>Animations</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-audio-video.html"> <i class="fa fa-play-circle"></i> Audio & Video</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-blockquotes.html"> <i class="fa fa-quote-right"></i>Blockquotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-breadcrumbs.html"> <i class="fa fa-angle-double-right"></i>Breadcrumbs</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-buttons.html"> <i class="fa fa-external-link"></i>Buttons<span class="label label-default">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-client-logo.html"> <i class="fa fa-diamond"></i>Clients logos</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-calltoaction.html"> <i class="fa fa-plus-square"></i>Call to action</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-carousel.html"> <i class="fa fa-exchange"></i>Carousel Sliders</a>
                                                            </li>

                                                            <li>
                                                                <a href="shortcode-code.html"> <i class="fa fa-code"></i>Code</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-countdown-timer.html"> <i class="fa fa-clock-o"></i>Countdown Timers</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-counters.html"> <i class="fa fa-sort-numeric-desc"></i>Counter Numbers</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-dropcat-highlight.html"> <i class="fa fa-bold"></i>Dropcat & Highlight</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-team-members.html"> <i class="fa fa-users"></i>Team members</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-forms.html"> <i class="fa fa-align-justify"></i>Forms</a>
                                                            </li>
                                                        </ul>
                                                    </div>
   <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-grid.html"> <i class="fa fa-th"></i>Grid System</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-icon-boxes.html"> <i class="fa fa-bullseye"></i>Icon Boxes</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-icon-lists.html"> <i class="fa fa-flag"></i>Icon Lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-images.html"> <i class="fa fa-photo"></i>Images</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-labels-badgets.html"> <i class="fa fa-check-square"></i>Labels and Badges</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-lightbox.html"> <i class="fa fa-arrows-alt"></i>Lightbox</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-lists.html"> <i class="fa fa-th-list"></i>Lists & Bullet lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-maps.html"> <i class="fa fa-compass"></i>Maps</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-modal.html"> <i class="fa fa-search-plus"></i>Modal</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-modal-strip-top.html"> <i class="fa fa-flash"></i>Modal Strip<span class="label label-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-navs.html"> <i class="fa fa-bars"></i>Navbar & Navs</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-paginations.html"> <i class="fa fa-arrow-circle-right"></i>Pagination & Pager</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-panels.html"> <i class="fa fa-list-alt"></i>Panels</a>
                                                            </li>
                                                            <li> <a href="shortcode-pie-chart.html"><i class="fa fa-pie-chart"></i>Pie charts</a> </li>
                                                            <li> <a href="shortcode-popover-tooltip.html"><i class="fa fa-lightbulb-o"></i>Popover & tooltips</a> </li>
                                                            <li> <a href="shortcode-pricing-table.html"><i class="fa fa-dollar"></i>Pricing tables</a> </li>
                                                            <li>
                                                                <a href="shortcode-progress-bar.html"> <i class="fa fa-align-left"></i>Progress bars</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-parallax.html"> <i class="fa fa-gift"></i>Parallax</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-responsive-utilities.html"> <i class="fa fa-laptop"></i>Responsive utilities</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-sections.html"> <i class="fa fa-bookmark"></i>Sections</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-separators.html"> <i class="fa fa-minus"></i>Separators</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-smooth-scrolling.html"> <i class="fa fa-anchor"></i>Smooth Scrolling</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-social-icons.html"> <i class="fa fa-facebook-official"></i>Social Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-textbox.html"> <i class="fa fa-star"></i>Text Boxes<span class="label label-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-tables.html"> <i class="fa fa-table"></i>Tables</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-tabs.html"> <i class="fa fa-indent"></i>Tabs</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-testimonial.html"> <i class="fa fa-question-circle"></i>Testimonials<span class="label label-danger">NEW</span></a>
                                                            </li>

                                                            <li>
                                                                <a href="shortcode-toggles.html"> <i class="fa fa-toggle-on"></i>Toggles</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-typography.html"> <i class="fa fa-font"></i>Typography</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-text-rotator.html"> <i class="fa fa-random"></i>Text Rotator<span class="label label-default">NEW</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-basic.html">Basic</a> </li>
                                                    <li><a href="page-about-extended.html">Extended</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-me-creative.html">Creative<span class="label label-default">NEW</span></a></li>

                                                    <li><a href="page-about-me-basic.html">Basic</a></li>

                                                    <li><a href="page-about-me-extended.html">Extended</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-contact-classic.html">Classic</a> </li>
                                                    <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a> </li>
                                                    <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a> </li>
                                                    <li><a href="page-contact-map-bottom.html">Map bottom</a> </li>
                                                    <li><a href="page-contact-sidebar-left.html">Sidebar Left</a> </li>
                                                    <li><a href="page-contact-sidebar-right.html">Sidebar Right</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="page-gallery-2.html">Two Columns</a> </li>
                                                    <li> <a href="page-gallery-3.html">Three Columns</a> </li>
                                                    <li> <a href="page-gallery-4.html">Four Columns</a> </li>
                                                    <li> <a href="page-gallery-5.html">Five Columns</a> </li>
                                                    <li> <a href="page-gallery-6.html">Six Columns</a> </li>
                                                    <li> <a href="page-gallery-sidebar.html">Sidebar version</a> </li>
                                                    <li> <a href="page-gallery-wide.html">Wide version</a> </li>
                                                    <li> <a href="page-gallery-load-more.html">Load more</a> </li>
                                                    <li> <a href="page-gallery-infinite-scroll.html">Infinity Scroll</a> </li>
                                                    <!--<li> <a href="page-gallery-gallery-albums.html">Gallery Albums</a> </li>-->
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-user-login.html">Login</a> </li>
                                                    <li><a href="page-user-login-classic.html">Login - Classic</a> </li>
                                                    <li><a href="page-user-register.html">Register</a> </li>
                                                    <li><a href="page-user-register-classic.html">Register - Classic</a> </li>
                                                    <li><a href="page-user-password-recovery.html">Recovery Password</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="page-services.html">Services</a> </li>
                                            <li> <a href="page-our-team.html">Our team</a> </li>
                                            <li> <a href="page-our-clients.html">Our clients</a> </li>
                                            <li> <a href="page-maintenance.html">Maintenance</a> </li>
                                            <li> <a href="page-404.html">404 Page</a> </li>
                                            <li> <a href="page-404-parallax.html">404 Page - Parallax</a> </li>
                                            <li> <a href="page-500.html">500 Page</a> </li>
                                            <li> <a href="page-fullwidth.html">Fullwidth page</a> </li>
                                            <li> <a href="page-fullwidth-wide.html">Fullwidth page - Wide</a> </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="page-sidebar.html">Sidebar Left</a> </li>
                                                    <li> <a href="page-sidebar-right.html">Sidebar Right</a> </li>
                                                    <li> <a href="page-sidebar-both.html">Sidebar Both</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="page-site-map.html">Site Map</a> </li>
                                            <li> <a href="page-faq.html">FAQ</a> </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids</li>
                                                            <li> <a href="portfolio-2.html">Two Columns</a> </li>
                                                            <li> <a href="portfolio-3.html">Three Columns</a> </li>
                                                            <li> <a href="portfolio-4.html">Four Columns</a> </li>
                                                            <li> <a href="portfolio-5.html">Five Columns</a> </li>
                                                            <li> <a href="portfolio-6.html">Six Columns</a> </li>
                                                            <li> <a href="portfolio-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="portfolio-wide-3.html">Wide version</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li> <a href="portfolio-masonry-2.html">Two Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-3.html">Three Columns<span class="label label-danger">HOT</span></a> </li>
                                                            <li> <a href="portfolio-masonry-4.html">Four Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-5.html">Five Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-6.html">Six Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="portfolio-masonry-wide-3.html">Wide version</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Styles</li>
                                                            <li> <a href="portfolio-filter-styles.html">Filter Styles</a> </li>
                                                            <li> <a href="portfolio-load-more.html">Load more</a> </li>
                                                            <li> <a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a> </li>
                                                            <li> <a href="portfolio-infinite-scroll.html">Infinity Scroll</a> </li>
                                                            <li> <a href="portfolio-ajax.html">Portfolio Ajax</a> </li>
                                                            <li> <a href="portfolio-gallery-modal.html">Gallery Modal</a> </li>
                                                            <li> <a href="portfolio-video-modal.html">Video Modal</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="portfolio-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="portfolio-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="portfolio-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="portfolio-slider-3.html">Slider Default</a> </li>
                                                            <li> <a href="portfolio-no-page-title.html">No Page Title</a> </li>
                                                            <li> <a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a> </li>
                                                            <li> <a href="portfolio-hover-styles.html">Hover Styles</a> </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Project</li>
                                                            <li> <a href="portfolio-page-grid-gallery.html">Grid Gallery</a> </li>
                                                            <li> <a href="portfolio-page-particles.html">Particles Wide Project</a> </li>
                                                            <li> <a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a> </li>
                                                            <li> <a href="portfolio-page-slider.html">Slider version</a> </li>
                                                            <li> <a href="portfolio-page-background-image.html">Fullscreen image</a> </li>
                                                            <li> <a href="portfolio-page-background-video.html">Fullscreen Video</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 m-t-40 m-b-10">
                                                        <div class="visible-lg visible-md">
                                                            <div class="col-md-9 m-t-10 no-padding">
                                                                <div class="text-center center">
                                                                    <div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a>
                                                            </div>
                                                        </div>

                                                        <ul class="hidden-lg hidden-md">
                                                            <li> <a href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> <li class="dropdown mega-menu-item"> <a href="#">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li> <a href="blog-masonry-2.html">Two Columns</a> </li>
                                                            <li> <a href="blog-masonry-3.html">Three Columns<span class="label label-danger">HOT</span></a> </li>
                                                            <li> <a href="blog-masonry-4.html">Four Columns</a> </li>
                                                            <li> <a href="blog-masonry-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="blog-masonry-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-masonry-wide.html">Wide version</a> </li>
                                                            <li> <a href="blog-masonry-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-masonry-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids Layout</li>
                                                            <li> <a href="blog-1.html">One Column</a> </li>
                                                            <li> <a href="blog-2.html">Two Columns</a> </li>
                                                            <li> <a href="blog-3.html">Three Columns</a> </li>
                                                            <li> <a href="blog-4.html">Four Columns</a> </li>
                                                            <li> <a href="blog-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-wide.html">Wide version</a> </li>
                                                            <li> <a href="blog-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Left Image</li>
                                                            <li> <a href="blog-left-image-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="blog-left-image-no-sidebar.html">No Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-left-image-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-left-image-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-left-image-author-info.html">Author Info</a> </li>
                                                            <li> <a href="blog-left-image-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="blog-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="blog-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="blog-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="blog-fullwidth.html">Fullwidth</a> </li>
                                                            <li class="mega-menu-title">Post Item Styles</li>
                                                            <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                            <li><a href="blog-style-textual.html">Textual</a></li>
                                                            <li><a href="blog-style-grey-bg.html">Grey Background</a></li>
                                                            <li><a href="blog-style-author-info.html">Author Info</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Post</li>
                                                            <li> <a href="blog-single.html">Default</a> </li>
                                                            <li> <a href="blog-single-slider.html">Slider</a> </li>
                                                            <li> <a href="blog-single-video.html">Video</a> </li>
                                                            <li> <a href="blog-single-audio.html">Audio</a> </li>
                                                            <li> <a href="blog-single-creative.html">Creative</a> </li>
                                                            <li class="mega-menu-title">Comments<span class="label label-danger">NEW</span></li>
                                                            <li> <a href="blog-comments.html#comments">Default Comments</a> </li>
                                                            <li> <a href="blog-comments-disqus.html#comments">Disqus Comments</a> </li>
                                                            <li> <a href="blog-comments-facebook.html#comments">Facebook Comments</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Columns</li>
                                                            <li> <a href="shop-columns-2.html">Two Columns</a> </li>
                                                            <li> <a href="shop-columns-3.html">Three Columns</a> </li>
                                                            <li> <a href="shop-columns-4.html">Four Columns</a> </li>
                                                            <li> <a href="shop-columns-5.html">Five Columns</a> </li>
                                                            <li> <a href="shop-columns-6.html">Six Columns</a> </li>
                                                            <li> <a href="shop-sidebar-sticky.html">Sidebar Sticky</a> </li>
                                                            <li> <a href="shop-wide.html">Wide version</a> </li>
                                                            <li> <a href="shop-no-page-title.html">No page title</a> </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="shop-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="shop-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="shop-fullwidth.html">Fullwidth (Wide)</a> </li>
                                                            <li class="mega-menu-title">Loading Styles</li>

                                                            <li> <a href="shop-load-more.html">Load more</a>
                                                                <a href="shop-load-more-sidebar.html">Load Sidebar</a> </li>

                                                            <li> <a href="shop-infinite-scroll.html">Infinity Scroll</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Order process</li>
                                                            <li> <a class="animsition-link" href="shop-cart.html">Shoping Cart</a> </li>
                                                            <li> <a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a> </li>
                                                            <li> <a class="animsition-link" href="shop-checkout.html">Checkout</a> </li>
                                                            <li> <a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a> </li>
                                                            <li> <a href="shop-wishlist.html">Wishlist</a> </li>
                                                            <li> <a href="shop-wishlist-empty.html">Wishlist Empty</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li> <a href="shop-single-product.html">Fullwidth</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-both.html">Both Sidebars</a> </li>
                                                        </ul>
                                                    </div>
<div class="col-md-2-5 p-l-0">

                                        <h4 class="text-green">BIG SALE <small>Up to</small></h4>

                                        <h2 class="text-large text-green lh80 m-b-30">70%</h2>
                                        <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis ipsum dolor sit amet lacinia faucibus.</p>

                                        <a class="btn btn-shadow btn-rounded btn-block">SHOP NOW!</a><small class="t300"><p class="text-center m-0"><em>* Limited time Offer</em></p></small>
                          
</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

<!-- Revolution Slider -->	<section id="slider">

			<div class="rev_slider_wrapper">
				<!-- START REVOLUTION SLIDER 5.0 auto mode -->
				<div id="rev_slider" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0">
					<ul>	
					<?php foreach ($tweets as $tweet): 
							$image_url_array = TP_twitter::array_find_element_by_key("media",$tweet);
      						$image_url_large = TP_twitter::array_find_element_by_key("large",$image_url_array);
      						$image_url = array(TP_twitter::array_find_element_by_key("media_url",$image_url_array),TP_twitter::array_find_element_by_key("w",$image_url_large),TP_twitter::array_find_element_by_key("h",$image_url_large));
					?>
						<!-- SLIDE  -->
						<li data-index="rs-<?php echo $tweet['id']; ?>" data-transition="scaledownfromleft" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="<?php echo $image_url[0]; ?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="" data-param1=" <?php echo $tweet["user"]["screen_name"]; ?> - <?php $date = new DateTime($tweet['created_at']); echo $date->format('F d, Y'); ?>" data-param2="<?php echo $tweet['text']; ?>" data-description="">
							<!-- MAIN IMAGE -->
							<img src="../../assets/images/dummy.png"  alt=""  data-lazyload="<?php echo $image_url[0]; ?>" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<!-- TWITTER CONTENT -->
							<div class="tp-caption Twitter-Content  " 
								id="slide-<?php echo $tweet['id']; ?>-layer-6" 
								data-x="10" 
								data-y="bottom" 
								data-voffset="10" 
								data-width="['720']"
								data-height="['210']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:[110%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
								data-start="500" 
								data-splitin="none" 
								data-splitout="none" 
								data-basealign="slide" 
								data-responsive_offset="off" 

								data-end="bytrigger"
								data-lasttriggerstate="reset"
								style="z-index: 5; min-width: 720px; min-height: 210px; white-space: normal; max-width: 720px; max-height: 210px; font-size: 26px; line-height: 32px; font-weight: 300; color: rgba(41, 47, 51, 1.00);font-family:Roboto;background-color:rgba(255, 255, 255, 1.00);padding:30px 30px 70px 30px;border-radius:0 0 0 0;"><?php echo TP_twitter::makeClickableLinks($tweet['text']); ?> 
							</div>

							<!-- LAYER NR. 2 -->
							<!-- RETWEET INFO -->
							<div class="tp-caption Twitter-Retweet  " 
								id="slide-<?php echo $tweet['id']; ?>-layer-4" 
								data-x="40" 
								data-y="bottom" data-voffset="30" 
								data-width="['auto']"
								data-height="['auto']"
								data-transform_idle="o:1;tO:-20% 50%;"
					 
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:50px;opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" 
								data-start="850" 
								data-splitin="none" 
								data-splitout="none" 
								data-basealign="slide" 
								data-responsive_offset="off" 
								data-responsive="off"
								data-end="bytrigger"
								data-lasttriggerstate="reset"
								style="z-index: 6; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 15px; line-height: 22px; font-weight: 500; color: rgba(136, 153, 166, 1.00);font-family:Roboto;background-color:rgba(255, 255, 255, 0);border-radius:0 0 0 0;"><i class="fa-icon-retweet"></i> <?php echo $tweet['retweet_count']; ?> 
							</div>

							<!-- LAYER NR. 3 -->
							<!-- FAVORITE INFO -->
							<div class="tp-caption Twitter-Favorites  " 
								id="slide-<?php echo $tweet['id']; ?>-layer-1" 
								data-x="115" 
								data-y="bottom" 
								data-voffset="30" 
								data-width="['auto']"
								data-height="['auto']"
								data-transform_idle="o:1;tO:-20% 50%;"
					 
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:50px;opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" 
								data-start="850" 
								data-splitin="none" 
								data-splitout="none" 
								data-basealign="slide" 
								data-responsive_offset="off" 
								data-responsive="off"
								data-end="bytrigger"
								data-lasttriggerstate="reset"
								style="z-index: 7; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 15px; line-height: 22px; font-weight: 500; color: rgba(136, 153, 166, 1.00);font-family:Roboto;background-color:rgba(255, 255, 255, 0);border-radius:0 0 0 0;"><i class="fa-icon-star"></i> <?php echo $tweet['favorite_count']; ?> 
							</div>

							<!-- LAYER NR. 4 -->
							<!-- LINK TO TWEET -->
							<a class="tp-caption Twitter-Link" href="https://twitter.com/<?php echo $twitter_account; ?>/status/<?php echo $tweet['id']; ?>" target="_blank" id="slide-<?php echo $tweet['id']; ?>-layer-2" 
								data-x="185" 
								data-y="bottom" 
								data-voffset="24" 
								data-width="['auto']"
								data-height="['auto']"
								data-transform_idle="o:1;tO:-20% 50%;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;"
								data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 132, 180, 1.00);cursor:pointer;"
					 
								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
								data-transform_out="y:50px;opacity:0;s:500;e:Power1.easeInOut;s:500;e:Power1.easeInOut;" 
								data-start="850" 
								data-splitin="none" 
								data-splitout="none" 
								data-actions=''
								data-basealign="slide" 
								data-responsive_offset="off" 
								data-responsive="off"
								data-end="bytrigger"
								data-lasttriggerstate="reset"
								style="z-index: 8; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 15px; line-height: 15px; font-weight: 500; color: rgba(135, 153, 165, 1.00);font-family:Roboto;text-align:center;background-color:rgba(255, 255, 255, 1.00);padding:11px 11px 9px 11px;border-radius:30px 30px 30px 30px;"><i class="fa-icon-chain"></i> 
							</a>

							<!-- LAYER NR. 5 -->
							<!-- LINK TO TWEET HOVER -->
							<div class="tp-caption Twitter-Link  " 
								id="slide-<?php echo $tweet['id']; ?>-layer-8" 
								data-x="10" 
								data-y="10" 
								data-width="['auto']"
								data-height="['auto']"
								data-transform_idle="o:1;tO:-20% 50%;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:500;e:Power1.easeInOut;"
								data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(0, 132, 180, 1.00);br:30px 30px 30px 30px;cursor:pointer;"
					 
								data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
								data-transform_out="opacity:0;s:1000;e:Power1.easeInOut;s:1000;e:Power1.easeInOut;" 
								data-start="850" 
								data-splitin="none" 
								data-splitout="none" 
								data-actions='[{"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-<?php echo $tweet['id']; ?>-layer-6","delay":""},{"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-<?php echo $tweet['id']; ?>-layer-4","delay":""},{"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-<?php echo $tweet['id']; ?>-layer-1","delay":""},{"event":"click","action":"togglelayer","layerstatus":"visible","layer":"slide-<?php echo $tweet['id']; ?>-layer-2","delay":""}]'
								data-basealign="slide" 
								data-responsive_offset="off" 
								data-responsive="off"
								
								style="z-index: 9; min-width: auto; min-height: auto; white-space: nowrap; max-width: auto; max-height: auto; font-size: 15px; line-height: 15px; font-weight: 500; color: rgba(135, 153, 165, 1.00);font-family:Roboto;text-align:center;background-color:rgba(255, 255, 255, 1.00);padding:10px 11px 9px 11px;border-radius:50px 50px 50px 50px;"><i class="fa-icon-arrows-alt"></i> 
							</div>
						</li>
					<?php endforeach; ?>
					</ul>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
				</div><!-- END REVOLUTION SLIDER -->		
			</div><!-- ENF OF SLIDER WRAPPER -->	
		


	<script>
		var revapi35;
		jQuery(document).ready(function() {
			if(jQuery("#rev_slider").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider");
			}else{
				revapi35 = jQuery("#rev_slider").show().revolution({
					sliderType:"standard",
					sliderLayout:"auto",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
						keyboardNavigation:"on",
						keyboard_direction: "horizontal",
						mouseScrollNavigation:"off",
						onHoverStop:"off",
						touch:{
							touchenabled:"on",
							swipe_threshold: 75,
							swipe_min_touches: 1,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						}
						,
						arrows: {
							style:"uranus",
							enable:true,
							hide_onmobile:true,
							hide_under:778,
							hide_onleave:true,
							hide_delay:200,
							hide_delay_mobile:99999,
							tmp:'',
							left: {
								h_align:"left",
								v_align:"center",
								h_offset:10,
								v_offset:0
							},
							right: {
								h_align:"right",
								v_align:"center",
								h_offset:10,
								v_offset:0
							}
						}
						,
						tabs: {
							style:"ares",
							enable:true,
							width:350,
							height:80,
							min_width:350,
							wrapper_padding:0,
							wrapper_color:"#f5f5f5",
							wrapper_opacity:"1",
							tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{param2}}</span></div><div class="tp-tab-image"></div>',
							visibleAmount: 10,
							hide_onmobile: true,
							hide_under:776,
							hide_onleave:false,
							hide_delay:200,
							direction:"vertical",
							span:true,
							position:"outer-right",
							space:0,
							h_align:"right",
							v_align:"top",
							h_offset:0,
							v_offset:0
						}
					},
					gridwidth:800,
					gridheight:640,
					lazyType:"single",
					shadow:0,
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					startWithSlide:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						nextSlideOnWindowFocus:"off",
						disableFocusListener:"off",
					}
				});
			}
		});	/*ready*/
	</script>
        </section>
	
	
    <!-- end: Revolution Slider-->

<!-- Footer -->
        <footer id="footer" class="footer-light">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget clearfix widget-contact-us" style="background-image: url('images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>About POLO</h4>
                                <ul class="list-icon">
                                    <li><i class="fa fa-map-marker"></i> 795 Folsom Ave, Suite 600
                                        <br>San Francisco, CA 94107</li>
                                    <li><i class="fa fa-phone"></i> (123) 456-7890 </li>
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:first.last@example.com">first.last@example.com</a>
                                    </li>
                                    <li>
                                        <br><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
                                        <br>Saturday, Sunday: <strong>Closed</strong>
                                    </li>
                                </ul>
                                <!-- Social icons -->
                                <div class="social-icons social-icons-border float-left m-t-20">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <!-- end: Social icons -->
                            </div>
                            <!-- end: Footer widget area 1 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Quick LInks</h4>
                                <ul class="list-icon list-icon-arrow">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Shortcodes</a></li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 3 -->
                            <div class="widget">
                                <h4>Latest From Our Blog</h4>
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">

                                        <div class="post-thumbnail-content">
                                            <a href="#">Suspendisse consectetur fringilla luctus</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">

                                        <div class="post-thumbnail-content">
                                            <a href="#">Consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">

                                        <div class="post-thumbnail-content">
                                            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Footer widget area 3 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 4 -->
                            <div class="widget widget-tweeter" data-username="ardianmusliu" data-limit="2">
                                <h4>Recent Tweets</h4>
                            </div>
                            <!-- end: Footer widget area 4 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2017 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="http://www.inspiro-media.com" target="_blank">INSPIRO</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->

    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
    <!--Plugins-->
    <!--<script src="js/jquery.js"></script>-->
    <script src="js/plugins.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>
 	

	</body>
</html>
