<?php
/*
* Template Name: Left Sidebar
*/

get_header(); ?>
    <?php 
        $render = ['banner_section'];
        $section = prepare_sections($render);
        render_fields($section);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 wp-bp-sidebar-width">
                <?php 
                    get_sidebar(); 
                ?>
            </div>
            <!-- /.col-md-4 -->

            <div class="col-md-8 wp-bp-content-width">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                        <?php
                  
                            // $already_rendered = $render;
                            $sections = prepare_sections();
                                                        
                            render_fields($sections, ['banner_section']);


                        ?>

                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php
get_footer();
