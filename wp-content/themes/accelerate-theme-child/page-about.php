<?php /* Template Name: About Page */
/**
 * The template for displaying the About page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
//grab the header for the about page
get_header('about'); ?>

	<div id="primary" class="site-content">
		<div id="about-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<p>
					<?php the_content(); ?>
				</p>
			<?php endwhile; // end of the loop. ?>

      <?php
        query_posts('post_type=services')
      ?>
      <?php while ( have_posts() ) : the_post();
					//store custom adv fields in php variable using built in function from ACF Plugin-->
					$icon = get_field('icon');
					$size = "thumbnail";  //show thumbnail size image
			 ?>

			 <!--Display custom advanced fields on page-->
			 <section class="services">

           <!--Display service images--->
           <div class ="service-description">

             <?php if($icon) { ?>
               <?php echo wp_get_attachment_image( $icon, $size ); ?>
           <?php } ?>
          

           <!--Now display the service details-->
           <h4><?php the_title(); ?></h4>
           <p>
             <?php the_content(); ?>
           </p>
				 </div>
			 </section>
			<?php endwhile; // end of the loop. ?>
      <?php wp_reset_query(); ?>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
