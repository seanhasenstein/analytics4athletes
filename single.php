<?php get_header(); ?>

  <section class="single-post">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-md-offset-1 col-sm-3 profile">
          <p>Written by:</p>
          <img src="<?php bloginfo('template_directory'); ?>/images/phil.png" alt="Phil Leibham">
          <h3>Phil Leibham</p>
          <h4>Founder</h4>
        </div>
        <div class="col-md-7 col-sm-9 post">
          <h2 class="title"><?php the_title(); ?></h2>
          <h3 class="date"><?php the_time('F j\<\s\u\p\>S\<\/\s\u\p\>, Y'); ?></h3>
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                         
            <?php the_content(); ?>

          <?php endwhile; endif; wp_reset_postdata(); ?>



        </div>
      </div>
      <div class="row">
        <div class="col-md-7 col-md-offset-3 recent-posts">
          <h2>Recent Posts:</h2>
 
            <?php
            $args = array(
                'posts_per_page' => 3,
                'order' => 'DESC',
                'post__not_in' => array( $post->ID )
            );

            $rp = new WP_Query( $args );

            if($rp->have_posts()) :
                while($rp->have_posts()) : $rp->the_post(); ?>

                  <div class="single-recent-post">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></p></h3>
                    <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
                    <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/phil.png" alt="Phil Leibham"></a>
                    <div class="profile">
                      <p class="name"><a href="<?php the_permalink(); ?>">Phil Leibham</a></p>
                      <p>|</p>
                      <h4><a href="<?php the_permalink(); ?>"><?php the_time('j F Y'); ?></a></h4>
                    </div>
                  </div>

                <?php endwhile; 
                wp_reset_postdata();

            endif; ?>

        </div>
      </div>
    </div>
  </section>

<?php get_footer (); ?>