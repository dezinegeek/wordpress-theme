<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'default' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<section class="notes-panel">
	<div class="content">
	<?php
	$nt = get_field( 'notes-tabs' );
	if ( $nt ): ?>
	<?php echo '<div class="dtabs">'; ?>
	<?php echo '<ul class="dtab-list">'; ?>
	<?php echo '<li class="dtab active">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
	<?php echo '<li class="dtab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
	<?php echo '<li class="dtab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
	<?php echo '</ul>'; ?>
	<?php echo '<div class="dtab-content">'; ?>
	<?php echo '<div class="dtab-pane active">' . $nt['tabs-01'] . '</div>'; ?>
	<?php echo '<div class="dtab-pane">' . $nt['tabs-02'] . '</div>'; ?>
	<?php echo '<div class="dtab-pane">' . $nt['tabs-03'] . '</div>'; ?>
	<?php echo '</div>'; ?>
	<?php echo '</div>'; ?>
	<?php endif; ?>
	</div>
</section>
<section class="inspiration">	
	<?php
	$ins = get_field( 'inspiration' );
	if ( $ins ): ?>
	<?php echo '<h2>' . $ins['heading'] . '</h2>'; ?>
	<?php echo '<div class="content">'; ?>	
	<?php echo '<div class="block image">'; ?>
	<?php echo '<img src="' . $ins['image'] . '" alt="'. $ins['alt'] .'" />'; ?>
	<?php echo '</div>'; ?>
	<?php echo '<div class="block data">'; ?>
	<?php echo '<div class="info">' . $ins['data'] . '</div>'; ?>
	<?php echo '</div>'; ?>
	<?php echo '</div>'; ?>	
	<?php endif; ?>
</section>

<?php get_sidebar('5'); ?>

<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
