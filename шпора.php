<?php echo get_template_directory_uri() ?> Получает и выводит путь к корню шаблона

Вывод постов

<?php $query = new WP_Query(['post_type' => 'our-team', 'post_per_page' => 3]); ?>

<?php while ($query->have_posts()) {
  $query->the_post(); ?>
  
  <?php the_title() ?>
  <?php the_content() ?>
  <?php echo get_the_post_thumbnail_url(size: 'large') ?>


<?php }

wp_reset_postdata(); // ВАЖНО вернуть global $post обратно 
?>




ACF =============================

<?php the_field('key') ?> Получает и выводит значение
<?php the_field('footer_menu-title', 'options') ?>
<?php echo get_field('key')[''] ?> Получает и выводит значение
<?php echo get_field('key', 'option')[''] ?> Получает и выводит значение из опций темы


Повторитель

<?php

// проверяем есть ли в повторителе данные
if (have_rows('repeater_field_name')):

  // перебираем данные
  while (have_rows('repeater_field_name')) : the_row(); ?>

    <?php the_sub_field('sub_field_name'); ?>

<?php endwhile;

else :
  // вложенных полей не найдено
  echo 'Ошибка, поля не найдены!';

endif;

?>