<?php
function mycustomtheme_enqueue_styles() {
    wp_enqueue_style(
        'mycustomtheme-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'mycustomtheme_enqueue_styles');
/* Enquiry Form */
function rr_create_enquiry_post_type(){

register_post_type('rr_enquiry', array(

'labels' => array(
'name' => 'Enquiries',
'singular_name' => 'Enquiry'
),

'public' => false,
'show_ui' => true,
'menu_icon' => 'dashicons-email',
'supports' => array('title','editor')

));

}

add_action('init','rr_create_enquiry_post_type');
function rr_load_ajax_script(){

wp_enqueue_script('rr-ajax', get_template_directory_uri().'/ajax.js', array(), null, true);

wp_localize_script('rr-ajax','rr_ajax',array(
'ajax_url' => admin_url('admin-ajax.php')
));

}

add_action('wp_enqueue_scripts','rr_load_ajax_script');
function rr_save_enquiry(){

$name = sanitize_text_field($_POST['client_name']);
$phone = sanitize_text_field($_POST['client_phone']);

if(empty($name) || empty($phone)){
wp_send_json_error();
}

/* Save to WP */

$post_id = wp_insert_post(array(
'post_title' => $name,
'post_content' => 'Phone: '.$phone,
'post_type' => 'rr_enquiry',
'post_status' => 'publish'
));

/* Email Notification */

$admin_email = get_option('sharmapiyush1342@gmail.com');

wp_mail(
$admin_email,
"New Enquiry Received",
"Name: $name \nPhone: $phone"
);

wp_send_json_success();

}

add_action('wp_ajax_save_enquiry','rr_save_enquiry');
add_action('wp_ajax_nopriv_save_enquiry','rr_save_enquiry');
function rr_enquiry_columns($columns){

$columns['phone'] = 'Phone';

return $columns;

}

add_filter('manage_rr_enquiry_posts_columns','rr_enquiry_columns');


function rr_enquiry_column_data($column,$post_id){

if($column == 'phone'){

$content = get_post_field('post_content',$post_id);
echo $content;

}

}

add_action('manage_rr_enquiry_posts_custom_column','rr_enquiry_column_data',10,2);
/* Complain For */
function rr_create_complaint_post_type(){

register_post_type('rr_complaint', array(
'labels' => array(
'name' => 'Complaints',
'singular_name' => 'Complaint'
),
'public' => false,
'show_ui' => true,
'menu_icon' => 'dashicons-warning',
'supports' => array('title','editor')
));

}

add_action('init','rr_create_complaint_post_type');
function rr_save_complaint_data(){

if(isset($_POST['submit_complaint'])){

$name = sanitize_text_field($_POST['complaint_name']);
$phone = sanitize_text_field($_POST['complaint_phone']);
$message = sanitize_textarea_field($_POST['complaint_message']);

/* Save complaint in WordPress */

wp_insert_post(array(
'post_title' => $name,
'post_content' => "Phone: ".$phone."\n\nComplaint: ".$message,
'post_type' => 'rr_complaint',
'post_status' => 'publish'
));

/* Send email notification */

$admin_email = get_option('sharmapiyush1342@gmail.com');

$subject = "New Complaint Received";

$email_message = "A new complaint has been submitted.\n\n";
$email_message .= "Name: ".$name."\n";
$email_message .= "Phone: ".$phone."\n";
$email_message .= "Complaint: ".$message."\n";

wp_mail($admin_email, $subject, $email_message);

}

}

add_action('init','rr_save_complaint_data');
/* contact Backend */
function rr_save_contact_data(){

if(isset($_POST['submit_contact'])){

$name = sanitize_text_field($_POST['contact_name']);
$phone = sanitize_text_field($_POST['contact_phone']);
$email = sanitize_email($_POST['contact_email']);
$message = sanitize_textarea_field($_POST['contact_message']);

wp_insert_post(array(
'post_title' => $name,
'post_content' => "Phone: ".$phone."\nEmail: ".$email."\n\nMessage:\n".$message,
'post_type' => 'rr_contact',
'post_status' => 'publish'
));

$admin_email = get_option('admin_email');

$subject = "New Contact Message";

$body = "New message received:\n\n";
$body .= "Name: $name\n";
$body .= "Phone: $phone\n";
$body .= "Email: $email\n";
$body .= "Message: $message\n";

wp_mail($admin_email,$subject,$body);

}

}

add_action('init','rr_save_contact_data');
function rr_create_contact_post_type(){

register_post_type('rr_contact', array(
'labels' => array(
'name' => 'Contact Messages',
'singular_name' => 'Contact Message'
),
'public' => false,
'show_ui' => true,
'menu_icon' => 'dashicons-email',
'supports' => array('title','editor')
));

}

add_action('init','rr_create_contact_post_type');
