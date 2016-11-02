<?php
/*
Template Name: Product Examples
*/
?>

<?php get_header(); ?>

<div class="product-examples-header">
	<h2>Product Examples</h2>
</div>

 <section class="product">
    <div class="container">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1 col-sm-12">
		        <div class="product-examples">
		          	
					<?php
					 $labels = new WP_Query(array(
					  'posts_per_page' => 1000,
					  'post_type' => 'product_example'
					  )); 
					 while ( $labels->have_posts() ) : 
					 $labels->the_post();
					?>

						<div class="single-product-example">
							<div class="product-img">
								<h3><?php the_title(); ?></h3>
								<img src="<?php the_field('product_image'); ?>" alt="" />
							</div>
							<div class="product-details">
								<h3><?php the_title(); ?></h3>
								<p class="timestamp"><?php the_time('j F Y'); ?></p>
								<p class="excerpt"><?php the_field('product_excerpt'); ?></p>
								<!-- <p class="excerpt"><?php echo wp_trim_words(get_field('product_excerpt'), 30, '...' ); ?></p> -->
								<a href="#myModal-<? the_ID(); ?>" data-toggle="modal" class="post-thumb">View Example<i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div> <!-- end div.product-details -->
						</div> <!-- end div.single-product-example -->

						<div id="myModal-<? the_ID(); ?>" class="modal fade" data-keyboard="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<div class="modal-body">
										<div class="row">
											<!-- <h4><?php the_title(); ?></h4> -->
											<!-- <p><?php the_time('F j, Y'); ?></p> -->
											<div class="text-center">
												<img src="<?php the_field('product_image'); ?>" alt="" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; ?>

				</div> <!-- end div.product-examples -->
			</div> <!-- end div.col-sm-10 col-sm-offset-1 -->
		</div> <!-- end div.row -->
	</div> <!-- end div.container -->
</section> <!-- end section.product -->

<?php get_footer (); ?>






