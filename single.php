<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">

<?php
while ( have_posts() ) :
the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">
<?php
if ( is_singular() ) :
the_title( '<h1 class="entry-title">', '</h1>' );
else :
the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
endif;

if ( 'post' === get_post_type() ) :
?>
<?php endif; ?>
</header><!-- .entry-header -->

<div class="entry-content">
<?php
the_content( sprintf(
wp_kses(
    /* translators: %s: Name of current post. Only visible to screen readers */
    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wowgulpwpstarter' ),
    array(
        'span' => array(
            'class' => array(),
        ),
    )
),
get_the_title()
) );

wp_link_pages( array(
'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wowgulpwpstarter' ),
'after'  => '</div>',
) );
?>
</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php the_post_navigation();

// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;

endwhile; // End of the loop.
?>

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();