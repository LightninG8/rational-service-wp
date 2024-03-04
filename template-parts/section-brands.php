<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
?>

<section class="page__section brands">
  <?php
  $slider_brands = carbon_get_theme_option('rational_slider_brands');
  ?>
  <div class="container brands__body">
    <h2 class="title page__title">Более <span class="red">300</span></h2>
    <p class="subtitle page__subtitle">брендов техники, ремонтом которой мы занимаемся</p>
  </div>
  <div class="brands__slider container">
    <?php
    foreach ($slider_brands as $brand) {
      $image_id = $brand['brand_image'];
      $image = $image_id ? wp_get_attachment_image_src($image_id, 'full') : '';
      $title = $brand['brand_title'];
    ?>

      <div class="brands__slide">
        <div class="brands__slide-body">
          <div class="brands__slide-photo">
            <img src="<?php echo $image[0] ?>" class="brands__slder-image image" />
          </div>
          <div class="brands__slide-title"><?php echo $title ?></div>
        </div>
      </div>

    <?php } ?>
  </div>
  <div class="brands__controls container">
    <div class="brands__arrows">
      <div class="brands__arrow prev-arrow"></div>
      <div class="brands__arrow next-arrow"></div>
    </div>
    <div class="brands__catalog">
      <p class="brands__catalog-title">Подробнее в нашем каталоге</p>
      <a href="#" class="brands__catalog-link link">Перейти в каталог</a>
    </div>
  </div>
</section>
