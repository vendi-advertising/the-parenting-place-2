<?php
/*
* Template Name: Landing Page
*/

get_header(); ?>
<?php  //DEV ?> <?php echo basename( __FILE__ ); ?>

<?php

$contents = prepare_sections();
render_fields($contents);
get_footer();
