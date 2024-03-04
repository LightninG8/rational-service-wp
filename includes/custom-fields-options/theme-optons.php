<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
Container::make('theme_options', 'Настройки темы')
  ->set_icon('dashicons-carrot')
  ->set_page_parent('themes.php')
  ->add_tab(('Шапка'), array(
    Field::make('image', 'rational_header_logo', 'Логотип'),
    Field::make('text', 'rational_header_title', 'Заголовок'),
    Field::make('text', 'rational_header_location', 'Локация'),
  ))
  ->add_tab(('Подвал'), array(
    Field::make('image', 'rational_footer_logo', 'Логотип'),
    Field::make('text', 'rational_footer_title', 'Заголовок'),
    Field::make('text', 'rational_footer_location', 'Локация'),
    Field::make('text', 'rational_footer_address', 'Адрес склада'),
    Field::make('text', 'rational_footer_email', 'E-mail'),
    Field::make('complex', 'rational_footer_advantages', 'Преимущества')
      ->add_fields(array(
        Field::make('text', 'advantage_title', 'Заголовок'),
        Field::make('text', 'advantage_description', 'Описание'),
      )),
    Field::make('complex', 'rational_footer_copyright', 'Copyright')
      ->add_fields(array(
        Field::make('text', 'copyright_title', 'Заголовок'),
        Field::make('text', 'copyright_link', 'Ссылка'),
      ))
  ))
  ->add_tab(('Меню'), array(
    Field::make('complex', 'rational_menu', 'Меню')
      ->add_fields(array(
        Field::make('text', 'menu_title', 'Заголовок'),
        Field::make('text', 'menu_link', 'Ссылка'),
        Field::make('text', 'menu_sale', 'Скидка'),
      )),
  ))
  ->add_tab(('Контакты'), array(
    Field::make('complex', 'rational_contacts_socials', 'Социальные сети')
      ->add_fields(array(
        Field::make('text', 'social_title', 'Заголовок'),
        Field::make('text', 'social_link', 'Ссылка на соцсеть'),
        Field::make('image', 'social_icon', 'Иконка'),
      )),
    Field::make('complex', 'rational_contacts_phone', 'Номера телефонов')
      ->add_fields(array(
        Field::make('text', 'phone', 'Номер'),
        Field::make('text', 'phone_description', 'Подпись'),
      ))
  ))
  ->add_tab(('Слайдер "Клиенты"'), array(
    // Field::make('complex', 'rational_slider_clients_advantages', 'Преимущества')
    //   ->add_fields(array(
    //     Field::make('text', 'advantage_title', 'Заголовок'),
    //   )),
    Field::make('complex', 'rational_slider_clients_logos', 'Клиенты')
      ->add_fields(array(
        Field::make('image', 'client_image', 'Логотип'),
      )),
  ))
  ->add_tab(('Слайдер "Бренды"'), array(
    Field::make('complex', 'rational_slider_brands', 'Бренды')
      ->add_fields(array(
        Field::make('image', 'brand_image', 'Логотип'),
        Field::make('text', 'brand_title', 'Заголовок'),
      )),
  ));
