<?php get_header(); ?>

  <section class="product">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <div class="single-product-examples">

          	<div class="text-center">
          		<h2><?php the_title(); ?></h2>
          		<h3><?php the_time('F j\<\s\u\p\>S\<\/\s\u\p\>, Y'); ?></h3>
          	</div>

			<img src="<?php the_field('product_image'); ?>" alt="" />

          </div>

        </div>
      </div>
    </div>
  </section>

<?php get_footer (); ?>