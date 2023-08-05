<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
    
    
	<title> Index :: AsiaWok </title>
	<meta name="description" content=" add description  ... ">
    
    <!-- /// Favicons ////////  -->
    <link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">

	<!-- /// Google Fonts ////////  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic">
    
    <!-- /// FontAwesome Icons 4.2.0 ////////  -->
	<link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    
    <!-- /// Custom Icon Font ////////  -->
    <link rel="stylesheet" href="assets/fonts/iconfontcustom/icon-font-custom.css">  
    
	<!-- /// Template CSS ////////  -->
    <link rel="stylesheet" href="assets/css/asiawok.css">

	<!-- /// JS Plugins CSS ////////  -->
	 <link rel="stylesheet" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/vendors/magnificpopup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/animations/animate.min.css">
	<link rel="stylesheet" href="assets/vendors/itplayer/css/YTPlayer.css">

</head>
<body class="sticky-header">
@section('header')
	<div id="wrap">
    	
        <div id="header">
        
		<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        
        	<div class="row">
				<div class="span2">
				
					<!-- // Logo // -->
					
					<a href="index" id="logo">
                    	<img class="responsive-img" src="assets/images/logo.png" alt="">
                    </a>
				
				</div><!-- end .span2 -->
                <div class="span2">
                	
                    <div class="call-to-number hidden-phone">
                        
                        <h3>
                            Quick order?<br>
                            call: <small>347-528-4271</small>
                        </h3>
                        
                    </div><!-- end .call-to-number -->
                    
                </div><!-- end .span2 -->
                <div class="span8">
                	
                    <!-- // Mobile menu trigger // -->
					
                	<a href="#" id="mobile-menu-trigger">
                    	<i class="fa fa-bars"></i>
                    </a>
                    
                    <!-- // Custom search // -->                                        
                    
					<form action="#" id="custom-search-form" method="get" role="search">
                        <input type="text" value="" name="s" id="s" placeholder="type and press enter to search...">
                        <input type="submit" id="custom-search-submit" value="">
                    </form>

					<!-- // Menu // -->
		
					<ul class="sf-menu fixed" id="menu">
						<li class="dropdown current">
                        	<a href="/">Home</a>
                            <ul>
                            	<li>
                                	<a href="/">Home 1</a>
                                </li>
                                <li>
                                	<a href="index-2">Home 2</a>
                                </li>                                
                            </ul>
                        </li>
                        <li>
                                    <a href="about-us">About us</a>
                                </li>
                        <li>
                        	<a href="menu">Menu</a>
                            
                        </li>
                        <li>
                        	<a href="contact">Contact</a>                              
                        </li>
                        
                            @if (Route::has('login'))
                    @auth
                    <li><form method="POST" action="{{ route('logout') }}" >
            @csrf

            <button type="submit" class="btn alt btn-large text-uppercase">
                {{ __('Log Out') }}
            </button>
        </form></li>
    
                    @else
                       <li class="active"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                         <li class="active"><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
            @endif
					</ul>
                    
                </div><!-- end .span8 -->
            </div><!-- end .row -->
        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        
        </div><!-- end #header -->
@show
@yield('main')
@section('footer')
<div id="footer">
        
        <!-- /// FOOTER     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="row">
                <div class="span3" id="footer-widget-area-1">
                    
                    <div class="widget widget_text">
                        
                        <h4 class="widget-title">About Us</h4>
                    
                        <div class="textwidget">
                            
                            <p>Donec tellus metus, elementum non eros eu, pellentesque amet diam. Nam dolor et massa eget 
                            tristique. <span class="text-highlight">Etiam lacinia massa non auctor luctus.</span> Etiam omis 
                            rhoncus mi. </p>
                            
                            <p>Malesuada mi, vitae porttitor turpis. Cum sociis natoque est penatibus et magnis dis unde montes, 
                            nascetur ridiculus mus socios lactus amet.</p>
                            
                        </div><!-- end .textwidget -->
                        
                    </div><!-- end .widget_text -->
                    
                </div><!-- end .span3 -->
                <div class="span3" id="footer-widget-area-2">
                    
                    <div class="widget widget_text">
                        
                        <h4 class="widget-title">Open Daily</h4>
                    
                        <div class="textwidget">
                            
                            <p>
                                Monday:  17:00 - 21:00 <br>
                                Tuesday - Friday: 16:30 – 21:00 <br>
                                Saturday: 16:30 – 22:00 <br>
                                Sunday: 11:00 – 21:00
                            </p>
                            
                            <p>For orders, call now: <strong class="text-highlight">347-528-4271</strong></p>
                            
                            <a class="btn text-uppercase" href="#"><strong>Reservation</strong></a>
                            
                        </div><!-- end .textwidget -->
                        
                    </div><!-- end .widget_text -->
                    
                </div><!-- end .span3 -->
                <div class="span3" id="footer-widget-area-3">
                    
                    <div class="widget ewf_widget_social_media"> 
                    
                        <h4 class="widget-title">Social Media</h4>
                        
                        <div class="fixed">
                            
                            <a href="#" class="googleplus-icon social-icon">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            
                            <a href="#" class="pinterest-icon social-icon">
                                <i class="fa fa-pinterest"></i>
                            </a>
                            
                            <a href="#" class="facebook-icon social-icon">
                                <i class="fa fa-facebook"></i>
                            </a>
                            
                            <a href="#" class="twitter-icon social-icon">
                                <i class="fa fa-twitter"></i>
                            </a>
                            
                        </div>
                    
                    </div><!-- end .ewf_widget_social_media -->
                    
                </div><!-- end .span3 -->
                <div class="span3" id="footer-widget-area-4">
                    
                    <div class="widget ewf_widget_contact_info">
                
                        <h4 class="widget-title">Contact Us</h4>
                        
                        <ul>
                            <li>
                                <i class="ifc-home"></i>
                                <span class="text-highlight hidden-tablet">Address: </span>1 Zhenwumiao Road, Xicheng District, Beijing, China, 100045. 
                            </li>
                            <li>
                                <i class="ifc-phone2"></i>
                                <span class="text-highlight hidden-tablet">Phone: </span>68566688;<br>
                                <span class="text-highlight hidden-tablet">Fax: </span>68562251
                            </li>
                            <li>
                                <i class="ifc-message"></i>
                                <span class="text-highlight hidden-tablet">Email: </span><a href="mailto:#">office@asiawok.com</a>
                            </li>
                            <li>
                                <i class="ifc-domain"></i>
                                <span class="text-highlight hidden-tablet">Web: </span><a href="#">www.asiawok.com</a>
                            </li>
                        </ul>
                        
                    </div><!-- end .ewf_widget_contact_info -->
                    
                    </div><!-- end .span3 -->
            </div><!-- end .row -->
            
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        </div><!-- end #footer -->
        <div id="footer-bottom">
            
        <!-- /// FOOTER-BOTTOM     ////////////////////////////////////////////////////////////////////////////////////////////// -->   
        
            <div class="row">
                <div class="span6" id="footer-bottom-widget-area-1">
                    
                    <div class="widget widget_text">
                    
                        <div class="textwidget">
                            
                            <p class="last">&copy; 2022 <span class="text-highlight">Asia Wok - Asian Food Restaurant Template</span>. Template by <a href="https://roventhemes.com/" title="Free and premium HTML5 Templates">Roven Themes</a>.</p>
                            
                        </div><!-- end .textwidget -->
                        
                    </div><!-- end .widget_text -->
                    
                </div><!-- end .span6 -->
                <div class="span6" id="footer-bottom-widget-area-2">
                    
                    <div class="widget widget_nav_menu">
                    
                        <div class="menu-menu-1-container">
                            
                            <ul class="menu" id="menu-menu-1">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-14 current_page_item menu-item-14" id="menu-item-14">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15" id="menu-item-15">
                                    <a href="#">About us</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16" id="menu-item-16">
                                    <a href="#">Menu</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17" id="menu-item-17">
                                    <a href="#">Blog</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18" id="menu-item-18">
                                    <a href="#">Gallery</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19" id="menu-item-19">
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                            
                        </div><!-- end .menu-menu-1-container -->
                        
                    </div><!-- end .widget_nav_menu -->
                    
                </div><!-- end .span6 -->
            </div><!-- end .row -->
        
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->    
        
        </div><!-- end #footer-bottom -->
        
    </div><!-- end #wrap -->
    
    <a id="back-to-top" href="#">
        <i class="ifc-up4"></i>
    </a>
    @show

    <!-- /// jQuery ////////  -->
    <script src="assets/vendors/jquery-2.1.1.min.js"></script>

    <!-- /// ViewPort ////////  -->
    <script src="assets/vendors/viewport/jquery.viewport.js"></script>
    
    <!-- /// Easing ////////  -->
    <script src="assets/vendors/easing/jquery.easing.1.3.js"></script>

    <!-- /// Slick ////////  -->
    <script src="assets/vendors/slick/slick.min.js"></script>

    <!-- /// Animations ////////  -->
    <script src="assets/vendors/animations/animate.js"></script>
     
    <!-- /// Superfish Menu ////////  -->
    <script src="assets/vendors/superfish/hoverIntent.js"></script>
    <script src="assets/vendors/superfish/superfish.js"></script>
   
    <!-- /// bxSlider ////////  -->
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    
    <!-- /// Magnific Popup ////////  -->
    <script src="assets/vendors/magnificpopup/jquery.magnific-popup.min.js"></script>
    
    <!-- /// Isotope ////////  -->
    <script src="assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
    
    <!-- /// Parallax ////////  -->
    <script src="assets/vendors/parallax/jquery.parallax.min.js"></script>

    <!-- /// EasyPieChart ////////  -->
    <script src="assets/vendors/easypiechart/jquery.easypiechart.min.js"></script>
    
    <!-- /// YTPlayer ////////  -->
    <script src="assets/vendors/itplayer/jquery.mb.YTPlayer.js"></script>
    
    <!-- /// Easy Tabs ////////  -->
    <script src="assets/vendors/easytabs/jquery.easytabs.min.js"></script>  
    
    <!-- /// Form validate ////////  -->
    <script src="assets/vendors/jqueryvalidate/jquery.validate.min.js"></script>
    
    <!-- /// Form submit ////////  -->
    <script src="assets/vendors/jqueryform/jquery.form.min.js"></script>
    
    <!-- /// gMap ////////  -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDG-gTAgMTtgV3DOK0UQIkcruOy2yDDauc&sensor=false"></script>
    <script src="assets/vendors/gmap/jquery.gmap.min.js"></script>

    <!-- /// Custom JS ////////  -->
    <script src="assets/js/asiawok.js"></script>

</body>
</html>