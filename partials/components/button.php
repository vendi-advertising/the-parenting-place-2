<?php 
if($button) : ?>
<p>
    <a class="btn btn-lg btn-<?php echo $button['button_color']; ?>" href="<?php echo $button['button_link']; ?>" role="button">
        <?php echo $button['button_text'] ?>
    </a>
</p>
<?php endif; ?>
