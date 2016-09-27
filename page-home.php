<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

<div class="homebanner">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h1>BREW Updated for Wordpress</h1>
        <p>A free and open-source starter theme based on BREW. Updated with Bootstrap 4</p>
        <p><a href="http://www.github.com/johnnyboyy/brew" target="_blank" class="btn btn-default btn-lg">Github</a>
          <a href="http://johnzdanis.com" target="_blank" class="btn btn-lg btn-primary">Author</a></p>
      </div>
    </div><!-- end .row-->
  </div> <!-- end .container-->
</div> <!-- end #banner-->

<div class="container">
  <div class="row text-xs-center">

    <!--Section 1-->
    <div class="col-sm-4 about">
      <i class="fa fa-laptop fa-4x light-gray"></i>
      <h3>Built with Bootstrap 4</h3>
      <p>Updated to the newest bootstrap</p>
    </div>

    <!--Section 2-->
    <div class="col-sm-4 about">
      <i class="fa fa-github-square fa-4x light-gray"></i>
      <h3>Free and Open-Source</h3>
      <p>Credit to <a href="http://danvswild.com" target="_blank" class="">Dan Brown</a> for <a href="http://www.github.com/slightlyoffbeat/brew" target="_blank">BREW</a>
      which this theme was based on.</p>
    </div>

    <!--Section 3-->
    <div class="col-sm-4 about">
      <i class="fa fa-flag fa-4x light-gray"></i>
      <h3>Over 350 Icons</h3>
      <p>Font Awesome.</p>
    </div>

  </div>
</div>

<?php get_footer(); ?>
