<?php 
$image = $contents ?? [];
if($image) : ?>
<div class="row">
    <div class="card">
        <div class="card-body">
            <img src="<?php echo esc_html_e( $image['image'] ); ?>" alt=""/>
        </div>
    </div>
    <div>
        <figure>
            <?php echo esc_html_e( $image['caption'] ); ?>
        </figure>    
    </div>
</div>
<?php endif; ?>