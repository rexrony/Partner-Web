<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

 <div class="clear"></div>
 
<div class="contentarea-index col-md-12 noPadd">

<div class="slides-container">
<div class="slide-con">
<?php $index_query = new WP_Query(array('post_type' => 'slider_home', 'posts_per_page' => 5)); ?>
 <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
  
<div class="slides"><?php the_post_thumbnail(); ?>
<div class="slider-text-con">
 <div class="container">
<div class="slide-caption">
    <!--   <h1><?php //$tit = get_the_title(); 
           //echo multiColor($tit,3);
           ?></h1>-->
       <section><p><?php echo $content = get_the_content(); ?></p></section>
    </div>
</div>
</div><!--.slider-text-con-->
</div><!--.slides-->
<?php endwhile; ?>
</div><!--.slide-con-->
</div><!--.slides-container-->
<div class="clear"></div>
<div class="welcome-note col-md-12 padd40">
    <div class="container">
       
        <?php
     $welcome_query = new WP_Query(array('post_type' => 'welcome_note', 'posts_per_page' => 1,'order' => 'ASC')); ?>
 <?php while ($welcome_query->have_posts()) : $welcome_query->the_post(); ?>
 <div class="welcome-heading col-md-12 noPadd">
           <h2><?php 
               $gettitle = get_the_title();
               echo multiColor($gettitle,2);?></h2>
       </div>
       <div class="clear"></div>
  <div class="col-md-6 noPadd-lft">
      <?php the_content();?>
  </div>
  <div class="col-md-6 noPadd-rht">
      <?php the_post_thumbnail(); ?>
  </div>
   <?php endwhile; ?>
    </div>
</div>
<div class="clear"></div>
<div class="our-servs">
    <div class="container">
        <div class="home-heading">
            <h2>Explore our Consulting services</h2>
   <p>Unlike traditional in-house billing departments, our chiropractic billing service pays for itself. When you hire Partners Medical Billing, you’ll notice immediate savings as your overhead costs are reduced substantially. You’ll also eliminate the stress and hassles of dealing with insurance carriers and trying to chase down money that’s owed to you. We allow you to focus your resources on patient care and managing your office, while we take care of insurance.
</p>
        </div>
        
          <div class="clear"></div>  
 <div class="serv-container col-md-12 noPadd">
   
    <?php
     $count=1;
     $index_query = new WP_Query(array('post_type' => 'service_diff', 'posts_per_page' => 3,'order' => 'ASC')); ?>
 <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
     <div class="serv-box col-md-4 <?php if($count == '1'){echo 'noPadd-lft';}?>">
       <div class="serv-con">
       <div class="serv-con-img"><?php the_post_thumbnail(); ?></div>
        
         <div class="serv-title">
             <h4><?php the_title(); ?></h4>
         </div>
         <div class="serv-con-text">
             <?php $con = get_the_content();
             echo showBrief($con, 20);
             ?>
         </div>
        
         </div><!--.serv-con-->
     </div>
     <?php 
     $count++;
     endwhile; ?>
 </div>           
            
    </div><!--.container-->
</div><!--.our-servs-->
<div class="clear"></div>

</div><!-- .content-area -->
<?php get_footer(); ?>	


