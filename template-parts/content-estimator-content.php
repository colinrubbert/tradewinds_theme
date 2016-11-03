<?php
/*
  Template part for displaying the Estimator Content section
*/

// Advanced Custom Fields
$information_heading              = get_field('information_heading');
?>

<!-- Information Container Section -->
<section id="information-container">
  <h2 class="information-heading"><?php echo $information_heading ?></h2>

  <!-- Loop through calculator content -->
  <?php $loop = new WP_Query( array( 'post_type' => 'calculator_content', 'orderby' => 'post_id', 'order' => 'ASC')); ?>

  <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>

</section>
