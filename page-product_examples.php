<?php
/*
Template Name: Product Examples
*/
?>

<?php get_header(); ?>

  <section class="product">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

          <div class="product-examples">

          	<div class="text-center">
          		<h2>Product Examples</h2>
          	</div>

			<?php 
			 $labels = new WP_Query(array(
			  'posts_per_page' => 1000,
			  'post_type' => 'product_example'
			  )); 
			 while ( $labels->have_posts() ) : 
			 $labels->the_post();
			?>

			<a href="#myModal-<? the_ID(); ?>" data-toggle="modal" class="post-thumb">
			  <img src="<?php the_field('product_image'); ?>" alt="" />
			  <span>
			    <h3><?php the_title(); ?></h3>
			    <p class="timestamp"><?php the_time('F j, Y'); ?></p>
			    <p class="excerpt"><?php the_field('product_excerpt'); ?></p>
			    <p class="view">View Sheet<i class="fa fa-angle-right" aria-hidden="true"></i></p>
			  </span>
			</a>

			<div id="myModal-<? the_ID(); ?>" class="modal fade" data-keyboard="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<div class="modal-body">
							<div class="row">
								<!-- <h4><?php the_title(); ?></h4> -->
								<!-- <p><?php the_time('F j, Y'); ?></p> -->
								<img src="<?php the_field('product_image'); ?>" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php endwhile; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer (); ?>