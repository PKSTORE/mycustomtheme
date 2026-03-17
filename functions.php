<?php
function mycustomtheme_enqueue_styles()
{
    wp_enqueue_style(
        'mycustomtheme-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'mycustomtheme_enqueue_styles');
// /* Enquiry Form */
// function rr_create_enquiry_post_type()
// {

//     register_post_type('rr_enquiry', array(

//         'labels' => array(
//             'name' => 'Enquiries',
//             'singular_name' => 'Enquiry'
//         ),

//         'public' => false,
//         'show_ui' => true,
//         'menu_icon' => 'dashicons-email',
//         'supports' => array('title', 'editor')

//     ));

// }

// add_action('init', 'rr_create_enquiry_post_type');
// function rr_load_ajax_script()
// {

//     wp_enqueue_script('rr-ajax', get_template_directory_uri() . '/ajax.js', array(), null, true);

//     wp_localize_script('rr-ajax', 'rr_ajax', array(
//         'ajax_url' => admin_url('admin-ajax.php')
//     ));

// }

// add_action('wp_enqueue_scripts', 'rr_load_ajax_script');
// function rr_save_enquiry()
// {

//     $name = sanitize_text_field($_POST['client_name']);
//     $phone = sanitize_text_field($_POST['client_phone']);

//     if (empty($name) || empty($phone)) {
//         wp_send_json_error();
//     }

//     /* Save to WP */

//     $post_id = wp_insert_post(array(
//         'post_title' => $name,
//         'post_content' => 'Phone: ' . $phone,
//         'post_type' => 'rr_enquiry',
//         'post_status' => 'publish'
//     ));

//     /* Email Notification */

//     $admin_email = get_option('sharmapiyush1342@gmail.com');

//     wp_mail(
//         $admin_email,
//         "New Enquiry Received",
//         "Name: $name \nPhone: $phone"
//     );

//     wp_send_json_success();

// }

// add_action('wp_ajax_save_enquiry', 'rr_save_enquiry');
// add_action('wp_ajax_nopriv_save_enquiry', 'rr_save_enquiry');
// function rr_enquiry_columns($columns)
// {

//     $columns['phone'] = 'Phone';

//     return $columns;

// }

// add_filter('manage_rr_enquiry_posts_columns', 'rr_enquiry_columns');


// function rr_enquiry_column_data($column, $post_id)
// {

//     if ($column == 'phone') {

//         $content = get_post_field('post_content', $post_id);
//         echo $content;

//     }

// }

// add_action('manage_rr_enquiry_posts_custom_column', 'rr_enquiry_column_data', 10, 2);
// /* CONTACT MESSAGES POST TYPE */

// function rr_create_contact_post_type()
// {

//     register_post_type('rr_contact', array(

//         'labels' => array(
//             'name' => 'Contact Messages',
//             'singular_name' => 'Contact Message'
//         ),

//         'public' => false,
//         'show_ui' => true,
//         'menu_icon' => 'dashicons-email',
//         'supports' => array('title', 'editor')

//     ));

// }

// add_action('init', 'rr_create_contact_post_type');



// /* SAVE CONTACT FORM DATA */

// function rr_save_contact_data()
// {

//     if (isset($_POST['submit_contact'])) {

//         $name = sanitize_text_field($_POST['contact_name']);
//         $phone = sanitize_text_field($_POST['contact_phone']);
//         $email = sanitize_email($_POST['contact_email']);
//         $message = sanitize_textarea_field($_POST['contact_message']);


//         /* Save in WordPress Dashboard */

//         wp_insert_post(array(

//             'post_title' => $name,

//             'post_content' =>
//                 "Phone: " . $phone . "\n" .
//                 "Email: " . $email . "\n\n" .
//                 "Message:\n" . $message,

//             'post_type' => 'rr_contact',

//             'post_status' => 'publish'

//         ));


//         /* Send Email Notification */

//         $admin_email = get_option('admin_email');

//         $subject = "New Contact Message - RR Computers";

//         $body = "You received a new contact request.\n\n";
//         $body .= "Name: " . $name . "\n";
//         $body .= "Phone: " . $phone . "\n";
//         $body .= "Email: " . $email . "\n\n";
//         $body .= "Message:\n" . $message . "\n";

//         wp_mail($admin_email, $subject, $body);

//     }

// }

// add_action('init', 'rr_save_contact_data');
// /* CREATE COMPLAINT POST TYPE */

// function rr_create_complaint_post_type()
// {

//     register_post_type('rr_complaint', array(

//         'labels' => array(
//             'name' => 'Complaints',
//             'singular_name' => 'Complaint'
//         ),

//         'public' => false,
//         'show_ui' => true,
//         'menu_icon' => 'dashicons-warning',
//         'supports' => array('title', 'editor')

//     ));

// }

// add_action('init', 'rr_create_complaint_post_type');



// /* SAVE COMPLAINT DATA */

// function rr_save_complaint_data()
// {

//     if (isset($_POST['submit_complaint'])) {

//         $name = sanitize_text_field($_POST['complaint_name']);
//         $phone = sanitize_text_field($_POST['complaint_phone']);
//         $message = sanitize_textarea_field($_POST['complaint_message']);


//         /* Save complaint in dashboard */

//         wp_insert_post(array(

//             'post_title' => $name,

//             'post_content' =>
//                 "Phone: " . $phone . "\n\n" .
//                 "Complaint:\n" . $message,

//             'post_type' => 'rr_complaint',

//             'post_status' => 'publish'

//         ));


//         /* Send email notification */

//         $admin_email = get_option('admin_email');

//         $subject = "New Complaint Submitted - RR Computers";

//         $body = "A new complaint has been submitted.\n\n";
//         $body .= "Name: " . $name . "\n";
//         $body .= "Phone: " . $phone . "\n\n";
//         $body .= "Complaint:\n" . $message . "\n";

//         wp_mail($admin_email, $subject, $body);

//     }

// }

// add_action('init', 'rr_save_complaint_data');
// Contact Form 
function load_ajax_script() {
    wp_enqueue_script('ajax-script', get_template_directory_uri() . '/ajax.js', array(), null, true);

    wp_localize_script('ajax-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'load_ajax_script');
add_action('wp_ajax_handle_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_handle_contact_form', 'handle_contact_form');

function handle_contact_form() {

    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    if (!$name || !$phone || !$email || !$message) {
        echo "All fields are required!";
        wp_die();
    }

    if (!is_email($email)) {
        echo "Invalid email!";
        wp_die();
    }

    // Email to YOU
    $to = get_option('admin_email');
    $subject = "New Contact Request";

    $body = "
    Name: $name\n
    Phone: $phone\n
    Email: $email\n
    Message: $message
    ";

    wp_mail($to, $subject, $body);

    // Auto reply to USER
    $user_subject = "Thanks for contacting us";
    $user_body = "Hi $name,\n\nWe received your message. We'll contact you soon.";

    wp_mail($email, $user_subject, $user_body);

    echo "Message sent successfully!";
    wp_die();
}