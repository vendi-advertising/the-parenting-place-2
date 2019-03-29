<?php
/**
 * Image centered inside a card
 * 
 * @package the_parenting_place_2
 */
?>
<?php 
$image = $contents ?? [];
if($image) : ?>
<section>
    <div class="row image-card">
        <div class="card">
            <div class="card-body" width="100%">
                <img width="" src="<?php echo esc_html_e( $image['image'] ); ?>" alt=""/>
            </div>
        </div>
        <div>
            <figure>
                <?php echo esc_html_e( $image['caption'] ); ?>
            </figure>    
        </div>
    </div>
</section>
<?php endif; ?>