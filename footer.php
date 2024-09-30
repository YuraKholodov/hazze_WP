<!-- Footer Section Begin -->
<section class="footer-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="footer-option">
					<div class="fo-logo">
						<a href="/">
							<img src="<?php echo get_field('header-logo', 'options')['url'] ?>" alt="<?php echo get_field('header-logo', 'options')['alt'] ?>">
						</a>
					</div>
					<ul>
						<?php

						// проверяем есть ли в повторителе данные
						if (have_rows('footer_inform-repeater', 'options')):

							// перебираем данные
							while (have_rows('footer_inform-repeater', 'options')) : the_row(); ?>
								<ul>
									<?php if (!get_sub_field('is_link', 'options')) { ?>
										<li>
											<?php the_sub_field('first-text', 'options') ?>
											<?php the_sub_field('second-text', 'options') ?>
										</li>
									<?php } else { ?>
										<li>
											<?php the_sub_field('first-text', 'options') ?>
											<a href="<?php echo get_sub_field('link', 'options')['url'] ?>">
												<?php echo get_sub_field('link', 'options')['title'] ?>
											</a>
										</li>
									<?php } ?>
								</ul>
						<?php endwhile;

						else :
							// вложенных полей не найдено
							echo 'Ошибка, поля не найдены!';

						endif;

						?>
					</ul>
					<div class="fo-social">
						<?php

						// проверяем есть ли в повторителе данные
						if (have_rows('footer_social-repeater', 'options')):

							// перебираем данные
							while (have_rows('footer_social-repeater', 'options')) : the_row(); ?>

								<a href="<?php the_sub_field('link'); ?>">
									<i class="fa fa-<?php the_sub_field('social'); ?>"></i>
								</a>

						<?php endwhile;

						else:

							echo 'Ошибка, поля не найдены!!!!!!!';

						endif;

						?>

					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget fw-links">
					<h5><?php the_field('footer_menu-title', 'options') ?></h5>
					<?php wp_nav_menu([
						'theme_location'  => 'footer_menu',
						'container'       => '',
						'container_class' => 'main-menu mobile-menu',
						'depth'           => 0,
					]); ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget">
					<?php echo do_shortcode('[contact-form-7 id="01cfb07" title="Контактная форма 1" html_class="news-form"]') ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-widget">
					<h5><?php the_field('footer_gallery-title', 'options') ?></h5>
					<div class="insta-pic">
						<?php

						$images = get_field('footer_gallery', 'options');

						if ($images): ?>
							<ul>
								<?php foreach ($images as $image): ?>

									<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>">

								<?php endforeach; ?>
							</ul>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
		<div class="copyright-text">
			<p>
				Copyright &copy;<script>
					document.write(new Date().getFullYear());
				</script>
			</p>
		</div>
	</div>
</section>
<!-- Footer Section End -->

<?php wp_footer(); ?>
</body>

</html>