<?php

// ADD TESTIMONIALS METABOXES
$key = "testimonial";
$meta_boxes = array(
"person-name" => array(
"name" => "person-name",
"title" => "Person's Name",
"description" => "Enter the name of the person who gave you the testimonial."),
"company" => array(
"name" => "company",
"title" => "Company Name",
"description" => "Enter the client Company Name"),
"link" => array(
"name" => "link",
"title" => "Client Link",
"description" => "Enter the link to client's site, or you can enter the link to your portfolio page where you have the client displayed.")
);
 
function add_testimonials_metabox() {
   global $key;
    if( function_exists( 'add_meta_box' ) ) {
      add_meta_box( 'new-meta-boxes', ucfirst( $key ) . ' Information', 'display_meta_box', 'testimonial', 'normal', 'high' );
      }
}
 
function display_meta_box() {
   global $post, $meta_boxes, $key;
?>
 
<div class="form-wrap">
 
<?php
wp_nonce_field( plugin_basename( __FILE__ ), $key . '_wpnonce', false, true );
 
foreach($meta_boxes as $meta_box) {
$data = get_post_meta($post->ID, $key, true);
?>
 
<div class="form-field form-required">
<label for="<?php echo $meta_box[ 'name' ]; ?>"><?php echo $meta_box[ 'title' ]; ?></label>
<input type="text" name="<?php echo $meta_box[ 'name' ]; ?>" value="<?php echo htmlspecialchars( $data[ $meta_box[ 'name' ] ] ); ?>" />
<p><?php echo $meta_box[ 'description' ]; ?></p>
</div>
 
<?php } ?>
 
</div>
<?php
}
 
function wpb_save_meta_box( $post_id ) {
global $post, $meta_boxes, $key;
 
foreach( $meta_boxes as $meta_box ) {
$data[ $meta_box[ 'name' ] ] = $_POST[ $meta_box[ 'name' ] ];
}
 
if ( !wp_verify_nonce( $_POST[ $key . '_wpnonce' ], plugin_basename(__FILE__) ) )
return $post_id;
 
if ( !current_user_can( 'edit_post', $post_id ))
return $post_id;
 
update_post_meta( $post_id, $key, $data );
}
 
add_action( 'admin_menu', 'add_testimonials_metabox' );
add_action( 'save_post', 'wpb_save_meta_box' );

// end of testimonials

?>