<?php
$ip=get_client_ip();
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Call: (866) 277-0793 - Auto Parts Warehouse</title>
        
        <link href="css/master.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
		<!-- SWITCHER -->
		<!-- <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" /> -->
		<!-- <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color1.css" title="color1" media="all" data-default-color="true" /> -->
		<!-- <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color2.css" title="color2" media="all" /> -->
		<!-- <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color3.css" title="color3" media="all" /> -->
		<!-- <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color4.css" title="color4" media="all" /> -->
		<!-- <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color5.css" title="color5" media="all" /> -->
		<!-- <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color6.css" title="color6" media="all" /> -->
        <style>
        	#call:hover{
        		text-decoration: none;
        		color: #a91605 !important;
        	}
        	#span{
        		    color: black;
    font-size: 35px;
    font-weight: 800;
        	}
        	#span:hover{
        		color: white;
        	}

        </style>
        
    </head>
	<body data-scrolling-animations="true">
		<div class="sp-body">
			<!-- Loader Landing Page -->
			<!-- <div id="ip-container" class="ip-container">
				<div class="ip-header" >
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg> 
					</div>
				</div>
			</div> -->
			
			<!-- End Switcher -->
			
	        <header id="this-is-top">
	            <div class="container-fluid">
	                
	                <div class="row header">
	                    <div class="col-sm-3 col-md-3 col-lg-3">
	                        <a href="/">
	                        	<img src="img/logo.png" style="height: 50px;
    margin-top: 27px;">
	                        </a>
	                    </div>
	                    <div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
	                        <div class="text-right header-padding">
	                            
	                            <a class="btn btn-success" href="tel:+18662770793">Call Us: (866) 277-0793</a>
	                        </div>
	                    </div>
	                </div>
	                <div id="main-menu-bg"></div>  
	                <a id="menu-open" href="#"><i class="fa fa-bars"></i></a> 
	                
	                <a id="menu-close" href="#"><i class="fa fa-times"></i></a>
	            </div>
	        </header>
	        <div class="container">
	        	<div class="row">
	        		<div class="col-sm-6">
	        			<h1 style="    margin-bottom: 10px;
    padding: 20px;
    background: #a91605;
    color: white;
    width: 103%;
    font-size: 23px;"> Auto Part Warehouse in <?php echo $query['city']?></h1>
	        			<span style="color: black;
    font-size: 20px;
    font-weight: 700;">Call To Order Suprior Quality Auto Parts</span>
	        			<p style="text-align: justify;font-size: 16px;
    line-height: 28px;
    margin: 20px 0px;">Now It is quite Easy to order Auto parts in <?php echo $query['city']?>, One of the best online store which is trusted by many individuals. Free free to call us on the given number and your order will be at your doorstep. Moreover, our prices are also very low as compare to market price, as well as with our sevice we win the trust from many customers. </p>	        			
	        			<a id="call" href="tel:+18662770793" style="color: #549404;
    font-size: 40px;
    font-weight: 700;">Call us: (866) 277-0793</a>
	        			
	        		</div>
	        		<div class="col-sm-6">
	        			<img src="media/main-slider/1.png" style="height: 440px;">
	        		</div>
	        	</div>
	        	
	        </div>
	        <div class="container-fluid block-content">
        		<div class="text-center hgroup wow zoomInUp" data-wow-delay="0.3s">
        		            		<h1>How We Work</h1>
        		            		<h2>Just follow 3 easiest steps to order auto spare parts online <br> the steps are as following:</h2>
        			            </div>
				<div class="row our-services">
            		<div class="col-sm-6 col-md-4 col-lg-4 wow zoomInLeft" data-wow-delay="0.3s">
                		<a>
                    		<span id="span">1</span>
                    		<h4>Call Us</h4>
	                        <p>Fell Free to call us, Enjoy One of the easiest way to order products at low price.</p>
	                    </a>
	                </div>
	                <div class="col-sm-6 col-md-4 col-lg-4 wow zoomInUp" data-wow-delay="0.3s">
                		<a>
                    		<span id="span">2</span>
                    		<h4>Confirm Your Order</h4>
	                        <p>After your order complete, our expert will confirm your order by repeating all Products.</p>
	                    </a>
	                </div>
	                <div class="col-sm-6 col-md-4 col-lg-4 wow zoomInRight" data-wow-delay="0.3s">
                		<a>
                    		<span id="span">3</span>
                    		<h4>Receive Product</h4>
	                        <p>Your order will be deliver within 1 working day...</p>
	                    </a>
	                </div>	                
	            </div>
	        </div>
	        <div class="big-hr color-1 wow zoomInUp" data-wow-delay="0.3s">
        		<div class="text-left" style="margin-right:40px;">
            		<h2>WE PROVIDE FASTEST & AFFORDABLE SERVICES LOCALLY</h2>
            		<p>We are in this business from 10 Years, From last 2 years our idea to receive order online through phone <br>call boom up our business as well as customers trust</p>
				</div>
	            <div><a class="btn btn-success btn-lg" href="tel:+18662770793" style="background-color: #000000;">Call Us: (866) 277-0793</a></div>
	        </div>
	        
	       
	        
	    
	        
	        <hr>
	        
	        
	        
	        
	       
	       
	        <div class="container-fluid block-content">
        		<div class="row">
            		<div class="col-md-6 col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
                		<div class="hgroup">
	                        <h1>TRUSTED CLIENTS</h1>
	                        <h2>Our customes reviews Regarding Service</h2>
	                    </div>
	                    <div id="testimonials" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false" data-navigation="true" data-auto-play="true">
	                        <div>
                        		<div class="testimonial-content">
                            		<span><i class="fa fa-quote-left"></i></span>
                            		<p>Helpful website, ensuring I was ordering the correct part for my vehicle. Quick shipping ensured I received the order before the estimated delivery date. A go to for all of my auto parts requirements!! Would definitely recommend this site for all my gear head friends!</p>
	                            </div>
	                            <div class="text-right testimonial-author">
                            		<h4>JOHN DEO</h4>
	                                <!-- <small>Managing Director</small> -->
	                            </div>
	                        </div>
	                        <div>
                        		<div class="testimonial-content">
                            		<span><i class="fa fa-quote-left"></i></span>
                            		<p>Always have a good experience throughout the purchase process! Also when I have made a mistake when purchasing a part the customer service has offered solutions to resolve the matter!! The parts are affordable and arrive promptly! I will continue to purchase parts in the future!!</p>
	                            </div>
	                            <div class="text-right testimonial-author">
                            		<h4>Robert Miller</h4>
	                                <!-- <small>Managing Director</small> -->
	                            </div>
	                        </div>
	                        <!-- <div>
	                                                		<div class="testimonial-content">
	                                                    		<span><i class="fa fa-quote-left"></i></span>
	                                                    		<p>Integer congue elit non semper laoreet sed lectus orci posuer nisl tempor se felis ac mauris. Pelentesque inyd urna. Integer vitae felis vel magna posu du vestibulum. Nam rutrum congue diam. Aliquam malesuada maurs etug met Curabitur laoreet convallis nisal pellentesque bibendum.</p>
	                            </div>
	                            <div class="text-right testimonial-author">
	                                                    		<h4>Robert Miller</h4>
	                                <small>Managing Director</small>
	                            </div>
	                        </div> -->
	                    </div>
	                    
	                </div>
	                <div class="col-md-6 col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                		<div class="hgroup">
	                        <h1>WHY CHOOSE US</h1>
	                        <h2>Why autopartsciti.com prove as the Best.</h2>
	                    </div>
	                    <ul class="why-us">
                    		<li>
                        		Flexible Service
                        		<p>Our Customers enjoy the way we serve them, Our experts call receiver, receive the call very friendy even if someone if facing any trouble to select the right product, we help them by suggesting what thing will suitable for them.</p>
                        		<span>+</span>
	                        </li>
	                        <li>
                        		Good Quality Spare Parts
	                            <p>We are ready to take 100% responsibility about the product qulaity, Moreover, since we are in this business fortunatelly we never receive any customer complaint regarding quality, and am ensure that this will continue till we are in this business.  </p>
                        		<span>+</span>
	                        </li>
	                        <li>
                        		Low Price as compare to market price
	                            <p>Our product price range is very low as compare to market price, moreover we have superier quality of produts.</p>
                        		<span>+</span>
	                        </li>
	                        
	                    </ul>
	                </div>
	            </div>
	        </div>
	        
	        <hr>
	        
	       
	      
	       
			<footer>
        		<div class="color-part2"></div>
        		<div class="color-part"></div>
        		<div class="container-fluid">
            		<div class="row block-content">
               			<div class="col-sm-4 wow zoomIn" data-wow-delay="0.3s">
                    		<a href="/">
                    			<img class="img-responsive" src="img/logo-footer.png" style="height: 52px;">
                    		</a>
	                        <p>Call Us to order Auto spare parts online, we have all kinds and types of spare part. Just pick up your phone and start order now.</p>
	                        <!-- <div class="footer-icons">
	                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
	                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
	                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
	                            <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
	                            <a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a>
	                        </div> -->
	                        <a href="tel:+18662770793" class="btn btn-lg btn-danger">Call Us: (866) 277-0793</a>
	                    </div>
	                    <div class="col-sm-2 wow zoomIn" data-wow-delay="0.3s">
                    		<h4>WE OFFERS</h4>
	                        <nav>
                        		<a>Fast Service</a>
	                            <a>Low Price Service</a>
	                            <a>Quality Spare Parts</a>
	                            <a>Doorstep Delivery</a>
	                            
	                        </nav>
	                    </div>
	                    <div class="col-sm-2 wow zoomIn" data-wow-delay="0.3s">
                    		<h4>What You Do</h4>
	                        <nav>
                        		<a>Dial Number</a>
	                            <a>Call us</a>
	                            <a>Place Order</a>
	                            <a>Receive Products</a>	                            
	                        </nav>
	                    </div>
	                    <div class="col-sm-4 wow zoomIn" data-wow-delay="0.3s">
                    		<h4>CONTACT INFO</h4>
	                        Everyday is a new day for us and we work really hard to satisfy our customers everywhere.
	                        <div class="contact-info">
	                            <!-- <span><i class="fa fa-location-arrow"></i><strong>Auto Parts Citi</strong><br>3608 NewHill Station Ave CA, Newyork 33102 </span> -->
	                            <span><i class="fa fa-phone"></i>(866) 277-0793</span>
	                            <span><i class="fa fa-envelope"></i>info@autopartsciti.com</span>
	                            <span><i class="fa fa-clock-o"></i>Mon - Sat  8 AM - 6 PM</span>
	                        </div>
	                    </div>
	                </div>
             		<div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>Created by <a href="/">Auto Parts Citi</a> &copy; 2019 autopartsciti.com, All rights reserved.</div>
	             </div>
	        </footer>
        </div>
        <!--Main-->   
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        
        <script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
		<!-- Loader -->
		<script src="assets/loader/js/classie.js"></script>
		<script src="assets/loader/js/pathLoader.js"></script>
		<script src="assets/loader/js/main.js"></script>
		<script src="js/classie.js"></script>
		<!--Switcher-->
		<!-- <script src="assets/switcher/js/switcher.js"></script> -->
        <!--Owl Carousel-->
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
        <!--Theme-->
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<!-- <script src="js/smoothscroll.min.js"></script> -->
        <script src="js/theme.js"></script>
	</body>
</html>