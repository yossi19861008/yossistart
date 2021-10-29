<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test02
 */

?>
</div><!-- #page -->
<footer>
  <?php if(is_page('about')) :?>
  <h1>about</h1>
  <?php endif;?>
</footer>
<?php wp_footer(); ?>

</body>
</html>
