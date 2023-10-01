<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
wc_print_notices(); ?>
<div class="header-logo">

      <img class="header-logo__decor" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-t.svg" alt="burrito">
     
					<?php /* $logo_id = carbon_get_theme_option('bur_header_logo');
					$logo = $logo_id ? wp_get_attachment_image_src($logo_id , 'full') : '';
					$site_name = carbon_get_theme_option('bur_header_site_name') ? carbon_get_theme_option('bur_header_site_name') : get_bloginfo('name');
					$site_decs = carbon_get_theme_option('bur_header_site_desc') ? carbon_get_theme_option('bur_header_site_desc') : get_bloginfo('description');
					?>
					
					
					<?php if (is_front_page() && is_home()) :
						if ($logo_id) :	?>
						
							<a href="<?php echo home_url('/');?>"> <img src="<?php echo $logo[0];?>" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>" alt="">
							</a>
						
							<?php else: ?>
							
								<a href="<?php echo home_url('/');?>">
									<?php echo $site_name; ?><span><?php echo $site_decs; ?></span>
								</a>
							
						<?php endif;?>
					<?php else:
						if ($logo_id) :	?>
						
							<img src="<?php echo $logo[0];?>" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>" alt="">
							
						
					<?php else: ?>
						
					
								<?php echo $site_name; ?><span><?php echo $site_decs; ?></span>

						
					<?php endif;?>
					<?php endif;*/?>
				</div>