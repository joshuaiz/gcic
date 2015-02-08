<?php
/*
Template Name: Home Page
*/ 
?>

<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/default.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/component.css" />

<div class="callout">

	<img src="<?php echo get_template_directory_uri(); ?>/library/images/bg.png" alt="bg" class="alignnone size-full wp-image-504" />
		
		<ul id="quotes">
			<li>Build sustainable models for social change</li>
			<li>Evaluate your <span class="impact">impact</span> and broadcast it far and wide</li>
			<li>Bring big ideas with high <span class="impact">impact</span> potential to life</li>
			<li>Grow at the right pace and the right time<br>to deepen your <span class="impact">impact</span> and sustain your work</li>
		</ul>
				
</div> <?php // end callout ?>

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

			<?php endif; ?> <?php // end main loop ?>

		</div> <?php // end #main ?>

	</div> <?php // end #inner-content ?>

</div> <?php // end #content ?>

<div class="acf-services clearfix">

<a name="work"></a>

	<div class="services wrap clearfix">

		<div class="twelvecol clearfix">

			<h3 class="tab-header">Our Work</h3>
						
			<?php if( have_rows('gcic_services') ): ?>

				<div class="services-wrap clearfix">
							
					<?php while( have_rows('gcic_services') ): the_row(); 
							
						// vars
						$title = get_sub_field('gcic_service_name');
						$content = get_sub_field('gcic_service_content');
						$more = get_sub_field('gcic_service_additional_content'); ?>
							
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

</div> <?php // end acf-services ?>

<div class="acf-case-studies clearfix">

<a name="clients"></a>

	<div class="case-studies wrap clearfix">

		<div class="twelvecol clearfix">

		<h3 class="tab-header">Our Clients</h3>

			<div class="case-studies-wrap clearfix">

				

				<ul class="grid cs-style-3">

			<?php // WP_Query arguments

			$args = array (
				'post_type'              => 'gcic_client',
				'post_status'            => 'publish',
				// 'orderby'                => 'case_st',
				'order'					 => 'ASC',
				'orderby'   => 'title',
				// 'meta_key'  => 'client_title',
			
			);
			
			// The Query
			$cs_query = new WP_Query( $args );

			if ($cs_query->have_posts()) : while ($cs_query->have_posts()) : $cs_query->the_post(); ?>
			
						
						<?php // vars
						$image = get_field('client_image');
						$image2x = get_field('client_2x_image');
						// $title = get_field('client_title');
						$cat = get_field('client_category');
						$content = get_field('client_content'); ?>

						
						<?php if( !the_field('cs_hide') )
										
										{ ?>
    
							<li class="prj case-study">

								<div class="case-study-wrap clearfix">
								
									<figure>
												
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
											
										<figcaption>
											
											<h3><?php the_title(); ?></h3>
											
											<span><?php echo $cat; ?></span>

											<?php if( $content ): ?>
												
											<a class="project-more" id="project2" href="javascript://">See More</a>

											<?php endif; ?>

										</figcaption>
											
									</figure>

									<section class="project-target case-study-content">

										<a class="cs-close">X</a>
												
										<?php if( $content ): ?>

										<h2><?php the_title(); ?></h2>

										<?php echo $content; ?>

										<a class="project-close button">Close</a>

										<?php endif; ?>

									</section>

								</div>
									
							</li>

						<?php } ?>

								
			<?php endwhile; else : ?>
					

		
		<?php endif; ?> 
								
		<?php // Restore original Post Data
		wp_reset_postdata(); ?>

				</ul>

				<div class="client-list-wrap">

			<a class="text-link">See More Clients</a>
			
			<?php if( have_rows('client_list') ): ?>

				<ul class="nostyle client-list">

					<?php while( have_rows('client_list') ): the_row(); 

					// vars
					$name = get_sub_field('client_name');
					$link = get_sub_field('client_url');
					$services = get_sub_field('client_services');

					?>

					<li class="client-li">

						<a class="impact2" href="<?php echo $link; ?>"><?php echo $name; ?></a> | <?php echo $services; ?>

					</li>

					<?php endwhile; ?>

				</ul>

			<?php endif; ?>


			</div>
			
			</div>



		</div>

	</div>

</div> <?php // end case studies ?>

<div class="acf-testimonials clearfix">

<a name="testimonials"></a>
	
	<div class="testimonials wrap clearfix">

		<div class="twelvecol clearfix">

			<div class="case-studies-wrap clearfix">

				<ul class="testimonials-list owl-carousel">

					<?php // WP_Query arguments
					$args = array (
						'post_type'              => 'gcic_testimonials',
						'post_status'            => 'publish',
						'order'					 => 'ASC',
						'orderby'   => 'meta_value_num',
						'meta_key'  => 'testimonial_order',
					);
						
					// The Query
					$query = new WP_Query( $args );
						
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post();
								
					// vars
					$author = get_field('testimonial_author');
					$quote = get_field('testimonial_quote');
					$title = get_field('author_title');
					$comp = get_field('author_company');
					$url = get_field('company_website'); 
					$image = get_field('author_image');?>

					<li>
							
						<div class="testimonial-outer">

							<div class="testimonial">

								<?php echo $quote; ?>

							</div>

							<div class="testimonial-image">

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

							</div>

							<div class="testimonial-meta">

								<p><span class="testimonial-author"><?php echo $author; ?></span><br>
								<span class="author-title"><?php echo $title; ?></span><br>
								<span class="author-company"><?php echo $comp; ?></span></p>

							</div>	

						</div>

							<?php }
						} else {
							// no posts found
						} ?>
						
						</li>
						<?php // Restore original Post Data
						wp_reset_postdata(); ?>

					</ul>

				</div>

			</div>

		</div>

</div>

<div class="experience-outer">

	<div class="experience wrap clearfix">

		<div class="twelvecol clearfix">
	
			<div class="experience-intro">		
				<?php the_field('experience_intro'); ?>
			</div>

		</div>

	</div>

</div>



<div class="acf-bios clearfix">

<a name="bios"></a>

	<div class="bios wrap clearfix">

		<h3 class="tab-header">Who We Are</h3>

		<div class="twelvecol clearfix">

			<div class="bios-wrap clearfix">



				<ul class="bios-list">



					<?php // WP_Query arguments
					$args = array (
						'post_type'              => 'gcic_bio',
						'post_status'            => 'publish',
						'order'					 => 'ASC',
						'orderby'   => 'meta_value_num',
						'meta_key'  => 'order',
					);
						
					// The Query
					$query = new WP_Query( $args );
						
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post();
								
					// vars
					
					$title = get_field('bio_title');
					$photo = get_field('bio_photo');?>

					<li class="bio-li">

						<a class="back-arrow">&larr; Back</a>
							
						<div class="bio-outer">

							<div class="bio-image">

								<a class="bio-more"><img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt'] ?>" /></a>

							</div>

							<div class="bio-meta">

								<a class="bio-more"><h3 class="bio-name"><?php the_title(); ?></h3></a>
								<h4 class="bio-title"><?php echo $title; ?></h4>
								

							</div>

							<div class="bio-content">



								<?php the_content(); ?>								

							</div>	

						</div>

							<?php }
						} else {
							// no posts found
						} ?>
						
						</li>
						<?php // Restore original Post Data
						wp_reset_postdata(); ?>

				</ul>

			</div>

		</div>

	</div>

</div>

<div class="acf-partners clearfix">

<a name="partners"></a>

	<div class="partners wrap clearfix">

		<h3 class="tab-header">Our Partners</h3>

		<div class="twelvecol clearfix">

			<div class="partners-wrap clearfix">

			<?php if( have_rows('gcic_partners') ): ?>

				<ul class="nostyle partners-list">

					<?php while( have_rows('gcic_partners') ): the_row(); 

					// vars
					$logo = get_sub_field('partner_logo');
					$name = get_sub_field('partner_name');
					$url = get_sub_field('partner_url');

					?>

					<li class="partner-li">

						<a href="<?php echo $url; ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" /></a>
						
					</li>

					<?php endwhile; ?>

				</ul>

			<?php endif; ?>

			</div>

		</div>

	</div>

</div>


<?php get_footer(); ?>

<script>
jQuery(document).ready(function($) {
			$('ul#quotes').fadeIn(3000);
            $('ul#quotes').quote_rotator({
             rotation_speed: 7000,                    // defaults to 5000
			 pause_on_hover: false,                   // defaults to true
        });
    });

jQuery(document).ready(function($){
	
  var owl = $('.owl-carousel');
	owl.owlCarousel({
    items:3,
    loop:true,
    margin:10,
    autoplay:false,
    autoplayTimeout:10000,
    nav: true,

    slideBy: 4,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:2,

        },
        1030:{
            items:3,
        },
        
    }		
});

$('.owl-prev').html('&lsaquo;');
$('.owl-next').html('&rsaquo;');

$('.owl-prev, .owl-next').hover(function() {
    $(this).css('opacity', '1');
},

function() {
    $(this).css('opacity', '0.2');
}

);

});
</script>