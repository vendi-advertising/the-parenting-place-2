
<?php 
$content = $contents ?? [];
if($content) : ?>
    <section class="bar bg-green no-mb color-white text-<?php echo esc_html_e( $content['text_alignment'] ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo esc_html_e( $content['link'] ); ?>"><h1><?php echo esc_html_e( $content['title'] ); ?></h1></a>
                    <p class="lead mb-0"><?php echo esc_html_e( $content['main_text'] ); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>