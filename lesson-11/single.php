<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="description" content="<?php bloginfo('description')?>">

    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
      <header>
        <h1><?php bloginfo('name')?></h1>
        <p><?php bloginfo('description')?></p>
      </header>
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



        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </section>
      <footer>
        year
      </footer>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
