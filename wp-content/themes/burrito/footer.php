<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estore
 */
?>

</div><!-- #content -->

<?php
/**
 * header_parts hook.
 *
 * @hooked estore_newsletter_callback - 10
 * @hooked estore_footer_start - 15
 * @hooked estore_widgets_callback - 20
 * @hooked estore_copyright_callback - 30
 * @hooked estore_footer_end - 40
 *
 */
do_action( 'bur_footer_parts' ); ?>


</div><!-- #page -->

<?php wp_footer(); ?>
<script>
		const buttons = document.querySelectorAll('.single_add_to_cart_button');
const adds = document.querySelectorAll('.quantity');
const plus = document.querySelectorAll('.plus');
const minus = document.querySelectorAll('.minus');
const inputs = document.querySelectorAll('.input-text');

console.log(buttons);
console.log(adds);
console.log(plus);
console.log(minus);
console.log(inputs);

buttons.forEach(el => {

    el.addEventListener('click', (e) => {
        let btn = e.currentTarget;
    console.log(btn)
    let ad = btn.nextElementSibling;
    console.log(ad)

    }); 
}
)


</script>
</body></html>