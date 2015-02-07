<?php
/*
Template Name: Home Page Old
*/
?>

<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/default.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/component.css" />

	<div class="callout">
		<img src="http://gcic.dev:8888/wp-content/uploads/2015/02/bg.png" alt="bg" class="alignnone size-full wp-image-504" />
		
					
						<span class="quotes">
						 People eat meat and think they will become as strong as an ox, forgetting that the ox eats grass.
						  
						</span>
					
					<span class="quotes">
						
						  Nothing will benefit human health and increase the chances for survival of life on Earth as much as the evolution to a vegetarian diet.
						  
					</span>
					<span class="quotes">
						
						
						  If you don't want to be beaten, imprisoned, mutilated, killed or tortured then you shouldn't condone such behaviour towards anyone, be they human or not.
						  
					</span>
					<span class="quotes">
						
						
						 My body will not be a tomb for other creatures.
						 
					</span>
				
	</div>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">



								</header>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section>
								
			

								<footer class="article-footer">
									

								</footer>

								
							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>


				</div>

			</div>

			<div class="acf-services clearfix">

					<div class="services wrap clearfix">

						<div class="twelvecol clearfix">
						
							<?php if( have_rows('gcic_services') ): ?>

								<div class="services-wrap clearfix">
							
								<?php while( have_rows('gcic_services') ): the_row(); 
							
									// vars
									$title = get_sub_field('gcic_service_name');
									$content = get_sub_field('gcic_service_content');
									$more = get_sub_field('gcic_service_additional_content');
							
									?>
							
									<div class="service-wrap clearfix">

										<div class="service-content">
							
											<h3><?php echo $title; ?></h3>

											<div class="service-content-inner">
								
									    		<?php echo $content; ?>

									    	</div>

									    	<a class="button impact-button">Read More</a>

									    </div>

									    <div class="service-more">

									    	<a class="x-close">X</a>

									    	<?php echo $more; ?>

									    	<a class="impact-close button">Close</a>

										</div>

									</div>
							
								<?php endwhile; ?>
							
								</div>
							
							<?php endif; ?>

						</div>

					</div>

				</div>

				<div class="acf-case-studies clearfix">

					<div class="case-studies wrap clearfix">

						<div class="twelvecol clearfix">

						<?php if( have_rows('gcic_case_studies') ): ?>

							<div class="case-studies-wrap clearfix">

								<ul class="grid cs-style-3">

								
						
							<?php while( have_rows('gcic_case_studies') ): the_row(); 
						
								// vars
								$image = get_sub_field('case_study_image');
								$image2x = get_sub_field('case_study_2x_image');
								$title = get_sub_field('case_study_title');
								$cat = get_sub_field('case_study_category');
								$content = get_sub_field('case_study_content');
						
								?>


									<?php if( !get_sub_field('cs_hide') )
										
										{ ?>
    


					
										<li class="prj case-study">

										<div class="case-study-wrap clearfix">
								
						
											<figure>
												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
											<figcaption>
												<h3><?php echo $title; ?></h3>
												<span><?php echo $cat; ?></span>

												<?php if( $content ): ?>
												<a class="project-more" id="project2" href="javascript://">See More</a>

												<?php endif; ?>
											</figcaption>
											</figure>

											<section class="project-target case-study-content">
												<a class="cs-close">X</a>
												
												<?php if( $content ): ?>

												<h2><?php echo $title; ?></h2>


				
			
		
												<?php echo $content; ?>

												<a class="project-close button">Close</a>

												<?php endif; ?>

											</section>

										</div>
									
										</li>

									<?php } ?>
									

									
						
							<?php endwhile; ?>

							
						
						</ul>
								
						
						<?php endif; ?>

						</div>

					</div>

				</div>



<?php get_footer(); ?>

<script>
// jQuery(document).ready(function($){
// 	 var quotes = $(".quotes");
//     var quoteIndex = -1;
    
//     function showNextQuote() {
//         ++quoteIndex;
//         quotes.eq(quoteIndex % quotes.length)
//             .fadeIn(2000)
//             .delay(2000)
//             .fadeOut(2000, showNextQuote);
//     }
    
//     showNextQuote();
// });
</script>