<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}
?>

<section class="page__categories-header categories-header">
  <nav class="categories-header__nav container">
    <ul class="categories-header__list list">
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
      ?>
            <li class="categories-header__item">
              <a href="<?php echo get_category_link($cat->term_id); ?>" class="categories-header__link link"><?php echo $cat->name; ?></a>
            </li>

      <?php
          endforeach;
        endif;
      }
      ?>
    </ul>
  </nav>
</section>
