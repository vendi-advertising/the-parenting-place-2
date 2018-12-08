<?php
/*
* Template Name: No Sidebar (full width)
*/

$handler = new IntersectionPluginHandler\ACF();
get_header(); 
$the_sections = ['banner'];
$sections = $handler->prepare($the_sections);
$handler->render($sections);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 wp-bp-content-width">
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
    </div>
</div>

<?php
get_footer();
