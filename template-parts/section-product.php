<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

global $product;

$post_thumbnail_id = $product->get_image_id();
$image = wp_get_attachment_url( $post_thumbnail_id );
$name = $product->get_name();

?>
<?php  ?>

<div class="product page__product container">
  <div class="product__body ">
    <div class="product__photo">
      <img class="product__image image" src="<?php echo $image ?>" alt="<?php echo $name ?>">
    </div>
    <div class="product__advantages">
      <p class="product__advantage">
        Диагностика и ремонт
      </p>
      <p class="product__advantage">
        Подключение
      </p>
      <p class="product__advantage">
        Техническое обслуживание
      </p>
      <p class="product__advantage">
        Пусконаладочные работы
      </p>
      <p class="product__advantage">
        Настройка
      </p>
      <p class="product__advantage">
        Монтаж и демонтаж
      </p>
      <p class="product__advantage">
        Исправление ошибок
      </p>
      <p class="product__advantage">
        Запчасти и расходники
      </p>
    </div>
    <div class="product__contact">
      <div class="product__button">
        <span>ОСТАВИТЬ ЗАЯВКУ</span>
        <div class="product__button-image">
          <img class="image contact-form__submit-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-white.png" alt="->">
        </div>
      </div>
      <div class="product__call">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/click.png" alt="click" class="product__call-image">
        <p class="product__call-text"><span class="bold">Перезвоним</span><br/> через 1 минуту</p>
      </div>
    </div>
    <div class="product__banners">
      <div class="product__banner product-banner">
        <div class="product-banner__text">
          <p class="product-banner__title">Скидка 20%</p>
          <p class="product-banner__subtitle">при заключении договора на ТО</p>
        </div>
        <div class="product-banner__photo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-man.png" alt="" class="product-banner__image image">
        </div>
      </div>
      <div class="product__banner product-banner">
        <div class="product-banner__text">
          <p class="product-banner__title">Гарантия</p>
          <p class="product-banner__subtitle">на ремонт до 12 месяцев</p>
        </div>
        <div class="product-banner__photo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-docs.png" alt="" class="product-banner__image image">
        </div>
      </div>
    </div>
  </div>
</div>
