<?php

/**
Template Name: about
 */
  get_header();
?>
  <div class="inner">
    <ul class="pan">
    <?php 
    $home = get_bloginfo('url');
    if ( is_page() ):?>
      <li><a href="<?php echo $home;?>">HOME</a></li>
      <li><a href=""><?php echo the_title();?></a></li>
    <?php endif;?>
  </ul>
  </div>
<div class="inner">
  <h1>aboutpageaa</h1>
</div>

<?php
get_footer();