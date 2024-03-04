<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
?>

<section class="page__section page__clients clients">
  <?php
  $slider_clients = carbon_get_theme_option('rational_slider_clients_logos');
  ?>

  <div class="clients__body container">
    <h2 class="clients__title page__title title">Регулярное техническое обслуживание</h2>
    <p class="clients__subtitle page__subtitle subtitle">Пополните список наших клиентов</p>
    <div class="clients__advantages">
      <div class="clients__advantage"><span class="bold">Приоритет</span> ремонта</div>
      <div class="clients__advantage"><span class="bold">-20%</span> от стоимости ремонта</div>
      <div class="clients__advantage"><span class="bold">Подменное</span> оборудование</div>
      <div class="clients__advantage"><span class="bold">Фото/видео отчеты</span> в приложении</div>
      <div class="clients__advantage">Оплата <span class="bold">после ремонта</span></div>
    </div>
  </div>
  <div class="clients__slider">
    <?php
    $nested_slides = array();
    $buffer_array = array();

    foreach ($slider_clients as $client) {
      array_push($buffer_array, $client);

      if (count($buffer_array) == 2) {
        array_push($nested_slides, $buffer_array);

        $buffer_array = array();
      }
    }


    foreach ($nested_slides as $slide) {
    ?>
      <div class="clients__slide-wrapper">
        <div class="clients__slide">
          <?php

          foreach ($slide as $client) {
            $image_id = $client['client_image'];
            $image = $image_id ? wp_get_attachment_image_src($image_id, 'full') : '';
          ?>
            <img src="<?php echo $image[0] ?>" alt="">
          <?php
          }

          ?>
        </div>
      </div>

    <?php } ?>

  </div>
</section>
