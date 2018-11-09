<?php
/*
* Template Name: Right Sidebar
*/

$handler = new IntersectionPluginHandler\ACF();
get_header(); 
$the_sections = ['banner'];
$sections = $handler->prepare($the_sections);
$handler->render($sections);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 wp-bp-content-width">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section>
                        <?php
                            $sections = $handler->prepare();
                            $ignore = ['banner'];                  
                            $handler->render($sections, $ignore);
                        ?>
                    </section>
                </main>
            </div>
        </div>
        <div id="sidebar-wrapper" class="col-md-3 wp-bp-sidebar-width">
            <?php get_sidebar(); ?>
        </div> 
    </div>
</div>

<?php
get_footer();

