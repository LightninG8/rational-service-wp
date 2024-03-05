<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rational
 */

?>

</main><!-- #content -->

<footer class="site-footer footer page__footer" id="footer">
  <div class="container footer__main">
    <div class="footer__column footer-column footer__column_logo">
      <!-- LOGO -->
      <div class="footer__logo-wrapper">
        <?php $footer_logo_id = carbon_get_theme_option('rational_footer_logo');
        $footer_logo = $footer_logo_id ? wp_get_attachment_image_src($footer_logo_id, 'full') : '';
        $footer_title = carbon_get_theme_option('rational_footer_title') ? carbon_get_theme_option('rational_footer_title') : get_bloginfo('name');
        ?>
        <a href="<?php echo home_url('/'); ?>" class="footer__logo link">
          <img class="footer__logo-image" src="<?php echo $footer_logo[0]; ?>">
        </a>
        <p class="footer__logo-title">
          <?php echo $footer_title; ?>
        </p>
      </div>

      <!-- LOCATION -->
      <div class="footer__location">
        <?php
        $footer_location = carbon_get_theme_option('rational_footer_location') ? carbon_get_theme_option('rational_footer_location') : 'Москва и МО';
        ?>
        <div class="footer__icon-wrapper">
          <img class="footer__icon-pointer" src="<?php echo get_template_directory_uri() ?>/assets/images/pointer-small.png" alt="">
        </div>
        <p class="footer__location-title bold"><?php echo $footer_location; ?></p>
      </div>

      <?php
      $footer_address = carbon_get_theme_option('rational_footer_address');
      $footer_email = carbon_get_theme_option('rational_footer_email');
      ?>

      <?php if ($footer_address) { ?>
        <div class="footer__address">
          <p class="footer__address-title">Адрес склада:</p>
          <p class="footer__address-text"><?php echo $footer_address; ?></p>
        </div>
      <?php } ?>

      <?php if ($footer_email) { ?>
        <a href="mailto:<?php echo $footer_email; ?>" class="footer__email link"><?php echo $footer_email; ?></a>
      <?php } ?>
    </div>

    <!-- CONTACTS -->
    <div class="footer__column footer-column footer__column_contacts">
      <?php $contacts_list = carbon_get_theme_option('rational_contacts_phone'); ?>
      <p class="footer__title">Контакты</p>
      <div class="footer-column__body">
        <?php
        foreach ($contacts_list as $contact) {
          $phone = $contact['phone'];
          $phone_description = $contact['phone_description'];
        ?>


          <a class="footer__contact footer-contact link" href="tel:<?php echo $phone ?>">
            <p class="footer-contact__phone bold"><?php echo $phone ?></p>
            <p class="footer-contact__title"><?php echo $phone_description ?></p>
          </a>

        <?php } ?>



        <div class="footer-column__socials footer-socials">
          <div class="footer-socials__wrapper">
            <?php
            $socials_list = carbon_get_theme_option('rational_contacts_socials');

            foreach ($socials_list as $social) {
              $icon_id = $social['social_icon'];
              $icon = $icon_id ? wp_get_attachment_image_src($icon_id, 'full') : '';
              $title = $social['social_title'];
              $link = $social['social_link'];
            ?>
              <a href="<?php echo $link ?>" class="footer-socials__social">
                <img class="footer-socials__social-icon image" src="<?php echo $icon[0] ?>" alt="<?php echo $title ?>">
              </a>

            <?php } ?>
          </div>

          <p class="footer-socials__title footer-socials__title_always">На связи <span class="bold">24/7</span> </p>
        </div>
      </div>


    </div>

    <!-- MENU -->
    <nav class="footer__column footer-column footer__column_nav nav">
      <p class="footer__title">Навигация по сайту</p>
      <?php $site_menu = carbon_get_theme_option('rational_menu'); ?>
      <ul class="footer__menu footer-column__body list">
        <?php
        foreach ($site_menu as $menu_item) {
          $title = $menu_item['menu_title'];
          $link = $menu_item['menu_link'] ? $menu_item['menu_link'] : '/';
          $sale = $menu_item['menu_sale'];

          if ($title) {
        ?>

            <li class="nav__footer-item">
              <a href="<?php echo $link ?>" class="link nav__footer-link" <?php if ($sale) { ?>data-value="<?php echo $sale ?>" <?php } ?>>
                <?php echo $title ?>
              </a>
            </li>

        <?php }
        } ?>
      </ul>
    </nav>

    <!-- ADVANTAGES -->
    <div class="footer__column footer-column footer__column_advantages footer-advantages">
      <?php $footer_advantages = carbon_get_theme_option('rational_footer_advantages'); ?>
      <p class="footer__title">Преимущества</p>
      <ul class="footer-column__body list footer-advantages footer-advantages__list">
        <?php
        foreach ($footer_advantages as $advantage) {
          $title = $advantage['advantage_title'];
          $description = $advantage['advantage_description'];

          if ($title) {
        ?>
            <li class="footer-advantages__item">
              <p class="footer-advantages__title"><?php echo $title ?></p>
              <p class="footer-advantages__subtitle"><?php echo $description ?></p>
            </li>
        <?php }
        } ?>

      </ul>
    </div>
  </div>
  <div class="container footer__copyright copyright">
    <?php
    $footer_copyright = carbon_get_theme_option('rational_footer_copyright');
    foreach ($footer_copyright as $copyright) {
      $title = $copyright['copyright_title'];
      $link = $copyright['copyright_link'];

      if ($link) {
    ?>
    <a href="<?php echo $link ?>" class="copyright__item link copyright__link"><?php echo $title ?></a>
    <?php } else {?>
      <p class="copyright__item"><?php echo $title ?></p>
    <?php }} ?>
  </div>


</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html>
