@extends('master')
        @section('main')        
		<div id="content">
		
		<!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div id="page-header" style="background-image:url('img/contact1.jpg'); margin-bottom:20px;">
            	
                <div class="row">
                	<div class="span12">
                    	
                        <h1>Contact</h1>
                        
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
                    
                    <p>Integer eget est congue, congue mauris nec, porta est. Nunc posuere sem magna, eget porta eros euismod eget. 
                    Morbi magna orci, lacinia id rutrum eget, euismod nec lectus. Etiam diam ante, rutrum eget erat tincidunt, maximus 
                    ornare lorem. Integer auctor suscipit sapien, eget rutrum augue sodales. </p>
                    
                    <br>
                    
                    <h2 class="text-uppercase">Follow us</h2>
                    
                    <p>Integer eget est congue, congue mauris nec, porta est. Nunc posuere sem magna, eget porta eros euismod eget. 
                    Morbi magna orci, lacinia id rutrum.</p>
                    
                    
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
                	
                    <h2 class="text-uppercase">Contact form</h2>
                    
                    <form action="feedback" method="post">
                    @csrf
                        <fieldset>
                            <div id="formstatus"></div>
                            
                            <div class="row">
                            	<div class="span3">
                            
                                    <p>
                                        <input class="span3" type="text" id="name" name="fname" value="" placeholder="Name" />
                                    </p>
                                    @error('fname')
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                                </div><!-- end .span3 -->
                                <div class="span3">
                                	
                                    <p>
                                        <input class="span3" type="text" id="femail" name="email" value="" placeholder="Email" />
                                    </p>
                                    @error('femail')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                                </div><!-- end .span3 -->                            
                            </div><!-- end .row -->      
                                                  
                            <p>
                                <input class="span6" type="text" id="subject" name="sub" value="" placeholder="Subject"  />
                            </p>
                            @error('sub')
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                            <p>
                                <textarea class="span6" id="message" name="disc" rows="5" cols="25" placeholder="Message"></textarea>
                            </p>
                            @error('meg')
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{$message}}!!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
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
            
            <div class="row">
            	<div class="span12 text-center">
                	
                    <div class="headline">
                    	
                        <i class="ifc-sent"></i>
                        
                        <h2>Contact information</h2>
                        <h6>Our restaurants contact info</h6>
                        
                    </div><!-- end .headline -->
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->	
            
            <div class="row">
            	<div class="span4">
                	
                    <h2 class="text-uppercase">Select a restaurant</h2>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur velit velit, vestibulum sed quam ac, 
                    ornare interdum nisl. Vestibulum ac odio justo. </p>
                    
                    <br>
                    
                    <select name="restaurant" id="restaurant" class="postform">
                        <option value="-1">Select Restaurant</option>
                        <option class="level-0" value="5">Washington Downtown</option>
                        <option class="level-0" value="4">Chicago Downtown</option>
                        <option class="level-0" value="3">New York Downtown</option>
                        <option class="level-0" value="2">Las Vegas Downtown</option>
                        <option class="level-0" value="1">Los Angeles Downtown</option>
                    </select>
                    
                </div><!-- end .span4 -->
                <div class="span8">
                	
                    <h2 class="text-uppercase">Asia Wok Los Angeles</h2>
                    
                    <p>Morbi aliquam ligula justo, nec ultrices arcu bibendum et. Ut tristique lacinia est, a suscipit turpis 
                    aliquet id. Vivamus at tristique elit, vitae interdum arcu. Lorem ipsum dolor sit amet, consectetur adipiscing 
                    elit. Curabitur velit velit, vestibulum sed quam ac, ornare interdum nisl. Vestibulum ac odio justo. </p>
                    
                    <br>
                    
                    <div class="widget ewf_widget_contact_info">
                        
                        <ul>
                            <li>
                            	<i class="ifc-home"></i>
                                <span class="text-highlight">Address: </span>1 Zhenwumiao Road, Xicheng District, Beijing, China, 100045. 
                            </li>
                            <li>
                            	<i class="ifc-phone2"></i>
                                <span class="text-highlight">Phone: </span>68566688;
                                <span class="text-highlight">Fax: </span>68562251
                            </li>
                        </ul>
                        
                    </div><!-- end .ewf_widget_contact_info -->
                    
                </div><!-- end .span8 -->
            </div><!-- end .row -->
            
            <div class="row">
            	<div class="span12">
                	
                    <h2 class="text-uppercase">Opening hours</h2>
                    
                    <ul class="schedule alt fixed">
                    	<li>
                        	<span class="day">Mon - Fri</span>
                            <span class="program">17<sup>00</sup> to 21<sup>00</sup></span>
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
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
            <div class="row">
            	<div class="span12 text-center">
                	
                    <a class="btn btn-large text-uppercase" href="#"><strong>Make a reservation</strong></a>
                    
                </div><!-- end .span12 -->
            </div><!-- end .row -->
            
         <!--   <div class="google-map map" id="map-2" 
                data-zoom="14" 
                data-address="Los Angeles" 
                data-caption="<img src='_content/contact/logo.png' alt=''> <p><strong class='text-uppercase'>Los Angeles</strong> <br> 330 S Broadway Los Angeles, CA 90013</p>">
                <p>This will be replaced with the Google Map.</p>
            </div>-->
            
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		</div><!-- end #content -->
		
        @endsection