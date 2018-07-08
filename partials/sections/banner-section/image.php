<?php 
$image = $fields[$fields['acf_fc_layout']];
if($image) : ?>

<div class="row">
    <div class="cover-container d-flex w-100 h-50 p-3 mx-auto flex-column">
        <img src="<?php echo esc_html_e( $image['url'] ); ?>" alt=""/>
    </div>
</div>
<!-- /.row -->
<?php endif; ?>