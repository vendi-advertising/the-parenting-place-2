<?php
    $blocks = $contents[$contents['acf_fc_layout']] ?? [];
    var_export($blocks);
    if(count($blocks) > 0) :
?>
    <?php foreach($blocks as $block): ?>
        <section class="bar bg-<?php echo esc_html_e( $block['color'] ); ?> no-mb color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo esc_html_e( $block['title'] ); ?></h1>
                        <p class="lead mb-0">
                            <?php echo esc_html_e( $block['main_text'] ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach?>
<?php endif; ?>