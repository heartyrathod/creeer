<?php




// css
function careercraaft_enqueue_scripts()
{
  wp_register_style('cc_home_css', get_stylesheet_directory_uri() . '/assets/css/main.min.css?' . time(), array(), '1');
  wp_enqueue_style('cc_home_css');

  if (is_page('home')) {
  } else if (is_page('about-us')) {

    wp_register_style('cc_home_css', get_stylesheet_directory_uri() . '/assets/css/main.min.css?' . time(), array(), '1');
    wp_enqueue_style('cc_home_css');

    wp_register_style('cc_fany_css', get_stylesheet_directory_uri() . '/assets/css/fancyapps.min.css?' . time(), array(), '1');
    wp_enqueue_style('cc_fany_css');
  } else if (is_page('gallery')) {
    wp_register_style('cc_fany_css', get_stylesheet_directory_uri() . '/assets/css/fancyapps.min.css?' . time(), array(), '1');
    wp_enqueue_style('cc_fany_css');
  } else if ((is_single() && 'gallery' == get_post_type())) {

    wp_register_style('cc_fany_css', get_stylesheet_directory_uri() . '/assets/css/fancyapps.min.css?' . time(), array(), '1');
    wp_enqueue_style('cc_fany_css');
  } else {
    // wp_register_style('cc_fany_css', get_stylesheet_directory_uri() . '/assets/css/fancyapps.min.css?' . time(), array(), '1');
    // wp_enqueue_style('cc_fany_css');
  }
}
add_action('wp_enqueue_scripts', 'careercraaft_enqueue_scripts');

// unhooks
function unhook_parent_style()
{
  wp_dequeue_style('twenty-twenty-one-style');
  wp_deregister_style('twenty-twenty-one-style');

  wp_dequeue_style('twenty-twenty-one-print-style');
  wp_deregister_style('twenty-twenty-one-print-style');
  wp_dequeue_style('parent-style');
  wp_deregister_style('parent-style');
}
add_action('wp_enqueue_scripts', 'unhook_parent_style', 20);

function project_dequeue_unnecessary_scripts()
{
  wp_dequeue_script('twenty-twenty-one-primary-navigation-script');
  wp_deregister_script('twenty-twenty-one-primary-navigation-script');

  wp_dequeue_script('twenty-twenty-one-responsive-embeds-script');
  wp_deregister_script('twenty-twenty-one-responsive-embeds-script');
}
add_action('wp_print_scripts', 'project_dequeue_unnecessary_scripts');






add_action('wp_enqueue_scripts', 'career_crft_script');
function career_crft_script()
{
  wp_register_script("script-popper", 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', '', '', true);
  wp_enqueue_script('script-popper');

  wp_register_script("script-bs", 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js', '', '', true);
  wp_enqueue_script('script-bs');


  wp_register_script("jquery-validate", 'https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js', '', '', true);
  wp_enqueue_script('jquery-validate');

  wp_register_script("script-con", get_stylesheet_directory_uri() . '/assets/scripts/contact.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('script-con');
  wp_localize_script('script-con', 'customAjax', array('ajaxurl' => admin_url('admin-ajax.php')));

  wp_register_script("script-aos", get_stylesheet_directory_uri() . '/assets/scripts/vendors/aos/aos.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('script-aos');

  wp_register_script("script-service", get_stylesheet_directory_uri() . '/assets/scripts/service.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('script-service');



  if (is_page('home')) {
    wp_register_script("gallery_script-owl", get_stylesheet_directory_uri() . '/assets/scripts/vendors/owl-carousel/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('gallery_script-owl');
  } else if (is_page('gallery')) {

    wp_register_script("gallery_script-owl", get_stylesheet_directory_uri() . '/assets/scripts/vendors/owl-carousel/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('gallery_script-owl');

    wp_register_script("gallery_script-fan", get_stylesheet_directory_uri() . '/assets/scripts/vendors/fancyapps/fancyapps.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('gallery_script-fan');
  } else if ((is_single() && 'gallery' == get_post_type())) {

    wp_register_script("gallery_script-fan", get_stylesheet_directory_uri() . '/assets/scripts/vendors/fancyapps/fancyapps.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('gallery_script-fan');
  }



  // wp_register_script("gallery_script_style", get_stylesheet_directory_uri() . '/assets/scripts/gallary.js', array('jquery'), '1.0.0', true);
  //   wp_enqueue_script('gallery_script_style');
}

// Contact List
add_action('wp_ajax_c_contact_form', 'c_contact_form');
add_action('wp_ajax_nopriv_c_contact_form', 'c_contact_form');
function c_contact_form()
{
  global $wpdb;
  $table = 'wp_contact_list';

  $c_name = $_POST['c_name'];
  $c_email = $_POST['c_email'];
  $c_sub = $_POST['c_sub'];
  $c_msg = $_POST['c_msg'];

  $sql = "INSERT INTO $table (c_name, c_email, c_sub, c_msg)
        VALUES ('$c_name', '$c_email', '$c_sub', '$c_msg')";

  // $sql = "INSERT INTO $table (cud_name, cud_email,country_code,cud_phone,cud_services,cud_mesaage,created_at) VALUES ('$cud_name','$cud_email','$code','$cud_phone','$cud_services','$cud_mesaage',CURRENT_TIMESTAMP)";

  $result = $wpdb->query($sql);



  $sms = '<table width="600" cellspacing="0" cellpadding="0" style="background-color: #F6F9FC;padding: 20px; font-family: Arial, Helvetica,Calibri, sans-serif">
        <tbody>
            <tr>
                <td>
                    <table width="100%" cellspacing="0" cellpadding="0" style="background-color: #fff;box-shadow: 0 0 5px rgba(0,0,0,0.07);border-radius: 5px;">
                        <tr>
                            <th colspan="3" style="background-color:rgba(18,17,74,0.03); color: #12114A; font-size: 24px;text-align: left;padding: 20px;">Contact Us</th>
                        </tr>
                        <tr>
                            <td style="padding: 10px;">
                                <table width="100%" cellspacing="10" cellpadding="0">
                                    <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Name</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $c_name . '</span>
                                        </td>
                                      </tr>
                                      <tr>
                                      <td width="50%">
                                          <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Email</label>
                                          <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $c_email . '</span>
                                      </td>
                                  </tr>
                                        <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Subject</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $c_sub . '</span>
                                        </td>
                                    </tr>
                                       <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Message</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $c_msg . '</span>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
		</table>';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From:  <test15.igex@gmail.com>' . "\r\n";
  //info@igexsolutions.com
  $subject = 'Contact Us';
  $admin_email = get_option('admin_email');

  if (wp_mail($admin_email, $subject, $sms, $headers)) {
    echo json_encode(array('result' => true, 'email' => true, 'captcha_match' => true));
    die();
  } else {
    echo json_encode(array('result' => false, 'email' => false, 'captcha_match' => true));
    die();
  }
  die();
}


// body class action hook
function add_custom_body_classes($classes)
{
  if ((is_single() && 'countrie' == get_post_type())) {
    $classes[] = 'page-template-countries';
  } else if ((is_single() && 'post' == get_post_type())) {
    $classes[] = 'page-template-countries';
  } else if ((is_single() && 'gallery' == get_post_type())) {
    $classes[] = 'page-template-countries';
  }
  return $classes;
}

add_action('body_class', 'add_custom_body_classes');



function my_acf_init()
{

  acf_update_setting('google_api_key', 'AIzaSyDNsicAsP6-VuGtAb1O9riI3oc_NOb7IOU');
}

add_action('acf/init', 'my_acf_init');




if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'  => 'Theme Options',
    'menu_title'  => 'Theme Options',
    'menu_slug'   => 'theme-options',
    'capability'  => 'edit_posts',
    'redirect'    => true
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Header Option',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-options',
    'menu_slug'   => 'header-options',
  ));
}





add_action('wp_ajax_c_Inquiry_form', 'c_Inquiry_form');
add_action('wp_ajax_nopriv_c_Inquiry_form', 'c_Inquiry_form');
function c_Inquiry_form()
{
  global $wpdb;
  $table = 'wp_Inquiry_list';

  $c_name = $_POST['c_name'];
  $c_email = $_POST['c_email'];
  $c_phone = $_POST['c_phone'];
  $c_applying = $_POST['c_applying'];
  $c_upload = $_POST['c_upload'];
  $mail_attachment = array();
  $mail_attachment_file = array();
  if ($_FILES) {
    if (!function_exists('wp_handle_upload')) require_once("../../../wp-admin/includes/file.php");
    $avatar = wp_handle_upload($_FILES['c_upload'], array('test_form' => false));
    $mail_attachment = $avatar['url'];
    $mail_attachment_file = $avatar['file'];
    // $mail_attachment = array($avatar['file']);
  }
  // echo json_encode(array('result' => true, 'email' => true, 'captcha_match' => true, 'mail_attachment' => $mail_attachment));
  // exit;

  $sql = "INSERT INTO $table (c_name, c_email, c_phone, c_applying, c_upload)
        VALUES ('$c_name', '$c_email', '$c_phone','$c_applying', '$mail_attachment')";

  $result = $wpdb->query($sql);



  $sms = '<table width="600" cellspacing="0" cellpadding="0" style="background-color: #F6F9FC;padding: 20px; font-family: Arial, Helvetica,Calibri, sans-serif">
        <tbody>
            <tr>
                <td>
                    <table width="100%" cellspacing="0" cellpadding="0" style="background-color: #fff;box-shadow: 0 0 5px rgba(0,0,0,0.07);border-radius: 5px;">
                        <tr>
                            <th colspan="3" style="background-color:rgba(18,17,74,0.03); color: #12114A; font-size: 24px;text-align: left;padding: 20px;">Passport Application</th>
                        </tr>
                        <tr>
                            <td style="padding: 10px;">
                                <table width="100%" cellspacing="10" cellpadding="0">
                                    <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Name</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $c_name . '</span>
                                        </td>
                                      </tr>
                                      <tr>
                                      <td width="50%">
                                          <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Email</label>
                                          <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $c_email . '</span>
                                      </td>
                                  </tr>
                                        <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
Phone number</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $c_phone . '</span>
                                        </td>
                                    </tr>
                                       <tr>
                                        <td width="50%">
                                            <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Applying for</label>
                                            <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $c_applying . '</span>
                                        </td>
                                    </tr>
                                    </tr>

                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
		</table>';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From:  <test14.igex@gmail.com>' . "\r\n";

  //info@igexsolutions.com
  $subject = 'Inquiry';



  $admin_email = get_option('admin_email');


  if (wp_mail($admin_email, $subject, $sms, $headers, $mail_attachment_file)) {
    echo json_encode(array('result' => true, 'email' => true, 'captcha_match' => true));
    die();
  } else {
    echo json_encode(array('result' => false, 'email' => false, 'captcha_match' => true));
    die();
  }
  die();
}
