<?php

/**
 * .
 * @link https://Career Craaft/
 * @package WordPress
 * @subpackage Career Craaft
 * @since Career Craaft 1.0.0
 */

get_header();

?>

<main>
  <header class="entry-header pt-xxl-20 pt-xl-20 pt-lg-18 pt-15 pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-3 bg-primary-100 position-relative overflow-hidden">
    <div class="cc-page-title-img position-absolute start-0 top-0 z-0 w-100 h-100">
      <div class="cc-page-title-overly w-100 h-100 position-absolute start-0 top-0 z-1"></div>
      <?php
      $image = get_field('services_bg_img');
      if (!empty($image)) :
      ?>
        <img src="<?php echo esc_url($image['url']); ?>" width="1894" height="386" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid  w-100 h-100 object-fit-cover">
      <?php endif ?>
    </div>
    <div class="container position-relative z-1 d-flex flex-column align-items-start gap-2">
      <h1 class="text-white fw-bold display-5"><?php echo $post->post_title; ?></h1>
      <?php echo do_shortcode('[rank_math_breadcrumb]') ?>
    </div>
  </header>
  <div class="entry-content mb-xxl-5 mb-xl-5 mb-lg-5 mb-md-5 mb-4 mt-0">
    <div class="container">
      <div class="d-flex flex-column align-items-start gap-xxl-5 gap-xl-5 gap-lg-5 gap-sm-4 gap-4">
        <div class="pt-xxl-5 pt-xl-5 pt-lg-5 pt-md-4 pt-3 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-4 ps-3 border-5 border-start border-primary">
          <?php echo get_field('services_content'); ?>
        </div>
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
          <div class="row row-gap-4">
            <?php
            $country_delay = 50;
            foreach ($services as $service) {
              $image = wp_get_attachment_image_src(get_post_thumbnail_id($service->ID), 'single-post-thumbnail');
            ?>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" data-aos="zoom-in" data-aos-delay="<?php echo $country_delay; ?>" data-aos-duration="400">
                <a href="<?php echo get_permalink($service->ID); ?>" class="cc-services-item p-xxl-4 p-xl-4 p-lg-4 p-md-4 p-sm-3 p-3 d-flex flex-nowrap gap-3 align-items-center border border-2 border-primary border-opacity-20 rounded-3 h-100" title="Passport Application">
                  <span class="bg-primary-100 p-3 rounded-3 d-flex">
                    <i class="<?php echo get_field('our_services_icons', $service->ID); ?> d-flex fs-2 text-primary"></i>
                  </span>
                  <h3 class="m-0 fw-medium h6 flex-grow-1 text-body fw-semibold"><?php echo $service->post_title; ?></h3>
                </a>
              </div>
            <?php $country_delay = $country_delay + 50;
            } ?>

          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</main>






<?php
get_footer();
?>