<?php
/*
* Template Name: Right Sidebar
*/
$handler = new IntersectionHandler\ACF();
get_header(); ?>
     <?php 
    
        $the_sections = ['banner'];
        $sections = $handler->prepare($the_sections);
        $handler->render($sections);
    ?>

    <div class="container">
        <div class="row">

            <div class="col-md-8 wp-bp-content-width">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                    
                        <?php
                  
                            $sections = $handler->prepare();
                                                        
                            $handler->render($sections, ['banner']);

                        ?>

                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-4 wp-bp-sidebar-width">
                <?php get_sidebar(); ?>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php
get_footer();
