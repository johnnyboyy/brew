    <footer id="footer" class="clearfix">
      <div id="footer-widgets">

        <div class="container">

        <div id="footer-wrapper">

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

            <div class="col-sm-6 col-md-3">
              <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
              <?php endif; ?>
            </div> <!-- end widget1 -->

          </div> <!-- end .row -->

        </div> <!-- end #footer-wrapper -->

        </div> <!-- end .container -->
      </div> <!-- end #footer-widgets -->

      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-md-4 copyright">
              &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
            </div>
            <div class="col-md-4 offset-md-4 attribution">
              Site by <a target="_blank" href="http://johnzdanis.com">John Zdanis</a>
              <p style="display: none;"> Based on <a target="_blank" href="http://www.danvswild.com/brew">BREW</a> by <a target="_blank" href="http://www.danvswild.com">Dan vs Wild</a></p>
            </div>
          </div> <!-- end .row -->
        </div>
      </div>

    </footer> <!-- end footer -->

    <!-- all js scripts are loaded in library/bones.php -->
    <?php wp_footer(); ?>
    <!-- Hello? Doctor? Name? Continue? Yesterday? Tomorrow?  -->

  </body>

</html> <!-- end page. what a ride! -->
