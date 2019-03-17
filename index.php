<?php
/**
 * The main template file
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) :
			
				the_post(); ?>
				
				<div class="post-single">
					<div class="post-title">
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>						
					</div>
				</div>

			<?php endwhile;

			the_posts_navigation();

		else :

			echo 'No posts yet';

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();