<?php
/*
Template Name: Page - Right Sidebar
*/
?>

<?php get_header(); ?>


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="page-banner" style="background-image: url('<?php echo get_field('banner_image') ? get_field('banner_image') : 'https://upload.wikimedia.org/wikipedia/commons/c/c0/Gingerbread_House_Essex_CT.jpg'; ?>');">
        <div class="inner-banner">
          <div class="container">
            <h1 class="page-title entry-title" itemprop="headline"><?php the_title(); ?></h1>
          </div>
        </div>
      </div>

      <div class="container">
        <div id="content" class="clearfix row"> 
          <div id="main" class="col-md-12 clearfix" role="main">
          <?php // get_template_part( 'breadcrumb' ); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
              
              <section class="page-content entry-content clearfix" itemprop="articleBody">
                <?php the_content(); ?>
              </section> <!-- end article section -->

              <footer>
                <?php // the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>
              </footer> <!-- end article footer -->
            
            </article> <!-- end article -->
                        
            <?php endwhile; ?>    
            
            <?php else : ?>

      <div class="container">
        <div id="content" class="clearfix row">
          <div id="main" class="col-md-12 clearfix" role="main">
            
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

          <?php // get_sidebar(); ?>
      
        </div> <!-- end #content -->

      </div> <!-- end .container -->

<?php get_footer(); ?>
