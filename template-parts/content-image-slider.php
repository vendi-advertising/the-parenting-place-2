<?php 
// used include in the parent template so the part would have access to the image variable
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
                            <div class="carousel-caption text-left">
                                <h1><?php echo $slide['title']; ?></h1>
                                <p><?php echo $slide['caption']; ?></p>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
                                </p>
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