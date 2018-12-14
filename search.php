<?php
get_header(); ?>
<?php
    $handler = new IntersectionPluginHandler\ACF();
    $handler->get_section('banner', 'base');
?>

<div class="container">
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        
        <div id="sb-search" class="sb-search sb-search-open">
            <form>
                <input class="sb-search-input" placeholder="Search" name="s" id="search" type="search">
                <input class="sb-search-submit" value="" type="submit">
                <span class="sb-icon-search"> <i class="fas fa-search" aria-hidden="true"> </i> </span>
            </form>
        </div>
        <?php if ( have_posts() ) : ?>

            <h4 class="search-query">
                <?php printf( esc_html__( 'Search Results for: %s', 'the_parenting_place' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h4>

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