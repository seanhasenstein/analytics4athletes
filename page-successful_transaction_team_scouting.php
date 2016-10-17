<?php
/*
Template Name: Successful Transaction - Team Scouting
*/
?>

<?php get_header(); ?>

  <section class="confirmation-page">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-10 col-lg-offset-1">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                         
            <?php the_content(); ?>
            
          <?php endwhile; endif; ?>

        </div>
      </div>
    </div>
  </section>

<?php get_footer (); ?>