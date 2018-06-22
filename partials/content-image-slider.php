<?php 
if($slides) : ?>

<div class="row">

    <div class="col-md-12">


        <div id="front-page-image-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php foreach( $slides as $slide ): ?>
                <li data-target="#carousel" data-slide-to="<?php echo $iterator; ?>" <?php if($iterator==0) : ?>class="active"<?php endif; ?>></li>      
                <?php 
                    $iterator++;
                    endforeach; 
                ?>
            </ol>
            <div class="carousel-inner">
                <?php $iterator=0;?>
                <?php  foreach( $slides as $slide ): ?>
                
                    <div class="carousel-item<?php if($iterator==0) : echo ' active'; endif; ?>">
                        <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>" />
                        <div class="container">
                            <?php
                                $text_align = '';
                        
                                switch($slide['text_alignment']) {
                                    case 'left':
                                        $text_align = 'text-left';
                                        break;
                                    case 'center':
                                        break;
                                    case 'right':
                                        $text_align = 'text-right';
                                        break;
                                }
                            ?>
                            <div class="carousel-caption <?php echo $text_align; ?>">
                                <h1><?php echo $slide['title']; ?></h1>
                                <p><?php echo $slide['caption']; ?></p>
                                <?php 
                                    
                                    $button = $slide['button']['button'];
                                    if($slide['include_button']){
                                        include('components/button.php');
                                    }

                                ?>
                            </div>
                        </div>                
                    </div><!-- item -->
                <?php 
                    $iterator++;        
                    endforeach; 		
                ?> 
            </div>
            <a class="carousel-control-prev" href="#front-page-image-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#front-page-image-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- /.col-md-12 -->
</div>
<!-- /.row -->
<?php endif; ?>