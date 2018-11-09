<?php
/*
* Template Name: No Sidebar (Full Width)
*/

get_header(); ?>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'partials/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                    </main>
                </div>
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php
get_footer();
