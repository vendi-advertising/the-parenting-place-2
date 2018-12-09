<section class="card content-3">
    <div class="container">
        <a href="<?php echo esc_html_e( $content['link'] ); ?>"><h2><?php echo esc_html_e( $content['title'] ); ?></h2></a>
        <p class="lead mb-5 constrain-width"><?php echo esc_html_e( $content['main_text'] ); ?></p>
        <div class="row justify-center">
            <div class="col-md-6 text-center">
                <img class="mb-4 img-fluid" src="<?php echo esc_html_e( $content['image']['url'] ); ?>" >
            </div>	
        </div>
    </div>
</section>