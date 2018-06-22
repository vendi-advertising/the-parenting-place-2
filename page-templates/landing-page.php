<?php
/*
* Template Name: Landing Page
*/

get_header(); ?>
<?php  //DEV ?> <?php echo basename( __FILE__ ); ?>

<?php
$options = array();

$field_groups = acf_get_field_groups();
foreach ( $field_groups as $group ) {
  // DO NOT USE here: $fields = acf_get_fields($group['key']);
  // because it causes repeater field bugs and returns "trashed" fields
  $fields = get_posts(array(
    'posts_per_page'   => -1,
    'post_type'        => 'acf-field',
    'orderby'          => 'menu_order',
    'order'            => 'ASC',
    'suppress_filters' => true, // DO NOT allow WPML to modify the query
    'post_parent'      => $group['ID'],
    'post_status'      => 'any',
    'update_post_meta_cache' => false
  ));
  foreach ( $fields as $field ) {
    echo'<pre>';
    var_export($field);
    // var_export($value);
    echo '</pre>';
    $options[$field->post_excerpt] = get_field($field->post_excerpt);
  }
}

foreach($options as $field => $value){
    echo'<pre>';
    var_export($field);
    var_export($value);
    echo '</pre>';
    include(locate_template('partials/' . str_replace('_', '-', $field ) . '.php'));
}
get_footer();
