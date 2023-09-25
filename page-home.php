<?php

/**
 * The header.

 * @package WordPress
 * @subpackage Career Craaft
 * @since Career Craaft 1.0 1.0
 */

get_header();
?>


<main class="overflow-hidden pb-1">
  <section class="cc-banner position-relative" id="cc-banner">
    <?php echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]'); ?>

  </section>
  <section class="cc-after-banner py-xxl-4 py-xl-4 py-3">
    <div class="container-fluid">
      <div class="row row-gap-3">
        <?php
        if (have_rows('after_banner_r')) : ?>
          <?php while (have_rows('after_banner_r')) : the_row();
            $after_banner_icon = get_sub_field('after_banner_icon');
            $after_banner_content = get_sub_field('after_banner_content');
          ?>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="cc-after-banner-item d-flex flex-nowrap align-items-center">
                <div class="cc-after-banner-content py-xxl-3 py-xl-3 py-lg-2 py-md-2 py-0 d-flex flex-nowrap gap-3 align-items-center flex-grow-1">
                  <span class="bg-primary-300 p-3 rounded-2 d-flex">
                    <i class="<?php echo esc_html($after_banner_icon);  ?> d-flex fs-2 text-primary-800"></i>
                  </span>
                  <h2 class="m-0 text-white fw-medium h6 flex-grow-1"><?php echo esc_html($after_banner_content);  ?></h2>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </section>
  <section class="cc-why mt-xxl-10 mt-xl-8 mt-lg-6 mt-4 d-inline-block w-100">
    <div class="container">
      <div class="row g-xxl-4 g-xl-4 g-3 flex-xxl-row flex-xl-row flex-lg-row flex-column-reverse">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class=" d-flex flex-column justify-content-center align-items-start gap-xxl-4 gap-xl-4 gap-lg-4 gap-3 h-100" data-aos="fade-right">
            <div class="cc-head d-flex flex-column-reverse w-100 gap-2">
              <h2 class=""><?php echo get_field('why_choose_title'); ?></h2>
              <h3 class="text-primary h6 fw-normal"><?php echo get_field('why_choose_first_title'); ?></h3>
            </div>
            <p class="m-0"><?php echo get_field('why_choose_content'); ?></p>
            <?php
            if (have_rows('why_choose_c')) : ?>
              <?php while (have_rows('why_choose_c')) : the_row();
                $choose_title = get_sub_field('choose_title');
                $choose_contents = get_sub_field('choose_contents');
              ?>
                <ul class="d-flex flex-column gap-3 bullet-circle m-0">
                  <li>
                    <h4 class="fw-bold h6 mb-2"><?php echo esc_html($choose_title);  ?></h4>
                    <p><?php echo esc_html($choose_contents);  ?></p>
                  </li>

                </ul>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php
            $link = get_field('choose_button');
            if ($link) :
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_blank'; ?>
              <a href="<?php echo esc_url($link_url); ?>" rel="noopener" class="cc-book btn btn-primary text-white d-flex align-items-center gap-2" title="<?php echo esc_attr($link_title);  ?>" alt="<?php echo esc_attr($link_title);  ?>" data-aos="fade-up" data-aos-offset="100" data-aos-duration="400">Download brochure</a>
            <?php endif;                 ?>

          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="d-flex flex-column justify-content-center align-items-start h-100 gap-3" data-aos="fade-left">
            <div class="w-100 h-auto d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-row flex-sm-row flex-column justify-content-between flex-xxl-nowrap flex-xl-nowrap flex-lg-nowrap flex-md-nowrap flex-sm-nowrap flex-wrap align-items-center gap-xxl-5 gap-xl-5 gap-lg-4 gap-3 position-relative z-1">
              <div class="h-100 position-relative d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-flex d-none justify-content-center align-items-start w-50">
                <?php
                $image = get_field('choose_img');
                if (!empty($image)) : ?>
                  <img src="<?php echo esc_url($image['url']); ?>" width="180" height="180" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid z-1 position-relative">
                <?php endif; ?>
                <img src=" <?php echo get_stylesheet_directory_uri(); ?>/assets/media/about-shape.webp" width="217" height="173" alt="Career Craaft" class="position-absolute start-10 bottom-40 z-0 w-100 h-auto d-xxl-block d-xl-block d-lg-block d-none">
              </div>
              <?php
              $file = get_field('choose_video');
              if ($file) :
                //echo "<pre>"; print_r($file);
              ?>
                <div class="d-flex w-100">
                  <?php
                  $imagep = get_field('choose_video_poster');
                  if (!empty($image)) :
                  ?>
                    <video width="524" height="295" controls preload="auto" autoplay loop playsinline poster="<?php echo esc_url($imagep['url']); ?>" class="w-100 h-auto">
                      <source src="<?= $file['url']; ?>" type="video/mp4">
                      <!-- <source src="<?php echo esc_url($imagep['url']); ?>" type="video/ogg"> -->
                    </video>
                  <?php endif; ?>

                </div>
              <?php endif; ?>
            </div>
            <div class="w-100 h-auto d-flex justify-content-between flex-xxl-nowrap flex-xl-nowrap flex-lg-nowrap flex-md-nowrap flex-wrap align-items-start gap-3 mt-xxl-n5 mt-xl-n5 mt-lg-n4  mt-md-0 position-relative z-0">
              <div class="cc-why-img h-100 position-relative flex-grow-1 d-flex justify-content-start align-items-start">
                <?php
                $image = get_field('choose_sml_img');
                if (!empty($image)) : ?>
                  <img src="<?php echo esc_url($image['url']); ?>" width="480" height="293" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid z-1 position-relative rounded-3">
                <?php endif; ?>
              </div>
              <div class="cc-exp position-absolute start-50 bottom-40 z-1 border-start border-5 border-primary p-4 shadow bg-white" data-aos="fade-right" data-aos-offset="100" data-aos-duration="200">
                <h5 class="text-primary h3 fw-bold"><?php echo get_field('choose_years'); ?>+</h5>
                <p><?php echo get_field('choose_experience'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cc-about mt-xxl-10 mt-xl-8 mt-lg-6 mt-5 d-inline-block w-100">
    <div class="container">
      <div class="row g-xxl-4 g-xl-4 g-3">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex flex-column justify-content-center align-items-start ">
          <div class="w-100 h-auto grid align-items-center gap-0">
            <div class="g-col-6 text-end pe-xxl-4 pe-xl-4 pe-lg-4 pe-md-4 pe-2" data-aos="fade-right">
              <h2 class="text-primary h3 fw-bold"><?php echo get_field('know_about_network_n'); ?></h2>
              <p><?php echo get_field('know_about_'); ?></p>
            </div>
            <div class="g-col-6 h-100 position-relative flex-grow-1 d-flex justify-content-start align-items-start" data-aos="fade-left">
              <?php
              $image = get_field('know_about_img');
              if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" width="399" height="245" alt="<?php echo esc_attr($image['alt']); ?>" class="w-100 img-fluid z-1 position-relative rounded-end-5 rounded-top-5">
              <?php endif; ?>
            </div>
          </div>
          <div class="w-100 h-auto grid align-items-center gap-0">
            <div class="g-col-6 h-100 position-relative flex-grow-1 d-flex justify-content-start align-items-start" data-aos="fade-right">
              <?php
              $image = get_field('know_about_imag');
              if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" width="399" height="245" alt="<?php echo esc_attr($image['alt']); ?>" class="w-100 img-fluid z-1 position-relative rounded-start-5 rounded-bottom-5">
              <?php endif; ?>
            </div>
            <div class="g-col-6  ps-xl-4 ps-lg-4 ps-md-4 ps-2" data-aos="fade-left">
              <h2 class="text-primary h3 fw-bold"><?php echo get_field('know_about_providers'); ?></h2>
              <p><?php echo get_field('know_about_providers_t_'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex flex-column justify-content-center align-items-start gap-xxl-4 gap-xl-4 gap-lg-4 gap-3">
          <div class="cc-head d-flex flex-column-reverse w-100 gap-2">
            <h2 class=""><?php echo get_field('know_about_title'); ?></h2>
            <h3 class="text-primary h6 fw-normal"><?php echo get_field('know_about_main_title'); ?></h3>
          </div>
          <p class="m-0"><?php echo get_field('know_about_con'); ?></p>
          <?php
          $link = get_field('know_about_button');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_blank'; ?>
            <a href="<?php echo esc_url($link_url); ?>" class="cc-book btn btn-primary text-white d-flex align-items-center gap-2" title="<?php echo esc_attr($link_title);  ?>" alt="<?php echo esc_attr($link_title);  ?>" aria-label="Get to know about us">Read more</a>
          <?php endif;             ?>
        </div>
      </div>
    </div>
  </section>
  <?php
  $args = array(
    'numberposts' => 5,
    'post_type'   => 'countrie',
    'post_status'     => 'publish',
    'order' => 'ASC',
  );
  $countries = get_posts($args);
  if (count($countries) > 0) {
  ?>
    <section class="cc-countries mt-xxl-10 mt-xl-8 mt-lg-6 mt-5 d-inline-block w-100">

      <div class="container">
        <h2 class="w-100 text-center mb-4">Countries we offer Services in</h2>
        <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-2 g-xxl-4 g-xl-4 g-lg-4 g-3 justify-content-center">
          <?php
          $country_delay = 100;
          foreach ($countries as $countrie) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($countrie->ID), 'single-post-thumbnail');
          ?>
            <div class="col" data-aos="zoom-in" data-aos-delay="<?php echo $country_delay; ?>" data-aos-duration="400">
              <div class="cc-countries-item d-flex flex-column align-items-start gap-3">
                <a href="<?php echo get_permalink($countrie->ID); ?>" class="cc-countries-img position-relative overflow-hidden rounded-3 w-100">
                  <img src="<?php echo $image[0]; ?>" width="324" height="220" alt="Australia" class="img-fluid w-100 position-relative z-0">

                  <div class="cc-flag position-absolute end-0 bottom-0 z-1 bg-white p-xxl-3 p-xl-3 p-lg-3 p-md-3 p-sm-3 p-2 rounded-top-5 rounded-end-0">
                    <?php
                    $image = get_field('countries_sec_img', $countrie->ID);
                    if (!empty($image)) :
                    ?>
                      <img src="<?php echo esc_url($image['url']); ?>" width="40" height="40" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid rounded-3 position-relative z-0">
                    <?php endif; ?>
                  </div>
                </a>
                <h2 class="h5 fw-semibold px-xxl-3 px-xl-3 px-lg-3 px-md-2 px-0">
                  <a href="<?php echo get_permalink($countrie->ID); ?>" class="text-body"><?php echo $countrie->post_title; ?></a>
                </h2>
              </div>
            </div>
          <?php $country_delay = $country_delay + 100;
          } ?>


        </div>

      <?php } ?>
      <p class="w-100 text-center mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-4 mt-3">Top Rated By <span class="text-body fw-semibold">Customers & Immigration Firms</span> With 100% Success Rate. <a href="<?php echo site_url('countrie'); ?>" class="link-primary text-decoration-underline link-offset-3 fw-semibold">Explore all country</a></p>
      </div>
    </section>

    <section class="cc-cta mt-xxl-10 mt-xl-8 mt-lg-6 mt-5 d-inline-block w-100 position-relative z-1" data-aos="fade-up" data-aos-duration="500">
      <div class="container">
        <div class="cc-cta-item bg-primary rounded-3 overflow-hidden shadow d-flex align-items-center">
          <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <div class="cc-cta-content d-flex flex-column align-items-start justify-content-center h-100 flex-grow-1 gap-3 px-xxl-5 px-xl-4 px-lg-4 px-3 py-xxl-5 py-xl-4 py-lg-4 py-3">
                <h2 class="text-white"><?php echo get_field('eligibility_title'); ?></h2>
                <p class="text-white mb-0"><?php echo get_field('eligibility_content'); ?></p>
                <?php
                $link = get_field('eligibility_button');
                if ($link) :
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_blank'; ?>
                  <a href="<?php echo esc_url($link_url); ?>" class="btn btn-primary text-white bg-primary-800" title="<?php echo esc_attr($link_title);  ?>" aria-label="<?php echo esc_attr($link_title);  ?>">Contact us</a>
                <?php endif;                 ?>
              </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12 d-xxl-block d-xl-block d-lg-block d-none">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/cta.webp" width="808" height="303" alt="Call to action" class="img-fluid h-100 w-100">
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    $args = array(
      'numberposts' => 6,
      'post_type'   => 'services',
      'post_status'     => 'publish',
      'order' => 'ASC',
    );
    $services = get_posts($args);
    if (count($services) > 0) {
    ?>
      <section class="cc-services pt-12 pb-xxl-6 pb-xl-6 pb-3 bg-primary-subtle position-relative z-0 mt-n12">
        <div class="container">
          <h2 class="my-xxl-5 my-xl-5 my-4 text-center">Our Services</h2>
          <div class="row g-xxl-4 g-xl-4 g-lg-3 g-md-3 g-2">
            <?php
            $country_delay = 50;
            foreach ($services as $service) {
              $image = wp_get_attachment_image_src(get_post_thumbnail_id($service->ID), 'single-post-thumbnail');
            ?>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="<?php echo $country_delay; ?>" data-aos-duration="400">
                <a href="<?php echo get_permalink($service->ID); ?>" class="cc-services-item p-xxl-4 p-xl-4 p-lg-4 p-3 d-flex flex-nowrap gap-3 align-items-center bg-white rounded-3 h-100" title="Passport Application">
                  <span class="bg-primary-100 p-3 rounded-3 d-flex">
                    <i class="<?php echo get_field('our_services_icons', $service->ID); ?> d-flex fs-2 text-primary"></i>
                  </span>
                  <h3 class="m-0 fw-medium h6 flex-grow-1 text-body fw-semibold"><?php echo $service->post_title; ?></h3>
                </a>
              </div>
            <?php $country_delay = $country_delay + 50;
            } ?>


          </div>
        </div>
      <?php } ?>
      </section>

      <section class="cc-testimonials mt-xxl-10 mt-xl-8 mt-lg-4 mt-3 d-inline-block w-100">
        <div class="container">
          <div class="cc-head d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-row flex-column justify-content-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-center align-items-sm-start align-items-start gap-3">
            <h2>Success Stories</h2>
            <a href="<?php echo site_url('success-stories'); ?>" class="cc-book btn btn-primary text-white" title="View all" aria-label="View all Success Stories">View all</a>
          </div>
        </div>
        <?php
        $args = array(
          'numberposts' => 3,
          'post_type'   => 'testimonials',
          'post_status'     => 'publish',
          'order' => 'DESC',
        );
        $testimonials = get_posts($args);
        if (count($testimonials) > 0) {

          //echo "<pre>"; print_r($testimonials);
        ?>
          <div class="cc-testimonials-slide owl-carousel owl-theme mt-xxl-5 mt-xl-5 mt-lg-4 mt-3 border-1 border-top border-bottom border-primary border-opacity-15">
            <?php
            foreach ($testimonials as $testimonials) {
              $image = wp_get_attachment_image_src(get_post_thumbnail_id($testimonials->ID), 'single-post-thumbnail');

            ?>
              <div class="cc-testimonials-slide-item p-xxl-4 p-xl-4 p-lg-4 p-3 d-flex flex-column justify-content-between align-items-start gap-xxl-3 gap-xl-3 gap-lg-3 gap-2 h-100 border-1 border-end border-primary border-opacity-15">
                <div class="d-flex flex-column justify-content-between align-items-start gap-xxl-3 gap-xl-3 gap-lg-3 gap-2">
                  <i class="cc-ic-quote display-3 text-primary-200"></i>
                  <?php echo $testimonials->post_content; ?>
                </div>
                <div class="d-flex gap-3 align-items-center w-100">
                  <div class="cc-testimonials-img rounded-3 overflow-hidden">
                    <img src="<?php echo $image[0]; ?>" width="70" height="70" class="img-fluid" alt="Hetul Patel">
                  </div>
                  <div class="d-flex flex-column gap-2 flex-grow-1">
                    <h3 class="h6 fw-semibold"><?php echo $testimonials->post_excerpt; ?></h3>
                    <div class="cc-star d-flex gap-1">
                      <i class="cc-ic-star text-primary"></i>
                      <i class="cc-ic-star text-primary"></i>
                      <i class="cc-ic-star text-primary"></i>
                      <i class="cc-ic-star text-primary"></i>
                      <i class="cc-ic-star text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </section>
      <section class="cc-ne mt-xxl-10 mt-xl-8 mt-lg-4 mt-3 d-inline-block w-100">
        <div class="container">
          <div class="row g-xxl-4 g-xl-4 g-lg-3 g-3">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="cc-head d-flex flex-xxl-row flex-xl-row flex-lg-row flex-md-row flex-column justify-content-between align-items-xxl-center align-items-xl-center align-items-lg-center align-items-md-center align-items-sm-start align-items-start gap-3 mb-4">
                <h2>Latest News</h2>
                <a href="<?php echo site_url('updates') ?>" class="cc-book btn btn-primary text-white" title="View all" aria-label="View all Latest News">View all</a>
              </div>
              <div class="row row-cols-xxl-2 row-cols-xl-2 row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-4 g-lg-3 g-3">
                <?php
                $args = array(
                  'numberposts' => 2,
                  'post_type'   => 'post',
                  'post_status'     => 'publish',
                  'order' => 'ASC',
                );
                $updates = get_posts($args);
                if (count($updates) > 0) {
                ?>
                  <?php
                  $country_delay = 50;
                  foreach ($updates as $update) {
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($update->ID), 'single-post-thumbnail');
                  ?>
                    <div class="col" data-aos="fade-up" data-aos-delay="<?php echo $country_delay; ?>" data-aos-duration="400">
                      <div class="cc-news-item d-flex flex-column align-items-start gap-3">
                        <a href="<?php echo get_permalink($update->ID) ?>" class="cc-news-img rounded-3 overflow-hidden">
                          <img src="<?php echo $image[0]; ?>" width="525" height="342" alt="ATMC New Zealand" class="img-fluid">
                        </a>
                        <div class="d-flex flex-column gap-1 px-xxl-3 px-xl-3 px-lg-3 px-md-2 px-0 w-100">
                          <h3 class="h6 fw-semibold">
                            <a href="<?php echo get_permalink($update->ID) ?>" class="text-body"><?php echo $update->post_title; ?></a>
                          </h3>
                          <p class="small"><?php echo get_the_date(); ?></p>
                        </div>
                      </div>
                    </div>
                  <?php $country_delay = $country_delay + 50;
                  } ?>
              </div>
            </div>
          <?php } ?>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="cc-events d-flex flex-column align-items-start gap-xxl-4 gap-xl-4 gap-lg-4 gap-3">
              <div class="cc-head d-flex flex-column justify-content-between align-items-start gap-xxl-4 gap-xl-4 gap-lg-4 gap-3">
                <h2 class="mt-1">Upcoming Events</h2>
                <p>Career Craaft Organizing the event to aware about the best study programs around the globe. Join Now.</p>
              </div>
              <div class="cc-events-content d-flex flex-column gap-3 w-100">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                // $post_id = get_the_ID();
                // $start_date = get_post_meta($post_id, 'event_start_date', true);
                $today = date('Y-m-d', strtotime('-1 hours'));
                $args = array(
                  'post_type' => 'tribe_events',
                  // 'posts_per_page' => 1,
                  // 'paged' => $paged,
                  'orderby' => 'meta_value',
                  'order' => 'ASC',
                  'meta_type' => 'DATETIME',
                  'meta_query' => array(
                    array(
                      'key' => '_EventStartDate',
                      'value' => date('Y-m-d H:i:s', current_time('timestamp')),
                      'compare' => '>'
                    )
                  )
                );
                $upcomingEvents = get_posts($args);
                $country_delay = 50;
                foreach ($upcomingEvents as $key => $upcoming_e) {
                  global $wpdb;
                  $query = "SELECT * FROM `wp_tec_events` where post_id=$upcoming_e->ID";
                  $event_details = $wpdb->get_row($query);
                  $e_date = '';
                  $e_s_std = '';
                  $e_e_std = '';
                  $e_mon = '';
                  if (!empty($event_details)) {
                    $e_date = date('d', strtotime($event_details->start_date));
                    $e_s_std = date('F d H:i a', strtotime($event_details->start_date));
                    $e_e_std = date('F d H:i A', strtotime($event_details->end_date));
                    $e_mon = date('M', strtotime($event_details->end_date));
                  }
                  // echo "<pre>"; print_r($event_details); echo "</pre>";
                ?>
                  <a href="<?php echo get_permalink($upcoming_e->ID); ?>" class="cc-events-item grid gap-3" data-aos="fade-up" data-aos-delay="<?php echo $country_delay; ?>" data-aos-duration="400">
                    <div class="g-col-3">
                      <div class="cc-date bg-secondary bg-opacity-5 px-3 py-3 rounded-3 d-flex flex-column align-items-center text-center">
                        <h3 class="text-muted"><?= $e_date; ?></h3>
                        <p class="text-muted text-uppercase"><?php echo $e_mon; ?></p>
                      </div>
                    </div>
                    <div class="g-col-9">
                      <div class="cc-content d-flex flex-column align-items-start justify-content-center h-100 gap-2">
                        <h3 class="text-secondary h6 fw-semibold"><?php echo $upcoming_e->post_title; ?></h3>
                        <p class="small"><?php echo $e_s_std; ?> - <?php echo $e_e_std; ?></p>
                      </div>
                    </div>
                  </a>
                <?php $country_delay = $country_delay + 50;
                } ?>
              </div>
              <a href="<?php echo site_url('events') ?>" title="View all Events" aria-label="View all Events" class="link-primary text-decoration-underline link-offset-3" data-aos="fade-up" data-aos-delay="150" data-aos-duration="400">View all Events</a>
            </div>
          </div>
          </div>
        </div>
      </section>
</main>




<?php
get_footer();
?>