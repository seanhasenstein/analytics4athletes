<?php
/*
Template Name: Player Development Billing
*/
?>

<?php get_header(); ?>

  <section class="product checkout">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
          <div class="product-name">
            <h1>Product</h1>
            <div class="inner">
              <h3>Player Development Sheet</h3>
              <h4>$150 / $200</h4>
              <img src="<?php bloginfo('template_directory'); ?>/images/player_development_small.jpg">
            </div>
          </div>
          <?php gravity_form(3, false, false, false, '', true, 12); ?>
          </script>
        </div>
      </div>
    </div>
  </section>

<?php get_footer (); ?>