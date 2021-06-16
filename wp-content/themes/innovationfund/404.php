<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package innovationfund
 */

get_header();
?>

	<div class="col-12 col-md-6 mx-auto p-5">
    <div class="text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/404.svg" alt="" height="300">
        <h2 class="display-4 mt-3">PAGE NOT FOUND</h2>
    </div>
</div>


<?php
get_footer();
