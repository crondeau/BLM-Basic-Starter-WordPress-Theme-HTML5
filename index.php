<?php get_header(); ?>
<section id="main">
	<section id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			
			<?php the_content(__('Read more'));?>
				
			<?php get_template_part('inc/meta'); ?>

		</article>
		<?php comments_template(); ?>
	<?php endwhile; else: ?>
	  	<h2>Not found.</h2>
		<p>Sorry, you seem to be looking for something that simply isn’t here.</p>
	<?php endif; ?>
	<?php get_template_part('inc/nav'); ?>
	</section>
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>