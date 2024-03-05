<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

$args = array(
  'show_all'     => false, // показаны все страницы участвующие в пагинации
  'end_size'     => 1,     // количество страниц на концах
  'mid_size'     => 2,     // количество страниц вокруг текущей
  'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
  'prev_text'    => __('Назад'),
  'next_text'    => __('Вперед'),
  'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
  'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
  'screen_reader_text' => __('Posts navigation'),
  'class'        => 'pagination', // CSS класс, добавлено в 5.5.0.
);
?>

<div class="page__products-pagination products-pagination">
  <div class="products-pagination__body container">
    <?php the_posts_pagination($args); ?>
  </div>
</div>
