@extends('master')
        @section('main')
        
		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="main-slider">
				
				<ul class="main-slider__slides" data-slick='{ "fade": true, "speed": 500, "autoplay": false, "infinite": true, "dots": true, "arrows": true }'>
					<li style="background-image:url('content/slider/1920x900-2.jpg');">
					
						<div class="main-slider-slide__content 
									main-slider-slide__content--valign-middle 
									main-slider-slide__content--align-right"> 
	
							<div class="main-slider-slide__content-wrap">  		
									
								<h1 data-animation="fadeInDown" data-delay="0.5s">
									Asian Food
								</h1>
								<h2 data-animation="fadeInDown" data-delay="1s">
									Restaurant
								</h2>
								<p data-animation="fadeInDown" data-delay="1.5s">
									Aliquam mi justo, molestie id bibendum eu, commodo<br class="hidden-xs">
									id eros. Cras suscipit magna sit amet aliquam condimentum.<br class="hidden-xs">
									Praesent aliquet posuere justo, ut vehicula. 
								</p>
								<p data-animation="fadeInDown" data-delay="2s">
									<a class="btn alt btn-large text-uppercase" href="#">Learn More</a>
								</p>
								
							</div><!-- end .main-slider-slide__content-wrap -->
							
						</div><!-- end .main-slider-slide__content -->	
						
					</li>
					<li style="background-image:url('content/slider/1920x900-2.jpg');">
					
						<div class="main-slider-slide__content 
									main-slider-slide__content--valign-middle 
									main-slider-slide__content--align-right"> 
	
							<div class="main-slider-slide__content-wrap">  		
									
								<h1 data-animation="fadeInDown" data-delay="0.5s">
									Delicious
								</h1>
								<h2 data-animation="fadeInDown" data-delay="1s">
									Menu
								</h2>
								<p data-animation="fadeInDown" data-delay="1.5s">
									Aliquam mi justo, molestie id bibendum eu, commodo<br class="hidden-xs">
									id eros. Cras suscipit magna sit amet aliquam condimentum.<br class="hidden-xs">
									Praesent aliquet posuere justo, ut vehicula. 
								</p>
								<p data-animation="fadeInDown" data-delay="2s">
									<a class="btn alt btn-large text-uppercase" href="#">Learn More</a>
								</p>
								
							</div><!-- end .main-slider-slide__content-wrap -->
							
						</div><!-- end .main-slider-slide__content -->	
						
					</li>
				</ul>	
				
				<div class="main-slider__pager main-slider__pager--align-center"></div>
				<div class="main-slider__arrows"></div>
				
			</div><!-- end .main-slider -->
            
            <div class="row">
            	<div class="span12 text-center">
                	
                    <div class="headline">
                    
                    	<i class="ifc-wine"></i>
                    	
                        <h2>Welcome to our restaurants</h2>
                        
                        <h6>A few words from our master chef</h6>
                        
                    </div><!-- end .headline -->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
            <div class="row">
            	<div class="span6">	
                	
                    <p>
                    	<img class="img-bordered" src="content/about/570x325.png" alt="">
                    </p>
                    
                </div><!-- end .span6 -->
                <div class="span6">	
                	
                    <h2 class="text-uppercase">Welcome to asia wok restaurant</h2>
                    
                    <br>
                    
                    <p>Pellentesque commodo ex ac nulla interdum, id vulputate nisl iaculis. Nam dolor mauris, varius eget quam 
                    viverra, mollis aliquet urna. Sed facilisis rhoncus neque, eu lacinia massa dapibus dolor. 
                    <em class="text-highlight">Nulla commodo vel sem id mattis. </em>In omis dolor elit urna ut tortor tincidunt 
                    pharetra ut ac augue. </p>
                    
                    <p>Proin consectetur sem <em class="text-highlight">a dictum molestie. </em>Curabitur velit metus, finibus id 
                    consequat eu, ultric  es vel nibh. Integer fermentum, massa eget vestibulum gravida, mauris diam efficitur tellus, 
                    ut tincidunt lorem sapien a lorem. </p>
                    
                    <h2>Enjoy</h2>
                    
                </div><!-- end .span6 -->
            </div><!-- end .row -->
			
            <div class="menu-items-slider">
            	
                <ul class="slides">
                	<li style="background-image:url(content/menu-items-slider/1920x730-1.jpg);">
                        
                        <div class="row">
                        	<div class="span8">
                        
                                <p class="last">
                                	<img src="content/menu-items-slider/logo.png" alt="">
                                </p>
                                
                           	</div><!-- end .span8 -->
                            <div class="span4">
                            	
                                <div class="menu-items-description">
                                    
                                    <h3>Lorem ipsum dolor</h3>
                                    
                                    <p>Lorem ipsum dolor sit amet, consectetur elit omis. In malesuada diam eget nunc.</p>
                                    
                                    <p>
                                        <span class="text-highlight">Ingredients: </span>
                                        Aliquam vel sem ultrices, posuere metus vel iaculis. 
                                    </p>
                                    
                                    <p>Price: <strong class="text-highlight">$8.50</strong></p>
                                    
                                </div><!-- end .menu-item-description -->
                        
                    		</div><!-- end .span4 -->
            			</div><!-- end .row -->
                            
                    </li>
                    <li style="background-image:url(content/menu-items-slider/1920x730-2.jpg);">
                        
                        <div class="row">
                        	<div class="span8">
                        
                                <p class="last">
                                	<img src="content/menu-items-slider/logo.png" alt="">
                                </p>
                                
                           	</div><!-- end .span8 -->
                            <div class="span4">
                            	
                                <div class="menu-items-description">
                                    
                                    <h3>Curabitur lobortis</h3>
                                    
                                    <p> Vivamus viverra egestas facilisis id auctor mi ut neque id ipsum erat venenatis lobortis quis.</p>
                                    
                                    <p>
                                        <span class="text-highlight">Ingredients: </span>
                                        Vivamus dapibus facilisis ante in viverra egestas dolor. 
                                    </p>
                                    
                                    <p>Price: <strong class="text-highlight">$9.30</strong></p>
                                    
                                </div><!-- end .menu-item-description -->
                        
                    		</div><!-- end .span4 -->
            			</div><!-- end .row -->
                            
                    </li>
                    <li style="background-image:url(content/menu-items-slider/1920x730-3.jpg);">
                        
                        <div class="row">
                        	<div class="span8">
                        
                                <p class="last">
                                	<img src="content/menu-items-slider/logo.png" alt="">
                                </p>
                                
                           	</div><!-- end .span8 -->
                            <div class="span4">
                            	
                                <div class="menu-items-description">
                                    
                                    <h3>Omis unde dolor</h3>
                                    
                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, omis ridiculus feugiat.</p>
                                    
                                    <p>
                                        <span class="text-highlight">Ingredients: </span>
                                         Class aptent taciti sociosqu ad litora torquent per. 
                                    </p>
                                    
                                    <p>Price: <strong class="text-highlight">$5.90</strong></p>
                                    
                                </div><!-- end .menu-item-description -->
                        
                    		</div><!-- end .span4 -->
            			</div><!-- end .row -->
                            
                    </li>
                </ul>
                
                <div class="daily-offers">Daily offers</div>
                
            </div><!-- end .menu-items-slider -->
            
            <div class="row">
            	<div class="span12 text-center">
                	
                    <div class="headline">
                    
                    	<i class="ifc-bunch_ingredients"></i>
                    	
                        <h2>What we offer</h2>
                        
                        <h6>What can we affer</h6>
                        
                    </div><!-- end .headline -->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
            <div class="row">
            	<div class="span4">
            
            		<div class="icon-box-1">
                        
                        <i class="ifc-restaurant"></i>
  
                        <div class="icon-box-content">
                        
                        	<h3>
                            	<a href="menu.html">Vulputate suscipit</a>
                            </h3>
                        	
                            <p>Sed pellentesque urna sem, ut aliquet massa scelerisque nec. Aliquam molestie sodales risus, eleifend 
                            rhoncus turpis ultricies vitae duis id lobortis.</p>
                        	
                            <a class="btn" href="menu.html">read more </a>
                        
                        </div><!-- end .icon-box-content -->
                        
                    </div><!-- end .icon-box-1 -->
                    
                </div><!-- end .span4 -->
                <div class="span4">
            
            		<div class="icon-box-1">
                        
                        <i class="ifc-tea"></i>
  
                        <div class="icon-box-content">
                        
                        	<h3>
                            	<a href="menu.html">Faucibus convallis</a>
                            </h3>
                        	
                            <p>Curabitur eget libero a velit aliquam tincidunt sed eget leo. Quisque et ultricies lectus, a condimentum 
                            sapien. Aenean sit amet ultricies lorem, vitae omis.</p>
                        	
                            <a class="btn" href="menu.html">read more </a>
                        
                        </div><!-- end .icon-box-content -->
                        
                    </div><!-- end .icon-box-1 -->
                    
                </div><!-- end .span4 -->
                <div class="span4">
            
            		<div class="icon-box-1">
                        
                        <i class="ifc-corkscrew"></i>
  
                        <div class="icon-box-content">
                        
                        	<h3>
                            	<a href="menu.html">Pellentesque in tempor</a>
                            </h3>
                        	
                            <p>Maecenas ac suscipit urna, eget finibus enim. Donec interdum nec enim eget tristique. Fusce gravida hendrerit 
                            gravida. Duis odio sapien, posuere ut mi vel.</p>
                        	
                            <a class="btn" href="menu.html">read more </a>
                        
                        </div><!-- end .icon-box-content -->
                        
                    </div><!-- end .icon-box-1 -->
                    
                </div><!-- end .span4 -->
            </div><!-- end .row -->
            
            <div class="fullwidth-section parallax" id="bg-1">
            	
                <div class="fullwidth-section-content">
                	
                    <div class="row">
                    	<div class="span12">
                        	
                            <div class="testimonial-slider">
                            	
                                <ul class="slides">
                                	<li>
                                    	
                                        <div class="testimonial">
                                        	
                                            <img src="content/testimonials/100x100-1.png" alt="">
                        
                                                <h3>Gong Feng Ge</h3>
                                                
                                                <blockquote>
                                                
                                                    <p><em>Pellentesque nunc metus, blandit nec tortor a, finibus luctus eros. Aliquam sollicitudin nunc vel 
                                                    urna mattis imperdiet. Integer aliquet dapibus arcu facilisis tristique. Fusce semper facilisis aliquet. 
                                                    Curabitur non magna nunc. Nam eu ex id quam feugiat ullamcorper ac at orci. In sed faucibus nisi. Integer 
                                                    lacinia lactus laoreet accumsan dolor sit amet ipsum omis unde. </em></p>
                                                
                                                </blockquote>
                                                                    
                                        </div><!-- end .testimonial -->
                                        
                                    </li>
                                    <li>
                                    	
                                        <div class="testimonial">
                                        	
                                            <img src="content/testimonials/100x100-2.png" alt="">
                        
                                                <h3>Xiao Chen Tien</h3>
                                                
                                                <blockquote>
                                                
                                                    <p><em>Cras tincidunt nunc vitae nisl imperdiet accumsan. Donec molestie fringilla sapien vitae venenatis. 
                                                    Integer malesuada augue libero, vel maximus mi imperdiet sed. Pellentesque mattis erat eget turpis sagittis 
                                                    maximus. Fusce dictum porttitor faucibus. Sed ligula eros, sodales at faucibus nec, vehicula vel ante. Morbi 
                                                    massa arcu, suscipit at consequat a, molestie ac velit ligula eros. </em></p>
                                                
                                                </blockquote>
                                                                    
                                        </div><!-- end .testimonial -->
                                        
                                    </li>
                                    <li>
                                    	
                                        <div class="testimonial">
                                        	
                                            <img src="content/testimonials/100x100-3.png" alt="">
                        
                                                <h3>Yue Yan Fang</h3>
                                                
                                                <blockquote>
                                                
                                                    <p><em>Aliquam vitae nisi ac nisi facilisis porta. Morbi ac justo elementum, facilisis ex ut, malesuada augue. 
                                                    Quisque rutrum urna sed felis accumsan, a fringilla enim viverra. Pellentesque laoreet velit non accumsan 
                                                    venenatis. Aliquam laoreet, felis id pellentesque tempus, quam diam tincidunt ante, et semper tellus lacus sed 
                                                    arcu. Donec ut orci in ante dignissim dapibus pretium mi ut ultrices. </em></p>
                                                
                                                </blockquote>
                                                                    
                                        </div><!-- end .testimonial -->
                                        
                                    </li>
                                </ul>
                                
                            </div><!-- end .testimonial-slider -->
                            
                        </div><!-- end .span12 -->
                    </div><!-- end .row -->
                    
                    <div class="row">
                    	<div class="span12 text-center">
                        	
                            <a class="btn text-uppercase" href="#">Make a reservation</a>
                            
                        </div><!-- end .span12 -->
                    </div><!-- end .row -->
                    
                </div><!-- end .fullwidth-section-content -->
                
            </div><!-- end .fullwidth-section -->
            
            <div class="row">
            	<div class="span12 text-center">
                	
                    <div class="headline">
                    
                    	<i class="ifc-wifi"></i>
                    	
                        <h2>Quick litle info</h2>
                        
                        <h6>Some text about info</h6>
                        
                    </div><!-- end .headline -->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
            <div class="row">
            	<div class="span4">
                	
                    <h2 class="text-uppercase">Our menu</h2>
                    
                    <br>
                    
                    <div class="menu-items" style="border-bottom:none;">
                                	
                        <div class="menu-items-title">
                            
                            <h4>
                                Mixed vegetables  
                                <span class="menu-items-price">$7,50</span>
                            </h4>
                            
                        </div><!-- end .menu-items-title -->
                        
                        <div class="menu-items-thumb">
                            
                            <img src="content/menu/370x145-4.png" alt="">
                            
                        </div><!-- end .menu-items-thumb -->
                        
                        <div class="menu-items-description">
                            
                            <p>Suspendisse magna nisi, fringilla nec purus quis, fringilla consequat magna. Aliquam in 
                            tellus at diam fermentum auctor. </p>
                            
                            <a class="btn text-uppercase" href="#"><strong>Go to menu page</strong></a>
                            
                        </div><!-- end .menu-items-description -->
                        
                    </div><!-- end .menu-items -->
                    
                </div><!-- end .span4 -->
                <div class="span4">
                	
                    <h2 class="text-uppercase">Opening hours</h2>
                    
                    <br>
                    
                    <p>Morbi aliquam ligula justo, nec ultrices bibendum et. Ut tristique lacinia est, a suscipit turpis aliquet 
                    id viva mus at tristique elit, vitae interdum arcu.</p>
                    
                    <ul class="schedule">
                    	<li>
                        	<span class="day">Monday</span>
                            <span class="program">17<sup>00</sup> to 21<sup>00</sup></span>
                        </li>
                        <li>
                        	<span class="day">Tue - Fri</span>
                            <span class="program">16<sup>30</sup> to 22<sup>00</sup></span>
                        </li>
                        <li>
                        	<span class="day">Saturday</span>
                            <span class="program">10<sup>30</sup> to 23<sup>00</sup></span>
                        </li>  
                        <li>
                        	<span class="day">Sunday</span>
                            <span class="program">11<sup>00</sup> to 21<sup>00</sup></span>
                        </li>                      
                    </ul>
                    
                </div><!-- end .span4 -->
                <div class="span4">
                	
                    <h2 class="text-uppercase">Book a table</h2>
                    
                    <br>
                    
                    <p>Vivamus in lectus ex. Cras commodo cursus malesuada. Aenean mauris elit, tincidunt in nisl at, sodales hendrerit 
                    elit. Nunc et dignissim lectus, imperdiet laoreet justo. Nam elementum volutpat velit nec faucibus laoreet.</p>
                    
                    <ul class="check">
                    	<li>In elementum tincidunt dui</li>
                        <li>Duis ligula dolor vulputate</li>
                        <li>Mattis dolor diam massa</li>
                        <li>Integer rutrum orci metus</li>
                    </ul>
                    
                    <a class="btn text-uppercase" href="#"><strong>Make a reservation</strong></a>
                    
                </div><!-- end .span4 -->
            </div><!-- end .row -->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        @endsection