<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
wc_print_notices(); ?>

<form class="woocommerce-form woocommerce-form-login login" method="post">
	<p class="woocommerce-form-row woocommerce-form-row--wide form-block">
		<label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username"
			value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) :
				''; ?>"/><?php // @codingStandardsIgnoreLine ?>
	</p>
	<p class="woocommerce-form-row woocommerce-form-row--wide form-block">
		<label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password"
			id="password"/>
	</p>
	<p class="form-block-submit">
		<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
		<button type="submit" class="btn btn-reset btn--order" name="login"
			value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>"><?php esc_html_e( 'Login', 'woocommerce' ); ?></button>
		<label class="form-block-remember"> <input
				class="woocommerce-form__input woocommerce-form__input-checkbox form-block__input-checkbox" name="rememberme" type="checkbox"
				id="rememberme" value="forever"/> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
		</label>
	</p>
	<p class="woocommerce-LostPassword lost_password">
		<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
	</p>

</form>
