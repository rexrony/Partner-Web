<?php
/**
 * Template Name: Testimonials
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

<?php if ( has_post_thumbnail() ) {?> 
<div class="featuredimg-container col-md-12 noPadd">
    <?php the_post_thumbnail();  ?>
    <div class="clear"></div>
    <div class="heading-title">
        <div class="container"><h2><?php the_title(); ?></h2></div>
    </div>
</div>
<?php } ?>
<div class="clear"></div>

<div id="primary" class="contentarea">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
	<div class="rows">
<?php $index_query = new WP_Query(array( 'post_type' => 'testimonials', 'posts_per_page' => 9)); ?>
   <?php $count = 2; while ($index_query->have_posts()) : $index_query->the_post(); ?>
          <div class="item">
              <div class="test-box">
                  <section> <?php $con = get_the_content(); 
                          $post_word_count ='41' + $count;
                      echo showBrief($con,$post_word_count);
                      ?></section>
                  
                <h5><?php the_title(); ?></h5>
                <span><?php echo the_field('user_tagline');  ?></span>
              </div>
          </div>
    <?php $count++; endwhile; ?>
    </div><!-- .row -->
	</div><!-- .page-content -->

</article><!-- #post-## -->

</div><!-- .content-area -->

<?php //get_sidebar(); ?>

 <!--<div class="testimonial-btm-box testi-con col-md-6">
                <div class="test-img floatLeft">
                    <img src="<?php //bloginfo( 'template_url' ); ?>/images/testimonail-img.png" alt="">
                </div>
                <div class="test-content floatRight">
                    <?php //the_content(); ?>
                    <div class="testimonal-sign"><p><b><?php //the_title(); ?></b><br /> 
                   <?php //echo the_field('user_tagline'); ?> </p></div>
                </div>
                
            </div>.testimonial-btm-box-->
    
<?php get_footer(); ?>