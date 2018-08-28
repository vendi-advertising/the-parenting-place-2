<?php

$handler = new IntersectionPluginHandler\Ai1EC();
$the_events = ['latest'];
$events_to_display = $handler->prepare($the_events);
$query = $handler->render($events_to_display);
?>

<section>

    <?php
        // foreach( $events_to_display as $event){
        //     var_dump($event);
        // }

    ?>


</section>

            

            

