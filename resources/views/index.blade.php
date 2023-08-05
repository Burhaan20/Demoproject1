		@extends('master')
        @section('main')
            <div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="dropdown">
                <button type="button" class="btn btn-primary" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
 
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $d)
                            @php $total += $d['price'] * $d['qua'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Total: <span class="text-info">₹ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $d)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ asset('storage/') }}/{{ $d['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $d['pname'] }}</p>
                                    <span class="price text-info"> ${{ $d['price'] }}</span> <span class="count"> Quantity:{{ $d['qua'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
        <div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="main-slider">
				
				<ul class="main-slider__slides" data-slick='{ "fade": true, "speed": 500, "autoplay": false, "infinite": true, "dots": true, "arrows": true }'>
					<li style="background-image:url('content/slider/1920x900-3.jpg');">
					
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
					<li style="background-image:url('content/slider/1920x900-3.jpg');">
					
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


           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
   
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

<br/>
<div class="container">
   
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
   
</div>

            <div class="row">
            	<div class="span12 text-center">
                	
                    <div class="headline">
                    	
                        <i class="ifc-food"></i>
                       
                        <h2>Chef’s specialities</h2>                       
                        
                        <h6>Our master chef specials</h6>
                        
                    </div><!-- end .headline -->
                    
                </div><!-- end .span12 -->
            </div><!-- end. row -->
            
            <div class="row">
            	<div class="span3">
                	
                    <div class="portfolio-item">
                    	
                        <div class="portfolio-item-preview">
                        	
                            <img src="content/gallery/270x465-1.png" alt="">
                            
                            <div class="portfolio-item-overlay">
                            	
                                <div class="portfolio-item-overlay-actions">
                                	
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/gallery/270x465-1.png">
                                    	<i class="ifc-zoom_in"></i>
                                    </a>
                                    
                                </div><!-- end .portfolio-item-overlay-actions -->
                                
                                <div class="portfolio-item-description">
                                	
                                    <h3>
                                    	<a href="gallery.html">Lorem ipsum</a><br>
                                        Price: <span>$8.90</span>
                                    </h3>
                                    
                                </div><!-- end .portfolio-item-description -->
                                
                            </div><!-- end .portfolio-item-overlay -->
                            
                        </div><!-- end .portfolio-item-preview -->
                        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .span3 -->
                <div class="span3">
                	
                    <div class="portfolio-item">
                    	
                        <div class="portfolio-item-preview">
                        	
                            <img src="content/gallery/270x465-2.png" alt="">
                            
                            <div class="portfolio-item-overlay">
                            	
                                <div class="portfolio-item-overlay-actions">
                                	
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/gallery/270x465-2.png">
                                    	<i class="ifc-zoom_in"></i>
                                    </a>
                                    
                                </div><!-- end .portfolio-item-overlay-actions -->
                                
                                <div class="portfolio-item-description">
                                	
                                    <h3>
                                    	<a href="gallery.html">Dolor amet</a><br>
                                        Price: <span>$6.40</span>
                                    </h3>
                                    
                                </div><!-- end .portfolio-item-description -->
                                
                            </div><!-- end .portfolio-item-overlay -->
                            
                        </div><!-- end .portfolio-item-preview -->
                        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .span3 -->
                <div class="span3">
                	
                    <div class="portfolio-item">
                    	
                        <div class="portfolio-item-preview">
                        	
                            <img src="content/gallery/270x465-3.png" alt="">
                            
                            <div class="portfolio-item-overlay">
                            	
                                <div class="portfolio-item-overlay-actions">
                                	
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/gallery/270x465-3.png">
                                    	<i class="ifc-zoom_in"></i>
                                    </a>
                                    
                                </div><!-- end .portfolio-item-overlay-actions -->
                                
                                <div class="portfolio-item-description">
                                	
                                    <h3>
                                    	<a href="gallery">Omis unde</a><br>
                                        Price: <span>$9.90</span>
                                    </h3>
                                    
                                </div><!-- end .portfolio-item-description -->
                                
                            </div><!-- end .portfolio-item-overlay -->
                            
                        </div><!-- end .portfolio-item-preview -->
                        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .span3 -->
                <div class="span3">
                	
                    <div class="portfolio-item">
                    	
                        <div class="portfolio-item-preview">
                        	
                            <img src="content/gallery/270x465-1.png" alt="">
                            
                            <div class="portfolio-item-overlay">
                            	
                                <div class="portfolio-item-overlay-actions">
                                	
                                    <a class="portfolio-item-zoom magnificPopup-gallery" href="content/gallery/270x465-4.png">
                                    	<i class="ifc-zoom_in"></i>
                                    </a>
                                    
                                </div><!-- end .portfolio-item-overlay-actions -->
                                
                                <div class="portfolio-item-description">
                                	
                                    <h3>
                                    	<a href="gallery">Etiam lactus</a><br>
                                        Price: <span>$7.40</span>
                                    </h3>
                                    
                                </div><!-- end .portfolio-item-description -->
                                
                            </div><!-- end .portfolio-item-overlay -->
                            
                        </div><!-- end .portfolio-item-preview -->
                        
                    </div><!-- end .portfolio-item -->
                    
                </div><!-- end .span3 -->
            </div><!-- end .row -->
            
            <div class="menu-items-slider">
            	
                <ul class="slides">
                	<li style="background-image:url('content/slider/1920x900-3.jpg');">
                        
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
                    	
                        <i class="ifc-opened_folder"></i>
                       
                        <h2>From our menu</h2>                       
                        
                        <h6>A list of specialities</h6>
                        
                    </div><!-- end .headline -->
                    
                </div><!-- end .span12 -->
            </div><!-- end. row -->
            
            <div class="row">
            	<div class="span12">
                	
                    <div class="menu-wrapper">
                    	
                        <div class="row">
                        	<div class="span4">
                            	
                                <div class="menu-section">
                                	
                                    <div class="menu-section-title">
                                    	
                                        <h3>Appetizers &amp; Soups</h3>
                                        
                                    </div><!-- end .menu-section-title -->
                                    
                                </div><!-- end .menu-section -->
                                 @foreach($data as $s)
                                <div class="menu-items">
                                	
                                    <div class="menu-items-title">
                                    	
                                        <h4>
                                        	{{$s->sname}}
                                        	<span class="menu-items-price">₹{{$s->price}}</span>
                                        </h4>
                                        
                                    </div><!-- end .menu-items-title -->
                                    
                                    <div class="menu-items-thumb">
                                    	
                                        <img src="/storage/{{$s->img}}" alt="">
                                        
                                    </div><!-- end .menu-items-thumb -->
                                    
                                    <div class="menu-items-description">
                                    	
                                        <p> {{$s->disc}}</p>
<a class="btn alt btn-large text-uppercase" href="{{route('add-to-cart', $s->id)}}">Order Now</a>                                    </div><!-- end .menu-items-description -->
                                    
                                </div><!-- end .menu-items -->
                                @endforeach
                                
                            </div><!-- end .span4 -->
                            <div class="span4">
                            	
                                <div class="menu-section">
                                	
                                    <div class="menu-section-title">
                                    	
                                        <h3>Vegetables</h3>
                                        
                                    </div><!-- end .menu-section-title -->
                                    
                                </div><!-- end .menu-section -->
                                
                              @foreach($data as $s)
                                <div class="menu-items">
                                    
                                    <div class="menu-items-title">
                                        
                                        <h4>
                                            {{$s->sname}}
                                            <span class="menu-items-price">₹{{$s->price}}</span>
                                        </h4>
                                        
                                    </div><!-- end .menu-items-title -->
                                    
                                    <div class="menu-items-thumb">
                                        
                                        <img src="/storage/{{$s->img}}" alt="">
                                        
                                    </div><!-- end .menu-items-thumb -->
                                    
                                    <div class="menu-items-description">
                                        
                                        <p> {{$s->disc}}</p>
<a class="btn alt btn-large text-uppercase" href="{{route('add-to-cart', $s->id)}}">Order Now</a>
                                      </div><!-- end .menu-items-description -->
                                    
                                </div><!-- end .menu-items -->
                                @endforeach
                                
                            </div><!-- end .span4 -->
                            <div class="span4">
                            	
                                <div class="menu-section">
                                	
                                    <div class="menu-section-title">
                                    	
                                        <h3>Rice &amp; Noodles</h3>
                                        
                                    </div><!-- end .menu-section-title -->
                                    
                                </div><!-- end .menu-section -->
                                 @foreach($data as $s)
                                <div class="menu-items">
                                    
                                    <div class="menu-items-title">
                                        
                                        <h4>
                                            {{$s->sname}}
                                            <span class="menu-items-price">₹{{$s->price}}</span>
                                        </h4>
                                        
                                    </div><!-- end .menu-items-title -->
                                    
                                    <div class="menu-items-thumb">
                                        
                                        <img src="/storage/{{$s->img}}" alt="">
                                        
                                    </div><!-- end .menu-items-thumb -->
                                    
                                    <div class="menu-items-description">
                                        
                                        <p> {{$s->disc}}</p>
                                        <a class="btn alt btn-large text-uppercase" href="{{route('add-to-cart', $s->id)}}">Order Now</a>
                                    </div><!-- end .menu-items-description -->
                                    
                                </div><!-- end .menu-items -->
                                @endforeach
                                
                              </div><!-- end .span4 -->
                        </div><!-- end .row -->
                        
                    </div><!-- end .menu-wrapper -->
                    
                </div><!-- end .span12 -->
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
                    	
                        <i class="ifc-chili_pepper"></i>
                       
                        <h2>Our latest recepies</h2>                       
                        
                        <h6>Latest recepies from the blog</h6>
                        
                    </div><!-- end .headline -->
                    
                </div><!-- end .span12 -->
            </div><!-- end. row -->
            
            <div class="row">
            	<div class="span12">
                	
                    <div class="blog-post img-left">
                    	
                        <div class="row">
                        	<div class="span6">
                            	
                                <div class="blog-post-thumb">
                                	
                                    <img src="content/blog/570x300-1.png" alt="">
                                    
                                    <div class="blog-post-date">                                    	
                                        10<small>Dec</small>
									</div><!-- end .blog-post-date -->
                                    
                                </div><!-- end .blog-post-thumb -->
                                
                            </div><!-- end .span6 -->
                            <div class="span6">
                            	
                                <div class="blog-post-info">
                                
                                    <div class="blog-post-title">
                                        
                                        <h3>
                                            <a href="blog-post.html">Vivamus id viverra purus phasellus aliquam est non neque felis placerat, eu mattis felis faucibus.</a>
                                        </h3>
                                        
                                        <p>by <a href="#">Jane Doe</a> on <a href="#">6 dec 2022</a> | <a href="#"><i class="fa fa-circle"></i> 6</a></p>
                                        
                                    </div><!-- end .blog-post-title -->
                                    
                                    <p>Vivamus sagittis ut ex at ultricies. Phasellus vulputate accumsan tellus vitae efficitur. Vivamus viverra eget 
                                    urna eu cursus. Aliquam maximus nec felis ommodogravida, risus tortor euismod ...</p>
                                    
                                    <a class="btn" href="blog-post.html">read more</a>
                                
                                </div><!-- end .blog-post-info -->
                                
                            </div><!-- end .span6 -->
                        </div><!-- end .row -->
                        
                    </div><!-- end .blog-post -->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
            <div class="row">
            	<div class="span12">
                	
                    <div class="blog-post img-right">
                    	
                        <div class="row">                    
                            <div class="span6">
                            	
                                <div class="blog-post-info">
                                
                                    <div class="blog-post-title">
                                        
                                        <h3>
                                            <a href="blog-post.html"> Aliquam vitae nisi ac nisi facilisis porta ac justo elementum facilisis ex ut malesuada augue.</a>
                                        </h3>
                                        
                                        <p>by <a href="#">Jane Doe</a> on <a href="#">6 dec 2022</a> | <a href="#"><i class="fa fa-circle"></i> 6</a></p>
                                        
                                    </div><!-- end .blog-post-title -->
                                    
                                    <p>Curabitur eget libero a velit aliquam tincidunt sed eget leo. Quisque et ultricies lectus, a condimentum sapien. 
                                    Aenean sit amet ultricies lorem, vitae consequat sem. Quisque in arcu mauris...</p>
                                    
                                    <a class="btn" href="blog-post.html">read more</a>
                                
                                </div><!-- end .blog-post-info -->
                                
                            </div><!-- end .span6 -->                            
                        	<div class="span6">
                            	
                                <div class="blog-post-thumb">
                                	
                                    <img src="content/blog/570x300-2.png" alt="">
                                    
                                    <div class="blog-post-date">                                    	
                                        9<small>Dec</small>
									</div><!-- end .blog-post-date -->
                                    
                                </div><!-- end .blog-post-thumb -->
                                
                            </div><!-- end .span6 -->
                        </div><!-- end .row -->
                        
                    </div><!-- end .blog-post -->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		@endsection