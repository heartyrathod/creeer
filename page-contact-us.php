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
      $image = get_field('contact_bg_img');
      if (!empty($image)) :
      ?>
        <img src="<?php echo esc_url($image['url']); ?>" width="1920" height="400" alt="Contact us" class="img-fluid  w-100 h-100 object-fit-cover">
      <?php endif; ?>
    </div>
    <div class="container position-relative z-1 d-flex flex-column align-items-start gap-2">
      <h1 class="text-white fw-bold display-5"><?php echo $post->post_title; ?></h1>
      <?php echo do_shortcode('[rank_math_breadcrumb]') ?>
    </div>
  </header>
  <div class="entry-content my-xxl-5 my-xl-5 my-lg-5 my-md-5 my-sm-4 my-4">
    <div class="container">
      <div class="row gap-xxl-0 gap-xl-0 gap-lg-0 gap-md-3 gap-sm-3 gap-3">

        <?php
        if (have_rows('get_in_touch')) : ?>
          <?php while (have_rows('get_in_touch')) : the_row();
            $loc_title = get_sub_field('loc_title');
            $loc_address = get_sub_field('loc_address');
            $email = get_sub_field('email');
            $map = get_sub_field('map');
          ?>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="cc-contact d-flex flex-column justify-content-between gap-3 h-100">
                <div class="d-flex flex-column align-items-start gap-3">
                  <h2 class="h6 text-primary"><?php echo $loc_title; ?></h2>
                  <p class=""><?php echo $loc_address; ?></p>
                  <ul class="before-none d-flex flex-column align-items-start gap-3 w-100 mb-0">
                    <li>
                      <div class="d-flex flex-nowrap gap-3 align-items-center rounded-3 h-100">
                        <span class="bg-primary-800 p-3 rounded-3 d-flex">
                          <i class="cc-ic-phone d-flex fs-2 text-white"></i>
                        </span>
                        <div class="m-0 fw-medium h6 flex-grow-1 d-flex flex-column gap-2 align-items-start">
                          <?php
                          if (have_rows('contact', 20)) :
                            while (have_rows('contact', 20)) : the_row();
                              $phone = get_sub_field('phone'); ?>
                              <a href="tel:<?php echo $phone; ?>" class="link-secondary"><?php echo $phone; ?></a>
                              <!-- <a href="tel:+917878335367" class="link-secondary">+91-7878335367</a> -->
                            <?php endwhile; ?>
                          <?php endif; ?>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex flex-nowrap gap-3 align-items-center rounded-3 h-100">
                        <span class="bg-primary-800 p-3 rounded-3 d-flex">
                          <i class="cc-ic-email d-flex fs-2 text-white"></i>
                        </span>
                        <div class="m-0 fw-medium h6 flex-grow-1 d-flex flex-column gap-2 align-items-start">
                          <a href="mailto:<?php echo $email; ?>" class="link-secondary">
                            <?php echo $email; ?>
                          </a>

                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="d-flex">
                  <?php echo $map; ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
</main>




<?php
get_footer();
?>