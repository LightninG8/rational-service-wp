<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
?>
<section class="page__section page__steps steps" id="steps">
  <div class="container steps__body">
    <h2 class="page__title title"><span class="red">Процесс нашей работы</span> в 4 этапах</h2>
    <p class="page__subtitle subtitle">Мы лидеры отрасли и никто не может нас опередить в качестве сервиса для клиентов
    </p>

    <ul class="steps__list list">
      <li class="steps__item step">
        <div class="step__header">
          <div class="step__counter">Шаг 1</div>
          <div class="step__arrow"></div>
        </div>
        <div class="step__body">
          <?php $phone = carbon_get_theme_option('rational_contacts_phone')[0]['phone']; ?>
          <div class="step__title">Свяжитесь с нами</div>
          <div class="step__phone"><?php echo $phone ?></div>
          <div class="step__subtitle">Ответим вам в течение 1 минуты и через 15 минут назначим мастера</div>


        </div>
        <div class="step__socials-wrapper">
          <?php $socials_list = carbon_get_theme_option('rational_contacts_socials'); ?>
          <div class="step__socials-title">Или оставляйте заявку на сайте</div>
          <div class="step__socials">
            <?php
            foreach ($socials_list as $social) {
              $icon_id = $social['social_icon'];
              $icon = $icon_id ? wp_get_attachment_image_src($icon_id, 'full') : '';
              $title = $social['social_title'];
              $link = $social['social_link'];
            ?>

              <a href="<?php echo $link ?>" class="step__socials-link link">
                <img src="<?php echo $icon[0] ?>" alt="<?php echo $title ?>" class="step__social-image">
              </a>

            <?php } ?>


          </div>
        </div>

        <a href="/#contact-form" class="step__button link">
          <span>ОСТАВИТЬ ЗАЯВКУ</span>
          <div class="step__button-image">
            <img class="image step__contact-arrow" src="<?php echo get_template_directory_uri() ?>/assets/images/arrow-white.png" alt="->">
          </div>
        </a>

      </li>
      <li class="steps__item step">
        <div class="step__header">
          <div class="step__counter">Шаг 2</div>
          <div class="step__arrow"></div>

        </div>
        <div class="step__body">
          <div class="step__title">Мастер приедет в течение 6 часов</div>
          <div class="step__subtitle">Максимальное время от подачи заявки до приезда мастера на объект по срочным
            заявкам</div>
        </div>

      </li>
      <li class="steps__item step">
        <div class="step__header">
          <div class="step__counter">Шаг 3</div>
          <div class="step__arrow"></div>

        </div>
        <div class="step__body">
          <div class="step__title">Отремонтируем за сутки</div>
          <div class="step__subtitle">24 часа - среднее время ремонта при наличии запчастей на складе</div>
        </div>

      </li>
      <li class="steps__item step">
        <div class="step__header">
          <div class="step__counter">Шаг 4</div>
          <div class="step__arrow"></div>

        </div>
        <div class="step__body">
          <div class="step__title">Предоставим гарантию</div>
          <div class="step__subtitle">90 дней на работы, 1 год на запчасти</div>
        </div>

      </li>
    </ul>
  </div>
</section>
