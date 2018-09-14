<div class="container-fluid">
    <div class="row">
        <?php echo "here";?>
        <section id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php if ( have_posts() ) :
                    if ( is_home() && ! is_front_page() ) :
                ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <?php endif;
                    $query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
                    /* Start the Loop */
                    while ( $query->have_posts() ) :
                        $path = dirname(__FILE__, 4) . '/partials/posts/' .  get_post_type($query->the_post()) . '.excerpt.php';
                        include($path);
                    endwhile;
                    the_posts_navigation();
                else :
                    get_template_part( 'partials/posts/', 'none' );
                endif; ?>
                <?php echo paginate_links( ); ?>
            </main><!-- #main -->
        </section><!-- #primary -->
    </div>
<div/>