<?php

/**
 * The Footer.

 * @package WordPress
 * @subpackage Career Craaft
 * @since Career Craaft 1.0.0
 */


?>

<footer class="bg-primary-900 py-xxl-6 py-xl-6 py-lg-6 py-3 mt-xxl-13  mt-xl-13 mt-lg-13 mt-4">
  <div class="container">
    <div class="row g-xxl-4 g-xl-4 g-lg-4 g-md-4 g-sm-4 g-3">
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <h2 class="h5 fw-semibold mb-xxl-4 mb-xl-4 mb-lg-4 mb-3 text-white">Our links</h2>
        <?php
        echo wp_nav_menu(array(
          'container' => '',
          'menu'        => 'footer',
          'menu_class'  => 'cc-our-links before-none d-flex flex-xxl-column flex-xl-column flex-lg-column flex-row gap-xxl-2 gap-xl-2 gap-lg-2 gap-3 align-items-start m-0',
          'fallback_cb' => false,
          'depth'       => 0,
        ));

        ?>
        <a href="#" target="_blank" rel="noopener" class="cc-book btn btn-primary mt-xxl-4 mt-xl-4 mt-lg-4 mt-3 text-white" title="Download brochure">Download brochure</a>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <h2 class="h5 fw-semibold mb-xxl-4 mb-xl-4 mb-lg-4 mb-3 text-white">Get in touch</h2>
        <div class="row g-xxl-4 g-xl-4 g-lg-3 g-3">
          <?php
          if (have_rows('get_in_touch', 20)) : ?>
            <?php while (have_rows('get_in_touch', 20)) : the_row();
              $loc_title = get_sub_field('loc_title');
              $loc_address = get_sub_field('loc_address');
              $email = get_sub_field('email');
            ?>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                <div class="d-flex flex-column align-items-start gap-3">
                  <h3 class="h6 text-primary-200"><?php echo $loc_title; ?></h3>
                  <p class="text-white m-0"><?php echo $loc_address; ?></p>
                  <ul class="before-none d-flex flex-column align-items-start gap-3 w-100 mb-0">
                    <li>
                      <div class="d-flex flex-nowrap gap-3 align-items-center rounded-3 h-100">
                        <span class="bg-primary-800 p-3 rounded-3 d-flex">
                          <i class="cc-ic-phone d-flex fs-2 text-white"></i>
                        </span>
                        <div class="m-0 fw-medium flex-grow-1 d-flex flex-column gap-2 align-items-start">
                          <?php
                          if (have_rows('contact', 20)) :
                            while (have_rows('contact', 20)) : the_row();
                              $phone = get_sub_field('phone'); ?>
                              <a href="tel:<?php echo $phone; ?>" class="text-white text-break"><?php echo $phone; ?></a>
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
                        <div class="m-0 fw-medium flex-grow-1 d-flex flex-column gap-2 align-items-start">
                          <a href="mailto:<?php echo $email; ?>" class="text-white text-break"><?php echo $email; ?></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="p-xxl-4 p-xl-4 p-lg-4 p-3 bg-primary mt-xxl-n17 mt-xl-n17 mt-lg-n17 mt-0 d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="400">
          <h2 class="h5 fw-semibold text-white">Contact us</h2>

          <form action="" method="POST" id="c_contact_form" class="d-flex flex-column gap-3">
            <div class="row g-xxl-3 g-xl-3 g-lg-3 g-2">
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-4 col-sm-4 col-12">
                <input class="form-control bg-opacity-40 bg-white border-0 text-primary-900" type="text" placeholder="Name" name="c_name" id="c_name" aria-label="Name">
              </div>
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-4 col-sm-4 col-12">
                <input class="form-control bg-opacity-40 bg-white border-0 text-primary-900" type="email" placeholder="Email" name="c_email" id="c_email" aria-label="Email address">
              </div>
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-4 col-sm-4 col-12">
                <input class="form-control bg-opacity-40 bg-white border-0 text-primary-900" type="text" placeholder="Subject" name="c_sub" id="c_sub" aria-label="Subject">
              </div>
              <div class="col-12">
                <textarea class="form-control bg-opacity-40 bg-white border-0 text-primary-900" rows="3" placeholder="Message" name="c_msg" id="c_msg"></textarea>
              </div>
              <div class="col-12">
                <div class="contactsuccess"></div>
                <input type="hidden" name="action" value="c_contact_form">
                <button type="submit" id="contact_btn" name="contact_btn" class="btn btn-primary- bg-primary-900 text-white w-100">Submit</button>
              </div>
            </div>
          </form>
        </div>

        <ul class="cc-social before-none d-flex flex-row flex-wrap gap-4 justify-content-center mt-4">
          <?php
          if (have_rows('social_icon', 20)) :
            while (have_rows('social_icon', 20)) : the_row();
              $social_icon_icon = get_sub_field('social_icon_icon');
              $social_title = get_sub_field('social_title');
              $social_icon_link = get_sub_field('social_icon_link');
          ?>
              <li data-aos="zoom-in" data-aos-delay="25" data-aos-duration="400" class="w-auto">
                <a href="<?php echo $social_icon_link; ?>" target="_blank" class="text-primary-600" title="<?php echo $social_title; ?>">
                  <i class="<?php echo $social_icon_icon; ?> fs-4"></i>
                </a>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>

      </div>
    </div>
  </div>
</footer>
<section class="cc-copyright py-xxl-4 py-xl-4 py-lg-4 py-3">
  <div class="container">
    <div class="d-flex flex-xxl-row flex-xl-row flex-lg-row flex-column justify-content-between align-items-center gap-xxl-3 gap-xl-3 gap-lg-3 gap-2">
      <p class="fw-medium mb-0">©2023 – <span class="text-primary">Career Craaft</span>. All rights reserved.</p>
      <p class="fw-medium ">Design and Developed by <a href="https://www.igexsolutions.com" target="_blank" class="link-primary">iGex Solutions</a>.</p>
    </div>
  </div>
</section>
<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="cc-drawer" aria-labelledby="cc-drawerLabel">
  <div class="offcanvas-header shadow-sm gap-2 px-3 py-2">
    <div class="cc-logo d-flex flex-wrap flex-row align-items-center h-100">
      <a href="<?php echo site_url('home'); ?>" title="Career Craaft">
        <?php echo get_field('header_logo', 'option'); ?>

      </a>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-3">
    <?php
    echo wp_nav_menu(array(
      'container' => '',
      'menu'        => 'header-menu',
      'menu_class'  => 'cc-nav d-flex flex-column flex-wrap w-100 m-0 before-none',
      'fallback_cb' => false,
      'depth'       => 0,
    ));

    ?>

  </div>
  <div class="offcanvas-footer shadow-lg p-3">
    <button type="button" class="btn btn-secondary w-100" data-bs-toggle="modal" data-bs-target="#cc-quickInquiry" title="Quick inquiry">Quick inquiry</button>
    <!-- <a href="#" class="cc-book btn btn-secondary w-100" title="Quick inquiry">Quick inquiry</a> -->
  </div>
</div>
<!-- Quick Inquiry Modal -->
<form action="" method="POST" class="modal fade" id="cc-quickInquiry" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cc-quickInquiryLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
    <div class="modal-content rounded-0 border-0">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="cc-quickInquiryLabel">Quick inquiry</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row g-xxl-3 g-xl-3 g-lg-3 g-2">
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <label for="c_name" class="form-label fw-bold small">Name</label>
            <input class="form-control bg-opacity-40 bg-white text-primary-900 rounded-0" type="text" placeholder="enter you name" name="c_name" id="har" aria-label="Name">
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <label for="c_email" class="form-label fw-bold small">Email address</label>
            <input class="form-control bg-opacity-40 bg-white text-primary-900 rounded-0" type="email" placeholder="enter your email" name="c_email" id="c_email" aria-label="Email address">
          </div>
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <label for="c_sub" class="form-label fw-bold small">Subject</label>
            <input class="form-control bg-opacity-40 bg-white text-primary-900 rounded-0" type="text" placeholder="enter your subject" name="c_sub" id="c_sub" aria-label="Subject">
          </div>
          <div class="col-12">
            <label for="c_msg" class="form-label fw-bold small">Message</label>
            <textarea class="form-control bg-opacity-40 bg-white text-primary-900 rounded-0" rows="3" placeholder="write your message" name="c_msg" id="c_msg"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-end">
        <div class="i_success"></div>
        <input type="hidden" name="action" value="c_contact_form">
        <button type="submit" id="contact_btn" name="contact_btn" class="btn btn-primary btn-sm text-white">Submit</button>
      </div>
    </div>
  </div>
</form>

<?php wp_footer();
?>
<script defer>
  // window.onload = function() {
  function updateScroll() {
    var ccBanner = jQuery("#cc-banner").height();
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 80) {
      jQuery(".cc-header").addClass("cc-scroll");
    } else {
      jQuery(".cc-header").removeClass("cc-scroll");
    }
  } //missing );
  jQuery(function() {
    jQuery(window).scroll(updateScroll);
    updateScroll();
  });
  //aos
  AOS.init({
    easing: 'ease-out-back',
    once: true,
  });
  //end aos
  // };
</script>
<?php if (is_page('home')) { ?>
  <script defer>
    jQuery('.cc-testimonials-slide').owlCarousel({
      // center: true,
      items: 3,
      loop: true,
      margin: 0,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      autoplaySpeed: 500,
      responsive: {
        0: {
          items: 1,
        },
        575: {
          items: 1,
        },
        767: {
          items: 2,
        },
        991: {
          items: 2
        },
        1200: {
          items: 3
        }
      }
    });
  </script>
<?php } ?>
<?php if (is_page('gallery')) { ?>
  <script defer>
    //sucess stories
    jQuery('.cc-activities-slide').owlCarousel({
      center: false,
      items: 4,
      loop: true,
      margin: 24,
      dots: false,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      autoplaySpeed: 500,
      responsive: {
        0: {
          items: 1,
        },
        575: {
          items: 2,
        },
        767: {
          items: 3,
        },
        991: {
          items: 4
        }
      }
    });
    jQuery('.cc-awards-slide').owlCarousel({
      center: false,
      items: 4,
      loop: false,
      margin: 24,
      dots: false,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      autoplaySpeed: 500,
      responsive: {
        0: {
          items: 1,
        },
        575: {
          items: 2,
        },
        767: {
          items: 3,
        },
        991: {
          items: 4
        }
      }
    });
    //fancyapps
    Fancybox.bind("[data-fancybox]", {
      // Your custom options
    });
  </script>
<?php } ?>
<?php if ((is_single() && 'gallery' == get_post_type())) { ?>
  <script defer>
    //fancyapps
    Fancybox.bind("[data-fancybox]", {});
  </script>
<?php } ?>
</body>

</html>