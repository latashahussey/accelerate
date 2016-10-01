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
				$site_link = get_field('site_link');  //stores client url
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
			?>

			<!--Display custom advanced fields on page-->
			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2><?php the_title(); ?></h2>
					<h5><?php echo $service; ?></h5>
					<h6>Client: <?php echo $client; ?></h6>
					<!--Now display the case study details-->
					<?php the_content(); ?>
					<a href="<?php echo $site_link; ?>" target="_blank">Visit Live Site</a>
				</aside>

				<!--Display case study images--->
				<div class="case-study-images">
					<?php if($image_1) { ?>
						<img class="alignnone" src="<?php echo $image_1['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
				<?php } ?>
				<?php if($image_2) { ?>
						<img class="alignnone" src="<?php echo $image_2['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php } ?>
				<?php if($image_3) { ?>
					<img class="alignnone" src="<?php echo $image_3['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php } ?>
				</div>
			</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
