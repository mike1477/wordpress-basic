<section class = "content-aside">
  <h2>CONTENT-ASIDE.PHP</h2>

  <?php if(has_post_thumbnail()) : ?>
    <div class="thumbnail-aside">
      <?php the_post_thumbnail('thumbnail') ?>
    </div>

  <?php endif; ?>

  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h3>', '</h3>'); ?></a>


  <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

  <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


  <!-- Display the Post's content in a div box. -->

  <div class="entry-aside">
    <?php the_excerpt(); ?>
  </div>


</section>
