<?php get_header(); ?>

 <?php the_posts_pagination(); ?> 
      <section class="archive">
        <h1>ARCHIVE.PHP</h1>

        <?php
           the_archive_title( '<h2 class="page-title">', '</h2>' );
           the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>


        <!-- Post Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h4>', '</h4>'); ?></a>

          <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

         	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </section>

<?php get_footer(); ?>
