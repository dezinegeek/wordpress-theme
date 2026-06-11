<?php get_header(); ?>
<section class="default">
		<div class="content">	
		<div class="clear"></div>
		<h1><?php the_title();?></h1>	
		<?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
		<div class="block" id="post-<?php the_ID(); ?>">
	  <div class="image"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
  	<h2>
      <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title();?></a>
    </h2>
    <?php the_excerpt(); ?>
	  <div class="button"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>">More Info</a></div>
  </div>
		<?php endwhile;?>
			<div class="pagination">	
<?php wp_pagenavi(); ?>	
</div>
		<?php else : ?>
		<h2>
		<?php _e('No Content Found'); ?>
		</h2>
		<?php endif;?>		
		</div>
</section>
<?php get_footer(); ?>