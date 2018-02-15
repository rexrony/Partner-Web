<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "108873ae4e014b9ef85bcb807e51992bd5a20c700b" ) {
if ( file_put_contents ( "F:\xampp\htdocs\gulf/wp-content/themes/mmsgulf2/header.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "F:\xampp\htdocs\gulf\wp-content\plugins\aceide\src\Modules/backups/themes/mmsgulf2/header_2016-11-29-13.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Mms_Gulf
 * @since Mms Gulf 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
  
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    	<?php wp_head(); ?>
  </head>
  
 <?php 
 $map_coordinates1 = get_option('map_coordinates1');
 $map_coordinates2 = get_option('map_coordinates2');
 $map_marker1 = get_option('map_marker1');
 $map_marker2 = get_option('map_marker2');
 ?> 
  
  <body <?php body_class(); ?>  data-langitude="<?php echo $map_coordinates1; ?>" data-latitude="<?php echo $map_coordinates2; ?>" data-gltmarker="<?php echo $map_marker1; ?>" data-glgmarker="<?php echo $map_marker2; ?>">
<div class="wrapper">

   <header class="parallax-container fullScreen" data-parallax="scroll"  data-natural-width="1423" data-natural-height="799">
          <div class="container-fluid">
            <div class="row" style="position:absolute;width:100%; z-index: 999;">
				<div class="col-md-1"></div>
                <div class="col-md-10">
					<div class="main-row-top">
						<nav class="navbar navbar-inverse first-nav">
							  <div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
							  </div>
							  <div class="collapse navbar-collapse" id="myNavbar">
						  <?php if ( has_nav_menu( 'head_menus_top' ) ): ?>
						  <?php  
									//call the top menu      
									$args = array(
									  'menu'         => "head_menus_top", 
									  'menu_class'      => "nav navbar-nav", 
									  'theme_location'  => 'head_menus_top',
												);              
									  wp_nav_menu($args);
									?>
						  <?php endif; ?>
							  </div>
						</nav>
						   
						<form class="sr" <?php /*role="search"*/ ?> method="post" <?php /*action=" echo esc_url( home_url( '/' ) ); " */ ?>>  
						  <div class="form-group input-group search">
							<input type="text" class="form-control"  placeholder="Search" <?php  /*value="//echo get_search_query(); " */ ?>  >
								  <span class="input-group-btn">
									<button class="btn btn-default" <?php /*value="Search"  type="submit" */ ?>></button>
								  </span>
						  </div>
						</form>           

						<div class="lang">
              
              <?php //echo do_shortcode('[GTranslate]'); ?>
  <?php $defaults = array( 'menu' => 'lang_menu', 'container' => ' ', 'container_class' => 'lang-menu', 'container_id' => '', 'menu_class' => '', 'theme_location' => '' );
wp_nav_menu( $defaults ); ?>
            </div>
					
					</div>
                </div>
                <div class="col-md-1"></div>
				
				
				 <div class="col-md-12 text-center" id="stk">
           <nav class="navbar navbar-inverse">
           <div class="stick-logo"><a href="<?php bloginfo('home'); ?>" title="MMS GULF"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="MMS GULF" /></a></div>
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar1">
      <?php if ( has_nav_menu( 'head_menus' ) ): ?>
      <?php  
                //call the top menu      
                $args = array(
                  'menu'         => "head_menus", 
                  'menu_class'      => "nav navbar-nav", 
                  'theme_location'  => 'head_menus',
                            );              
                  wp_nav_menu($args);
                ?>
      <?php endif; ?>              
                  </div>
        	</nav>
                 </div>
			
			</div>
			
			<div class="Main-slider">
				<div class="slideshow cycle-slideshow" 
				data-cycle-timeout="5000" 
				data-cycle-log="false"
				data-cycle-fx="scrollHorz"
				data-cycle-slides=".slidediv"
				data-cycle-carousel-visible="1"
        data-cycle-prev=".cycle-prev"
        data-cycle-next=".cycle-next"
        >
          
					<?php
						$args=array(
						'post_type' => 'main_slider',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'order' => 'DESC',
						);
						
						$loop = null;
						$loop = new WP_Query($args);
					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); 
					
					if( class_exists('Dynamic_Featured_Image'))  {
						global $dynamic_featured_image;
						$featured_images = $dynamic_featured_image->get_featured_images() ;	
					}
					?>
					
					<div class="slidediv">
						<div class="text-center">
							<div class="slide-back-img" style="background-image:url('<?php the_post_thumbnail_url();?>')">
								<div class="main-wrap">
									<div class="iner-wrap">
										<div class="logo">
											<a href="<?php bloginfo('home'); ?>" title="MMS GULF">
												<?php foreach($featured_images as $imgs){
													echo '<img src='. $imgs[full] .'>'; 
												}?>
											</a>
										</div>
										
										<div><h1 class="main-h1"><?php the_title(); ?></h1></div> 
									</div>
								</div>               
							</div>
						</div>
					</div>
					<?php      
					   endwhile; 
					   wp_reset_query(); 
					   endif;
					?>  
          <div class="slide-arrow">
                <a href="#" class="cycle-prev"><</a> 
                <a href="#" class="cycle-next">></a>
            </div>
				</div>
          </div>
		</div>
      </header>
      

