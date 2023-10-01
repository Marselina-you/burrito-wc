<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$widget_footer = carbon_get_theme_option('bur_footer_widgets_show');
if (  'on' === $widget_footer) : ?>
	
	
  
	
		
		<div class="footer__social" id="down">
        <a class="footer__image" href="">
		<svg>
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#twit"></use></svg>
         
        </a>
        <a class="footer__image" href="">
		<svg>
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#vk"></use></svg>
       
      </a>
      <a class="footer__image" href="">
	  
          
	  <svg>
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#what"></use></svg>
          
        </a>
      </div>
			
			
			
			
			
	
	


	

<?php endif; ?>
