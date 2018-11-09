<div class="row">
    <div class="container-fluid">
        <section id="primary" class="content-area">
            <main id="main" class="site-main">
                <?php if ( have_posts() ) :
                    if ( is_home() && ! is_front_page() ) :
                ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <?php endif;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                                'post_type'=>'post', 
                                'post_status'=>'publish', 
                                'posts_per_page'=> 5,
                                'paged' => $paged,
                            );
                    $query = new WP_Query($args);
                    while ( $query->have_posts() ) :
                        $path = dirname(__FILE__, 4) . '/partials/posts/' .  get_post_type($query->the_post()) . '.excerpt.php';
                        include($path);
                    endwhile;
                    the_posts_navigation();
                else :
                    get_template_part( 'partials/posts/', 'none' );
                endif; ?>
            </main>
            <nav>
                <div class="pagination">
                    <?php 
                        echo paginate_links( array(
                            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                            'total'        => $query->max_num_pages,
                            'current'      => max( 1, get_query_var( 'paged' ) ),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'plain',
                            'end_size'     => 5,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => sprintf( '<i></i> %1$s', __( '&#10092; Newer Posts', 'text-domain' ) ),
                            'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts &#10093;', 'text-domain' ) ),
                            'add_args'     => false,
                            'add_fragment' => '',
                        ) );
                    ?>
                </div>
            </nav>
        </section>
    </div>
<div/>