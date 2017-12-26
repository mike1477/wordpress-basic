<?php get_header(); ?>
      <section class="category">
        <h1>CATEGORY.PHP</h1>

        <div><strong><?php single_cat_title('Currently browsing'); ?>
        </strong>: <?php echo category_description(); ?></div>


        <!-- Post Loop -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h4>', '</h4>'); ?></a>

          <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

         	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <ul>
          <?php wp_list_categories( array(
              'orderby'    => 'name',
              'show_count' => true,
              'exclude'    => array( 10 )
          ) ); ?>
      </ul>

      </section>

<?php get_footer(); ?>
