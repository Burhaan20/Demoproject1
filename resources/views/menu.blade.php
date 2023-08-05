@extends('master')
        @section('main')        
		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div id="page-header" style="background-image:url('img/about-1.jpg');">
            	
                <div class="row">
                	<div class="span12">
                    	
                        <h1>Menu</h1>
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
                
            </div><!-- end #page-header -->
            
            <div class="row">
            	<div class="span3">
                	
                    <p>
                    	<img src="img/team-1.jpg" alt="">
                    </p>
                    
                </div><!-- end .span3 -->
                <div class="span9">
                	
                    <br class="hidden-phone hidden-tablet"><br class="hidden-phone hidden-tablet">
                    
                    <h2 class="text-uppercase">A few recommendations from the chef</h2>
                    
                    <p>Pellentesque commodo ex ac nulla interdum, id vulputate nisl iaculis. Nam dolor mauris, varius eget quam viverra, 
                    mollis aliquet urna.  Sed facilisis rhoncus neque, eu lacinia massa dapibus bibendum. <em class="text-highlight">Nulla 
                    commodo vel sem id mattis.</em> In consectetur urna ut tortor tincidunt pharetra ut ac augue. Pellentesque convallis 
                    quam a justo sagittis fermentum et quis arcu. Quisque congue ultrices diam a imperdiet. Nullam non turpis pellentesque, 
                    interdum enim at, posuere nisi.</p>
                    
                </div><!-- end .span9 -->
            </div><!-- end .row -->
            
            <div class="fullwidth-section" id="bg-2">
            	
                <div class="fullwidth-section-content">
                	
                    <div class="row">
                    	<div class="span12 text-center">
                        	
                            <h1 class="text-uppercase">Our special offer</h1>
                            <h3 class="text-uppercase">For today</h3>
                            
                            <br><br>
                            
                            <p>
                            	<img src="img/hero.png">
                            </p>
                            
                            <br>
                            
                            <h3 class="text-uppercase">Hot &amp; Sour soup + Ma po (hunan) tofu <br class="hidden-phone"> + Bbq spare ribs</h3>
                            
                            <br>
                            
                            <p>Curabitur et rutrum eros. Nunc nec euismod <br class="hidden-phone"> metus, ac ultrices ipsum. Nulla id 
                            semper nibh, blandit <br class="hidden-phone"> dapibus dolor. Ut consectetur finibus.</p>
                            
                            <h1>$23.90</h1>
                            
                        </div><!-- end .span12 -->
                    </div><!-- end .row -->
                    
                </div><!-- end .fullwidth-section-content -->
                
            </div><!-- end .fullwidth-section -->
            
            <div class="row">
            	<div class="span12 text-center">
                	
                    <div class="headline">
                    	
                        <i class="ifc-opened_folder"></i>
                        
                        <h2>From our menu</h2>
                        
                        <h6>Some text about menu</h6>
                        
                    </div><!-- end .headline -->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
            
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
<a class="btn alt btn-large text-uppercase" href="{{route('add-to-cart', $s->id)}}">Order Now</a>
                                    </div><!-- end .menu-items-description -->
                                    
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
                </div><!-- end .span12 -->
            </div><!-- end .row -->
                        
            <div class="row">
            	<div class="span12">
                	
                    <ul class="pagination text-center">
                        <li class="current">
                        	<a href="#">1</a>
                        </li>
                        <li>
                        	<a href="#">2</a>
                        </li>
                        <li>
                        	<a href="#">3</a>
                        </li>
                        <li>
                        	<a href="#">4</a>
                        </li>
                        <li>
                        	<a href="#">5</a>
                        </li>
                    </ul><!-- end .pagination -->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        @endsection