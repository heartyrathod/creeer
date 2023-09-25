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
      $image = get_field('countries_bg_image');
      if (!empty($image)) :
      ?>
        <img src="<?php echo esc_url($image['url']); ?>" width="1920" height="400" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid  w-100 h-100 object-fit-cover">
      <?php endif ?>
    </div>
    <div class="container position-relative z-1 d-flex flex-column align-items-start gap-2">
      <h1 class="text-white fw-bold display-5"><?php echo $post->post_title; ?></h1>
      <?php echo do_shortcode('[rank_math_breadcrumb]') ?>
    </div>
  </header>
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
    <div class="entry-content my-xxl-5 my-xl-5 my-lg-5 my-md-5 my-sm-4 my-4">
      <div class="container">
        <div class="d-flex flex-column align-items-start gap-xxl-5 gap-xl-5 gap-lg-5 gap-sm-4 gap-4">
          <div class="">
            <?php echo $post->post_content; ?>
          </div>
          <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-5 row-cols-md-3 row-cols-sm-1 row-cols-1 gap-xxl-0 gap-xl-0 gap-lg-0 gap-md-0 gap-sm-3 gap-3">
            <?php
            $country_delay = 100;
            foreach ($countries as $countrie) {
              $image = wp_get_attachment_image_src(get_post_thumbnail_id($countrie->ID), 'single-post-thumbnail');
            ?>
              <div class="col" data-aos="zoom-in" data-aos-delay="<?php echo $country_delay; ?>" data-aos-duration="400">
                <div class="cc-countries-item d-flex flex-column align-items-start gap-3">
                  <a href="<?php echo get_permalink($countrie->ID) ?>" class="cc-countries-img position-relative  overflow-hidden rounded-3 w-100">

                    <img src="<?php echo $image[0]; ?>" width="324" height="220" alt="Australia" class="img-fluid position-relative z-0 w-100">
                    <div class="cc-flag position-absolute end-0 bottom-0 z-1 bg-white p-3 rounded-top-5 rounded-end-0">
                      <?php
                      $image = get_field('countries_sec_img', $countrie->ID);
                      if (!empty($image)) :
                      ?>
                        <img src="<?php echo esc_url($image['url']); ?>" width="40" height="40" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid rounded-3 position-relative z-0 w-100">
                      <?php endif; ?>
                    </div>
                  </a>
                  <h2 class="h5 fw-semibold px-3">
                    <a href="<?php echo get_permalink($countrie->ID) ?>" class="text-body"><?php echo $countrie->post_title; ?></a>
                  </h2>
                </div>
              </div>
            <?php $country_delay = $country_delay + 100;
            } ?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</main>




<?php
get_footer();
?>