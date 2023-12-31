<?php

if ( ! function_exists( 'burrito_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	add_filter( 'woocommerce_add_to_cart_fragments', 'burrito_woocommerce_cart_link_fragment' );
	function burrito_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		burrito_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();
		
		return $fragments;
	}
}



	function burrito_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View my shopping cart', 'burrito' ); ?>">
		
			<span class="cart-text" aria-hidden="true">cart</span>
			
			<span class="count"><?php if(WC()->cart->get_cart_contents_count() > 0) {
echo wp_kses_data( WC()->cart->get_cart_contents_count() ) ;
			}
			?></span>
		</a>
		<?php
	}


if ( ! function_exists( 'burrito_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function burrito_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php burrito_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);
				
				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}