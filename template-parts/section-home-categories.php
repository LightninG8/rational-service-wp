<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

?>
<section class="page__section page__home-categories home-categories">
  <div class="home-categories__body container">
    <h2 class="home-categories__title title">Мы точно знаем потребности наших клиентов</h2>
    <p class="home-categories__subtitle subtitle">И можем решить любые технические задачи, связанные с оборудованием</p>
    <ul class="home-categories__list list">
      <?php
      hierarchical_category_tree(0);

      function hierarchical_category_tree($cat)
      {
        $args = [
          'taxonomy' => 'product_cat',
          'hide_empty' => true,
          'orderby' => 'name',
          'order' => 'ASC',
          'parent' => $cat,
        ];

        $next = get_categories($args);

        if ($next) :
          foreach ($next as $cat) :
            $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
            $image = wp_get_attachment_url($thumbnail_id) ? wp_get_attachment_url($thumbnail_id) : get_template_directory_uri() . '/assets/images/category.png';
      ?>
            <li class="home-categories__item" style="background-image: url('<?php echo $image; ?>')">
              <a href="<?php echo get_category_link($cat->term_id); ?>" class="home-categories__link link">
                <p class="home-categories__name"><?php echo $cat->name; ?></p>
              </a>
            </li>
      <?php
          endforeach;
        endif;
      }
      ?>
    </ul>
  </div>
</section>
