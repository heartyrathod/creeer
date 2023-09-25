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
      $image = get_field('gallery_bg_img');
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

  <div class="entry-content my-xxl-5 my-xl-5 my-lg-5 my-md-5 my-sm-4 my-4">
    <div class="container">
      <div class="d-flex flex-column flex-wrap gap-xxl-5 gap-xl-5 gap-lg-4 gap-3">
        <div class="w-100">
          <?php
          $args = array(
            'numberposts' => 5,
            'post_type'   => 'gallery',
            'post_status'     => 'publish',
            'order' => 'ASC',
          );
          $gallerys = get_posts($args);
          if (count($gallerys) > 0) {
          ?>
            <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-1 row-cols-1 gap-xxl-0 gap-xl-0 gap-lg-0 gap-md-0 gap-sm-3 gap-3">
              <?php
              $country_delay = 50;
              foreach ($gallerys as $gallery) {
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($gallery->ID), 'single-post-thumbnail');
              ?>
                <div class="col" data-aos="zoom-in" data-aos-delay="<?php echo $country_delay; ?>" data-aos-duration="400">
                  <div class="cc-gallery-item d-flex flex-column align-items-start gap-3">
                    <a href="<?php echo get_permalink($gallery->ID) ?>" class="cc-gallery-img position-relative w-100 ratio ratio-4x3 rounded-3 overflow-hidden w-100">
                      <img src="<?php echo $image[0]; ?>" width="382" height="296" alt="Education Fairs" class="img-fluid w-100 object-fit-cover w-100">
                    </a>
                    <h2 class="h6 fw-semibold px-3">
                      <a href="<?php echo get_permalink($gallery->ID) ?>" class="text-body">
                        <?php echo $gallery->post_title; ?></a>
                    </h2>
                  </div>
                </div>
              <?php $country_delay = $country_delay + 50;
              } ?>
            </div>
          <?php } ?>

        </div>


        <div class="cc-activities d-flex flex-column w-100 gap-3">
          <h2 class="h4 fw-bold">Activities</h2>
          <?php
          $images = get_field('activities_silder_gallary');
          if ($images) : ?>
            <div class="cc-activities-slide owl-carousel owl-theme mt-2 w-100 ">
              <?php foreach ($images as $image) : ?>
                <div class="cc-gallery-item d-flex h-100">
                  <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="activities" class="cc-gallery-img d-flex h-100 rounded-3 overflow-hidden ratio ratio-4x3">
                    <img src="<?php echo esc_url($image['url']); ?>" width="382" height="296" class="img-fluid" alt="Activities">
                  </a>
                </div>
              <?php endforeach; ?>

            </div>
          <?php endif; ?>
        </div>


        <div class="cc-awards d-flex flex-column w-100 gap-3">
          <h2 class="h4 fw-bold">Awards</h2>
          <?php
          $awards = get_field('awards_silder_gallary');
          if ($awards) : ?>
            <div class="cc-awards-slide owl-carousel owl-theme mt-2 w-100">
              <?php foreach ($awards as $award) : ?>
                <div class="cc-gallery-item d-flex h-100">
                  <a href="<?php echo esc_url($award['url']); ?>" data-fancybox="awards" class="cc-awards-slide-item cc-gallery-img d-flex h-100 rounded-3 overflow-hidden ratio ratio-4x3">
                    <img src="<?php echo esc_url($award['url']); ?>" width="382" height="296" class="img-fluid" alt="Awards">
                  </a>
                </div>
              <?php endforeach; ?>

            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
get_footer();
?>