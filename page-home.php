<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

<div class="homebanner">
  <div class="container">
    <div class="row">
      <div class="col-md-6 homebanner-size">
        <h1>Personal <span class="t-seveti-gold">&amp;</span><br /> Business Banking</h1>
          <p><a href="http://danvswild.com" target="_blank" class="btn btn-xlg btn-seveti-gold">Read More<span class="stupid-fucking-line"></span></a></p>
      </div>
      <div class="col-md-6">
        <img class="homebanner-person" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/homebanner-person.png">
      </div>
    </div><!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- end #banner-->

<?php if( have_rows('home_boxes') ): 
  $index = 1;
?>

  <div class="section-wrapper no-padt">
    <div class="container">
      <div class="row">

      <?php while( have_rows('home_boxes') ): the_row(); 

        // vars
        $title = get_sub_field('home_box_title');
        $content = get_sub_field('home_box_text');
        $link = get_sub_field('home_box_button_link');
        $color = seveti_get_homebox_color($index);

        ?>

        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="home-box seveti-logo-bg bg-seveti-<?php echo $color; ?> text-center t-white">
            <h3><?php echo $title; ?></h3>
            <p><?php echo $content; ?></p>
            <p class="btn-holder"><a class="btn btn-md btn-skeletal-<?php echo $color; ?>" href="<?php echo $link; ?>" role="button">Read More</a></p>
          </div>
        </div>

        <?php $index += 1; ?>

      <?php endwhile; ?>

    </div>
  </div>
</div>

<?php endif; ?>

<?php 
// the args
$args = array(
  'post_type' => 'carousel_slide',
  );

// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : 
  $index = 0;
?>
  <div class="section-wrapper bg-light-gray">
    <div id="homeCarousel" class="carousel slide" data-ride="carousel" data-speed="7000">
      <div class="carousel-inner" role="listbox">
  <!-- the loop -->
  <?php while ( $the_query->have_posts() ) : $the_query->the_post();
    $link_text = get_post_meta( get_the_ID(), 'read_more_button_button-text', TRUE );
    $link = get_post_meta( get_the_ID(), 'read_more_button_button-link', TRUE );
  ?>

        <div class="item <?php echo $index == 0 ? 'active' : null; ?>">
          <div class="container">
            <div class="row-fluid">
              <h1 class="text-center no-padt"><?php the_title(); ?></h1>
              <div class="divider bg-gray"></div>
              <div class="row carousel-box">
                <div class="col-md-6 col-sm-12">
                  <p class="carousel-img"><?php the_post_thumbnail('full'); ?></p>
                </div>
                <div class="col-md-6 col-sm-12">
                  <?php the_content(); ?>
                  <p class="md-mart"><a class="btn btn-xlg btn-seveti-gold" href="<?php echo $link; ?>" role="button"><?php echo $link_text; ?></a></p>
                </div>
              </div>
            </div>
            <div class="divider bg-gray"></div>
          </div>
        </div>
  <?php $index += 1; ?>
  <?php endwhile; ?>
  <!-- end of the loop -->

  <?php wp_reset_postdata(); ?>
      </div>
      <!-- <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->

      <!-- Indicators -->
      <ol class="carousel-indicators seveti-gold">
      <?php for ($i=0; $i < $index; $i++) { ?>
        <li data-target="#homeCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $i == 0 ? 'active' : null; ?>"></li>
      <?php } ?>
      </ol>
    </div>
  </div>
<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<div class="lowerbanner">
  <div class="container">
    <div class="row-fluid">
      <div class="col-md-6 lowerbanner-left-pad">
        <?php echo get_field('home_lower_banner_title') ? '<h1 class="t-white">'.get_field('home_lower_banner_title').'</h1>' : null ;?>
        <div class="divider"></div>
        <?php echo get_field('home_lower_banner_subtitle') ? '<p class="subtitle">'.get_field('home_lower_banner_subtitle').'</p>' : null ;?></p>
        <?php echo get_field('home_lower_banner_content') ? '<p class="t-white">'.get_field('home_lower_banner_content').'</p>' : null ;?></p>
      </div>
      <div class="col-md-6">
        <img class="lowerbanner-person" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/business-woman.png">
      </div>
    </div><!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- end #banner-->

<div class="footer-attic">
  <div class="container">
    <div class="row lg-marb">
      <div class="col-lg-10 col-lg-push-1 text-center">
        <?php echo get_field('home_bottom_gold_text') ? '<h4 class="t-seveti-gold">'.get_field('home_bottom_gold_text').'</h4>' : null ;?></h4>
        <?php echo get_field('home_bottom_regular_text') ? '<p class="t-white">'.get_field('home_bottom_regular_text').'</p>' : null ;?></p>
      </div>
    </div>
  </div>
  <?php if( have_rows('home_classy_footer_boxes') ): 
    $index = 0;
  ?>

    <div class="container">
      <div class="row">

        <?php while( have_rows('home_classy_footer_boxes') ): the_row(); 

          // vars
          $text = get_sub_field('classy_box_text');
          $link = get_sub_field('classy_box_link');
          $icons = array('wallet', 'cards', 'chart', 'house', 'car', 'hand');

          ?>
          <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6  lg-mart">
            <a href="<?php echo $link; ?>">
              <div class="classy-box t-seveti-gold text-center">
                <div class="classy-icon <?php echo $icons[$index]; ?>"></div>
                <p><?php echo $text; ?></p>
              </div>
            </a>
          </div>

          <?php $index += 1; ?>

        <?php endwhile; ?>

    </div>
  </div>

  <?php endif; ?>
     
</div>

<?php get_footer(); ?>
