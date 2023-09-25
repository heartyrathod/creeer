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

<main class="overflow-hidden">
  <header class="entry-header pt-xxl-20 pt-xl-20 pt-lg-18 pt-15 pb-xxl-5 pb-xl-5 pb-lg-5 pb-md-4 pb-3 bg-primary-100 position-relative overflow-hidden">
    <div class="cc-page-title-img position-absolute start-0 top-0 z-0 w-100 h-100">
      <div class="cc-page-title-overly w-100 h-100 position-absolute start-0 top-0 z-1"></div>
      <?php
      $image = get_field('about_bg_img');
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

  <div class="entry-content mb-xxl-5 mb-xl-5 mb-lg-5 mb-md-5 mb-4 mt-0">
    <div class="container">
      <div class="d-flex flex-column align-items-start gap-xxl-5 gap-xl-5 gap-lg-5 gap-sm-4 gap-4">
        <div class="pt-xxl-5 pt-xl-5 pt-lg-5 pt-md-4 pt-3 ps-xxl-5 ps-xl-5 ps-lg-5 ps-md-4 ps-3 border-5 border-start border-primary">
          <?php echo get_field('about_first_content', 10); ?>
        </div>
        <div class="w-100 d-flex flex-column gap-4">
          <div class="row row-gap-4">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <div class="position-relative ps-8">
                <?php
                $image = get_field('mission_image');
                if (!empty($image)) : ?>
                  <img src="<?php echo esc_url($image['url']); ?>" width="800" height="533" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" data-aos="fade-up" data-aos-offset="100" data-aos-duration="200">
                <?php endif; ?>
                <div class="position-absolute start-0 bottom-45 z-1 border-start border-5 border-primary p-4 shadow bg-white" data-aos="fade-right" data-aos-offset="100" data-aos-duration="200">
                  <h5 class="text-primary h3 fw-bold"><?php echo get_field('mission_years', 10); ?>+</h5>
                  <p><?php echo get_field('mission_experience', 10); ?></p>
                </div>
              </div>
            </div>
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
              <div class="d-flex flex-column gap-4 h-100 justify-content-center">
                <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="200">
                  <h2 class="h5 fw-bold mb-2"><?php echo get_field('mission_content', 10); ?></h2>

                  <ul class="d-flex flex-column gap-2">
                    <?php
                    if (have_rows('mission_list', 10)) :
                      while (have_rows('mission_list', 10)) : the_row();
                        $mission_list_content = get_sub_field('mission_list_content');
                    ?>
                        <li><?php echo $mission_list_content; ?></li>

                      <?php endwhile; ?>
                    <?php endif; ?>
                  </ul>

                </div>
                <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="200">
                  <h2 class="h5 fw-bold mb-2"><?php echo get_field('vision_heading', 10); ?></h2>
                  <p><?php echo get_field('vision_content', 10); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-gap-4">
            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
              <div class="d-flex flex-column gap-4 h-100 justify-content-center">
                <div data-aos="fade-right" data-aos-delay="100" data-aos-duration="200">
                  <h2 class="h5 fw-bold mb-2"><?php echo get_field('our_history_headig', 10); ?></h2>
                  <?php echo get_field('history_content', 10); ?>
                </div>
              </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <div class="position-relative">
                <?php
                $image = get_field('our_history_img');
                if (!empty($image)) : ?>
                  <img src="<?php echo esc_url($image['url']); ?>" width="1180" height="579" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>" data-aos="fade-left" data-aos-delay="200" data-aos-duration="200">
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <?php echo get_field('other_content'); ?>
        </div>
        <div class="cc-team w-100">
          <div class="row row-gap-4">
            <div class="col-12">
              <h3 class="text-center w-100 mb-xxl-5 mb-xl-5 mb-lg-5 mb-md-4 mb-sm-4 mb-4" data-aos="fade-up" data-aos-delay="50" data-aos-duration="200"><?php echo get_field('ledership', 10); ?></h3>
              <div class="cc-team w-100 p-xxl-5 p-xl-5 p-lg-5 p-md-4 p-sm-4 p-4 bg-primary bg-opacity-5" data-aos="fade-up" data-aos-delay="75" data-aos-duration="200">
                <div class="row gap-xxl-0 gap-xl-0 gap-lg-0 gap-md-0 gap-sm-3 gap-3">
                  <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="bg-white w-100" data-aos="fade-right" data-aos-delay="100" data-aos-duration="200">
                      <?php
                      $image = get_field('ledership_img');
                      if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" width="600" height="500" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid w-100">
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="d-flex flex-column align-items-start justify-content-center h-100 gap-4" data-aos="fade-left" data-aos-delay=""="200" data-aos-duration="200">
                      <p class="fs-5"><?php echo get_field('ledership_content', 10); ?></p>
                      <div class="cc-author">
                        <h4 class="mb-2"><?php echo get_field('ledership_name', 10); ?></h4>
                        <p><?php echo get_field('ledership_title', 10); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div data-aos="fade-up" data-aos-delay="100" data-aos-duration="300">
                <h3 class="text-center w-100 my-3"><?php echo get_field('our_core_team', 10); ?></h3>
                <p class="text-center px-xxl-8 px-xl-8 px-lg-7 px-md-5 px-sm-0 px-0">
                  <?php echo get_field('our_team_content', 10); ?></p>
              </div>
            </div>
            <?php
            if (have_rows('our_team')) :

              $country_delay = 25;
              $country_duration = 50;
            ?>
              <?php while (have_rows('our_team')) : the_row();
                $Image = get_sub_field('our_team_image');
                $our_team_name = get_sub_field('our_team_name');
                $our_team_designation = get_sub_field('our_team_designation');
                $our_team_content = get_sub_field('our_team_content');
              ?>
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-mg-6 col-sm-12 col-12">
                  <div class="cc-team w-100 d-flex flex-column gap-3" data-aos="fade-up" data-aos-delay="<?php echo $country_delay; ?>" data-aos-duration="<?php echo $country_duration; ?>">
                    <div class="bg-white w-100">
                      <img src="<?php echo $Image['url']; ?>" width="600" height="500" alt="<?php echo $name; ?>" class="img-fluid w-100">
                    </div>
                    <div class="d-flex flex-column align-items-start justify-content-center h-100 gap-3">
                      <div class="cc-author">
                        <h4 class="mb-1 fw-bold h5"><?php echo $our_team_name; ?></h4>
                        <p class="text-body"><?php echo $our_team_designation; ?></p>
                      </div>
                      <?php echo $our_team_content; ?>
                    </div>
                  </div>
                </div>

              <?php $country_delay = $country_delay + 25;
                $country_duration = $country_duration + 50;
              endwhile; ?>
            <?php endif; ?>


          </div>
        </div>
      </div>
    </div>
  </div>
</main>






<?php
get_footer();
?>