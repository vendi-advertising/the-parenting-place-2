<?php
$calender_type = $contents[$contents['acf_fc_layout']] ?? "monthly";

?>
<section>
    <?php
    
        $shortcode = "[ai1ec view='{$calender_type}']";
        echo do_shortcode($shortcode);
    
    ?>
</section>