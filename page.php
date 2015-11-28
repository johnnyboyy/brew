<?php
/*
Template Name: Page - Right Sidebar
*/

global $brew_options;
?>

<?php get_header(); ?>
      <?php if(get_field('banner_image')) { ?>
      <div class="homebanner" style="background-image:url(<?php echo get_field('banner_image') ? get_field('banner_image') : null; ?>);" >
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2"></div>
          </div><!-- end .row-->
        </div> <!-- end .container-->
      </div> <!-- end #banner-->
      <?php } ?>

      <div class="container">
        <div id="content" class="clearfix row">
          <?php get_sidebar(); ?>
          <div id="main" class="col-sm-12 col-md-8 col-lg-10 clearfix" role="main">

          <?php // get_template_part( 'breadcrumb' ); ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              <header class="page-head article-header">
                <div class=""><h1 class="page-title entry-title" itemprop="headline"><?php the_title(); ?></h1></div>
              </header> <!-- end article header -->
              <section class="page-content entry-content clearfix" itemprop="articleBody">
                <?php the_content(); ?>
              </section> <!-- end article section -->
              <footer>
                <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
              </footer> <!-- end article footer -->
            </article> <!-- end article -->
            <?php endwhile; ?>

            <?php else : ?>
            <article id="post-not-found">
                <header>
                  <h1><?php _e("Not Found", "bonestheme"); ?></h1>
                </header>
                <section class="post_content">
                  <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
                </section>
                <footer>
                </footer>
            </article>
            
            <?php endif; ?>
        
          </div> <!-- end #main -->

      
        </div> <!-- end #content -->

      </div> <!-- end .container -->
      <div class="light-grey wrapper home-spacing">
        <div class="container">
          <div class="row text-center">
            
            <!--Section 1-->
            <div class="col-sm-4 home-section">
              <div class="icon-circle"><i class="fa fa-line-chart fa-3x"></i></div>
              <h3>Build Wealth</h3>
              <p>Acheive your financial goals and maximize your wealth via a customized, easy-to-use and secure investment platform.</p>
              <p class="home-page-link"><a href="<?php echo !empty($brew_options['build_wealth_url']) ? $brew_options['build_wealth_url'] : '#'; ?>">About Us ></a></p>
            </div>
            
            <!--Section 2-->
            <div class="col-sm-4 home-section">
              <div class="icon-circle"><i class="fa fa-money fa-3x"></i></div>
              <h3>Save Time &amp; Money</h3>
              <p>Create a diversified portfolio at a fraction of the cost and at a lower account minimum than ever before.</p>
              <p class="home-page-link"><a href="<?php echo !empty($brew_options['save_time_url']) ? $brew_options['save_time_url'] : '#'; ?>">Portfolios ></a></p>
            </div>
            
            <!--Section 3-->
            <div class="col-sm-4 home-section">
              <div class="icon-circle"><i class="fa fa-users fa-3x"></i></div>
              <h3>Invest in Yourself</h3>
              <p>Take advantage of our other services, such as financial and retirement planning, to secure your financial future.</p>
              <p class="home-page-link"><a href="<?php echo !empty($brew_options['invest_url']) ? $brew_options['invest_url'] : '#'; ?>">Services ></a></p>
            </div>
            
          </div>
        </div>
      </div>
      <div class="light-grey wrapper home-spacing">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-6 col-sm-12 home-section">
              <h2 class="bigger">Let's Get Started</h2>
            </div>
            <div class="col-md-6 col-sm-12 home-section get-started">
              <div class="row">
                <div class="col-sm-6">
                  <a href="<?php echo !empty($brew_options['test_run_url']) ? $brew_options['test_run_url'] : '#'; ?>" class="btn btn-default btn-xlg btn-green ">Take A Test Run</a>
                </div>
                <div class="col-sm-6">
                  <a href="<?php echo !empty($brew_options['invest_now_url']) ? $brew_options['invest_now_url'] : '#'; ?>" class="btn btn-default btn-xlg btn-green ">Invest Now</a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <a href="<?php echo !empty($brew_options['grow_money_url']) ? $brew_options['grow_money_url'] : '#'; ?>" class="btn btn-default btn-xlg btn-green ">See How Your Money Could Grow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>
