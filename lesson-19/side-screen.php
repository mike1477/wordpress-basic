<?php /* Template Name: Sidebar Template */ ?>
<?php get_header(); ?>
      <section class="side-screen">
        <h1>SIDE-SCREEN.PHP</h1>

        <!-- Post Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </section>
 <?php get_sidebar(); ?>
<?php get_footer(); ?>
