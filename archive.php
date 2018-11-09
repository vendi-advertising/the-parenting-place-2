<?php
get_header(); ?>
<?php
    $handler = new IntersectionPluginHandler\ACF();
    $handler->get_section('banner', 'base');
?>

<div class="container">
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                    $path = '/partials/posts/post';
                    get_template_part($path);
                ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php 
                $path = '/partials/posts/none';
                get_template_part( $path); 
                
            ?>

        <?php endif; ?>

        </main>
    </section>
</div>
<?php get_footer(); ?>