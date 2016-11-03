<?php
  /*
    Template Name: Estimator Page
  */

// Advanced Custom Fields
$hero_title = get_field('hero_title');

get_header(); ?>

<!-- Calculator Hero Section -->
<section id="calculator-hero">
  <h1 class="calculator-hero-title"><?php echo $hero_title ?></h1>
</section>

<div class="calculator-content-wrapper">

  <?php get_template_part('template-parts/content', 'estimator-content') ?>
  <?php get_template_part('template-parts/content', 'estimator-calculator') ?>
  
</div>

<?php get_footer(); ?>
