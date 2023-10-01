<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$copy_footer = carbon_get_theme_option('bur_footer_copy');
?>


	
	<h2 class="footer__title">2018 Burrito Chili-Bar</h2>
      <h3 class="footer__subtitle">Website built at The Building Block</h3>
		<span class="footer__copyright">
			<?php echo $copy_footer;?></span>
	

