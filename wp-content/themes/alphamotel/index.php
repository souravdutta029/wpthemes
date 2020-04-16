<?php get_header();?>
<?php
    $img = get_bloginfo('template_url').'/images/logo_header.png'; /*This will be the default logo if not uploaded any.*/
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    if(has_custom_logo()){
        $img = esc_url($logo[0]);
    }
?>
<body>
<!-- Preloader --> 
<!-- <div class="loader-container">
  <div class="loader-logo">
    <div class="loader-circle"></div>
  </div>
</div> --> 
<!--  bottom button  -->
<div class="bottom-button"> <a href="#" class="scrollToTop" style="display: block;"> <i class="fas fa-angle-double-up"></i> </a> </div>
<!-- header -->
<header>
	<div class="header_inner" id="header-nav">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-4 col-md-4 col-sm-4 col-4">
                	<a href="index.html" class="navbar-brand"><img src="<?php echo $img; ?>"/></a>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-8  align-self-center">
                	<div class="row">
                    	<div class="col-lg-10 col-md-10 col-sm-10 col-10  text-right">
                        	<h4><span><img src="<?php echo get_bloginfo('template_url');?>/images/phone_icon.jpg"></span> 003 3434 118</h4>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 text-right">
                        	<span class="nav_tog_icon" onclick="openNav()"><img src="<?php echo get_bloginfo('template_url');?>/images/toggle_nav_icon.png"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="mySidenav" class="sidenav">
                          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                          <div id="dl-menu" class="dl-menuwrapper">
                            <?php

                                wp_nav_menu(array(

                                    'menu'            => 'Primary Menu',
                                    'theme_location'  => '',
                                    'depth'           => '',
                                    'container'       => '',
                                    'container_id'    => '',
                                    'container_class' => '',
                                    'menu_id'         => '',
                                    'menu_class'      => '',
                                    'items_wrap'      => '<ul class="dl-menu dl-menuopen">%3$s</ul>',
                                    'link_before'     => '',
                                    'fallback_cb'     => '',
                                    'walker'          => ''
                                ));

                            ?>
                            <!-- <ul class="dl-menu dl-menuopen">
                                <li>
                                    <a href="index.html">Home</a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a href="#">Men</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Our Fleet</a></li>
                                                <li><a href="#">Service Details</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">Underwear</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Our Fleet</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Knits</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Blouses</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">Underwear</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Service Details</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Boys</a></li>
                                                <li><a href="#">Girls</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="rooms.html">Rooms</a>
                                    <ul class="dl-submenu"> -->
                                        <!--<li>
                                            <a href="#">Men</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">About</a></li>
                                                <li><a href="#">Our Fleet</a></li>
                                                <li><a href="#">Service Details</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">Underwear</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Our Fleet</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Jackets</a></li>
                                                <li><a href="#">Knits</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Blouses</a></li>
                                                <li><a href="#">T-Shirts</a></li>
                                                <li><a href="#">Underwear</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Service Details</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Boys</a></li>
                                                <li><a href="#">Girls</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="facilities.html">Facilities</a>
                                   <ul class="dl-submenu">
                                    	<li><a href="our_fleet.html">Our Fleet </a></li>
                                        <li><a href="our_fleet_details.html">Our Fleet Details</a></li>
                                    </ul>-->
                                <!-- </li>
                                <li>
                                    <a href="location.html">Location</a>
                                    <ul class="dl-submenu">
                                        <li>
                                            <a href="#">Living Room</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Sofas &amp; Loveseats</a></li>
                                                <li><a href="#">Coffee &amp; Accent Tables</a></li>
                                                <li><a href="#">Chairs &amp; Recliners</a></li>
                                                <li><a href="#">Bookshelves</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Bedroom</a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="#">Beds</a>
                                                    <ul class="dl-submenu">
                                                        <li><a href="#">Upholstered Beds</a></li>
                                                        <li><a href="#">Divans</a></li>
                                                        <li><a href="#">Metal Beds</a></li>
                                                        <li><a href="#">Storage Beds</a></li>
                                                        <li><a href="#">Wooden Beds</a></li>
                                                        <li><a href="#">Children's Beds</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Bedroom Sets</a></li>
                                                <li><a href="#">Chests &amp; Dressers</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Home Office</a></li>
                                        <li><a href="#">Dining &amp; Bar</a></li>
                                        <li><a href="#">Patio</a></li>
                                    </ul>
                                </li>
                                <li>
                                   <a href="local-area.html">Local Area</a> -->
                                    <!--<ul class="dl-submenu">
                                        <li><a href="#">Fine Jewelry</a></li>
                                        <li><a href="#">Fashion Jewelry</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li>
                                            <a href="#">Wedding Jewelry</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Engagement Rings</a></li>
                                                <li><a href="#">Bridal Sets</a></li>
                                                <li><a href="#">Women's Wedding Bands</a></li>
                                                <li><a href="#">Men's Wedding Bands</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->
                                <!-- </li>
                                <li>
                                   <a href="faq.html">FAQ</a> -->
                                    <!--<ul class="dl-submenu">
                                        <li><a href="#">Fine Jewelry</a></li>
                                        <li><a href="#">Fashion Jewelry</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li>
                                            <a href="#">Wedding Jewelry</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Engagement Rings</a></li>
                                                <li><a href="#">Bridal Sets</a></li>
                                                <li><a href="#">Women's Wedding Bands</a></li>
                                                <li><a href="#">Men's Wedding Bands</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->
                                <!-- </li>
                                <li>
                                   <a href="review.html">Reviews</a> -->
                                    <!--<ul class="dl-submenu">
                                        <li><a href="#">Fine Jewelry</a></li>
                                        <li><a href="#">Fashion Jewelry</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li>
                                            <a href="#">Wedding Jewelry</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Engagement Rings</a></li>
                                                <li><a href="#">Bridal Sets</a></li>
                                                <li><a href="#">Women's Wedding Bands</a></li>
                                                <li><a href="#">Men's Wedding Bands</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->
                                <!-- </li>
                                <li>
                                   <a href="contact.html">Contact Us</a> -->
                                    <!--<ul class="dl-submenu">
                                        <li><a href="#">Fine Jewelry</a></li>
                                        <li><a href="#">Fashion Jewelry</a></li>
                                        <li><a href="#">Watches</a></li>
                                        <li>
                                            <a href="#">Wedding Jewelry</a>
                                            <ul class="dl-submenu">
                                                <li><a href="#">Engagement Rings</a></li>
                                                <li><a href="#">Bridal Sets</a></li>
                                                <li><a href="#">Women's Wedding Bands</a></li>
                                                <li><a href="#">Men's Wedding Bands</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->
                                <!-- </li>
                            </ul> -->
                        </div>
					</div>
    </div>
</header>
<!-- banner -->
<section class="banner">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active">01</li>
    <li data-target="#myCarousel" data-slide-to="1">02</li>
    <li data-target="#myCarousel" data-slide-to="2">03</li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_bloginfo('template_url');?>/images/banner.jpg" class="w-100">
      <div class="carousel-caption">
      	  <div class="container">
          	 <div class="banner_content">
             		<h4>Book a perfect room </h4>
                	<h2>
                    	Designer furnishings <br>
						and luxurious <br>
                         bedding
                    </h2>
             </div>
          </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="<?php echo get_bloginfo('template_url');?>/images/banner.jpg" class="w-100">
      <div class="carousel-caption">
      	  <div class="container">
          	 <div class="banner_content">
             		<h4>Book a perfect room </h4>
                	<h2>
                    	Designer furnishings <br>
						and luxurious <br>
                         bedding
                    </h2>
             </div>
          </div>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="<?php echo get_bloginfo('template_url');?>/images/banner.jpg" class="w-100">
      <div class="carousel-caption">
      	  <div class="container">
          	 <div class="banner_content">
             		<h4>Book a perfect room </h4>
                	<h2>
                    	Designer furnishings <br>
						and luxurious <br>
                         bedding
                    </h2>
             </div>
          </div>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
	<div class="check_availability">
    	<div class="form-group input_group">
        	<label>Check In</label>
        	<input type="date" class="form-control">
        </div>
        <div class="form-group input_group">
        	<label>Check Out</label>
        	<input type="date" class="form-control">
        </div>
        <div class="form-group">
        	<label>Adults</label>
        	<select name="" class="custom-select">
              <option selected value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
   	 		</select>
        </div>
        <div class="form-group">
        	<label>Children</label>
        	<select name="" class="custom-select">
              <option selected value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
   	 		</select>
        </div>
        <div class="form-group btn_g_group">
        	<button type="submit" class="btn">Check <br>Availability</button>
        </div>
        <div class="clearfix">
        </div>
    </div>
</div>
</section>
<section class="welcome_sec">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-12">
            	<h5 class="testi_text">Enjoy Your Stay!</h5>
                <div class="yellow_transparent">
                    	<h2>Welcome To
						Alpha Motel</h2>
                 </div>
                 <h6>Luxury Resort & Rooms</h6>
                 <p>
                 	Alpha Motel is a luxury apartment complex opened on October 06, 2008. Created by award-winning Stanley Joblin Allfrey Architects with the most discerning guest in mind. At the Alpha we provide the perfect mix of comfort and style. A sumptuous decor of deep charcoal and sandstone tones, designer furnishings and luxurious bedding has been chosen with your ultimate comfort in mind.
                 </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
            	<img src="<?php echo get_bloginfo('template_url');?>/images/welcome_img.png" class="w-100">
            </div>
            	
        </div>
    </div>
</section>
<!-- features -->
<section class="features_block">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-3 col-md-6 col-sm-6">
            	<div class="featured_list">
                	<i class="fas fa-desktop"></i>
                	<h5>FAST & EASY BOOKING</h5>
                    <div class="border_blue"></div>
					<p>
                    Lorem ipsum dolor sit amet,
                    conse ctet uradipiscing.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
            	<div class="featured_list">
                	<i class="fas fa-home"></i>
                	<h5>HOTELS & ROOMS</h5>
                    <div class="border_blue"></div>
					<p>
                    Lorem ipsum dolor sit amet,
                    conse ctet uradipiscing.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
            	<div class="featured_list">
                	<i class="fas fa-map-marker-alt"></i>
                	<h5>THE BEST LOCATIONS</h5>
                    <div class="border_blue"></div>
					<p>
                    Lorem ipsum dolor sit amet,
                    conse ctet uradipiscing.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 col-sm-6">
            	<div class="featured_list">
                	<i class="fas fa-envelope-open-text"></i>
                	<h5>GREAT PRICES</h5>
                    <div class="border_blue"></div>
					<p>
                    Lorem ipsum dolor sit amet,
                    conse ctet uradipiscing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- at your service -->
<section class="at_ur_service">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-6 col-md-6 col-sm-12">
            	<div class="at_ur_service_inner">
                    <h5 class="testi_text">At your service</h5>
                    <div class="yellow_transparent">
                    	<h2>Our Best Rooms</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12">
            	<div class="at_ur_service_inner">
                    <p>
                    	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                    </p>
                    <p>
                    	<strong>Choose from a variety of sizes and styles</strong>
                    </p>
                </div>
            </div>
            
        </div>
        <div class="rooms_block">
        	<div class="row">
        		<div class="col-lg-6 col-md-12 col-sm-12">
                	<div class="room_inner_list">
                        <figure><img src="<?php echo get_bloginfo('template_url');?>/images/exicutive_spa_studio.jpg" class="w-100"></figure>
                        <div class="book_now_content">
                            <span class="price_circle"><h5><span>$145 </span><br> night</h5></span>
                            
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            
                            <h4>Executive Spa Studio</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                            </p>
                            
                            <div class="float-left">
                                <a href="#" class="btn book-now">Book Now !</a>
                            </div>
                            <div class="float-right">
                                <ul>
                                    <li><img src="<?php echo get_bloginfo('template_url');?>/images/icon_1.png"></li>
                                    <li><img src="<?php echo get_bloginfo('template_url');?>/images/icon_2.png"></li>
                                    <li><img src="<?php echo get_bloginfo('template_url');?>/images/icon_3.png"></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                	<div class="row">
                    	<div class="col-lg-6 col-md-6 col-sm-6">
                        	<div class="room_list">
                        		<figure>
                            	<img src="<?php echo get_bloginfo('template_url');?>/images/rooms_1.jpg" class="w-100">
                                <figcaption>
                                	<div class="row">
                                	<div class="col-lg-8 col-md-8 col-sm-12 float-left">
                                    	<h4>
                                        	Deluxe One
											Bedroom
                                        </h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 float-right">
                                    	<span class="price_circle"><h5><span>$145 </span><br> night</h5></span>
                                    </div>
                                    <div class="clearfix"></div>
                                    </div>
                                </figcaption>
                             </figure>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	<div class="room_list">
                        		<figure>
                            	<img src="<?php echo get_bloginfo('template_url');?>/images/rooms_1.jpg" class="w-100">
                                <figcaption>
                                	<div class="row">
                                	<div class="col-lg-8 col-md-8 col-sm-12 float-left">
                                    	<h4>
                                        	Deluxe One
											Bedroom
                                        </h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 float-right">
                                    	<span class="price_circle"><h5><span>$145 </span><br> night</h5></span>
                                    </div>
                                    <div class="clearfix"></div>
                                    </div>
                                </figcaption>
                             </figure>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	<div class="room_list">
                        		<figure>
                            	<img src="<?php echo get_bloginfo('template_url');?>/images/rooms_1.jpg" class="w-100">
                                <figcaption>
                                	<div class="row">
                                	<div class="col-lg-8 col-md-8 col-sm-12 float-left">
                                    	<h4>
                                        	Deluxe One
											Bedroom
                                        </h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 float-right">
                                    	<span class="price_circle"><h5><span>$145 </span><br> night</h5></span>
                                    </div>
                                    <div class="clearfix"></div>
                                    </div>
                                </figcaption>
                             </figure>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        	<div class="room_list">
                        		<figure>
                            	<img src="<?php echo get_bloginfo('template_url');?>/images/rooms_1.jpg" class="w-100">
                                <figcaption>
                                	<div class="row">
                                	<div class="col-lg-8 col-md-8 col-sm-12 float-left">
                                    	<h4>
                                        	Deluxe One
											Bedroom
                                        </h4>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 float-right">
                                    	<span class="price_circle"><h5><span>$145 </span><br> night</h5></span>
                                    </div>
                                    <div class="clearfix"></div>
                                    </div>
                                </figcaption>
                             </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- discover the location -->
<section class="discover_location">
	<div class="discover_left float-left">
    	<div class="location_img">
        	<img src="<?php echo get_bloginfo('template_url');?>/images/discover_location_1.jpg" class="w-100">
        </div>
        <div class="location_img">
        	<img src="<?php echo get_bloginfo('template_url');?>/images/discover_location_2.jpg" class="w-100">
        </div>
        <div class="location_img">
        	<img src="<?php echo get_bloginfo('template_url');?>/images/discover_location_3.jpg" class="w-100">
        </div>
        <div class="location_img">
        	<img src="<?php echo get_bloginfo('template_url');?>/images/discover_location_4.jpg" class="w-100">
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="discover_right float-right">
    	<div class="discover_location">
        	<h5 class="testi_text">Things To Do</h5>
            <h2>
            	Discover our
				Locations
            </h2>
            <div class="row">
            	<div class="col-lg-6">
                	<p>
                    	Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis. Blandit vel sapien vitae, condimentum ultricies magna et orci ut et lobortis, Phasellus enim
                    </p>
                </div>
                <div class="col-lg-6">
                	<p>
                    	Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis. Blandit vel sapien vitae, condimentum ultricies magna et orci ut et lobortis, Phasellus enim
                    </p>
                </div>
            </div>
            <a href="#">Check All Packages</a>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
<!-- gallery -->
<section class="gallery">
	<div class="container">
        <div id="macy">
            <div class="box">
             <div class="flipx"> 
                    <div class="card"> 
                        <div class="face front"> 
                           <img src="<?php echo get_bloginfo('template_url');?>/images/home-1.jpg" width="100%">
                        </div> 
                        <div class="face back"> 
                            <h3>Gallery</h3>
                            <a href="#" class="view_details">View Details</a>
                        </div> 
                    </div> 
    			</div> 
            </div>
            
            <div class="box">
             <div class="flipx"> 
                    <div class="card"> 
                        <div class="face front"> 
                           <img src="<?php echo get_bloginfo('template_url');?>/images/home-2.jpg" width="100%">
                        </div> 
                        <div class="face back"> 
                            <h3>Gallery</h3>
                            <a href="#" class="view_details">View Details</a>
                        </div> 
                    </div> 
    			</div> 
            </div>
            
            <div class="box">
             <div class="flipx"> 
                    <div class="card"> 
                        <div class="face front"> 
                           <img src="<?php echo get_bloginfo('template_url');?>/images/home-3.jpg" width="100%">
                        </div> 
                        <div class="face back"> 
                            <h3>Gallery</h3>
                            <a href="#" class="view_details">View Details</a>
                        </div> 
                    </div> 
    			</div> 
            </div>
            
           <div class="box">
             <div class="flipx"> 
                    <div class="card"> 
                        <div class="face front"> 
                           <img src="<?php echo get_bloginfo('template_url');?>/images/home-4.jpg" width="100%">
                        </div> 
                        <div class="face back"> 
                            <h3>Gallery</h3>
                            <a href="#" class="view_details">View Details</a>
                        </div> 
                    </div> 
    			</div> 
            </div>
            
            <div class="box">
             <div class="flipx"> 
                    <div class="card"> 
                        <div class="face front"> 
                           <img src="<?php echo get_bloginfo('template_url');?>/images/home-5.jpg" width="100%">
                        </div> 
                        <div class="face back"> 
                            <h3>Gallery</h3>
                            <a href="#" class="view_details">View Details</a>
                        </div> 
                    </div> 
    			</div> 
            </div>
            
            <div class="box">
             <div class="flipx"> 
                    <div class="card"> 
                        <div class="face front"> 
                           <img src="<?php echo get_bloginfo('template_url');?>/images/home-4.jpg" width="100%">
                        </div> 
                        <div class="face back"> 
                            <h3>Gallery</h3>
                            <a href="#" class="view_details">View Details</a>
                        </div> 
                    </div> 
    			</div> 
            </div>
            
            
            
            <div class="box">
             <div class="flipx"> 
                    <div class="card"> 
                        <div class="face front"> 
                           <img src="<?php echo get_bloginfo('template_url');?>/images/home-1.jpg" width="100%">
                        </div> 
                        <div class="face back"> 
                            <h3>Gallery</h3>
                            <a href="#" class="view_details">View Details</a>
                        </div> 
                    </div> 
    			</div> 
            </div>
            
            <div class="box">
             <div class="flipx"> 
                    <div class="card"> 
                        <div class="face front"> 
                           <img src="<?php echo get_bloginfo('template_url');?>/images/home-3.jpg" width="100%">
                        </div> 
                        <div class="face back"> 
                            <h3>Gallery</h3>
                            <a href="#" class="view_details">View Details</a>
                        </div> 
                    </div> 
    			</div> 
            </div>
            
            
        </div>
    </div>
</section>
<!-- testimonial -->
<section class="testimonial">
	<div class="our_client_say">
    	<h5 class="testi_text">Testimonial</h5>
        <h2>
        	What Our
			Client Say
        </h2>
        <div class="testimo_slide slider">
        	<div>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <h4><span class="font-weight-bold">Jessica ,</span> OUR CLIENT </h4>
            </div>
            
            <div>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <h4><span class="font-weight-bold">Jessica ,</span> OUR CLIENT </h4>
            </div>
            
            <div>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <h4><span class="font-weight-bold">Jessica ,</span> OUR CLIENT </h4>
            </div>
        </div>
    </div>
    <div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.2637417155333!2d172.57669231513196!3d-43.53854387912545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318abc8f3d76bb%3A0xeed8f7b3a165f322!2s338%20Blenheim%20Rd%2C%20Upper%20Riccarton%2C%20Christchurch%208041%2C%20New%20Zealand!5e0!3m2!1sen!2sin!4v1568970170300!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>
 <?php get_footer();?>
