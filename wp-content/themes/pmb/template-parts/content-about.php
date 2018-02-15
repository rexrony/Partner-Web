<?php
/**
 *Template Name: About Us
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>

<!---
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        //bcn_display();
    }?>
</div>
    </div>
</div>
--->

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
	<main id="main" class="container" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->
<div class="clear"></div>
<div class="about-me col-md-12 padd40">
    <div class="container">
        <?php echo the_field('about_me'); ?>
    </div>
</div><!-- .about-me -->
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
