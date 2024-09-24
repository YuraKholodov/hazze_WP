<section class="callto-section set-bg" data-setbg="<?php echo get_field('pink-banner_bg', 'options')['url'] ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="ctc-text">

          <h2><?php the_field('pink-banner-title', 'options') ?></h2>
          <p>
            <?php the_field('pink-banner_descr', 'options') ?>
          </p>
          <a href="<?php echo get_field('pink-banner_btn', 'options')['url'] ?>" class="primary-btn ctc-btn"><?php echo get_field('pink-banner_btn', 'options')['title'] ?></a>
        </div>
      </div>
    </div>
  </div>
</section>