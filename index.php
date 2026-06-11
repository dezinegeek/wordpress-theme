<?php get_header(); ?>
<section class="banner-wrapper">
		<div class="content">
			<div class="cat-slider"><?php masterslider(1); ?></div>
			<div class="cat-banners">
			<?php
		$banner01 = get_field( 'cat_banner_01' );
		if ( $banner01 ): ?>
			<?php echo '<div class="banner ban-01" style="background-image:url(' . $banner01['banner_image'] . ')">'; ?>	
			<?php echo '<div class="button"><a href="' . $banner01['banner_link'] . '">' . $banner01['link_text'] . '</a></div></div>'; ?>
			<?php endif; ?>
			<?php
		$banner02 = get_field( 'cat_banner_02' );
		if ( $banner02 ): ?>
			<?php echo '<div class="banner ban-02" style="background-image:url(' . $banner02['banner_image'] . ')">'; ?>	
			<?php echo '<div class="button"><a href="' . $banner02['banner_link'] . '">' . $banner02['link_text'] . '</a></div></div>'; ?>
			<?php endif; ?>		
				
				</div>
			</div>
		</div>		
	</section>
	<section class="categories-wrapper">
		<div class="content">
		<h3>Featured Categories</h3>
			<div class="col">
			<?php
		$featured_category_01 = get_field( 'featured_category_01' );
		if ( $featured_category_01 ): ?>
			<?php echo '<div class="block" style="background-image:url(' . $featured_category_01['cat_image'] . ')">'; ?>
			<?php echo '<a href="' . $featured_category_01['cat_url'] . '">'; ?>	
			<?php echo '<span>' . $featured_category_01['cat_name'] . '</span></a></div>'; ?>
			<?php endif; ?>
			<?php
		$featured_category_02 = get_field( 'featured_category_02' );
		if ( $featured_category_02 ): ?>
			<?php echo '<div class="block" style="background-image:url(' . $featured_category_02['cat_image'] . ')">'; ?>
			<?php echo '<a href="' . $featured_category_02['cat_url'] . '">'; ?>	
			<?php echo '<span>' . $featured_category_02['cat_name'] . '</span></a></div>'; ?>
			<?php endif; ?>	
			<?php
		$featured_category_03 = get_field( 'featured_category_03' );
		if ( $featured_category_03 ): ?>
			<?php echo '<div class="block" style="background-image:url(' . $featured_category_03['cat_image'] . ')">'; ?>
			<?php echo '<a href="' . $featured_category_03['cat_url'] . '">'; ?>	
			<?php echo '<span>' . $featured_category_03['cat_name'] . '</span></a></div>'; ?>				
			<?php endif; ?>
			</div>	
		</div>
	</section>
	<section class="products-wrapper">
		<div class="content">
		<h3>Recent Products</h3>
			
			<div class="col">
				<?php if(have_posts()):?>
  <?php while(have_posts()):the_post();?>
  <div class="block" id="post-<?php the_ID(); ?>">
      <div class="image"><?php the_post_thumbnail(); ?></div>
  	<h4>
      <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title();?></a>
    </h4>
    <?php the_excerpt(); ?>
	  <div class="button"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>">Read More <i class="fas fa-arrow-circle-right"></i></a></div>
  </div>
  <?php endwhile;?>

		
			</div>
  <?php posts_nav_link(' · ', '<i class="fas fa-arrow-circle-left"></i> Previous ', 'Next <i class="fas fa-arrow-circle-right"></i>'); ?>
   <?php else : ?>
  <h2>
    <?php _e('No Post Found'); ?>
  </h2>
  <?php endif;?>
		</div>
		</div>
	</section>
	<section class="banner-cat-wrapper">
		<?php
		$banner = get_field( 'banner' );
		if ( $banner ): ?>
			<?php echo '<div class="content" style="background-image:url(' . $banner['banner_image'] . ')">'; ?>
			<?php echo '<div class="data">' . $banner['banner_content'] . '</div></div>'; ?>				
		<?php endif; ?>
	</section>
	<section class="welcome-wrapper">
			<?php if(get_field('about_us')) { echo '<div class="content">'. get_field('about_us') . '</div>' ; } ?>
		
	</section>
<?php get_footer(); ?>