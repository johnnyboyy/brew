<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

<div class="homebanner" style="background-image:url(<?php echo get_field('home_banner_image') ? get_field('home_banner_image') : null; ?>);" >
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php 
          if(get_field('banner_text'))
            {
              echo get_field('banner_text');
            }
        ?>
      </div>
    </div><!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- end #banner-->

<div class="light wrapper home-spacing">
  <div class="container">
    <div class="row text-center">
      
      <!--Section 1-->
      <div class="col-sm-4 home-section">
        <div class="icon-circle"><i class="fa fa-line-chart fa-4x"></i></div>
        <h3>Build Wealth</h3>
        <p>Acheive your financial goals and maximize your wealth via a customized, easy-to-use and secure investment platform.</p>
        <p class="home-page-link"><a href="#">About Us ></a></p>
      </div>
      
      <!--Section 2-->
      <div class="col-sm-4 home-section">
        <div class="icon-circle"><i class="fa fa-money fa-4x"></i></div>
        <h3>Save Time &amp; Money</h3>
        <p>Create a diversified portfolio at a fraction of the cost and at a lower account minimum than ever before.</p>
        <p class="home-page-link"><a href="#">Portfolios ></a></p>
      </div>
      
      <!--Section 3-->
      <div class="col-sm-4 home-section">
        <div class="icon-circle"><i class="fa fa-users fa-4x"></i></div>
        <h3>Invest in Yourself</h3>
        <p>Take advantage of our other services, such as financial and retirement planning, to secure your financial future.</p>
        <p class="home-page-link"><a href="#">Services ></a></p>
      </div>
      
    </div>
  </div>
</div>

<div class="dark wrapper home-spacing">
  <div class="container">
    <div class="row text-center">
      <h2>The Acorn Process</h2>
      
      <!--Section 1-->
      <div class="col-sm-4 home-section">
        <div class="green icon-circle"><i class="number fa-4x">1</i></div>
        <h3>Create a Profile</h3>
        <p>Fill out a simple yet comprehensive questionaire that allows us to develop an investment portfolio that takes into account your stage in life and personal financial goals.</p>
      </div>
      
      <!--Section 2-->
      <div class="col-sm-4 home-section">
        <div class="green icon-circle"><i class="number fa-4x">2</i></div>
        <h3>Invest</h3>
        <p>Open an account on-line, find your account and let us do the rest. We'll rebalance, automatically reinvest your divideds and manage your portfolio in a tax-efficient manner.</p>
      </div>
      
      <!--Section 3-->
      <div class="col-sm-4 home-section">
        <div class="green icon-circle"><i class="number fa-4x">3</i></div>
        <h3>Monitor and Adjust</h3>
        <p>You'll have 24/7 access to your account(s) so that you can monitor your progress and, if anything in your life changes make the necessary adjustments.</p>
      </div>
      
    </div>
  </div>
</div>

<div class="light wrapper home-spacing">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-6 col-sm-12 home-section">
        <i class="fa fa-flag fa-4x light-gray"></i>
        <h3>Over 350 Icons</h3>
        <p>Font Awesome 4 support is already baked in.  Quickly and easily place icons in menus, buttons, headers, lists and more.</p>
      </div>
      <div class="col-md-6 col-sm-12 home-section">
        <i class="fa fa-flag fa-4x light-gray"></i>
        <h3>Over 350 Icons</h3>
        <p>Font Awesome 4 support is already baked in.  Quickly and easily place icons in menus, buttons, headers, lists and more.</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
