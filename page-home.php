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
        <h1>Personal <span class="text-seveti-gold">&amp;</span><br /> Business Banking</h1>
          <a href="http://danvswild.com" target="_blank" class="btn btn-lg btn-seveti-gold">Read More<span class="stupid-fucking-line"></span></a></p>
      </div>
      <div class="col-md-6">
        <img class="homebanner-person" src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/homebanner-person.png">
      </div>
    </div><!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- end #banner-->

<div class="container">
  <div class="row">
    
    <!--Section 1-->
    <div class="col-sm-3 seveti-logo-bg bg-blue-gold home-box">
      <h3>Checking Accounts</h3>
      <p>Choose the checking account that works best for you. Make purchases with your debit card, and bank from almost anywhere</p>
    </div>
    
    <!--Section 2-->
    <div class="col-sm-3 seveti-logo-bg bg-blue-gold home-box">
      <h3>Savings Accounts</h3>
      <p>It's never too early to begin saving. Talk with a banker to see how savings accounts and CDs</p>
    </div>
    
    <!--Section 3-->
    <div class="col-sm-3 seveti-logo-bg bg-blue-gold home-box">
      <h3>Credit Cards</h3>
      <p>Choose from our Seveti credit cards to help you buy what you need. Many offer rewards that can be redeemed for cash back</p>
    </div>
    
    <!--Section 4-->
    <div class="col-sm-3 seveti-logo-bg bg-blue-gold home-box">
      <h3>Mortgages</h3>
      <p>Buy or refinance your home with a mortgage from Seveti. Look up today's mortgage rates and</p>
    </div>

  </div>
  <div class="row">
    
    <!--Section 1-->
    <div class="col-sm-3 seveti-logo-bg bg-blue-gold home-box">
      <h3>Home Equity Line of Credit</h3>
      <p>Choose the checking account that works best for you. Make purchases with your debit card, and bank from almost anywhere</p>
    </div>
    
    <!--Section 2-->
    <div class="col-sm-3 seveti-logo-bg bg-blue-gold home-box">
      <h3>Seveti Private Client</h3>
      <p>Choose the checking account that works best for you. Make purchases with your debit card, and bank from almost anywhere</p>
    </div>
    
    <!--Section 3-->
    <div class="col-sm-3 seveti-logo-bg bg-blue-gold home-box">
      <h3>Auto Loans</h3>
      <p>Choose the checking account that works best for you. Make purchases with your debit card, and bank from almost anywhere</p>
    </div>
    
    <!--Section 4-->
    <div class="col-sm-3 seveti-logo-bg bg-blue-gold home-box">
      <h3>Planning &amp; Investments</h3>
      <p>Choose the checking account that works best for you. Make purchases with your debit card, and bank from almost anywhere</p>
    </div>

  </div>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example headline.</h1>
          <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="item active">
      <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php get_footer(); ?>
