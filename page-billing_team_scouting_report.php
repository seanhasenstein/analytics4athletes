<?php
/*
Template Name: Team Scouting Report Billing
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
              <h3>Team Scouting Report</h3>
              <h4>$150 / $200</h4>
              <img src="<?php bloginfo('template_directory'); ?>/images/team_scouting_report_small.jpg">
            </div>
          </div>
          <?php gravity_form(4, false, false, false, '', true, 12); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer (); ?>