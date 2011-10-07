<?php get_header(); ?>
<section id="main">
	<section id="content">
	<?php if (have_posts()) : ?>
	
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		
		<?php if (is_category()) { ?>				
			<h1><?php echo single_cat_title(); ?></h1>
			
		<?php } elseif( is_tag() ) { ?>
			<h1>Posts Tagged: <?php single_tag_title(); ?></h1>
			
		<?php }elseif (is_day()) { ?>
			<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
			
		<?php }elseif (is_month()) { ?>
			<h1>Archive for <?php the_time('F, Y'); ?></h1>
			
		<?php }elseif (is_year()) { ?>
			<h1>Archive for <?php the_time('Y'); ?></h1>
			
		<?php } elseif (is_search()) { ?>
			<h1>Search Results</h1>
			
		<?php } elseif (is_author()) { ?>
			<h1>Author Archive</h1>
			
		<?php }elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
			
		<?php } ?>
	
	<?php while (have_posts()) : the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		 	<?php the_content(__('Read more'));?>
				
			<?php get_template_part('inc/meta'); ?>
		</article>
	
	  <?php comments_template(); ?>
	  <?php endwhile; else: ?>
			
		  <p>Sorry, seems like there aren't any posts.</p>
		
	  <?php endif; ?>
	  <?php get_template_part('inc/nav'); ?>
		  
	</section>

<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>