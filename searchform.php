<?php
/**
 * The template for search forms within the application
 *
 * @package the_parenting_place
 */
<div id="sb-search" class="sb-search">
    <form action="<?php echo home_url( '/' ); ?>">
        <input class="sb-search-input" placeholder="Search" name="s" id="search" type="search">
        <input class="sb-search-submit" value="" type="submit">
        <span class="sb-icon-search"> <i class="fas fa-search" aria-hidden="true"> </i> </span>
    </form>
</div>
