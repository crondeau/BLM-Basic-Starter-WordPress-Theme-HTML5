<?php
/**
 * This template gerates the links to previous and next posts on the single template
 *
 * @package blm_basic
 */
?>

<nav class="post-navigation">
	<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&laquo;</span> Older Posts', 0 ) ); ?></div>
	<div class="nav-next"><?php previous_posts_link( __( 'Newer Posts <span class="meta-nav">&raquo;</span>', 0 ) ); ?></div>
</nav>