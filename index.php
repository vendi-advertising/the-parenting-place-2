<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-parenting-place-2.0
 */

get_header();
?>
<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'no' );
?>
<div class="container-fluid">
    <div class="row">

		<?php if ( $default_sidebar_position === 'no' ) : ?>
			<div class="col-md-12 wp-bp-content-width">
		<?php else : ?>
			<div class="col-md-8 wp-bp-content-width">
		<?php endif; ?>
		
		<div id="primary" class="content-area">

			<main id="main" class="site-main">
				
			<article id="post-"<?php the_ID(); post_class(); ?> >

			</article>
			
			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
			
			endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'partials/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'partials/content', 'none' );

			endif;
			?>

			</main>
		</div>

		 </div>
    <!-- /.col-md-8 -->

<?php if ( $default_sidebar_position != 'no' ) : ?>

    <?php if ( $default_sidebar_position === 'right' ) : ?>

    <div class="col-md-4 wp-bp-sidebar-width">

    <?php elseif ( $default_sidebar_position === 'left' ) : ?>

    <div class="col-md-4 order-md-first wp-bp-sidebar-width">

    <?php endif; ?>
    
        <?php get_sidebar(); ?>
            
    </div>
    <!-- /.col-md-4 -->
<?php endif; ?>

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

<?php
get_footer();
