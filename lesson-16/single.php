<?php get_header(); ?>
      <div class="pag">
        <span class="text-right"><?php next_post_link(); ?></span>
        <span class="text-left"><?php previous_post_link(); ?></span>
      </div>
      <section class="single-post">
        <h1>SINGLE.PHP</h1>
        <!-- Post Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php if(has_post_thumbnail()) : ?>
            <div>
              <?php the_post_thumbnail() ?>
            </div>

          <?php endif; ?>

          <?php the_title('<h3>', '</h3>'); ?>

          <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

         	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


         	<!-- Display the Post's content in a div box. -->

         	<div class="entry">
         		<?php the_content(); ?>
         	</div>


          <!-- Display a comma separated list of the Post's Categories. -->

        	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>

          <?php // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;  ?>



        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </section>
      <?php get_sidebar(); ?>

  <?php get_footer(); ?>
