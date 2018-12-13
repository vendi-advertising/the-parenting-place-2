<?php 
$image = $contents[$contents['acf_fc_layout']] ?? [];
if($image) : ?>
<div class="row">
    <div class="card">
        <div class="card-body">
            <img src="<?php echo esc_html_e( $image['url'] ); ?>" alt=""/>
        </div>
    </div>
</div>
<?php endif; ?>