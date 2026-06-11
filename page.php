<?php get_header('default'); ?>
<section class="default">
		<div class="content">	
		<div class="clear"></div>
		<h1><?php the_title();?></h1>	
		<?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
		<div class="page" id="post-<?php the_ID(); ?>">
		<?php the_content(); ?>
		</div>
		<?php endwhile;?>
		<?php else : ?>
		<h2>
		<?php _e('No Content Found'); ?>
		</h2>
		<?php endif;?>		
		</div>
</section>
<?php get_footer(); ?>