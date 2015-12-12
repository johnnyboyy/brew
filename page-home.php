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


<div class="section-wrapper bg-light-gray">
  <div id="homeCarousel" class="carousel slide" data-ride="carousel" data-speed="7000">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="container">
          <div class="row">
            <h1 class="text-center no-padt">Home Equity Line of Credit</h1>
            <div class="divider bg-gray"></div>
            <div class="row carousel-box">
              <div class="col-md-6 col-sm-12">
                <p class="carousel-img"><img src="http://placehold.it/500x500"></p>
              </div>
              <div class="col-md-6 col-sm-12">
                <p>Post Text Here</p>
                <p><a class="btn btn-xlg btn-seveti-gold" href="#" role="button">ACF: Post Link Here</a></p>
              </div>
            </div>
          </div>
          <div class="divider bg-gray"></div>
        </div>
      </div>
  <!--     <div class="item active">
        <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div> -->
      <!-- <div class="item">
        <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div> -->
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
      <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#homeCarousel" data-slide-to="1" class=""></li>
      <li data-target="#homeCarousel" data-slide-to="2" class=""></li>
    </ol>
  </div>
</div>

<div class="lowerbanner">
  <div class="container">
    <div class="row">
      <div class="col-md-6 lowerbanner-left-pad">
        <h1 class="t-white">Planning &amp;<br /> Investments</h1>
        <div class="divider"></div>
        <p class="subtitle">You might be able to use a portion of your homes value to spruce it up or pay other bills with a Home Equity Line of Credit. To find out if you may be eligible for a HELOC</p>
        <p class="t-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-6">
        <img class="lowerbanner-person" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/business-woman.png">
      </div>
    </div><!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- end #banner-->

<div class="footer-attic">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-lg-push-1 text-center">
        <h4 class="t-seveti-gold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
        <p class="t-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
          
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="classy-box t-seveti-gold">
              <div class="classy-icon <?php echo $icons[$index]; ?>"></div>
              <p><?php echo $text; ?></p>
            </div>
          </div>

          <?php $index += 1; ?>

        <?php endwhile; ?>

    </div>
  </div>

  <?php endif; ?>
     
</div>

<?php get_footer(); ?>
