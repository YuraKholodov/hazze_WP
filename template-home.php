<?php
/*
  Template Name: Шаблон Главной страницы
  */
get_header()
?>

<!-- Hero Section Begin -->
<section class="hero-section set-bg" data-setbg="<?php echo get_field('hero_background')['sizes']['2048x2048'] ?>">
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
          <img src="<?php echo get_field('about_img')['sizes']['large'] ?>" alt="<?php echo get_field('about_img')['alt'] ?>" />
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

              <img src="<?php echo get_sub_field('image')['sizes']['thumbnail'] ?>" alt="<?php echo get_sub_field('image')['alt'] ?>" />
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
          data-setbg="<?php echo get_field('portfolio_image_1')['sizes']['large'] ?>">
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
          data-setbg="<?php echo get_field('portfolio_image_2')['sizes']['medium_large'] ?>">
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
              data-setbg="<?php echo get_field('portfolio_image_3')['sizes']['medium_large'] ?>">
              <div class="pi-hover">
                <a href="#" class="chain-icon"><i class="fa fa-chain"></i></a>
                <a
                  href="<?php echo get_field('portfolio_image_3')['sizes']['medium_large'] ?>"
                  class="search-icon image-popup"><i class="fa fa-search"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              class="portfolio-item set-bg"
              data-setbg="<?php echo get_field('portfolio_image_4')['sizes']['medium_large'] ?>">
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
        if (have_rows('numbers_achievements-repeater')):
          while (have_rows('numbers_achievements-repeater')) : the_row();
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
          <span><?php the_field('team_subtitle') ?></span>
          <h2><?php the_field('team_title') ?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php $count_per_page = get_field('team_posts-per-page') ?>

      <?php $query = new WP_Query(['post_type' => 'our-team', 'posts_per_page' => $count_per_page]); ?>

      <?php while ($query->have_posts()) {
        $query->the_post(); ?>

        <div class="col-lg-4 col-md-6">
          <div
            class="member-item set-bg"
            data-setbg="<?php echo get_the_post_thumbnail_url(size: 'large') ?>">
            <div class="mi-text <?php if (get_field('ourteam_card-repainter')) echo 'mi-text--repainter' ?>">

              <?php the_content() ?>

              <div class="mt-title">
                <h4><?php the_title(); ?></h4>
                <span><?php the_field('ourteam_position') ?></span>
              </div>
              <div class="mt-social">
                <?php

                // проверяем есть ли в повторителе данные
                if (have_rows('ourteam-repeater')):

                  // перебираем данные
                  while (have_rows('ourteam-repeater')) : the_row(); ?>


                    <a href="<?php the_sub_field('link'); ?>"><i class="fa fa-<?php the_sub_field('social'); ?>"></i></a>

                <?php endwhile;

                else :
                  // вложенных полей не найдено
                  echo 'Ошибка, поля не найдены!';

                endif;

                ?>

              </div>
            </div>
          </div>
        </div>

      <?php }

      wp_reset_postdata(); // ВАЖНО вернуть global $post обратно 
      ?>

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

      <?php $query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 2]); ?>

      <?php while ($query->have_posts()) {
        $query->the_post(); ?>

        <div class="col-md-6">
          <div class="blog-item">
            <div class="row">
              <div class="col-lg-6">
                <div
                  class="bi-pic set-bg"
                  data-setbg="<?php echo get_the_post_thumbnail_url(size: 'large') ?>"></div>
              </div>
              <div class="col-lg-6">
                <div class="bi-text">
                  <ul>
                    <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date(); ?></li>
                  </ul>
                  <h4>
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                  </h4>
                  <?php the_excerpt(); ?>
                  <div class="bt-author">
                    <div class="ba-pic">
                      <?php global $post;
                      $url = get_avatar_url($post, "size=100&default=mystery");
                      ?>
                      <img src="<?php echo $url ?>" />
                    </div>
                    <div class="ba-text">
                      <h5><?php the_author() ?></h5>
                      <span><?php echo array_shift(get_the_author_meta('roles')) ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php }

      wp_reset_postdata(); // ВАЖНО вернуть global $post обратно 
      ?>

    </div>
  </div>
</div>
<!-- Blog Section End -->

<?php get_footer() ?>