
<?php 
$text = $fields[$fields['acf_fc_layout']];
if($text) : ?>

    <section class="background">
        <div class="container-fluid">
            <div class="card-group">
                <?php if(count($text)):?>
                    <?php foreach($text as $content): ?>

                        <?php 
                        
                            if($content['has_image']){
                                switch($content['image_align']){
                                    case 'left': 
                                        include('image/left.php');
                                    break;
                                    case 'center':
                                        include('image/center.php');
                                    break; 
                                    case 'right':
                                        include('image/right.php');
                                    break;
                                }
                            } 
                            
                        ?>
                                                                
                        
                    <?php endforeach; ?>		
                <?php endif; ?>	
            </div>
        </div>
    </section>



    <?php if(!$content['has_image']) : ?>
        <section class="content-4">
            <div class="container">
                <div class="row justify-center mt-5">
                    <?php echo esc_html_e( $content['main_text'] ); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>	

<?php endif; ?>