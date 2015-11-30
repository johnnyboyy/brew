<?php get_header(); ?>


    <div class="container">

			<div id="content" class="row clearfix">

						<div id="main" class="col-md-8 col-lg-9 clearfix" role="main">
							<?php $post_index = 0; ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php if ($post_index == 1) { ?>
								<div class="posts-wrapper">
							<?php } ?>

							<?php if ($post_index == 0) { ?>
								<div class="row first-entry">
							<?php } ?>

							<?php if (($post_index + 1) % 2 == 0) { ?>
								<div class="row posts-two-col">
							<?php } ?>

							<?php if ($post_index > 0) { ?>
								<div class="home-col col-md-6 col-sm-12 ">
							<?php } else { ?>
								<div class="col-sm-12">
							<?php } ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<?php global $brew_options; ?>
								<?php if( $brew_options['featured'] == '2' || ( $brew_options['featured'] == '4' && is_single() ) || ( $brew_options['featured'] == '3' && is_home() ) ) { ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-featured' ); ?>
									<?php if ( $image[1] < '750' && has_post_thumbnail() ) { ?>
										<section class="featured-content featured-img featured-img-bg" style="background: url('<?php echo $image[0]; ?>')">
									<?php } // end if 
									else { ?>
										<section class="featured-content featured-img">
											<?php if ( has_post_thumbnail() ) { ?>
			                                    <a class="featured-img" href="<?php the_permalink(); ?>">
			                                    	<?php the_post_thumbnail( 'post-featured' ); ?>
			                                    </a>
				                            <?php } // end if 
											else { ?>
				                                <a class="featured-img" href="<?php the_permalink(); ?>">
												<?php if ( !empty($brew_options['default_featured_img']['url']) ) { ?>
			                                    	<img src="<?php echo $brew_options['default_featured_img']['url']; ?>" />
			                                    	<!-- What The Fuck??!??!? -->
				                            	<?php } else { ?>
				                            		<img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/featured_default.jpg" />
				                            		<!-- Something Else -->
				                            	<?php } ?>
			                                    </a>
				                            <?php } //end else?>
					                <?php } // end else ?>
								<?php } // end if 
								else { ?>
									<section class="featured-content featured-img">
								<?php } // end else ?>

								<header class="article-header">
									<div class="titlewrap clearfix">
										<h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									</div>

								</header> <?php // end article header ?>

								</section>

								<section class="entry-content clearfix">
									<?php wp_link_pages(
                                		array(
                                		
	                                        'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
	                                        'after' => '</div>'
                                		) 
                                	); ?>
								</section> <?php // end article section ?>

								<footer class="article-footer clearfix">
									<span class="tags pull-left"><?php printf( '<span class="category-list">' . __( '#%1$s&nbsp', 'bonestheme' ) . '</span>', get_the_category_list(' #') ); ?> <?php the_tags( '<span class="tags-title">' . __( '<i class="fa fa-tags"></i>', 'bonestheme' ) . '</span> ', ', ', '' ); ?></span>
              						<!-- <span class="commentnum pull-right"><a href="<?php comments_link(); ?>"><?php comments_number( '<i class="fa fa-comment"></i> 0', '<i class="fa fa-comment"></i> 1', '<i class="fa fa-comment"></i> %' ); ?></a></span> -->
              						<span class="readmore pull-right <?php // echo $post_index == 0 ? 'pull-right' : 'pull-left'; ?>">
              							<a class="btn btn-red btn-pad-lg" href="<?php the_permalink(); ?>">READ MORE</a>
              						</span>
            					</footer> <?php // end article footer ?>

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article> <?php // end article ?>
							</div>

							<?php if ($post_index != 0 && $post_index % 2 == 0) { ?>
								</div> <!-- 2-col row end -->
							<?php } ?>

							<?php if ($post_index == ( intval( get_option('posts_per_page') ) - 1 ) || $post_index == 0) { ?>
								</div> <!-- row end -->
							<?php } ?>

							<?php $post_index += 1; ?>

							<?php endwhile; ?>


                  <?php if (function_exists("emm_paginate")) { ?>
                      <?php emm_paginate(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
														<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>


							<?php endif; ?>

						</div> <?php // end #main ?>


						<?php get_sidebar(); ?>


			</div> <?php // end #content ?>

    </div> <!-- end ./container -->

<?php get_footer(); ?>
