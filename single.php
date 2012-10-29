<?php
/**
 * The Template for displaying all single posts.
 *
 * @package blm_basic
 */

get_header(); ?>

<div id="main">
	
	<section id="content">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<h1><?php the_title(); ?></h1>
			
			<?php the_content(); ?>
						
			<?php get_template_part( 'inc/meta' ); ?>
			
			<nav class="post-navigation">
				<div class="nav-previous"><?php previous_post_link( '&laquo; %link' ); ?></div>
				<div class="nav-next"><?php next_post_link( '%link &raquo;' ); ?></div>
			</nav>
			
		</article>

	  <?php comments_template(); ?>
	
	  <?php endwhile; endif; ?>
	
	</section>
	
<?php get_sidebar(); ?>

</div><!-- end of main div -->

<?php get_footer(); ?>