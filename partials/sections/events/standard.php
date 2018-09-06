<?php

$handler = new IntersectionPluginHandler\Ai1EC();
$the_events = ['latest'];
$events_to_display = $handler->prepare($the_events);
$result = $handler->render($events_to_display);

$events = [];
if( count($result["posts"]) > 0 ){
    $events = $result["posts"];
}
$moreThanOne = count($events) > 1;
$index = 0;
?>

<section>

    <!-- <?php foreach ($events as $event): ?>
        <?php
             $img = wp_get_attachment_image_src( get_post_thumbnail_id( $event['ID'] ), 'single-post-thumbnail' );
        ?>
    
        <div>
            <img src="<?php echo esc_html_e( $img[0] ); ?>" alt="">
        </div>
    <?php endforeach ?> -->


    <div class="row">

    <div class="col-md-12">
        <div class="section-title">
            <div class="inner">
                <p>This is a demo</p>
            </div>
            <h1> Upcoming Events </h1>
        </div>

        <div id="event-section-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php foreach ($events as $index => $event): ?>
                <li data-target="#event-section-slider" data-slide-to="<?php echo esc_html_e( $index ); ?>" <?php if($index==0) : ?>class="active"<?php endif;?>></li>
                <?php endforeach;?>
            </ol>
            </pre>
            </pre>

            <div class="carousel-inner">
                <?php  foreach( $events as $index => $event): ?> 
                    <?php
                        $img = wp_get_attachment_image_src( get_post_thumbnail_id( $event['ID'] ), 'single-post-thumbnail' );
                    ?>                
                    <div class="carousel-item<?php if($index==0) : echo esc_html_e( ' active' ); endif; ?>">
                        <?php if($img):?>
                        <img src="<?php echo esc_html_e( $img[0]); ?>" alt="event" />
                        <?php endif;?>
                        <div class="container">
                            <?php
                                // $text_align = '';
                        
                                // switch($value['text_alignment']) {
                                //     case 'left':
                                //         $text_align = 'text-left';
                                //         break;
                                //     case 'center':
                                //         break;
                                //     case 'right':
                                //         $text_align = 'text-right';
                                //         break;
                                // }
                            ?>
                            <!-- <div class="carousel-caption-overlay"></div>-->
                            <div class="carousel-caption">
                                <h2 class="subtitle"><?php echo esc_html_e( $event['post_title'] ); ?></h2>
                                <p><?php echo esc_html_e( $event['post_content'] ); ?></p>
                            </div>
                        </div>                
                    </div><!-- item -->
                <?php  
                    endforeach; 		
                ?> 
            </div>
            <?php if($moreThanOne): ?>
            <a class="carousel-control-prev" href="#event-section-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#event-section-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <?php endif; ?>
        </div>
    </div>
    <!-- /.col-md-12 -->
</div>
<!-- /.row -->


</section>

            

            

