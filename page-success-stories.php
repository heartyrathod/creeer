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
      $image = get_field('success-stories_bg_img');
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

  <div class="entry-content my-xxl-5 my-xl-5 my-lg-5 my-md-5 my-sm-4 my-4">
    <div class="container">
      <?php
      $args = array(
        'numberposts' => -1,
        'post_type'   => 'testimonials',
        'post_status'     => 'publish',
        'order' => 'DESC',
      );
      $testimonials = get_posts($args);
      if (count($testimonials) > 0) {

      ?>
        <div class="row row-gap-3">
          <?php
          foreach ($testimonials as $testimonial) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($testimonial->ID), 'single-post-thumbnail');
          ?>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">

              <div class="cc-testimonials-slide-item p-xxl-4 p-xl-4 p-lg-4 p-md-4 p-sm-3 p-3 d-flex flex-column justify-content-between align-items-start gap-3 h-100 rounded-3 ">
                <div class="d-flex flex-column justify-content-between align-items-start gap-3">
                  <i class="cc-ic-quote display-3 text-primary-200"></i>
                  <?php echo $testimonial->post_content; ?>
                </div>
                <div class="d-flex gap-3 align-items-center w-100">
                  <div class="cc-testimonials-img rounded-3 overflow-hidden">
                    <img src="<?php echo $image[0]; ?>" width="70" height="70" class="img-fluid" alt="Hetul Patel">
                  </div>
                  <div class="d-flex flex-column gap-2 flex-grow-1">
                    <h3 class="h6 fw-semibold"><?php echo $testimonial->post_excerpt; ?></h3>
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

            </div>
          <?php } ?>


        <?php } ?>
        </div>

    </div>
  </div>

</main>






<?php
get_footer();
?>