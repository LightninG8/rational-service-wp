<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rational
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">

    <header id="masthead" class="site-header page__header header">
      <div class="header__main">
        <div class="container header__body">

          <!-- LOGO -->
          <div class="header__column header__logo logo">
            <?php $header_logo_id = carbon_get_theme_option('rational_header_logo');
            $header_logo = $header_logo_id ? wp_get_attachment_image_src($header_logo_id, 'full') : '';
            $header_title = carbon_get_theme_option('rational_header_title') ? carbon_get_theme_option('rational_header_title') : get_bloginfo('name');
            ?>


            <?php
            if ($header_logo_id) :  ?>
              <a href="<?php echo home_url('/'); ?>" class="logo__container">
                <img class="logo__image image" src="<?php echo $header_logo[0]; ?>" alt="Cервисная служба Рациональ - сервис">
              </a>
              <h2 class="logo__title bold"><?php echo $header_title; ?></h2>
            <?php else : ?>
              <h2 class="logo__title bold"><?php echo $header_title; ?></h2>
            <?php endif; ?>
          </div>

          <!-- LOCATION -->
          <div class="header__column header__location location">
            <?php
            $header_location = carbon_get_theme_option('rational_header_location') ? carbon_get_theme_option('rational_header_location') : 'Москва и МО';
            ?>
            <div class="location__body">
              <img class="location__icon" src="<?php echo get_template_directory_uri() ?>/assets/images/pointer-small.png" alt="">
            </div>
            <p class="location__title bold"><?php echo $header_location; ?></p>
          </div>

          <!-- SOCIALS -->
          <div class="header__column header__socials socials">
            <?php $socials_list = carbon_get_theme_option('rational_contacts_socials'); ?>
            <div class="socials__icons ">

              <?php
              foreach ($socials_list as $social) {
                $icon_id = $social['social_icon'];
                $icon = $icon_id ? wp_get_attachment_image_src($icon_id, 'full') : '';
                $title = $social['social_title'];
                $link = $social['social_link'];
              ?>

                <a href="<?php echo $link ?>" class="socials__item">
                  <img class="socials__image image" src="<?php echo $icon[0] ?>" alt="<?php echo $title ?>">
                </a>

              <?php } ?>
            </div>
            <div class="socials__text">
              <p class="socials__title bold">Есть вопрос?</p>
              <p class="socials__subtitle">Задайте напрямую</p>
            </div>
          </div>

          <!-- CONTACTS -->
          <div class="header__column header__contacts contacts">
            <?php $contacts_list = carbon_get_theme_option('rational_contacts_phone'); ?>

            <div class="contacts__row contacts__row_text">
              <p class="contacts__title contacts__title_always">На связи <span class="bold">24/7</span> </p>
            </div>
            <div class="contacts__row contacts__row_contacts">
              <?php
              foreach ($contacts_list as $contact) {
                $phone = $contact['phone'];
                $phone_description = $contact['phone_description'];
              ?>

                <a class="contacts__contact contact link" href="tel:<?php echo $phone ?>">
                  <div class="contact__row">
                    <div class="contact__icon">
                      <img class="contact__image" src="<?php echo get_template_directory_uri() ?>/assets/images/phone.png">
                    </div>
                    <p class="contact__phone bold"><?php echo $phone ?></p>
                  </div>
                  <div class="contact__row">
                    <p class="contact__title"><?php echo $phone_description ?></p>
                  </div>
                </a>

              <?php } ?>
            </div>
          </div>

          <div class="header__burger burger">
            <div class="burger__row"></div>
            <div class="burger__row"></div>
            <div class="burger__row"></div>
          </div>
        </div>
      </div>

      <div class="header__menu">
        <nav class="container header__nav nav">
          <?php $site_menu = carbon_get_theme_option('rational_menu'); ?>

          <ul class="nav__header-list list">
            <?php
            foreach ($site_menu as $menu_item) {
              $title = $menu_item['menu_title'];
              $link = $menu_item['menu_link'] ? $menu_item['menu_link'] : '/';
              $sale = $menu_item['menu_sale'];

              if ($title) {
            ?>

                <li class="nav__header-item">
                  <a href="<?php echo $link ?>" class="link nav__header-link" <?php if ($sale) { ?>data-value="<?php echo $sale ?>" <?php } ?>>
                    <?php echo $title ?>
                  </a>
                </li>

            <?php }
            } ?>
          </ul>
        </nav>
      </div>

      <div class="header__mobile mobile">
        <div class="container mobile__body">
          <nav class="mobile__nav nav">
            <?php $site_menu = carbon_get_theme_option('rational_menu'); ?>
            <ul class="nav__mobile-list list">

              <?php
              foreach ($site_menu as $menu_item) {
                $title = $menu_item['menu_title'];
                $link = $menu_item['menu_link'] ? $menu_item['menu_link'] : '/';
                $sale = $menu_item['menu_sale'];

                if ($title) {
              ?>

                  <li class="nav__mobile-item">
                    <a href="<?php echo $link ?>" class="link nav__mobile-link" <?php if ($sale) { ?>data-value="<?php echo $sale ?>" <?php } ?>>
                      <?php echo $title ?>
                    </a>
                  </li>

              <?php }
              } ?>
            </ul>
          </nav>

          <div class="mobile__location mobile-location">
            <?php
            $header_location = carbon_get_theme_option('rational_header_location') ? carbon_get_theme_option('rational_header_location') : 'Москва и МО';
            $footer_address = carbon_get_theme_option('rational_footer_address');
            $footer_email = carbon_get_theme_option('rational_footer_email');
            ?>

            <div class="mobile-location__location">
              <div class="mobile-location__icon-wrapper">
                <img class="mobile-location__icon" src="<?php echo get_template_directory_uri() ?>/assets/images/pointer-small.png" alt="">
              </div>
              <p class="mobile-location__title bold"><?php echo $header_location; ?></p>
            </div>
            <?php if ($footer_address) { ?>
              <div class="mobile-location__address">
                <p class="mobile-location__address-title">Адрес склада:</p>
                <p class="mobile-location__address-text"><?php echo $footer_address; ?></p>
              </div>
            <?php } ?>
            <?php if ($footer_email) { ?>
              <a href="mailto:<?php echo $footer_email; ?>" class="mobile-location__email link"><?php echo $footer_email; ?></a>
            <?php } ?>

            <div class="mobile-location__socials">
              <?php
              $socials_list = carbon_get_theme_option('rational_contacts_socials');

              foreach ($socials_list as $social) {
                $icon_id = $social['social_icon'];
                $icon = $icon_id ? wp_get_attachment_image_src($icon_id, 'full') : '';
                $title = $social['social_title'];
                $link = $social['social_link'];
              ?>

                <a href="<?php echo $link ?>" class="mobile-location__social">
                  <img class="mobile-location__social-icon image" src="<?php echo $icon[0] ?>" alt="<?php echo $title ?>">
                </a>

              <?php } ?>
            </div>
          </div>

          <div class="mobile__contacts contacts">
            <?php $contacts_list = carbon_get_theme_option('rational_contacts_phone'); ?>
            <div class="mobile-contacts__row mobile-contacts__row_text">
              <p class="mobile-contacts__title mobile-contacts__title_always">На связи <span class="bold">24/7</span> </p>
            </div>
            <?php
            foreach ($contacts_list as $contact) {
              $phone = $contact['phone'];
              $phone_description = $contact['phone_description'];
            ?>
              <a class="mobile-contacts__contact mobile-contact link" href="tel:<?php echo $phone ?>">
                <div class="mobile-contact__row">
                  <div class="mobile-contact__icon">
                    <img class="mobile-contact__image" src="<?php echo get_template_directory_uri() ?>/assets/images/phone.png" alt="">
                  </div>
                  <p class="mobile-contact__phone bold"><?php echo $phone ?></p>
                </div>
                <div class="mobile-contact__row">
                  <p class="mobile-contact__title"><?php echo $phone_description ?></p>
                </div>
              </a>

            <?php } ?>
          </div>
        </div>
      </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
