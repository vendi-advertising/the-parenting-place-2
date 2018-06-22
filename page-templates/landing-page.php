<?php
/*
* Template Name: Landing Page
*/

get_header(); ?>
<?php  //DEV ?> <?php echo basename( __FILE__ ); ?>

<?php
/**
 * Carousel Params
 */
$slides=get_field('banner_image_slider');

$iterator=0;

/**
 * Template
 */
include(locate_template('partials/content-image-slider.php'));


/**
 * Card Params
 */
$cards=get_field('cards');
/**
 * Template
 */
include(locate_template('partials/content-cards.php'));
?>

<!-- Main Loop -->
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
           
                <?php
                     
                    while ( have_posts() ) : the_post();

                       $part = $post->post_name;
                       
                       if($part){
                           get_template_part('partials/content', $part); 
                       }else{
                           get_template_part( 'partials/content', 'none' );
                       }
                       
                    endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
</div>
<!-- FIN -->

<?php
get_footer();
