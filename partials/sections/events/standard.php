<?php
// $a = new Ai1ec_Events_Helper();
// // gets localized time
// $bits = $ai1ec_events_helper->gmgetdate( $ai1ec_events_helper->gmt_to_local( time() ) );

// //sets start time to today
// $start = gmmktime(0,0,0,$bits['mon'],$bits['mday'],$bits['year']);

// //sets end time to a year from today i.e. $bits['year']+1
// $end = gmmktime(0,0,0,$bits['mon'],$bits['mday'],$bits['year']+1);

// //Look in class-ai1ec-calendar-helper.php for details
// $get_events = $ai1ec_calendar_helper->get_events_between($start,$end);

// //loop through results to get post_ids
// foreach($get_events as $event ):
//     $post_ids[] = $event->post_id;
// endforeach;

$args = $args = array(
        'posts_per_page'  => 4,
        'paged' => get_query_var('paged'),
        'post_type'=> 'ai1ec_event',
        'orderby' => 'post__in'
    );


$events_added = new WP_Query( $args );

// The Loop
while ( $events_added->have_posts() ) : $events_added->the_post();
    // $event = Ai1ec_Events_Helper::get_event($post->ID);
    // $event = $events_added->the_post();
    
endwhile;
?>
