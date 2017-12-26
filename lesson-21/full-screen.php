<?php /* Template Name: Fullscreen Template */ ?>
<?php get_header(); ?>
      <section class="full-screen">
        <h1>FULL-SCREEN.PHP</h1>

        <!-- Post Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </section>

<?php get_footer(); ?>
