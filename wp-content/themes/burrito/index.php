<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package burrito
 */
get_header(); ?>
	<div class="container-fluid single-section">
		
			<div id="primary" class="">
				<main id="main" class="site-main">

        <?php 
get_template_part( 'templates/slider' );
?>
					
					<?php
					/* if ( have_posts() ) :
						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						
						<?php
						endif;
						/* Start the Loop */
						/* while ( have_posts() ) : the_post();
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							/* get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif; ?>
				
				<!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar(); */?>
     
       <?php 
get_template_part( 'templates/reservation-form' );
get_template_part( 'templates/calling' );
get_template_part( 'templates/info-first' );
get_template_part( 'templates/quote-first' );
get_template_part( 'templates/info-second' );
get_template_part( 'templates/info-third' );
get_template_part( 'templates/quote-second' );

get_template_part( 'templates/address');
?>
      </main>
		</div>
	</div>
 

<?php
get_footer();