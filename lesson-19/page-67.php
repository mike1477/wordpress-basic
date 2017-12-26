<?php get_header(); ?>
      <section class="page-about">
        <h1>PAGE-ABOUT.PHP</h1>

        <!-- Post Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h4>This is my custom about page.</h4>

        <?php the_content(); ?>

        <h4>This is my custom about page.</h4>
        <h4>This is my custom about page.</h4>

        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </section>
      <?php get_sidebar(); ?>

<?php get_footer(); ?>
