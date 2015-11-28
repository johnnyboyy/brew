<?php global $brew_options; ?>
    <footer id="footer" class="clearfix">
      <div id="sub-floor">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-6 copyright">
              <ul class="johns-social-icons">
              <?php if (!empty($brew_options['twitter-url'])) { ?>
                <li>
                  <a class="twitter" href="<?php echo $brew_options['twitter-url'] ?>"><i class="fa fa-twitter"></i></a>
                </li>
              <?php }
               if (!empty($brew_options['facebook-url'])) { ?>
                <li>
                  <a class="facebook" href="<?php echo $brew_options['facebook-url'] ?>"><i class="fa fa-facebook"></i></a>
                </li>
              <?php }
               if (!empty($brew_options['linkedin-url'])) { ?>
                <li>
                  <a class="linkdin" href="<?php echo $brew_options['linkedin-url'] ?>"><i class="fa fa-linkedin"></i></a>
                </li>
              <?php } ?>
              </ul>
            </div>
            <div class="col-lg-8 col-md-6 text-center">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <?php wp_nav_menu( array('menu' => 'footer_links' )); ?>
                </div>
                <div class="col-md-6 col-sm-12">
                  <p class="copy-text">&copy; <?php echo date('Y'); ?> Acorn Digital Wealth, LLC | All Rights Reserved</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <p class="copy-text">12121 Wilshire Blvd, Suite 1250, Los Angeles, CA 90025  tel: (310) 772-2600 &#8226; (800) 586-0600 Fax: (310) 772-2601</p>
                </div>
              </div>
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
