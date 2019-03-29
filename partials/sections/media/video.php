<?php
/**
 * Video
 * 
 * Displays a video embed
 * 
 * @package the_parenting_place_2
 */
?>
<?php 
$video = $contents?? [];
if($video) : ?>
<section>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="<?php echo esc_html_e( $video['url'] ); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>
<?php endif; ?>