<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

$args = array(
  'delimiter' => '',
  'wrap_before' => '<nav class="container breadcrumbs__nav"><ul class="breadcrumbs__list list">',
  'wrap_after' => '</ul></nav>',
  'before' => ' <li class="breadcrumbs__item">',
  'after' => ' </li>',
  'home' => _x('Главная', 'breadcrumb', 'woocommerce'),
);
?>

<section class="page__breadcrumbs breadcrumbs">
  <nav class="container breadcrumbs__nav">

    <?php echo woocommerce_breadcrumb($args); ?>
    <!-- <ul class="breadcrumbs__list list">
      <li class="breadcrumbs__item">
        <a href="#" class="breadcrumbs__link link">Главная</a>
      </li>
      <li class="breadcrumbs__item">
        <a href="#" class="breadcrumbs__link link">Каталог</a>
      </li>
      <li class="breadcrumbs__item">
        <a href="#" class="breadcrumbs__link link">Холодильное оборудование</a>
      </li>
    </ul> -->
  </nav>

</section>
