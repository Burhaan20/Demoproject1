@extends('master')
        @section('main')        
		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div id="page-header" style="background-image:url(content/backgrounds/1920x250-5.jpg); margin-bottom:20px;">
            	
                <div class="row">
                	<div class="span12">
                    	
                        <h1>Your Order</h1>
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
                
            </div><!-- end #page-header -->
            
            <div class="row">
            	<div class="span12 text-center">
                	
                    <div class="headline">
                    	
                        <i class="ifc-opened_folder"></i>
                        
                        <h2>Get in touch</h2>
                        <h6>Send us a message</h6>
                        
                    </div><!-- end .headline -->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->	
            
            <div class="row">
            	<div class="span6">
                	
                    <h2 class="text-uppercase">We’d Love to hear from you</h2>
                    
                    <div class="menu-items-thumb">
                                        
                                        <img src="/storage/{{$s->img}}" alt="">
                                        
                                    </div><!-- end .menu-items-thumb -->

                    
                    <br>
                    
                    <h2 class="text-uppercase">Follow us</h2>
                    
                    <p>{{$s->disc}}</p>
                    
                    
                    <div class="widget ewf_widget_social_media"> 
                        
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
                </div><!-- end .span6 -->
                <div class="span6">
                	
                    <h2 class="text-uppercase">Order Now</h2>
                    
                    <form action="order" method="post">
                    @csrf
                        <fieldset>
                            <div id="formstatus"></div>
                            
                            <div class="row">
                            	<div class="span3">
                            
                                    <p>
                                        <input class="span3" type="text" id="name" name="oname" value="" placeholder="Name" />
                                    </p>
                                    @error('oname')
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                                </div><!-- end .span3 -->
                    
                                    @error('ono')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                                </div><!-- end .span3 -->                            
                            </div><!-- end .row -->      
                                                  
                            <p>
                                <input class="span6" type="number" id="subject" name="qua" value="" placeholder="Subject"  />
                            </p>
                            @error('qua')
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                            <p>
                                <textarea class="span6" id="message" name="disc" rows="5" cols="25" placeholder="Message">{{$s</textarea>
                            </p>
                            <p class="last">
                                <input id="submit" type="submit" name="submit" class="btn" value="Send message" />
                            </p>
                        </fieldset>
					</form><!-- end #contact-form -->
                    
                </div><!-- end .span6 -->
            </div><!-- end .row -->
            
            <div class="fullwidth-section" id="bg-3">
            	
                <div class="fullwidth-section-overlay"></div>
                
                <div class="fullwidth-section-content">
                	
                    <div class="row">
                    	<div class="span12">
                        	
                            <h2 class="text-center text-uppercase">
                            	<span>wanna make an order? </span>
                                call now      
                                <i class="ifc-iphone"></i>
                                347-528-4271        
                                <i class="ifc-clock"></i>
                                24/7 
                            </h2>
                            
                        </div><!-- end .span12 -->
                    </div><!-- end .row -->
                    
                </div><!-- end .fullwidth-section-content -->
                
            </div><!-- end .fullwidth-section -->
            
           
        @endsection