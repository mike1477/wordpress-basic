<?php get_header(); ?>
      <section class="front-page">
        <h1>FRONT-PAGE.PHP</h1>

        <!-- Post Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p>This is a cool website.</p>

        <?php the_content(); ?>

        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </section>


<?php get_footer(); ?>
