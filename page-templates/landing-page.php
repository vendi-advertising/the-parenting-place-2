<?php
/*
* Template Name: Landing Page
*/

get_header(); ?>
<?php  //DEV ?> <?php echo basename( __FILE__ ); ?>

<?php

$fields = prepare_fields();

render_fields($fields);

get_footer();
