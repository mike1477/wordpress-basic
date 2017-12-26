<section class = "content">
  <h2>CONTENT.PHP</h2>
  <?php if(has_post_thumbnail()) : ?>
    <div class="thumbnail">
      <?php the_post_thumbnail() ?>
    </div>

  <?php endif; ?>

  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h3>', '</h3>'); ?></a>

  <?php the_permalink(); ?>

  <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

  <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


  <!-- Display the Post's content in a div box. -->

  <div class="entry">
    <?php the_excerpt(); ?>
  </div>


  <!-- Display a comma separated list of the Post's Categories. -->

  <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>



</section>
