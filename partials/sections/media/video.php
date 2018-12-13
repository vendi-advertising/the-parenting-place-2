<?php 
$video = $contents?? [];
if($video) : ?>
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="<?php echo esc_html_e( $video['url'] ); ?>" allowfullscreen></iframe>
</div>
<?php endif; ?>