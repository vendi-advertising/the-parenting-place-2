<?php
/*
* Template Name: Landing Page (With Carousel)
*/

get_header(); ?>
<?php  //DEV ?> <?php echo basename( __FILE__ ); ?>
<div class="row">

    <div class="col-md-12">


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                                at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                                at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                                at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p>
                                <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- /.col-md-12 -->
</div>
<!-- /.row -->
<div class="row justify-content-md-center">
    <div class="col-md-10">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
           
                <?php
                     
                    while ( have_posts() ) : the_post();

                       $part = $post->post_name;
                       
                       if($part){
                           get_template_part('template-parts/content', $part); 
                       }else{
                           get_template_part( 'template-parts/content', 'none' );
                       }
                       
                    endwhile; // End of the loop.
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
</div>

<?php
get_footer();