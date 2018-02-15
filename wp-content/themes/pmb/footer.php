<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
global $options;
$options = get_option('cOptn');
$logo = $options['logo'];

$options['logos'] = wp_get_attachment_image($logo, array($size, $size), false);
?>
        <div class="clear"></div>
<div class="testimonials-container padd30">
    <div class="container">
        <div class="col-md-8 center-block inner-testimonial">
        <div class="events-slides col-md-12 noPadd">
<?php $index_query = new WP_Query(array('post_type' => 'testimonials', 'posts_per_page' => 2,'order' => 'ASC')); ?>
 <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
            <div class="test-context col-md-12">
                <p>Sed vel lorem et velit dictum rhoncus eget sed orci. Vestibulum ante ipsum primis in faucibus orci luctus et.</p>
                <div class="clear"></div>
                <p class="tst-nme"><span>- <?php the_title(); ?></span><br>
                <small><?php echo the_field('user_tagline'); ?></small></p>
            </div>
            <?php endwhile; ?>
            </div><!--.events-slide--->
        </div><!--.inner-testimonial-->
    </div>
</div>

		</div><!-- .site-content -->
<div class="clear"></div>
<footer id="colophon" class="footer" role="contentinfo">
<div class="footer-top col-md-12 noPadd">
<div class="container">
<div class="footerboxes col-md-3 revealOnScroll" data-animation="fadeInUp">
    <?php get_sidebar('footer1'); ?>
</div>
<div id="footer-box2" class="footerboxes col-md-3 revealOnScroll" data-animation="fadeInUp">
<div class="footer-menus col-sm-9 col-md-9 center-block">
       <?php $defaults = array( 'menu' => 'main-menu', 'container' => ' ', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'theme_location' => 'primarys' );
wp_nav_menu( $defaults ); ?>
   </div>
			</div>
<div id="footer-box3" class="footerboxes col-md-3 revealOnScroll" data-animation="fadeInUp">
    <div class="footer-fb-widget">
        <?php get_sidebar('footer2'); ?>
    </div>
</div>
<div class="footerboxes col-md-3 revealOnScroll" data-animation="fadeInUp">
            <div class="footer-social-icons">
               <ul>
                   <li><a href="#_"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                   <li><a href="#_"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                   <li><a href="#_"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                   <li><a href="#_"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
               </ul>
               </div><!--.footer-social-icons-->
</div>
</div>
</div>
<div class="clear"></div>
<div class="footer-bottom col-md-12 noPadd">
      <div class="copyrights">
			   <div class="container">
			   <?php echo $options['copyright'] ; ?>
			   </div>
      
                </div><!---.container-->
			</div><!-- .footer-bottom -->
</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>

<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	
<script src="<?php bloginfo( 'template_url' ); ?>/js/slick.js" type="text/javascript" charset="utf-8"></script>

<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/script.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.slicknav.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#resp_menu').slicknav({
   label: '',
  duration: 1000,
    prependTo:'.menu-container'
  });
});
</script>

</body>
</html>
