<?php 
if($button) : ?>
<p>
    <a class="btn btn-lg btn-<?php echo esc_html_e( $button['button_color'] ); ?>" 
       href="<?php echo esc_html_e( $button['button_link'] ); ?>" 
       role="button">
       
       <?php echo esc_html_e( $button['button_text'] ); ?>
    
    </a>
</p>
<?php endif; ?>
