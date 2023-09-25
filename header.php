<?php

/**
 * The header.

 * @package WordPress
 * @subpackage Career Craaft
 * @since Career Craaft 1.0.0
 */


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Career Craaft</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="assets/css/main.min.css"> -->
  <!-- <link rel="shortcut icon" href="assets/media/favicon.png" type="image/x-icon"> -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <header class="cc-header w-100 position-fixed top-0 start-0 d-flex flex-row flex-wrap justify-content-between align-items-stretch z-3 px-3" id="cc-header">
    <div class="cc-logo d-flex flex-wrap flex-row align-items-center h-100">
      <a href="<?php echo site_url('home'); ?>" title="Career Craaft">
        <?php echo get_field('header_logo', 'option'); ?>
      </a>
    </div>
    <?php
    echo wp_nav_menu(array(
      'container' => '',
      'menu'        => 'header-menu',
      'menu_id'     => '',
      'menu_class'  => 'cc-nav d-xxl-flex d-xl-flex d-lg-flex d-md-none d-sm-none d-none flex-row flex-wrap justify-content-center align-items-stretch w-auto m-0 gap-xxl-5 gap-xl-3 gap-lg-2',
      'fallback_cb' => false,
      'depth'       => 0,
    ));
    ?>
    <div class="cc-actions d-flex flex-row flex-wrap align-items-center gap-3">
      <button type="button" class="cc-book btn btn-secondary d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-none d-none" data-bs-toggle="modal" data-bs-target="#cc-quickInquiry" title="Quick inquiry">Quick inquiry</button>
      <button class="cc-menu-ic border-0 bg-transparent d-xxl-none d-xl-none d-lg-none d-md-flex d-sm-flex d-flex align-items-center " type="button" data-bs-toggle="offcanvas" data-bs-target="#cc-drawer" aria-controls="cc-drawer">
        <i class="cc-ic-menu fs-5"></i>
      </button>
    </div>
  </header>