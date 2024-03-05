<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
  return;
}

$thumbnail_id = $post_thumbnail_id = $product->get_image_id();
$image = wp_get_attachment_url( $post_thumbnail_id );
?>

<li class="product-list__item <?php wc_product_class('', $product); ?>">
  <a href="<?php echo get_permalink($product->post->id) ?>" class="product-list__link link">
    <div class="product-list__photo">
      <img src="<?php echo $image; ?>" alt="<?php echo $product->get_title(); ?>" class="product-list__image image">
    </div>
    <p class="product-list__name"><?php echo $product->get_title(); ?></p>
  </a>
</li>
