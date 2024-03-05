<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

if (post_password_required()) {
  echo get_the_password_form(); // WPCS: XSS ok.
  return;
}

$name = $product->get_name();
?>
<section class="page__content">
  <?php get_template_part('template-parts/section-breadcrumbs'); ?>
  <div class="page__title title container"><?php echo $name ?></div>
  <?php get_template_part('template-parts/section-product'); ?>
</section>
<?php get_template_part('template-parts/section-clients'); ?>
<?php get_template_part('template-parts/section-contact-form'); ?>
