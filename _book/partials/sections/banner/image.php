<?php 
$image = $contents[$contents['acf_fc_layout']] ?? [];
if($image) : ?>
<div class="row">
    <div class="cover-container d-flex w-100 h-50 mb-5 mx-auto flex-column">
        <img src="<?php echo esc_html_e( $image['url'] ); ?>" alt=""/>
    </div>
</div>
<?php endif; ?>