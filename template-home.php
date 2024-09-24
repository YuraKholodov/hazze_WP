<?php
/*
  Template Name: Шаблон Главной страницы
  */
get_header()
?>

<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="<?php the_field('hero_background') ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="hs-text">
          <span><?php the_field('hero_subtitle') ?></span>
          <h2><?php the_field('hero_title') ?></h2>
          <p>
            <?php the_field('hero_descr') ?>
          </p>
          <a href="<?php echo get_field('hero_btn')['url'] ?>" class="primary-btn"><?php echo get_field('hero_btn')['title'] ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Hero Section End -->

<!-- About Us Section Begin -->
<section class="about-us-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="as-pic">
          <img src="<?php echo get_field('about_img')['url'] ?>" alt="<?php echo get_field('about_img')['alt'] ?>" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="as-text">
          <div class="section-title">
            <span><?php the_field('about_subtitle') ?></span>
            <h2><?php the_field('about_title') ?></h2>
          </div>
          <p class="f-para">
            <?php the_field('about_descr') ?>
          </p>
          <a href="<?php echo get_field('about_btn')['url'] ?>" class="primary-btn"><?php echo get_field('about_btn')['title'] ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Us Section End -->

<!-- Services Section Begin -->
<section class="services-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span><?php the_field('services_subtitle') ?></span>
          <h2><?php the_field('services_title') ?></h2>
        </div>
      </div>
    </div>
    <div class="row services-custom-row">
      <?php
      if (have_rows('services-repeater')):
        while (have_rows('services-repeater')) : the_row();
      ?>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">

              <img src="<?php the_sub_field('image'); ?>" alt="" />
              <h4><?php the_sub_field('title'); ?></h4>
              <p>
                <?php the_sub_field('descr'); ?>
              </p>

            </div>
          </div>

      <?php
        endwhile;

      else:
        echo 'Ошибка, поля не найдены!';
      endif;
      ?>
    </div>
  </div>
</section>
<!-- Services Section End -->

<!-- Portfolio Section Begin -->
<section class="portfolio-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span><?php the_field('portfolio_subtitle') ?></span>
          <h2><?php the_field('portfolio_title') ?></h2>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div
          class="portfolio-item set-bg large-item"
          data-setbg="<?php echo get_field('portfolio_image_1')['url'] ?>">
          <div class="pi-hover">
            <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
            <a
              href="<?php echo get_field('portfolio_image_1')['url'] ?>"
              class="search-icon image-popup"><i class="fa fa-search"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div
          class="portfolio-item set-bg"
          data-setbg="<?php echo get_field('portfolio_image_2')['url'] ?>">
          <div class="pi-hover">
            <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
            <a
              href="<?php echo get_field('portfolio_image_2')['sizes']['hazze-custom'] ?>"
              class="search-icon image-popup"><i class="fa fa-search"></i></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div
              class="portfolio-item set-bg"
              data-setbg="<?php echo get_field('portfolio_image_3')['url'] ?>">
              <div class="pi-hover">
                <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                <a
                  href="<?php echo get_field('portfolio_image_3')['url'] ?>"
                  class="search-icon image-popup"><i class="fa fa-search"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="portfolio-item set-bg"
              data-setbg="<?php echo get_field('portfolio_image_4')['url'] ?>">
              <div class="pi-hover">
                <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                <a
                  href="<?php echo get_field('portfolio_image_4')['url'] ?>"
                  class="search-icon image-popup"><i class="fa fa-search"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Portfolio Section End -->

<!-- Counter Section Begin -->
<section class="counter-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="counter-text">
          <div class="section-title">
            <span><?php the_field('numbers_subtitle') ?></span>
            <h2><?php the_field('numbers_title') ?></h2>
          </div>
          <a href="<?php echo get_field('numbers_btn')['url'] ?>" class="primary-btn"><?php echo get_field('numbers_btn')['title'] ?></a>
        </div>
      </div>
      <div class="col-lg-6">

        <?php
        if (have_rows('numbers_achievements_repeater')):
          while (have_rows('numbers_achievements_repeater')) : the_row();
        ?>

            <div class="counter-item">
              <div class="ci-number count"><?php the_sub_field('number'); ?></div>
              <div class="ci-text">
                <h4><?php the_sub_field('title'); ?></h4>
                <p>
                  <?php the_sub_field('descr'); ?>
                </p>
              </div>
            </div>

        <?php
          endwhile;

        else:
          echo 'Ошибка, поля не найдены!';
        endif;
        ?>

      </div>
    </div>
  </div>
</section>
<!-- Counter Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
  <div class="container">
    <div class="row testimonial-slider owl-carousel">

      <?php
      $counter = 0;
      if (have_rows('testimonials_slides_repeater')):
        while (have_rows('testimonials_slides_repeater')) : the_row();
          $isEven = false;
          $counter++;
          if ($counter % 2 == 0) {
            $isEven = true;
          }

      ?>
          <div class="col-lg-6">
            <div class="testimonial-item" <?php if ($isEven) echo 'style="background-color: #e32879"' ?>>
              <div class="ti-pic">
                <img src="<?php echo get_sub_field('image')['sizes']['thumbnail'] ?>" alt="<?php echo get_sub_field('image')['alt'] ?>" />
              </div>
              <div class="ti-text">
                <div class="ti-title">
                  <h4><?php the_sub_field('name') ?></h4>
                  <span <?php if ($isEven) echo 'style="color: #fff"' ?>>
                    <?php the_sub_field('profession') ?>
                  </span>
                </div>
                <p <?php if ($isEven) echo 'style="color: #fff"' ?>>
                  <?php the_sub_field('descr') ?>
                </p>
              </div>
            </div>
          </div>

      <?php
        endwhile;

      else:
        echo 'Ошибка, поля не найдены!';
      endif;
      ?>

    </div>
  </div>
</section>
<!-- Testimonial Section End -->

<!-- Call To Action Section Begin -->
<?php echo do_shortcode('[pink-banner]') ?>
<!-- Call To Action Section End -->

<!-- Member Section Begin -->
<section class="member-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Our Team</span>
          <h2>Top Designers</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div
          class="member-item set-bg"
          data-setbg="<?php echo get_template_directory_uri() ?>/img/member/member-1.jpg">
          <div class="mi-text">
            <p>
              Quia dolor sit amet, consectetur, adipisci velit, sed quia non
              numquam eius modi tempora incidunt ut labore et dolore magnam
              aliquam quaerat voluptatem.
            </p>
            <div class="mt-title">
              <h4>Jacob Gomez</h4>
              <span>Designer</span>
            </div>
            <div class="mt-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div
          class="member-item set-bg"
          data-setbg="<?php echo get_template_directory_uri() ?>/img/member/member-2.jpg">
          <div class="mi-text">
            <p>
              Quia dolor sit amet, consectetur, adipisci velit, sed quia non
              numquam eius modi tempora incidunt ut labore et dolore magnam
              aliquam quaerat voluptatem.
            </p>
            <div class="mt-title">
              <h4>Jacob Gomez</h4>
              <span>Designer</span>
            </div>
            <div class="mt-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div
          class="member-item set-bg"
          data-setbg="<?php echo get_template_directory_uri() ?>/img/member/member-3.jpg">
          <div class="mi-text">
            <p>
              Quia dolor sit amet, consectetur, adipisci velit, sed quia non
              numquam eius modi tempora incidunt ut labore et dolore magnam
              aliquam quaerat voluptatem.
            </p>
            <div class="mt-title">
              <h4>Jacob Gomez</h4>
              <span>Designer</span>
            </div>
            <div class="mt-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Member Section End -->

<!-- Blog Section Begin -->
<div class="blog-section latest-blog spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Latest Blog</span>
          <h2>From Our Blog</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="blog-item">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="bi-pic set-bg"
                data-setbg="<?php echo get_template_directory_uri() ?>/img/blog/blog-1.jpg"></div>
            </div>
            <div class="col-lg-6">
              <div class="bi-text">
                <ul>
                  <li><i class="fa fa-calendar-o"></i> August 9, 2019</li>
                  <li><i class="fa fa-commenting-o"></i> 0</li>
                </ul>
                <h4>
                  <a href="#">Every Single Way You Can Wear Pastel Makeup This
                    Spring</a>
                </h4>
                <p>Never ever think of giving up. Winners never quit and</p>
                <div class="bt-author">
                  <div class="ba-pic">
                    <img src="<?php echo get_template_directory_uri() ?>/img/blog/author-1.jpg" alt="" />
                  </div>
                  <div class="ba-text">
                    <h5>Jeff Rodriguez</h5>
                    <span>Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="blog-item">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="bi-pic set-bg"
                data-setbg="<?php echo get_template_directory_uri() ?>/img/blog/blog-2.jpg"></div>
            </div>
            <div class="col-lg-6">
              <div class="bi-text">
                <ul>
                  <li><i class="fa fa-calendar-o"></i> August 9, 2019</li>
                  <li><i class="fa fa-commenting-o"></i> 0</li>
                </ul>
                <h4>
                  <a href="#">Everything Coming to Netflix Canada in May 2019</a>
                </h4>
                <p>Never ever think of giving up. Winners never quit and</p>
                <div class="bt-author">
                  <div class="ba-pic">
                    <img src="<?php echo get_template_directory_uri() ?>/img/blog/author-1.jpg" alt="" />
                  </div>
                  <div class="ba-text">
                    <h5>Aaron Russell</h5>
                    <span>Content</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Blog Section End -->

<?php get_footer() ?>