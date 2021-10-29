<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package test02
 */

get_header();
?>
<h1 style="text-align: center; padding: 40px 0;">お探しのページは見つかりません。
<strong style="font-size: 40px; margin-top: 60px; display: block;">404 Not Found</strong>
<br>
<br>
<a href="<?php echo home_url();?>">TOP</a>
</h1>
<?php
get_footer();
