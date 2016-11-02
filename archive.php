<?php
/*
Template Name: Archives
*/
get_header(); ?>

<div class="blog-header">
	<h2>Analytics4Athletes Blog</h2>
</div>
<div class="container">
	<div class="row">
	    <div class="col-md-7 col-md-offset-3 col-sm-10 col-sm-offset-1 blog-posts">

			<?php
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			$args = array(
			    'posts_per_page' => 2,
			    'order' => 'DESC',
			    'paged' => $paged,
			    //'post__not_in' => array( $post->ID )
			);

			$rp = new WP_Query( $args );

			if($rp->have_posts()) :
			    while($rp->have_posts()) : $rp->the_post(); ?>

			      <div class="single-post">
			      	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></p></h3>
			        <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
			        <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/phil.png" alt="Phil Leibham"></a>
			      	<div class="profile">
			      		<p class="name"><a href="<?php the_permalink(); ?>">Phil Leibham</a></p>
			      		<p>|</p>
			        	<h4><a href="<?php the_permalink(); ?>"><?php the_time('j F Y'); ?></a></h4>
			        </div>
			      </div>

			    <?php endwhile; ?>

				<?php if ($rp->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
					
				  <nav class="prev-next-posts">
				    <div class="prev-posts-link">
				      <?php echo get_next_posts_link( '<div class="older"><i class="fa fa-angle-double-left" aria-hidden="true"></i>Older Posts</div>', $rp->max_num_pages ); // display older posts link ?>
				    </div>
				    <div class="next-posts-link">
				      <?php echo get_previous_posts_link( '<div class="newer">Newer Posts<i class="fa fa-angle-double-right" aria-hidden="true"></i></div>' ); // display newer posts link ?>
				    </div>
				  </nav>

				<?php } ?>

				<?php else: ?>
				  <article class="sorry">
				    <h1>Sorry...</h1>
				    <p><?php _e('<p>Sorry, no posts matched your criteria.</p><a href="http://localhost/wp_analytics4athletes/blog">Back to Blog Home<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>'); ?></p>
				  </article>
				<?php endif; ?> 

        </div>
    </div>

</div><!-- #container -->

<?php get_footer(); ?>