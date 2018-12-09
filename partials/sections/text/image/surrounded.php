<section class="card content-3">
    <div class="container">
        <a href="<?php echo esc_html_e( $content['link'] ); ?>"><h2><?php echo esc_html_e( $content['title'] ); ?></h2></a>
        <p class="lead mb-5 constrain-width"><?php echo esc_html_e( $content['main_text'] ); ?></p>
        <div class="row justify-center">
            <div class="col-md-3 text-md-right" >
                <div class="col col-feature">
                    <h4><?php echo esc_html_e( $content['top_left_title'] ); ?></h4>
                    <p><?php echo esc_html_e( $content['top_left'] ); ?></p>
                </div>
                <div class="col col-feature">
                    <h4><?php echo esc_html_e( $content['top_right_title'] ); ?></h4>
                    <p><?php echo esc_html_e( $content['top_right'] ); ?></p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img class="mb-4 img-fluid" src="<?php echo esc_html_e( $content['image']['url'] ); ?>" >
            </div>
            <div class="col-md-3 text-center text-md-left" >
                <div class="col col-feature">
                    <h4><?php echo esc_html_e( $content['bottom_left_title'] ); ?></h4>
                    <p><?php echo esc_html_e( $content['bottom_left'] ); ?></p>
                </div>
                <div class="col col-feature">
                    <h4><?php echo esc_html_e( $content['bottom_right_title'] ); ?></h4>
                    <p><?php echo esc_html_e( $content['bottom_right'] ); ?></p>
                </div>
            </div>	
        </div>
    </div>
</section>