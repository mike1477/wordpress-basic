<div class="sidebar sidebar-template-side">
  <h1>SIDEBAR.PHP</h1>
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <ul id="sidebar">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </ul>
<?php endif; ?>
</div>
