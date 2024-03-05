<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
?>

<section class="page__section page__contact-form contact-form" id="contact-form">

  <div class="contact-form__body container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone.png" class="contact-form__bg image" />

    <h3 class="contact-form__title">Узнайте стоимость ремонта прямо сейчас</h3>
    <p class="contact-form__subtitle">Если вы вышлете нам фото/видео оборудования и опишите кратко опишите,
      то мы сообщим вам примерную стоимость ремонта <span class="bold">до приезда мастера</span></p>
    <div class="contact-form__socials">
      <p class="contact-form__socials-text">Или напишите нам, мы онлайн</p>
      <div class="contact-form__socials-icons">
        <?php $socials_list = carbon_get_theme_option('rational_contacts_socials');
        foreach ($socials_list as $social) {
          $icon_id = $social['social_icon'];
          $icon = $icon_id ? wp_get_attachment_image_src($icon_id, 'full') : '';
          $title = $social['social_title'];
          $link = $social['social_link'];
        ?>
          <a href="<?php echo $link ?>" class="contact-form__social">
            <img src="<?php echo $icon[0] ?>" alt="<?php echo $title ?>" class="contact-form__social-image">
          </a>

        <?php } ?>
      </div>
    </div>
    <?php echo do_shortcode(carbon_get_theme_option('form_contact')); ?>
    <form action="" class="contact-form__form">
      <div class="contact-form__form-column">
        <p class="contact-form__input-title">Введите номер телефона</p>
        <input type="phone" placeholder="+ 7 (_ _ _) _ _ _ - _ _ - _ _" class="contact-form__input" id="contact-form-phone">
        <div class="contact-form__submit-wrapper">
          <label>
            <input type="checkbox" checked>
          </label>
          <div class="contact-form__submit-text">
            <?php $privacy_link = carbon_get_theme_option('privacy_link'); ?>
            Согласен с условиями <a href="<?php echo $privacy_link; ?>" class="contact-form__submit-link link">политики конфиденциальности
              данных</a>
          </div>
        </div>
      </div>
      <div class="contact-form__form-column">
        <button type="submit" class="contact-form__submit" id="contact-form-submit">
          <span>Узнать стоимость</span>
          <div>
            <img class="image contact-form__submit-arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-white.png" alt="->">
          </div>
        </button>
      </div>
    </form>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const contactFormInput = document.querySelector('#contact-form-phone');
        const contactFormButton = document.querySelector('#contact-form-submit');

        const fakeContactFormInput = document.querySelector('.custom-form .wpcf7-text');
        const fakeContactFormButton = document.querySelector('.custom-form .wpcf7-submit');


        contactFormInput.addEventListener('change', (e) => {
          fakeContactFormInput.value = e.target.value;
        });

        contactFormButton.addEventListener('click', () => {
          fakeContactFormButton.click();
        })
      });
    </script>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone-mob.png" class="contact-form__bg-mob image" />
  </div>
</section>
