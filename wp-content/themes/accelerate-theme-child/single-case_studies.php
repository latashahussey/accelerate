<?php
/**
 * The template for displaying all pages
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

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();

				//store custom adv fields in php variable using built in function from ACF Plugin-->
				$service = get_field('service'); //service provided to client
				$client = get_field('client'); //client company name
				$link = get_field('link');  //stores client url
				$image1 = get_field('image1');
				$image2 = get_field('image2');
				$image3 = get_field('image3');
			?>

			<!--Display custom advanced fields on page-->
			<aside class="case-study-sidebar">
				<h2><?php  ?></h2>
				<h5><?php $service ?></h5>
				<h6>Client: <?php $client ?></h6>
				<!--Now display the case study details-->
				<?php the_content(); ?>
				<a href="<?php $link ?>" target="_blank">Visit Live Site</a>
			</aside>

			<!--Display case study images--->
			<div class="case-study-images">
				<img class="alignnone" src="<?php $image1 ?>"  />
				<img class="alignnone" src="<?php $image2 ?>"  />
				<img class="alignnone" src="<?php $image3 ?>"  />
			</div>


			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
