<?php
/*
  Template Name: Шаблон "О нас" страницы
  */
get_header()
?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="breadcrumb-option">
          <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(''); ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 text-right">
        <div class="breadcrumb-text">
          <h3><?php the_title() ?></h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- About Us Section Begin -->
<section class="about-us-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="as-pic">
          <img src="<?php echo get_field('story_image')['sizes']['medium_large'] ?>" alt="<?php echo get_field('story_image')['alt'] ?>">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="as-text ap-text">
          <div class="section-title">
            <span><?php the_field('story_subtitle') ?></span>
            <h2><?php the_field('story_title') ?></h2>
          </div>
          <p class="f-para"><?php the_field('story_descr') ?></p>

          <div class="about-counter">
            <?php

            // проверяем есть ли в повторителе данные
            if (have_rows('story-repeater')):

              // перебираем данные
              while (have_rows('story-repeater')) : the_row(); ?>


                <div class="ac-item">
                  <h2 class="ab-count"><?php the_sub_field('number'); ?></h2>
                  <p><?php the_sub_field('title'); ?></p>
                </div>

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
  </div>
</section>
<!-- About Us Section End -->

<!-- Member Section Begin -->
<section class="member-section spad ap-member">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span><?php the_field('about_team-subtitle') ?></span>
          <h2><?php the_field('about_team-title') ?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php $count_per_page = get_field('about_team-count') ?>

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

<!-- Call To Action Section Begin -->
<?php echo do_shortcode('[pink-banner]') ?>
<!-- Call To Action Section End -->

<?php get_footer() ?>