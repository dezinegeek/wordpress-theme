<?php
/**
 * Template Name: Home Page
 * Description: Home Page Template
 *
 * @package WordPress
 * 
 */
get_header();
?>
<section class="fume pf-01 odd">
	<div class="content">
	<div class="trigger" id="trigger-01"></div>
	<div class="block image">
		<img class="img-02" data-aos="fade-left" data-aos-delay="200" data-aos-anchor="#trigger-01" src="<?php bloginfo('template_directory'); ?>/images/img-item-01-02.webp" alt=""/>
		<div class="border"></div>
		<img class="img-01" data-aos="fade-right" data-aos-delay="400" data-aos-anchor="#trigger-01" src="<?php bloginfo('template_directory'); ?>/images/img-item-01-01.webp" alt=""/>
		<div class="bg"></div>
		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-01"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-01.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-01" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-01.webp" alt=""/>
		<img class="img-03" data-aos="fade-left" data-aos-delay="600" data-aos-anchor="#trigger-01" src="<?php bloginfo('template_directory'); ?>/images/img-item-01-05.webp" alt=""/>
		<img class="img-04" data-aos="fade-up" data-aos-delay="800" data-aos-anchor="#trigger-01" src="<?php bloginfo('template_directory'); ?>/images/img-item-01-03.webp" alt=""/>
		<img class="img-05" data-aos="fade-up" data-aos-delay="1000" data-aos-anchor="#trigger-01" src="<?php bloginfo('template_directory'); ?>/images/img-item-01-04.webp" alt=""/>
	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf01 = get_field( 'pf01' );
			if ( $pf01 ): ?>
			<?php echo '<h2>' . $pf01['heading'] . '</h2>'; ?>
			<?php echo '' . $pf01['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf01['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf01['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf01['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf01['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf01['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>	
</section>


<div class="divider">
	<div class="icon"></div>
</div>
<section class="fume pf-02">
	<div class="content">
	<div class="trigger" id="trigger-02"></div>
	<div class="block image">
		<div class="border"></div>
		<img class="img-01" data-aos="fade-up-right" data-aos-delay="800" data-aos-anchor="#trigger-02" src="<?php bloginfo('template_directory'); ?>/images/img-item-02-01.webp" alt=""/>
		<img class="img-02" data-aos="fade-up-left" data-aos-delay="400" data-aos-anchor="#trigger-02" src="<?php bloginfo('template_directory'); ?>/images/img-item-02-02.webp" alt=""/>
		<div class="bg"></div>
		<img class="img-03" data-aos="fade-up-left" data-aos-delay="600" data-aos-anchor="#trigger-02" src="<?php bloginfo('template_directory'); ?>/images/img-item-02-03.webp" alt=""/>
		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-02"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-02.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-02" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-02.webp" alt=""/>
		<img class="img-05" data-aos="fade-right" data-aos-delay="200" data-aos-anchor="#trigger-02" src="<?php bloginfo('template_directory'); ?>/images/img-item-02-05.webp" alt=""/>
		<img class="img-04" data-aos="fade-up" data-aos-delay="1000" data-aos-anchor="#trigger-02" src="<?php bloginfo('template_directory'); ?>/images/img-item-02-04.webp" alt=""/>
	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf02 = get_field( 'pf02' );
			if ( $pf02 ): ?>
			<?php echo '<h2>' . $pf02['heading'] . '</h2>'; ?>
			<?php echo '' . $pf02['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf02['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf02['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf02['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf02['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf02['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>



<div class="divider">
	<div class="icon"></div>
</div>
<section class="fume pf-03 odd">
	<div class="content">
	<div class="trigger" id="trigger-03"></div>
	<div class="block image">
		<div class="border"></div>
		<div class="bg"></div>


		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-03"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-03.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-03" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-03.webp" alt=""/>
		<img class="img-01" data-aos="zoom-in" data-aos-delay="400" data-aos-anchor="#trigger-03" src="<?php bloginfo('template_directory'); ?>/images/img-item-03-01.webp" alt=""/>
		<img class="img-02" data-aos="fade-up" data-aos-delay="1000" data-aos-anchor="#trigger-03" src="<?php bloginfo('template_directory'); ?>/images/img-item-03-02.webp" alt=""/>
		<img class="img-04" data-aos="fade-down" data-aos-delay="600" data-aos-anchor="#trigger-03" src="<?php bloginfo('template_directory'); ?>/images/img-item-03-04.webp" alt=""/>
		<img class="img-03" data-aos="zoom-in" data-aos-delay="800" data-aos-anchor="#trigger-03" src="<?php bloginfo('template_directory'); ?>/images/img-item-03-03.webp" alt=""/>
		<img class="img-05" data-aos="fade-in" data-aos-delay="200" data-aos-anchor="#trigger-03" src="<?php bloginfo('template_directory'); ?>/images/img-item-03-05.webp" alt=""/>

	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf03 = get_field( 'pf03' );
			if ( $pf03 ): ?>
			<?php echo '<h2>' . $pf03['heading'] . '</h2>'; ?>
			<?php echo '' . $pf03['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf03['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf03['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf03['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf03['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf03['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>



<div class="divider">
	<div class="icon"></div>
</div>
<section class="fume pf-04">
	<div class="content">
	<div class="trigger" id="trigger-04"></div>
	<div class="block image">
		<div class="border"></div>
		<img class="img-01" data-aos="fade-up-right" data-aos-delay="200" data-aos-anchor="#trigger-04" src="<?php bloginfo('template_directory'); ?>/images/img-item-04-01.webp" alt=""/>
		<div class="bg"></div>
		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-04"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-04.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-04" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-04.webp" alt=""/>

		<img class="img-02" data-aos="zoom-in" data-aos-delay="600" data-aos-anchor="#trigger-04" src="<?php bloginfo('template_directory'); ?>/images/img-item-04-02.webp" alt=""/>
		<img class="img-03" data-aos="fade-down-right" data-aos-delay="400" data-aos-anchor="#trigger-04" src="<?php bloginfo('template_directory'); ?>/images/img-item-04-03.webp" alt=""/>
	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf04 = get_field( 'pf04' );
			if ( $pf04 ): ?>
			<?php echo '<h2>' . $pf04['heading'] . '</h2>'; ?>
			<?php echo '' . $pf04['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf04['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf04['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf04['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf04['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf04['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>



<div class="divider">
	<div class="icon"></div>
</div>
<section class="fume pf-05 odd">
	<div class="content">
	<div class="trigger" id="trigger-05"></div>
	<div class="block image">
		<div class="border"></div>
		<img class="img-01" data-aos="fade-up-left" data-aos-delay="200" data-aos-anchor="#trigger-05" src="<?php bloginfo('template_directory'); ?>/images/img-item-05-01.webp" alt=""/>
		<img class="img-02" data-aos="fade-up-right" data-aos-delay="400" data-aos-anchor="#trigger-05" src="<?php bloginfo('template_directory'); ?>/images/img-item-05-02.webp" alt=""/>
		<div class="bg"></div>
		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-05"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-05.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-05" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-05.webp" alt=""/>
		<img class="img-03" data-aos="fade-down" data-aos-delay="600" data-aos-anchor="#trigger-05" src="<?php bloginfo('template_directory'); ?>/images/img-item-05-03.webp" alt=""/>
		<img class="img-05" data-aos="zoom-in" data-aos-delay="800" data-aos-anchor="#trigger-05" src="<?php bloginfo('template_directory'); ?>/images/img-item-05-05.webp" alt=""/>
		<img class="img-04" data-aos="zoom-in" data-aos-delay="1000" data-aos-anchor="#trigger-05" src="<?php bloginfo('template_directory'); ?>/images/img-item-05-04.webp" alt=""/>
	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf05 = get_field( 'pf05' );
			if ( $pf05 ): ?>
			<?php echo '<h2>' . $pf05['heading'] . '</h2>'; ?>
			<?php echo '' . $pf05['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf05['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf05['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf05['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf05['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf05['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>	
</section>



<div class="divider">
	<div class="icon"></div>
</div>
<section class="fume pf-06">
	<div class="content">
	<div class="trigger" id="trigger-06"></div>
	<div class="block image">
		<div class="border"></div>
		<img class="img-01" data-aos="fade-up-right" data-aos-delay="200" data-aos-anchor="#trigger-06" src="<?php bloginfo('template_directory'); ?>/images/img-item-06-01.webp" alt=""/>
		<div class="bg"></div>
		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-06"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-06.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-06" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-06.webp" alt=""/>
		<img class="img-02" data-aos="zoom-in" data-aos-delay="600" data-aos-anchor="#trigger-06" src="<?php bloginfo('template_directory'); ?>/images/img-item-06-02.webp" alt=""/>
		<img class="img-04" data-aos="fade-down-right" data-aos-delay="400" data-aos-anchor="#trigger-06" src="<?php bloginfo('template_directory'); ?>/images/img-item-06-04.webp" alt=""/>
		<img class="img-03" data-aos="zoom-in" data-aos-delay="800" data-aos-anchor="#trigger-06" src="<?php bloginfo('template_directory'); ?>/images/img-item-06-03.webp" alt=""/>
	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf06 = get_field( 'pf06' );
			if ( $pf06 ): ?>
			<?php echo '<h2>' . $pf06['heading'] . '</h2>'; ?>
			<?php echo '' . $pf06['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf06['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf06['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf06['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf06['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf06['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>



<div class="divider">
	<div class="icon"></div>
</div>
<section class="fume pf-07 odd">
	<div class="content">
	<div class="trigger" id="trigger-07"></div>
	<div class="block image">
		<div class="border"></div>
		<div class="bg"></div>
		<img class="img-01" data-aos="fade-up" data-aos-delay="200" data-aos-anchor="#trigger-07" src="<?php bloginfo('template_directory'); ?>/images/img-item-07-01.webp" alt=""/>
		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-07"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-07.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-07" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-07.webp" alt=""/>
		<img class="img-02" data-aos="fade-up" data-aos-delay="800" data-aos-anchor="#trigger-07" src="<?php bloginfo('template_directory'); ?>/images/img-item-07-02.webp" alt=""/>
		<img class="img-03" data-aos="zoom-in" data-aos-delay="600" data-aos-anchor="#trigger-07" src="<?php bloginfo('template_directory'); ?>/images/img-item-07-03.webp" alt=""/>
		<img class="img-04" data-aos="zoom-in" data-aos-delay="400" data-aos-anchor="#trigger-07" src="<?php bloginfo('template_directory'); ?>/images/img-item-07-04.webp" alt=""/>
	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf07 = get_field( 'pf07' );
			if ( $pf07 ): ?>
			<?php echo '<h2>' . $pf07['heading'] . '</h2>'; ?>
			<?php echo '' . $pf07['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf07['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf07['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf07['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf07['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf07['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>



<div class="divider">
	<div class="icon"></div>
</div>
<section class="fume pf-08">
	<div class="content">
	<div class="trigger" id="trigger-08"></div>
	<div class="block image">
		<div class="border"></div>
		<div class="bg"></div>
		<img class="img-01" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor="#trigger-08" src="<?php bloginfo('template_directory'); ?>/images/img-item-08-01.webp" alt=""/>
		<img class="img-03" data-aos="fade-down-left" data-aos-delay="400" data-aos-anchor="#trigger-08" src="<?php bloginfo('template_directory'); ?>/images/img-item-08-03.webp" alt=""/>
		<img class="img-02" data-aos="zoom-in" data-aos-delay="600" data-aos-anchor="#trigger-08" src="<?php bloginfo('template_directory'); ?>/images/img-item-08-02.webp" alt=""/>
		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-08"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-08.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-08" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-08.webp" alt=""/>
	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf08 = get_field( 'pf08' );
			if ( $pf08 ): ?>
			<?php echo '<h2>' . $pf08['heading'] . '</h2>'; ?>
			<?php echo '' . $pf08['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf08['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf08['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf08['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf08['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf08['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>



<div class="divider">
	<div class="icon"></div>
</div>
<section class="fume pf-09 odd">
	<div class="content">
	<div class="trigger" id="trigger-09"></div>
	<div class="block image">
		<div class="border"></div>
		<div class="bg"></div>
		<img class="img-01" data-aos="zoom-in" data-aos-delay="200" data-aos-anchor="#trigger-09" src="<?php bloginfo('template_directory'); ?>/images/img-item-09-01.webp" alt=""/>
		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-09"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-09.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-09" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-09.webp" alt=""/>
		<img class="img-04" data-aos="fade-down" data-aos-delay="400" data-aos-anchor="#trigger-09" src="<?php bloginfo('template_directory'); ?>/images/img-item-09-04.webp" alt=""/>
		<img class="img-03" data-aos="zoom-in" data-aos-delay="600" data-aos-anchor="#trigger-09" src="<?php bloginfo('template_directory'); ?>/images/img-item-09-03.webp" alt=""/>
		<img class="img-02" data-aos="fade-down-left" data-aos-delay="800" data-aos-anchor="#trigger-09" src="<?php bloginfo('template_directory'); ?>/images/img-item-09-02.webp" alt=""/>
	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf09 = get_field( 'pf09' );
			if ( $pf09 ): ?>
			<?php echo '<h2>' . $pf09['heading'] . '</h2>'; ?>
			<?php echo '' . $pf09['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf09['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf09['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf09['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf09['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf09['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>



<div class="divider">
	<div class="icon"></div>
</div>
<section class="fume pf-10">
	<div class="content">
	<div class="trigger" id="trigger-10"></div>
	<div class="block image">
		<div class="border"></div>
		<img class="img-01" data-aos="fade-up-right" data-aos-delay="200" data-aos-anchor="#trigger-10" src="<?php bloginfo('template_directory'); ?>/images/img-item-10-01.webp" alt=""/>
		<div class="bg"></div>
		<img class="img-02" data-aos="zoom-in" data-aos-delay="400" data-aos-anchor="#trigger-10" src="<?php bloginfo('template_directory'); ?>/images/img-item-10-02.webp" alt=""/>
		<div class="shadow" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-10"><img src="<?php bloginfo('template_directory'); ?>/images/img-bottle-10.webp" alt=""/>
		</div>
		<img class="bottle" data-aos="zoom-in" data-aos-delay="0" data-aos-anchor="#trigger-10" src="<?php bloginfo('template_directory'); ?>/images/img-bottle-10.webp" alt=""/>
		<img class="img-03" data-aos="zoom-in" data-aos-delay="600" data-aos-anchor="#trigger-10" src="<?php bloginfo('template_directory'); ?>/images/img-item-10-03.webp" alt=""/>
	</div>
	<div class="block data">
		<div class="info">
			<?php
			$pf10 = get_field( 'pf10' );
			if ( $pf10 ): ?>
			<?php echo '<h2>' . $pf10['heading'] . '</h2>'; ?>
			<?php echo '' . $pf10['para'] . ''; ?>
			<?php echo '<div class="tabs">'; ?>
			<?php echo '<ul class="tab-list">'; ?>
			<?php echo '<li class="tab">Top Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Middle Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '<li class="tab">Base Notes <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></li>'; ?>
			<?php echo '</ul>'; ?>
			<?php echo '<div class="tab-content">'; ?>
			<?php echo '<div class="tab-pane">' . $pf10['tab-01'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf10['tab-02'] . '</div>'; ?>
			<?php echo '<div class="tab-pane">' . $pf10['tab-03'] . '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '</div>'; ?>
			<?php echo '<h4>' . $pf10['consumer'] . '</h4>'; ?>
			<?php echo '<p><a class="button" href="' . $pf10['button'] . '">Order Now <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 23 23"><path d="M14.8 11.5c-1.1-.9-2.2-1.8-3.2-2.8C9.3 6.8 7.1 4.9 4.8 3c-.4-.4-.7-.9-.6-1.5.1-.6.4-1.1 1-1.3.6-.3 1.2-.2 1.7.2.8.7 1.7 1.4 2.5 2.1 2.9 2.5 5.9 5.1 8.8 7.6.5.5.9 1 .7 1.7-.1.3-.3.7-.6.9-3.8 3.3-7.6 6.6-11.5 9.8-.7.6-1.7.5-2.3-.2-.6-.7-.5-1.7.3-2.3 3.2-2.8 6.5-5.5 9.7-8.3 0 0 .1-.1.3-.2z"/></svg></a></p>'; ?>
			<?php endif; ?>
		</div>
	</div>
	</div>
</section>



<?php get_footer(); ?>