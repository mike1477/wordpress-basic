<?php get_header(); ?>
      <div class="pag">
        <span class="text-right"><?php next_posts_link(); ?></span>
        <span class="text-left"><?php previous_posts_link(); ?></span>
      </div>
      <section class="posts">
        <h1>INDEX.PHP</h1>

        <!-- Post Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/posts/content', get_post_format() ); ?>

        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </section>
      <?php get_sidebar(); ?>

<?php get_footer(); ?>
