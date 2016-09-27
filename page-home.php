<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

<div class="container">
  <div id="main" class="row" role="main">

    <?php if (have_posts()) :?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="col-md-12 clearfix">
          <h1><?php the_title(); ?></h1>
          <div class="content">
            <?php the_content(); ?>
          </div>
        </div>

      <?php endwhile; ?>
    <?php endif;?>

  </div>
</div>

<?php get_footer(); ?>
