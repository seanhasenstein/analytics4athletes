<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

    <section class="contact">
      <div class="contact-header">
      </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1>Contact</h1>
          <?php gravity_form(1, false, false, false, '', true, 12); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer (); ?>