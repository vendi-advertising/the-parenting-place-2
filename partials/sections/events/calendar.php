<?php
$calender_type = $contents[$contents['acf_fc_layout']] ?? "monthly";

?>
<section class="card shadow">
    <div class="card-body">
        <?php
        
            $shortcode = "[ai1ec view='{$calender_type}']";
            echo do_shortcode($shortcode);
        
        ?>
    </div>
</section>