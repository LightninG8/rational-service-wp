<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

?>

<?php get_header(); ?>

<section class="page__content">
  <?php get_template_part('template-parts/section-breadcrumbs'); ?>
  <div class="page__title title container"><?php woocommerce_page_title(); ?></div>
  <?php get_template_part('template-parts/section-categories-header'); ?>
  <?php get_template_part('template-parts/section-name-filter'); ?>

  <div class="page__product-list product-list">
    <div class="product-list__body container">
      <ul class="product-list__list list">
        <?php
        if (woocommerce_product_loop()) {
          // woocommerce_product_loop_start();

          if (wc_get_loop_prop('total')) {
            while (have_posts()) {
              the_post();

              /**
               * Hook: woocommerce_shop_loop.
               */
              do_action('woocommerce_shop_loop');

              wc_get_template_part('content', 'product');
            }
          }

          // woocommerce_product_loop_end();
        } ?>
      </ul>

    </div>
  </div>
  <?php get_template_part('template-parts/section-pagination'); ?>

</section>

<?php get_template_part('template-parts/section-clients'); ?>
<?php get_template_part('template-parts/section-contact-form'); ?>

<?php get_footer(); ?>
