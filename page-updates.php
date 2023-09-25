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
      $image = get_field('updates_bg_image');
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
      <?php
      $args = array(
        'numberposts' => 4,
        'post_type'   => 'post',
        'post_status'     => 'publish',
        'order' => 'ASC',
      );
      $updates = get_posts($args);
      if (count($updates) > 0) {
      ?>
        <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-md-6 row-cols-sm-1 row-cols-1 gap-xxl-0 gap-xl-0 gap-lg-0 gap-md-0 gap-sm-3 gap-3">
          <?php
          foreach ($updates as $update) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($update->ID), 'single-post-thumbnail');
          ?>
            <div class="col">
              <div class="cc-news-item d-flex flex-column align-items-start gap-3">
                <a href="<?php echo get_permalink($update->ID) ?>" class="cc-news-img rounded-3 overflow-hidden w-100">
                  <img src="<?php echo $image[0]; ?>" width="525" height="342" alt="ATMC New Zealand" class="img-fluid w-100">
                </a>
                <div class="d-flex flex-column gap-1 px-3">
                  <h3 class="h6 fw-semibold">
                    <a href="<?php echo get_permalink($update->ID) ?>" class="text-body"><?php echo $update->post_title; ?></a>
                  </h3>
                  <p class="small"><?php echo get_the_date(); ?></p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
</main>




<?php
get_footer();
?>